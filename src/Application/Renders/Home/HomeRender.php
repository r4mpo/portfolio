<?php

declare(strict_types=1);

namespace App\Application\Renders\Home;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Views\PhpRenderer;

class HomeRender
{
    protected PhpRenderer $view;

    public function __construct(PhpRenderer $view)
    {
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $lang = require __DIR__ . '/../../Langs/pt-br/HomeLangs.php';

        return $this->view->render($response, 'home.php', [
            'title' => 'Home',
            'lang' => $lang
        ]);
    }
}