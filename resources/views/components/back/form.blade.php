<form action="{{$attributes->get('action')}}" method="{{$attributes->get('method','POST')}}"
      @if($hasFile)
          enctype="multipart/form-data"
    @endif
>
    @csrf
    {{$slot}}
</form>
