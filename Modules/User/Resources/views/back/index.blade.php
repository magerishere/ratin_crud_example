@extends('adminpanel::back.layouts.master',[
    '_title' => __('user::table.back.title')
])

@section('content')
    <div class="container-fluid">
        <x-back.card>
            <x-back.datatable id="users_table">
                <thead>
                <tr>
                    <th>{{__('user::table.back.full_name')}}</th>
                        <th>{{__('user::table.back.email')}}</th>
                        <th>{{__('user::table.back.created_at')}}</th>
                    <th>{{__('user::table.back.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}
                        </td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <x-back.button btnLink="{{route('admin.users.edit',$user->id)}}">
                                Edit <i class="fa fa-edit"></i>
                            </x-back.button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </x-back.datatable>
        </x-back.card>
    </div>
@endsection


