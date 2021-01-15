<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Support\Collection;

class CovidController extends Controller
{
    public function index(){
        $data = Http::get('https://api.kawalcorona.com/indonesia')->json();
        //$dataprov = collect( Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        //$dataProvinsi = $dataprov->flatten(1);
        //$per_page = 5;
        //$result = (new Collection($dataProvinsi))->paginate($per_page);
        return view('index', ['data'=>$data]);
    }
}
