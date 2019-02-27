@formgroup(['field' => $field])
<select
    class="form-control"
    name="{{ $field[config('builder.field_name')] }}"
    id="{{ $field[config('builder.field_name')] }}"
>
    <option value="">- select -</option>
    @foreach($field[config('builder.field_options')] as $key => $option)
        <option value="{{ $key }}"
            @if(old($field[config('builder.field_name')]) == $key)
                selected
            @elseif($field[config('builder.field_value')] == $key)
                selected
            @endif
        >
            {{ $option }}
        </option>
    @endforeach
</select>
@endformgroup
