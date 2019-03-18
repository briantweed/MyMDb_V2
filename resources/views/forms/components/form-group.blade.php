<div class="form-group">

    @isset($field[config('builder.label')])
        @include('forms.partials.label')
    @endisset

    {{ $slot }}

    @isset($field[config('builder.help')])
        @include('forms.partials.help')
    @endisset

</div>