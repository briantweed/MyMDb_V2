<a
    href="/{{ Request::segment(1) }}"
    class="btn {{ $field[config('builder.class')] ?: 'btn-primary' }}"
>
    {{ $field[config('builder.text')] ?: 'cancel' }}
</a>
