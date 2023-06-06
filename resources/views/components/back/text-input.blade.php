<div class="col-{{$sizeSm}} col-lg-{{$sizeLg}}">
    <div class="form-group">
        @if($labelText)
            <label for="{{$inputId}}">{{$labelText}}</label>
        @endif
        <input type="{{$inputType}}" name="{{$inputName}}" id="{{$inputId}}" value="{{old($inputName,$inputValue)}}"
               @class([
                    "form-control",
                    'is-valid' => $errors->any() && !$errors->has($inputName),
                    'is-invalid' => $errors->has($inputName),
                ])
               placeholder="{{$attributes->get('placeholder')}}"
        />
        @error($inputName)
        <div class="form-text text-danger">{{$message}}</div>
        @enderror
    </div>
</div>
