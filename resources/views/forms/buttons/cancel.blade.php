<a
    href="{{ URL::previous() }}"
    class="btn {{ $field[config('builder.class')] ?: 'btn-primary' }}"
>
    {{ $field[config('builder.text')] ?: 'cancel' }}
</a>
