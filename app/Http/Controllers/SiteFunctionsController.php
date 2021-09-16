<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteFunctionsController extends Controller
{
    public function checkDeadLink(Request $request)
    {
        $url = $request->get('url');
        $url = strpos($url, 'http') !== 0 ? "http://$url" : $url;
        $data = $this->getResultFromCurl($url);
        if ($data['http_code'] == 200){
            return response()->json(true);
        }
        if ($data['http_code'] == 0){
            return response()->json(false);
        }
        if ($data['http_code'] == 301){
            return response()->json(false);
        }
//        if ($headers['http_code'] == 200) return response()->json()
//        $status = array();
//        preg_match('/HTTP\/.* ([0-9]+) .*/', curl_exec($ch),$status);
//        if ($status[1] == 200){
//            return response()->json(true);
//        }
//        return response()->json(false);
    }

    private function getResultFromCurl($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        $headers = curl_getinfo($ch);
        curl_close($ch);
        return $headers;
    }
}
