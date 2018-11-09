@if($type=='number')
    value='{{old($source) ?? (isset($source)? session($source):'0') }}'
@elseif($type=='text')
    value='{{old($source) ?? (isset($source)? session($source):'YY/MM/DD') }}'
@elseif($type=='select')
    @if(session($source) == $value || old($source) == $value)checked @endif
@elseif($type=='radio')
    @if(session($source) == $value || old($source) == $value)checked @endif
@endif