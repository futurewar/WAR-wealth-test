@extends('layouts.app')

@section('pageName')
Aggressive Strategy
@endsection

@section('aggressive')
aggressive
@endsection


 
@section('content')
<div class="aggressiveStrategy"> 
        <div class="row">
                <p id="backToJourney"><a href="{{'/saveResults'}}"><i class="material-icons left">keyboard_arrow_left</i>Back to strategy?</a></p>
            </div>
    <div class="contain">
        <div class="personality_title right-align">
            <h4>Explore our aggressive savings strategies</h4>
            <hr/>
            <br />
        </div>
        <br>
        <ul>
            <li> Investments funds</li>
            <li> Offshore Investments</li>
            <li> Equities</li>
            
        </ul>
    </div>

              
</div>
@endsection

      

