@formgroup(['field' => $field])
    <select
        class="form-control"
        name="{{ config('builder.field_prefix') .'_'. $field[config('builder.field_name')] }}"
        id="{{ config('builder.field_prefix') .'_'. $field[config('builder.field_name')] }}"
    >
        <option value="">- select -</option>
        @foreach($field[config('builder.field_options')] as $key => $option)
            <option value="{{ $key }}"
                @if(request(config('builder.field_prefix').'_'.$field[config('builder.field_name')]) == $key)
                    selected
                @endif
            >
                {{ $option }}
            </option>
        @endforeach
    </select>
{{$field['value']}}@endformgroup
