<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>IT Help me!</title>
</head>
<body>
    @if($errors->any())
        <div>
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
        </div>
    @endif

     <main class="m-4"> 
        @if(session()->has('notice'))
            <div>
                {{session()->get('notice')}}
            </div>
        @endif
        @yield('main')
     </mian>
     <footer></footer>
     <script src="{{asset('js/app.js')}}">
</body>
</html>