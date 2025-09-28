<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamborghini Newsletter Bollettino</title>
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/TqxSU0dsOd2Q9IbI7CpFnJLD/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-hPyFRPtmIlZ/h96KCtxJTBIBP3zd59DIienuUS73AMSvQ3kZQSEjuK4A+Lw/BPMn"></script><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://cloud.communications.lamborghini.com/validator" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
    <link rel="website icon" type="png" href="logo.png">

    <script>
      // only for demo purposes
      $.validator.setDefaults({
        submitHandler: function() {
          //alert("submitted!");
        }
      });

      $().ready(function() {
        // validate the form when it is submitted
        var validator = $("#contact").validate({
          submitHandler: function(form) {
            var response = grecaptcha.getResponse();
            if (response.length != 0){
              var input = $("<input>")
              .attr("type", "hidden")
              .attr("name", "token").val(response);
              $('#contact').append(input);
              form.submit();
            }else{
              $("#captchaMsg").removeClass("d-none"); 
            }
          },
          errorPlacement: function(error, element) {
            // Append error within linked label
            $( element )
              .closest( "form" )
              .find( "span[data-for='" + element.attr( "id" ) + "']" )
              .append( error );
          },
          errorElement: "span",
          messages: {
            "contact-salutation": {
              required: " (required)",
            },
            "contact-lastName": {
              required: "(required)",
              minlength: " (must be at least 2 characters)",
              maxlength: " (must be between 2 and 255 characters)"
            },
            "contact-firstName": {
              required: " (required)",
              minlength: " (must be at least 2 characters)",
              maxlength: " (must be between 2 and 255 characters)"
            },
            "contact-email": {
              required: " (required)",
              email: " (must be a valid email)"
            },
            "contact-flag1_0": {
              required: "(required)"
            }
          }
        });


        var langSelect = $("#contact-langnl");
        var titleSelect = $("#contact-salutation");
        var countrySelect = $("#contact-country");
        var langSpan = $("span[data-for='contact-langnl']");
        var titleSpan = $("span[data-for='contact-salutation']");
        var countrySpan = $("span[data-for='contact-country']");


        titleSelect.change( function(){
          titleSpan.html($(this).val());
        });

        langSelect.change( function(){
          langSpan.html($(this).find("option:selected").text());
        });

        countrySelect.change( function(){
          countrySpan.html($(this).find("option:selected").text());
        });


      });
    </script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
    background-color: #e5e5e5;
    margin: 0;
    padding: 0;
}

.outerbox{
    margin: 10px auto;
    padding: 20px;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    margin: auto;
    background-color: #eeeeee;
    -webkit-box-shadow: 0 0 6px 0 #000000;
    box-shadow: 0 0 6px 0 #000000;
    max-width: 1030px;
    width: 65%;
    margin-top: 18px;
    margin-bottom: 18px;

}
.box {
    margin: auto;
    max-width: 1038px;
    width: 80%;
    margin-top: 18px;
    margin-bottom: 18px;
}

h1 {
    color: #000000;
    font-size: 24px;
    text-align: left;
}

p {
    text-align: left;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 12px;
}

input, select {
    border: none;
    border-top-width: initial;
    border-right-width: initial;
    border-bottom-width: initial;
    border-left-width: initial;
    border-top-style: none;
    border-right-style: none;
    border-bottom-style: none;
    border-left-style: none;
    border-top-color: initial;
    border-right-color: initial;
    border-bottom-color: initial;
    border-left-color: initial;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
    border-bottom: 1px solid #b1b1b1;
    width: 100%;
    height: 30px;
    line-height: 30px;
    max-width: 100%;
    color: #252424;
    background: transparent !important;
}

