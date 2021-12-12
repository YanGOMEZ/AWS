<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JsonController extends Controller
{
    public function guzzle(){

        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response;
 
     }
}
