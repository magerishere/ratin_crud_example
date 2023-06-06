<div class="col-{{$sizeSm}} col-lg-{{$sizeLg}}">
    @if($inputValue)

        <div class="shadow-lg rounded-circle p-3" style="width: fit-content">
            <img src="{{$inputValue}}" alt="Image" class="img-fluid rounded-circle">
        </div>
    @endif

    <div class="form-group">
        @if($labelText)
            <label for="{{$inputId}}">{{$labelText}}</label>
        @endif
        <div class="input-group">
            <div class="custom-file">
                <input type="file" @class([
        "custom-file-input",
        "is-valid" => $errors->any() && !$errors->has($inputName),
        'is-invalid' => $errors->has($inputName),
]) id="{{$inputId}}" name="{{$inputName}}">
                <label class="custom-file-label" for="{{$inputId}}">Choose file</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Upload</span>
            </div>
        </div>
        @error($inputName)
        <div class="form-text text-danger">
            {{$message}}
        </div>
        @enderror
    </div>
</div>
