@extends('layouts.layout')

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>


    <style>
        .checkbox-tc {
            text-align: left;
            margin-top: 0rem;
            padding: 0em 3em 0em 3em;
        }


        .loading{
            width: 100%;
            height: 100%;
            display: flex;
            position: fixed;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999999;
            top: 0;
        }

        .loading div{
            text-align: center;
            margin-top: 1em;
        }

        .loading p{
            color: #ffffff;
            font-size: 1.5em;
            padding: 0em 1em 0em 1em;
            font-weight: 700;
            margin: 0;
        }
    </style>

@endsection
@section('content')

    <div class="loading" style="visibility: hidden;">

        <div>
            <img src="/images/loading.gif" alt="" />
            <p style="color: #ffffff;margin-top: 1rem;">Redirecting to payment gateway... .. .</p>
        </div>

    </div>

    <section class="container consent-waive">


        <div class="col-md-12">
                <h4>CONSENT AND WAIVER AGREEMENT</h4>
            <div id="scroll-box-wavier">
              <div style="text-align: left" id="scroll-box-tab-wavier" class="col-md-12 ">
                    <h5>1. Background</h5>
                    <p>1.1.	For the purpose of this Consent and Waiver Agreement (“Agreement”), all the capitalised words shall have the same meaning as prescribed to them in the terms of use or privacy policy documents available on website run by Microgravity Ventures Private Limited (“Company”). </p>
                    <p> 1.2. For the purpose of this Agreement, wherever the context so requires&nbsp;"you", “your”, “user” or “customer”&nbsp;shall mean any natural or legal person who visits the Company Premise to use the Company Products. The term&nbsp;“we”,&nbsp;“us”,&nbsp;“our”&nbsp;shall mean the Company.</p>

                    <p>1.3. By purchasing the tickets to use the Company Products you are agreeing to the terms and conditions stated in this Agreement.</p>

                    <h5>2. Capacity and Authority</h5>

                    <p>2.1.By agreeing to use the Company Products, you confirm that you are above 18 years of age, and not a minor and are competent to contract as understood within the meaning of the Indian Contract Act, 1872.</p>

                    <p> 2.2. In the event that you are purchasing the ticket for any minor, then you warrant that you have full authority as or on behalf of the parent or legal guardian of such minor.</p>
					
					<p>2.3. By using the Company Products, you warrant that all the data provided by you at the time of purchase of the ticket is accurate and complete and that you have obtained the consent of parent/legal guardian (in case of minors).</p>

                    <h5>2.4.PG (Parental Guidance) Rated Games </h5>

                    <ul>
						<ul>
					<li>(i) Free Roam</li>

                    <li>(ii) VR Team</li>

                    <li>(iii)	360° Chair </li>
						</ul>
					</ul>
					
					  <ul>
						1. Access to the Consent &amp; Waiver forms
						<ul>
						<li>(i)Can be downloaded from the website.</li>
						<li>(ii)Sent to the customers email-id along with the invoice.</li>
						<li>(iii)Sent to the customers email-id with the gameplay reminder e-mail.</li>
						<li>(iv)Available at the stores ticketing counter.</li>
						<li>(v)Available with the gaming associate handling the PG rated games.</li>
						</ul>
						</ul>


 <ul>2. Consent &amp; Waiver process for Players between the age of 12 - 15 years
<ul>
	<li>(i)For players between the age of 12 -15 years, during online bookings the Consent &amp; Waiver checkbox needs to be ticked by their parent/ guardian.</li>
	<li>(ii)Players between the age of 12 to 15 years should be accompanied by their parent/guardian to sign the Consent &amp; Waiver form in-order to play the PG rated games. </li>
	<li>(iii)Players between the age of 12 to 15 years, who have booked a PG rated gameplay online and are unaccompanied by their parent/guardian would not be permitted to play these games. </li>
	<li>(iv)Players between the age of 12 to 15 years, will not be allowed to book a PG rated gameplay at the store if unaccompanied by their parent/guardian.</li>
	<li>(v)To play Golf, players between the age 10 years to 15 years should be accompanied by their parent/ guardian.</li>
</ul>
</ul>


 <ul>3. Consent &amp; Waiver process for players between the age of 15 – 18 years
