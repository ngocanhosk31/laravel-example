<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
    }
    // hien thi danh sach
    public function index()
    {
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
    public function addCategory()
    {
        return view('clients/categories/add');
    }
    public function handleAddCategory()
    {
        // return 'Submit them chuyen muc: ';
        return redirect(route('categories.add'));
    }
    public function deleteCategory($id)
    {
        return 'Submit xoa chuyen muc: ' . $id;
    }
}