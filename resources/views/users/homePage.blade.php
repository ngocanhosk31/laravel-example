


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
        {{-- @env('local')
            <p>Moi truong local</p>
            @elseenv('dev')
            <p>Khong phai moi truong local ma la moi truong dev</p>
        @endenv --}}
        {{-- truyen bien type o Alert va alert
            co bao nhieu bien thi truyen vao nhu duoi --}}
            {{-- bien dang nhu java => vao day chuyen dang dau -  --}}
        <x-package-alert type="info" content="Dat hang thanh cong" data-Icon="facebook"/>
        <x-package-alert type="info" :content="$title"/>
        <x-package-alert type="success" :content="$message"/>
        {{-- neu muon goi bien --}}

        {{-- <x-button/> --}}
        {{-- <x-form-button/> --}}
        {{-- goi tu dong theo thu muc --}}
        {{-- <x-input.button-default/> --}}
        {{-- <x-button/> --}}
@endsection 
    