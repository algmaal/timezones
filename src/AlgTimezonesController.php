<?php

namespace Algmaal\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AlgTimezonesController extends Controller
{

    public function index($timezone)
    {
        echo Carbon::now($timezone)->toDateTimeString();
    }

}