<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

class CategoriesController extends Controller
{
    //
    public function __construct(Request $request)
    {
        /**
         * Neu la trag danh sach chuyen muc  =>. hien thi ra dong chu: xin chao
         */
        // if ($request->is('categories')) {
        //     echo 'xin chao';
        // }

    }
    // hien thi danh sach
    public function index(Request $request)
    {
        // if (isset($_GET['id'])) {
        //     echo $_GET['id'];
        // }
        // $allDate = $request->all(); //tra ve array
        // echo $allDate['id'];
        // dd($allDate);
        // $path = $request->path();
        // echo $path;
        // $url = $request->url();
        // echo $url;
        //fullUrl thi se lay ca param dang sau
        // $fullUrl = $request->fullUrl();
        // $method = $request->method();
        // echo $method;
        // if ($request->isMethod('get')) {
        //     echo 'phuong thuc get';
        // } else if ($request->isMethod('post')) {
        //     echo 'phuong thuc post';
        // }
        // $ip = $request->ip();
        // echo 'ip la: ' . $ip;
        // $serve = $request->server();
        // print_r($serve);
        // $header = $request->header();
        // dd($header);
        // $id = $request->input('id');
        // echo $id;
        // $input = $request->input();
        // dd($input);
        $id = $request->id;
        dd($id);
        return view('clients/categories/list');
    }
    public function getCategory($id)
    {
        return 'chi tiet chuyen muc: ' . $id;
    }
    public function updateCategory($id)
    {
        return 'Sua chuyen muc: ' . $id;
    }
    //    show form add (GET)
    public function addCategory(Request $request)
    {
        $path = $request->path();
        echo $path;
        return view('clients/categories/add');
    }
    //method post
    public function handleAddCategory(Request $request)
    {
        $allDate = $request->all(); //tra ve array

        // dd($allDate);
        if ($request->isMethod('post')) {
            echo 'phuong thuc post';
        }
        // return 'Submit them chuyen muc: ';
        // return redirect(route('categories.add'));
    }
    public function deleteCategory($id)
    {
        return 'Submit xoa chuyen muc: ' . $id;
    }
}