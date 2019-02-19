@formgroup(['filter' => $filter])
    <input
        autocomplete="off"
        class="form-control"
        type="{{ $filter[config('builder.field_type')] }}"
        id="{{ config('builder.field_prefix') .'_'. $filter[config('builder.field_name')] }}"
        name="{{ config('builder.field_prefix') .'_'. $filter[config('builder.field_name')] }}"
        aria-describedby="{{ config('builder.field_prefix') .'_'. $filter[config('builder.field_name')] .'_'. config('builder.field_help') }}"
        value="{{ request(config('builder.field_prefix') .'_'. $filter[config('builder.field_name')]) }}"
    />
@endformgroup

