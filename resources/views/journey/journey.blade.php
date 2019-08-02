@extends('layouts.app') 
@section('pageName') Journey
@endsection
 
@section('journey') Journey
@endsection
 
@section('content')
<div class="journey">
    <div class="journey_contain">
@include('inc.logonavbar')

        <div id="leadGeneration">
            <div class="leadButton">
                <a href="#" id="showFrame"><p id="leadButton">Gone through our tips? Try out our Lead Generation.<br>
                    <i class="small material-icons center-align" id="saveIcon">expand_more</i>
                </p></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col s12 m6 l6">
                <div id="journey_title">
                    <h4>Your Journey</h4>
                    <hr>
                </div>
                <br>
                <div id="info1">
                    <p>A client-centric, goals-based framework that creates value and gives purpose to wealth.</p>
                </div>

                <div id="create_title">
                    <h4>Create & Build</h4>
                    <hr>
                </div>

                <div id="info2">
                        <h6>Brief</h6>
                        <p>How you make money and build wealth (e.g. entrepreneur, self-employed professional, corporate employee, passive income)</p>
                        <h6>Importance</h6>
                        <p>To   position yourself for success</p>
                        <h6>How to achieve this</h6>
                        <p>Invest in yourself, stay relevant,stay focused...there are no shortcuts!</p>
    
                </div>


                <div id="live_title">
                    <h4>Live & Enjoy</h4>
                    <hr>
                </div>

                <div id="info3">
                        <h6>Brief</h6>
                        <p>Maintain your chosen lifestyle and realise your plans, dreams and aspirations</p>
                        <h6>Importance</h6>
                        <p>To take care of yourself and your family </p>
                        <h6>How to achieve this</h6>
                        <p>Live a life you can afford and make lifestyle choices in line with your budget and future goals</p>
    
                </div>

                <div id="save_title">
                    <h4>Save & Invest</h4>
                    <hr>
                </div>

                <div id="info4">
                        <h6>Brief</h6>
                        <p>How to achieve long-term value creation and goals</p>
                        <h6>Importance</h6>
                        <p>To reach financial independence and secure your chosen lifestyle</p>
                        <h6>How to achieve this</h6>
                        <p>Identify and save for multiple specific long-term goals</p>
    
                </div>

                <div id="share_title">
                    <h4>Share & Legacy</h4>
                    <hr>
                </div>
                <div id="info5">
                        <h6>Brief</h6>
                        <p>Peace of mind with generational wealth transfer and using your money, time and passions to make a difference</p>
                        <h6>Importance</h6>
                        <p>To invest in future generations and impact the world around you</p>
                        <h6>How to achieve this</h6>
                        <p>Structure your excess money to leave a legacy and/or contribute to philanthropic causes</p>
    
                </div>

                <div id="plan_title">
                    <h4>Plan & Protect</h4>
                    <hr>
                </div>
                <div id="info6">
                    <h6>Brief</h6>
                    <p>How to plan wisely and protect yourself, your family and your assets</p>
                    <h6>Importance</h6>
                    <p>To protect yourself against unforeseen events that can erode your wealth</p>
                    <h6>How to achieve this</h6>
                    <p>Have a sound financial planand adequate insurance in place</p>

                </div>

            </div>

            <div class="col s12 m6 l6">
                <div class="wheel">
                    <div class="shell">
                            <a id="quad5" class="outer" href="{{'/plan'}}"></a>
                            <div class="mid">
                            <a href="{{'/create'}}" id="quad1" class="quadrant1" ></a>
                                <a href="{{'/live'}}" id="quad2" class="quadrant2"></a>
                                <a href="{{'/save'}}" id="quad3" class="quadrant3"></a>
                                <a href="{{'/share'}}" id="quad4" class="quadrant4"></a>
                            </div>
                            <a class="inner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="newpage">
    <div class="row">
        <p id="backToJourney"><a href="#" id="hideFrame"><i class="material-icons left">keyboard_arrow_left</i>Back To Journey</a></p>
    </div>
    <div id="wufoo-r17igclv0nej55u" style="width: 100%; height: 100%; padding-top: 60px;"></div>        
</div>

<script type="text/javascript">

    var r17igclv0nej55u;

    document.querySelector('#showFrame').onclick = function () {
        if (!r17igclv0nej55u) {
            launch();
        }
        $('#newpage').slideToggle("slow");
    };

    document.querySelector('#hideFrame').click = function () {
        $('#newpage').slideToggle("slow");
    }

    function launch() {
        console.log("loading script")
        var s = document.createElement("script")
        var options = {
            'userName': 'wealthneeds',
            'formHash': 'r17igclv0nej55u',
            'autoResize': true,
            'async': true,
            'host': 'wufoo.com',
            'header': 'show',
            'ssl': true
        };
        s.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'secure.wufoo.com/scripts/embed/form.js';
        console.log("loading script")
        s.onload = s.onreadystatechange = function () {
            console.log("script loaded")
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { r17igclv0nej55u = new WufooForm(); r17igclv0nej55u.initialize(options); r17igclv0nej55u.display(); } catch (e) { }
        };
        var scr = document.getElementsByTagName("script")[0];
        scr.parentNode.insertBefore(s, scr);
    };

</script>
@endsection

