<?php

declare(strict_types=1);

namespace App\Renders\Experience;

use App\Renders\Render;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class ExperienceRender extends Render
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        return $this->template($response, "experience", "Experience", "pt-br/ExperienceLangs");
    }
}