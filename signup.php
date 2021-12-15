<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css">
    <!-- jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    <title>Signup</title>
</head>

<body style="padding:30px;">

<div class="bg-image">
    <form action="insertsignup.php" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-4"><label class="label" for="firstName"> First Name :</label> <input type="text" name="first_name" id="user"></div>
    <div class="col-md-4"><label class="label" class="label" for="MiddleName">Middle Name :</label> <input type="text" name="middle_name" id="mid"></div>
    <div class="col-md-4"><label class="label" class="label" for="LastName">Last Name</label><input type="text" name="last_name" id="last_name"></div>
</div>

        
        
        <br>
<div class="row">
<div class="col-md-3"> <label class="label" class="label" for="Gender">Gender</label><br>
        <select name="gender" id="gender">
        <option value="NULL">-select-</option>
            <option value="m">Male</option>
            <option value="f">female</option>
            <option value="t">Transgender</option>
        </select></div>
<div class="col-md-3">   <label class="label" class="label" for="Dob">Date of Birth</label><br><input type="date" name="dob" id="dob"></div>
<div class="col-md-3">  <label class="label" class="label" for="cast">Category</label><br>
        <select name="cast" style="width: 150px; color:darkblue; border-radius:5px; background-color:yellow; border:0px;" id="cast">
        <option value="NULL">-select-</option>
            <option value="obc">OBC</option>
            <option value="gen">Genral</option>
            <option value="sc">SC</option>
            <option value="st">ST</option>
            <option value="other">Other</option>
        </select></div>
<div class="col-md-3"> <label class="label" class="label" for="mob">mobile no.</label><br><input type="number" name="mob1" id="mob" maxlength="10" minlength="10"></div>
</div>
<div class="row">
    <div class="col-md-3"><label class="label" class="label" for="almob">Alternative mobile no.</label><input type="number" name="mob2" id="mob" maxlength="10" minlength="10"></div>
    <div class="col-md-3"><label class="label" class="label" for="email">Email</label><br><input type="email" name="email" id="email"></div>
    <div class="col-md-3"><label class="label" class="label" for="email">Confirm Email</label><input type="email" name="c_email" id="c_email"></div>
    <div class="col-md-3"><label class="label" class="label" for="session">Session</label><input type="text"  min="2020-2021"  name="clgsession" id="session"></div>
</div>
<hr>
        <h2>Personal Details</h2>
        <br>
        <div class="row">
            <div class="col-md-3">   <label class="label" class="label" for="fatherName">Father Name</label><input type="text" name="father_name" id="father_name"></div>
            <div class="col-md-3"><label class="label" class="label" for="servicefatherName">Father Occupatation</label><input type="text" name="father_occuptation" id="father_occupation"></div>
            <div class="col-md-3"><label class="label" class="label" for="MotherName">Mother Name</label><input type="text" name="mother_name" id="mother_name"></div>
            <div class="col-md-3"><label class="label" class="label" for="mother_occupation">Mother Occupatation</label><input type="text" name="mother_occuptation" id="Mother_occupation"></div>
        </div>
     
        <div class="row">
            <div class="col-md-3"><label class="label" class="label" for="gudienemail">Guardian email</label><br><input type="email" name="guardian_email" id="guardian_email"></div>
            <div class="col-md-3">
        <label class="label" class="label" for="parmanentAdd">Parmanent Address</label>
        <input type="text" name="parmanent_add" id="parmanent_add"></div>
            <div class="col-md-3">  <label class="label" class="label"  for="countryName">Country </label><br>
        <select id="country" style="width: 240px;"  name="country">
            <option>select country</option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Aland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, Democratic Republic of the Congo</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Cote D'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curacao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and Mcdonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="india">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="XK">Kosovo</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libyan Arab Jamahiriya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="AN">Netherlands Antilles</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Reunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthelemy</option>
            <option value="SH">Saint Helena</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="CS">Serbia and Montenegro</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.s.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
        </select></div>
            <div class="col-md-3">
        <label class="label" id="stlbl" style="visibility: hidden;" for="state">State</label>
        <select name="state"  id="state" style="visibility: hidden;" >
     
            <option value="none"></option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
        </select></div>
        </div>
        
        
        

      
        <label class="label" class="label" for="pincode">Pin Code</label><br><input type="text" style="width: min-content; height:30px;" name="pincode" id="pincode">
        <hr>
        <h2>Education</h2>
        <table class="">
            <th> </th>
            <th>School Name</th>
            <th>Board/University</th>
            <th>total marks</th>
            <th>obtain marks</th>
            <th>%</th>
            <tr>
                <td>High School</td>
                <td><input type="text" name="hs_name" id="hs_name"></td>
                <td>


                    <select name="hboard">
                        <option value="none"></option>
                        <option value="CBSC">CBSC</option>
                        <option value="CBSC">ICSE</option>
                        <option value="CBSC">State Board</option>
                        <option value="CBSC">other</option>
                    </select>

                </td>
                <td><input type="number" name="htotal_marks" id="htotal_marks"></td>
                <td><input type="number" name="hobtain_marks" id="hobtain_marks"></td>
                <td><input type="number" name="hpercent"   id=""></td>
            </tr>
            <tr>
                <td>Intermediate </td>
                <td><input type="text" name="intermediate_school_name" id="hs_name"></td>
                <td><select name="iboard">
                        <option value="none"></option>
                        <option value="CBSC">CBSC</option>
                        <option value="ICSE">ICSE</option>
                        <option value="st">State Board</option>
                        <option value="other">other</option>
                    </select></td>
                <td><input type="number" name="itotal_marks" id="total_marks"></td>
                <td><input type="number" name="iobtain_marks" id="obtain"></td>
                <td><input type="number" name="ipercent" id=""></td>
            </tr>
            <tr>
                <td>Graduation</td>
                <td><input type="text" name="graduation_clg" id="graduation_clg"></td>
                <td>
                    
                
<select style="width: 95px;" name="gboard" id="gboard">