.recaptcha {
    margin-top: 20px;
    text-align: center;
}
.row {
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
@media (min-width: 768px) {
    .col-md-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }
}
.col-md-12{
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.required {
    padding-top: 10px !important;
    position: relative;
}
.main_content .field label {
    font-weight: bold;
    font-size: 16px;
    line-height: 20px;
    text-transform: uppercase;
    padding-bottom: 20px;
}

.scrollable {
    resize: vertical;
    outline: none;
    border: none;
    width: 100%;
    min-height: 62px;
    padding: 1px 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    font-size: 12px;
    overflow-x: hidden;
    overflow-y: scroll;
    height: 150px;
    padding: 2px;
    font-style: italic;
}
b, strong {
    font-weight: bolder;
}
#contact-flag1 {
    display: block;
    padding-top: 20px;
}
#contact .field input, #contact .field select {
    border: none;
    border-bottom: 1px solid #b1b1b1;
    width: 100%;
    height: 30px;
    line-height: 30px;
    max-width: 100%;
    color: #252424;
    background: transparent !important;
}
#contact-flag1 input {
    float: left;
    width: auto !important;
    margin-top: 13px;
    height: auto !important;
}
input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
}
button, input {
    overflow: visible;
}
button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
#contact-flag1 label {
    float: left;
    text-transform: none !important;
    width: 80%;
    clear: none;
    padding-left: 10px;
    font-size: 12px !important;
    line-height: 18px !important;
}

