@formgroup(['filter' => $filter])
    <input
        autocomplete="off"
        class="form-control"
        type="{{ $filter[config('building.field_type')] }}"
        id="{{ config('building.field_prefix') .'_'. $filter[config('building.field_name')] }}"
        name="{{ config('building.field_prefix') .'_'. $filter[config('building.field_name')] }}"
        aria-describedby="{{ config('building.field_prefix') .'_'. $filter[config('building.field_name')] .'_'. config('building.field_help') }}"
        value="{{ request(config('building.field_prefix') .'_'. $filter[config('building.field_name')]) }}"
    />
@endformgroup

