<?php

namespace App\Application\Actions;

use PHPMailer\PHPMailer\Exception;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SetLangAction
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        try {
            // Insere a linguagem na sessão
            $_SESSION['lang'] = $_GET['lang'];
            // Retorno padrão de sucesso
            $response->getBody()->write(json_encode([
                'success' => true,
            ]));
            return $response->withHeader('Content-Type', 'application/json');
        } catch (\Exception $e) {
            // Retorno de erro, com mensagem de exceção
            $response->getBody()->write(json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]));
            return $response->withStatus(500)->withHeader('Content-Type', 'application/json');
        }
    }
}
