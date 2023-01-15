<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chu</title>
</head>
<body>
    <h1>Trang chu</h1>
    {{-- <h2>{{$welcome}}</h2> --}}
    <h2>{!!$welcome!!}</h2>
    <h2>{{!empty(request()->keyword)?request()->keyword:'khong co gi'}}</h2>
    <div class="container">
        {!! !empty($content)?$content:false !!}
    </div>
   <hr>
   @for ($i=1;$i<=10;$i++)
    <p> Phan tu thu: {{$i}}</p>    
   @endfor
</body>
</html>