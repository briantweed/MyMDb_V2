<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;


/**
 * Class BaseController.
 *
 * Base controller for all other controllers.
 *
 * @package App\Http\Controllers
 * @version 1.0.0
 * @author briantweed
 */
abstract class BaseController extends Controller
{

    /**
     * @param string $route
     * @param array $data
     * @return JsonResponse|View|string
     */
    protected function baseResponse(string $route, array $data = [])
    {
        $computedMiddleware = Route::current()->computedMiddleware;
        if (in_array('api', $computedMiddleware)) {
            return response()->json($data, 200);
        }
        return view($route, $data);
    }

}
