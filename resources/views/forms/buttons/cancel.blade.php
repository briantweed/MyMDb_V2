<a
    href="{{ URL::previous() }}"
    class="btn {{ $field[config('builder.button_class')] ?: 'btn-primary' }}"
>
    {{ $field[config('builder.button_text')] ?: 'cancel' }}
</a>