<option value="">--Select--</option>
	<option value="34285">A P V PVT INDUSTRIAL TRAINING CENTRE PANDUNAGAR</option>
	<option value="34023">A.N.D.NAGAR NIGAM MAHILA MAHAVIDYALAYA KANPUR NAGAR</option>
	<option value="34410">AASTHA NURSING COLLEGE</option>
	<option value="34291">AASTHA PARAMEDICAL COLLEGE,SINGHPUR,KANPUR NAGAR</option>
	<option value="34183">ABHINAV INSTITUTE OF MANAGEMANT AND TECHNOLOGY,&#160;KANPUR&#160;</option>
	<option value="34024">ABHINAV SEVA SANSTHAN DEGREE COLLEGE,RAJIVPURAM,KANPUR NAGAR</option>
	<option value="34333">ABHINAVA INSTITUTE OF PROFESSIONAL STUDIES  VILLAGE TIGHRA  POST CHAUBEPUR  KANPUR NAGAR</option>
	<option value="34405">ADARSH PRIVATE ITI</option>
	<option value="34280">ADARSH PVT.ITI, 7/339 AWASH VIKASH NO.3 AMBEDKARAM PURAM KALYANPUR KANPUR</option>
	<option value="34317">ADVANCE COLLEGE OF EDUCATION</option>
	<option value="34151">ADVANCE INSTITUTE OF BIOTECH</option>
	<option value="34193">ADVANCE TRAINING INSTITUTE, UDHYOG NAGAR, GOVIND NAGAR, KANPUR</option>
	<option value="34430">AFWWA INDUSTRIAL TRAINING INSTITUTE</option>
	<option value="34265">AIILSG RAIL BAZAR KANPUR</option>
	<option value="34316">ALLENHOUSE BUSINESS SCHOOL ROOMA KANPUR</option>
	<option value="34448">ALLENHOUSE INSTITUTE OF MANAGEMENT</option>
	<option value="34169">ALLENHOUSE INSTITUTE OF TECHNOLOGY, KANPUR,&#160;KANPUR - 208008&#160;</option>
	<option value="34228">ANANDA SCHOOL OF NURSING, 16-A, RAMPURAM, SHYAMNAGAR, KANPUR</option>
	<option value="34271">ANGAD SINGH DILIP SINGH MAHILA MAHAVIDHYALAYA, SARH, KANPUR</option>
	<option value="34162">APOLLO INSTITUTE OF TECHNOLOGY,&#160;KANPUR&#160;</option>
	<option value="34025">ARMAPUR P.G. COLLEGE KANPUR NAGAR</option>
	<option value="34325">Astha Institute of Professional Studies</option>
	<option value="34189">AXIS BUISNESS SCHOOL, KANPUR NAGAR,KANPUR NAGAR&#160;</option>
	<option value="34188">AXIS INSTITUTE OF ARCHITECTURE, KANPUR,KANPUR&#160;</option>
	<option value="34400">Axis Institute of Diploma Engineering</option>
	<option value="34187">AXIS INSTITUTE OF FASHION TECHNOLOGY, KANPUR,KANPUR&#160;</option>
	<option value="34217">AXIS INSTITUTE OF HIGHER EDUCATION HATHIPUR ROOMA KANPUR</option>
	<option value="34450">AXIS INSTITUTE OF PHARMACY</option>
	<option value="34190">AXIS INSTITUTE OF PLANNING AND MANAGEMENT, KANPUR NAGAR,KANPUR NAGAR&#160;</option>
	<option value="34186">AXIS INSTITUTE OF TECHNOLOGY &amp; MANAGEMENT,KANPUR&#160;</option>
	<option value="34240">AZAD COLLEGE OF EDUCATION GHATAMPUR</option>
	<option value="34026">AZAD MAHAVIDYALAY BARI BHITARGAON</option>
	<option value="34027">B.N.D.COLLEGE KANPUR NAGAR</option>
	<option value="34262">BABA BAIJNATH DEGREE COLLEGE, PATARA KANPUR</option>
	<option value="34194">BABU SUKHDEV PRASAD VERMA LAW COLLEGE, CHAKERI, KANPUR NAGAR</option>
	<option value="34029">BANSHI COLLEGE OF EDUCATION,MOHAMMADPUR,BITHOOR,KANPUR NAGAR</option>
	<option value="34195">BANSHI COLLEGE OF MANAGEMENT STUDIES, BITHOOR KANPUR.</option>
	<option value="34180">BANSI COLLEGE OF MANAGEMENT &amp; TECHNOLOGY, KANPUR,&#160;KANPUR&#160;</option>
	<option value="34375">BARA DEVI PRIVATE ITI</option>
	<option value="34374">BARADEVI PRIVATE ITI</option>
	<option value="34238">BARADEVI PVT ITI N  BLOCK KIDWAI NAGAR KANPUR NAGAR</option>
	<option value="34030">BHAGWANTI  EDUCATION CENTER DEGREE COLLEGE MANDHANA KANPUR NAGAR</option>
	<option value="34031">BRAHMAWART P.G. COLLEGE,MANDHANA,KANPUR NAGAR</option>
	<option value="34460">BRAJLAL VERMA MEMORIAL MAHAVIDHYALAYA SARSAUL</option>
	<option value="34032">BRASHPATI  DEGREE COLLEGE,KIDWAI NAGAR, KANPUR NAGAR  </option>
	<option value="34366">C L MEMORIAL PRIVATE ITI</option>
	<option value="34062">CAPTAIN SUKHWASHI SINGH SMARAK JANTA MAHAVIDHYALAYA GHATAMPUR KANPUR NAGAR</option>
	<option value="34386">CENTRAL INSTITUTE OF FIRE SAFETY ENGINEERING</option>
	<option value="34103">CH. HARMOHAN SINGH PARAMEDICAL  SCIENCES &amp; NURSING INSTITUTION, MARDANPUR, MEHARBAN SINGH KA PURWA,</option>
	<option value="34033">CH.RAM GOPAL VIDHI MAHA VIDALYA MEHARBAN SINGH KA PURWA KANPUR NAGAR</option>
	<option value="34134">CHANDANI CHAIRITABLE HOSPITAL SOCIETY ,SCHOOL OF NURSING -9/60,  ARYA NAGAR, KANPUR</option>
	<option value="34345">CHANDANI CHAIRITABLE HOSPITAL SOCIETY DIALYSIS TECHNICIAN TRAINING CENTRE  LAKHNANPUR V N KANPUR</option>
	<option value="34346">CHANDANI CHAIRITABLE HOSPITAL SOCIETY OPTOMETRY TRAINING CENTRE LAKHNANPUR V N KANPUR</option>
	<option value="34421">chandra bhal private iti  GUJAINI KANPUR</option>
	<option value="34391">CHANDRAKALI AUDDYOGIK PRASHIKSHAN KENDRA PRIVATE ITI KARBIGWAN</option>
	<option value="34197">CHANDRASHEKHAR AZAD AGRICULTURE UNIVERSITY, KANPUR.</option>
	<option value="34224">CHANDRASHEKHAR AZAD DEGREE COLLEGE, KISHAN NAGAR ROAD, JAMU, KANPUR NAGAR</option>
	<option value="34206">CHATRAPATI SAHU JI MAHARAJ UNIVERSITY, KANPUR </option>
	<option value="34398">CHIRANJEEVI PRIVATE INDUSTRIAL TRAINING INSTITUTE</option>
	<option value="34034">CHITRA DEGREE COLLEGE,NAUBASTA, KANPUR NAGAR</option>
	<option value="34035">CHRIST CHURCH COLLEGE KANPUR</option>
	<option value="34231">CITY MODEL DEGREE COLLEGE, BHAILAMAU, KALPI ROAD, KANPUR</option>
	<option value="34282">CITY PARAMEDICAL COLLEGE, 83 145 C JUHI PARAMPURWA KANPUR</option>
	<option value="34196">COLLEGE OF EDUCATION AND TECHNOLOGY, DEVPALPUR, CHUBEYPUR, KANPUR</option>
	<option value="34145">COLLEGE OF MANAGEMENT STUDIES, KANPUR - 208001.&#160;</option>
	<option value="34432">COLLEGE OF NURSING KANPUR</option>
	<option value="34263">COMPUTER INDUSTRIAL TRAINING CENTRE PANDU NAGAR KANPUR</option>
	<option value="34036">D.A.V.COLLEGE KANPUR</option>
	<option value="34037">D.A.V.TRAINING COLLEGE,KANPUR NAGAR</option>
	<option value="34038">D.B.S.COLLEGE KANPUR NAGAR</option>
	<option value="34039">DAYA NAND COLLEGE OF LAW,KANPUR NAGAR</option>
	<option value="34041">DAYA NAND GIRLS COLLEGE KANPUR NAGAR</option>
	<option value="34042">DAYA NAND WOMEN TRAINING COLLEGE KANPUR NAGAR</option>
	<option value="34156">DAYANAD DINANATH COLLEGE OF MANAGEMENT,&#160;KANPUR&#160;</option>
	<option value="34144">DAYANAND ACADEMY OF MANAGEMENT STUDIES, KANPUR-208006&#160;</option>
	<option value="34043">DAYANAND DANKU PARAGA GYANODAYA DEGREE COLLEGE,MURLIPUR,BHITERGAUN,KANPUR NAGAR</option>
	<option value="34104">DAYANAND DEENA NATH COLLEGE--NATIONAL HIWAY 86 HAMIRPUR ROAD, RAMIPUR, KANPUR</option>
	<option value="34447">DAYANAND DINANATH COLLEGE OF PHARMACY</option>
	<option value="34153">DAYANAND DINANATH COLLEGE, INSTITUTE OF PHARMACY,KANPUR,209-214 &#160;</option>
	<option value="34403">Deepak bhadauriya teachers training college</option>
	<option value="34339">District Institute Of Education and Training kanpur nagar Uttar Pradesh</option>
	<option value="34411">DR ATAR SINGH KAILASH KUMARI VIDHI MAHAVIDYALAYA</option>
	<option value="34283">DR ATUL MEMORIAL INSTITUTE OF PARAMEDICAL SCIENCES GHATAMPUR</option>
	<option value="34300">DR DHARMENDRA SINGH BANSHIDHAR SACHAN MV KANPUR</option>
	<option value="34406">DR GOVIND PRASAD RANI DEVI PATEL  UCHACHA SHIKSHA SANSTHAN ARAUL KANPUR NAGAR</option>
	<option value="34446">DR RAM PRAKASH PRIVATE ITI</option>
	<option value="34251">DR RAM PRAKASH SMARAK MV PARAS GHATAMPUR KANPUR</option>
	<option value="34245">DR VISHAMBHAR SINGH PRATAP SINGH MAHA V GADHEVA TATIYA GANJ</option>
	<option value="34149">DR. AMBEDKAR INSTITUTE OF TECHNOLOGY FOR HANDICAPPED ,&#160;KANPUR &#160;</option>
	<option value="34121">DR. AMBEDKAR INSTITUTE OF TECHNOLOGY FOR HANDICAPPED,DIPLOMA COURSES,  KANPUR</option>
	<option value="34184">DR. G.P.R.D. PATEL INSTITUTE OF TECHNOLOGY AND MANAGEMENT, G.T. ROAD ARAUL, KANPUR&#160;</option>
	<option value="34105">DR. J.L.R.S. EYE HOSPITAL--G.T. ROAD, SARVODAY NAGAR,  KANPUR</option>
	<option value="34044">DR.GOVIND PRASAD RANI DEVI PATEL DEGREE COLLEGE,ARAUL,KANPUR NAGAR </option>
	<option value="34045">DR.GOVIND PRASAD RANI DEVI PATEL VIDHI MAHA VIDALAYA ARROUL KANPUR NAGAR</option>
	<option value="34046">DR.RAM MANOHAR LAHIA DEGREE COLLEGE,KALYANPUR,KANPUR NAGAR</option>
	<option value="34047">DR.VIRENDRA SWAROOP INSTITUTE OF PROFESSIONAL STUDIES,KIDWAI NAGAR,KANPUR NAGAR</option>
	<option value="34143">DR.VIRENDRA SWARUP INSTITUTE OF COMPUTER STUDIES,KANPUR-208014&#160;</option>
	<option value="34336">DTS Private ITI</option>
	<option value="34380">EXCEL SCHOOL OF NURSING AND PARAMEDICAL SCIENCES</option>
	<option value="34106">EXCEL SCHOOL OF NURSING, 14/138 CHUNNIGANJ, KANPUR</option>
	<option value="34407">FACULTY OF PHARMACY NARAINA VIDYA PEETH GANGA GANJ PANKI KANPUR</option>
	<option value="34182">FIVE SCHOOL OF BUSINESS, KANPUR,&#160;KANPUR&#160;</option>
	<option value="34102">G.S.V.M. MEDICAL COLLEGE,  KANPUR</option>
	<option value="34049">GAUTAM BUDH DEGREE COLLEGE,SIDDHARTH NAGAR,BINGAVA,KANPUR NAGAR</option>
	<option value="34376">GAYA PRASAD COLLEGE OF PROFESSIONAL EDUCATION DHUKAPUR SHIVRAJPUR KANPUR NAGAR</option>
	<option value="34050">GAYA PRASAD VIDHI MAHA VIDEYALAY DHUKAPUR KANPUR NAGAR</option>
	<option value="34437">GOVT INDUSTRIAL TRANING INSTITUTE</option>
	<option value="34388">GOVT ITI KALYANPUR KANPUR NAGAR</option>
	<option value="34120">GOVT. LEATHER INSTITUTE, KANPUR</option>
	<option value="34198">GOVT. POLYTECHNIC, GHATAMPUR, KANPUR NAGAR</option>
	<option value="34199">GOVT. POLYTECHNIC, KANPUR NAGAR</option>
	<option value="34051">GURU GOVIND SINGH DEGREE COLLEGE,GOVIND NAGAR,KANPUR NAGAR</option>
	<option value="34052">GURU NANAK GIRLS P.G. COLLEGE KANPUR NAGAR</option>
	<option value="34053">HALIM MUSLIM COLLEGE KANPUR NAGAR</option>
	<option value="34362">HARCOURT BUTLER TECHNICAL UNIVERSITY</option>
	<option value="34141">HARCOURT BUTLER TECHNOLOGICAL INSTITUTE,&#160;KANPUR - 208002&#160;</option>
	<option value="34343">Hare Krishna College of Humanties</option>
	<option value="34054">HARSAHAY P.G.COLLEGE KANPUR NAGAR </option>
	<option value="34303">HBTI KANNAUJ HBTI KANPUR NAGAR CAMPUS KANPUR</option>
	<option value="34304">HBTI MAINPURI HBTI KANPUR NAGAR CAMPUS KANPUR</option>
	<option value="34226">HEERALAL PATEL (P.) I.T.I. JARAULI-PH-2, KANPUR-208027</option>
	<option value="34200">I.I.T. KALYANPUR, KANPUR NAGAR</option>
	<option value="34203">I.T.I. LAL BANGLA, KANPUR NAGAR</option>
	<option value="34204">I.T.I. PANDU NAGAR, KANPUR NAGAR</option>
	<option value="34332">INDIAN PRIVATE ITI HAZIPUR RAMAIPUR KANPUR</option>
	<option value="34159">INDUS INSTITUTE OF TECHNOLOGY &amp; MANAGEMENT, KANPUR&#160;</option>
	<option value="34312">INSTITUTE OF MANAGEMENT AND TECHNOLOGY</option>
	<option value="34253">INSTITUTE OF PRODUCTIVITY AND MANAGEMENT KALYANPUR KANPUR</option>
	<option value="34357">J B Singh Private ITI</option>
	<option value="34440">J K CANCER INSTITUTE KANPUR</option>
	<option value="34422">J K INDUSTRIAL TRAINING CENTRE</option>
	<option value="34381">JAGESHWAR PRASAD MANNU LAL VIDHI MAHAVIDYALAYA HANSPUR MANDHANA KANPUR NAGAR</option>
	<option value="34055">JAGRAN COLLEGE OF ART,SCIENCE AND COMMERCE,JUHI,KANPUR NAGAR</option>
	<option value="34166">JAGRAN INSTITUTE OF MANAGEMENT,&#160;KANPUR&#160;</option>
	<option value="34330">jagwant Singh bhadauria public school</option>
	<option value="34260">JAGWANT SINGH BHADAURIYA DEGREE COLLEGE, AMAUR, KANPUR NAGAR</option>
	<option value="34239">JAN JAGRAN AOUDHYOGIK PRASIKSHAN KENDRA HORA KACHAR NARAMAU KANPUR</option>
	<option value="34022">JANTA INDUSTRIAL TRAINNING CENTER DEHALISUJANPUR, KOYALA NAGAR, KANPUR</option>
	<option value="34377">JANTA JANARDAN PVT ITI</option>
	<option value="34056">JANTA SIKSHA SANSTHAN GHATAMPUR KANPUR NAGAR</option>
	<option value="34139">JAWAHAR LAL NEHRU HOMEOPATHIC  COLLEGE</option>
	<option value="34296">JK CENTRE FOR TECHNICIAN TRAINING PVT. ITI</option>
	<option value="34057">JUHARI DEVI GIRLS P.G.COLLEGE KANPUR NAGAR</option>
	<option value="34058">JWALA DEVI GIRLS P.G.COLLEGE KANPUR NAGAR</option>
	<option value="34355">JWALA PRASAD KUREEL SMARAK MAHAVIDYALAYA FATTEPUR NAURANGA KANPUR NAGAR</option>
	<option value="34445">JWALA PRASAD PRIVATE I T I</option>
	<option value="34059">K.K.MAHILA DEGREE COLLEGE,KIDWAI NAGAR,KANPUR NAGAR</option>
	<option value="34060">K.M.COLLAGE OF EDUCATION MUIYA KANPUR</option>
	<option value="34435">Kamlesh Kumari Laxmi Kant Mahavidyalaya Manpur Kathara</option>
	<option value="34428">kanpur industrial training institute pvt</option>
	<option value="34331">KANPUR INSTITUTE FOR TEACHER EDUCATION</option>
	<option value="34414">KANPUR INSTITUTE OF HIGHER EDUCATION</option>
	<option value="34413">KANPUR INSTITUTE OF TECHNICAL EDUCATION</option>
	<option value="34174">KANPUR INSTITUTE OF TECHNOLOGY &amp; PHARMACY&#160;</option>
	<option value="34148">KANPUR INSTITUTE OF TECHNOLOGY ,&#160;KANPUR&#160;</option>
	<option value="34109">KANPUR PARAMEDICAL COLLEGE--83/145, C, JUHI, PARAMPURWA,  KANPUR</option>
	<option value="34223">KANPUR PARAMEDICAL TRAINING CENTRE, KALYANPUR, KANPUR</option>
	<option value="34061">KANPUR VIDYA MANDIR MAHILA MAHAVIDYALAYA KANPUR NAGAR</option>
	<option value="34279">KAPOOR PRIVATE ITI, VILLAGE GAMBHIRPUR POST BEHATA GAMBHIRPUR, KANPUR NAGAR</option>
	<option value="34301">KARMYOGI PRABHUDEVI LALITA DEVI SIKSHAN SANSTHAN ITI KUNDAULI RAMAIPUR</option>
	<option value="34340">KHAIRABAD EYE HOSPITAL SWAROOP NAGAR KANPUR NAGAR</option>
	<option value="34063">KHALSHA GIRLS DEGREE COLLEGE,HARJINDAR NAGAR,KANPUR NAGAR</option>
	<option value="34431">KRISHNA COLLEGE OF HIGHER EDUCATION</option>
	<option value="34230">KRISHNA INSTITUTE OF NURSING SCIENCE AND RESEARCH, AMILIHA, KANPUR-209217</option>
	<option value="34419">KRISHNA INSTITUTE OF PHARMACY AND SCIENCES</option>
	<option value="34160">KRISHNA INSTITUTE OF TECHNOLOGY,&#160;KANPUR&#160;</option>
	<option value="34401">KUNWAR SHIVNATH SINGH KUSHWAHA PRIVATE ITI KOTRA MAKRANDPUR KANPUR NAGAR</option>
	<option value="34342">KUWAR SANJEEV SINGH COLLEGE OF EDUCATION GUJELA DOHRU GHATAMPUR KANPUR NAGAR</option>
	<option value="34222">LALLU SINGH M.V. IMLIPUR, KANPUR</option>
	<option value="34449">LAXMI DEVI GIRLS DEGREE COLLEGE</option>
	<option value="34241">LUVKUSH INSTITUTE FOR HIEGHER EDUCATION CHOBEYPUR</option>
	<option value="34302">MA GAYATRI MV KHADESHARDHAM PO GAYATRI SIDHPITH KANPU 209214</option>
	<option value="34350">MAA RAMDARSHANI MAHILA MAHAVIDAYALA  MUSHTA KANPUR NAGAR</option>
	<option value="34065">MAA SHEETLA DEVI T.N.MAHILA DEGREE COLLEGE ,AROUL.KANPUR NAGAR</option>
	<option value="34323">Maa Vaishno Institute Of Paramedical College Kanpur</option>
	<option value="34373">MAA VAISHNO PRIVATE ITI</option>
	<option value="34112">MADHAV NETRA KENDRA,AWADHPURI, G.T.ROAD, KANPUR-208024</option>
	<option value="34360">MAHARAJPUR PRIVATE ITI</option>
	<option value="34158">MAHARANA  INSTITUTE OF PROFESSIONAL STUDIES&#160;ISHWARIGUNJ KANPUR</option>
	<option value="34293">MAHARANA PRATAP COLLEGE FOR PROFESSIONAL STUDIES,BAIKUNTHPUR,KANPUR NAGAR</option>
	<option value="34315">MAHARANA PRATAP COLLEGE FOR TEACHERS TRAINING BAIKUNTHPUR BITHOOR ROAD KANPUR NAGAR</option>
	<option value="34294">MAHARANA PRATAP COLLEGE FOR TECHNICAL SKILLS PVT.ITI,BAIKUNTHPUR,BITHOOR ROAD,KANPUR NAGAR</option>
	<option value="34170">MAHARANA PRATAP COLLEGE OF ENGINEERING, BAKUNTHPUR, KANPUR NAGAR-209217</option>
	<option value="34458">MAHARANA PRATAP COLLEGE OF NURSING AND PARAMEDICAL SCIENCES KANPUR</option>
	<option value="34409">MAHARANA PRATAP COLLEGE OF PHARMACEUTICAL SCIENCES</option>
	<option value="34438">MAHARANA PRATAP COLLEGE OF PHARMACY AND PARAMEDICAL SCIENCES</option>
	<option value="34152">MAHARANA PRATAP COLLEGE OF PHARMACY,&#160;KANPUR - 209217 UP&#160;</option>
	<option value="34138">MAHARANA PRATAP DENTAL COLLEGE &amp; HOPITAL</option>
	<option value="34142">MAHARANA PRATAP ENGINEERING COLLEGE,&#160;MANDHANA,  KANPUR -209217&#160;</option>
	<option value="34066">MAHILA MAHAVIDYALAYA, KIDWAI NAGAR, KANPUR NAGAR</option>
	<option value="34326">MANJUL ITI KANPUR</option>
	<option value="34067">MANOHAR LAL  DEGREE COLLEGE,JAJMAU,KANPUR NAGAR</option>
	<option value="34225">MANPRASTHA INDUSTRIAL TRAINING CENTRE, NARAMAU,  MANDHANA, KANPUR-209217</option>
	<option value="34313">MATA VIDHYAWATI RAM AUTAR MAHAVIDHYALAY</option>
	<option value="34347">MGA Institute of Higher Education</option>
	<option value="34321">MGA INSTITUTE OF POLYTECHNIC</option>
	<option value="34459">MITHLESH SINGH MAHILA MAHAVIDHYALAYA SAKARPUR YASODA NAGAR</option>
	<option value="34068">MOHINI B MANWANI GIRLS DEGREE COLLEGE KALYANPUR AWAS VIKAS 3 KANPUR NAGAR</option>
	<option value="34069">MULAYAM SINGH MAHA VIDALAYA YASHODA NAGAR KANPUR NAGAR</option>
	<option value="34368">Mulayam Singh Mahavidyalaya Kathra  Bidhunu  Kanpur Nagar</option>
	<option value="34287">NANDRANI PVT ITI 35 BITHOOR PACHOR ROAD MANDHANA KANPUR 209217</option>
	<option value="34335">NANDRANI SHIKSHAN SHANSTHAN</option>
	<option value="34154">NARAINA COLLEGE OF ENGINEERING &amp; TECHNOLOGY,&#160;PANKI RATANPUR, KANPUR &#160;</option>
	<option value="34221">NARAINA COLLEGE OF MANAGEMENT, GANGAGANJ, PANKI, KANPUR</option>
	<option value="34114">NARAINA NURSING COLLEGE, GANGAGANJ, 1170, PANKI KANPUR</option>
	<option value="34382">NARAINA POLYTECHNIC INSTITUTE</option>
	<option value="34378">Naraina School of Planning and Architecture</option>
	<option value="34165">NARAINA VIDYA PEETH ENGINEERING &amp; MANAGEMENT INSTITUTE, 1180&#160;GANGA GUNJ PANKI KANPUR&#160;</option>
	<option value="34248">NARAINA VIDYA PEETH GROUP OF INSTITUTIONS FACULTY OF PHARMACY  GANGA GUNJ PANKI  KANPUR</option>
	<option value="34216">NARAINA VIDYA PEETH GROUP OF INSTITUTIONS, FACULTY OF PGDM  1164 GNAGA GUNJ PANKI,  KANPUR&#160;</option>
	<option value="34167">NARAINA VIDYA PEETH MANAGEMENT INSTITUTE ,&#160;1180 PANKI GANGA GUNJ KANPUR&#160;</option>
	<option value="34295">NARWAL INDUSTRIAL TRAINING INSTITUTE NARWAL</option>
	<option value="34205">NATIONAL SUGAR INSTITUTE, KALYANPUR, KANPUR NAGAR</option>
	<option value="34255">NAVBHARAT INDUSTRIAL TRAINING CENTRE ARYA NAGAR KANPUR</option>
	<option value="34254">NAVYUG INDUSTRIAL TRAINING CENTRE HARSH NAGAR KANPUR</option>
	<option value="34429">NAWAB SINGH BADAN SINGH SIKSHA SANSTHAN GHATAMPUR KANPUR NAGAR</option>
	<option value="34389">NEW PRAGATI PRIVATE ITI</option>
	<option value="34276">OM SHIVSHAKTI M.V. SAPAI KANPUR NAGAR</option>
	<option value="34070">OMAR VASHYA VIDYAPEETH LALA PURUSHOTTAM DAS DEGREE COLLEGE, SHYAM NAGAR,KANPUR NAGAR</option>
	<option value="34344">OXFORD MODEL INSTITUTE OF ADVANCE STUDIES MAHARAJPUR KANPUR NAGAR</option>
	<option value="34123">OXFORD MODEL INSTT. OF ADVANCE STUDIES, SHYAMNAGAR, KANPUR</option>
	<option value="34423">P S INSTITUTE OF PHARMACY</option>
	<option value="34369">P S SHIKSHAN SANSTHAN GHATAMPUR  KANPUR</option>
	<option value="34072">P.P.N.COLLEGE KANPUR NAGAR</option>
	<option value="34073">PANDIT R.K.SHUKLA COLLAGE OF LAW AMILIHA CHUBEPUR KANPUR</option>
	<option value="34074">PATEL DEGREE COLLEGE ALIYAPUR SAJETI KANPUR NAGAR</option>
	<option value="34338">prachi law college fathypur daccan sen paschim para naubasta kanpur</option>
	<option value="34292">PRACHI MAHAVIDYALAYA.FATEHPUR DAKSHIN SEN PASHCHIM PARA,NAUBASTA,KANPUR</option>
	<option value="34402">PRACHI TEACHERS TRAINING COLLEGE FATTEPUR DAKSHIN SEN PASHCHIM PARA NAUBASTA  KANPUR</option>
	<option value="34297">PRAGATI AUDYOGIK PRASHIKSHAN KENDRA ITI,KALYANPUR</option>
	<option value="34436">PRAGATI PRIVATE ITI KALYANPUR</option>
	<option value="34075">PRAKASH VIDYA MANDIR MAHILA DEGREE COLLEGE</option>
	<option value="34147">PRANVEER SINGH INSTITUTE OF TECHNOLOGY , KANPUR&#160;</option>
	<option value="34383">Prayaas  Audhougik Prashikshan Kendra kanpur</option>
	<option value="34351">PRAYAG COLLEGE OF SPECIAL EDUCATION DAMODAR NAGAR BARRA KANPUR</option>
	<option value="34324">prd mahavidyalaya jahangeerabad kanpur</option>
	<option value="34136">PRIMIER INSTITUTE OF PARA MEDICAL SCIENCES--127/396-A, JUHI DIPO ROAD, </option>
	<option value="34076">PROF.H.N.MISHRA CENTER OF EDUCATION,KANPUR NAGAR</option>
	<option value="34157">PSIT COLLEGE OF ENGINEERING BHAUTI  KANPUR</option>
	<option value="34309">PSIT COLLEGE OF HIGHER EDUCATION KANPUR AGRA DELHI NH TWO BHAUTI KANPUR</option>
	<option value="34385">PSIT COLLEGE OF HIGHER EDUCATION KANPUR MBA</option>
	<option value="34426">PSIT COLLEGE OF LAW KANPUR</option>
	<option value="34415">PSIT COLLEGE OF MANAGEMENT KANPUR</option>
	<option value="34425">PSIT Polytechnic</option>
	<option value="34242">PT BALGOVIND DIXIT COLLEGE OF EDUCATION AND PROFESSIONAL MANAGEMENT BITHOOR</option>
	<option value="34427">Pt JDM Pvt ITI</option>
	<option value="34454">PT RK SHUKLA COLLEGE OF PHARMACY</option>
	<option value="34453">PT RK SHUKLA DEGREE COLLEGE</option>
	<option value="34461">PT VISHWANATH PANDEY MAHAVIDYALAYA</option>
	<option value="34077">PT.RAM NARAIN KANHAYA LAL SHUKLA BALIKA DEGREE COLLEGE,NANKARI,KANPUR NAGAR</option>
	<option value="34078">PT.SAHDEV PRASAD TRIVEDI DEGREE COLLEGE,RAMAIPUR,KANPUR NAGAER </option>
	<option value="34233">PURSHOTTAM SHREE RAM DEGREE COLLEGE NANDANA PATARSA KANPUR</option>
	<option value="34363">PURVANCHAL TECHNICAL SKILL PRIVATE ITI</option>
	<option value="34384">PYARE LAL PRASHIKSHAN MAHAVIDYALAYA  MEDUA G T ROAD ARAUL BILHAUR KANPUR NAGAR</option>
	<option value="34071">PYARELAL MV GRAM MIDUA PO ARAUL TEHSIL BILLHAUR KANPUR NAGAR</option>
	<option value="34457">R S  SHIKSHAN SANSTHAN</option>
	<option value="34353">R S SHIKSHAN SANSTHAN KUWAN KHERA GHATAMPUR KANPUR NAGAR</option>
	<option value="34115">R.K. DEVI EYE RESEARCH INSTITUTE--113/157, SWAROOP NAGAR,  KANPUR-208002</option>
	<option value="34452">RADHA KRISHNA COLLEGE OF HOMOEOPATHY</option>
	<option value="34443">RADHA KRISHNA COLLEGE OF PHARMACY</option>
	<option value="34442">Radha krishna institute of ayurvadic pharmacy and medical science</option>
	<option value="34444">RADHA KRISHNA INSTITUTE OF AYURVEDIC PHARMACY AND MEDICAL SCIENCE</option>
	<option value="34396">RAJ COMPUTER LEARNING CENTRE</option>
	<option value="34272">RAM LAL HARDEVI SMRITI MV PATARA GHATAMPUR</option>
	<option value="34079">RAM SAHAY GOVERMENT DEGREE COLLEGE,SHIVRAJPUR,KANPUR NAGAR</option>
	<option value="34133">RAMA HOSPITAL &amp; RESEARCH CENTRE, RAMA SCHOOL OF NURSING,</option>
	<option value="34371">RAMA INSTITUTE OF PARAMEDICAL  SCIENCES KANPUR</option>
	<option value="34246">RAMA UNIVERSITY UTTAR PRADESH KANPUR</option>
	<option value="34288">RAMCHARAN RAMDULARI KANYA MAHAVIDYALAYA CHAKARPUR SACHENDI</option>
	<option value="34273">RAMLAKHAN BHATT MV, PANKI BHESINGH</option>
	<option value="34359">RAMSHRI Pvt ITI</option>
	<option value="34393">RATAN P ITI CHAKERI KANPUR NAGAR</option>
	<option value="34392">RAVIKANT PRIVATE ITI</option>
	<option value="34439">REGENCY INSTITUTE OF NURSING</option>
	<option value="34116">REGENCY SCHOOL OF NURSING, REGENCY HOSPITAL LTD., A-2, SARVODAYA NAGAR, KANPUR</option>
	<option value="34080">ROOPRANI SUKHNANDAN SINGH DEGREE COLLEGE,NAUBASTA,KANPUR NAGAR</option>
	<option value="34117">RUPA NURSING HOME--C-30, SARVODYA NAGAR, KAKADEO,  KANPUR-208025 </option>
	<option value="34418">S J  INSTITUTE OF PHARMACY RAMAIPUR KANPUR</option>
	<option value="34247">S J EDUCATION CENTRE RAMAIPUR KANPUR</option>
	<option value="34207">S.J. COLLEGE OF LAW, RAMAIPUR, KANPUR NAGAR</option>
	<option value="34081">S.J.DEGREE COLLEGE.RAMAIPUR,KANPUR NAGAR</option>
	<option value="34082">S.N.SEN MAHILA P.G.COLLEGE KANPUR NAGAR</option>
	<option value="34083">S.S.DEGREE COLLEGE,MEHARBAN SINGH PURVA,KANPUR NAGAR</option>
	<option value="34150">S.T.E.P.- H.B.T.I.,&#160;KANPUR&#160;</option>
	<option value="34084">SAHID BHAGAT SINGH DEGREE COLLEGE, BITHOOR,KANPUR NAGAR</option>
	<option value="34085">SAHID BHAGAT SINGH LAW COLLEGE,BITHOOR,KANPUR NAGAR</option>
	<option value="34390">SAI BABA PVT ITI</option>
	<option value="34208">SAI COLLEGE Of Medical Sciences And Technology G.T. Road, CHAUBEYPUR, KANPUR</option>
	<option value="34434">Sakshi College of Pharmacy</option>
	<option value="34086">SANT BAIRAGI BABA DEGREE COLLEGE,MAHARSHI NAGAR,GHATAMPUR,KANPUR NAGAR</option>
	<option value="34455">SANT BHAGWANA NAND JI MAHARAJ MAHAVIDYALAYA</option>
	<option value="34356">SARAN PRIVATE ITI</option>
	<option value="34087">SARASHWATI DEGREE COLLEGE ROOMA,KANPUR NAGAR</option>
	<option value="34088">SARASHWATI MAHILA DEGREE COLLEGE,VIJAY NAGAR,KANPUR NAGAR</option>
	<option value="34329">SARDAR PATEL ACADEMY MAHAVIDYALAYA BAKOTHI</option>
	<option value="34364">SARDAR VALLABH BHAI PATEL SHIKSHAN SANSTHAN KANPUR</option>
	<option value="34307">SARDAR VALLLABH BHAI PATEL SHIKSHAN SANSTHAN RAMAIPUR KANPUR</option>
	<option value="34192">SATYA EYE HOSPITAL &amp; RESEARCH  INSTITUTE- HAMIRPUR  ROAD,  KANPUR</option>
	<option value="34244">SAUMYA ITI B58 HIG VISHWA BANK BARRA KANPUR</option>
	<option value="34372">SCHOOL OF NURSING ST CATHERINES HOSPITAL</option>
	<option value="34290">SCHOOL OF NURSING,MARIAMPUR HOSPITAL,SHASTRI NAGAR,KANPUR NAGAR</option>
	<option value="34209">SETH GAGAN DAS SMRITI SAMITI GIRLS COLLEGE RATANPUR KANPUR</option>
	<option value="34387">seth pankaj mehrotra private iti</option>
	<option value="34284">SETH RAVI VESH TRIPATHI PVT INDUSTRIAL TRAINING CENTRE BARA SIROHI KALYANPUR</option>
	<option value="34173">SETH SRINIWAS AGARWAL INSTITUTE OF ENGINEERING AND TECHNOLOGY,&#160;KANPUR&#160;</option>
	<option value="34179">SETH SRINIWAS AGARWAL INSTITUTE OF MANAGEMENT&#160;NARAMAU KANPUR</option>
	<option value="34089">SHANKARA NAND DEGREE COLLEGE,FUFUWAR,KANPUR NAGAR</option>
	<option value="34441">Shanti Nurshing and Maternity Home Ghatampur Kanpur Nagar</option>
	<option value="34370">Sharda Vidya Mandir Mahavidyalaya</option>
	<option value="34090">SHIV LOK MAHILA DEGREE COLLEGE,MEHARBAN SINGH PURVA,KANPUR NAGAR</option>
	<option value="34311">SHIV NARAIN SMARAK MAHAVIDYALAYA GHATAMPUR KANPUR NAGAR</option>
	<option value="34229">SHREE PRAMOD CHARAN DWIVEDI VIDHI MAHAVIDHYALAYA, DEVPALPUR, CHAOUBEYPUR, KANPUR NAGAR</option>
	<option value="34365">Shree Sai Private ITI</option>
	<option value="34091">SHRI DEENDAYAL KUSHWAHA MAHAVIDYALYA SHAMBHALPUR KANPUR NAGAR</option>
	<option value="34354">SHRI DHAM MAHAVIDYALAYA RATANPUR GHATAMPUR KANPUR NAGAR</option>
	<option value="34092">SHRI GANESH SHANKAR VIDYARTHI MAHAVIDYALYA NARWAL SEMARJHAL KANPUR</option>
	<option value="34358">SHRI KAPOOR PRIVATE ITI KANPUR</option>
	<option value="34094">SHRI MANNU LAL KANYA MAHAVIDYALAYA HANSPUR KANPUR</option>
	<option value="34210">SHRI NARAYAN SINGH MAHAVIDHYALAYA, BARIGAON, BHITARGAON, KANPUR</option>
	<option value="34456">SHRI NARAYAN SINGH MAHAVIDYALAYA BARI BHITAR GAON</option>
	<option value="34211">SHRI RADHAKRISHANA MUNNI DEVI M.V., TIWARIPUR, SALEMPUR, SARSAUL, KANPUR</option>
	<option value="34125">SHRI RAM DEVI RAM DAYAL TRIPATHI MAHILA POLYTECHNIC, KANPUR</option>
	<option value="34341">SHRI SAI PRIVATE ITI</option>
	<option value="34095">SHRI SHAKTI DEGREE COLLEGE,SAKAHARI.GHATAMPUR,KANPUR NAGAR</option>
	<option value="34096">SHRI SHYAMJI RAMJI DEGREE COLLEGE GAURI BHAGWANTPUR,CHAUBEPUR,KANPUR NAGAR</option>
	<option value="34286">SHYAMJI RAMJI ITC GAURI BHAGWANTPUR</option>
	<option value="34219">SIDDHARTH INDUSTRIAL TRAINING CENTRE, BANKELAL PURAM, KIDWAI NAGAR, KANPUR</option>
	<option value="34334">sidh gopal college of teachers training dhukapur utari pura kanpur nagar</option>
	<option value="34417">SIGNA COLLEGE OF NURSING</option>
	<option value="34404">SIGNA COLLEGE OF PHARMACY</option>
	<option value="34349">SIGNA INSTITUTE OF PROFESSIONAL STUDIES</option>
	<option value="34397">Sir Shi Ram Pvt ITI</option>
	<option value="34314">Smt  Ramkali Iqbal Bahadur Private ITI</option>
	<option value="34412">Smt Ramkali Iqbal Bahadur  of Colleges</option>
	<option value="34220">SONAMATI M.V. BILLHAUR, NANAMAU ROAD, KANPUR</option>
	<option value="34361">SPM HOSPITAL RESEARCH  AND TRAUMA  CENTRE</option>
	<option value="34227">SPM NURSING COLLEGE, C46-50, KALYANPUR-17</option>
	<option value="34308">srashti jan kalyan degree college jindpur</option>
	<option value="34274">SRI INDUSTRIAL TRAINING CENTRE, BHAWANI NAGAR, DAHELI SUJANPUR</option>
	<option value="34252">SRI KRISHNA SIKSHA SANSTHAN MUIYA GHATAMPUR KANPUR</option>
	<option value="34348">Sri Mahima Private ITI</option>
	<option value="34250">SRI RAM LAW COLLEGE NANDNA KANPUR</option>
	<option value="34424">SRI RAM PRIVATE ITI</option>
	<option value="34243">SRI SANT BIHARI INDUSTRIAL TRAINING CENTRE BARASIROHI</option>
	<option value="34319">SUBH SNEH PVT ITI  S BLOCK GOVIND NAGAR KANPUR</option>
	<option value="34097">SUBHASH DEGREE COLLEGE KIDWAI NAGAR</option>
	<option value="34236">SW ABHISHEK KUMAR SMARAK MV BICHIPUR REUNA KANPUR</option>
	<option value="34310">SW MEWALAL SMARK MAHAVIDYALAYA  GHATAMPUR  KANPUR</option>
	<option value="34098">SW.BADAN SINGH KUSHWAHA KANYA MAHA V.GHATAMPUR KANPUR</option>
	<option value="34099">SW.BADAN SINGH KUSHWAHA MAHA VIDALAYA KOTRA MAKRANDPUR KANPUR NAGAR</option>
	<option value="34367">TATYA PRIVATE ITI</option>
	<option value="34100">THAKUR JEE MAHARAJ DEGREE COLLEGE,BILHOUR KANPUR NAGAR</option>
	<option value="34399">THE PANACEA PARA MEDICAL SCIENCES AND NURSING INSTITUTE</option>
	<option value="34289">TOMORROW ITC KRISHNA NAGAR KANPUR</option>
	<option value="34299">UMASHANKAR KATIYAR EDUCATION CENTRE BARANDA ARAUL KANPUR NAGAR</option>
	<option value="34126">UNITED INSTITUTE OF DESIGNING, KANPUR</option>
	<option value="34318">UPCIA ITI</option>
	<option value="34451">UTKARSH NURSING COLLEGE</option>
	<option value="34379">UTKARSH PARAMEDICAL COLLEGE</option>
	<option value="34281">UTTAM PVT ITI, MIG 3 KDA SANIGAWAN, KANPUR NAGAR</option>
	<option value="34140">UTTAR PRADESH TEXTILE TECHNOLOGY INSTITUTE, KANPUR U.P. 208001&#160;</option>
	<option value="34101">V.S.S.D.COLLEGE KANPUR NAGAR</option>
	<option value="34164">VIDYA BHAVAN COLLEGE FOR ENGINEERING TECHNOLOGY ,&#160;KANPUR&#160;</option>
	<option value="34433">VIDYA BHAVAN COLLEGE OF PHARMACY</option>
	<option value="34416">VIKAS INDUSTRIAL TRAINING INSTITUTE</option>
	<option value="34420">vimla family pharmacy college</option>
	<option value="34305">VIMLA INDUSTRIAL TRAINING INSTITUTE NAUBASTA KANPUR NAGAR</option>
	<option value="34394">VIMLA INSTITUTE OF PHARMACY</option>
	<option value="34320">VIMLA NURSING COLLEGE</option>
	<option value="34306">VISHRAM SINGH SHANTI DEVI MV SANIGAWA KANPUR NAGAR</option>
	<option value="34213">VISION COLLEGE OF MANAGEMENT, HATHIPUR, KANPUR</option>
	<option value="34214">VISION INSTITUTE MANAGEMENT, HATHIPUR, MAHARAJPUR, KANPUR</option>
	<option value="34171">VISION INSTITUTE OF TECHNOLOGY,&#160;KANPUR&#160;</option>
	<option value="34408">VISION PRIVATE ITI KANPUR</option>
	<option value="34132">YASHRAJ INSTT. OF PROFESSIONAL STUDIES,GRAM - JINDPURWA, POST- TATIYAGANG, MANDHANA, CHAUBEYPUR</option>
	<option value="34298">YASRAJ COLLEGE OF PROFESSIONAL STUDIES TATIYAGANJ MANDHANA KANPUR NAGAR</option>
    <option value="other">Other</option>
