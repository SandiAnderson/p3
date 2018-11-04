@if($type=='number')
    @if(session($source)){{session($source)}}@elseif(old($source)){{old($source)}}@endif
@elseif($type=='date')
        @if(session($source)){{session($source)}}@elseif(old($source)){{old($source)}}@endif
@elseif($type=='select')
    @if(session($source) == $value || old($source) == $value)selected
    @endif
@elseif($type=='radio')
    @if(session($source) == $value || old($source) == $value)checked
    @endif
@endif