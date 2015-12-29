<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $info['title'] }}</title>
    <meta name="description" content="{{ $info['description'] }}" />
    <meta name="keywords" content="{{ $info['keywords'] }}" />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arii.css') }}">
    <!--[if IE 7]><link rel="stylesheet" href="{{ asset('css/arii-ie7.css') }}"><![endif]-->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
@if($info['namespace']!="accounts")
   @include('parts.header')
@endif
@yield('content')
@if($info['namespace']!="accounts")
    @include('parts.parteneri')
@endif
<footer>
    <div class="ui container">
        Copyright &copy; Asociatia Studentilor Informaticieni Ieseni (ASII) | Facultatea de Informatica din Iasi (FII) | FII Practic 2016
        <br />
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
        <a href="/faq">F.A.Q</a>
        <a href="/sitemap.xml">Sitemap</a>
    </div>
</footer>
<script src="{{ asset('semantic/semantic.min.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/requests.js') }}"></script>
</body>
</html>