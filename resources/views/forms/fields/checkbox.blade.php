@empty($field[config('builder.options')])
    <div class="form-check">
        <input
            class="form-check-input"
            type="checkbox"
            id="{{ $field[config('builder.name')] }}"
            name="{{ $field[config('builder.name')] }}"
            aria-describedby="{{ $field[config('builder.name')] .'_'. config('builder.help') }}"
            value="1"
            @if($field[config('builder.value')] == 1)
                checked="checked"
            @endif
        >
        <label class="form-check-label" for="{{ $field[config('builder.name')] }}">
            {{ $field[config('builder.label')] }}
        </label>
    </div>
@else
    {{ d($field) }}
    <h5>{{ $field[config('builder.label')]  }}</h5>
    @foreach($field[config('builder.options')] as $key => $value)
        <div class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                id="{{ $field[config('builder.name')] }}_{{ $key }}"
                name="{{ $field[config('builder.name')] }}[]"
                aria-describedby="{{ $field[config('builder.name')] .'_'. config('builder.help') }}"
                value="{{ $key }}"
            >
            <label class="form-check-label" for="{{ $field[config('builder.name')] }}_{{ $key }}">
                {{ $value }}
            </label>
        </div>
    @endforeach
@endempty
