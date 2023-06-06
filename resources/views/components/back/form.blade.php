<form action="{{$attributes->get('action')}}" method="{{$attributes->get('method','POST')}}">
    @csrf
    {{$slot}}
</form>
