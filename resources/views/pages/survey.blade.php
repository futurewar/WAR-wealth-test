@extends('layouts.app')

@section('pageName')
Survey
@endsection

@section('survey')
Survey
@endsection
 
 
@section('content')
<div class="personality"> 
        <div id="footer">
                <div id="left" class="arrow">
                        <div id="arrow-left"></div>
                    </div>
                    <div id="right" class="arrow">
                        <div id="arrow-right"></div>
                    </div> 
            </div>

    </div>
    <div class="contain">
        <div class="personality_title right-align">
            <h4>Money Personality</h4>
            <hr/>
            <br />
            <p class="subtitle right-align">
                Help me determine your money personality to jump <br />start your financial journey
            </p>
        </div>
        <br>

  <form action="#">
        <div class="frame-info">
            <h5>If I receive a bonus, my first impulse would be to:</h5>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" value="1" autocomplete="off"/>
                        <span>Spend it on things i want, including gifts for others.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" value="2" autocomplete="off"/>
                        <span>Immediately put it somewhere safe so it won't get frittered away.</span>
    
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio" value="3" autocomplete="off"/>
                        <span>Figure out ways of investing it to get the best possible return.</span>
                </label>
            </p>
        </div>
        <div class="frame-info">
                <h5>My primary financial objective is:</h5>
            <p>
                <label>
                    <input class="with-gap" name="group2" type="radio" value="2" autocomplete="off"/>
                        <span>To save enough money now so I never have to worry about my old age</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group2" type="radio" value="1" autocomplete="off"/>
                        <span>To have enough of it to ensure that I can buy whatever I want.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group2" type="radio" value="3" autocomplete="off"/>
                        <span>To make my money work for me.</span>
                </label>
            </p>
        </div>
        <div class="frame-info">
                <h5>When it comes to spending:</h5>
            <p>
                <label>
                    <input class="with-gap" name="group3" type="radio" value="3" autocomplete="off"/>
                        <span>I enjoy spending money, as long as I can keep earning and saving more and my net worth keeps increasing.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group3" type="radio" value="2" autocomplete="off"/>
                        <span>I'd rather save my money; spending it makes me nervous.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group3" type="radio" value="1" autocomplete="off"/>
                        <span>I love spending money, and I tend to spend more than I earn.</span>
                </label>
            </p>
        </div>
        <div class="frame-info">
                <h5>When it comes to saving:</h5>
            <p>
                <label>
                    <input class="with-gap" name="group4" type="radio" value="1" autocomplete="off"/>
                        <span>I know I ought to be saving money, but I never seem to get around to it.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group4" type="radio" value="2" autocomplete="off"/>
                        <span>I put my money away in a safe place for a rainy day.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group4" type="radio" value="3" autocomplete="off"/>
                        <span>Saving and investing comes naturally to me. I am regular and consistent about it.</span>
                </label>
            </p>
        </div>
        <div class="frame-info">
                <h5>I worry about money:</h5>
            <p>
                <label>
                    <input class="with-gap" name="group5" type="radio" value="3" autocomplete="off"/>
                        <span>Somewhat, but I'm doing all I can and getting advice to make sure I'll have more than enough.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group5" type="radio" value="2" autocomplete="off"/>
                        <span>Constantly. It's the main thing I worry about.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group5" type="radio" value="1" autocomplete="off"/>
                        <span>What, me worry? I just enjoy spending it!</span>
                </label>
            </p>
        </div>
        <div class="frame-info">
                <h5>In the event of a financial emergency:</h5>
            <p>
                <label>
                    <input class="with-gap" name="group6" type="radio" value="1" autocomplete="off"/>
                        <span> I never have enough money left over to save for emergencies.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group6" type="radio" value="2" autocomplete="off"/>
                        <span> I've put aside a sizable amount for emergencies, but I'm not sure it's enough.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group6" type="radio" value="3" autocomplete="off"/>
                        <span>I've saved enough for almost any emergency, but hope I never have to spend it.</span>
                </label>
            </p>
        </div>
        <div class="frame-info">
                <h5>When I really want to buy something that's not in my budget:</h5>
            <p>
                <label>
                    <input class="with-gap" name="group7" type="radio" value="2" autocomplete="off"/>
                        <span>I'd have to think hard before giving myself permission to spend the money.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group7" type="radio" value="1" autocomplete="off"/>
                        <span>I'll buy it whether or not I can afford it.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group7" type="radio" value="3" autocomplete="off"/>
                        <span>If it's important enough, I'll tweak my portfolio. Otherwise, I'll forget about it.</span>
                </label>
            </p>
        </div>
        <div class="frame-info">
                <h5>When I think about money in general, to me it represents: </h5>
            <p>
                <label>
                    <input class="with-gap" name="group8" type="radio" value="2" autocomplete="off"/>
                        <span>Security.</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group8" type="radio" value="1" autocomplete="off"/>
                        <span>Happiness, pleasure, and excitement. </span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group8" type="radio" value="3" autocomplete="off"/>
                        <span>Growth, freedom and influence.</span>
                </label>
            </p>
        </div>
      </form>
        
        
        <br>
  <br>
    <div class="res right-align">
        {{-- <a href="{{"/results"}}" id="surveyDone" class="waves-effect waves-light btn transparent" href="#">Done</a> --}}
        <a href="#" id="surveyDone" class="waves-effect waves-light btn transparent" href="#">Done</a>

    </div>

              
</div>
@endsection


      

