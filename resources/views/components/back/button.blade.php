@if($btnLink)
    <a href="{{$btnLink}}" class="btn btn-{{$color}}">
        {{$slot}}
    </a>
@else
    <button type="{{$attributes->get('type','submit')}}" class="btn btn-{{$color}}">
        {{$slot}}
    </button>

@endif
