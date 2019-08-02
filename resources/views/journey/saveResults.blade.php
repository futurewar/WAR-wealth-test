@extends('layouts.app')

@section('pageName')
Saving Strategy
@endsection

@section('saveResults')
saveResults
@endsection


 
@section('content')
<div class="saveResults"> 
    <div id="aggressive" class="hide">
         <div id="footer_save2">
                <div class="aggressiveSaving">
                    <a href="{{'/balanced'}}"><p id="balancedSaving">Balanced strategy, perhaps?<br>
                        <i class="small material-icons center-align" id="saveIcon">expand_more</i>
                    </p></a>
                </div>
            </div>
            <div id="footer_save">
                <div class="aggressiveSaving">
                    <a href="{{'/aggressive'}}"><p id="aggressiveSaving">Explore the ways of aggressive saving<br>
                        <i class="small material-icons center-align" id="saveIcon">expand_more</i>
                    </p></a>
                </div>
            </div>
        <p><img id="result_light" src="/storage/images/icons/lightbulb.png"></p>       
    <div class="contain">
        <div class="introduction">
            <p id="first_intro">Based on your results.</p>
            <h4 id="sec_intro">You are better suited for an aggressive strategy of saving.</h4>
            <p id="third_intro">In an aggressive saving technique, there are more risks involved.</p>
        </div>
        <br>
        <div class="saveResults_content">
          <img id="agg_strategy" src="/storage/images/icons/aggressive.png"/>
        </div>
    </div> 
    </div>
    
<div id="balanced" class="hide">
    <div id="footer_save2">
            <div class="aggressiveSaving">
                <a href="{{'/balanced'}}"><p id="balancedSaving">Explore the ways of aggressive saving<br>
                    <i class="small material-icons center-align" id="saveIcon">expand_more</i>
                </p></a>
            </div>
        </div>
        <div id="footer_save">
            <div class="aggressiveSaving">
                <a href="{{'/aggressive'}}"><p id="aggressiveSaving">Balanced strategy, perhaps?<br>
                    <i class="small material-icons center-align" id="saveIcon">expand_more</i>
                </p></a>
            </div>
        </div>
    <p><img id="result_light" src="/storage/images/icons/lightbulb.png"></p>       
<div class="contain">
    <div class="introduction">
        <p id="first_intro">Based on your results.</p>
        <h4 id="sec_intro">You are better suited for a balanced strategy of saving.</h4>
        <p id="third_intro">In an balanced saving technique, there are less risks involved.</p>
    </div>
    <br>
    <div class="saveResults_content">
      <img id="agg_strategy" src="/storage/images/icons/balanced.png"/>
    </div>
</div>
</div>
    
              
</div>
@endsection

      

