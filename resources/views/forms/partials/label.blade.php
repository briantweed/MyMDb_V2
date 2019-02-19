@isset($filter[config('builder.field_label')])
    <label for="{{ config('builder.field_prefix') . '_' . $filter[config('builder.field_name')] }}">
        {{ $filter[config('builder.field_label')] }}
    </label>
@endisset