<?php

declare(strict_types=1);

use Slim\App;
use App\Renders\Home\HomeRender;
use App\Renders\Clients\ClientsRender;
use App\Renders\Contact\ContactRender;
use App\Renders\Education\EducationRender;
use App\Application\Actions\SendEmailAction;
use App\Renders\Experience\ExperienceRender;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        return $response;
    });

    $app->get('/', HomeRender::class);
    $app->get('/clients', ClientsRender::class);
    $app->get('/contact', ContactRender::class);
    $app->get('/education', EducationRender::class);
    $app->get('/experience', ExperienceRender::class);

    $app->post('/contact/send', SendEmailAction::class);
};