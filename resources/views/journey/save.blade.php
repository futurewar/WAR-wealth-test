@extends('layouts.app')
@section('pageName')
Save & Invest
@endsection

@section('save') Save & Invest
@endsection

@section('content')
<div class="journey_background">
        <div class="row">
                <p id="backToJourney"><a href="{{'/journey'}}"><i class="material-icons left">keyboard_arrow_left</i>Try a different segment</a></p>
            </div>
        <div class="journey_container">
            <div class="journey_contents">
                <h3> Save and Invest </h3>
                <p> Anyone can save - all you need is a savings goal and a small amount of money to get started.</p>
                <p> Saving money has been made easy for anyone and any of the folloeing methods can be used to save money.</p>
                <p> The best strategies to saving and investing are explored here.</p>
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
                                <p id="card_heading">Principles of saving and investing</p>
                                <br>
                                <br>
                                    <div class="row">
                                        <div class="col s6">
                                                <p> Saving is -<p>
                                                <p> When you put money aside to grow for long-term goals such as buying a car or a house.</p>
                                        </div>
                                        <div class="col s6">
                                                <p> Investing is -<p>
                                                <p> When you put your money somewhere with the expectation of making a profit.</p>
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
                                    <p id="card_heading">Reasons to save and invest</p>
                                    <p> There are lots of good reasons to save and invest:</p>
                                    <ul class="contains">
                                        <li> You earn  interest on your money.</li>
                                        <li> You have cash available when you need it.</li>
                                        <li> Your money can work for you.</li>
                                        <li> Time in the market matters.</li>
                                        <li> Start saving early, encourage your children to do the same.</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>               
                        </div>
                        <div class="row">
                                <div class="col s12 m12">
                                    <div class="card white">
                                        <div class="card-content black-text">
                                        <p id="card_heading">Reasons to save and invest</p>
                                        <ul class="contains">
                                            <li> Save first, then invest</li>
                                            <li> Start early.</li>
                                            <li> Look at the big picture.</li>
                                            <li> Be realistic.</li>
                                            <li> Think long term.</li>
                                            <li> Diversify your portfolio.</li>
                                            <li> Keep an eye on taxes.</li>
                                            <li> Where possible, minimise fees.</li>
                                            <li> Educate yourself and hire advisors carefully</li>
                                            <li> Preserve your savings.</li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>               
                            </div>
                <a href="{{"/saveActivity"}}" id="activityButton" class="waves-effect waves-light btn transparent">Activity</a>
                        
                </div>
            </div>                 
        </div>
              
              
@endsection
