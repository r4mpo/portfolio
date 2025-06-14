<?php

declare(strict_types=1);

use Slim\App;
use App\Application\Renders\Home\HomeRender;
use App\Application\Renders\Clients\ClientsRender;
use App\Application\Renders\Contact\ContactRender;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Application\Renders\Education\EducationRender;
use App\Application\Renders\Experience\ExperienceRender;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        return $response;
    });

    $app->get('/', HomeRender::class);
    $app->get('/clients', ClientsRender::class);
    $app->get('/contact', ContactRender::class);
    $app->get('/education', EducationRender::class);
    $app->get('/experience', ExperienceRender::class);
};