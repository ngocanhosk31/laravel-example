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
        // $idValue = $request->id;
        // dd($idValue);
        // dd($request);
        //tham so thu 2 la gia tri mac dinh neu name null
        // $name = request('name', 'ngoc anh');
        // dd($name);
        // $idValue = $request->query('id');
        // dd($idValue);
        //tra ve array
        $query = $request->query();
        dd($query);
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
        // $path = $request->path();
        // echo $path;
        $cateName = $request->old('category_name');

        return view('clients/categories/add', compact('cateName'));
    }
    //method post
    public function handleAddCategory(Request $request)
    {
        // $allDate = $request->all(); //tra ve array

        //  dd($allDate);
        // if ($request->isMethod('post')) {
        //     echo 'phuong thuc post';
        // }
        // return 'Submit them chuyen muc: ';
        // return redirect(route('categories.add'));
        //dung query chi lay duoc tren url -> get
        //$cateName = $request->category_name;
        if ($request->has('category_name')) {
            $cateName = $request->category_name;
            $request->flash(); //set session flass
            return redirect(route('categories.add'));
        } else {
            return 'khong co category_name';
        }

    }
    public function deleteCategory($id)
    {

        return 'Submit xoa chuyen muc: ' . $id;
    }
    //xu ly lay thong tin file
    public function handleFile(Request $request)
    {
        // $file = $request->file('photo');
        if ($request->hasFile('photo')) {
            if ($request->photo->isValid()) {

                $file = $request->photo;
                // $path = $file->path();
                //chuyen file tu bo nho tam ve local->trong project cua ta, param thu 2 k co gi thi default la local
                // $path = $file->store('images');
                //doi ten luu cua file
                //$path = $file->storeAs('file_has_name', 'file_pdf');
                //lay ten file goc
                // $fileName = $file->getClientOriginalName();
                //doi ten file
                $ext = $file->extension();
                $fileName = md5(uniqid()) . '.' . $ext;
                // dd($ext);
                // dd($path);
                phpdd($fileName);
            } else {
                return 'upload k thanh cong';
            }
        } else {
            return 'vui long chon file';
        }

    }
    public function getFile()
    {
        return view('clients.categories.file');
    }
}