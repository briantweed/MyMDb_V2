@isset($field[config('builder.field_help')])
    <small
        id="{{ $field[config('builder.field_name')] .'_'. config('builder.field_help') }}"
        class="form-text text-muted"
    >
        {{ $field[config('builder.field_help')] }}
    </small>
@endisset