<ul>
<li>(i)For players between the age of 15 – 18 years, during online bookings the Consent &amp; Waiver checkbox needs to be ticked by the parent/ guardian.</li>
<li>(ii)Players between the age of 15 to 18 years, who have booked a PG rated gameplay online/offline need to get a hard copy of the Consent &amp; Waiver form co-signed by their parent/ guardian.</li>
<li>(iii)For players between the age of 15 to 18 years, who have booked a PG rated gameplay online and are unaccompanied by their parent/guardian, the Digital Waiver process can be used to obtain Consent. </li>
<li>(iv)For offline bookings, if players between the age of 15 to 18 years are unaccompanied by their parent/guardian and want to book a PG rated game then, the Digital Waiver process can be used to obtain consent.</li>
</ul>
</ul>

 <ul>4. Consent &amp; Waiver process for 18 years and above
<ul>
<li>(i). For all bookings on the website the Consent &amp; Waiver checkbox needs to be ticked by the customer.</li>
<li>(ii) Players above 18 years of age need to sign a hard copy of the Consent &amp; Waiver form at the store to play PG rated games.</li>
</ul>
</ul>

<ul>5. Digital Waiver Process Description
<ul>
	<li>(i). When players between the age of 15 to 18 years approach the ticketing counter to book a PG rated gameplay. </li>
<li>(ii). Ticketing personnel will –
<ul>
<li>confirm absence of their parent/ guardian and request the player for their parent/ guardians’ mobile number in-order to begin the digital waiver process. </li>
<li>input the mobile number of the parent/ guardian on the order form. </li>
<li>call the mobile number to confirm the identity of the parent/guardian and inform them about the Consent &amp; Waiver message. </li>
<li>send an SMS with the short link to the mobile number.</li>
</ul>
</li>

<li>
(iii). On clicking the short link, a web page with the Consent &amp; Waiver form will open and the parent/ guardian needs to read the form and tick the checkbox agreeing to the terms of the Consent &amp; Waiver and revert. </li>
<li>(iv). Only once this information is received at our end, we will be able to complete the booking process. </li>
<li>(v). The printout of the form needs to be co-signed by the player and handed over to the gaming associate handling the PG rated gaming equipment in-order to start gameplay. </li>

</ul>
</ul>

 <h5>3. Acknowledgement of Risk</h5>
 <ul>
<li>
1. The Company Products include virtual reality simulation technology and equipment’s, use of motion capture and tracking technology, wireless controllers, head mounted virtual reality displays, untethered virtual reality simulation technology and equipment for gaming, simulation, walk throughs, training exercises. </li>


<li>2. You acknowledge and agree that physical injuries including but not limited to cuts and bruises, broken bones, injuries to other body parts, and mental shock may be caused due to
<ul>
<li>(i) normal use of the Company Products;</li>
<li>(ii) negligence on part of the user while use of the Company Products; or</li>
<li>(iii) contact with other users. In exceptional circumstances, users may also suffer permanent disability or death from injuries suffered by use of the Company Products.</li>
</ul>

</li>

<li>3. You acknowledge and agree that use of Company Products is dangerous and still desire to use the Company Products and stay at the Company Premise at your own risk and expressly assume and accept all risks in relation to Company Premise and Company Products. </li>
</ul>


  <h5>4. Waiver </h5>

<p>To the fullest extent permitted by law, you hereby </p>
<ul>
<li>(i) waive any and all claims; </li>
<li>(ii) discharge the Company from any liability, arising out of any personal injury or death or any property damage caused due to use of Company Products or otherwise on Company Premise, save and to the extent found to be directly caused by Company’s negligence or negligence of any of the employee, agent, supervisor of the Company.</li>
</ul>

  <h5>5. Indemnity </h5>

<p>1. You agree to indemnify, defend and hold harmless the Company, and our affiliates, officers, partners, employees, consultants and representatives, from and against all losses, expenses, damages, costs, claims and demands, including reasonable attorney's fees and related costs and expenses, due to or arising out of</p>
<ul>
<li>(i) your negligence, omission, act, conduct or behaviour while using the Company Product or by being present on the Company Premise;</li>
<li>(ii) any or all claims against the Company despite your consent to this Agreement; and</li>
<li>(iii) where any information you submit, email, or otherwise transmit to us violates third party rights or any applicable laws.</li>
</ul>

