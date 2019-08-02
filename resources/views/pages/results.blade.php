@extends('layouts.app')

@section('pageName')
Results
@endsection

@section('results')
Results
@endsection

 
@section('content')
@include('inc.logonavbar')
<div class="result"> 
        <div class="result_vl"></div>
        <p><img id="result_light" src="/storage/images/icons/lightbulb.png"></p>
    <div class="contain">
            <div class="row">
                <br>
                <br>
                <div class="fr">
             <div id="smartOne" class="hide">
                <div class="col s5">
                    <img id="result_img" src="/storage/images/icons/smart.png">
                </div>
                <br>
                <br>
                <div class="text right-align">
                    <h5>The Smart One</h5>
                    <p>You are constantly learning with regards to managing money.</p>
                    <p>You expect your money to work as hard as you do.</p> 
                    <a href="{{'/journey'}}"><button class="btn3 waves-effect waves-light btn-large #ffffff white">
                    Start Journey
                </button></a>         
                </div>
        </div>
        <div id="moneySensible" class="hide">
                <div class="row">
                    <div class="col s5">
                        <img id="result_img" src="/storage/images/icons/sensible.png">
                    </div>
                    <br>
                    <br>
                    <div class="text right-align">
                        <h5>Money Sensible</h5>
                        <p>You watch your income closely and you do not</p>
                        <p>like to take risks.</p> 
                        <a href="{{'/journey'}}"><button class="btn3 waves-effect waves-light btn-large #ffffff white">
                            Start Journey
                    </button></a>         
                    </div>
                </div>
        </div> 
        <div id="bigSpender" class="hide">
                    <div class="row">
                        <div class="col s5">
                            <img id="result_img" src="/storage/images/icons/big.png">
                        </div>
                        <br>
                        <br>
                        <div class="text right-align">
                            <h5>Big Spender</h5>
                            <p>You have more reasons for money going out</p>
                            <p>than money coming in.</p> 
                        <a href="{{"/journey"}}"><button class="btn3 waves-effect waves-light btn-large #ffffff white">
                            Start Journey
                        </button></a>         
                        </div>
                    </div>
                </div>
            
    </div>
    
@endsection

      

