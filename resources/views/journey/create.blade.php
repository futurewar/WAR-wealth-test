@extends('layouts.app')
@section('pageName')
Create & Build
@endsection

@section('create') Create & Build
@endsection

@section('content')

<div class="journey_background">
        <div class="row">
                <p id="backToJourney"><a href="{{'/journey'}}"><i class="material-icons left">keyboard_arrow_left</i>Try a different segment</a></p>
            </div>
    <div class="journey_container">
        <div class="journey_contents">
            <h3> Create and Build </h3>
            <p> There are no shortcuts to success - You have to work for it.</p>
            <p> There are different journeys to making money and you must know which journey best suits you.</p>
            <p> In this segment, the journeys to making money are explored.</p>
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
                <div class="row">
                    <div class="col s12 m12">
                        <div class="card white">
                            <div class="card-content black-text">
                            <p id="card_heading">Making Money</p>
                                <div class="row">
                                    <div class="col s6">
                                        <img id="graph" src="/storage/images/icons/graph.png">    
                                    </div>
                                    <div class="col s6">
                                        {{-- <div class="container"> --}}
                                            <br>
                                            <p id="entrepreneur">Entrepreneur: Volatile, risky and lumpy wealth creation.</p>
                                            <p id="employee">Corporate Employee: gradual accumulation of money.</p>
                                            <p id="self">Self-employed professional: higher earnings but slower growth.</p>
                                            <p id="passive">Passive source of income: eg. Inheritance.</p>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>                 
    </div>
          
          

@endsection
