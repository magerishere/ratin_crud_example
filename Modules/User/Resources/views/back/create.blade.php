@extends('adminpanel::back.layouts.master', [
    '_title' => __('user::form.back.create_user')
])

@section('content')
    <x-back.card>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <form action="{{route('admin.users.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('user::form.back.full_name')}}</label>
                    <input type="text" name="name" id="name" class="form-control"
                           placeholder="{{__('user::form.back.full_name_placeholder')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('user::form.back.email')}}</label>
                    <input type="email" name="email" id="email" class="form-control"
                           placeholder="{{__('user::form.back.email_placeholder')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">{{__('user::form.back.password')}}</label>
                    <input type="password" name="password" id="password" class="form-control"
                           placeholder="{{__('user::form.back.password_placeholder')}}">
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

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </x-back.card>
@endsection