<p>2. You agree to use the Company Product or stay on the Company Premise in a responsible manner and shall not compromise your own safety and safety of any other person. In the event you cause any physical injuries to other person or damage any equipment related to Company Product, you acknowledge and agree that you shall be liable to pay for such damage caused by you.</p>

<p>3. The above Clauses 5.1 and 5.2 shall be applicable on the individual who purchases the ticket for any third person or any minor. </p>

<h5>6. Unattended Children, Property and Belongings</h5>

<p>1. You undertake that you will not leave your child unattended in the Company Premise if such child is below the age of 14 (fourteen) years (“Child” or “Children”) at any point of time. The Company and our affiliates, officers, partners, employees, consultants and representatives shall not be held responsible for security of any unattended Children in the Company Premise.</p>

<p>2. You agree and acknowledge that you shall not be allowed to enter the game, if there is no person to supervise your Children. In such cases your entry will be forfeited, and you will not receive any refund for the forfeiture. We recommend that you arrive at the Company Premise with someone to supervise your Children while you are enjoying the game.</p>

<p>3. You undertake full responsibility of your own belongings at the Company Premise. The Company shall not be liable in case of any loss or damage to your belongings.</p> 

<h5>7. Consent for Use of Images</h5>

<p>1. You acknowledge that the Company may have installed closed circuit cameras at the Company Premise for security purposes. You hereby provide your consent to videos being taken for security purposes. </p>

<p>2. Additionally, you hereby provide your consent to images and videos being taken for promotional purposes. The Company shall be the exclusive owner of such images and videos, and you agree to free publication or use in any form or media of such images and videos without any compensation.</p>

<h5>8. Late Arrival</h5>

<p>You agree and acknowledge that the use of Company Products is in back-to-back sessions and therefore you must reach the Company Premise at least 30 minutes prior to your scheduled session.</p>

<p>1. In case of the virtual reality games and services, the instructor appointed by the Company shall start the suit-up process 5-10 minutes prior to every session. In the event you arrive after the initiation of the suit-up process, you will not be allowed to enter the game.</p>

<p>2. You agree and acknowledge that in the event you are not allowed to enter the game due to your late arrival, the Company shall not be liable to refund the ticket price to you.</p>

<p>3. In the event you book a team virtual reality game or service and any of your teammates are late. You may choose to wait for them, however in such circumstances your in-game time will be reduced accordingly. In such cases decision of the instructor appointed by the Company shall be final and binding.</p>

<h5>9. Compliance</h5>

<p>1. You warrant that you shall comply with all the signs, signals, notices, directions, and instructions provided by the instructor before, during or after the use of Company Products. In the event you fail to comply with the signs, signals, notices, directions, and instructions provided by the instructor, the Company, at its sole discretion, reserves the right to cancel your ticket and remove you from the Company Premise without any refund or compensation.</p>

<p>2. You warrant that you shall follow all the safety guidelines provided to you by the instructor before, during or after the use of Company Products or the Company for general behaviour in the Company Premise.</p>

<h5>10. Declaration for Use of Virtual Reality Products</h5>

<p>1. You shall comply with following requirements in order to use some of the Company Products offering virtual reality games and services:</p>

<p> </p>

<ul>
1. You warrant that you and minors (in case the ticket is purchased for the minors) are in good health (both physical and mental) and free from any medical conditions, including but not limited to
<ul>
<li>(i). Epilepsy and similar seizure disorders;</li>
<li>(ii). Having implanted pacemakers;</li>
<li>(iii). Deafness or severe hearing loss;</li>
<li>(iv). Broken leg or arm and wearing casts;</li>
<li>(v). Being a wheelchair user;</li>
<li>(vi).Heart condition;</li> 
<li>(vii).Pregnancy;</li>
<li>(viii). Any other serious illness that is capable of hindering your ability to participate in the gaming events.</li>



                   
                </ul>
    <p>2. You acknowledge and agree that use of virtual reality products may affect adversely in case of pregnancy and hence you are required to seek medical advice before engaging in any virtual reality activity. (Applicable in case of women)</p>

<p>3. You have not consumed any liquor, drugs (including prescription drugs if you do not have a prescription from a valid medical professional for the same, which may be required to be produced at the Company Premise) or other narcotics substance and shall not carry such substances during your presence at the Company Premise.</p>
</ul>




