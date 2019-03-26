@empty($field[config('builder.options')])
    <div class="form-check mb-3">
        <input
            class="form-check-input"
            type="checkbox"
            id="{{ $field[config('builder.name')] }}"
            name="{{ $field[config('builder.name')] }}"
            aria-describedby="{{ $field[config('builder.name')] .'_'. config('builder.help') }}"
            value="1"
            @if(old($field[config('builder.name')]) == 1)
                checked="checked"
            @elseif($field[config('builder.value')] == 1)
                checked="checked"
            @endif
        >
        <label class="form-check-label" for="{{ $field[config('builder.name')] }}">
            {{ $field[config('builder.label')] }}
        </label>
    </div>
@else
    <h5 class="mb-3">{{ $field[config('builder.label')]  }}</h5>
    <div class="form-row">
    @foreach($field[config('builder.options')] as $key => $value)
        <div class="form-group col-4">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="{{ $field[config('builder.name')] }}_{{ $key }}"
                    name="{{ $field[config('builder.name')] }}[]"
                    aria-describedby="{{ $field[config('builder.name')] .'_'. config('builder.help') }}"
                    value="{{ $key }}"
                    @if(old($field[config('builder.name')]) == $key)
                        checked="checked"
                    @elseif(array_key_exists($key, $field[config('builder.value')]))
                        checked="checked"
                    @endif
                >
                <label class="form-check-label" for="{{ $field[config('builder.name')] }}_{{ $key }}">
                    {{ $value }}
                </label>
            </div>
        </div>
    @endforeach
        </div>
@endempty
