<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __construct()
    {
        // echo 'Khoi dong dashboard';
        // return 'Khoi dong dashboard';
        // thuong su dung session de check login
    }
    public function index()
    {
        return '<h2>Dashboard welcome</h2>';
    }

}