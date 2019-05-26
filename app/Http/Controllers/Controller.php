<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * success response method.
     *
     * @param $result
     * @param $message
     * @param int $code
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result=null, $message=null,$code = 200)
    {
        $response = [
            'success' => true,
        ];
        if ($result !=null)   $response['data']   = $result;
        //  'message' => $message,
        if ($message !=null)$response['message']=$message;
        return response()->json($response, $code);
    }
    /**
     * return error response.
     *
     * @param $error
     * @param array $errorMessages
     * @param int $code
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if(!empty($errorMessages)){
            $response['errors'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
