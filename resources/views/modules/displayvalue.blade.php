@if($type=='number')
    value='{{(isset($source)? session($source):'0')?? old($source,'0') }}'
@elseif($type=='text')
    value='{{(isset($source)? session($source):'MM/DD/YYYY')?? old($source, 'MM/DD/YYYY') }}'
@elseif($type=='select')
    {{ old($source, session($source)) == $value ? 'selected' : '' }}
@elseif($type=='radio')
    {{ old($source, session($source)) == $value ? 'checked' : '' }}
@endif