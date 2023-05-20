<?php

namespace App\Http\Controllers\Travel;

use App\Http\Controllers\Controller;
use Artisan;
use Illuminate\Http\Request;

class AppArtisanController extends Controller
{
    public function initiate(){
       Artisan::call('optimize:clear');
       Artisan::call('route:clear');
       Artisan::call('cache:clear');
       Artisan::call('view:clear');
       Artisan::call('config:clear');

       return 'application is fully refreshed';
    }
}
