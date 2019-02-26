@formgroup(['field' => $field])
<textarea
    autocomplete="off"
    class="form-control"
    type="{{ $field[config('builder.field_type')] }}"
    id="{{ config('builder.field_prefix') .'_'. $field[config('builder.field_name')] }}"
    name="{{ config('builder.field_prefix') .'_'. $field[config('builder.field_name')] }}"
    aria-describedby="{{ config('builder.field_prefix') .'_'. $field[config('builder.field_name')] .'_'. config('builder.field_help') }}"
>
    {{ old(config('builder.field_prefix') .'_'. $field[config('builder.field_name')]) }}
</textarea>
@endformgroup
