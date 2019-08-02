@extends('layouts.app')
@section('pageName')
HomePage
@endsection

@section('home') Home
@endsection
 
@section('content')
@include('inc.navbar')
<div class="slider fullscreen">
    <ul class="slides">
        <li>
            <div id="footer">
                <p>Stanbic Bank <span>Moving Forward&#8482</span></p>
            </div>
            <img src="/storage/images/sliders/slider1.png" />
            <div id="headerText" class="caption center-align">
                <h1>How Can We Help You Today?</h1>
                <a href="{{"/survey"}}" id="takeSurveyButton" class="waves-effect waves-light btn transparent" href="#">Take Money Personality Survey </a>
            </div>
        </li>
        <li>
            <div id="footer">
                <p>Stanbic Bank <span>Moving Forward&#8482</span></p>
            </div>
            <img src="/storage/images/sliders/slider2.png" />
            <div id="rightText" class="caption right-align">
                <h1 id="mainTitle">Wealth <span class="heading">Philosophy</span></h1>
                <hr />
                <br /><br />
                <h5 class="heading">Start with a journey in mind &#8226</h5>
                <h5 class="heading">Wealth is about your life’s purpose &#8226</h5>
                <h5 class="heading">Wealth is a life long journey &#8226</h5>
                <h5 class="heading">Risk is relative &#8226</h5>
                <h5 class="heading">You and your family are unique &#8226</h5>
                <br />
                <a href="{{"/philosophy"}}" class="right-align">Learn More<i class="material-icons right">arrow_forward</i></a>
            </div>
        </li>
        <li>
            <div id="footer">
                <p>Stanbic Bank <span>Moving Forward&#8482</span></p>
            </div>
            <img src="/storage/images/sliders/slider3.png" />
            <div id="leftText" class="caption left-align">
                <div class="right-align">
                    <h1 id="mainTitle">Money <span class="heading">Personality</span></h1>
                    <hr />
                    <br /><br />
                    <h5 class="heading">There are three types of money personalities derived</h5>
                    <h5 class="heading">from our financial habits.</h5>
                    <br />
                    <h5 class="heading">Take a survey to determine your personality.</h5>
                    <br />
                    <a href="{{"/survey"}}"><button class="btn waves-effect waves-light btn-large">Take Survey</button></a>
                </div>
            </div>
        </li>
        <li>
            {{-- <div id="footerIcons">
                <span>
                    <a class="waves-effect waves-light btn-floating social facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </span>
                <span style="margin-left:1em;">
                    <a class="waves-effect waves-light btn-floating social twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </span>
                <span style="margin-left:1em;">
                    <a class="waves-effect waves-light btn-floating social google">
                        <i class="fab fa-youtube"></i>
                    </a>
                </span>
            </div> --}}
            <div id="footer">
                <p>Stanbic Bank <span>Moving Forward&#8482</span></p>
            </div>
            <div id="slider4Footer">
                {{-- <p>DISCLAIMER | CONDITIONS OF ACCESS | PRIVACY POLICY | SECURITY CENTRE | SITE SPECS</p> --}}
                {{-- <p>
                <a href="https://www.stanbicbank.com.gh/Ghana/Disclaimer">DISCLAIMER  </a>  <a href="https://www.stanbicbank.com.gh/Ghana/Conditions-of-access">CONDITIONS OF ACCESS |</a>  <a href="https://www.stanbicbank.com.gh/Ghana/Conditions-of-access">PRIVACY POLICY |</a>  <a href="https://www.stanbicbank.com.gh/Ghana/Security-centre">SECURITY CENTRE</a> | <a href="https://www.stanbicbank.com.gh/Ghana/Site-Specs">SITE SPECS</a>
                </p> --}}

            </div>
            <img src="/storage/images/sliders/slider4.png" />
            <div id="contactText" class="caption left-align">
                <h3>Contact Us</h3>
                <hr class="contactUs" />
                <br /><br />
                <h5>You can get more information via our various channels</h5>
                <table id="contactUsTable">
                    <tbody>
                        <tr>
                            {{-- <td>
                                <p><img src="/storage/images/icons/eva icon.png" /><br /></p>
                                <p>
                                    <span>You can chat with EVA to help you</span>
                                    <span>navigate your way around. EVA can</span>
                                    <span>you with anything you need.</span>
                                </p>
                                <p id="cuHighligthText"><span>Chat with EVA</span></p>
                            </td> --}}
                            <td>
                                <p><img src="/storage/images/icons/phone icon.png" /><br /></p>
                                <p><span>You can call us on our number</span></p>
                                <p id="cuHighligthText">
                                    <span>+233 (0) 302 815 789</span>
                                </p>
                            </td>
                            <td>
                                <p><img src="/storage/images/icons/mail icon.png" /><br /></p>
                                <p>
                                    <span>You can send us mails via our</span>
                                    <span>address on</span>
                                </p>
                                <p id="cuHighligthText">
                                    <a href="mailto:customercare@stanbic.com.gh">customercare@stanbic.com.gh</span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <table id="contactUsTableResponsive">
                    <tbody>
                        {{-- <tr>
                            <td>
                                <p>
                                    <img src="assets/images/eva icon.png" />
                                    <span>You can chat with EVA to help you</span>
                                    <span>navigate your way around. EVA can</span>
                                    <span>you with anything you need.</span>
                                    <span id="cuHighligthText">Chat with EVA</span>
                                </p>
                            </td>
                        </tr> --}}
                        <tr>
                            <td>
                                <p>
                                    <img src="assets/images/phone icon.png" />
                                    <span>You can call us on our number</span>
                                    <span id="cuHighligthText">+233 (0) 302 815 789</span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <img src="assets/images/mail icon.png" />
                                    <span>You can send us mails via our</span>
                                    <span>address on</span>
                                    <span id="cuHighligthText">customercare@stanbic.com.gh</span>
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </li>
    </ul>
</div>

@endsection
