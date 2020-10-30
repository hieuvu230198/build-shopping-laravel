<?php
namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{

    /**
     * Register the application's response macros.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('unauthorized', function ($message) {
            $json = ['data' => null, 'success' => false, 'message' => $message, 'error_code' => 401];
            return response()->json($json, 400);
        });

        Response::macro('apiRet', function ($data = null, $success = true, $message = null, $errorCode = 200) {
            $json = ['data' => $data, 'success' => $success, 'message' => $message, 'error_code' => $errorCode];
            return response()->json($json, $errorCode);
        });

        Response::macro('apiRetError', function ($message = null, $errorCode = UNKNOWN_EXCEPTION, $status = 400) {
            $json = ['data' => null, 'success' => false, 'message' => $message, 'error_code' => $errorCode];
            return response()->json($json, $status);
        });

        Response::macro('apiValidateError', function ($message) {
            $json = ['data' => null, 'success' => false, 'message' => $message, 'error_code' => ERROR_CODE_VALIDATION];
            return response()->json($json, 400);
        });

        Response::macro('internalError', function ($message = "Server internal error", $errorCode = 500) {
            $json = ['data' => null, 'success' => false, 'message' => $message, 'error_code' => $errorCode];
            return response()->json($json, 500);
        });
    }
}
