<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //

    function index(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://yts.mx/api/v2/list_movies.json?limit=10',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Cookie: PHPSESSID=vvu7s47s6cj2gn488spu941dag'
    ),
    ));
    $response = curl_exec($curl);

    curl_close($curl);

    $responseDecoded = json_decode($response,TRUE);
    $moviesArray = $responseDecoded['data']['movies'];
    return view('pages.home',compact('moviesArray'));
    }
}
