<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home() {
        return 'Home';
    }

    public function help() {
        return 'Help';
    }

    public function about() {
        return 'About';
    }
}
