@formgroup(['filter' => $filter])
    <select
        class="form-control"
        name="{{ config('builder.field_prefix') .'_'. $filter[config('builder.field_name')] }}"
        id="{{ config('builder.field_prefix') .'_'. $filter[config('builder.field_name')] }}"
    >
        <option value="">- select -</option>
        @foreach($filter[config('builder.field_options')] as $key => $option)
            <option value="{{ $key }}"
                @if(request(config('builder.field_prefix').'_'.$filter[config('builder.field_name')]) == $key)
                    selected
                @endif
            >
                {{ $option }}
            </option>
        @endforeach
    </select>
@endformgroup
