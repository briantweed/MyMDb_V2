@formgroup(['field' => $field])
<select
    class="form-control"
    name="{{ $field[config('builder.name')] }}"
    id="{{ $field[config('builder.name')] }}"
>
    <option value="">- select -</option>
    @foreach($field[config('builder.options')] as $key => $option)
        <option value="{{ $key }}"
            @if(old($field[config('builder.name')]) == $key)
                selected
            @elseif($field[config('builder.value')] == $key)
                selected
            @endif
        >
            {{ $option }}
        </option>
    @endforeach
</select>
@endformgroup
