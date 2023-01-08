<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "hoc lap trinh ";
        $content = "content nha";
        $dataView = [
            'titleData' => $title
        ];
        // ham compact gom cac bien vao mang
        // neu k dung compac thi gom thu cong nhu tren => dua vao mang $dataView => truyen $dataView vao view() 
        // thuong se dung compact nhieu hon
        // return view('homePage', compact('title')); // load view home.php
        // con co cach dung with nhu duoi
        // return view('homePage')->with('titleData', $title);
        return view('homePage')->with(['titleData' => $title, 'contentData' => $content]);
        // return View::make('homePage', compact('title'));
        // o day toan bo noi dung trang homePage da duoc luu o bien $contentView
        // => return $contentView => hien thi trag homePage
        // $contentView = view('homePage');
        // return $contentView;

    }
    public function getProductDetail($id)
    {
        // return view('clients/categories/products/detail', compact('id'));
        //cung co the dung dau cham nhu duoi
        return view('clients.categories.products.detail', compact('id'));
    }
}