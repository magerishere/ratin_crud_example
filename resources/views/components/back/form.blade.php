@if($sessionMessage = session()->get('session_message'))
    <div class="alert alert-{{session()->get('session_message_type')}}">
        {{$sessionMessage}}
    </div>
@endif
<form action="{{$attributes->get('action')}}" method="{{$attributes->get('method','POST')}}"

      @if($hasFile)
          enctype="multipart/form-data"
    @endif
>
    @csrf
    {{$slot}}
</form>
