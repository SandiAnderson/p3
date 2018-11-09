@if($type=='number')
    value='{{old($source) ?? (isset($source)? session($source):'0') }}'
@elseif($type=='text')
    value='{{old($source,'YYYY/MM/DD')}}'
@elseif($type=='select')
    {{ old($source, session($source)) == $value ? 'selected' : '' }}
@elseif($type=='radio')
    {{ old($source, session($source)) == $value ? 'checked' : '' }}
@endif