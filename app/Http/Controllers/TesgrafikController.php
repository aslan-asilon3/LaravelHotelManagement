<?php

namespace App\Http\Controllers;
use Redirect,Response;
use App\Models\User;
use DB;
use Carbon\Carbon;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

use Illuminate\Http\Request;

class TesgrafikController extends Controller
{
    //

    
    public function index(){

        return view('tesgrafik.index');
    }
}
