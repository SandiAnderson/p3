@extends('layouts.master')

@section('content')
    <div class='defForm'>
        Welcome to the Race Training Planner.<br>
        There's not much here now, but you can:
        <ul>
            @foreach(config('app.nav') as $navitem)
                @if($navitem['label']!='Home')
                    <li><a href="{{$navitem['link']}}">{{$navitem['label']}}</a>: {{$navitem['description']}}</li>
                @endif
            @endforeach
        </ul>

    </div>

@endsection