<p>2. The Company at its sole discretion, reserves the right to selectively apply the requirements laid down in Clause 10.1 above to the virtual reality games and other services offered in Company Products. You agree and acknowledge that the above requirements may or may not apply to all the Company Products offering virtual reality games and services.</p>

<p>3. The Company shall not be responsible for your failure to disclose any medical condition laid down in Clause 10.1.1 above, to the relevant staff members at the Company Premise, prior to issuance of a ticket for a gaming event. Further, the Company shall have no liability to refund the ticket amount to you in the event that it is found that you failed to disclose your medical condition at the time of purchasing the ticket.</p>

<h5>11. Reservation of right of entry</h5>
<p>1. The Company reserves the right to refuse entrance to anyone found to be in violation of the terms of this Agreement. Further, at its discretion, the Company shall have the right to conduct temperature checks on all players and visitors seeking entry to the Company Premise using thermal temperature scanners, and to refuse entry to any player/visitor found to have a temperature above normal human temperature.</p>
 
 <p>2. The Company reserves the right to request players / visitors to leave the Company Premise if they are found to be in violation of any of the terms of this Agreement, or any other rules communicated to the players and visitors on their entry into the Company Premise. FURTHER, THE COMPANY RESERVES THE RIGHT TO REQUEST PLAYERS/VISITORS TO EXIT THE COMPANY PREMISE IF THEY ARE FOUND TO BE EXBITING KNOWN SYMPTOMS OF COVID-19.  </p>

<h5>12. Severability </h5>

<p>1. If any part of the Terms of Use are determined to be invalid or unenforceable pursuant to Applicable Laws of India, including, but not limited to, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provision will be deemed to be superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remainder of the Terms of Use shall continue in effect.</p>


 <h5>13. Also, I state that –</h5>

<ul>
<li>I am not suffering from flu-like symptoms: fever, cough, breathlessness, sore throat, etc.;</li>
<li>I have not come into contact with any known Covid-19 case in the last 14 days;</li>
<li>I understand that while Microgravity is taking all necessary safety and hygiene precautions, it cannot be held liable if a Player or Visitor is diagnosed with Covid-19.</li>
</ul></div>
            </div>

        </div>
        <div class="col-md-12 tc">
            <h4>CONSENT AND WAIVER AGREEMENT</h4>
        </div>

        <form class="checkbox-tc" method="post" action="/Tests/Post/">

        </form>


    </section>

    <section class="contact-tc">
        <div class="container">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>

            <form  method="POST" action="#">

                @csrf

                <div class="checkbox-tc">

                        <input type="checkbox" id="tcf" class="tcf" name="tc" value="tc" required> I HAVE READ AND AGREE TO THE <a class="link-tc" href="#"> TERMS OF USE </a>AND <a class="link-tc" href="#">PRIVACY POLICY</a>. *<br>
                        <span>By typing your name below and clicking SUBMIT, you are electronically certifying this Waiver and Consent just as if you would physically sign it if it was on paper. Please read the Conditions of Sales and Privacy Policy.</span><br><br>

                        <input type="checkbox" id="tcf2" class="tcf" name="tc" value="tc" required>  I HOLD THE RESPONSIBILITY OF ALL THE MINORS (IF ANY) IN MY BOOKING. I AM THE PARENT OR AGREE TO BE THE LEGAL GUARDIAN OF THE LISTED MINORS OR AM THE DULY AUTHORISED AGENT OF THE PARENT OR LEGAL GUARDIAN OF THE LISTED MINORS AND HAVE DUE AUTHORITY TO AGREE TO THE TERMS OF THIS WAIVER AND CONSENT ON THEIR BEHALF.*


                        <p class="note-text">NOTE: If any participant is below 18 years of age, a parent or a legal guardian are required to sign this waiver and consent on their behalf.</p>
                </div>


            <div class="container contact-from">


                <div class="text-center" style="">
                    <input type="checkbox" id="autofill">
                    <b for="">Check to Auto Fill</b>
                </div>
                
                    <div class="row form-mobile">
                        <div class="col">
                            <P CLASS="player-text-form">PLAYER/<BR>
                            GUARDIAN</P>
                           </div>
                        <div class="col">
                            <input type="text" class="form-control" id="name" placeholder="Name*" name="name" required></div>
                        <div class="col mobile-field">
                            <input type="text" class="form-control" id="email" placeholder="Email*" name="email" required></div>
                        <div style="text-align: center;" class="col mobile-field-age">
                            <select id="age" class="form-control select-waive" name="age" required>
                                <option value="">Age*</option>
                                <?php
                                for ($i=10; $i<=80; $i++)
                                {
                                ?>
                                <option id="<?php echo $i;?>" value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                                }
                                ?>
                            </select>

                        </div>
                        
                        <div class="col">
                            <input type="number" class="form-control" id="phone" placeholder="Phone Number*" name="phone" required></div>
                        <div class="col">
                            <input type="text" class="form-control" id="aadhar" placeholder="Addhar/PAN/Passport*" name="aadhar" required></div>

                    </div>


            </div>
            <div class="text-center">
                <button style="border: 2.2px solid #fece00;" id="wform" type="submit" class="btn booking-btn-tc">Checkout</button>

            </div>

            </form>
        </div>


    </section>

