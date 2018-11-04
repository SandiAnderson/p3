@extends('layouts.master')

@section('content')
    <div class="defForm">
        <p>Use this planner to estimate your target incremental improvement each week in
            order to meet your race pace time goal.<br>
            <span class="req">*All values are required.</span></p>
        <form method="get" action="/plan">

            <div class='elForm'>Current Mile Pace:&nbsp;
                <label>Minutes <input type="number" name="currentmin" min="0" max="60"
                                      value=@include('modules.displayvalue', ['type'=>'number', 'source'=>'currentmin']) size="2">
                </label>
                <label>Seconds <input type="number" name="currentsec" min="0" max="60"
                                      value=@include('modules.displayvalue', ['type'=>'number', 'source'=>'currentsec']) size="2">
                </label></div>

            <div class='elForm'>Target Mile Pace:&nbsp;
                <label>Minutes <input type="number" name="targetmin" min="0" max="60"
                                      value=@include('modules.displayvalue', ['type'=>'number', 'source'=>'targetmin']) size="2">
                </label>
                <label>Seconds <input type="number" name="targetsec" min="0" max="60"
                                      value=@include('modules.displayvalue', ['type'=>'number', 'source'=>'targetsec']) size="2">
                </label></div>

            <div class='elForm'>
                <label>When is your race?&nbsp;
                    <input type="date" name="racedate"
                           value=@include('modules.displayvalue', ['type'=>'radio', 'source'=>'training', 'value'=>'yes'])>
                </label>
            </div>

            <div class='elForm'>
                <input type="submit" value="Estimate Training Goal">
            </div>
        </form>
    </div>

    @if($errors->any())
        <div class='error'>
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        @if(session('improve'))
            <div class='time'>To reach your target pace, you need to improve your time by {{session('improve')}} per
                mile.
            </div>
        @endif

    @endif
@endsection