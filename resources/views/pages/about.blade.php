@extends('layouts.app') 
@section('pageName') Standard Bank Group
@endsection
 
@section('about') About
@endsection
 
@section('content')
<div class="about">
        @include('inc.aboutnavbar')
 
    <div class="contain">
        <div class="center">
            <img id="structure" src="/storage/images/icons/structure_black.png"/>
        </div>
        <div>
            <p>The Standard Bank Group of companies (“Standard Bank”), an entity listed on the 
                Johannesburg Stock Exchange (“JSE”), offers an array of wealth management products 
                and services through which our clients can manage their wealth, grow their wealth 
                or protect their wealth.</p>
        </div>
        
    <ul id="about" class="collapsible popout" data-collapsible="accordion">
        <li>
            <a href="#" ><div  class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Stanbic Africa Holdings Limited</p></div></a>
            <div class="collapsible-body">
                <p>Stanbic Africa Holdings Limited Standard Bank, through Stanbic Africa Holdings Ltd, effectively owns
                    a 99.54% interest in Stanbic Bank Ghana Limited and SBG Securities Ghana Ltd. Standard Bank trades as
                    Stanbic Bank in Ghana.</p>
                <p>Stanbic Bank Ghana Limited Stanbic Bank Ghana Limited (“Stanbic Bank”) offers an integrated suite of end-to-end
                    financial services and banking solutions to individuals, small-to-medium enterprises and large businesses
                    and corporations. Our Personal and Business Banking division serves the increasing need among Africa’s
                    small business and individual clients for banking products that can meet their shifting expectations
                    and growing wealth, while our Corporate and Investment Banking division serves a wide range of requirements
                    for banking, finance, trading, investment, risk management and advisory services.</p>
                <p>SBG Securities Ghana Limited SBG Securities Ghana Limited (“SBG Securities”) is a licensed dealing member
                   of the Ghana Stock Exchange and a member of the Ghana Fixed Income Market (“GFIM”).</p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Liberty Holdings Limited</p></div>
            <div class="collapsible-body">
                <p>Liberty Holdings Limited (“Liberty”), a 54%-owned subsidiary of Standard Bank and separately listed on the JSE,
                    offers life and health related insurance, investment management solutions and financial services to individual
                    and corporate clients across Africa. Liberty actively seeks to identify and develop synergies, joint ventures,
                    coordination of product design, opportunities for secondment of personnel and sharing of knowledge and expertise
                    with other businesses in the Group.</p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>STANLIB Asset Management </p></div>
            <div class="collapsible-body">
                <p>STANLIB Ghana Ltd is a wholly owned subsidiary of STANLIB Asset Management (“STANLIB”), who in turn is wholly-owned
                    by Liberty. STANLIB is a multi-specialist investment house that manages and administers $44 billion (30 June
                    2018) in assets for individual and institutional clients in nine African countries, and has business partnerships
                    in North America, the United Kingdom, Europe, the Middle East and Asia. STANLIB has a highly skilled team
                    of investment professionals, analysts, technical experts, legal and client service professionals committed
                    to helping our clients achieve their long-term investment goals.</p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Stanbic Bank</p></div>
            <div class="collapsible-body">
                <p>Stanbic Bank offers banking and other financial services to clients in 20 African countries, including Ghana.
                    Our products and services are divided into different segments based on specified criteria tailored for the
                    local market context and competitor environment of individual countries. Our Wealth and Investment Business
                    meets the needs and provides a tailored experience to High Net Worth Individuals and their families, while
                    our Personal Markets business meets the needs of other affluent and retail clients who want to transact,
                    save or borrow money. The criteria outlined below, which are broadly in line with the Group parameters, are
                    the baseline used by individual countries to tailor their country-specific criteria for each segment.</p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Wealth and Investment</p></div>
            <div class="collapsible-body">
                <p>At Wealth and Investment, our focus is on finding out what matters most to our clients, by understanding the
                    dreams, goals and ambitions they have for themselves and their families. Together, we will craft a financial
                    plan that ensures that they are living their desired lifestyle and that the generational needs of their families
                    are taken care of.</p>
                    <p><b>CRITERIA:</b> Wealth and Investment looks after clients with the potential of net investable assets
                    of at least $1 million. Our Wealth and Investment teams in South Africa, Uganda, Ghana, Uganda, Nigeria,
                    London, Jersey and Mauritius are available to assist clients with specific investment needs.</p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Affluent Clients (Private and Executive Banking)</p></div>
            <div class="collapsible-body">
                <h6><b>Private Banking</b></h6>
                <p>Private Banking clients are affluent people who often have multiple sources of income, ranging from income from
                    businesses, salaries, rental income, dividends and interest. These multiple sources of income might be in
                    more than one currency.</p>
                    <p><b>NEEDS:</b> Private Banking clients want seamless, convenient financial solutions to help them manage
                    their complex multi-income, multi-currency financial lives, both locally and internationally.</p>
                    <p><b>CRITERIA:</b> For individuals to qualify as Private Banking clients, they need to meet one of the following
                    criteria outlined in the table below: </p>
                    <p>• Individuals with a monthly personal income > GHS 10,000</p>
                    <p>• Key stakeholders and people of influence (e.g. senior individuals in government, parastatals or regulatory bodies)</p>
                    <p>• Commercial Banking clients (in their personal capacity).</p>

                <h6><b>Executive Banking</b></h6>
                <p> The Executive Banking tier is designed for upper
                    middle-class clients who may also have additional sources of income. They make regular payments toward household
                    utilities and services, school fees, household employees, plus younger and older dependents whom they support
                    financially.</p>
                    <p><b>NEEDS:</b> Executive Banking clients want convenient financial solutions to help them manage their multi-income,
                    multi-payment financial lives.</p>
                    <p><b>CRITERIA:</b> For individuals to qualify as Executive Banking clients, they must have a monthly personal
                    income between GHS 3,500 and GHS 9,999.
                </p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Achiever Banking 
                (Salaried and Irregular Income Banking)</p></div>
            <div class="collapsible-body">
                <h6><b>Salaried Banking</b></h6>
                <p>Clients targeted for the Salaried Banking offeringtypically receive a regular monthly salary from a large 
                    corporate and commercial business, government department or donor organisation. Their salary is their 
                    primary source of income. Some may also receive an additional income from rent or a small business.</p>
                    <p><b>NEEDS:</b> Banking clients that require simplified and secure day-to-day banking and financial products
                    at a low cost and prefer self-service to help them manage this. They value quality and expect to receive
                    value for what they get.</p>
                    <p><b>KEY ATTRIBUTES:</b> Salaried Banking clients typically have the attributes outlined in the table below:
                    <p>• Salaried individuals in the 25 to 55 age group.</p>
                    <p>• Individuals that prefer to do their day-to-day banking themselves (lower banking costs).</p> 
                    <p>• Comfortable with banking solutions through new technology/digital capabilities.</p>
                    <p>• Individuals with a gross monthly personal income between GHS 500 to GHS 3,499.</p>

                <h6><b>Irregular Income Banking</b></h6>
                <p>Irregular Income Banking clients typically
                    receive an irregular income in the form of income from an unregistered small business, a wage from a seasonal
                    job or small business and/or a grant.</p>
                    <p><b>NEEDS:</b> Irregular Income Banking clients want convenient access to channels to deposit and withdraw
                    their money, make payments and safely access their money. They want simple and affordable pricing and banking.</p>
                    <p><b>KEY ATTRIBUTES:</b> Irregular Income Banking clients typically have the attributes outlined in the table
                    below: 
                    <p>• Salaried individuals in the 25 to 55 age group</p> 
                    <p>• Individuals that prefer to do their day-to-day banking themselves (lower banking costs)</p>
                    <p>• Comfortable with banking solutions through new technology/digital capabilities</p> 
                    <p>• Individuals with a gross monthly personal income between GHS 500 to GHS 3,499</p>
                    <p>• Mainly self-employed individuals whose business/businesses are not registered</p> 
                    <p>• Low income wage and grant earners</p> 
                    <p>• Individuals who make a monthly deposit of circa GHS 500.</p>
                </p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><img id="button" src="/storage/images/icons/bullet.png"/><p>Liberty</p></div>
            <div class="collapsible-body">
                <p>Liberty is a progressive financial services company that offers a comprehensive range of insurance products and
                        services to meet the changing financial, investment and lifestyle risk needs of our clients, which includes
                        personal, retail and corporate markets. Liberty provides solutions to clients to meet their financial needs
                        (invest) and allow them to prepare for life’s uncertainties throughout their stages of life (protect). We
                        help our clients build and protect long-term wealth. Ultimately, we make a difference in people’s lives by
                        changing their realities and making financial freedom possible.</p>
                </p>
                <h6><b>Where We Operate</b></h6>
                <p>Liberty has a presence in 27 African countries. We have grown from being a South African life insurer to a Pan-African
                    financial services company, offering asset management, investment, insurance and health products to 3.2 million
                    people across Africa.
                </p>
                <h6><b>How We Operate</b></h6>
                <p>Liberty’s target market client segments include multinationals, large corporates, small to medium enterprises
                    and affinities who want to purchase risk and savings products. Our operating model is intended to maximise
                    our focus on these chosen client segments and to more effectively leverage group shared capabilities. We
                    meet the primary needs of our clients by: 
                    <p>• Providing independent and responsible advice regarding financial needs</p> 
                    <p>• Offering ‘easy to understand’ and innovative products which empower decision-making</p>
                    <p>• Ensuring the financial soundness of our financial institution</p>
                    <p>• Maintaining an on-going and trusting relationship</p>
                </p>
                <h6><b>How We Create Value For Clients</b></h6>
                <p>Liberty, the quality of our relationship with clients is directly related to the quality of engagement
                    and communication. We focus on building trust and respect and create value for our clients through
                    the following sources: We meet the primary needs of our clients by: 
                    <p>• Providing independent and responsible advice regarding financial needs </p>
                    <p>• Offering ‘easy to understand’ and innovative products which empower decision-making</p>
                    <p>• Ensuring the financial soundness of our financial institution</p>
                    <p>• Maintaining an on-going and trusting relationship</p>
                    <p>• Risk products</p>
                    <p>• Investment products</p>
                    <p>• Financial advice and administration services</p>
                    <p>• Regulation, governance and equity capital.</p>
                </p>
            </div>
        </li>
        <li>
                <div class="collapsible-header" id="first"><img id="button" src="/storage/images/icons/bullet.png"/><p>STANLIB</p></div>
                <div class="collapsible-body" id="firstcont" tabindex="0">
                    <p>STANLIB is a Pan-African multi-specialist investment company that is active in a number of African countries.
                        We are a premier investment manager, dedicated to the advancement of wealth management through the provision
                        of excellent products, efficient service and client satisfaction.</p>
                    <h6><b>Our Philosophy</b></h6>
                    <p>We believe that no two clients are the same; and in an investment philosophy which dictates that thorough research
                        informs everything we do. STANLIB’s brand is all about focused investing, which is premised on finding opportunities
                        where others may not and working tirelessly to make sure that every decision counts when the time is right.
                        Our teams blend their local insight with international investment management best practices to ensure we
                        always stay in touch with the realities of these markets.</p>
    
                    <h6><b>How We Invest</b></h6>
                    <p>STANLIB’s chosen business model of specialist investment teams allows the investment professionals to focus on
                        what they do best. These small, focused investment teams are the workshops where our client promise of creating
                        financial freedom is crafted by skilled professionals. The team heads have owner-like autonomy with respect
                        to setting specific investment philosophies and processes, while enjoying the support of a shared robust
                        business framework.</p>

                    <h6><b>Our Clients</b></h6>
                    <p>Our retail clients comprise of individual investors and high net-worth individuals seeking to invest at regular
                        intervals or in once-off lump sum investments and our institutional clients are those with short term cash
                        management and medium to long term investment needs.</p>
                </div>
            </li>
    </ul>
    </div>
</div>
@endsection