.main_content .field label {
    font-weight: bold;
    font-size: 16px;
    line-height: 20px;
    text-transform: uppercase;
    padding-bottom: 20px;
}
label {
    display: inline-block;
    margin-bottom: .5rem;
}
.head{
    font-weight: bolder;
}
.fill {
    padding-top: 20px !important;
    font-size: 10px;
}
.fill {
    margin: 0;
    font-family: Roboto, Helvetica Neue, Arial;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.3em;
    color: #6c757d;
    margin-bottom: 0.8rem;
}
.fill {
    margin-top: 0;
    margin-bottom: 1rem;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.boll{
    font-weight: normal;
}
strong {
    font-weight: bolder;
}
.field {
    margin-top: 1%;
}
.sub {
    cursor: pointer;
    background-color: #dfb400;
    border: none;
    font-family: 'Roboto', fontello, sans-serif;
    font-size: 16px;
    line-height: 40px;
    height: 40px;
    text-transform: uppercase;
    font-weight: 300;
    margin: auto;
    color: #ffffff;
    text-align: center;
    display: block;
    padding: 0px 20px;
}

.sub:hover {
  background: #000;
  color: #fff;
}

</style>
</head>
<body>


    <div class="outerbox">
    <div class="box">
        
        <h1>
            <strong>LAMBORGHINI</strong>
            <span class="boll">BOLLETTINO</span>
            </h1>
        <p class="fill">Fill the form with your personal data to register to receive the Automobili Lamborghini newsletter.</p>
        <form id="newsletterForm" method="POST" action="process_form.php">
         
            <select id="title" name="title" required>
                
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
                <!-- Add other options as needed -->
            </select>

            
            
            <input type="text" id="name" name="name" placeholder="Name" required>

                     
            <input type="text" id="surname" name="surname" placeholder="Surname" required>

            
            <input type="email" id="email" name="email" placeholder="E-mail address" required>

                        
            <select id="language" name="language">
                <option value="-">Country</option><option value="AF">Afghanistan</option>
                          <option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AN">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BES">Bonaire, Sint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">Chinese Mainland</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling),Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo-Brazzaville</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CUW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CI">Côte d'Ivoire</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroes</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="CGY">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong, China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JEY">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao, China</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Marianas</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="BLM">Saint Barthélemy</option><option value="SH">Saint Helena, Ascension and Tristan da Cunha</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="CS">Serbia and Montenegro</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="STP">São Tomé and Príncipe</option><option value="TW">Taiwan, China</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="VI">US Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option><option value="">Other</option>
            </select>

            <div class="field">
           <strong>Please select your preferred language for the Newsletter.</strong>
            <select id="language" name="language">
                <option value="EN" selected="selected">English</option>
                          <option value="IT">Italian</option>
                          <option value="ES">Spanish</option>
                          <option value="JP">Japanese</option>
                          <option value="DE">Dutch</option>
                          <option value="ZH">Chinese</option>
                          <option value="FR">French</option>
                          <option value="RU">Russian</option>
            </select>
        </div>

            <div class="row">
                <div class="col-md-12">
                  <div class="field required full privacy">
                    
                    <strong><label>Disclosure regarding the processing of personal information</label></strong>
                    <div class="scrollable">
                      <strong style="text-decoration: underline"></strong><br>
                      In its capacity of Data Controller, Automobili Lamborghini S.p.A. ("Lamborghini") informs you that your personal data is processed based on logics and procedures consistent with the purposes specified hereunder and in observance of EU Regulation No. 2016/679 (General Data Protection Regulation, the "Regulation").
                      <br>
                      <br>
                      <strong style="text-decoration: underline">Purposes and lawful basis for processing. Consequences should you refuse to provide your personal data</strong><br>
                      Lamborghini collects and processes the personal data that you provide for sales promotion and information activities, sending newsletters, and market research and surveys. Subject to the express consent of the interested party, providing data for the above purposes is necessary for the consent to process personal data in order to be able to be contacted by Lamborghini for marketing purposes. Failure to provide data will result in the impossibility to receive newsletters or sales announcements from Lamborghini or to be contacted for market research and surveys organized by Lamborghini.
                      <br>
                      <br>
                      <strong style="text-decoration: underline">Method for processing and storing personal data</strong><br>
                      Lamborghini processes your personal data with and without the aid of electronic tools and always in observance of the security requirements demanded by applicable legislation. Only duly authorized Lamborghini personnel will have access to your personal data.
Your personal data will be retained for the time strictly necessary to achieve the ends for which they were gathered and to comply with applicable legal and regulatory requirements. The data will be permanently deleted or anonymised when the purposes indicated above have been achieved, except in cases where Lamborghini is required to archive them for a further period in order to comply with legal or regulatory requirements.
                      <br>
                      <br>
                      <strong style="text-decoration: underline">Disclosure of your personal data to third parties</strong><br>
                      Your personal data will not be disclosed. It is understood that Lamborghini does not disclose your personal data to third parties for the marketing purposes described above.
                      <br>
                      <br>
                      <strong style="text-decoration: underline">Data Controller and Data Protection Officer</strong><br>
                      The Data Controller is Automobili Lamborghini S.p.A., with registered office located in via Modena, 12, 40019, Sant'Agata Bolognese (BO), Italy. The Data Protection Officer is domiciled at the offices of the Data Controller and is available at the following email address: <a href="mailto:dpo@lamborghini.com">dpo@lamborghini.com</a>.  
                      <br>
                      <br>
                      <strong style="text-decoration: underline">Your rights</strong><br>
                      You may contact Lamborghini at the toll-free number +39.051.9597282 or at the email address <a href="mailto:privacy@lamborghini.com">privacy@lamborghini.com</a>, or you can contact the Data Protection Officer at the address dpo@lamborghini.com, in order to exercise, at any time, the rights set out under Arts. 15-22 of the Regulation, e.g. to obtain confirmation of whether or not your data exists, to check its content, origin and/or accuracy, request that it be supplemented, updated, corrected, deleted and/or put in anonymous form, request portability of the data, processing limitation, objection to processing for legitimate reasons, e.g. objection to marketing activities. You are entitled to revoke your consent at any time, and to submit a claim to the Supervisory Authority (Italian Data Protection Authority).  
                    </div>
                    <div class="check" id="contact-flag1">

                      <span data-for="contact-flag1_0" class=""></span>
                      <input type="checkbox" id="contact-flag1_0" name="privacy" required="required" value="1">
                      <label for="contact-flag1_0">
                        Having read the disclosure regarding the processing of personal information, I hereby agree to the processing of my personal information for marketing purposes.  
                      </label>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>  
              </div>
            </div>

            <div class="recaptcha">
                <div class="g-recaptcha" data-sitekey="6LeMKPwpAAAAAAudUEmfYbmM9iTQEE3uvD9xtjT9"></div>
            </div>

            <div class="bnt_submit">
            <button type="submit" class="sub">SUBSCRIBE</button>
            </div>
        </form>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
</body>
</html>
