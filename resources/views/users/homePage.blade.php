


@extends('layouts.client')
@section('title')
    {{$title}} 
@endsection
{{-- trong cung 1 section => co parent se hien cua ca cha va con, k co cha se bi ghi de --}}
@section('sidebar')
@parent
<h3>Home sidebar</h3>
@endsection
@section('content')
        <h1>Trang chu</h1>
        {{-- moi lan vay phai php artisan view:clear --}}
        {{-- @datetime('2022-12-15 15:00:30')
        @datetime("2021-1-1 00:31:9") --}}
        @env('local')
            <p>Moi truong local</p>
            @elseenv('dev')
            <p>Khong phai moi truong local ma la moi truong dev</p>
        @endenv
@endsection 
    