@extends('layouts.client')
@section('title')
    {{$title}} 
@endsection

@section('content')
        <h1>Them san pham</h1>
        <form action="" method="POST">
<input type="text" name="username">
@csrf
@method('Put')
<button type="submit">Submit</button>
        </form>
@endsection 
