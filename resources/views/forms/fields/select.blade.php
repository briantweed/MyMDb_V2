@formgroup(['filter' => $filter])
    <select
        class="form-control"
        name="{{ config('building.field_prefix') .'_'. $filter[config('building.field_name')] }}"
        id="{{ config('building.field_prefix') .'_'. $filter[config('building.field_name')] }}"
    >
        <option value="">- select -</option>
        @foreach($filter[config('building.field_options')] as $key => $option)
            <option value="{{ $key }}"
                @if(request(config('building.field_prefix').'_'.$filter[config('building.field_name')]) == $key)
                    selected
                @endif
            >
                {{ $option }}
            </option>
        @endforeach
    </select>
@endformgroup
