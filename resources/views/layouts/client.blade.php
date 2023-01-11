<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @include('users.homePage')
   @section('sidebar') 
   <header>
        <h1>header</h1>
   </header>
    <main>
        <aside>Main Sidebar</aside>
        <div class="content">
            @yield('content')
        </div>
    </main>
    <footer>
        <h1>footer</h1>
    </footer>
   @endsection
</body>
</html>