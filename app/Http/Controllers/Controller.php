<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    /**
     * @OA\OpenApi(
     *     @OA\Info(
     *         version="1.0.0",
     *         title="My app",
     *         description="This is a services rest api  for the project my app",
     *         termsOfService="http://swagger.io/terms/",
     *         @OA\Contact(
     *             email="davila@appostools.com"
     *         ),
     *         @OA\License(
     *             name="Apache 2.0",
     *             url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *         )
     *     ),
     *     @OA\Server(
     *         description="OpenApi host",
     *         url="http://localhost:8000/api/v1"
     *     )
     * )
     */

    /**
     * @OA\SecurityScheme(
     *   securityScheme="api_key",
     *   type="apiKey",
     *   in="header",
     *   name="Authorization"
     * )
     */
}
