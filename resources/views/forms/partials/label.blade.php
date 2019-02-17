@isset($filter[config('building.field_label')])
    <label for="{{ config('building.field_prefix') . '_' . $filter[config('building.field_name')] }}">
        {{ $filter[config('building.field_label')] }}
    </label>
@endisset