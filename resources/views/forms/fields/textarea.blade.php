@formgroup(['field' => $field])
<textarea
    autocomplete="off"
    class="form-control"
    type="{{ $field[config('builder.field_type')] }}"
    id="{{ $field[config('builder.field_name')] }}"
    name="{{ $field[config('builder.field_name')] }}"
    aria-describedby="{{ $field[config('builder.field_name')] .'_'. config('builder.field_help') }}"
>{{ old($field[config('builder.field_name')]) ?? $field['value'] }}</textarea>
@endformgroup
