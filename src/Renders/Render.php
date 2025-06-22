<?php declare(strict_types=1);

namespace App\Renders;

use Slim\Psr7\Response;
use Slim\Views\PhpRenderer;

class Render
{
    protected PhpRenderer $view;

    public function __construct(PhpRenderer $view)
    {
        $path = realpath(__DIR__ . '/../../views');

        if ($path === false) {
            throw new \RuntimeException('Diretório de views não encontrado.');
        }

        $this->view = $view;
        $this->view->setTemplatePath($path);
    }

    protected function template(Response $response, $template, $title, $lang): Response
    {
        // Renderizando linguagens da página atual
        $lang = require __DIR__ . '/../Langs/' . $lang . '.php';
        // Linguagens presentes no Header e no Footer
        $langHeader = require __DIR__ . '/../Langs/pt-br/HeaderLangs.php';
        $langFooter = require __DIR__ . '/../Langs/pt-br/FooterLangs.php';

        return $this->view->render($response, $template . '.php', [
            'title' => $title,
            'lang' => $lang,
            'langHeader' => $langHeader,
            'langFooter' => $langFooter
        ]);
    }
}
