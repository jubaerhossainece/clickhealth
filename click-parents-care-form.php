<!DOCTYPE html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Fevicon -->
    <link rel='shortcut icon' type='image/x-icon' href="assets/img/favicon.ico">

    <title>ClickHealth</title>

    <meta name="keyword" content="ClickHealth">
    <meta name="description" content="We are your hands and ears on the ground keeping track of your parents' health and well-being on your behalf."> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Icon -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <!-- Font-awesome Icon -->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css"> 
    <link rel="stylesheet" href="assets/css/accordion.css">
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JWXVMEX66F"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-JWXVMEX66F');
    </script>
  </head>
  <body>

    <!-- Main Menu -->
    <header id="top" class="header-area clearfix">
      <div class="top-menu">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html"><img class="logo" src="assets/img/logo.png" alt="ClickHealth"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><img class="d-inline" style="margin-top: 2px;" src="assets/img/icon-burger.png" alt="ClickHealth"></span>
            </button>

             
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav main-menu ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="click-parents-care.html">ParentsCare</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="click-family-care.html">FamilyCare</a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="click-home-coming.html">HomeComing</a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="click-second-opinion.html">SecondOpinion</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="health-advice.html">Health Advice</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.html">In News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="price.html">Pricing</a>
                </li>
                
                <!-- newly added -->
                <li class="nav-item">
                  <a class="nav-link" href="click-parents-care-form.html">On-Boarding Form</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link btn-login" href="contact.html">Contact Us</a>
                </li>
              </ul>
              <!-- <ul>
                <li class="nav-item">
                  <div class="btn-login">
                    <a class="nav-link" href="login.html">লগিন</a>
                  </div>
                </li>
              </ul>
               -->
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- /Main Menu -->

    <div class="content">

      <!-- Services --> 
      <section class="service-page">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="pb-3 pt-md-4">
                <h2 class="pt-3 pt-lg-3 service-page-title text-center"><span style="color: #057BC2;">Click</span>ParentsCare On-Boarding Form</h2>
                <p class="text-center">This form is to onboard CareOverseer, CareReciever and CareGiver to ClickParentsCare service</p>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-lg-12">
               
            </div>
          </div> -->
        </div>        
      </section>
      <!-- /Services -->

      <!-- MultiStep Form -->
      <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6">
                <div class="card">
                    <!-- <h2><strong>Sign Up Your User Account</strong></h2> -->
                    <!-- <p>Fill all form field to go to next step</p> -->
                            <form id="msform">
                                <!-- progressbar -->
                                <div class="progress-container">
                                  <ul id="progressbar">
                                    <li class="active" id="account"><strong>Basic Details</strong></li>
                                    <li id="personal"><strong>Care Reciever Details</strong></li>
                                    <!-- <li id="payment"><strong>Payment</strong></li> -->
                                    <li id="confirm"><strong>Finish</strong></li>
                                  </ul> <!-- fieldsets -->
                                </div>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center mt-3 mb-4">Basic Details</h2> 
                                        <h5 class="fs-title mt-3">Name of CareOverseer</h5> 
                                        <p>(Individual subscribing to the service for their parents and other senior members in the family back home in Bangladesh)</p>
                                        <div class="row">
                                          <div class="col-sm-6"><label class="field-title">First Name</label> <input type="text" name="firstname" placeholder="" /> </div>
                                          <div class="col-sm-6"><label class="field-title">Last Name</label> <input type="text" name="lastname" placeholder="" /> </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-6"> <label class="field-title">Email<span style="color: red !important; display: inline; float: none;">*</span></label> <input type="email" name="firstname" placeholder="" /> </div>
                                          <div class="col-sm-6"> <label class="field-title">Phone<span style="color: red !important; display: inline; float: none;">*</span></label> <input type="tel" name="lastname" placeholder="" /> </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-12">
                                            <label class="field-title">Preferred Mode of Communication <small class="ml-1">(Platform where you'd like to receive updates on a regular basis)</small></label>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-12">
                                            <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline1">Whatsapp</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline2">Messenger</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                              <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline3">Viber</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                              <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline4">Signal</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                              <input type="radio" id="customRadioInline5" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline5">Other</label>
                                              <input type="text" name="firstname" placeholder="" />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-12">
                                            <label class="field-title">Address <small class="ml-1">(Address of the CareOverseer)</small></label>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-6"><input type="text" name="city" placeholder="City" /> </div>
                                          <div class="col-sm-6"><input type="text" name="state" placeholder="State/Region/Province" /> </div>
                                          <div class="col-sm-6"><input type="text" name="zip" placeholder="Postal / Zip Code" /> </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <label class="field-title" for="country">Country</label>      
                                            <select id="country" name="country" class="form-control list-dt">
                                                <option value="">Select</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="row">
                                              <div class="col-12">
                                                <label class="field-title">Who you like to add additional CareOverseers?</label>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                                  <input type="radio" id="customRadioInline6" name="customRadioInline1" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadioInline6">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                                  <input type="radio" id="customRadioInline7" name="customRadioInline1" class="custom-control-input">
                                                  <label class="custom-control-label" for="customRadioInline7">No</label>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <label class="field-title mt-4" for="overseer">Number of CareRecievers</label><span style="color: red !important; display: inline; float: none;">*</span>      
                                            <select id="overseer" name="overseer" class="form-control list-dt">
                                                <option value="">Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                            </select>
                                            <p class="mt-2"><small>Number of Senior members in a family for whom the care service is availed by their son/daughter/relative living abroad.</small></p>
                                          </div>
                                        </div>
                                    </div> 
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <!-- <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Personal Information</h2> <input type="text" name="fname" placeholder="First Name" /> <input type="text" name="lname" placeholder="Last Name" /> <input type="text" name="phno" placeholder="Contact No." /> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset> -->
                                <fieldset>
                                    <div class="form-card" id="care-receiver-1">
                                        <h2 class="fs-title text-center mt-3 mb-4">Care Reciever Details 1</h2>
                                        <h5 class="fs-title mt-3">Name of CareReciever</h5> 
                                        <div class="row">
                                          <div class="col-sm-6"><label class="field-title">First Name</label> <input type="text" name="firstname" placeholder="" /> </div>
                                          <div class="col-sm-6"><label class="field-title">Last Name</label> <input type="text" name="lastname" placeholder="" /> </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <label class="field-title mt-4" for="overseer">CareReciever's Relation with the CareOverseer</label>      
                                            <select class="form-control list-dt" id="relationship" name="relationship">
                                              <option value="">Select</option>
                                              <option>Father</option>
                                              <option>Mother</option>
                                              <option>Father-in-law</option>
                                              <option>Mother-in-law</option>
                                              <option>Other</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <label class="field-title mt-4">Age of the CareReciever</label> <input type="number" name="age" placeholder="" />
                                          </div>
                                          <div class="col-sm-6">
                                            <label class="field-title mt-4">Phone of the CareReciever</label> <input type="tel" name="tel2" placeholder="" />
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-12"> <label class="field-title mt-4">Address<span style="color: red !important; display: inline; float: none;">*</span></label> <textarea id="address2" name="address2" rows="2" cols="50"></textarea> </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-12">
                                            <label class="field-title">Do you have a CareGiver for this CareReciever?<span style="color: red !important; display: inline; float: none;">*</span></label>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-sm-6">
                                            <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                              <input type="radio" id="customRadioInline8" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline8">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                              <input type="radio" id="customRadioInline9" name="customRadioInline1" class="custom-control-input">
                                              <label class="custom-control-label" for="customRadioInline9">No</label>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-sm-12"> <label class="field-title mt-4">Additional Instructions</label> <textarea id="address2" name="comment2" rows="2" cols="50"></textarea> </div>
                                        </div>
                                    </div> 



                                    <div class="form-card" id="care-receiver-2">
                                      <h2 class="fs-title text-center mt-3 mb-4">Care Reciever Details 2</h2>
                                      <h5 class="fs-title mt-3">Name of CareReciever</h5> 
                                      <div class="row">
                                        <div class="col-sm-6"><label class="field-title">First Name</label> <input type="text" name="firstname" placeholder="" /> </div>
                                        <div class="col-sm-6"><label class="field-title">Last Name</label> <input type="text" name="lastname" placeholder="" /> </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <label class="field-title mt-4" for="overseer">CareReciever's Relation with the CareOverseer</label>      
                                          <select class="form-control list-dt" id="relationship" name="relationship">
                                            <option value="">Select</option>
                                            <option>Father</option>
                                            <option>Mother</option>
                                            <option>Father-in-law</option>
                                            <option>Mother-in-law</option>
                                            <option>Other</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <label class="field-title mt-4">Age of the CareReciever</label> <input type="number" name="age" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                          <label class="field-title mt-4">Phone of the CareReciever</label> <input type="tel" name="tel2" placeholder="" />
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-12"> <label class="field-title mt-4">Address<span style="color: red !important; display: inline; float: none;">*</span></label> <textarea id="address2" name="address2" rows="2" cols="50"></textarea> </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-12">
                                          <label class="field-title">Do you have a CareGiver for this CareReciever?<span style="color: red !important; display: inline; float: none;">*</span></label>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                            <input type="radio" id="customRadioInline8" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline8">Yes</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline py-2 px-4">
                                            <input type="radio" id="customRadioInline9" name="customRadioInline1" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline9">No</label>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-sm-12"> <label class="field-title mt-4">Additional Instructions</label> <textarea id="address2" name="comment2" rows="2" cols="50"></textarea> </div>
                                      </div>
                                  </div> 


                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                </div>
            </div>
        </div>
      </div>

      <footer class="mt-5">
        <div class="container">
          <div class="row">
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <a href="index.html"><img class="footer-logo" alt="ClickHealth" src="assets/img/logo-footer.png"></a>
                <div class="btn-group social-footer">
                  <a href="https://www.linkedin.com/company/clickhealth-services/" target="_blank">  
                    <img class="img-fluid" src="assets/img/icon-social-linkedin.png" alt="LinkedIn">
                  </a>
                  <a href="https://www.facebook.com/clickhealth.services" target="_blank">
                    <img class="ml-2 img-fluid" src="assets/img/icon-social-facebook.png" alt="facebook">
                  </a> 
                  <a href="https://twitter.com/ClickHealthBD" target="_blank">  
                    <img class="ml-2 img-fluid" src="assets/img/icon-social-twitter.png" alt="twitter">
                  </a>
                  <a href="https://www.youtube.com/channel/UC4yNieLR3egl5m4xKo-I7FQ" target="_blank">  
                    <img class="ml-2 img-fluid" src="assets/img/icon-social-youtube.png" alt="youtube">
                  </a>
                </div>
              </div>
             
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <h5>Quick Links</h5>
                <a href="click-parents-care.html">ClickParentsCare</a>
                <!-- <a href="click-second-opinion.html">ClickSecondOpinion</a> -->
                <a href="health-advice.html">Health Advice</a>
                <a href="news.html">In News</a>
                <a href="price.html">Pricing</a>
                <a href="click-parents-care-form.html">On-Boarding Form</a>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <h5>Resources</h5>
                <a href="#">FAQs</a>
                <a href="#">Team</a>
                <a href="privacy-policy.html">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="contact.html">Contact Us</a>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <h5>Contact Us</h5>
                <div class="footer-contact mt-4">
                  <i class="fas fa-map-marker-alt text-white mr-2"></i>
                  <p class="address">Nur Empori, Level-10, House: 77, Road: 11, Block: M | Banani, Dhaka.</p>
                </div>
                <div class="footer-contact">
                  <i class="fas fa-phone-volume text-white mr-2"></i>
                  <p class="address"><small>PHONE</small><br>+8801706353760 (10am - 10pm)</p>
                </div>
                <div class="footer-contact">
                  <i class="fas fa-envelope text-white mr-2"></i>
                  <p><small>EMAIL</small><br>hello@clickhealth.services</p>
                </div>
              </div>
          </div>
        </div>
      </footer>    

      <!-- /Footer -->

      <!-- copyright -->
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-center pt-3">
                Copyright © 2021 <strong>ClickHealth</strong>. All Rights Reserved.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /copyright -->
    </div>

    <a href="https://wa.me/8801706353760" class="whatsapp_float" target="_blank"><img class="icon-whatsapp" alt="ClickHealth" src="assets/img/whats-app.png"></a>
    
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- Main Js -->
    <script src="assets/js/form.js"></script>
    <script src="assets/js/custom.js"></script>


    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "102165854797544");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <!-- Modal Video Close -->
    <script>
      $(function(){
        $('.modal').on('hidden.bs.modal', function (e) {
          $iframe = $(this).find("iframe");
          $iframe.attr("src", $iframe.attr("src"));
        });
      });
    </script>

    <!-- care receiver selection -->
    <script>
      if($("#overseer").val() == ''){
        $("#care-receiver-2").hide();
      }

      $("#overseer").on('change', function(){
        let overseer = $("#overseer").val();
        console.log(overseer);
        if(overseer < 2 || overseer == ''){
          $("#care-receiver-2").hide();
        }else{
          $("#care-receiver-2").show();
        }
      })
    </script>

  </body>
</html>