<?php

declare(strict_types=1);

namespace App\Renders\Clients;

use App\Renders\Render;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class ClientsRender extends Render
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        return $this->template($response, "clients", "Clients", "ClientsLangs");
    }
}