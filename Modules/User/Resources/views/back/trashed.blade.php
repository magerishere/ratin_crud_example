@extends('adminpanel::back.layouts.master',[
    '_title' => __('user::table.back.trashed_title')
])

@section('content')
    <div class="container-fluid">
        <x-back.card>
            <x-back.datatable id="users_table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('user::table.back.full_name')}}</th>
                    <th>{{__('user::table.back.email')}}</th>
                    <th>{{__('user::table.back.created_at')}}</th>
                    <th>{{__('user::table.back.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}
                        </td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <x-back.form action="{{route('admin.users.trashed.restore',$user->id)}}">
                                        @method('PATCH')
                                        <x-back.button color="success">
                                            Restore <i class="fa fa-recycle"></i>
                                        </x-back.button>
                                    </x-back.form>

                                </div>
                                <div class="col-6">
                                    <x-back.form action="{{route('admin.users.trashed.destroy',$user->id)}}">
                                        @method('DELETE')
                                        <x-back.button color="danger">
                                            Delete <i class="fa fa-exclamation-triangle"></i>
                                        </x-back.button>
                                    </x-back.form>
                                </div>
                            </div>


                        </td>
                    </tr>
                @endforeach

                </tbody>
            </x-back.datatable>
        </x-back.card>
    </div>
@endsection


