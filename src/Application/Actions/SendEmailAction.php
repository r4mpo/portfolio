<?php

namespace App\Application\Actions;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SendEmailAction
{
    private function sendContactEmail($nome, $email, $assunto, $mensagem): bool
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = config('mail.host');
            $mail->Port = config('mail.port');
            $mail->Username = config('mail.username');
            $mail->Password = config('mail.password');
            $mail->SMTPSecure = config('mail.encryption');

            $mail->setFrom(config('mail.from.address'), config('mail.name'));
            $mail->addAddress(config('mail.from.address'), config('mail.name'));

            $mail->isHTML(true);
            $mail->Subject = renderSubjectMail($assunto);
            $mail->Body = renderBodyMail($nome, $email, $assunto, $mensagem);
            $mail->AltBody = renderAltBodyMail($nome, $email, $assunto, $mensagem);

            $mail->send();
            return true;
        } catch (Exception $e) {
            error_log("Erro ao enviar e-mail: {$mail->ErrorInfo}");
            return false;
        }
    }

    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $data = json_decode((string) $request->getBody(), true);

        if (!isset($data['name'], $data['email'], $data['subject'], $data['message'])) {
            $response->getBody()->write(json_encode([
                'status' => 'error',
                'message' => 'Parâmetros inválidos.'
            ]));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $nome = trim($data['name']);
        $email = trim($data['email']);
        $assunto = trim($data['subject']);
        $mensagem = trim($data['message']);

        $enviado = $this->sendContactEmail($nome, $email, $assunto, $mensagem);

        if ($enviado) {
            $response->getBody()->write(json_encode([
                'status' => 'success',
                'message' => 'E-mail enviado com sucesso!'
            ]));
            return $response->withHeader('Content-Type', 'application/json');
        } else {
            $response->getBody()->write(json_encode([
                'status' => 'error',
                'message' => 'Erro ao enviar o e-mail.'
            ]));
            return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
        }
    }
}
