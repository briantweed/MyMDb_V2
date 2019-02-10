<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        @include('layouts.partials.header')

    </head>

    <body>

        @include('layouts.partials.navigation')

        @yield('banner')

        <div class="container-fluid pt-4" style="min-height: calc(100vh - 90px);">


            <div class="row">

                <div class="col-12 offset-lg-1 col-lg-10">

                    @yield('content')

                </div>

            </div>

        </div>

        @include('layouts.partials.footer')

        @include('layouts.partials.modal-container')

    </body>

</html>
