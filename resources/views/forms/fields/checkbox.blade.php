@empty($field[config('builder.options')])
    <div class="form-check py-3">
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
    <h5 class="pt-4 pb-3">{{ $field[config('builder.label')]  }}</h5>
    <div class="form-row">
    @foreach($field[config('builder.options')] as $key => $value)
        <div class="form-group col-sm-6 col-md-4">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="{{ $field[config('builder.name')] }}_{{ $key }}"
                    name="{{ $field[config('builder.name')] }}[]"
                    aria-describedby="{{ $field[config('builder.name')] .'_'. config('builder.help') }}"
                    value="{{ $key }}"
                    @if(is_array(old($field[config('builder.name')])))
                        @if(in_array($key, old($field[config('builder.name')])))
                            checked="checked"
                        @endif
                    @elseif(is_array($field[config('builder.value')]))
                        @if(array_key_exists($key, $field[config('builder.value')]))
                            checked="checked"
                        @endif
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
