@extends('adminpanel::back.layouts.master', [
    '_title' => __('user::form.back.create_user')
])

@section('content')
    <x-back.card>

        <x-back.form action="{{route('admin.users.store')}}">
            <div class="row">
                <x-back.text-input
                    labelText="{{__('user::form.back.full_name')}}"
                    inputId="name"
                    inputName="name"
                    placeholder="{{__('user::form.back.full_name_placeholder')}}"
                />
                <x-back.text-input
                    labelText="{{__('user::form.back.email')}}"
                    inputId="email"
                    inputName="email"
                    inputType="email"
                    placeholder="{{__('user::form.back.email_placeholder')}}"
                />
                <x-back.text-input
                    labelText="{{__('user::form.back.password')}}"
                    inputId="password"
                    inputName="password"
                    inputType="password"
                    placeholder="{{__('user::form.back.password_placeholder')}}"
                />
                <x-back.text-input
                    labelText="{{__('user::form.back.password_confirmation')}}"
                    inputId="password_confirmation"
                    inputName="password_confirmation"
                    inputType="password_confirmation"
                    placeholder="{{__('user::form.back.password_confirmation_placeholder')}}"
                />
            </div>

            {{--                <div class="form-group">--}}
            {{--                    <label for="exampleInputFile">File input</label>--}}
            {{--                    <div class="input-group">--}}
            {{--                        <div class="custom-file">--}}
            {{--                            <input type="file" class="custom-file-input" id="exampleInputFile">--}}
            {{--                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
            {{--                        </div>--}}
            {{--                        <div class="input-group-append">--}}
            {{--                            <span class="input-group-text">Upload</span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            <!-- /.card-body -->

            <x-back.button/>
        </x-back.form>
    </x-back.card>
@endsection
