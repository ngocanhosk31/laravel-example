<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public $data = [];
    public function index()
    {
        $this->data['welcome'] = '<i>hoc lap trinh laravel</i>';
        $this->data['content'] = '<h3>Chuong 1: Nhap mon</h3>
        <p>Kien thuc 1</p>
        <p>Kien thuc 2</p>
        <p>Kien thuc 3</p>';
        return view('layouts.client', $this->data);
    }
}