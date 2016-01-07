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
    <script src="{{ asset('semantic/semantic.min.js') }}"></script>
</head>
<body>
<div id="mainPanel">
    <div class="ui grid">
        <div class="three wide column">
            <div class="ui inverted segment panel">
                <div class="logo">
                    <img src="/images/logoInverted.png" alt="Logo FiiPractic" />
                </div>
                <div class="ui inverted vertical menu">
                    <a href="/trainer" class="item">
                        Training-urile mele
                        <i class="icon puzzle"></i>
                    </a>
                    <a href="/trainer/add-training" class="item">
                        Adauga Training
                        <i class="icon write"></i>
                    </a>
                    <a href="/" class="item">
                        Inapoi la website
                        <i class="icon world"></i>
                    </a>
                    <a href="/logout" class="item">
                        Logout
                        <i class="icon power"></i>
                    </a>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>
<div class="ui modal stergeTraining">
    <i class="close icon"></i>
    <div class="image content">
        <div class="image">
            <i class="trash icon"></i>
        </div>
        <div class="description">
            <p>Esti sigur ca vrei sa stergi acest training? Datele nu vor putea fi recuperate.</p>
        </div>
    </div>
    <div class="actions">
        <div class="ui cancel red button">
            <i class="remove icon"></i>
            Nu
        </div>
        <div class="ui approve green button">
            <i class="checkmark icon"></i>
            Da
        </div>
    </div>
</div>
<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/requests.js') }}"></script>
<script>
    $('.panel').css('height', $(window).height()+"px");
    $('.panel').css('width', $('#mainPanel .three.wide.column').width());
    $('.trainBut button').popup();
</script>
</body>
</html>