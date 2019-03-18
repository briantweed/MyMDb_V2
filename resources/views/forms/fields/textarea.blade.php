@formgroup(['field' => $field])
    <textarea
        autocomplete="off"
        class="form-control"
        type="{{ $field[config('builder.type')] }}"
        id="{{ $field[config('builder.name')] }}"
        name="{{ $field[config('builder.name')] }}"
        aria-describedby="{{ $field[config('builder.name')] .'_'. config('builder.help') }}"
    >{{ old($field[config('builder.name')]) ?? $field['value'] }}</textarea>
@endformgroup
