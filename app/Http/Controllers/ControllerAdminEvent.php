<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class ControllerAdminEvent extends Controller
{
    //
     public function index()
    {
        $events = Event::all();
        return view('back_office/pages/dashboard', compact('events'));
    }
}
