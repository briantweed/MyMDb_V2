<a
    href="{{ route($field['route']) }}"
    class="btn {{ $field[config('builder.class')] ?: 'btn-primary' }}"
>
    {{ $field[config('builder.text')] ?: 'clear' }}
</a>
