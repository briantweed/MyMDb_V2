@formgroup(['field' => $field])
<input
    autocomplete="off"
    class="form-control"
    type="{{ $field[config('builder.type')] }}"
    id="{{ $field[config('builder.name')] }}"
    name="{{ $field[config('builder.name')] }}"
    aria-describedby="{{ $field[config('builder.name')] .'_'. config('builder.help') }}"
    value="{{ old($field[config('builder.name')]) ?? $field['value'] }}"
/>
@endformgroup

