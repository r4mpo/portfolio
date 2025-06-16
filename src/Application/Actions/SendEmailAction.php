<?php

namespace App\Application\Actions;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class SendEmailAction
{
    private function sendContactEmail($nome, $email, $assunto, $mensagem): bool
    {
        $mail = new PHPMailer(true);

        try {

            // Looking to send emails in production? Check out our Email API/SMTP product!
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = 'dbbadd15243286';
            $mail->Password = 'e5ad20de66ddaf';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 2525;

            $mail->setFrom('spidersoft@gmail.com.br', 'Spider Soft');
            $mail->addAddress('spidersoft@gmail.com.br', 'Spider Soft');

            $mail->isHTML(true);
            $mail->Subject = "Contato do site: $assunto";
            $mail->Body = "
            <h3>Nova mensagem de contato</h3>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>E-mail:</strong> $email</p>
            <p><strong>Assunto:</strong> $assunto</p>
            <p><strong>Mensagem:</strong><br>$mensagem</p>
        ";

            $mail->AltBody = "Nova mensagem de contato\n\nNome: $nome\nE-mail: $email\nAssunto: $assunto\nMensagem: $mensagem";

            $mail->send();
            return true;

        } catch (Exception $e) {
            error_log("Erro ao enviar e-mail: {$mail->ErrorInfo}");
            return false;
        }
    }

    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $data = json_decode((string)$request->getBody(), true);

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

        // Simulação do envio, substitua pela sua lógica real
        $enviado = true; // ou sua lógica de envio real

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