<x-app-layout>
    <main>
        {{-- Slider --}}
        <section class="flex">
            <div class="w-full mx-auto">
                <img class="object-cover w-full" style="height: 300px;" src="      @if ($tour->imagefull) {{ Storage::url($tour->imagefull->url) }}
            @else 'https://via.placeholder.com/1920x300'@endif "

                alt="">
            </div>
        </section>

        <div class="container mx-auto -mt-40 mb-10">
            {{-- <div class="text-center py-15">Nation: {{ $nation->name }} </div> --}}
            <div class="text-normal text-center py-10 uppercase"> <span class="block">
                    @foreach ($tour->nations as $nation)
                        {{ $nation->name }}
                    @endforeach </div>
        </div>


        {{-- CONTENT --}}
        <div class="container mx-auto pt-20 pb-10">
            <span class="block uppercase px-2">
                @foreach ($tour->nations as $nation)
                    {{ $nation->name }}
                @endforeach
            </span>
            <h1 class="text-5xl font-thin text-pompadour-500 px-2">tour: {{ $tour->name }} </h1>
            <h2 class="text-2xl font-thin text-gray-400 py-4 px-2"> {{ $tour->subtitle }} </h2>


            <div class="flex items-center py-4 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span class="px-2 text-gold-500 font-bold"> {{ $tour->days }} </span> from <span
                    class="px-2 text-nile-500 text-2xl"> $ {{ $tour->shortprice }}</span>
            </div>
        </div>
        <div class="container mx-auto py-5">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-8 pr-10">

                    <h3 class="py-5 text-3xl font-thin px-2"> {{ $tour->calltoaction }} </h3>
                    <hr>
                    <p class="py-4 px-2"> {{ $tour->abstract }} </p>

                </div>
                <div class="col-span-12 lg:col-span-4 lg:-mt-32 ">
                    <div class="pb-20">
                        <button
                            class="text-nile-500 bg-transparent border border-solid border-nile-500 hover:bg-nile-800 hover:text-white active:bg-purple-600 font-bold uppercase w-full py-4 rounded outline-none focus:outline-none lg:mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" onclick="toggleModal('modal-{{ $tour->id }}')">
                            INQUIRE NOW
                        </button>
                        
                        <div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center pt-80"
                            id="modal-{{ $tour->id }}">
                            <div class="relative w-auto mt-6 mx-auto max-w-3xl">
                                <!--content-->
                                <div
                                    class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-rnone">
                                    <!--header-->
                                    <div class="pt-4 rounded-t">
                                        <h3 class="text-3xl font-thin text-center pt-6 text-pompadour-500">Booking Request Details </h3>
                                        <button
                                            class=" -my-12 p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                            onclick="toggleModal('modal-{{ $tour->id }}')">
                                            <span
                                                class="bg-transparent h-20 w-20 text-5xl block outline-none focus:outline-none">
                                                <i class="fas fa-times"></i>
                                            </span>
                                        </button>
                                    </div>
                                    <!--body-->
                                    <div class="relative p-6 flex-auto">
                                        <p class="font-semibold text-sm text-nile-500">Journey Name: <span
                                                class="text-base font-normal">{{ $tour->name }}</span></p>

                                        <p class="my-1 text-gray-500 leading-relaxed text-xs">
                                            Please fill the form below an Andean Walk Travel Consultant will be in touch
                                            with you and will be ready to take your tour. Thank you for giving us the
                                            opportunity to serve you. We appreciate your choose and the confidence that
                                            you have placed in us. Please call us if you need further assistance.
                                        </p>

                                        <div class="bg-white shadow rounded-lg p-6">

                                            <div class="flex flwz-wrap lg:grid-cols-2 gap-10 py-5">
                                                <div
                                                    class="w-1/3 border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                                    <select name="senior" class="w-full py-4 font-thin">
                                                        <option value="Mr">Mr</option>
                                                        <option value="Mrs">Mrs</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Dr">Dr</option>
                                                    </select>
                                                </div>
                                                <div
                                                    class=" w-2/3 border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                                    <div class="-mt-4 absolute tracking-wider px-1  text-xs">
                                                        <p>
                                                            <label for="name" class="bg-white text-gray-600 px-1">First
                                                                name *</label>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <input id="name" autocomplete="false" tabindex="0" type="text"
                                                            class="py-4 px-1 text-gray-900 outline-none block h-full w-full font-thin">
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="flex flex-wrap lg:grid-cols-2 gap-10">

                                                <div
                                                    class=" w-full border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                                    <div class="-mt-4 absolute tracking-wider px-1 text-xs">
                                                        <p><label for="name" class="bg-white text-gray-600 px-1">Last Name</label></p>
                                                    </div>
                                                    <p><input id="name" autocomplete="false" tabindex="0" type="text"
                                                            class="py-4 px-1 text-gray-900 outline-none block h-full w-full font-thin">
                                                    </p>
                                                </div>

                                                <div
                                                    class=" w-full border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                                    <div class="-mt-4 absolute tracking-wider px-1 text-xs">
                                                        <p><label for="name" class="bg-white text-gray-600 px-1">Email
                                                                Address *</label></p>
                                                    </div>
                                                    <p><input id="name" autocomplete="false" tabindex="0" type="email"
                                                            class="py-4 px-1 text-gray-900 outline-none block h-full w-full font-thin">
                                                    </p>
                                                </div>

                                                <div
                                                    class="w-full border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                                    <div class="-mt-4 absolute tracking-wider px-1 text-xs">
                                                        <p><label for="name" class="bg-white text-gray-600 px-1">Country
                                                            </label></p>
                                                    </div>
                                                    <select id="country" name="country "
                                                        class="form-control w-full py-4 font-thin">
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
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, The Democratic Republic of The">Congo, The
                                                            Democratic Republic of The</option>
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
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                            (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories</option>
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
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island
                                                            and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                            City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic
                                                            of</option>
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
                                                        <option value="Korea, Democratic People's Republic of">Korea,
                                                            Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's
                                                            Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                        </option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">
                                                            Macedonia, The Former Yugoslav Republic of</option>
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
                                                        <option value="Micronesia, Federated States of">Micronesia,
                                                            Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of
                                                        </option>
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
                                                        <option value="Netherlands Antilles">Netherlands Antilles
                                                        </option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana
                                                            Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian
                                                            Territory, Occupied</option>
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
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                            Miquelon</option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent
                                                            and The Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
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
                                                        <option value="South Georgia and The South Sandwich Islands">
                                                            South Georgia and The South Sandwich Islands</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United
                                                            Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos
                                                            Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United
                                                            States Minor Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British
                                                        </option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                        </option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                
                                               


                                            </div>

                                            <div class="flex flwz-wrap lg:grid-cols-2 gap-10 py-5">
                                                <div
                                                    class="w-1/3 border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                                    <div class="-mt-4 absolute tracking-wider px-1  text-xs">
                                                        <p>
                                                            <label for="phone" class="bg-white text-gray-600 px-1">
                                                                Country Code *</label>
                                                        </p>
                                                    </div>
                                                    <select name="codePhone" id="" class="w-full font-thin">
                                                        <option data-countryCode="GB" value="44" Selected>UK (+44)
                                                        </option>
                                                        <option data-countryCode="US" value="1">USA (+1)</option>
                                                        <optgroup label="Other countries">
                                                            <option data-countryCode="DZ" value="213">Algeria (+213)
                                                            </option>
                                                            <option data-countryCode="AD" value="376">Andorra (+376)
                                                            </option>
                                                            <option data-countryCode="AO" value="244">Angola (+244)
                                                            </option>
                                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)
                                                            </option>
                                                            <option data-countryCode="AG" value="1268">Antigua &amp;
                                                                Barbuda (+1268)</option>
                                                            <option data-countryCode="AR" value="54">Argentina (+54)
                                                            </option>
                                                            <option data-countryCode="AM" value="374">Armenia (+374)
                                                            </option>
                                                            <option data-countryCode="AW" value="297">Aruba (+297)
                                                            </option>
                                                            <option data-countryCode="AU" value="61">Australia (+61)
                                                            </option>
                                                            <option data-countryCode="AT" value="43">Austria (+43)
                                                            </option>
                                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)
                                                            </option>
                                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)
                                                            </option>
                                                            <option data-countryCode="BH" value="973">Bahrain (+973)
                                                            </option>
                                                            <option data-countryCode="BD" value="880">Bangladesh (+880)
                                                            </option>
                                                            <option data-countryCode="BB" value="1246">Barbados (+1246)
                                                            </option>
                                                            <option data-countryCode="BY" value="375">Belarus (+375)
                                                            </option>
                                                            <option data-countryCode="BE" value="32">Belgium (+32)
                                                            </option>
                                                            <option data-countryCode="BZ" value="501">Belize (+501)
                                                            </option>
                                                            <option data-countryCode="BJ" value="229">Benin (+229)
                                                            </option>
                                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)
                                                            </option>
                                                            <option data-countryCode="BT" value="975">Bhutan (+975)
                                                            </option>
                                                            <option data-countryCode="BO" value="591">Bolivia (+591)
                                                            </option>
                                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina
                                                                (+387)</option>
                                                            <option data-countryCode="BW" value="267">Botswana (+267)
                                                            </option>
                                                            <option data-countryCode="BR" value="55">Brazil (+55)
                                                            </option>
                                                            <option data-countryCode="BN" value="673">Brunei (+673)
                                                            </option>
                                                            <option data-countryCode="BG" value="359">Bulgaria (+359)
                                                            </option>
                                                            <option data-countryCode="BF" value="226">Burkina Faso
                                                                (+226)</option>
                                                            <option data-countryCode="BI" value="257">Burundi (+257)
                                                            </option>
                                                            <option data-countryCode="KH" value="855">Cambodia (+855)
                                                            </option>
                                                            <option data-countryCode="CM" value="237">Cameroon (+237)
                                                            </option>
                                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                                            <option data-countryCode="CV" value="238">Cape Verde Islands
                                                                (+238)</option>
                                                            <option data-countryCode="KY" value="1345">Cayman Islands
                                                                (+1345)</option>
                                                            <option data-countryCode="CF" value="236">Central African
                                                                Republic (+236)</option>
                                                            <option data-countryCode="CL" value="56">Chile (+56)
                                                            </option>
                                                            <option data-countryCode="CN" value="86">China (+86)
                                                            </option>
                                                            <option data-countryCode="CO" value="57">Colombia (+57)
                                                            </option>
                                                            <option data-countryCode="KM" value="269">Comoros (+269)
                                                            </option>
                                                            <option data-countryCode="CG" value="242">Congo (+242)
                                                            </option>
                                                            <option data-countryCode="CK" value="682">Cook Islands
                                                                (+682)</option>
                                                            <option data-countryCode="CR" value="506">Costa Rica (+506)
                                                            </option>
                                                            <option data-countryCode="HR" value="385">Croatia (+385)
                                                            </option>
                                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                                            <option data-countryCode="CY" value="90392">Cyprus North
                                                                (+90392)</option>
                                                            <option data-countryCode="CY" value="357">Cyprus South
                                                                (+357)</option>
                                                            <option data-countryCode="CZ" value="42">Czech Republic
                                                                (+42)</option>
                                                            <option data-countryCode="DK" value="45">Denmark (+45)
                                                            </option>
                                                            <option data-countryCode="DJ" value="253">Djibouti (+253)
                                                            </option>
                                                            <option data-countryCode="DM" value="1809">Dominica (+1809)
                                                            </option>
                                                            <option data-countryCode="DO" value="1809">Dominican
                                                                Republic (+1809)</option>
                                                            <option data-countryCode="EC" value="593">Ecuador (+593)
                                                            </option>
                                                            <option data-countryCode="EG" value="20">Egypt (+20)
                                                            </option>
                                                            <option data-countryCode="SV" value="503">El Salvador (+503)
                                                            </option>
                                                            <option data-countryCode="GQ" value="240">Equatorial Guinea
                                                                (+240)</option>
                                                            <option data-countryCode="ER" value="291">Eritrea (+291)
                                                            </option>
                                                            <option data-countryCode="EE" value="372">Estonia (+372)
                                                            </option>
                                                            <option data-countryCode="ET" value="251">Ethiopia (+251)
                                                            </option>
                                                            <option data-countryCode="FK" value="500">Falkland Islands
                                                                (+500)</option>
                                                            <option data-countryCode="FO" value="298">Faroe Islands
                                                                (+298)</option>
                                                            <option data-countryCode="FJ" value="679">Fiji (+679)
                                                            </option>
                                                            <option data-countryCode="FI" value="358">Finland (+358)
                                                            </option>
                                                            <option data-countryCode="FR" value="33">France (+33)
                                                            </option>
                                                            <option data-countryCode="GF" value="594">French Guiana
                                                                (+594)</option>
                                                            <option data-countryCode="PF" value="689">French Polynesia
                                                                (+689)</option>
                                                            <option data-countryCode="GA" value="241">Gabon (+241)
                                                            </option>
                                                            <option data-countryCode="GM" value="220">Gambia (+220)
                                                            </option>
                                                            <option data-countryCode="GE" value="7880">Georgia (+7880)
                                                            </option>
                                                            <option data-countryCode="DE" value="49">Germany (+49)
                                                            </option>
                                                            <option data-countryCode="GH" value="233">Ghana (+233)
                                                            </option>
                                                            <option data-countryCode="GI" value="350">Gibraltar (+350)
                                                            </option>
                                                            <option data-countryCode="GR" value="30">Greece (+30)
                                                            </option>
                                                            <option data-countryCode="GL" value="299">Greenland (+299)
                                                            </option>
                                                            <option data-countryCode="GD" value="1473">Grenada (+1473)
                                                            </option>
                                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)
                                                            </option>
                                                            <option data-countryCode="GU" value="671">Guam (+671)
                                                            </option>
                                                            <option data-countryCode="GT" value="502">Guatemala (+502)
                                                            </option>
                                                            <option data-countryCode="GN" value="224">Guinea (+224)
                                                            </option>
                                                            <option data-countryCode="GW" value="245">Guinea - Bissau
                                                                (+245)</option>
                                                            <option data-countryCode="GY" value="592">Guyana (+592)
                                                            </option>
                                                            <option data-countryCode="HT" value="509">Haiti (+509)
                                                            </option>
                                                            <option data-countryCode="HN" value="504">Honduras (+504)
                                                            </option>
                                                            <option data-countryCode="HK" value="852">Hong Kong (+852)
                                                            </option>
                                                            <option data-countryCode="HU" value="36">Hungary (+36)
                                                            </option>
                                                            <option data-countryCode="IS" value="354">Iceland (+354)
                                                            </option>
                                                            <option data-countryCode="IN" value="91">India (+91)
                                                            </option>
                                                            <option data-countryCode="ID" value="62">Indonesia (+62)
                                                            </option>
                                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                                            <option data-countryCode="IQ" value="964">Iraq (+964)
                                                            </option>
                                                            <option data-countryCode="IE" value="353">Ireland (+353)
                                                            </option>
                                                            <option data-countryCode="IL" value="972">Israel (+972)
                                                            </option>
                                                            <option data-countryCode="IT" value="39">Italy (+39)
                                                            </option>
                                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)
                                                            </option>
                                                            <option data-countryCode="JP" value="81">Japan (+81)
                                                            </option>
                                                            <option data-countryCode="JO" value="962">Jordan (+962)
                                                            </option>
                                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)
                                                            </option>
                                                            <option data-countryCode="KE" value="254">Kenya (+254)
                                                            </option>
                                                            <option data-countryCode="KI" value="686">Kiribati (+686)
                                                            </option>
                                                            <option data-countryCode="KP" value="850">Korea North (+850)
                                                            </option>
                                                            <option data-countryCode="KR" value="82">Korea South (+82)
                                                            </option>
                                                            <option data-countryCode="KW" value="965">Kuwait (+965)
                                                            </option>
                                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)
                                                            </option>
                                                            <option data-countryCode="LA" value="856">Laos (+856)
                                                            </option>
                                                            <option data-countryCode="LV" value="371">Latvia (+371)
                                                            </option>
                                                            <option data-countryCode="LB" value="961">Lebanon (+961)
                                                            </option>
                                                            <option data-countryCode="LS" value="266">Lesotho (+266)
                                                            </option>
                                                            <option data-countryCode="LR" value="231">Liberia (+231)
                                                            </option>
                                                            <option data-countryCode="LY" value="218">Libya (+218)
                                                            </option>
                                                            <option data-countryCode="LI" value="417">Liechtenstein
                                                                (+417)</option>
                                                            <option data-countryCode="LT" value="370">Lithuania (+370)
                                                            </option>
                                                            <option data-countryCode="LU" value="352">Luxembourg (+352)
                                                            </option>
                                                            <option data-countryCode="MO" value="853">Macao (+853)
                                                            </option>
                                                            <option data-countryCode="MK" value="389">Macedonia (+389)
                                                            </option>
                                                            <option data-countryCode="MG" value="261">Madagascar (+261)
                                                            </option>
                                                            <option data-countryCode="MW" value="265">Malawi (+265)
                                                            </option>
                                                            <option data-countryCode="MY" value="60">Malaysia (+60)
                                                            </option>
                                                            <option data-countryCode="MV" value="960">Maldives (+960)
                                                            </option>
                                                            <option data-countryCode="ML" value="223">Mali (+223)
                                                            </option>
                                                            <option data-countryCode="MT" value="356">Malta (+356)
                                                            </option>
                                                            <option data-countryCode="MH" value="692">Marshall Islands
                                                                (+692)</option>
                                                            <option data-countryCode="MQ" value="596">Martinique (+596)
                                                            </option>
                                                            <option data-countryCode="MR" value="222">Mauritania (+222)
                                                            </option>
                                                            <option data-countryCode="YT" value="269">Mayotte (+269)
                                                            </option>
                                                            <option data-countryCode="MX" value="52">Mexico (+52)
                                                            </option>
                                                            <option data-countryCode="FM" value="691">Micronesia (+691)
                                                            </option>
                                                            <option data-countryCode="MD" value="373">Moldova (+373)
                                                            </option>
                                                            <option data-countryCode="MC" value="377">Monaco (+377)
                                                            </option>
                                                            <option data-countryCode="MN" value="976">Mongolia (+976)
                                                            </option>
                                                            <option data-countryCode="MS" value="1664">Montserrat
                                                                (+1664)</option>
                                                            <option data-countryCode="MA" value="212">Morocco (+212)
                                                            </option>
                                                            <option data-countryCode="MZ" value="258">Mozambique (+258)
                                                            </option>
                                                            <option data-countryCode="MN" value="95">Myanmar (+95)
                                                            </option>
                                                            <option data-countryCode="NA" value="264">Namibia (+264)
                                                            </option>
                                                            <option data-countryCode="NR" value="674">Nauru (+674)
                                                            </option>
                                                            <option data-countryCode="NP" value="977">Nepal (+977)
                                                            </option>
                                                            <option data-countryCode="NL" value="31">Netherlands (+31)
                                                            </option>
                                                            <option data-countryCode="NC" value="687">New Caledonia
                                                                (+687)</option>
                                                            <option data-countryCode="NZ" value="64">New Zealand (+64)
                                                            </option>
                                                            <option data-countryCode="NI" value="505">Nicaragua (+505)
                                                            </option>
                                                            <option data-countryCode="NE" value="227">Niger (+227)
                                                            </option>
                                                            <option data-countryCode="NG" value="234">Nigeria (+234)
                                                            </option>
                                                            <option data-countryCode="NU" value="683">Niue (+683)
                                                            </option>
                                                            <option data-countryCode="NF" value="672">Norfolk Islands
                                                                (+672)</option>
                                                            <option data-countryCode="NP" value="670">Northern Marianas
                                                                (+670)</option>
                                                            <option data-countryCode="NO" value="47">Norway (+47)
                                                            </option>
                                                            <option data-countryCode="OM" value="968">Oman (+968)
                                                            </option>
                                                            <option data-countryCode="PW" value="680">Palau (+680)
                                                            </option>
                                                            <option data-countryCode="PA" value="507">Panama (+507)
                                                            </option>
                                                            <option data-countryCode="PG" value="675">Papua New Guinea
                                                                (+675)</option>
                                                            <option data-countryCode="PY" value="595">Paraguay (+595)
                                                            </option>
                                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                                            <option data-countryCode="PH" value="63">Philippines (+63)
                                                            </option>
                                                            <option data-countryCode="PL" value="48">Poland (+48)
                                                            </option>
                                                            <option data-countryCode="PT" value="351">Portugal (+351)
                                                            </option>
                                                            <option data-countryCode="PR" value="1787">Puerto Rico
                                                                (+1787)</option>
                                                            <option data-countryCode="QA" value="974">Qatar (+974)
                                                            </option>
                                                            <option data-countryCode="RE" value="262">Reunion (+262)
                                                            </option>
                                                            <option data-countryCode="RO" value="40">Romania (+40)
                                                            </option>
                                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                                            <option data-countryCode="RW" value="250">Rwanda (+250)
                                                            </option>
                                                            <option data-countryCode="SM" value="378">San Marino (+378)
                                                            </option>
                                                            <option data-countryCode="ST" value="239">Sao Tome &amp;
                                                                Principe (+239)</option>
                                                            <option data-countryCode="SA" value="966">Saudi Arabia
                                                                (+966)</option>
                                                            <option data-countryCode="SN" value="221">Senegal (+221)
                                                            </option>
                                                            <option data-countryCode="CS" value="381">Serbia (+381)
                                                            </option>
                                                            <option data-countryCode="SC" value="248">Seychelles (+248)
                                                            </option>
                                                            <option data-countryCode="SL" value="232">Sierra Leone
                                                                (+232)</option>
                                                            <option data-countryCode="SG" value="65">Singapore (+65)
                                                            </option>
                                                            <option data-countryCode="SK" value="421">Slovak Republic
                                                                (+421)</option>
                                                            <option data-countryCode="SI" value="386">Slovenia (+386)
                                                            </option>
                                                            <option data-countryCode="SB" value="677">Solomon Islands
                                                                (+677)</option>
                                                            <option data-countryCode="SO" value="252">Somalia (+252)
                                                            </option>
                                                            <option data-countryCode="ZA" value="27">South Africa (+27)
                                                            </option>
                                                            <option data-countryCode="ES" value="34">Spain (+34)
                                                            </option>
                                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)
                                                            </option>
                                                            <option data-countryCode="SH" value="290">St. Helena (+290)
                                                            </option>
                                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)
                                                            </option>
                                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)
                                                            </option>
                                                            <option data-countryCode="SD" value="249">Sudan (+249)
                                                            </option>
                                                            <option data-countryCode="SR" value="597">Suriname (+597)
                                                            </option>
                                                            <option data-countryCode="SZ" value="268">Swaziland (+268)
                                                            </option>
                                                            <option data-countryCode="SE" value="46">Sweden (+46)
                                                            </option>
                                                            <option data-countryCode="CH" value="41">Switzerland (+41)
                                                            </option>
                                                            <option data-countryCode="SI" value="963">Syria (+963)
                                                            </option>
                                                            <option data-countryCode="TW" value="886">Taiwan (+886)
                                                            </option>
                                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)
                                                            </option>
                                                            <option data-countryCode="TH" value="66">Thailand (+66)
                                                            </option>
                                                            <option data-countryCode="TG" value="228">Togo (+228)
                                                            </option>
                                                            <option data-countryCode="TO" value="676">Tonga (+676)
                                                            </option>
                                                            <option data-countryCode="TT" value="1868">Trinidad &amp;
                                                                Tobago (+1868)</option>
                                                            <option data-countryCode="TN" value="216">Tunisia (+216)
                                                            </option>
                                                            <option data-countryCode="TR" value="90">Turkey (+90)
                                                            </option>
                                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)
                                                            </option>
                                                            <option data-countryCode="TM" value="993">Turkmenistan
                                                                (+993)</option>
                                                            <option data-countryCode="TC" value="1649">Turks &amp;
                                                                Caicos Islands (+1649)</option>
                                                            <option data-countryCode="TV" value="688">Tuvalu (+688)
                                                            </option>
                                                            <option data-countryCode="UG" value="256">Uganda (+256)
                                                            </option>
                                                            <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                            <option data-countryCode="UA" value="380">Ukraine (+380)
                                                            </option>
                                                            <option data-countryCode="AE" value="971">United Arab
                                                                Emirates (+971)</option>
                                                            <option data-countryCode="UY" value="598">Uruguay (+598)
                                                            </option>
                                                            <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)
                                                            </option>
                                                            <option data-countryCode="VU" value="678">Vanuatu (+678)
                                                            </option>
                                                            <option data-countryCode="VA" value="379">Vatican City
                                                                (+379)</option>
                                                            <option data-countryCode="VE" value="58">Venezuela (+58)
                                                            </option>
                                                            <option data-countryCode="VN" value="84">Vietnam (+84)
                                                            </option>
                                                            <option data-countryCode="VG" value="84">Virgin Islands -
                                                                British (+1284)</option>
                                                            <option data-countryCode="VI" value="84">Virgin Islands - US
                                                                (+1340)</option>
                                                            <option data-countryCode="WF" value="681">Wallis &amp;
                                                                Futuna (+681)</option>
                                                            <option data-countryCode="YE" value="969">Yemen
                                                                (North)(+969)</option>
                                                            <option data-countryCode="YE" value="967">Yemen
                                                                (South)(+967)</option>
                                                            <option data-countryCode="ZM" value="260">Zambia (+260)
                                                            </option>
                                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div
                                                    class=" w-2/3 border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                                    <div class="-mt-4 absolute tracking-wider px-1  text-xs">
                                                        <p>
                                                            <label for="phone" class="bg-white text-gray-600 px-1">
                                                                Phone Number *</label>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        <input id="name" autocomplete="false" tabindex="0" type="text"
                                                            class="py-4 px-1 text-gray-900 outline-none block h-full w-full font-thin">
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <div class="flex flwz-wrap lg:grid-cols-2 gap-10 py-5">
                                                
                                                <div
                                                    class="w-full border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                                                    <div class="-mt-4 absolute tracking-wider px-1   text-xs">
                                                        <p>
                                                            <label for="name" class="bg-white text-gray-600 px-1">
                                                                Additionals details *</label>
                                                        </p>
                                                    </div>
                                                    <p>
                                                        
                                                        <textarea id="additional" name="additional" rows="7" cols="50" class="w-full font-thin">Additional information</textarea>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="flex flwz-wrap lg:grid-cols-2 gap-10 py-5">
                                                
                                                <div
                                                    class="w-full  focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative  p-1 gap-3">
                                                    
                                                        
                                                        <div>
                                                            <input type="checkbox" id="scales" name="scales"
                                                                   checked>
                                                            <label for="scales" class="text-gray-600 text-sm"> KimsaTravel eNewsletter: A weekly announcement of our newest journeys, blog digests, exclusive offers and more.</label>
                                                          </div>
                                                          
                                                          <div>
                                                            <input type="checkbox" id="horns" name="horns">
                                                            <label for="horns" class="text-gray-600 text-sm">KimsaTravel Villas eNewsletter: A periodic update highlighting luxury villas around the world and special offers.
                                                                Availability is subject to change and prices do not include international airfare, upgrades, taxes and optional services not specified in the terms and conditions.</label>
                                                          </div>
                                                </div>
                                            </div>

                                            
                                              

                                            <div class="border-t mt-6 pt-3">
                                                <button
                                                    class=" text-gray-100 px-8 py-5 bg-nile-500 hover:shadow-inner hover:bg-pompadour-700 transition-all duration-300">
                                                     Inquire Now
                                                </button>
                                            </div>
                                        </div>

                                        {{-- {!! Form::text($name, $value, [$options]) !!} --}}

                                    </div>
                                    <!--footer-->
                                    {{-- <div
                                        class=" flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b ">

                                        <button
                                            class=" bg-purple-500 text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                            type="button" onclick="toggleModal('modal-{{ $tour->id }}')">
                                            Save Changes
                                        </button>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                            id="modal-{{ $tour->id }}-backdrop"></div>


                    </div>

                    <div class="border border-pompadour-200 p-5">
                        <h3 class="font-light text-center py-3">INCLUDED WITH EVERY LUXURY SMALL GROUP JOURNEY </h3>
                        <p class="px-2">{{ $tour->include }}</p>
                    </div>
                </div>

            </div>

        </div>


        {{-- Content Main --}}
        <div class="container mx-auto pt-5">
            <div class="flex flex-wrap" id="tabs-id">
                <div class="w-full">
                    <ul class="md:flex mb-0 list-none flex-wrap pt-3 pb-2 flex-row">
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="text-lg font-didot font-bold  px-5 py-7 shadow-lg rounded block leading-normal text-white bg-nile-600"
                                onclick="changeAtiveTab(event,'tab-overview')">
                                <i class="fas fa-space-shuttle text-base mr-1"></i> Overview
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="text-lg font-didot font-bold  px-5 py-7 shadow-lg rounded block leading-normal text-nile-600 bg-white"
                                onclick="changeAtiveTab(event,'tab-journey')">
                                <i class="fas fa-cog text-base mr-1"></i> Itinerary
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="text-lg font-didot font-bold  px-5 py-7 shadow-lg rounded block leading-normal text-nile-600 bg-white"
                                onclick="changeAtiveTab(event,'tab-tailor-made')">
                                <i class="fas fa-briefcase text-base mr-1"></i> Extensions
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="text-lg font-didot font-bold  px-5 py-7 shadow-lg rounded block leading-normal text-nile-600 bg-white"
                                onclick="changeAtiveTab(event,'tab-notes')">
                                <i class="fas fa-briefcase text-base mr-1"></i> Notes
                            </a>
                        </li>
                        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                            <a class="text-lg font-didot font-bold  px-5 py-7 shadow-lg rounded block leading-normal text-nile-600 bg-white"
                                onclick="changeAtiveTab(event,'tab-pricing')">
                                <i class="fas fa-briefcase text-base mr-1"></i> Pricing
                            </a>
                        </li>
                    </ul>
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 rounded">
                        <div class="px-4 py-5 flex-auto">
                            <div class="tab-content tab-space">

                                <div class="block p-2" id="tab-overview">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 md:col-span-8">
                                            <h3 class="text-xl font-regular font-didot pb-5 uppercase">Kimsa Travel Advantages</h3>
                                            <p class="leading-8 ">{{ $tour->overview }}</p>
                                            {{-- <ul>
                                                <li class="pb-2 text-gray-600"> * Absorb the grace, beauty and
                                                    remoteness of Punakha, where you visit the ornately designed Dzong
                                                    and wander in hand-painted courtyards among crimson-robed monks
                                                </li>
                                                <li class="pb-2 text-gray-600"> * Absorb the grace, beauty and
                                                    remoteness of Punakha, where you visit the ornately designed Dzong
                                                    and wander in hand-painted courtyards among crimson-robed monks
                                                </li>
                                                <li class="pb-2 text-gray-600"> *Absorb the grace, beauty and remoteness
                                                    of Punakha, where you visit the ornately designed Dzong and wander
                                                    in hand-painted courtyards among crimson-robed monks
                                                </li>
                                            </ul>

                                            <h3 class="text-2xl font-normal pb-5 pt-10 uppercase">HIGHLIGHTS</h3>


                                            <ul class="list-disc list-inside">
                                                <li class="pb-2">Absorb among crimson-robed monks</li>
                                                <li class="pb-2">igned Dzong and wander in hand-painted c</li>
                                                <li class="pb-2">b the nted courtyards among crimson-robe</li>
                                            </ul> --}}

                                            <h3 class="text-2xl font-normal pb-5 pt-10 uppercase">Itinerary at a Glance
                                            </h3>


                                            <div>
                                                <div class="container  mx-auto w-full">
                                                    <div class="relative wrap overflow-hidden pl-10 pt-5">

                                                        @foreach ($plans as $plan)

                                                            {{-- item --}}
                                                            <div class="border-2-2 absolute border-dashed border-pompadour-600 lg:h-full border"
                                                                style="left: 17.4%"></div>
                                                            <div class="mb-1 flex justify-between items-center w-full">
                                                                <div class="flex z-20 align-middle">
                                                                    <div class="w-20"> {{ $plan->day }}
                                                                    </div>
                                                                    <div
                                                                        class="rounded-full h-4 w-4 flex items-center bg-nile-500 ring-2 ring-nile-500">

                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-10 w-10 text-green-600"
                                                                            viewBox="0 0 20 20" fill="currentColor">
                                                                            <path fill-rule="evenodd"
                                                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </div>
                                                                    <h3
                                                                        class="mb-3 font-light text-carmine-500 text-base pl-5">
                                                                        <span
                                                                            class="font-normal text-xl">{{ $plan->destination }}
                                                                        </span> |
                                                                        {{ $plan->innerview }}
                                                                    </h3>
                                                                    {{-- <hr class="w-14 pb-2 border-t-4 border-gold-600"> --}}
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                        {{-- item --}}

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="w-full">
                                                <h3 class="uppercase font-light py-5">CUSTOMIZE THIS JOURNEY</h3>
                                                <p class="font-thin">If you would like to customize this itinerary
                                                    and create a Tailor Made Journey
                                                    just for you and your companions, click here to inquire, or speak to
                                                    your t
                                                    ravel professional.
                                                </p>
                                            </div>

                                        </div>
                                        <div class="hidden md:block md:col-span-4">
                                            <p>holas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="tab-journey">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-8">

                                            <h3 class="text-2xl font-normal pb-5 pt-10 uppercase">Itinerary at a Glance
                                            </h3>


                                            <div class="container  mx-auto w-full">
                                                <div class="relative wrap overflow-hidden py-10">
                                                    <div class="border-2-2 absolute border-dashed border-pompadour-600 lg:h-full border"
                                                        style="left: 11.7%"></div>
                                                    <!-- First timeline -->
                                                    @foreach ($plans as $plan)
                                                        <div class="mb-1 md:flex justify-between items-center w-full">
                                                            {{-- <div class="order-2 w-6/12"></div> --}}
                                                            <div class="flex z-20 align-middle">
                                                                <div class="w-20"> {{ $plan->day }}
                                                                </div>
                                                                <div
                                                                    class="rounded-full h-4 w-4 flex items-center bg-nile-500 ring-2 ring-nile-500">

                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-10 w-10 text-green-600"
                                                                        viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd"
                                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="order-1 px-1 md:px-6 py-4  ml-3">
                                                                {{-- <h3 class="mb-3 font-thin text-pompadour-500 text-base "> DAY 10 </h3> --}}
                                                                <h3 class="mb-3 font-light text-carmine-500 text-base">
                                                                    <b><span
                                                                            class="font-normal uppercase">{{ $plan->destination }}</span>
                                                                    </b>
                                                                    | {{ $plan->innerview }}
                                                                </h3>
                                                                <hr class="w-14 pb-2 border-t-4 border-gold-600">
                                                                {{-- <h3 class="mb-3 font-light text-carmine-500 text-base"> <b>CUSCO</b> | DESIGN YOUR DAY </h3> --}}
                                                                <p
                                                                    class="text-base leading-snug tracking-wide text-gray-900 text-opacity-100 pb-5">
                                                                    {{ $plan->itinerary }}
                                                                </p>

                                                                <hr>
                                                            </div>
                                                        </div>


                                                    @endforeach

                                                    <!-- you can add more time line from here :) -->
                                                </div>
                                            </div>

                                        </div>
                                        <div class="hidden col-span-4">
                                            <p>holas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="tab-tailor-made">
                                    <div class="grid grid-cols-12 pb-3">
                                        <div class="col-span-12 md:col-span-8">
                                            {{-- ext --}}
                                            @foreach ($extensions as $extension)
                                                <div class="pb-3">
                                                    <h3 class="text-2xl font-thin"> {{ $extension->name }} </h3>
                                                    <div class="md:flex">
                                                        <div class="w-full md:w-1/3 py-2">
                                                            {{-- <img class="object-cover w-full"
                                                            src="https://via.placeholder.com/400x300" alt=""> --}}
                                                            <img class="object-cover w-full" src=" 
                                                                 @if ($extension->image)
                                                            {{ Storage::url($extension->image->url) }}
                                                        @else
                                                            'https://via.placeholder.com/600x400'
                                            @endif
                                            " alt="">



                                        </div>
                                        <div class="w-full md:w-2/3 pl-6 pt-2">
                                            <p> {{ $extension->days }} days from {{ $extension->price }} per
                                                person
                                            </p>
                                            <p> {{ $extension->suplement }} </p>
                                            <hr class="pb-5">
                                            <p>Take advantage of an incredible opportunity to spend two
                                                nights in Dubai before or after your journey.
                                            </p>
                                            <p class="pt-8 pb-2 underline">Accommodations:
                                            </p>
                                            <p> {{ $extension->accomodation }} </p>
                                            <p> {{ $extension->abstract }} </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                                {{-- e --}}


                            </div>
                            <div class="hidden md:block md:col-span-4">
                                <p>holas</p>

                            </div>

                        </div>

                    </div>
                    <div class="hidden" id="tab-notes">
                        <div class="grid grid-cols-12 pb-3">
                            <div class="col-span-12 md:col-span-8">
                                adasd


                            </div>
                            <div class="hidden md:block md:col-span-4">
                                <p>holas</p>
                            </div>

                        </div>

                    </div>
                    <div class="hidden" id="tab-pricing">
                        <p class="text-normal font-medium py-4">Journey pricing as of 2020</p>
                        {{ $tour->fullprice }}
                        {{-- <p class="text-2xl font-thin pt-5"> BASIC PRICING - US$4,860</p>
                                    <p>This is a sample journey and can be tailored to your interests and travel style.
                                    </p>

                                    <ul class="list-disc">
                                        <li>Based on two people travelling together in double or twin occupancy</li>
                                        <li> Price is per person for the full 8-day itinerary</li>
                                        <li>Based on Hotel Selection 1: Hotel B, Sol y Luna, Inkaterra Machu Picchu
                                            Pueblo, Inkaterra La Casona</li>
                                    </ul>

                                    <p class="text-2xl font-thin pt-5"> PREMIUM PRICING - US$4,860</p>
                                    <p>This is a sample journey and can be tailored to your interests and travel style.
                                    </p>

                                    <ul class="list-disc">
                                        <li>Based on two people travelling together in double or twin occupancy</li>
                                        <li> Price is per person for the full 8-day itinerary</li>
                                        <li>Based on Hotel Selection 1: Hotel B, Sol y Luna, Inkaterra Machu Picchu
                                            Pueblo, Inkaterra La Casona</li>
                                    </ul> --}}

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>


        {{-- Test --}}
        <div class="container mx-auto">

            <h1 class="text-2xl uppercase font-thin py-7">Activities and extensions to consider</h1>
            <div id="wrapper">
                <div id="carousel">
                    <div id="content">
                        <!-- Activities -->
                        @foreach ($activities as $activity)
                            <div class="shadow-md rounded-md overflow-hidden item" style="width: 250px">
                                <img src="      @if ($activity->image)
                                {{ Storage::url($activity->image->url) }}
                            @else 'https://via.placeholder.com/1920x300'@endif "

                                class=""
                                alt="" />
                                <div class="p-4">
                                    <h5 class="text-xl font-light  mb-2"> <a href="#"
                                            onclick="toggleModal('modal-{{ $activity->id }}')">{{ $activity->title }}</a>
                                    </h5>
                                    <p class="mb-4">
                                        <span class="text-sm">
                                            @foreach ($tour->destinations as $destination)
                                                {{ $destination->name }}
                                            @endforeach
                                        </span>
                                        |
                                        @foreach ($tour->nations as $nation)
                                            {{ $nation->name }}
                                        @endforeach
                                    </p>
                                    <p class="mb-4">
                                    </p>

                                    <!-- Modal -->
                                    <div class=" hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                                        id="modal-{{ $activity->id }}">
                                        <div class="relative w-auto my-6 mx-auto max-w-6xl">
                                            <!--content-->
                                            <div
                                                class=" border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                <!--header-->
                                                <div
                                                    class=" flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t ">
                                                    <h3 class="text-3xl font-semibold"> {{ $activity->title }} </h3>
                                                    <button
                                                        class=" p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                                        onclick="toggleModal('modal-{{ $activity->id }}')">
                                                        <span
                                                            class=" bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                            <i class="fas fa-times"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--body-->
                                                <div class="relative p-6 flex-auto">
                                                    <p class="my-4 text-gray-500 text-lg leading-relaxed">
                                                    <div class="flex flex-wrap">
                                                        <div class="w-2/3 p-10"> {{ $activity->description }}
                                                        </div>
                                                        <div class="w-1/3 p-5"> <img
                                                                src="{{ Storage::url($activity->image->url) }}"
                                                                alt=""> </div>
                                                    </div>
                                                    </p>
                                                </div>
                                                <!--footer-->
                                                <div
                                                    class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black"
                                        id="modal-{{ $activity->id }}-backdrop"></div>




                                </div>
                            </div>
                        @endforeach
                        <!-- Activities -->





                    </div>
                </div>
                <button id="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z" />
                        <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
                    </svg>
                </button>
                <button id="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z" />
                        <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
                    </svg>
                </button>
            </div>
        </div>











        {{-- Content Similar --}}
        <div class="container mx-auto pt-10">
            <h1 class="text-center text-3xl uppercase font-thin py-10">Other Journeys You May Be Interested In </h1>
            <section class="overflow-hidden text-gray-700 ">
                <div class="container px-1 py-2 mx-auto ">
                    <div class="md:flex flex-wrap -m-1 md:-m-2">
                        @foreach ($similares as $similar)
                            <div class="w-full md:w-1/2 lg:w-3/12 px-2 py-1">
                                <div class=" w-full bg-gray-100 pt-36 pb-4 px-3 relative mb-4 md:h-full">
                                    <a href="{{ route('tours.show', $similar) }} ">
                                        <img hre alt="gallery"
                                            class="w-full object-cover md:h-full object-center block opacity-25 absolute inset-0 rounded-xl"
                                            src=" 
                                                     @if ($similar->imagethumb)
                                        {{ Storage::url($similar->imagethumb->url) }}
                                    @else
                                        'https://via.placeholder.com/600x400'
                        @endif
                        ">
                        </a>
                        <div class="text-center relative z-10 w-full">
                            <p class="leading-relaxed"> {{ $similar->name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        </section>
        </div>
    </main>


    <script type="text/javascript">
        function changeAtiveTab(event, tabID) {
            let element = event.target;
            while (element.nodeName !== "A") {
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for (let i = 0; i < aElements.length; i++) {
                aElements[i].classList.remove("text-white");
                aElements[i].classList.remove("bg-nile-600");
                aElements[i].classList.add("text-nile-600");
                aElements[i].classList.add("bg-white");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-nile-600");
            element.classList.remove("bg-white");
            element.classList.add("text-white");
            element.classList.add("bg-nile-600");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
        }
    </script>
    <style>
        #wrapper {
            width: 100%;
            /* max-width: 964px; */
            position: relative;
        }

        #carousel {
            overflow: auto;
            scroll-behavior: smooth;
            scrollbar-width: none;
        }

        #carousel::-webkit-scrollbar {
            height: 0;
        }

        #prev,
        #next {
            display: flex;
            justify-content: center;
            align-content: center;
            background: white;
            border: none;
            padding: 8px;
            border-radius: 50%;
            outline: 0;
            cursor: pointer;
            position: absolute;
        }

        #prev {
            top: 50%;
            left: 0;
            transform: translate(50%, -50%);
            display: none;
        }

        #next {
            top: 50%;
            right: 0;
            transform: translate(-50%, -50%);
        }

        #content {
            display: grid;
            grid-gap: 16px;
            grid-auto-flow: column;
            margin: auto;
            box-sizing: border-box;
        }

        .item {
            /* width: 180px;
      height: 180px; */
            /* background: green; */
        }

    </style>
    <script>
        const gap = 16;

        const carousel = document.getElementById("carousel"),
            content = document.getElementById("content"),
            next = document.getElementById("next"),
            prev = document.getElementById("prev");

        next.addEventListener("click", e => {
            carousel.scrollBy(width + gap, 0);
            if (carousel.scrollWidth !== 0) {
                prev.style.display = "flex";
            }
            if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
                next.style.display = "none";
            }
        });
        prev.addEventListener("click", e => {
            carousel.scrollBy(-(width + gap), 0);
            if (carousel.scrollLeft - width - gap <= 0) {
                prev.style.display = "none";
            }
            if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
                next.style.display = "flex";
            }
        });

        let width = carousel.offsetWidth;
        window.addEventListener("resize", e => (width = carousel.offsetWidth));
    </script>

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document
                .getElementById(modalID + "-backdrop")
                .classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>

</x-app-layout>
