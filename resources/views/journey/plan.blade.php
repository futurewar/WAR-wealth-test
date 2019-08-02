@extends('layouts.app')
@section('pageName')
Plan &Protect
@endsection

@section('plan') Plan & Protect
@endsection

@section('content')
<div class="journey_background">
        <div class="row">
                <p id="backToJourney"><a href="{{'/journey'}}"><i class="material-icons left">keyboard_arrow_left</i>Try a different segment</a></p>
            </div>
        <div class="journey_container">
            <div class="journey_contents">
                <h3> Plan and Protect </h3>
                <p> Make generosity part of your growth.</p>
                <p> When you have worked hard for everything you own, you need to make sure you are protected in case of unforeseen events</p>
                <p> A financial journey is not complete without adequate planning and protecting.</p>
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
                                <p id="card_heading">Keep your family safe and sound</p>
                                <br>
                                <br>
                                    <div class="row">
                                        <div class="col s6">
                                                <p> Insurance -<p>
                                                <p> protects you against risk and will provide for you and your family when unexpected events occur.</p>
                                        </div>
                                        <div class="col s6">
                                                <p> Will -<p>
                                                <p> is a legal document where you explain how and whom your assets are to be distributed at death.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>               
                    </div>
                    <div class="row">
                            <div class="col s12 m12">
                                <div class="card white">
                                    <div class="card-content black-text">
                                    <p id="card_heading">Types of insurance</p>
                                    <div class="row">
                                            <div class="col s6"> 
                                    <p> Short-term insurance:</p>
                                    <ul class="contains">                                       
                                        <li> Motor insurance.</li>
                                        <li> Household insurance.</li>
                                        <li> Professional indemnity cover.</li>
                                        <li> Property insurance.</li>
                                        <li> Travel insurance.</li>
                                        <li> Personal accident cover.</li>

                                    </ul>
                                    </div>
                                    <div class="col s6"> 
                                    <p> Long-term insurance:</p>                                 
                                            <ul class="contains">
                                                <li> Life insurance.</li>
                                                <li> Endowment Policy.</li>
                                                <li> Funeral Policy.</li>
                                                <li> Education Plans.</li>
                                            </ul>
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
