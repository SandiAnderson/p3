@if($type=='number')
    @if(session($source)) value='{{session($source)}}'
    @elseif(old($source))  value='{{old($source)}}'
    @else value='0'
    @endif
@elseif($type=='text')
    @if(session($source)) value='{{session($source)}}'
    @elseif(old($source)) value='{{old($source)}}'
        @else value='MM/DD/YYYY'
    @endif
@elseif($type=='select')
    @if(session($source) == $value || old($source) == $value)selected @endif
@elseif($type=='radio')
    @if(session($source) == $value || old($source) == $value)checked @endif
@endif