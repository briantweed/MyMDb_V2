<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.partials.header')
</head>

<body>

@include('layouts.partials.navigation')

@include('layouts.partials.content')

@include('layouts.partials.footer')

@include('layouts.partials.modal-container')

</body>

</html>
