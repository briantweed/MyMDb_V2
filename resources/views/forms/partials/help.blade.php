@isset($filter[config('building.field_help')])
    <small
        id="{{ config('building.field_prefix') .'_'. $filter[config('building.field_name')] .'_'. config('building.field_help') }}"
        class="form-text text-muted"
    >
        {{ $filter[config('building.field_help')] }}
    </small>
@endisset