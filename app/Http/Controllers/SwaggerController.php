<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class SwaggerController extends Controller
{
    /**
     * @OA\Info(
     *     version="1.0.0",
     *     title="Test ECommerce API",
     *     description="L5 Swagger Demo"
     * )
     */

    /**
     * @OA\Get(
     *     path="/api/test",
     *     summary="Test Endpoint",
     *     tags={"Test"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful Test"
     *     )
     * )
     */
    public function test()
    {
        return response()->json(['message' => 'It works!']);
    }
}
