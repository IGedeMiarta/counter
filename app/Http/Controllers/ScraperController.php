<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade;

class ScraperController extends Controller
{
    public function index(){
        $url = 'https://www.hargaemas.com/';
        $page =  GoutteFacade::request('GET',$url);
        // echo "<pre>";
        // print_r($page);
        $harga = $page->filter('.price-current')->text();
        $hragaInt = str_replace('.', '', $harga);
        // dd(Int$harga);
        dd($hragaInt);
    }
}
