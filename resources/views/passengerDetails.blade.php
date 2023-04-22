<x-layout>
    <!-- Put this part before </body> tag -->

    <input type="checkbox" id="my-modal-3" class="modal-toggle"/>
    <div class="modal">
        <div class="modal-box bg-white relative">
            <div
                class=" absolute right-2 top-2 bg-info text-white flex justify-center rounded-full text-center drop-shadow-2xl px-3 py-1.5 ">
                <label for="my-modal-3">✕</label>
            </div>

            <h3 class="text-lg font-bold">Congratulations random Internet user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
        </div>
    </div>

    <section
        class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-col sm:flex-col flex-col justify-center w-full 2xl:px-52 xl:px-20 lg: px-2 md:px-20 sm:px-20 px-9 pt-24">
        {{--    section left div starts here--}}
        <div class="2xl:w-3/4 xl:w-3/4 lg:w-3/4 md:w-full sm:w-full w-full bg-white drop-shadow-2xl rounded-xl p-5">

            <div class="py-3 border-b-2 border-b-gray-100 ">
                <span class="text-lg text-black font-semibold">PASSENGER DETAILS </span>
            </div>

            <div class="border-b-2 border-b-gray-100  2xl:flex xl:flex lg:flex md:flex sm:flex flex-wrap block justify-between py-4">
                <span class="text-md text-gray-700 "><span class=" mr-2 text-xs rounded-lg bg-yellow-300 text-black px-2 py-0.5">Note</span>Please make sure you enter the Name as per your govt. photo id.</span>

                <!-- The button to open modal -->
            </div>

            <div>
                <div class="bg-gray-100 border-b-2 border-b-gray-300 px-4 py-3 rounded-md mt-12">
                    <span class="text-black "><i class="fa-solid fa-user mr-2"></i></span>
                    <span class="text-black ">Adult 1 </span>
                </div>

                <div class="border-2 border-gray-100 px-5 pb-10">

                        <div class="flex flex-col mt-5">
                            <label for="name" class=" font-semibold text-gray-800 text-sm">NAME</label>
                            <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col w-full justify-between mt-2">

                                <div class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 md:w-1/4 sm:w-1/4 w-full">
                                    <select class="w-full rounded-md text-sm text-black">
                                        <option>Title </option>
                                        <option>Mr</option>
                                        <option>Mrs</option>
                                        <option>Ms</option>
                                    </select>
                                </div>
                                <div class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 md:w-1/4 sm:w-1/4 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 mt-3">
                                    <input type="text" class="w-full rounded-md text-sm text-black" placeholder="First Name/ Given Name"  />
                                </div>
                                <div class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 md:w-1/4 sm:w-1/4 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 mt-3">
                                    <input type="text" class="w-full rounded-md text-sm text-black" placeholder="Middel Name"  />
                                </div>
                                <div class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 md:w-1/4 sm:w-1/4 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 mt-3">
                                    <input type="text" class="w-full rounded-md text-sm text-black" placeholder="Last Name"  />
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col mt-5">
                        <label for="gender" class=" font-semibold text-gray-800 text-sm"> Gender</label>
                        <select id="gender" name="gender"    class="w-full rounded-md text-sm text-black mt-2" >
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                        <div class="flex flex-col mt-5">
                        <label for="dob" class=" font-semibold text-gray-800 text-sm">Date of Birth</label>
                        <input type="date"  class="w-full rounded-md text-sm text-black mt-2">
                    </div>

                        <div class="flex flex-col mt-5">
                            <label for="seating" class=" font-semibold text-gray-800 text-sm"> Seating</label>
                            <select  name="seating"   class="w-full rounded-md text-sm text-black mt-2"  required="">
                                <option value="No preference">No preference</option>
                                <option value="Aisle seat">Aisle seat</option>
                                <option value="Bulkhead seat">Bulkhead seat</option>
                                <option value="Cradle/Baby Basket seat">Cradle/Baby Basket seat</option>
                                <option value="Exit seat">Exit seat</option>
                                <option value="Non smoking window seat">Non smoking window seat</option>
                                <option value="Suitable for disable seat">Suitable for disable seat</option>
                                <option value="Suitable for disable seat">Suitable for disable seat</option>
                                <option value="Legspace">Legspace</option>
                                <option value="Non smoking seat">Non smoking seat</option>
                                <option value="Overwing seat">Overwing seat</option>
                                <option value="Smoking seat">Smoking seat</option>
                                <option value="Window seat">Window seat</option>
                            </select>
                        </div>

                        <div class="flex flex-col mt-5">
                            <label for="assistance" class=" font-semibold text-gray-800 text-sm">ASSISTANCE</label>
                            <select name="assistance"  class="w-full rounded-md text-sm text-black mt-2"  required="">
                                <option selected="selected" value="No preference">No preference</option>
                                <option value="Overwing seat">Deaf</option>
                                <option value="Smoking seat">Blind</option>
                                <option value="Window seat">Wheelchair</option>
                            </select>
                        </div>

                        <div class="flex flex-col mt-5">
                            <label for="meal" class=" font-semibold text-gray-800 text-sm">MEAL</label>
                            <select name="meal"  class="w-full rounded-md text-sm text-black mt-2"  >
                                <option value="No preference">No preference</option>
                                <option value="BBML">Baby Meal</option>
                                <option value="BLML">Bland Meal</option>
                                <option value="CHML">Child Meal Meal</option>
                                <option value="DBML">Diabetic Meal</option>
                                <option value="FPML">Fruit Platter Meal</option>
                                <option value="GFML">Gluten Intolerant Meal</option>
                                <option value="HNML">Hindu Meal</option>
                                <option value="KSML">Kosher Meal</option>
                                <option value="LCML">Low Calorie Meal</option>
                                <option value="LFML">Low Fat Meal</option>
                                <option value="NLML">Low Lactose Meal</option>
                                <option value="LSML">Low Salt Meal</option>
                                <option value="MOML">Muslim Meal</option>
                                <option value="RVML">Raw Vegetarian Meal</option>
                                <option value="SFML">Seafood Meal</option>
                                <option value="SPML">Special Meal</option>
                                <option value="AVML">Vegetarian Hindu Meal</option>
                                <option value="VJML">Vegetarian Jain Meal</option>
                                <option value="VLML">Vegetarian Lacto-Ovo</option>
                                <option value="VGML">Vegetarian Meal</option>
                                <option value="VOML">Vegetarian Oriental Meal</option>
                            </select>
                        </div>

                    {{--                    for label         class=" font-semibold text-gray-800 text-sm"    --}}
                    {{--                    for input         class="w-full rounded-md text-sm text-black"               --}}


                </div>

                <div class="border-2 border-gray-100 px-5 py-10 mt-5">

                    <span class=" font-semibold text-gray-800 text-md mt-5">Passenger Address</span>

                    <div class="flex flex-col mt-5">
                        <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col w-full justify-between mt-2">
                            <div class=" 2xl:w-80 xl:w-80 lg:w-80 md:w-80 sm:w-80 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0  ">
                                <label for="postcode" class=" font-semibold text-gray-800 text-sm">POST CODE</label>
                                <input type="text" name="postcode" class="w-full rounded-md text-sm text-black mt-2" placeholder="Enter Post Code"  />
                            </div>
                            <div class=" 2xl:w-80 xl:w-80 lg:w-80 md:w-80 sm:w-80 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 mt-3 ">
                                <label for="addressline1" class=" font-semibold text-gray-800 text-sm">ADDRESS LINE 1 </label>
                                <input type="text" class="w-full rounded-md text-sm text-black mt-2" placeholder="Enter Address line 1"  />
                            </div>
                            <div class=" 2xl:w-80 xl:w-80 lg:w-80 md:w-80 sm:w-80 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 mt-3 ">
                                <label for="addressline2" class=" font-semibold text-gray-800 text-sm">ADDRESS LINE 2 </label>
                                <input type="text" class="w-full rounded-md text-sm text-black mt-2" placeholder="Enter Address Line 2 "  />
                            </div>
                        </div>

                        <div class="flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col w-full justify-between mt-5">
                            <div class=" 2xl:w-80 xl:w-80 lg:w-80 md:w-80 sm:w-80 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0  ">
                                <label for="city" class=" font-semibold text-gray-800 text-sm">CITY</label>
                                <input type="text" name="postcode" class="w-full rounded-md text-sm text-black mt-2" placeholder="Enter your town/city name "  />
                            </div>
                            <div class=" 2xl:w-80 xl:w-80 lg:w-80 md:w-80 sm:w-80 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 mt-3 ">
                                <label for="state" class=" font-semibold text-gray-800 text-sm">STATE </label>
                                <input type="text" class="w-full rounded-md text-sm text-black mt-2" placeholder="Enter your state name"  />
                            </div>
                            <div class=" 2xl:w-80 xl:w-80 lg:w-80 md:w-80 sm:w-80 w-full 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 mt-3 ">
                                <label for="country" class=" font-semibold text-gray-800 text-sm">COUNTRY </label>
                                <select class="w-full rounded-md text-sm text-black mt-2" name="country" id="country" required="">
                                    <option value="">--Select--</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua And Barbuda">Antigua And Barbuda</option>
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
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei&nbsp;Darussalam">Brunei&nbsp;Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman&nbsp;Islands">Cayman&nbsp;Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos&nbsp;(Keeling) Islands">Cocos&nbsp;(Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic Of">Congo, The Democratic Republic Of</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
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
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe&nbsp;Islands">Faroe&nbsp;Islands</option>
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
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People'S Republic Of">Korea, Democratic People'S Republic Of</option>
                                    <option value="Korea,&nbsp;Republic Of">Korea,&nbsp;Republic Of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People'S Democratic Republic">Lao People'S Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia,&nbsp;The Former Yugoslav Republic Of">Macedonia,&nbsp;The Former Yugoslav Republic Of</option>
                                    <option value="Madagascar">Madagascar</option>
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
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
                                    <option value="Moldova, Republic Of">Moldova, Republic Of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
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
                                    <option value="Norfolk&nbsp;Island">Norfolk&nbsp;Island</option>
                                    <option value="Northern Mariana&nbsp;Islands">Northern Mariana&nbsp;Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama">Panama</option>
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
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                    <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia &amp; Montenegro">Serbia &amp; Montenegro</option>
                                    <option value="Serbia &amp; Montenegro">Serbia &amp; Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia &amp; The South Sandwich Islands">South Georgia &amp; The South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province Of China">Taiwan, Province Of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania,&nbsp;United&nbsp;Republic Of">Tanzania,&nbsp;United&nbsp;Republic Of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks And Caicos&nbsp;Islands">Turks And Caicos&nbsp;Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States">United States</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis And Futuna">Wallis And Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=" flex 2xl:flex-row xl:flex-row lg:flex-row md:flex-row sm:flex-row flex-col w-full flex-row px-5 pb-16 mt-5 border-b-2 border-b-gray-100">
                   <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full flex flex-col relative" >
                       <label for="email"  class=" font-semibold text-gray-800 text-sm">EMAIL ID</label>
                       <input type="email" class="w-full rounded-md text-sm text-black mt-2" placeholder="Enter you email id ">
                       <span class="text-xs text-black absolute -bottom-8 left-0">Your ticket wil be sent on this email addrass</span>
                   </div>

                   <div class=" 2xl:w-1/2 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full flex flex-col 2xl:ml-10 xl:ml-10 lg:ml-10 md:ml-10 sm:ml-10 ml-0 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 mt-10" >
                       <label for="mobile"  class=" font-semibold text-gray-800 text-sm">MOBILE NUMBER</label>
                       <input type="number" class="w-full rounded-md text-sm text-black mt-2" placeholder="Enter">
                   </div>


               </div>

                <div class=" flex w-full px-5  mt-5">
                    <a href="#" class="bg-info text-gray-100 text-lg py-2 px-5 rounded-md">Proceed to Payment </a>
                </div>
            </div>
        </div>

        {{--    section left div ends here--}}


        {{--    section right div starts here--}}
        <div
            class="2xl:w-1/4 xl:w-1/4 lg:w-1/4 md:w-full sm:w-full w-full  bg-white drop-shadow-2xl rounded-xl 2xl:mt-0 xl:mt-0 lg:mt-0 md:mt-2 sm:mt-2 mt-2 2xl:ml-5 xl:ml-5 lg:ml-5 md:ml-0 sm:ml-0 ml-0 h-80 p-5">
            <div class="flex flex-col pb-5 border-b-2 border-b-gray-200">
                <span class="text-black font-semibold text-xl ">FARE SUMMARY</span>
                <span class="mt-2 text-sm ">Travelers 1 Adult</span>
            </div>

            <div class="flex justify-between mt-3">
                <span class="text-black text-md">Base Fare x 1</span>
                <span class="text-black text-md font-semibold">&#8377 235.58</span>
            </div>
            <div class="flex justify-between mt-1.5">
                <span class="text-black text-md">Fee & Surcharge x 1</span>
                <span class="text-black text-md font-semibold">&#8377 235.58</span>
            </div>
            <div class="flex justify-between mt-1.5 pb-3 border-b-2 border-b-gray-200 ">
                <span class="text-black text-md">Price 1 adult(s)</span>
                <span class="text-black text-md font-semibold">&#8377 235.58</span>
            </div>
            <div class="flex justify-between mt-3">
                <span class="text-black text-md font-bold">Total</span>
                <span class="text-black text-md text-red-700 font-semibold">&#8377 235.58</span>
            </div>


        </div>
        {{--    section right div ends here--}}
    </section>



</x-layout>
