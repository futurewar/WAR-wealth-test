<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}" />

    <title>{{config('app.name', 'Wealth')}} | @yield('pageName')</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize-social.css')}}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{asset('/css/style.css')}}" media="screen,projection" />
    @if (View::hasSection('Create & Build'))
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @endif


    {{-- @if(View::hasSection('Survey'))
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @endif

    @if(View::hasSection('Results'))
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @endif --}}


    {{-- <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"> --}}
</head>

<body>

    {{-- @if (!View::hasSection('show'))
        @include('inc.navbar')
    @endif --}}

    @yield('content')

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    
    <script>

        $(document).ready(function(){
    $('.collapsible').collapsible();
  });

            let sliderInfo = document.querySelectorAll('.slider-info'),
                arrowRight = document.querySelector('#right'),
                arrowLeft = document.querySelector('#left'),
                current = 0;
        
            function reset() {
                for (let i = 0; i < sliderInfo.length; i++) {
                    sliderInfo[i].style.display = 'none';
                }
            }
        
            function startSlider() {
                reset();
                sliderInfo[0].style.display = 'block';
            }
        
            function prev() {
                reset();
                current--;
                sliderInfo[current].style.display = 'block';
            }
        
            function next() {
                reset();
                current++;
                sliderInfo[current].style.display = 'block';
            }
        
            arrowLeft.addEventListener('click', function () {
                if (current === 0) {
                    current = sliderInfo.length;
                }
                prev();
            })
        
            arrowRight.addEventListener('click', function () {
                if (current === sliderInfo.length - 1) {
                    current = -1;
                }
                next();
            })
            startSlider();



        

            
        </script>
        <script>
        document.getElementById('info2').className = 'hide';
        document.getElementById('info3').className = 'hide';
        document.getElementById('info4').className = 'hide';
        document.getElementById('info5').className = 'hide';
        document.getElementById('info6').className = 'hide';

        document.getElementById('create_title').className = 'hide';
        document.getElementById('live_title').className   = 'hide';
        document.getElementById('save_title').className   = 'hide';
        document.getElementById('share_title').className  = 'hide';
        document.getElementById('plan_title').className   = 'hide';



        var info = document.getElementById('info1').innerHTML;
        var info2 = document.getElementById('info2').innerHTML;
        var info3 = document.getElementById('info3').innerHTML;
        var info4 = document.getElementById('info4').innerHTML;
        var info5 = document.getElementById('info5').innerHTML;
        var info6 = document.getElementById('info6').innerHTML;

        var title = document.getElementById('journey_title').innerHTML;
        var title2 = document.getElementById('create_title').innerHTML;
        var title3 = document.getElementById('live_title').innerHTML;
        var title4 = document.getElementById('save_title').innerHTML;
        var title5 = document.getElementById('share_title').innerHTML;
        var title6 = document.getElementById('plan_title').innerHTML;


        document.getElementById('quad1').addEventListener('mouseover', function(){
            document.getElementById("info1").innerHTML = info2;
       });

       document.getElementById('quad2').addEventListener('mouseover', function(){
            document.getElementById("info1").innerHTML = info3;
       });

       document.getElementById('quad3').addEventListener('mouseover', function(){
            document.getElementById("info1").innerHTML = info4;
       });

       document.getElementById('quad4').addEventListener('mouseover', function(){
            document.getElementById("info1").innerHTML = info5;
       });

       document.getElementById('quad5').addEventListener('mouseover', function(){
            document.getElementById("info1").innerHTML = info6;
       });

        // Change in title
       document.getElementById('quad1').addEventListener('mouseover', function(){
            document.getElementById("journey_title").innerHTML = title2;
       });

       document.getElementById('quad2').addEventListener('mouseover', function(){
            document.getElementById("journey_title").innerHTML = title3;
       });

       document.getElementById('quad3').addEventListener('mouseover', function(){
            document.getElementById("journey_title").innerHTML = title4;
       });

       document.getElementById('quad4').addEventListener('mouseover', function(){
            document.getElementById("journey_title").innerHTML = title5;
       });

       document.getElementById('quad5').addEventListener('mouseover', function(){
            document.getElementById("journey_title").innerHTML = title6;
       });
</script>

<script>
        $(document).ready(function(){
            $('#newpage').hide();
        });

        $('#butt').click(function(){
                $('#newpage').slideToggle("slow");
            });
       

</script>

<script>
    let frameInfo = document.querySelectorAll('.frame-info'),
    right = document.querySelector('#right'),
    left = document.querySelector('#left'),
    curr = 0;

    if(curr === 0){
        $('#left').hide();
    }

    $('#surveyDone').hide();
    
        


function reset_frame() {
    for (let i = 0; i < frameInfo.length; i++) {
        frameInfo[i].style.display = 'none';
    }
}

function startframe() {
    reset_frame();
    frameInfo[0].style.display = 'block';
}

function left_arrow() {
    reset_frame();
    curr--;
    frameInfo[curr].style.display = 'block';

    if(curr === 1){
        $('#left').show();
        $('#surveyDone').hide();
        }

        if(curr !== 7){
        $('#right').show();
        $('#surveyDone').hide();
        }

        if(curr === 0){
        $('#left').hide();
        $('#surveyDone').hide();
        }
}

function right_arrow() {
        reset_frame();
        curr++;
        frameInfo[curr].style.display = 'block';

        if(curr === 7){
        $('#right').hide();
        $('#surveyDone').show();
        }

        if(curr === 1){
         $('#left').show();
         $('#surveyDone').hide();
        }
        
}

left.addEventListener('click', function () {
    if (curr === 0) {
        curr = frameInfo.length;
    }
    left_arrow();
})

right.addEventListener('click', function () {
    if (curr === frameInfo.length - 1) {
       curr = -1;
    }
    right_arrow();

})
startframe();
     
 </script>




    <script>
    $('#surveyDone').click(function(){
        total =0;

        $("input[type=radio]:checked").each(function(){
                total += parseFloat($(this).val());
            });

            localStorage.setItem('score', total);
    var names = []
    var valid = true;

    $('input:radio').each(function () {
        var rname = $(this).attr('name');
        if ($.inArray(rname, names) == -1) names.push(rname);
    });


    $.each(names, function (i, name) {
        if ($('input[name="' + name + '"]:checked').length == 0) {
            valid = false;
            console.log('Please check ' + name);
        }

    });
    console.log(valid);

    
    if(valid == true){
        location.href="/results";
        
    }
    else{
        M.toast({html: 'Please answer all questions!'}) 
    }

        

    });



    </script>

@if (View::hasSection('results'));
<script>
    var tt = localStorage.getItem('score');
    console.log('score' + tt)
    if(tt <= '13'){

            $('#bigSpender').removeClass('hide');
    }
    else if(tt > '13' && tt <= 16){

        $('#moneySensible').removeClass('hide');
    }

    else{

        $('#smartOne').removeClass('hide');
    }
    localStorage.removeItem('score');
    </script>
 @endif


 
<script>
    $(document).ready(function(){
        var t_bill = document.getElementById("t-bill").value = '';
        var bonds = document.getElementById("bonds").value = '';
        var c_deposit = document.getElementById("c-deposit").value = '';
        var f_account = document.getElementById("f-account").value = '';
        var i_funds = document.getElementById("i-funds").value = '';
        var offshore = document.getElementById("offshore").value = '';
        var pensions = document.getElementById("pensions").value = '';
        var savings = document.getElementById("savings").value = '';
        var s_account = document.getElementById("s-account").value = '';
        var r_plan = document.getElementById("r-plan").value = '';
        var equities = document.getElementById("equities").value = '';
        });
    $('#activityDone').click(function (){

     var balanced = document.getElementsByName('balanced');
     var aggressive = document.getElementsByName('aggressive');

     var balancedTotal = 0;
     var aggressiveTotal = 0;

        var empty = true;
        $('input[type="text"]').each(function(){
            if($(this).val()!=""){
                empty =false;
                return false;
            }
        });

     
        
     if(empty == true){
         console.log(empty);
         M.toast({html: 'Please complete the activity'}) 
    

     }
     
     else{
        for(var i=0; i< balanced.length; i++){
            if(parseInt(balanced[i].value))
                balancedTotal += parseInt(balanced[i].value);
      }

        for(var i=0; i< aggressive.length; i++){
            if(parseInt(aggressive[i].value))
            aggressiveTotal += parseInt(aggressive[i].value);
      }

       
      var h = balancedTotal + aggressiveTotal;
        console.log(h);

        if(h == 100000000){
            console.log('yaay');
               localStorage.setItem('balanced', balancedTotal);
               localStorage.setItem('aggressive', aggressiveTotal);
               location.href ="/saveResults";
        }
        else{
            console.log('noo');
         M.toast({html: 'Your total should sum up to the 100M'}) 
            
        }

     }  
        
    });

</script>

@if (View::hasSection('saveResults'));
<script>
    var balancedRes = localStorage.getItem('balanced');
    var aggressiveRes = localStorage.getItem('aggressive');


    console.log('balanced ' + balancedRes);
    console.log('aggressive ' + aggressiveRes);

    if(balanced > aggressiveRes){
         $('#balanced').removeClass('hide');
    }
    else{

         $('#aggressive').removeClass('hide');
    }
    localStorage.removeItem('aggressiveTotal');
    localStorage.removeItem('balancedTotal');

    </script>
 @endif
</body>
<script>
    $('#first').click(function() {
        console.log('hey');
    //  $.scrollTo($('.collapsible-body'), 500);
    $(window).scrollTop($('#firstcont').offset().top-100);
    console.log('hey5');

    //  $("#firstcont")[0].focus();
    });
</script>
</html>
