@extends('layouts.app')

@section('pageName')
Wealth Philosophy
@endsection

@section('philosophy')
Wealth Philosophy
@endsection
 
@section('content')
<div class="philosophy"> 
      @include('inc.logonavbar')
    <div class="contain">
         <div class="row">
               <div class="phil_title right-align">
                  <h4>Wealth Philosophy</h4>
                  <hr/>
               </div>
                </div>
               <div class="top">
                  <h5>Our Philosophy and Beliefs</h5>
                  <p>Wealth is a relative term as wealth for one person is different to wealth for another person. However, regardless of the levels of 
                     wealth that a client is at, the definition of wealth remains the same: it is a tangible or intangible thing that makes a person, family 
                     or group better off.</p>
                     
                  <p>We have created a model that captures our philosophy or approach to advising clients in the planning and management of their 
                     wealth over time. This is called the Wealth Framework. This model presents a holistic view of a client and their wealth, with 
                     goals-based objectives across each aspect of wealth management: from building and enjoying wealth, to saving wealth to 
                     sharing wealth…while all along planning and protecting wealth.</p>
                     
                  <p>In a nutshell, the objective of our philosophy is to ensure our clients grow, preserve and protect their wealth by taking a long-term
                     approach to their financial matters. We seek to create value for our clients through “create & build” and “save & invest”, and give 
                     purpose to their wealth through “live & enjoy” and “share & legacy”.</p>
                     
                  <p>Our philosophy is built on enduring relationships, true understanding and trust. The focus is on financial partnerships and 
                     relationships, not financial craftsmanship.</p>
                  <br>
                  <h5> Our Five Beliefs</h5>

               </div>
               <br>
               <div>
               <ul id="phil" class="collapsible popout" data-collapsible="accordion">
                  <li>
                    <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Start with the end in mind</p></div>
                    <div class="collapsible-body">
                        <p>• We believe in setting realistic goals in partnership with the individual human 
                              being that speaks to their lifetime, not just their current reality. </p>
                        <p>• We believe that these goals must first and foremost be rooted in their 
                              personal aspirations. </p>
                        <p>• We believe that with careful planning and understanding of the end 
                              destination, wealth becomes a meaningful resource for purposeful living.</p>
                        <p>• We believe that you can plan to succeed.</p>
                    </div>
                  </li>
                  <li>
                    <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Wealth is about your life's purpose</p></div>
                    <div class="collapsible-body">
                        <p>• We believe that true wealth is about leading a life that has a greater purpose 
                              and deeper meaning.  </p>
                          <p>• We believe that the return on a lifetime of working should be a life with greater 
                               purpose – from a secure and happy family, to meaningful memories and ultimately, peace-of-mind.</p>
                          <p>• We believe that we can help human beings achieve a greater sense of purpose with their lives, 
                             through the management of their wealth.</p>
                    </div>
                  </li>
                  <li>
                    <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Wealth is a life-long journey</p></div>
                    <div class="collapsible-body">
                        <p>• We believe that we can help human beings achieve a greater sense of purpose with their lives, 
                              through the management of their wealth.</p>
                        <p> • We believe that this is a journey that we can walk with you and those you love from beginning to end.</p>        
                    </div>
                  </li>
                  <li>
                     <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Risk is relative</p></div>
                     <div class="collapsible-body">
                        <p>• We believe that by focusing on your goals, not benchmarks or returns, risk will naturally be managed.</p>
                        <p>• We believe in matching your assets to your liabilities.</p>
                        <p>• We believe that an investment portfolio is primarily about being objective, not subjective.</p>
                        <p>• We believe that trading and speculation is not necessary if proper planning is in place.</p>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Every client is unique</p></div>
                     <div class="collapsible-body">
                        <p>• We believe that our role is about people’s lives, not the numbers.</p>
                        <p>• We believe that our work is to serve human needs, not solely our own.</p>
                        <p>• We believe that we are each on our own unique journey to wealth creation at different stages of our lives. </p>
                        <p>• We believe in listening and understanding the human being in front of us first; only then proposing a 
                           well-informed solution to address their needs, manage their wants, achieve their desires and reach their dreams.
                     </div>
                  </li>
                </ul>
               </div>
                   </div>
                   <br>
                   <br>
            {{-- <footer class="footer_kente">
               <div class="container_kente">
                  <img id="footer_kente" src="/storage/images/background/kente_bottom.png">
               </div>
            </footer> --}}
        
    </div>            
</div>
@endsection

      

