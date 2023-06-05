<?php

namespace App\Http\Controllers\TravelHavenAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function dashboard(){
        return view('travelAdmin.dashboard');
     }
}