</select>              
                
                
                </td>
                <td><input type="number" name="gtotal_marks" id="gtotal_marks"></td>
                <td><input type="number" name="gobtain_marks" id="gobtain"></td>
                <td><input type="number" name="gpercent"  id=""></td>

            </tr>
      
        </table>
        <hr>
        <h2>Document upload</h2>

        <ul>
            <ol type="number">
                <li><label class="label">Aadhar</label> <input type="file" class="btn btn-primary"  name="aadhr_f1" id="f1"><div><i class="far fa-check-circle"></i></div></li>
                <li><label class="label">High Scool Marksheet </label><input type="file"    name="high_school_f2" id="f2"></li>
                <li><label class="label">Intermediate </label> <input type="file"   name="inter_f3" id="f3"></li>
                <li><label class="label">Graduation final Year</label> <input type="file"   name="graduation_f4" id="f4"></li>
                <li><label class="label">Domicle Certificate </label><input type="file"   name="domicle_f5" id="f5"></li>
                <li><label class="label">Caste Certificate </label><input type="file"   name="caste_f6" id="f6"></li>
                <li><label class="label">Pan Card </label><input type="file"   name="pan_f7" id="f7"></li>
                <li><label class="label">Photo </label><input type="file"   name="photo_f8" id="f8"></li>
                <li><label class="label">Signature </label><input type="file"   name="sign_f9" id="f9"></li>

            </ol>

        </ul>


        <hr>
        <h2>Bank Detailes <span>(Optional)</span></h2>
        <label class="label" class="label" for="bankname">Bank Name</label><input type="text" name="bank_name" id="bank_name">
        <label class="label" class="label" for="IFSC_code">IFSC code</label><input type="text" name="ifsc_code" id="ifsc_code">
        <label class="label" class="label" for="branchname">BranchName</label><input type="text" name="branch_name" id="branch_name">
        <label class="label" class="label" for="accountno">Account Number</label><br><input type="number" name="acc_no" id="acc_no">
        <hr>
        <br><br>
        <input type="checkbox" name="agreebtn" id="agreebtn">
        
        <p>I agree all the document files and my detailes correct.If any detailes wrong then my registration will declined. </p>

        <br><br>
        <div class="row" id="btnsbt">
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
        <input type="reset" value="Reset" class="btn btn-info"></div>
        
        


    </form>

   
    <script>

        $(document).ready(function(){
$("#agreebtn").click(function(){
$("p").css("color","green");
});

        });

   $("#country").on("change",function(){
if(this.value=="india"){
    $("#state").css("visibility","visible");
    $("#stlbl").css("visibility","visible");
}else{
    alert("other Country Not Allowed Sir! Only for India");
}
   });


</script>
<script>
    
    
</script>
</body>

</html>