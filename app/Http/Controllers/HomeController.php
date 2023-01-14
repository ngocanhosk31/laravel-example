<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public $data = [];
    public function index()
    {
        // $title = "hoc lap trinh ";
        // // $content = "content nha";
        // $dataView = [
        //     'titleData' => $title
        // ];

        $this->data['title'] = 'Trang chu 123';
        $this->data['message'] = 'Dang ki tai khoan thanh cong';
        // ham compact gom cac bien vao mang
        // neu k dung compac thi gom thu cong nhu tren => dua vao mang $dataView => truyen $dataView vao view() 
        // thuong se dung compact nhieu hon
        // return view('homePage', compact('title')); // load view home.php
        // con co cach dung with nhu duoi
        // return view('homePage')->with('titleData', $title);
        // return view('homePage')->with(['titleData' => $title, 'contentData' => $content]);
        // return view('users.homePage', $this->data);
        return view('users.homePage', $this->data);
        // return View::make('homePage', compact('title'));
        // o day toan bo noi dung trang homePage da duoc luu o bien $contentView
        // => return $contentView => hien thi trag homePage
        // $contentView = view('homePage');
        // return $contentView;

    }
    public function products()
    {
        $this->data['title'] = 'Dao tao lap trinh';
        return view('clients.products', $this->data);
    }
    public function getProductDetail($id)
    {
        // return view('clients/categories/products/detail', compact('id'));
        //cung co the dung dau cham nhu duoi
        return view('clients.categories.products.detail', compact('id'));
    }
    public function getAdd()
    {
        $this->data['title'] = 'Them san pham';
        return view('clients.add', $this->data);
    }
    public function postAdd(Request $request)
    {
        dd($request);
    }
    public function putAdd(Request $request)
    {
        dd($request);
    }
    public function getArray()
    {
        $contentArray = [
            'name' => 'Laravel 8.x',
            'lesson' => 'Khoa hoc lap trinh Laravel',
            'academy' => 'Anh cute'
        ];
        return $contentArray;
    }
}