<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>MyMDb</title>

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#00aba9">
<meta name="theme-color" content="#ffffff">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

@yield('header')

<link href="{{ mix('css/app.css') }}" rel="stylesheet">

@yield('css')
