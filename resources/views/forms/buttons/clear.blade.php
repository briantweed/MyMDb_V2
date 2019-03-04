<a
    href="{{ route($field['route']) }}"
    class="btn {{ $field[config('builder.button_class')] ?: 'btn-primary' }}"
>
    {{ $field[config('builder.button_text')] ?: 'clear' }}
</a>
