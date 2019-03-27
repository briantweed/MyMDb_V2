<h5 class="pt-4 pb-3">{{ $field[config('builder.label')]  }}</h5>
<div class="form-row">
    @foreach($field[config('builder.options')] as $key => $value)
        <div class="form-group col-sm-6 col-md-4">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    id="{{ $field[config('builder.name')] }}_{{ $key }}"
                    name="{{ $field[config('builder.name')] }}"
                    aria-describedby="{{ $field[config('builder.name')] .'_'. config('builder.help') }}"
                    value="{{ $key }}"
                    @if(old($field[config('builder.name')]) == $key)
                        checked="checked"
                    @elseif($field[config('builder.value')] == $key)
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
