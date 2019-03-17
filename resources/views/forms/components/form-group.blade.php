<div class="form-group">

    @isset($field[config('builder.field_label')])
        @include('forms.partials.label')
    @endisset

    {{ $slot }}

    @isset($field[config('builder.field_help')])
        @include('forms.partials.help')
    @endisset

</div>