@endsection

@section('script')
    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>


    <script>


        $("#autofill:checkbox").change(function() {
            var ischecked= $(this).is(':checked');

            var name = "{!! Auth::user()->name !!}";
            var email = "{!! Auth::user()->email !!}";
            var phone = "{!! Auth::user()->phone !!}";
            var age = "{!! Auth::user()->age !!}";


            if(ischecked)
            {
                $('#name').val(name);
                $('#email').val(email);
                $('#phone').val(phone);
                $(".select-waive #"+age).attr('selected', true)
            }
            else{
                $('#name').val('');
                $('#email').val('');
                $('#phone').val('');
                $(".select-waive #"+age).attr('selected', false);
            }
        });

    </script>

    <script>

        $('#wform').click(function () {
            // e.preventDefault();

            var flag = true;
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var age = document.getElementById("age");
            age = age.options[age.selectedIndex].value;
            var phone = document.getElementById("phone").value;
            var aadhar = document.getElementById("aadhar").value;
            var tcf = document.getElementById("tcf");
            var tcf2 = document.getElementById("tcf2");

            if(tcf.checked == false){
                $('#tcf').css('border-bottom','1px solid #ef5e25');
                flag = false;
            }else{
                $('#tcf').css('border-bottom','1px solid #275daa');
            }

            if(tcf2.checked == false){
                $('#tcf2').css('border-bottom','1px solid #ef5e25');
                flag = false;
            }else{
                $('#tcf2').css('border-bottom','1px solid #275daa');
            }


            if(name==""){
                $('#name').css('border-bottom','1px solid #ef5e25');
                flag = false;
            }else{
                $('#name').css('border-bottom','1px solid #275daa');
            }

            if(email==""){
                $('#email').css('border-bottom','1px solid #ef5e25');
                flag = false;
            }else{
                $('#email').css('border-bottom','1px solid #275daa');
            }

            if(age==""){
                $('#age').css('border-bottom','1px solid #ef5e25');
                flag = false;
            }else{
                $('#age').css('border-bottom','1px solid #275daa');
            }

            if(phone==""){
                $('#phone').css('border-bottom','1px solid #ef5e25');
                flag = false;
            }else{
                $('#phone').css('border-bottom','1px solid #275daa');
            }

            if(aadhar==""){
                $('#aadhar').css('border-bottom','1px solid #ef5e25');
                flag = false;
            }else{
                $('#aadhar').css('border-bottom','1px solid #275daa');
            }


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if (flag) {
                $.ajax({

                    type: 'POST',

                    url: '/wavier-tc',
                    data: {name: name, email: email, age: age, phone: phone, aadhar: aadhar},
                    beforeSend: function () {
                        $('#wform').attr('disabled', true);
                        $('.loading').css('visibility', 'initial');
                    },
                    complete: function () {
                        $('#wform').attr('disabled', false);
                        $('.wait').remove();
                    },
                    success: function (data) {

                        // console.log(data);

                        if (data.message == 'error'){
                            alert(data.desc);
                            $('#wform').attr('disabled', false);
                            $('.loading').css('visibility', 'hidden');
                        }else{
                            window.location = "/order";
                        }

                    }

                });
            }

        });

        $("input, textarea, select").keyup(function() {
            $("input,textarea, select").css('border-color','');
        });

        $("input, textarea, select").change(function() {
            $("input,textarea, select").css('border-color','');
        });

    </script>

@endsection
