@extends('layouts.app')
@section('pageName')
Live & Enjoy
@endsection

@section('live') Live & Enjoy
@endsection

@section('content')
    <div class="journey_background">
        <div class="row">
                <p id="backToJourney"><a href="{{'/journey'}}"><i class="material-icons left">keyboard_arrow_left</i>Try a different segment</a></p>
            </div>
        <div class="journey_container">
            <div class="journey_contents">
                <h3> Live and Enjoy </h3>
                <p> A budget is telling your money where to go instead of wondering where it went.</p>
                <p> By managing your budget you will start to realize how your money can work for you and not you for your money</p>
                <p> This segment gives you an understanding as to hoe budgeting works and the best ways to carefully budget your finances.</p>
            </div>
            <div class="buttonNew">
                <a href="#"><i id="butt" class="medium material-icons">expand_more</i></a>
            </div>
        </div>  
    </div>
                         
    <div id="newpage">
        <div class="row">
            <p id="backToJourney"><a href="{{'/journey'}}"><i class="material-icons left">keyboard_arrow_left</i>Try a different segment</a></p>
        </div>
        <div class="contains">
            <div class="tips">  
                {{-- <div class="row">
                    <p id="backToJourney"><a href="{{'/journey'}}"><i class="material-icons left">keyboard_arrow_left</i>Try a different segment</a></p>
                </div> --}}
            <div class="contains">
                <div class="tips">  
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="card white">
                                <div class="card-content black-text">
                                 <p id="card_heading">Household Budget Planner</p>
                                 <div class="caption center-align">
                                 <a href="{{"/budget"}}" id="takeSurveyButton" class="waves-effect waves-light btn transparent" href="#" style="margin: 20px;">Checkout the Budget Planner </a>
                                 </div>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>                
    </div>
@endsection
