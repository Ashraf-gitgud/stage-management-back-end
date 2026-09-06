<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    title: 'Stage Management API',
    description: 'REST API for the Stage Management application'
)]
#[OA\Server(
    url: L5_SWAGGER_CONST_HOST,
    description: 'API server'
)]
#[OA\SecurityScheme(
    securityScheme: 'sanctum',
    type: 'http',
    description: 'Enter the Sanctum token from POST /api/login (Bearer {token})',
    scheme: 'bearer',
    bearerFormat: 'Sanctum'
)]
abstract class Controller
{
    //
}
