@extends('adminpanel::back.layouts.master', [
    '_title' => __('user::form.back.create_user')
])

@section('content')
    <x-back.card>

        <x-back.form action="{{route('admin.users.store')}}" hasFile>
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
                    inputType="password"
                    placeholder="{{__('user::form.back.password_confirmation_placeholder')}}"
                />
                <x-back.file-input
                    labelText="{{__('user::form.back.user_image')}}"
                    inputId="image"
                    inputName="image"
                />
            </div>


            <!-- /.card-body -->

            <x-back.button>
                Submit
            </x-back.button>
        </x-back.form>
    </x-back.card>
@endsection
