@extends('layouts.app')
@section('pageName')
Share & Legacy
@endsection

@section('share') Share & Legacy
@endsection

@section('content')
<div class="journey_background">
        <div class="row">
        <p id="backToJourney"><a href="{{'/journey'}}"><i class="material-icons left">keyboard_arrow_left</i>Try a different segment</a></p>
            </div>
        <div class="journey_container">
            <div class="journey_contents">
                <h3> Share and Legacy </h3>
                <p> It is every man's obligation to put back into the world at least the equivalent of what he takes - Albert Einstein</p>
                <p> Why not share to leave a legacy?</p>
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
                                    <p id="card_heading">Ways to think about sharing</p>
                                    <p> Perhaps,</p>
                                    <ul class="contains">
                                        <li> Leave an inheritance for loved ones.</li>
                                        <li> Start a family business.</li>
                                        <li> Make donations to organizations you are passionate about.</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>               
                        </div>
                </div>
            </div>                 
        </div>
              
              
@endsection
