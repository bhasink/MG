@extends('layouts.layout')

@section('styles')

 <title>Safety and Sanitisation Procedure at Microgrativy</title>
 <meta property="og:title" content="Safety and Sanitisation Procedure at Microgrativy"> 
    <meta property="og:description" content="Read on to know more about all Protective Measures, safety and sanitisation procedures at Microgravity."> 
	
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>


    <style>
        .business-title:after{
            display: none;
        }

        .st3 {
            fill: #000000 !important;
        }

        .app {
            display: flex;
            flex-wrap: unset;
        }
		
		ul.app.news {
    display: block;
}

        .sp{
            width: 100%;
            height: 200px;
            background-color: #fece00;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sp h1{
            font-size: 2.5em;
            font-weight: bolder;
        }

        .common-title{
            display: initial;
            position: relative;
        }

        .common-title:before {
            content: "";
            border-bottom: 8px solid #ffcd00;
            width: 100%;
            margin: 0 auto;
            height: 6px;
            position: absolute;
            left: 0;
            text-align: center;
            right: 0;
            transition-delay: 5s;
            bottom: -10px;
            transition: all .4s ease-in-out;
            z-index: -9999;
        }

        ul.timeline {
            list-style-type: none;
            position: relative;
        }
        ul.timeline:before {
            content: ' ';
            background: #0656e6;
            display: inline-block;
            position: absolute;
            left: 50px;
            width: 1.2px;
            height: 82%;
            top: 7%;
            z-index: 400;
        }
        ul.timeline > li {
            margin: 20px 0;
            padding-left: 20px;
        }
        ul.timeline > li:first-child:before {
            content: url('/images/s1.svg');
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            left: 0px;
            width: 100px;
            height: 100px;
            z-index: 400;
        }

        ul.timeline > li:nth-child(2):before {
            content: url('/images/s2.svg');
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            left: 0px;
            width: 100px;
            height: 100px;
            z-index: 400;
        }

        ul.timeline > li:nth-child(3):before {
            content: url('/images/s3.svg');
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            left: 0px;
            width: 100px;
            height: 100px;
            z-index: 400;
        }


        ul.timeline > li:nth-child(4):before {
            content: url('/images/s4.svg');
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            left: 0px;
            width: 100px;
            height: 100px;
            z-index: 400;
        }

        ul.timeline li {
            padding: 1em;
        }

        ul.timeline a,ul.timeline p {
            padding-left: 6em;
        }

        ul.timeline a {
            color: #0656e6;
            text-transform: uppercase;
            font-weight: bold;
        }

        .app li {
            color: unset;
        }

        .app p {
            margin-top: 1.5rem;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .app li svg {
            width: 130px;
            fill: #fff;
        }

        .se img {
            width: 100%;
        }

        .col-md-6.se {
            position: relative;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .col-md-6.se h3 {
            bottom: 0;
            text-align: center;
            align-items: center;
            display: flex;
            background-color: #0656e6;
            width: 100%;
            margin: 0;
            padding: 10px;
            color: #ffffff;
            font-size: 1.3em;
            font-weight: bold;
            justify-content: center;
        }

        .application {
            padding: 6em 3em 6em 3em !important;
            text-align: center;
        }

        .app li {
            height: unset;
        }

        .application h1 {
            font-weight: bold;
        }

        .hero-text-safety {
            display: flex;
            justify-content: center;
            align-items: center;
            background: url(../images/safety-banner.jpg) center no-repeat;
            background-position: bottom;
            height: 70vh;
            background-size: cover;
            text-align: center;
            flex-direction: column;
            position: relative;
            border-bottom: 8px solid #fece00;
            color: #fff;
        }

        @media screen and (max-width: 768px){
            .app {
            display: flex;
            flex-wrap: wrap;
            }

            .se {
                padding: 10px;
            }

            ul.timeline a, ul.timeline p {
                padding-left: 0em;
            }

            ul.timeline > li {
                margin: 0;
            }

            ul.timeline:before{
                display: none;
            }

            ul.timeline > li:first-child:before{
                display: none;
            }

            ul.timeline > li:nth-child(2):before{
                display: none;
            }
            ul.timeline > li:nth-child(3):before{
                display: none;
            }
            ul.timeline > li:nth-child(4):before{
                display: none;
            }

            ul.timeline {
                list-style-type: none;
                position: relative;
                padding: 0;
            }

            ul.timeline p {
                font-size: 1.2em;
                margin-top: 10px;
            }

            .sp h1 {
                font-size: 2em;
            }
        }
    </style>

@endsection
@section('content')

    <div class="hero-text-safety blend-blue-light" style="justify-content: flex-end;
    padding-bottom:10px;">

        <h1 class="business-title">Safety and Sanitisation Procedure </h1>

    </div>


    <!--<section class="container-fluid sp">
        <h1>Special Procedures <br> To Be Followed</h1>
    </section> -->
	
	<section class="application new-cusromixe bgtransparent">
<div class="container">
        <div class="col-md-12">
            <h2 class="common-title1">Protective Measures
			
			</h2>
			<p>So you take risks in the game, not in the arena </p>
			
			
			<div class="arenaimgs">
				<div class="row">
					 <div class="col-md-2">
							<img src="./images/Signify.png" class="img-fluid"alt="Microgravity Protective Safety Measures">
					 </div>
					<div class="col-md-10">
						<p style="font-size: 1.2em;text-align: left;margin: 0 !important;" class="business-text">COVID-19 is still a very real threat to the world and Microgravity aims to bring this experience to everyone in the most fun, safe and immersive manner. We have partnered exclusively with Signify (formerly Philips Lighting) to ensure a multipronged disinfection strategy at the arena. 
            </p><p style="font-size: 1.2em;text-align: left;margin: 0 0 !important;" class="business-text">The company uses best-in-class equipment for this service, which is carried out by trained and certified operators dressed up in mandated protective gear. The effectiveness of Signify’s UV-C light sources to deactivate viruses has been validated by Boston University.</p>
					 </div>
				</div>
			</div>
			
			<p style="font-size: 1.2em;" class="business-text">Besides social distancing and other safety norms, we also follow a four-step routine. This consists of disinfecting the entire arena with-
            </p>
			
        </div>
		
		
		
		
		<div class="col-md-12 ">
           
            <ul class="app news">
			
				<li>
                    <div>
                     <img src="./images/UV disinfectant light unit.svg" alt="UV disinfectant light unit">
                    </div>
                    <span>UV disinfectant light unit</span>
                 
                </li>
				
				<li>
                    <div>
                       <img src="./images/UVC Handheld Disinfectant.svg" alt="UVC Handheld Disinfectant">
                    </div>
                    <span>UVC Handheld Disinfectant</span>


                </li>
				
                <li>
                    <div>
						<img src="./images/Covibusters disinfection services.svg" alt="Covibusters disinfection services">
                    </div>
                   <span>Covibusters disinfection services</span>
                    
                </li>

                <li>
                    <div>
                       <img src="./images/UV-C Disinfection Chamber.svg" alt="UV-C Disinfection Chamber"> 
                    </div>
                   
                    <span>UV-C Disinfection Chamber</span>

                </li>

                

            </ul>
        </div>
		</div>
    </section>


    <section class="container">
	
        <div class="container  mb-5">
		  <div class="col-md-12 text-center mb-5">
		<h2 class="common-title1">Special Procedures</h2> 
		</div>
            <div class="row">
                <div class="col-md-8 offset-md-3">

                    <ul class="timeline">
                        <li>
                            <a target="_blank" href="#">Before Entry</a>
                            <p>Check Temperature and deny entry to those not meeting the criteria. <br>
                                Ensure face masks is worn by everyone.</p>
                        </li>
                        <li>
                            <a href="#">Inside the Centre</a>
                            <p>Place hand sanitizers. <br>
                                Ensure customers follow Social Distancing. <br>
                                Good hygiene habits placards to be displayed. <br>
                                Experience state-of-the-art UV disinfection.</p>
                        </li>
                        <li>
                            <a href="#">Pre and Post Gameplay</a>
                            <p>All the equipment to get disinfected before and after every gameplay. <br>
                                VR eye masks to be used extensively</p>
                        </li>
                        <li>
                            <a href="#">Guidelines for the Staff</a>
                            <p>Unwell staff to stay at home. <br>
                                Wear masks and gloves all the time. <br>
                                All the cash to be disinfected first. </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="container secimg">

        <div class="col-md-12 row" style="margin: 0;">
            <div class=" col-md-6 se">
                <div class="sw">
                    <img src="/images/sc5.jpg" alt="Social Distancing Maintained">
                    <h3>Social Distancing Maintained</h3>
                </div>
            </div>

            <div class="col-md-6 se">
              <div class="sw">
                  <img src="/images/sc6.jpg" alt="Disinfected After Regular Intervals">
                  <h3>Disinfected After Regular Intervals</h3>
              </div>
            </div>
        </div>

    </section>


    <section class="container application">

        <div class="col-md-12 ">
            <h2 class="common-title1">Precautionary Equipments</h2>
            <ul class="app">
                <li>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 194.7 194.7" style="enable-background:new 0 0 194.7 194.7;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;}
    .st2{opacity:0.25;clip-path:url(#SVGID_2_);}
    .st3{fill:#FFC400;}
    .st4{opacity:0.22;clip-path:url(#SVGID_4_);fill:url(#SVGID_5_);}
    .st5{opacity:0.22;clip-path:url(#SVGID_7_);fill:url(#SVGID_8_);}
    .st6{opacity:0.22;clip-path:url(#SVGID_10_);fill:url(#SVGID_11_);}
    .st7{opacity:0.22;clip-path:url(#SVGID_13_);fill:url(#SVGID_14_);}
    .st8{opacity:0.17;clip-path:url(#SVGID_16_);}
    .st9{opacity:0.5;}
    .st10{fill:#032880;}
    .st11{opacity:0.5;clip-path:url(#SVGID_16_);}
    .st12{clip-path:url(#SVGID_16_);fill:#032880;}
    .st13{opacity:0.22;clip-path:url(#SVGID_16_);}
    .st14{fill:url(#SVGID_17_);}
    .st15{fill:url(#SVGID_18_);}
    .st16{fill:url(#SVGID_19_);}
    .st17{fill:url(#SVGID_20_);}
    .st18{fill:url(#SVGID_21_);}
    .st19{fill:#2D2D2D;}
    .st20{fill:url(#SVGID_22_);}
    .st21{fill:url(#SVGID_23_);}
    .st22{fill:url(#SVGID_24_);}
    .st23{display:inline;fill:#27B016;}
    .st24{opacity:0.22;clip-path:url(#SVGID_26_);fill:url(#SVGID_27_);}
    .st25{opacity:0.22;clip-path:url(#SVGID_29_);fill:url(#SVGID_30_);}
    .st26{opacity:0.17;clip-path:url(#SVGID_32_);}
    .st27{opacity:0.5;clip-path:url(#SVGID_32_);}
    .st28{clip-path:url(#SVGID_32_);fill:#032880;}
    .st29{opacity:0.22;clip-path:url(#SVGID_32_);}
    .st30{fill:url(#SVGID_33_);}
    .st31{fill:url(#SVGID_34_);}
    .st32{fill:url(#SVGID_35_);}
    .st33{fill:url(#SVGID_36_);}
    .st34{fill:url(#SVGID_37_);}
    .st35{fill:url(#SVGID_38_);}
    .st36{fill:url(#SVGID_39_);}
    .st37{fill:url(#SVGID_40_);}
    .st38{opacity:0.22;clip-path:url(#SVGID_42_);fill:url(#SVGID_43_);}
    .st39{opacity:0.22;clip-path:url(#SVGID_45_);fill:url(#SVGID_46_);}
    .st40{opacity:0.17;clip-path:url(#SVGID_48_);}
    .st41{opacity:0.5;clip-path:url(#SVGID_48_);}
    .st42{clip-path:url(#SVGID_48_);fill:#032880;}
    .st43{opacity:0.22;clip-path:url(#SVGID_48_);}
    .st44{fill:url(#SVGID_49_);}
    .st45{fill:url(#SVGID_50_);}
    .st46{fill:url(#SVGID_51_);}
    .st47{fill:url(#SVGID_52_);}
    .st48{fill:url(#SVGID_53_);}
    .st49{fill:url(#SVGID_54_);}
    .st50{fill:url(#SVGID_55_);}
    .st51{fill:url(#SVGID_56_);}
    .st52{display:inline;fill:#FFC400;}
    .st53{display:inline;fill:#636363;}
    .st54{fill:#636363;}
    .st55{fill:#F5F6F7;}
    .st56{fill:#1E1E1E;}
    .st57{fill:#0757E5;}
    .st58{fill:#444444;}
    .st59{fill:#FFFFFF;}
    .st60{fill:url(#SVGID_57_);}
    .st61{fill:url(#SVGID_58_);}
    .st62{fill:url(#SVGID_59_);}
    .st63{clip-path:url(#SVGID_61_);fill:url(#SVGID_62_);}
    .st64{clip-path:url(#SVGID_64_);fill:url(#SVGID_65_);}
    .st65{clip-path:url(#SVGID_67_);fill:url(#SVGID_68_);}
    .st66{fill:none;stroke:#282828;stroke-width:2.5;stroke-linejoin:round;stroke-miterlimit:10;}
    .st67{fill:#282828;}
    .st68{fill:none;}
    .st69{fill:#212121;}
    .st70{clip-path:url(#SVGID_70_);fill:#E6E4E2;}
    .st71{clip-path:url(#SVGID_70_);fill:#C6BBB6;}
    .st72{opacity:0.46;fill:url(#SVGID_71_);}
    .st73{opacity:0.8;fill:url(#SVGID_72_);}
    .st74{fill:#F30F0E;}
    .st75{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
    .st76{clip-path:url(#SVGID_74_);}
    .st77{fill:#161616;}
    .st78{fill:none;stroke:#0757E5;stroke-miterlimit:10;}
    .st79{clip-path:url(#SVGID_78_);fill:url(#SVGID_79_);}
    .st80{clip-path:url(#SVGID_81_);fill:url(#SVGID_82_);}
    .st81{clip-path:url(#SVGID_84_);fill:url(#SVGID_85_);}
    .st82{opacity:0.8;fill:url(#SVGID_88_);}
    .st83{clip-path:url(#SVGID_90_);}
    .st84{fill:none;stroke:#161616;stroke-miterlimit:10;}
    .st85{clip-path:url(#SVGID_106_);fill:url(#SVGID_107_);}
    .st86{clip-path:url(#SVGID_109_);fill:url(#SVGID_110_);}
    .st87{clip-path:url(#SVGID_112_);fill:url(#SVGID_113_);}
    .st88{clip-path:url(#SVGID_115_);fill:#E6E4E2;}
    .st89{clip-path:url(#SVGID_115_);fill:#C6BBB6;}
    .st90{opacity:0.33;fill:url(#SVGID_116_);}
    .st91{clip-path:url(#SVGID_118_);fill:#E6E4E2;}
    .st92{clip-path:url(#SVGID_118_);fill:#C6BBB6;}
    .st93{opacity:0.33;fill:url(#SVGID_119_);}
    .st94{clip-path:url(#SVGID_121_);}
    .st95{opacity:0.53;fill:#444444;}
    .st96{clip-path:url(#SVGID_133_);fill:url(#SVGID_134_);}
    .st97{clip-path:url(#SVGID_136_);fill:url(#SVGID_137_);}
    .st98{clip-path:url(#SVGID_139_);fill:url(#SVGID_140_);}
    .st99{clip-path:url(#SVGID_142_);fill:#E6E4E2;}
    .st100{clip-path:url(#SVGID_142_);fill:#C6BBB6;}
    .st101{opacity:0.46;fill:url(#SVGID_143_);}
    .st102{clip-path:url(#SVGID_145_);}
    .st103{clip-path:url(#SVGID_153_);fill:url(#SVGID_154_);}
    .st104{clip-path:url(#SVGID_156_);fill:url(#SVGID_157_);}
    .st105{clip-path:url(#SVGID_159_);fill:url(#SVGID_160_);}
    .st106{clip-path:url(#SVGID_162_);fill:#E6E4E2;}
    .st107{clip-path:url(#SVGID_162_);fill:#C6BBB6;}
    .st108{opacity:0.46;fill:url(#SVGID_163_);}
    .st109{clip-path:url(#SVGID_165_);}
    .st110{fill:#303030;}
    .st111{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st112{fill:url(#SVGID_188_);}
    .st113{fill:url(#SVGID_189_);}
    .st114{fill:url(#SVGID_190_);}
</style>
                            <g id="background" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <path class="st57" d="M194.7,97.4c0,53.8-43.6,97.4-97.4,97.4S0,151.2,0,97.4C0,43.6,43.6,0,97.4,0S194.7,43.6,194.7,97.4"/>
                                    <g id="Infrared_Thermometer_Gun_5_">
                                        <g id="Outline_5_">
                                            <path class="st59" d="M87.5,82.7c3.1,0,5.6-2.5,5.6-5.6c0-3.1-2.5-5.6-5.6-5.6c-3.1,0-5.6,2.5-5.6,5.6
					C81.9,80.2,84.4,82.7,87.5,82.7z M87.5,74.4c1.5,0,2.8,1.2,2.8,2.8c0,1.5-1.2,2.8-2.8,2.8c-1.5,0-2.8-1.2-2.8-2.8
					C84.7,75.6,86,74.4,87.5,74.4z"/>
                                            <path class="st59" d="M101.4,82.7c3.1,0,5.6-2.5,5.6-5.6c0-3.1-2.5-5.6-5.6-5.6s-5.6,2.5-5.6,5.6
					C95.8,80.2,98.3,82.7,101.4,82.7z M101.4,74.4c1.5,0,2.8,1.2,2.8,2.8c0,1.5-1.2,2.8-2.8,2.8c-1.5,0-2.8-1.2-2.8-2.8
					C98.6,75.6,99.8,74.4,101.4,74.4z"/>
                                            <path class="st59" d="M115.3,82.7c3.1,0,5.6-2.5,5.6-5.6c0-3.1-2.5-5.6-5.6-5.6s-5.6,2.5-5.6,5.6
					C109.7,80.2,112.2,82.7,115.3,82.7z M115.3,74.4c1.5,0,2.8,1.2,2.8,2.8c0,1.5-1.2,2.8-2.8,2.8s-2.8-1.2-2.8-2.8
					C112.5,75.6,113.7,74.4,115.3,74.4z"/>
                                            <path class="st59" d="M84.7,68.8h5.6c0.8,0,1.4-0.6,1.4-1.4S91,66,90.3,66h-5.6c-0.8,0-1.4,0.6-1.4,1.4S84,68.8,84.7,68.8z"/>
                                            <path class="st59" d="M98.6,68.8h5.6c0.8,0,1.4-0.6,1.4-1.4s-0.6-1.4-1.4-1.4h-5.6c-0.8,0-1.4,0.6-1.4,1.4S97.8,68.8,98.6,68.8z
					"/>
                                            <path class="st59" d="M112.5,68.8h5.6c0.8,0,1.4-0.6,1.4-1.4S118.8,66,118,66h-5.6c-0.8,0-1.4,0.6-1.4,1.4
					S111.7,68.8,112.5,68.8z"/>
                                            <path class="st59" d="M134.7,54.9H77.8c-2.6,0-5.4,0.4-6.8,3.6c0,0,0,0,0,0.1l-8.3,20.8c-0.1,0.2-0.1,0.3-0.1,0.5
					c0,4.8,2.6,7.8,7.8,9.3c-5.4,14.1-5.9,34.3,2,53.7c0.7,1.6,1.7,0.5,21.2,0.9c3.6,0,6.6-3,6.6-6.6c0-0.4,0-0.9-0.1-1.3
					c-1.3-6.2-2.1-13.9-1.6-20.9c6,0.1,16.3-1.8,15.4-4.8c-2.9-9.8-0.5-13.5-3.2-13.5c-0.8,0-1.4,0.6-1.4,1.4
					c0,4.9,1.1,9.8,1.6,11.8c-1.6,0.8-5.5,2.4-12.2,2.3C100.3,98.4,107.2,91,125,91h9.7c3.1,0,5.5-2.5,5.6-5.6v-25
					C140.2,57.4,137.7,54.9,134.7,54.9z M96.5,139.6c-2,2.5-3.6,1-22,1.4c-0.7-1.9-1.4-3.7-2-5.6h24.5
					C97.3,136.7,97.7,138,96.5,139.6z M129.1,88.2H125c-21.2,0-33.8,10.5-28.4,44.4H71.8C67,115,69.4,97.5,73.5,88.8c0,0,0,0,0,0
					c0,0,0,0,0,0c0-0.1,0-0.1,0.1-0.2c0,0,0,0,0,0l2.9-11.2c0.2-0.7-0.3-1.5-1-1.7c-0.7-0.2-1.5,0.3-1.7,1l-2.6,9.9
					c-5-1.3-5.9-3.9-5.9-6.4l8.2-20.5c0.7-1.5,1.8-1.9,4.3-1.9h0.9l-2.1,8.2c-0.2,0.7,0.3,1.5,1,1.7s1.5-0.3,1.7-1l2.3-8.9h47.5
					V88.2z M137.5,85.5c0,1.5-1.2,2.8-2.8,2.8h-2.8V57.7h2.8c1.5,0,2.8,1.2,2.8,2.8V85.5z"/>
                                            <circle class="st59" cx="76.4" cy="71.6" r="1.4"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <p> I R Thermometer</p>


                </li>

                <li>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 194.7 194.7" style="enable-background:new 0 0 194.7 194.7;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;}
    .st2{opacity:0.25;clip-path:url(#SVGID_2_);}
    .st3{fill:#FFC400;}
    .st4{opacity:0.22;clip-path:url(#SVGID_4_);fill:url(#SVGID_5_);}
    .st5{opacity:0.22;clip-path:url(#SVGID_7_);fill:url(#SVGID_8_);}
    .st6{opacity:0.22;clip-path:url(#SVGID_10_);fill:url(#SVGID_11_);}
    .st7{opacity:0.22;clip-path:url(#SVGID_13_);fill:url(#SVGID_14_);}
    .st8{opacity:0.17;clip-path:url(#SVGID_16_);}
    .st9{opacity:0.5;}
    .st10{fill:#032880;}
    .st11{opacity:0.5;clip-path:url(#SVGID_16_);}
    .st12{clip-path:url(#SVGID_16_);fill:#032880;}
    .st13{opacity:0.22;clip-path:url(#SVGID_16_);}
    .st14{fill:url(#SVGID_17_);}
    .st15{fill:url(#SVGID_18_);}
    .st16{fill:url(#SVGID_19_);}
    .st17{fill:url(#SVGID_20_);}
    .st18{fill:url(#SVGID_21_);}
    .st19{fill:#2D2D2D;}
    .st20{fill:url(#SVGID_22_);}
    .st21{fill:url(#SVGID_23_);}
    .st22{fill:url(#SVGID_24_);}
    .st23{display:inline;fill:#27B016;}
    .st24{opacity:0.22;clip-path:url(#SVGID_26_);fill:url(#SVGID_27_);}
    .st25{opacity:0.22;clip-path:url(#SVGID_29_);fill:url(#SVGID_30_);}
    .st26{opacity:0.17;clip-path:url(#SVGID_32_);}
    .st27{opacity:0.5;clip-path:url(#SVGID_32_);}
    .st28{clip-path:url(#SVGID_32_);fill:#032880;}
    .st29{opacity:0.22;clip-path:url(#SVGID_32_);}
    .st30{fill:url(#SVGID_33_);}
    .st31{fill:url(#SVGID_34_);}
    .st32{fill:url(#SVGID_35_);}
    .st33{fill:url(#SVGID_36_);}
    .st34{fill:url(#SVGID_37_);}
    .st35{fill:url(#SVGID_38_);}
    .st36{fill:url(#SVGID_39_);}
    .st37{fill:url(#SVGID_40_);}
    .st38{opacity:0.22;clip-path:url(#SVGID_42_);fill:url(#SVGID_43_);}
    .st39{opacity:0.22;clip-path:url(#SVGID_45_);fill:url(#SVGID_46_);}
    .st40{opacity:0.17;clip-path:url(#SVGID_48_);}
    .st41{opacity:0.5;clip-path:url(#SVGID_48_);}
    .st42{clip-path:url(#SVGID_48_);fill:#032880;}
    .st43{opacity:0.22;clip-path:url(#SVGID_48_);}
    .st44{fill:url(#SVGID_49_);}
    .st45{fill:url(#SVGID_50_);}
    .st46{fill:url(#SVGID_51_);}
    .st47{fill:url(#SVGID_52_);}
    .st48{fill:url(#SVGID_53_);}
    .st49{fill:url(#SVGID_54_);}
    .st50{fill:url(#SVGID_55_);}
    .st51{fill:url(#SVGID_56_);}
    .st52{display:inline;fill:#FFC400;}
    .st53{display:inline;fill:#636363;}
    .st54{fill:#636363;}
    .st55{fill:#F5F6F7;}
    .st56{fill:#1E1E1E;}
    .st57{fill:#0757E5;}
    .st58{fill:#444444;}
    .st59{fill:#FFFFFF;}
    .st60{fill:url(#SVGID_57_);}
    .st61{fill:url(#SVGID_58_);}
    .st62{fill:url(#SVGID_59_);}
    .st63{clip-path:url(#SVGID_61_);fill:url(#SVGID_62_);}
    .st64{clip-path:url(#SVGID_64_);fill:url(#SVGID_65_);}
    .st65{clip-path:url(#SVGID_67_);fill:url(#SVGID_68_);}
    .st66{fill:none;stroke:#282828;stroke-width:2.5;stroke-linejoin:round;stroke-miterlimit:10;}
    .st67{fill:#282828;}
    .st68{fill:none;}
    .st69{fill:#212121;}
    .st70{clip-path:url(#SVGID_70_);fill:#E6E4E2;}
    .st71{clip-path:url(#SVGID_70_);fill:#C6BBB6;}
    .st72{opacity:0.46;fill:url(#SVGID_71_);}
    .st73{opacity:0.8;fill:url(#SVGID_72_);}
    .st74{fill:#F30F0E;}
    .st75{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
    .st76{clip-path:url(#SVGID_74_);}
    .st77{fill:#161616;}
    .st78{fill:none;stroke:#0757E5;stroke-miterlimit:10;}
    .st79{clip-path:url(#SVGID_78_);fill:url(#SVGID_79_);}
    .st80{clip-path:url(#SVGID_81_);fill:url(#SVGID_82_);}
    .st81{clip-path:url(#SVGID_84_);fill:url(#SVGID_85_);}
    .st82{opacity:0.8;fill:url(#SVGID_88_);}
    .st83{clip-path:url(#SVGID_90_);}
    .st84{fill:none;stroke:#161616;stroke-miterlimit:10;}
    .st85{clip-path:url(#SVGID_106_);fill:url(#SVGID_107_);}
    .st86{clip-path:url(#SVGID_109_);fill:url(#SVGID_110_);}
    .st87{clip-path:url(#SVGID_112_);fill:url(#SVGID_113_);}
    .st88{clip-path:url(#SVGID_115_);fill:#E6E4E2;}
    .st89{clip-path:url(#SVGID_115_);fill:#C6BBB6;}
    .st90{opacity:0.33;fill:url(#SVGID_116_);}
    .st91{clip-path:url(#SVGID_118_);fill:#E6E4E2;}
    .st92{clip-path:url(#SVGID_118_);fill:#C6BBB6;}
    .st93{opacity:0.33;fill:url(#SVGID_119_);}
    .st94{clip-path:url(#SVGID_121_);}
    .st95{opacity:0.53;fill:#444444;}
    .st96{clip-path:url(#SVGID_133_);fill:url(#SVGID_134_);}
    .st97{clip-path:url(#SVGID_136_);fill:url(#SVGID_137_);}
    .st98{clip-path:url(#SVGID_139_);fill:url(#SVGID_140_);}
    .st99{clip-path:url(#SVGID_142_);fill:#E6E4E2;}
    .st100{clip-path:url(#SVGID_142_);fill:#C6BBB6;}
    .st101{opacity:0.46;fill:url(#SVGID_143_);}
    .st102{clip-path:url(#SVGID_145_);}
    .st103{clip-path:url(#SVGID_153_);fill:url(#SVGID_154_);}
    .st104{clip-path:url(#SVGID_156_);fill:url(#SVGID_157_);}
    .st105{clip-path:url(#SVGID_159_);fill:url(#SVGID_160_);}
    .st106{clip-path:url(#SVGID_162_);fill:#E6E4E2;}
    .st107{clip-path:url(#SVGID_162_);fill:#C6BBB6;}
    .st108{opacity:0.46;fill:url(#SVGID_163_);}
    .st109{clip-path:url(#SVGID_165_);}
    .st110{fill:#303030;}
    .st111{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st112{fill:url(#SVGID_188_);}
    .st113{fill:url(#SVGID_189_);}
    .st114{fill:url(#SVGID_190_);}
</style>
                            <g id="background" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <path class="st57" d="M194.7,97.4c0,53.8-43.6,97.4-97.4,97.4S0,151.2,0,97.4C0,43.6,43.6,0,97.4,0S194.7,43.6,194.7,97.4"/>
                                    <g>
                                        <path class="st59" d="M117.6,77.2l-12.8-7.7v-9.2c0-1.8-1.5-3.3-3.3-3.3h-0.1v-3.6h16.9c0.9,0,1.6-0.7,1.6-1.6
				c0-4.6-3.7-8.3-8.3-8.3H91.5c-1.8,0-3.3,1.5-3.3,3.3v5c0,0.9,0.7,1.6,1.6,1.6h1.8v3.6h-0.1c-1.8,0-3.3,1.5-3.3,3.3v10.1
				c0,0.9,0.7,1.6,1.6,1.6h13l13.2,7.9c1.5,0.9,2.5,2.6,2.5,4.4v60.2c0,1.9-1.6,3.5-3.5,3.5H78c-1.9,0-3.5-1.6-3.5-3.5V84.4
				c0-1.8,1-3.5,2.5-4.4l7.2-4.3c0.7-0.4,1-1.4,0.5-2.2c-0.4-0.7-1.4-1-2.2-0.5l-7.2,4.3c-2.5,1.5-4,4.2-4,7.1v60.2
				c0,3.7,3,6.6,6.6,6.6h37c3.7,0,6.6-3,6.6-6.6V84.4C121.7,81.5,120.1,78.7,117.6,77.2L117.6,77.2z M91.4,46.9c0-0.1,0-0.1,0.1-0.1
				h20.2c2.3,0,4.2,1.5,4.9,3.6H91.4L91.4,46.9z M94.7,53.5h3.6v3.6h-3.6V53.5z M101.7,68.9H91.4v-8.5c0-0.1,0-0.1,0.1-0.1h10.1
				c0.1,0,0.1,0,0.1,0.1V68.9z"/>
                                        <path class="st59" d="M121.4,59.9c-0.9-1.4-1.8-2.3-1.9-2.3c-0.3-0.3-0.7-0.5-1.1-0.5s-0.8,0.2-1.1,0.5c0,0-1,1-1.9,2.3
				c-1.3,1.9-1.9,3.8-1.9,5.5c0,2.7,2.2,4.9,4.9,4.9s4.9-2.2,4.9-4.9C123.4,63.7,122.7,61.8,121.4,59.9z M118.4,67.2
				c-1,0-1.8-0.8-1.8-1.8c0-1.5,0.9-3.1,1.8-4.3c0.9,1.2,1.8,2.8,1.8,4.3C120.2,66.4,119.4,67.2,118.4,67.2z"/>
                                        <path class="st59" d="M86.9,100.7c2.6-2.1,6-3.4,9.6-3.4c3.3,0,6.5,1.1,9.2,3.1c0.7,0.5,1.7,0.4,2.2-0.3c0.5-0.7,0.4-1.7-0.3-2.2
				c-3.2-2.4-7-3.7-11.1-3.7c-10.2,0-18.4,8.3-18.4,18.4c0,10.2,8.3,18.4,18.4,18.4c10.2,0,18.4-8.3,18.4-18.4c0-3-0.8-6-2.2-8.7
				c-0.4-0.8-1.4-1.1-2.1-0.6c-0.8,0.4-1.1,1.4-0.6,2.1c1.2,2.2,1.8,4.7,1.8,7.2c0,3.6-1.3,7-3.4,9.6l-5-5c0.6-0.9,1.1-2,1.3-3.1
				h0.3c0.9,0,1.6-0.7,1.6-1.6s-0.7-1.6-1.6-1.6h-0.3c-0.2-1.1-0.7-2.2-1.3-3.1l0.2-0.2c0.6-0.6,0.6-1.6,0-2.2
				c-0.6-0.6-1.6-0.6-2.2,0l-0.2,0.2c-0.9-0.6-2-1.1-3.1-1.3v-0.3c0-0.9-0.7-1.6-1.6-1.6c-0.9,0-1.6,0.7-1.6,1.6v0.3
				c-1.1,0.2-2.2,0.7-3.1,1.3L86.9,100.7z M98.9,117.1c-0.7,0.4-1.5,0.6-2.4,0.6c-2.8,0-5.2-2.3-5.2-5.2c0-0.8,0.2-1.7,0.6-2.4
				L98.9,117.1z M81.3,112.5c0-3.6,1.3-7,3.4-9.6l5,5c-0.6,0.9-1.1,2-1.3,3.1h-0.3c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6
				h0.3c0.2,1.1,0.7,2.2,1.3,3.1l-0.2,0.2c-0.6,0.6-0.6,1.6,0,2.2c0.3,0.3,0.7,0.5,1.1,0.5c0.4,0,0.8-0.2,1.1-0.5l0.2-0.2
				c0.9,0.6,2,1.1,3.1,1.3v0.3c0,0.9,0.7,1.6,1.6,1.6s1.6-0.7,1.6-1.6v-0.3c1.1-0.2,2.2-0.7,3.1-1.3l5,5c-2.6,2.1-6,3.4-9.6,3.4
				C88.1,127.8,81.3,120.9,81.3,112.5z M96.5,107.4c2.8,0,5.2,2.3,5.2,5.2c0,0.8-0.2,1.7-0.6,2.4l-6.9-6.9
				C94.9,107.6,95.7,107.4,96.5,107.4L96.5,107.4z"/>
                                    </g>
                                </g>
                            </g>
</svg>


                    </div>
                    <p>Hand Sanitizer</p>


                </li>

                <li>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 194.7 194.7" style="enable-background:new 0 0 194.7 194.7;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;}
    .st2{opacity:0.25;clip-path:url(#SVGID_2_);}
    .st3{fill:#FFC400;}
    .st4{opacity:0.22;clip-path:url(#SVGID_4_);fill:url(#SVGID_5_);}
    .st5{opacity:0.22;clip-path:url(#SVGID_7_);fill:url(#SVGID_8_);}
    .st6{opacity:0.22;clip-path:url(#SVGID_10_);fill:url(#SVGID_11_);}
    .st7{opacity:0.22;clip-path:url(#SVGID_13_);fill:url(#SVGID_14_);}
    .st8{opacity:0.17;clip-path:url(#SVGID_16_);}
    .st9{opacity:0.5;}
    .st10{fill:#032880;}
    .st11{opacity:0.5;clip-path:url(#SVGID_16_);}
    .st12{clip-path:url(#SVGID_16_);fill:#032880;}
    .st13{opacity:0.22;clip-path:url(#SVGID_16_);}
    .st14{fill:url(#SVGID_17_);}
    .st15{fill:url(#SVGID_18_);}
    .st16{fill:url(#SVGID_19_);}
    .st17{fill:url(#SVGID_20_);}
    .st18{fill:url(#SVGID_21_);}
    .st19{fill:#2D2D2D;}
    .st20{fill:url(#SVGID_22_);}
    .st21{fill:url(#SVGID_23_);}
    .st22{fill:url(#SVGID_24_);}
    .st23{display:inline;fill:#27B016;}
    .st24{opacity:0.22;clip-path:url(#SVGID_26_);fill:url(#SVGID_27_);}
    .st25{opacity:0.22;clip-path:url(#SVGID_29_);fill:url(#SVGID_30_);}
    .st26{opacity:0.17;clip-path:url(#SVGID_32_);}
    .st27{opacity:0.5;clip-path:url(#SVGID_32_);}
    .st28{clip-path:url(#SVGID_32_);fill:#032880;}
    .st29{opacity:0.22;clip-path:url(#SVGID_32_);}
    .st30{fill:url(#SVGID_33_);}
    .st31{fill:url(#SVGID_34_);}
    .st32{fill:url(#SVGID_35_);}
    .st33{fill:url(#SVGID_36_);}
    .st34{fill:url(#SVGID_37_);}
    .st35{fill:url(#SVGID_38_);}
    .st36{fill:url(#SVGID_39_);}
    .st37{fill:url(#SVGID_40_);}
    .st38{opacity:0.22;clip-path:url(#SVGID_42_);fill:url(#SVGID_43_);}
    .st39{opacity:0.22;clip-path:url(#SVGID_45_);fill:url(#SVGID_46_);}
    .st40{opacity:0.17;clip-path:url(#SVGID_48_);}
    .st41{opacity:0.5;clip-path:url(#SVGID_48_);}
    .st42{clip-path:url(#SVGID_48_);fill:#032880;}
    .st43{opacity:0.22;clip-path:url(#SVGID_48_);}
    .st44{fill:url(#SVGID_49_);}
    .st45{fill:url(#SVGID_50_);}
    .st46{fill:url(#SVGID_51_);}
    .st47{fill:url(#SVGID_52_);}
    .st48{fill:url(#SVGID_53_);}
    .st49{fill:url(#SVGID_54_);}
    .st50{fill:url(#SVGID_55_);}
    .st51{fill:url(#SVGID_56_);}
    .st52{display:inline;fill:#FFC400;}
    .st53{display:inline;fill:#636363;}
    .st54{fill:#636363;}
    .st55{fill:#F5F6F7;}
    .st56{fill:#1E1E1E;}
    .st57{fill:#0757E5;}
    .st58{fill:#444444;}
    .st59{fill:#FFFFFF;}
    .st60{fill:url(#SVGID_57_);}
    .st61{fill:url(#SVGID_58_);}
    .st62{fill:url(#SVGID_59_);}
    .st63{clip-path:url(#SVGID_61_);fill:url(#SVGID_62_);}
    .st64{clip-path:url(#SVGID_64_);fill:url(#SVGID_65_);}
    .st65{clip-path:url(#SVGID_67_);fill:url(#SVGID_68_);}
    .st66{fill:none;stroke:#282828;stroke-width:2.5;stroke-linejoin:round;stroke-miterlimit:10;}
    .st67{fill:#282828;}
    .st68{fill:none;}
    .st69{fill:#212121;}
    .st70{clip-path:url(#SVGID_70_);fill:#E6E4E2;}
    .st71{clip-path:url(#SVGID_70_);fill:#C6BBB6;}
    .st72{opacity:0.46;fill:url(#SVGID_71_);}
    .st73{opacity:0.8;fill:url(#SVGID_72_);}
    .st74{fill:#F30F0E;}
    .st75{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
    .st76{clip-path:url(#SVGID_74_);}
    .st77{fill:#161616;}
    .st78{fill:none;stroke:#0757E5;stroke-miterlimit:10;}
    .st79{clip-path:url(#SVGID_78_);fill:url(#SVGID_79_);}
    .st80{clip-path:url(#SVGID_81_);fill:url(#SVGID_82_);}
    .st81{clip-path:url(#SVGID_84_);fill:url(#SVGID_85_);}
    .st82{opacity:0.8;fill:url(#SVGID_88_);}
    .st83{clip-path:url(#SVGID_90_);}
    .st84{fill:none;stroke:#161616;stroke-miterlimit:10;}
    .st85{clip-path:url(#SVGID_106_);fill:url(#SVGID_107_);}
    .st86{clip-path:url(#SVGID_109_);fill:url(#SVGID_110_);}
    .st87{clip-path:url(#SVGID_112_);fill:url(#SVGID_113_);}
    .st88{clip-path:url(#SVGID_115_);fill:#E6E4E2;}
    .st89{clip-path:url(#SVGID_115_);fill:#C6BBB6;}
    .st90{opacity:0.33;fill:url(#SVGID_116_);}
    .st91{clip-path:url(#SVGID_118_);fill:#E6E4E2;}
    .st92{clip-path:url(#SVGID_118_);fill:#C6BBB6;}
    .st93{opacity:0.33;fill:url(#SVGID_119_);}
    .st94{clip-path:url(#SVGID_121_);}
    .st95{opacity:0.53;fill:#444444;}
    .st96{clip-path:url(#SVGID_133_);fill:url(#SVGID_134_);}
    .st97{clip-path:url(#SVGID_136_);fill:url(#SVGID_137_);}
    .st98{clip-path:url(#SVGID_139_);fill:url(#SVGID_140_);}
    .st99{clip-path:url(#SVGID_142_);fill:#E6E4E2;}
    .st100{clip-path:url(#SVGID_142_);fill:#C6BBB6;}
    .st101{opacity:0.46;fill:url(#SVGID_143_);}
    .st102{clip-path:url(#SVGID_145_);}
    .st103{clip-path:url(#SVGID_153_);fill:url(#SVGID_154_);}
    .st104{clip-path:url(#SVGID_156_);fill:url(#SVGID_157_);}
    .st105{clip-path:url(#SVGID_159_);fill:url(#SVGID_160_);}
    .st106{clip-path:url(#SVGID_162_);fill:#E6E4E2;}
    .st107{clip-path:url(#SVGID_162_);fill:#C6BBB6;}
    .st108{opacity:0.46;fill:url(#SVGID_163_);}
    .st109{clip-path:url(#SVGID_165_);}
    .st110{fill:#303030;}
    .st111{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st112{fill:url(#SVGID_188_);}
    .st113{fill:url(#SVGID_189_);}
    .st114{fill:url(#SVGID_190_);}
</style>
                            <g id="background" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <path class="st57" d="M194.7,97.4c0,53.8-43.6,97.4-97.4,97.4S0,151.2,0,97.4C0,43.6,43.6,0,97.4,0S194.7,43.6,194.7,97.4"/>
                                    <g>
                                        <path class="st59" d="M113.4,119.4c-1.8-5.5-5.4-10.2-10.2-13.3l-1.3-0.9c0,0,0,0,0,0l-3.9-2.6c-2-1.3-3.3-3.6-3.3-6.1V81.2
				c0-0.6-0.5-1.2-1.2-1.2h-0.4v-3.3c6.3,9.7,12.6,11.6,12.9,11.7c0.1,0,0.2,0,0.3,0c0.3,0,0.7-0.2,0.9-0.4l1.2-1.6
				c0.4-0.5,0.3-1.2-0.2-1.6c-4.6-3.8-6-12-6.4-14.7l2.9-0.9c0.5-0.1,0.8-0.6,0.8-1.1v-1.4h2.3c1.8,0,3.3-1.5,3.3-3.3V58
				c0-1.8-1.5-3.3-3.3-3.3h-2.3v-1.3c0-0.6-0.5-1.2-1.2-1.2H70.1c-0.6,0-1.2,0.5-1.2,1.2v6.8c0,0.2,0.1,0.4,0.2,0.6l6.7,11.2
				c-0.5,0.6-0.7,1.3-0.7,2.2V80h-0.4c-0.5,0-1,0.4-1.1,0.9l-12.7,50.6c-0.2,0.9-0.3,1.8-0.3,2.6c0,0,0,0.1,0,0.1c0,0.1,0,0.2,0,0.2
				c0.1,1.2,0.3,2.3,0.8,3.3c1.7,3.5,5.3,5.8,9.2,5.8h37.1c1.7,0,3.4-0.4,4.9-1.2c4.1-2.2,6-7.1,4.5-11.7L113.4,119.4z M105.9,57.1
				h2.1c0.5,0,1,0.4,1,1v5.4c0,0.5-0.4,1-1,1h-2.1V57.1z M106.2,85.9L106.2,85.9c-1.9-0.8-7.4-3.9-12.7-13.2l6.3-1.9
				C100.3,73.9,101.8,81.5,106.2,85.9z M103.4,54.6v12.7l-11.5,3.5h-1.5c-0.2,0-0.5-0.1-0.7-0.1H78.6c-0.2,0-0.5,0-0.7,0.1h-0.2
				L72,61.2h13.2c0.6,0,1.2-0.5,1.2-1.2c0-0.6-0.5-1.2-1.2-1.2H71.3v-4.3H103.4z M77.4,74.2c0-0.5,0.3-1,0.8-1.1h11.9
				c0.5,0.2,0.8,0.6,0.8,1.1V80H77.4V74.2z M111.4,140.3c-1.1,0.6-2.4,1-3.8,1H70.6c-3,0-5.8-1.8-7.1-4.5c-0.2-0.4-0.4-0.9-0.5-1.4
				h30.3c0.6,0,1.2-0.5,1.2-1.2c0-0.6-0.5-1.2-1.2-1.2H62.9c0-0.3,0.1-0.7,0.2-1l12.5-49.7h0.6h15.9h0.4v14.2c0,0.9,0.1,1.8,0.4,2.6
				l-8.8-5.7c-0.5-0.3-1.2-0.2-1.6,0.3c-0.3,0.5-0.2,1.2,0.3,1.6L102,108c4.4,2.9,7.6,7.2,9.2,12.1l3.6,11.2
				c0.2,0.6,0.3,1.1,0.3,1.7h-14.7c-0.6,0-1.2,0.5-1.2,1.2c0,0.6,0.5,1.2,1.2,1.2h14.6C114.6,137.4,113.4,139.2,111.4,140.3z"/>
                                        <path class="st59" d="M117.7,59.7h-2.4c-0.6,0-1.2,0.5-1.2,1.2c0,0.6,0.5,1.2,1.2,1.2h2.4c0.6,0,1.2-0.5,1.2-1.2
				C118.8,60.2,118.3,59.7,117.7,59.7z"/>
                                        <path class="st59" d="M126,59.7h-4.5c-0.6,0-1.2,0.5-1.2,1.2c0,0.6,0.5,1.2,1.2,1.2h4.5c0.6,0,1.2-0.5,1.2-1.2
				C127.2,60.2,126.6,59.7,126,59.7z"/>
                                        <path class="st59" d="M134.4,59.7h-3.6c-0.6,0-1.2,0.5-1.2,1.2c0,0.6,0.5,1.2,1.2,1.2h3.6c0.6,0,1.2-0.5,1.2-1.2
				C135.6,60.2,135.1,59.7,134.4,59.7z"/>
                                        <path class="st59" d="M140.5,59.7h-2.1c-0.6,0-1.2,0.5-1.2,1.2c0,0.6,0.5,1.2,1.2,1.2h2.1c0.6,0,1.2-0.5,1.2-1.2
				C141.7,60.2,141.1,59.7,140.5,59.7z"/>
                                        <path class="st59" d="M115.3,57.7c0.1,0,0.1,0,0.2,0l2.4-0.4c0.6-0.1,1.1-0.7,0.9-1.3c-0.1-0.6-0.7-1.1-1.3-0.9l-2.4,0.4
				c-0.6,0.1-1.1,0.7-0.9,1.3C114.2,57.3,114.7,57.7,115.3,57.7z"/>
                                        <path class="st59" d="M121.5,56.6c0.1,0,0.1,0,0.2,0l4.4-0.7c0.6-0.1,1.1-0.7,0.9-1.3c-0.1-0.6-0.7-1.1-1.3-0.9l-4.4,0.7
				c-0.6,0.1-1.1,0.7-0.9,1.3C120.4,56.2,120.9,56.6,121.5,56.6z"/>
                                        <path class="st59" d="M130.6,55.1c0.1,0,0.1,0,0.2,0l3.6-0.6c0.6-0.1,1.1-0.7,0.9-1.3c-0.1-0.6-0.7-1.1-1.3-0.9l-3.6,0.6
				c-0.6,0.1-1.1,0.7-0.9,1.3C129.5,54.7,130,55.1,130.6,55.1z"/>
                                        <path class="st59" d="M138.1,53.9c0.1,0,0.1,0,0.2,0l2.1-0.3c0.6-0.1,1.1-0.7,0.9-1.3c-0.1-0.6-0.7-1.1-1.3-0.9l-2.1,0.3
				c-0.6,0.1-1.1,0.7-0.9,1.3C137,53.5,137.5,53.9,138.1,53.9z"/>
                                        <path class="st59" d="M117.8,64.4l-2.4-0.4c-0.6-0.1-1.2,0.3-1.3,0.9c-0.1,0.6,0.3,1.2,0.9,1.3l2.4,0.4c0.1,0,0.1,0,0.2,0
				c0.6,0,1-0.4,1.1-1C118.9,65.1,118.5,64.5,117.8,64.4z"/>
                                        <path class="st59" d="M126.1,65.8l-4.4-0.7c-0.6-0.1-1.2,0.3-1.3,0.9c-0.1,0.6,0.3,1.2,0.9,1.3l4.4,0.7c0.1,0,0.1,0,0.2,0
				c0.6,0,1-0.4,1.1-1C127.1,66.5,126.7,65.9,126.1,65.8z"/>
                                        <path class="st59" d="M134.4,67.2l-3.6-0.6c-0.6-0.1-1.2,0.3-1.3,0.9c-0.1,0.6,0.3,1.2,0.9,1.3l3.6,0.6c0.1,0,0.1,0,0.2,0
				c0.6,0,1-0.4,1.1-1C135.4,67.9,135,67.3,134.4,67.2z"/>
                                        <path class="st59" d="M140.3,68.2l-2.1-0.3c-0.6-0.1-1.2,0.3-1.3,0.9c-0.1,0.6,0.3,1.2,0.9,1.3l2.1,0.3c0.1,0,0.1,0,0.2,0
				c0.6,0,1-0.4,1.1-1C141.4,68.9,141,68.3,140.3,68.2z"/>
                                        <path class="st59" d="M99.9,120v-6.1c0-0.6-0.5-1.2-1.2-1.2h-5v-5c0-0.6-0.5-1.2-1.2-1.2h-6.1c-0.6,0-1.2,0.5-1.2,1.2v5h-5
				c-0.6,0-1.2,0.5-1.2,1.2v6.1c0,0.6,0.5,1.2,1.2,1.2h5v5c0,0.6,0.5,1.2,1.2,1.2h6.1c0.6,0,1.2-0.5,1.2-1.2v-5h5
				C99.4,121.1,99.9,120.6,99.9,120z M97.6,118.8h-5c-0.6,0-1.2,0.5-1.2,1.2v5h-3.8v-5c0-0.6-0.5-1.2-1.2-1.2h-5V115h5
				c0.6,0,1.2-0.5,1.2-1.2v-5h3.8v5c0,0.6,0.5,1.2,1.2,1.2h5V118.8z"/>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <p>Disinfectant</p>


                </li>

                <li>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 194.7 194.7" style="enable-background:new 0 0 194.7 194.7;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;}
    .st2{opacity:0.25;clip-path:url(#SVGID_2_);}
    .st3{fill:#FFC400;}
    .st4{opacity:0.22;clip-path:url(#SVGID_4_);fill:url(#SVGID_5_);}
    .st5{opacity:0.22;clip-path:url(#SVGID_7_);fill:url(#SVGID_8_);}
    .st6{opacity:0.22;clip-path:url(#SVGID_10_);fill:url(#SVGID_11_);}
    .st7{opacity:0.22;clip-path:url(#SVGID_13_);fill:url(#SVGID_14_);}
    .st8{opacity:0.17;clip-path:url(#SVGID_16_);}
    .st9{opacity:0.5;}
    .st10{fill:#032880;}
    .st11{opacity:0.5;clip-path:url(#SVGID_16_);}
    .st12{clip-path:url(#SVGID_16_);fill:#032880;}
    .st13{opacity:0.22;clip-path:url(#SVGID_16_);}
    .st14{fill:url(#SVGID_17_);}
    .st15{fill:url(#SVGID_18_);}
    .st16{fill:url(#SVGID_19_);}
    .st17{fill:url(#SVGID_20_);}
    .st18{fill:url(#SVGID_21_);}
    .st19{fill:#2D2D2D;}
    .st20{fill:url(#SVGID_22_);}
    .st21{fill:url(#SVGID_23_);}
    .st22{fill:url(#SVGID_24_);}
    .st23{display:inline;fill:#27B016;}
    .st24{opacity:0.22;clip-path:url(#SVGID_26_);fill:url(#SVGID_27_);}
    .st25{opacity:0.22;clip-path:url(#SVGID_29_);fill:url(#SVGID_30_);}
    .st26{opacity:0.17;clip-path:url(#SVGID_32_);}
    .st27{opacity:0.5;clip-path:url(#SVGID_32_);}
    .st28{clip-path:url(#SVGID_32_);fill:#032880;}
    .st29{opacity:0.22;clip-path:url(#SVGID_32_);}
    .st30{fill:url(#SVGID_33_);}
    .st31{fill:url(#SVGID_34_);}
    .st32{fill:url(#SVGID_35_);}
    .st33{fill:url(#SVGID_36_);}
    .st34{fill:url(#SVGID_37_);}
    .st35{fill:url(#SVGID_38_);}
    .st36{fill:url(#SVGID_39_);}
    .st37{fill:url(#SVGID_40_);}
    .st38{opacity:0.22;clip-path:url(#SVGID_42_);fill:url(#SVGID_43_);}
    .st39{opacity:0.22;clip-path:url(#SVGID_45_);fill:url(#SVGID_46_);}
    .st40{opacity:0.17;clip-path:url(#SVGID_48_);}
    .st41{opacity:0.5;clip-path:url(#SVGID_48_);}
    .st42{clip-path:url(#SVGID_48_);fill:#032880;}
    .st43{opacity:0.22;clip-path:url(#SVGID_48_);}
    .st44{fill:url(#SVGID_49_);}
    .st45{fill:url(#SVGID_50_);}
    .st46{fill:url(#SVGID_51_);}
    .st47{fill:url(#SVGID_52_);}
    .st48{fill:url(#SVGID_53_);}
    .st49{fill:url(#SVGID_54_);}
    .st50{fill:url(#SVGID_55_);}
    .st51{fill:url(#SVGID_56_);}
    .st52{display:inline;fill:#FFC400;}
    .st53{display:inline;fill:#636363;}
    .st54{fill:#636363;}
    .st55{fill:#F5F6F7;}
    .st56{fill:#1E1E1E;}
    .st57{fill:#0757E5;}
    .st58{fill:#444444;}
    .st59{fill:#FFFFFF;}
    .st60{fill:url(#SVGID_57_);}
    .st61{fill:url(#SVGID_58_);}
    .st62{fill:url(#SVGID_59_);}
    .st63{clip-path:url(#SVGID_61_);fill:url(#SVGID_62_);}
    .st64{clip-path:url(#SVGID_64_);fill:url(#SVGID_65_);}
    .st65{clip-path:url(#SVGID_67_);fill:url(#SVGID_68_);}
    .st66{fill:none;stroke:#282828;stroke-width:2.5;stroke-linejoin:round;stroke-miterlimit:10;}
    .st67{fill:#282828;}
    .st68{fill:none;}
    .st69{fill:#212121;}
    .st70{clip-path:url(#SVGID_70_);fill:#E6E4E2;}
    .st71{clip-path:url(#SVGID_70_);fill:#C6BBB6;}
    .st72{opacity:0.46;fill:url(#SVGID_71_);}
    .st73{opacity:0.8;fill:url(#SVGID_72_);}
    .st74{fill:#F30F0E;}
    .st75{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
    .st76{clip-path:url(#SVGID_74_);}
    .st77{fill:#161616;}
    .st78{fill:none;stroke:#0757E5;stroke-miterlimit:10;}
    .st79{clip-path:url(#SVGID_78_);fill:url(#SVGID_79_);}
    .st80{clip-path:url(#SVGID_81_);fill:url(#SVGID_82_);}
    .st81{clip-path:url(#SVGID_84_);fill:url(#SVGID_85_);}
    .st82{opacity:0.8;fill:url(#SVGID_88_);}
    .st83{clip-path:url(#SVGID_90_);}
    .st84{fill:none;stroke:#161616;stroke-miterlimit:10;}
    .st85{clip-path:url(#SVGID_106_);fill:url(#SVGID_107_);}
    .st86{clip-path:url(#SVGID_109_);fill:url(#SVGID_110_);}
    .st87{clip-path:url(#SVGID_112_);fill:url(#SVGID_113_);}
    .st88{clip-path:url(#SVGID_115_);fill:#E6E4E2;}
    .st89{clip-path:url(#SVGID_115_);fill:#C6BBB6;}
    .st90{opacity:0.33;fill:url(#SVGID_116_);}
    .st91{clip-path:url(#SVGID_118_);fill:#E6E4E2;}
    .st92{clip-path:url(#SVGID_118_);fill:#C6BBB6;}
    .st93{opacity:0.33;fill:url(#SVGID_119_);}
    .st94{clip-path:url(#SVGID_121_);}
    .st95{opacity:0.53;fill:#444444;}
    .st96{clip-path:url(#SVGID_133_);fill:url(#SVGID_134_);}
    .st97{clip-path:url(#SVGID_136_);fill:url(#SVGID_137_);}
    .st98{clip-path:url(#SVGID_139_);fill:url(#SVGID_140_);}
    .st99{clip-path:url(#SVGID_142_);fill:#E6E4E2;}
    .st100{clip-path:url(#SVGID_142_);fill:#C6BBB6;}
    .st101{opacity:0.46;fill:url(#SVGID_143_);}
    .st102{clip-path:url(#SVGID_145_);}
    .st103{clip-path:url(#SVGID_153_);fill:url(#SVGID_154_);}
    .st104{clip-path:url(#SVGID_156_);fill:url(#SVGID_157_);}
    .st105{clip-path:url(#SVGID_159_);fill:url(#SVGID_160_);}
    .st106{clip-path:url(#SVGID_162_);fill:#E6E4E2;}
    .st107{clip-path:url(#SVGID_162_);fill:#C6BBB6;}
    .st108{opacity:0.46;fill:url(#SVGID_163_);}
    .st109{clip-path:url(#SVGID_165_);}
    .st110{fill:#303030;}
    .st111{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st112{fill:url(#SVGID_188_);}
    .st113{fill:url(#SVGID_189_);}
    .st114{fill:url(#SVGID_190_);}
</style>
                            <g id="background" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <path class="st57" d="M194.7,97.4c0,53.8-43.6,97.4-97.4,97.4S0,151.2,0,97.4C0,43.6,43.6,0,97.4,0S194.7,43.6,194.7,97.4"/>
                                    <g>
                                        <path class="st59" d="M64.6,76.4l-3,10.5h76l-3-10.5h-6.3l1.8-23.2h-1.7c-5.1,0-5.3,2.1-9.6,2.1c-4.2,0-4.5-2.1-9.6-2.1
				c-5.1,0-5.3,2.1-9.6,2.1c-4.2,0-4.5-2.1-9.6-2.1c-5.1,0-5.3,2.1-9.6,2.1c-4.2,0-4.5-2.1-9.6-2.1h-1.7l1.8,23.2H64.6z M133.4,83.7
				h-5.6l0.4-4.2h4L133.4,83.7z M65.7,83.7l1.2-4.2h4.2l0.3,4.2H65.7z M72.5,56.5c2.6,0.4,3.5,2,7.9,2c5.1,0,5.3-2.1,9.6-2.1
				c4.2,0,4.5,2.1,9.6,2.1c5.1,0,5.3-2.1,9.6-2.1c4.2,0,4.5,2.1,9.6,2.1c4.3,0,5.3-1.6,7.9-2l-2.1,27.3h-10V70h-3.1v13.7h-10.3V70
				H98v13.7H87.7V70h-3.1v13.7h-9.9C73.8,72.9,74,76.1,72.5,56.5z"/>
                                        <path class="st59" d="M146.6,68.8h-13.2v3.1h10.8l5.9,21.7v3.6H72.2v3.1h77.9v33.9H141v3.1h12.4c0-4.8,0-38.4,0-44.2L146.6,68.8z
				"/>
                                        <path class="st59" d="M49,100.4h19v-3.1H49v-3.6l5.9-21.7h10.8v-3.1H52.5l-6.7,24.5v44.2h90.9v-3.1H49V100.4z"/>
                                        <path class="st59" d="M103.8,118.9h-3.1v-3.1h3.1V118.9z M98.6,118.9h-3.1v-3.1h3.1V118.9z"/>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <p>Tissues and wet wipes</p>


                </li>

                <li>
                    <div>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 194.7 194.7" style="enable-background:new 0 0 194.7 194.7;" xml:space="preserve">
<g>
    <g>
        <path style="fill:#0757E5;" d="M194.7,97.4c0,53.8-43.6,97.4-97.4,97.4S0,151.2,0,97.4S43.6,0,97.4,0S194.7,43.6,194.7,97.4"/>
    </g>
</g>
                            <g>
                                <g>
                                    <path style="fill:#FFFFFF;" d="M151.1,94.9c0,3.1,0.3,7.3-0.9,11.3c-2.2,7.9-7.5,13-15.1,15.8c-3.3,1.2-6.7,2.4-10,3.6
			c-1.3,0.5-2.6,0.6-3.2-0.9c-0.6-1.6,0.6-2.3,1.8-2.7c1.7-0.7,3.5-1.3,5.3-1.9c0.9-0.3,1.3-0.9,1.3-1.9c-0.1-1.9-0.1-3.9,0-5.8
			c0.1-1.6-0.7-1.7-1.9-1.5c-5.5,1.2-11.1,1.9-16.7,2.6c-8.2,0.9-16.4,1.2-24.7,0.4c-6.9-0.7-13.8-1.6-20.7-2.9
			c-1.4-0.3-2,0-1.9,1.6c0.1,1.9,0.1,3.9,0,5.8c0,0.9,0.3,1.4,1.1,1.6c11,4.1,22.2,7.6,34.2,7.3c1.7-0.1,3.4-0.2,5-0.5
			c1.4-0.2,2.3,0.3,2.5,1.6c0.3,1.4-0.7,2-1.9,2.2c-1.8,0.3-3.6,0.5-5.4,0.5c-9.7,0.5-19-1.8-28.1-4.7c-4.3-1.4-8.6-3-12.9-4.6
			c-9.6-3.6-15.2-11.7-15.3-21.9c0-4.2-0.1-8.3,0-12.5c0.2-7.4,7-12.3,13.6-10c2.9,1,5.1,2.8,6.2,5.6c0.6,1.4,1.2,1.3,2.3,0.9
			c7.3-2.8,14.7-4.9,22.4-6.2c9-1.6,17.7-0.5,26.5,1.7c5,1.3,10,2.8,14.8,4.7c0.8,0.3,1.3,0.5,1.8-0.6c2.2-4.9,6.9-7.3,11.7-6.3
			s8,5.2,8.2,10.5C151.2,89.7,151.1,91.8,151.1,94.9z M130.3,92.8c0-0.7-0.1-1.5,0-2.2c0.2-1.6-0.4-2.4-2-3
			c-6.2-2.3-12.5-4.3-19-5.6c-5.6-1.2-11.3-1.6-17.1-1c-7.8,0.8-15.3,3-22.7,5.5c-5.2,1.8-5.2,1.8-5.2,7.2c0,4.5-0.2,3.5,3.6,2.9
			c11.8-1.9,23.6-3.7,35.7-2.9c7.7,0.5,15.3,1.6,22.9,2.8c3.9,0.6,3.8,1.6,3.7-2.9C130.3,93.4,130.3,93.1,130.3,92.8z M100.8,97.6
			c-1.9-0.1-3.7-0.2-5.6-0.1C86.1,97.8,77,99,68,100.7c-4.4,0.8-3.5,0.2-3.7,4.2c-0.1,1.4,0.5,1.9,1.8,2.1c4.2,0.6,8.3,1.4,12.5,2
			c6.7,0.9,13.4,1.7,20.1,1.5c9.4-0.3,18.8-1.5,28.1-3.2c3.9-0.7,3.4,0.2,3.5-4.3c0-1.2-0.4-1.7-1.6-1.9
			C119.5,99.4,110.3,97.9,100.8,97.6z M134.2,101.7c0,4.9,0,9.9,0,14.8c0,1.3,0.3,1.7,1.5,1c6.9-3.4,11.1-8.8,11.3-16.7
			c0.1-4.6,0-9.1,0-13.7c0-0.8-0.1-1.7-0.4-2.5c-1.2-2.9-4.1-4.5-7.4-3.9c-2.8,0.5-5,3.2-5.1,6.2C134.2,91.9,134.2,96.8,134.2,101.7
			z M60.5,101.8c0-4.8,0-9.6,0-14.4c0-4-2.6-6.6-6.3-6.7c-3.8,0-6.4,2.5-6.5,6.4c-0.1,4.7-0.2,9.4,0.1,14.1
			c0.3,7.6,4.3,12.8,11,16.1c1.7,0.8,1.8,0.7,1.8-1.1C60.5,111.5,60.5,106.6,60.5,101.8z"/>
                                </g>
                                <path style="fill:#FFFFFF;" d="M135.9,121.7c-4.3,1.6-8.6,3.2-12.9,4.6c-9.1,3-18.4,5.2-28.1,4.7c-1.8-0.1-3.6-0.3-5.4-0.5l0.7-3.8
		c1.7,0.2,3.3,0.4,5,0.5c12,0.4,23.1-3.2,34.2-7.3c0.8-0.3,1.1-0.8,1.1-1.6L135.9,121.7z"/>
                            </g>
</svg>

                    </div>
                    <p>Face Masks</p>

                </li>

                <li>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 194.7 194.7" style="enable-background:new 0 0 194.7 194.7;" xml:space="preserve">
<style type="text/css">
    .st0{display:none;}
    .st1{display:inline;}
    .st2{opacity:0.25;clip-path:url(#SVGID_2_);}
    .st3{fill:#FFC400;}
    .st4{opacity:0.22;clip-path:url(#SVGID_4_);fill:url(#SVGID_5_);}
    .st5{opacity:0.22;clip-path:url(#SVGID_7_);fill:url(#SVGID_8_);}
    .st6{opacity:0.22;clip-path:url(#SVGID_10_);fill:url(#SVGID_11_);}
    .st7{opacity:0.22;clip-path:url(#SVGID_13_);fill:url(#SVGID_14_);}
    .st8{opacity:0.17;clip-path:url(#SVGID_16_);}
    .st9{opacity:0.5;}
    .st10{fill:#032880;}
    .st11{opacity:0.5;clip-path:url(#SVGID_16_);}
    .st12{clip-path:url(#SVGID_16_);fill:#032880;}
    .st13{opacity:0.22;clip-path:url(#SVGID_16_);}
    .st14{fill:url(#SVGID_17_);}
    .st15{fill:url(#SVGID_18_);}
    .st16{fill:url(#SVGID_19_);}
    .st17{fill:url(#SVGID_20_);}
    .st18{fill:url(#SVGID_21_);}
    .st19{fill:#2D2D2D;}
    .st20{fill:url(#SVGID_22_);}
    .st21{fill:url(#SVGID_23_);}
    .st22{fill:url(#SVGID_24_);}
    .st23{display:inline;fill:#27B016;}
    .st24{opacity:0.22;clip-path:url(#SVGID_26_);fill:url(#SVGID_27_);}
    .st25{opacity:0.22;clip-path:url(#SVGID_29_);fill:url(#SVGID_30_);}
    .st26{opacity:0.17;clip-path:url(#SVGID_32_);}
    .st27{opacity:0.5;clip-path:url(#SVGID_32_);}
    .st28{clip-path:url(#SVGID_32_);fill:#032880;}
    .st29{opacity:0.22;clip-path:url(#SVGID_32_);}
    .st30{fill:url(#SVGID_33_);}
    .st31{fill:url(#SVGID_34_);}
    .st32{fill:url(#SVGID_35_);}
    .st33{fill:url(#SVGID_36_);}
    .st34{fill:url(#SVGID_37_);}
    .st35{fill:url(#SVGID_38_);}
    .st36{fill:url(#SVGID_39_);}
    .st37{fill:url(#SVGID_40_);}
    .st38{opacity:0.22;clip-path:url(#SVGID_42_);fill:url(#SVGID_43_);}
    .st39{opacity:0.22;clip-path:url(#SVGID_45_);fill:url(#SVGID_46_);}
    .st40{opacity:0.17;clip-path:url(#SVGID_48_);}
    .st41{opacity:0.5;clip-path:url(#SVGID_48_);}
    .st42{clip-path:url(#SVGID_48_);fill:#032880;}
    .st43{opacity:0.22;clip-path:url(#SVGID_48_);}
    .st44{fill:url(#SVGID_49_);}
    .st45{fill:url(#SVGID_50_);}
    .st46{fill:url(#SVGID_51_);}
    .st47{fill:url(#SVGID_52_);}
    .st48{fill:url(#SVGID_53_);}
    .st49{fill:url(#SVGID_54_);}
    .st50{fill:url(#SVGID_55_);}
    .st51{fill:url(#SVGID_56_);}
    .st52{display:inline;fill:#FFC400;}
    .st53{display:inline;fill:#636363;}
    .st54{fill:#636363;}
    .st55{fill:#F5F6F7;}
    .st56{fill:#1E1E1E;}
    .st57{fill:#0757E5;}
    .st58{fill:#444444;}
    .st59{fill:#FFFFFF;}
    .st60{fill:url(#SVGID_57_);}
    .st61{fill:url(#SVGID_58_);}
    .st62{fill:url(#SVGID_59_);}
    .st63{clip-path:url(#SVGID_61_);fill:url(#SVGID_62_);}
    .st64{clip-path:url(#SVGID_64_);fill:url(#SVGID_65_);}
    .st65{clip-path:url(#SVGID_67_);fill:url(#SVGID_68_);}
    .st66{fill:none;stroke:#282828;stroke-width:2.5;stroke-linejoin:round;stroke-miterlimit:10;}
    .st67{fill:#282828;}
    .st68{fill:none;}
    .st69{fill:#212121;}
    .st70{clip-path:url(#SVGID_70_);fill:#E6E4E2;}
    .st71{clip-path:url(#SVGID_70_);fill:#C6BBB6;}
    .st72{opacity:0.46;fill:url(#SVGID_71_);}
    .st73{opacity:0.8;fill:url(#SVGID_72_);}
    .st74{fill:#F30F0E;}
    .st75{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
    .st76{clip-path:url(#SVGID_74_);}
    .st77{fill:#161616;}
    .st78{fill:none;stroke:#0757E5;stroke-miterlimit:10;}
    .st79{clip-path:url(#SVGID_78_);fill:url(#SVGID_79_);}
    .st80{clip-path:url(#SVGID_81_);fill:url(#SVGID_82_);}
    .st81{clip-path:url(#SVGID_84_);fill:url(#SVGID_85_);}
    .st82{opacity:0.8;fill:url(#SVGID_88_);}
    .st83{clip-path:url(#SVGID_90_);}
    .st84{fill:none;stroke:#161616;stroke-miterlimit:10;}
    .st85{clip-path:url(#SVGID_106_);fill:url(#SVGID_107_);}
    .st86{clip-path:url(#SVGID_109_);fill:url(#SVGID_110_);}
    .st87{clip-path:url(#SVGID_112_);fill:url(#SVGID_113_);}
    .st88{clip-path:url(#SVGID_115_);fill:#E6E4E2;}
    .st89{clip-path:url(#SVGID_115_);fill:#C6BBB6;}
    .st90{opacity:0.33;fill:url(#SVGID_116_);}
    .st91{clip-path:url(#SVGID_118_);fill:#E6E4E2;}
    .st92{clip-path:url(#SVGID_118_);fill:#C6BBB6;}
    .st93{opacity:0.33;fill:url(#SVGID_119_);}
    .st94{clip-path:url(#SVGID_121_);}
    .st95{opacity:0.53;fill:#444444;}
    .st96{clip-path:url(#SVGID_133_);fill:url(#SVGID_134_);}
    .st97{clip-path:url(#SVGID_136_);fill:url(#SVGID_137_);}
    .st98{clip-path:url(#SVGID_139_);fill:url(#SVGID_140_);}
    .st99{clip-path:url(#SVGID_142_);fill:#E6E4E2;}
    .st100{clip-path:url(#SVGID_142_);fill:#C6BBB6;}
    .st101{opacity:0.46;fill:url(#SVGID_143_);}
    .st102{clip-path:url(#SVGID_145_);}
    .st103{clip-path:url(#SVGID_153_);fill:url(#SVGID_154_);}
    .st104{clip-path:url(#SVGID_156_);fill:url(#SVGID_157_);}
    .st105{clip-path:url(#SVGID_159_);fill:url(#SVGID_160_);}
    .st106{clip-path:url(#SVGID_162_);fill:#E6E4E2;}
    .st107{clip-path:url(#SVGID_162_);fill:#C6BBB6;}
    .st108{opacity:0.46;fill:url(#SVGID_163_);}
    .st109{clip-path:url(#SVGID_165_);}
    .st110{fill:#303030;}
    .st111{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    .st112{fill:url(#SVGID_188_);}
    .st113{fill:url(#SVGID_189_);}
    .st114{fill:url(#SVGID_190_);}
</style>
                            <g id="background" class="st0">
                            </g>
                            <g id="Layer_1">
                                <g>
                                    <path class="st57" d="M194.7,97.4c0,53.8-43.6,97.4-97.4,97.4S0,151.2,0,97.4C0,43.6,43.6,0,97.4,0S194.7,43.6,194.7,97.4"/>
                                    <g>
                                        <g>
                                            <g>
                                                <path class="st59" d="M147.4,135.5c0-27-0.7-23.3,3.3-35.6c1.5-4.6,1.5-9,1.5-9.1V63.1c0-4.9-5.3-7.9-9.5-5.5V55
						c0-3.5-2.8-6.3-6.3-6.3c-1.2,0-2.2,0.3-3.2,0.9c0-3.8-3-6.5-6.3-6.5c-3.3,0-6.3,2.6-6.3,6.5c-4.2-2.4-9.5,0.6-9.5,5.5v18.4
						c-4.2-2.4-9.5,0.6-9.5,5.5v14.9c0,6.7,4.9,11,7.2,13.2c0.9,1,2.2,3.3,2.2,7.4v21.2c-2.6,0.7-4.5,3.1-4.5,5.9
						c0,3.4,2.8,6.2,6.2,6.2H134c0.9,0,1.6-0.7,1.6-1.6c0-0.9-0.7-1.6-1.6-1.6h-21.2c-1.7,0-3-1.4-3-3c0-1.7,1.4-3,3-3
						c0.8,0,32.2,0,33.2,0c1.7,0,3,1.4,3,3s-1.4,3-3,3h-4.7c-0.9,0-1.6,0.7-1.6,1.6c0,0.9,0.7,1.6,1.6,1.6h4.7
						c3.4,0,6.2-2.8,6.2-6.2C152.2,138.6,150.1,136.2,147.4,135.5z M144.2,113.9v21.5h-30v-21c0-5.2-1.9-8.2-3-9.5
						c-1.1-1.3-6.4-5.2-6.4-11.1V78.8c0-1.7,1.4-3.2,3.2-3.2s3.2,1.4,3.2,3.2v8.4c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6v-8.4
						c0-2.9,0-21.5,0-23.9c0-1.7,1.4-3.2,3.2-3.2s3.2,1.4,3.2,3.2v23.2c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6
						c0-0.5,0-28.3,0-28.8c0-1.7,1.4-3.2,3.2-3.2s3.2,1.4,3.2,3.2c0,2.8,0,25.7,0,28.8c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6
						V55c0-1.7,1.4-3.2,3.2-3.2c1.7,0,3.2,1.4,3.2,3.2c0,2.5,0,20.6,0,23.2c0,0.9,0.7,1.6,1.6,1.6s1.6-0.7,1.6-1.6v-15
						c0-1.7,1.4-3.2,3.2-3.2c1.7,0,3.2,1.4,3.2,3.2v27.7C149,99,144.2,105.2,144.2,113.9z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path class="st59" d="M88,107c2.2-2.1,7.2-6.4,7.2-13.2V78.8c0-4.9-5.3-7.9-9.5-5.5V55c0-3.5-2.8-6.3-6.3-6.3
						c-1.2,0-2.2,0.3-3.2,0.9c0-3.8-3-6.5-6.3-6.5c-3.5,0-6.3,2.8-6.3,6.3v0.1c-4.2-2.4-9.5,0.6-9.5,5.5v2.7
						c-4.2-2.4-9.5,0.6-9.5,5.5c0,34.9-0.8,29.7,3.5,42.9c1.5,5.3,1.3,7.7,1.3,11.8c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6
						c0-9.1-0.4-9.7-3.4-18.9c-1.3-4.1-1.4-8.1-1.4-8.2V63.1c0-1.7,1.4-3.2,3.2-3.2s3.2,1.4,3.2,3.2v15c0,0.9,0.7,1.6,1.6,1.6
						s1.6-0.7,1.6-1.6c0-2.3,0-17.4,0-19.5V55c0-1.7,1.4-3.2,3.2-3.2s3.2,1.4,3.2,3.2v23.2c0,0.9,0.7,1.6,1.6,1.6s1.6-0.7,1.6-1.6
						V55v-4.4v-1.2c0-1.7,1.4-3.2,3.2-3.2s3.2,1.4,3.2,3.2v2.3c0,1,0,25.5,0,26.4c0,0.9,0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6V55
						c0-1.7,1.4-3.2,3.2-3.2s3.2,1.4,3.2,3.2c0,3,0,31.7,0,32.3c0,0.9,0.7,1.6,1.6,1.6s1.6-0.7,1.6-1.6v-8.4c0-1.7,1.4-3.2,3.2-3.2
						s3.2,1.4,3.2,3.2v14.9c0,6-5.3,9.8-6.4,11.1c-1.1,1.3-3,4.3-3,9.5v21h-30v-10.2c0-0.9-0.7-1.6-1.6-1.6c-0.9,0-1.6,0.7-1.6,1.6
						v10.4c-2.7,0.6-4.8,3.1-4.8,6c0,3.4,2.8,6.2,6.2,6.2h33.2c3.4,0,6.2-2.8,6.2-6.2c0-2.8-1.9-5.2-4.5-5.9v-21.2
						C85.8,110.3,87.1,108,88,107z M87.1,141.5c0,1.7-1.4,3-3,3H50.9c-1.7,0-3-1.4-3-3c0-1.5,1.2-3,3.2-3h33
						C85.7,138.5,87.1,139.9,87.1,141.5z"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
</svg>

                    </div>
                    <p>Hand Gloves</p>

                </li>

            </ul>
        </div>

    </section>

 


    <section class="contact">
        <div class="container">
            <h3 style="font-weight: 800; margin-bottom: 1em;">DROP US A NOTE</h3>

            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>

            <div class="container-fluid contact-from" id="contact-from">
                <div class="container">
                    <div class="formBox">
                         <form>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="inputBox ">
                                                <input id="fname" type="text" name="" class="input" placeholder="First Name">
                                                <p id="error-name"></p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="inputBox">
                                                <input id="lname" type="text" name="" class="input" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="inputBox">
                                                <input id="email" type="email" name="" class="input" placeholder="Email">
                                                <p id="error-email"></p>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="inputBox">
                                                <input id="mobile" type="text" name="" class="input" placeholder="Mobile">
                                                <p id="error-phone"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="inputBox">
                                                <textarea name="" id="message" class="input" placeholder="Message"></textarea>
                                                <p id="error-msg"></p>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="submit" name="" class="btn know-more sub-btn btn-submit" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>

            <div class="con-thnx" style="display: none;">
                Form has been submitted! We will contact back to you later.
            </div>

        </div>


    </section>

@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.testimonials').slick({
                infinite: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,

                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            arrows: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            arrows: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots:true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }

                ]

            });

        });

    </script>


@endsection
