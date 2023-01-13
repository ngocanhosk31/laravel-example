<!DOCTYPE html>
<html lang="en">
<head>
    {{-- @include('users.homePage') --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- asset la cua blade --}}
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
</head>
<body>
   @include('blocks.header')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
    
                    <aside>
                        {{-- @section('sidebar')
                        
                        @show --}}
                        {{-- @yield('sidebar') --}}
                        @include('blocks.sidebar')
                    </aside>
                </div>
                <div class="col-8">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        
        
    </main>
    @include('blocks.footer')
   <script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/clients/js/custom.js')}}"></script>
   {{-- khai bao stack o day
    => o con => se push endpush/prepend endprepend => chen js vao vi tri stack ben cha --}}
   @stack('scripts')
</body>
</html>