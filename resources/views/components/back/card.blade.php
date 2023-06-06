<div class="card">
    @if($sessionMessage = session()->get('session_message'))
        <div class="alert alert-{{session()->get('session_message_type')}}">
            {{$sessionMessage}}
        </div>
    @endif
    <!-- /.card-header -->
    <div class="card-body">
        {{$slot}}
    </div>
</div>
