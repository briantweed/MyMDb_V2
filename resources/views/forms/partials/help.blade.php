@isset($filter[config('builder.field_help')])
    <small
        id="{{ config('builder.field_prefix') .'_'. $filter[config('builder.field_name')] .'_'. config('builder.field_help') }}"
        class="form-text text-muted"
    >
        {{ $filter[config('builder.field_help')] }}
    </small>
@endisset