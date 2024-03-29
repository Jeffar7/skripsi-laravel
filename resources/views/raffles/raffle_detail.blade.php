@extends('layouts.app')

@section('title','TokoLokal | ' .e($raffle->rafflename))
@section('content')
<div class="loader"></div>
<div class="container py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="/" class="text-dark">Home</a></li>
            <li class="breadcrumb-item"><a href="/allraffle" class="text-dark">Raffle</a></li>
            <li class="breadcrumb-item active text-bold text-dark" aria-current="page" style="color:black;font-weight:bold;">{{$raffle->rafflename}}</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
{{-- <<<<<<< HEAD --}}
            <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="border border-secondary rounded-lg shadow-lg" alt="image" width="100%">
{{-- =======
            <img src="{{asset('../storage/images/Raffles/'. $raffle->raffleimage)}}" class="border border-secondary rounded-lg shadow-lg" alt="image" style="height: 500px; width: 100%; object-fit:contain">
>>>>>>> 122acf5ca9e96ae9661bbbd9afcee46a6939edf4 --}}
        </div>
    </div>

    <div class="row justify-content-center mb-3">
        <div class="col-12 text-center">
            <p class="h3 font-weight-bold" id="countdown"></p>
        </div>
        <div class="col-12 text-center">
            <p>DAYS | HOURS | MINUTES | SECONDS</p>
        </div>
    </div>

    <div class="row justify-content-center my-4">
        <div class="col-12 text-center">
            <p class="font-weight-normal mb-0" style="color: #ABABAB">{{$raffle->brand->name}}</p>
        </div>
    </div>

    <div class="offset-md-3 col-md-6 top-border"></div>

    <div class="row justify-content-center my-4">
        <div class="col-12 text-center">
            <p class="font-weight-normal mb-0" style="color: #ABABAB">{{$raffle->raffledescription}}</p>
        </div>
    </div>

    <div class="offset-md-3 col-md-6 top-border"></div>

    <div class="row justify-content-center">
        <div class="col-12 text-center mt-3">
            <p class="h3 font-weight-bold"> {{$raffle->rafflename}}</p>
        </div>
    </div>

    <div class="row justify-content-center mb-3">
        <div class="col-12 text-center">
            <p class="h6 font-weight-bold">Draw closes on {{$raffle->raffleclosedate}}</p>
        </div>
    </div>

    <!-- Displaying The Validation Errors -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- End Displaying The Validation Errors -->

    <!-- Form -->

    <form action="/raffle/submit" method="post" class="">
        @csrf
        <div class="form-row justify-content-around" style="margin: 2%">
            <div class="col-md-4">
                <div class="row mb-3">
                    <label for="firstname">First Name*</label>
                    <input type="text" id="firstname" class="form-control" value="{{Auth::user()->first_name}}" name="first_name" required>
                </div>

                <div class="row mb-3">
                    <label for="lastname">Last Name*</label>
                    <input type="text" id="lastname" class="form-control" value="{{Auth::user()->last_name}}" name="last_name" required>
                </div>

                <fieldset disabled>
                    <div class="row mb-3">
                        <label for="email">Email*</label>
                        <input type="text" id="email" class="form-control" value="{{Auth::user()->email}}" name="email">
                    </div>
                </fieldset>

                <div class="row mb-3">
                    <label for="lastname">Province*</label>
                    <input type="text" id="province" class="form-control" value="{{Auth::user()->detailaddress->province}}" name="province" required>
                </div>

                <div class="row mb-3">
                    <label for="number">Mobile Number*</label>
                    <input type="number" id="number" class="form-control" value="{{Auth::user()->phone}}" name="phone" required>
                </div>

                <fieldset disabled>
                    <div class="row mb-3">
                        <label for="dob">Date of Birth*</label>
                        <input type="date" id="dob" class="form-control" value="{{Auth::user()->DOB}}" name="dob" required>
                    </div>
                </fieldset>


                <div class="row mb-3">
                    <label for="postcode">Post Code*</label>
                    <input type="number" id="postcode" class="form-control" value="{{Auth::user()->detailaddress->zip_code}}" name="post_code" required>
                </div>


            </div>
            <div class="col-md-4">
                <div class="row mb-3">
                    <label for="address">Number and street address*</label>
                    <input type="text" id="address" class="form-control" value="{{Auth::user()->address}}" name="address" required>
                </div>

                <div class="row mb-3">
                    <label for="address2">Address Line 2</label>
                    <input type="text" id="address2" class="form-control" name="address2">
                </div>
                <div class="row mb-3">
                    <label for="district">District*</label>
                    <input type="text" id="district" class="form-control" name="district" required>
                </div>

                <div class="row mb-3">
                    <label for="city">Town City*</label>
                    <input type="text" id="city" class="form-control" value="{{Auth::user()->detailaddress->city}}" name="city" required>
                </div>

                <div class="row mb-3">
                    <label for="firstname">Country*</label>
                    <select id="country" name="country" class="form-control" value="{{Auth::user()->detailaddress->country}}">

                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>

                <div class="row text-center">
                    <p class="font-weight-normal" style="font-size: 14px;">By submitting the form you agree to the Terms &amp; Conditions below.</p>
                </div>

                <div class="row  text-center">
                    <p class="font-weight-normal" style="font-size: 14px;">Once you have completed the payment, you have commited to purchasing the product should you win. If you win, payment
                        will be taken and the product will be sent via your choosen delivery method after draw has
                        closed. If unsucessful your held payment will be released after the close of the draw, depending
                        on your bank this may take 3-5 days.</p>
                </div>

                <div class="row justify-content-around">
                    <p><input type="checkbox" required>
                        I understand the raffle payment terms.
                    </p>
                </div>
            </div>
        </div>

        <!-- Hidden Input -->
        <input type="hidden" id="email" class="form-control" value="{{Auth::user()->email}}" name="email">
        <input type="hidden" id="dob" class="form-control" value="{{Auth::user()->DOB}}" name="dob">
        <input type="hidden" name="raffle_id" value="{{$raffle->id}}">
        <!-- End Hidden Input -->

        <div class="form-row justify-content-around mt-3">
            <div class="col-md-10 p-0">
                <button type="input" class="btn btn-dark btn-block">Confirm Here</button>
            </div>
        </div>
    </form>

    <!-- End Form -->

    <div class="mb-5 row justify-content-center mt-4">
        <i class="fas fa-arrow-alt-circle-down mt-1"></i><a href="/termsandcondition" class="ml-2 font-weight-bold" style="text-decoration: none; color: black;">View full Terms & Conditions of this raffle</a>
    </div>

</div>

<script>
    CountDownTimer('{{$raffle->rafflereleasedate}}', 'countdown');

    function CountDownTimer(dt, id) {
        var end = new Date('{{$raffle->raffleclosedate}}');
        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0) {
                clearInterval(timer);
                document.getElementById(id).innerHTML = "EXPIRED";
                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

            if (days.toString().length == 1) {
                days = "0" + days;
            }
            if (hours.toString().length == 1) {
                hours = "0" + hours;
            }
            if (minutes.toString().length == 1) {
                minutes = "0" + minutes;
            }
            if (seconds.toString().length == 1) {
                seconds = "0" + seconds;
            }

            document.getElementById(id).innerHTML = days + ': ';
            document.getElementById(id).innerHTML += hours + ': ';
            document.getElementById(id).innerHTML += minutes + ': ';
            document.getElementById(id).innerHTML += seconds;
        }
        timer = setInterval(showRemaining, 1000);
    }
</script>
@endsection