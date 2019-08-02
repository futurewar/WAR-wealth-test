@extends('layouts.app')
@section('pageName')
Wealth Value Propositions
@endsection

@section('value') Wealth Value Propositions
@endsection

@section('content')
<div id="main">
    @include('inc.aboutnavbar')
    <div class="contain">
    <h5>Introduction</h5>
    <p>A “client value proposition” is defined as “a well-defined and persuasive marketing statement related to a specific product or service that details the reasons why a consumer would benefit from purchasing it”. </p>
            
    <p>From a Standard Bank Group perspective, we believe that our Client Value Proposition is underpinned by following a purposeful, client-centric and 
       relationship-based approach to everything we do. The wealth framework describes this succinctly. We serve our clients by listening to them and providing tailored financial solutions to meet their unique identified goals and needs.</p>
            
    <p>The Wealth Africa Regions Client Value Proposition is built on the four G.R.O.W. pillars, that are outlined below.</p>
            
            <p><b>G- Group Expertise</b></p>
            <p>We have vast access to expertise within the Standard Bank Group, where we offer clients easy to understand solutions that address all aspects of their lives…in an integrated and holistic way! We offer fast and convenient ways to make financial services simpler and more convenient, both onshore and offshore.
            The Standard Bank insurance partnership leverages capabilities between Stanbic Bank and Hollard for General Insurance, and between Stanbic Bank and Metropolitan for Life Insurance, while STANLIB brings specialised asset and investment management expertise to the Group.</p>
            
            <p><b>R- Reputable Brand</b></p>
            <p>The benefits of a strong reputable brand include instilling trust, credibility and a sense of security with clients. It also builds client recognition, differentiation in the market and lends to a greater client loyalty.  Having been founded more than 150 years ago and operating in 20 African countries, the Standard Bank Group has a powerful brand presence across the continent. Standard Bank is currently the largest African bank (by assets) and one of our main differentiators is our long-term commitment to Africa, our home.
            The Standard Bank brand strives to add real value to the daily lives of clients, and has been voted as the most valuable bank brand (in South Africa) from 2012 to 2016. At the core of our values is a commitment to offer relevant and state of the art financial services.</p>
            
            <p><b>O- Our Wealth Philosophy</b></p>
            <p>Our Wealth Philosophy is a relationship-based, client-centric model which follows a personalised approach to financial solutions and results in a sustainable and mutually beneficial partnership. 
            Our Wealth Philosophy seeks to understand a client’s unique set of goals, while finding the balance between CREATING VALUE and GIVING PURPOSE to their wealth.<br>
            <a href="{{"/philosophy"}}"> Go to our wealth philosophy page</a></p>
            
            <p><b>W- Worldwide Footprint</b></p>
            <p>Standard Bank Group is an international organisation with a presence across the African continent and is well placed to capitalise on the opportunities provided by this increasingly important market. 
            Our international base of offices and skilled professionals in London, Jersey, Mauritius, and China provide an essential international dimension to our wealth management services. Furthermore, we have a presence in a number of other countries in the Americas, Europe and Asia Pacific.
            As a result of our worldwide presence, we have capabilities to provide clients with access to manage their finances across borders, as well as make payments and receive money from around the world.</p>
    </div>          
            {{-- <footer class="footer_arrow">
                    <div class="container_arrow">
                   <img id="footer_icon" src="/storage/images/icons/footer.png">
                      <a href="#"><i class="material-icons icon-left">chevron_left</i></a>
                      <a href="#"><i class="material-icons icon-right">chevron_right</i></a>
                    </div>
            </footer> --}} 
   
</div>
@endsection
