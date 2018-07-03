<?php
  require_once 'header.php';

?>

<!-- Main Content -->
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6">
          <form id="stu_credentials" method="post" enctype="multipart/form-data" action="actions/register_action.php">
                  <h4 class="col-md-12" style="font-weight:bolder;">Personal Details</h4>
                  <hr>
                  <div class="form-group col-md-12">
                        <label> Enter Roll-no.</label>
                        <input type="text" class="form-control" name="stu_id" placeholder="Enter rollno">
                        <div id="stu_feedback" class="invalid-feedback">Enter valid Roll no</div>
                            
                  </div>
                  <div class="form-group col-md-12">
                      <label> Enter Somaiya Email-id</label>
                        <input type="email" class="form-control" name="stu_email" placeholder="Eg : abcd@somaiya.edu">
                        <div class="invalid-feedback">Enter valid email id</div>
                  </div>
                  <div class="form-group col-md-12">
                        <label> Enter New Password</label>
                        <input type="password" class="form-control" name="stu_password" placeholder="Enter new Password">
                        <div class="invalid-feedback">Enter valid password</div>
                  </div>
                  <div class="form-group col-md-12">
                        <label> Confirm New Password</label>
                        <input type="password" class="form-control" name="stu_cpassword" placeholder="Confirm new Password">
                        <div class="invalid-feedback">Password does not match</div>
                  </div>
                  <div class=" form-row col-md-12">
                            <label class="col-md-12">Name of Student</label>
                              <!-- <div class="form-check-inline"> -->
                            <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="stu_fname" placeholder="Enter First Name" >
                                    <div class="invalid-feedback">Enter valid name</div>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="stu_mname" placeholder="Enter Middle Name">
                                <div class="invalid-feedback">Enter valid name</div>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="stu_lname" placeholder="Enter Last Name">
                                <div class="invalid-feedback">Enter valid name</div>
                            </div>
                      <!-- </div> -->  
                  </div>
                  <div class="form-row col-md-12">
                        <div class="form-group col-md-6">
                              <label>Date of Birth</label>
                              <input type="date" class="form-control" name="stu_dob" placeholder="Enter Date of Birth" required="true">
                        </div>
                        <div class="form-group col-md-6">
                              <label>Gender</label>
                              <select name="stu_gender" class="form-control" required="true">
                                <option value="0">Please select </option>
                                <option value="1">male</option>
                                <option value="2">female</option>
                                <option value="3">other</option>
                              </select>
                        </div>
                  </div>
                  <div class="form-row col-md-12">
                        <div class="form-group col-md-6">
                            <label> Blood Group</label>
                          
                            <select class="form-control" name="stu_blood" required="true">
                                <option value="0">Please Select</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">A-B</option>

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Year</label>
                            <select name="stu_year" class="form-control" required="true">
                                <option value="0">Please Select </option>
                                <option value="1">FE</option>
                                <option value="2">SE</option>
                                <option value="3">TE</option>
                                <option value="4">BE</option>
                            </select>
                        </div>
                  </div>
                  <div class="form-row col-md-12">
                        <div class="form-group col-md-6">
                            <label>Divison</label>
                            <input type="text" class="form-control" name="stu_division" placeholder="Enter your division">
                            <div class="invalid-feedback">Enter valid Division in Caps</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Year Of Joining</label>
                            <input type="text" class="form-control" name="stu_year_of_joining" placeholder="Enter your year of joining">
                            <div class="invalid-feedback">Enter valid year</div>
                        </div>
                        <div class="form-group col-md-6">
                            <label> Branch</label>
                             <select name="stu_branch" class="form-control" required="true">
                                <option value="0">Please Select </option>
                                <option value="1">COMPS</option>
                                <option value="2">IT</option>
                                <option value="3">EXTC</option>
                                <option value="4">ETRX</option>
                                <option value="5">MECH</option>
                             </select>
                        </div>
                  </div>
            

              <br>
              <h4 class="col-md-12" style="font-weight:bolder;">Address Details</h4>
              <hr>

              <div class="form-group col-md-12">
                    <label>Flat no/house no/bldg</label>
                    <input type="text" class="form-control" name="stu_add1" placeholder=" Address line 1" required="true">
              </div>
              <div class="form-group col-md-12  ">
                    <label> Locality/Area/Street</label>
                    <input type="text" class="form-control" name="stu_add_locality" placeholder="Address line 2" required="true">
              </div>
              <div class="form-row col-md-12">
                    <div class="form-group col-md-6">
                          <label>City</label>
                          <input type="text" class="form-control" name="stu_add_city" required="true">
                    </div>
                    <div class="form-group col-md-6">
                          <label>District</label>
                          <input type="text" class="form-control" name="stu_add_district" required="true">
                    </div>
                    <div class="form-group col-md-6">
                          <label>State/Province</label>
                          <input type="text" class="form-control" name="stu_add_state" required="true">
                    </div>
              </div>
              <div class="form-row col-md-12">
                    <div class="form-group col-md-6">
                        <label>Pin code</label>
                        <input type="text" class="form-control" name="stu_add_pincode" placeholder="******">
                        <div class="invalid-feedback">Enter valid pincode</div>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Country</label>
                      <select name="stu_add_country" class="form-control" required="true">
                        <option value="0">Please Select </option>
                        <option value="4">Afghanistan</option>
                        <option value="248">Åland Islands</option>
                        <option value="8">Albania</option>
                        <option value="12">Algeria</option>
                        <option value="16">American Samoa</option>
                        <option value="20">Andorra</option>
                        <option value="24">Angola</option>
                        <option value="660">Anguilla</option>
                        <option value="10">Antarctica</option>
                        <option value="28">Antigua and Barbuda</option>
                        <option value="32">Argentina</option>
                        <option value="51">Armenia</option>
                        <option value="533">Aruba</option>
                        <option value="36">Australia</option>
                        <option value="40">Austria</option>
                        <option value="31">Azerbaijan</option>
                        <option value="44">Bahamas</option>
                        <option value="48">Bahrain</option>
                        <option value="50">Bangladesh</option>
                        <option value="52">Barbados</option>
                        <option value="112">Belarus</option>
                        <option value="56">Belgium</option>
                        <option value="84">Belize</option>
                        <option value="204">Benin</option>
                        <option value="60">Bermuda</option>
                        <option value="64">Bhutan</option>
                        <option value="68">Bolivia, Plurinational State of</option>
                        <option value="535">Bonaire, Sint Eustatius and Saba</option>
                        <option value="70">Bosnia and Herzegovina</option>
                        <option value="72">Botswana</option>
                        <option value="74">Bouvet Island</option>
                        <option value="76">Brazil</option>
                        <option value="86">British Indian Ocean Territory</option>
                        <option value="96">Brunei Darussalam</option>
                        <option value="100">Bulgaria</option>
                        <option value="854">Burkina Faso</option>
                        <option value="108">Burundi</option>
                        <option value="116">Cambodia</option>
                        <option value="120">Cameroon</option>
                        <option value="124">Canada</option>
                        <option value="132">Cape Verde</option>
                        <option value="136">Cayman Islands</option>
                        <option value="140">Central African Republic</option>
                        <option value="148">Chad</option>
                        <option value="152">Chile</option>
                        <option value="156">China</option>
                        <option value="162">Christmas Island</option>
                        <option value="166">Cocos (Keeling) Islands</option>
                        <option value="170">Colombia</option>
                        <option value="174">Comoros</option>
                        <option value="178">Congo</option>
                        <option value="180">Congo, the Democratic Republic of the</option>
                        <option value="184">Cook Islands</option>
                        <option value="188">Costa Rica</option>
                        <option value="384">Côte d'Ivoire</option>
                        <option value="191">Croatia</option>
                        <option value="192">Cuba</option>
                        <option value="531">Curaçao</option>
                        <option value="196">Cyprus</option>
                        <option value="203">Czech Republic</option>
                        <option value="208">Denmark</option>
                        <option value="262">Djibouti</option>
                        <option value="212">Dominica</option>
                        <option value="214">Dominican Republic</option>
                        <option value="218">Ecuador</option>
                        <option value="818">Egypt</option>
                        <option value="222">El Salvador</option>
                        <option value="226">Equatorial Guinea</option>
                        <option value="232">Eritrea</option>
                        <option value="233">Estonia</option>
                        <option value="231">Ethiopia</option>
                        <option value="238">Falkland Islands (Malvinas)</option>
                        <option value="234">Faroe Islands</option>
                        <option value="242">Fiji</option>
                        <option value="246">Finland</option>
                        <option value="250">France</option>
                        <option value="254">French Guiana</option>
                        <option value="258">French Polynesia</option>
                        <option value="260">French Southern Territories</option>
                        <option value="266">Gabon</option>
                        <option value="270">Gambia</option>
                        <option value="268">Georgia</option>
                        <option value="276">Germany</option>
                        <option value="288">Ghana</option>
                        <option value="292">Gibraltar</option>
                        <option value="300">Greece</option>
                        <option value="304">Greenland</option>
                        <option value="308">Grenada</option>
                        <option value="312">Guadeloupe</option>
                        <option value="316">Guam</option>
                        <option value="320">Guatemala</option>
                        <option value="831">Guernsey</option>
                        <option value="324">Guinea</option>
                        <option value="624">Guinea-Bissau</option>
                        <option value="328">Guyana</option>
                        <option value="332">Haiti</option>
                        <option value="334">Heard Island and McDonald Islands</option>
                        <option value="336">Holy See (Vatican City State)</option>
                        <option value="340">Honduras</option>
                        <option value="344">Hong Kong</option>
                        <option value="348">Hungary</option>
                        <option value="352">Iceland</option>
                        <option value="356">India</option>
                        <option value="360">Indonesia</option>
                        <option value="364">Iran, Islamic Republic of</option>
                        <option value="368">Iraq</option>
                        <option value="372">Ireland</option>
                        <option value="833">Isle of Man</option>
                        <option value="376">Israel</option>
                        <option value="380">Italy</option>
                        <option value="388">Jamaica</option>
                        <option value="392">Japan</option>
                        <option value="832">Jersey</option>
                        <option value="400">Jordan</option>
                        <option value="398">Kazakhstan</option>
                        <option value="404">Kenya</option>
                        <option value="296">Kiribati</option>
                        <option value="408">Korea, Democratic People's Republic of</option>
                        <option value="410">Korea, Republic of</option>
                        <option value="414">Kuwait</option>
                        <option value="417">Kyrgyzstan</option>
                        <option value="418">Lao People's Democratic Republic</option>
                        <option value="428">Latvia</option>
                        <option value="422">Lebanon</option>
                        <option value="426">Lesotho</option>
                        <option value="430">Liberia</option>
                        <option value="434">Libya</option>
                        <option value="438">Liechtenstein</option>
                        <option value="440">Lithuania</option>
                        <option value="442">Luxembourg</option>
                        <option value="446">Macao</option>
                        <option value="807">Macedonia, the former Yugoslav Republic of</option>
                        <option value="450">Madagascar</option>
                        <option value="454">Malawi</option>
                        <option value="458">Malaysia</option>
                        <option value="462">Maldives</option>
                        <option value="466">Mali</option>
                        <option value="470">Malta</option>
                        <option value="584">Marshall Islands</option>
                        <option value="474">Martinique</option>
                        <option value="478">Mauritania</option>
                        <option value="480">Mauritius</option>
                        <option value="175">Mayotte</option>
                        <option value="484">Mexico</option>
                        <option value="583">Micronesia, Federated States of</option>
                        <option value="498">Moldova, Republic of</option>
                        <option value="492">Monaco</option>
                        <option value="496">Mongolia</option>
                        <option value="499">Montenegro</option>
                        <option value="500">Montserrat</option>
                        <option value="504">Morocco</option>
                        <option value="508">Mozambique</option>
                        <option value="104">Myanmar</option>
                        <option value="516">Namibia</option>
                        <option value="520">Nauru</option>
                        <option value="524">Nepal</option>
                        <option value="528">Netherlands</option>
                        <option value="540">New Caledonia</option>
                        <option value="554">New Zealand</option>
                        <option value="558">Nicaragua</option>
                        <option value="562">Niger</option>
                        <option value="566">Nigeria</option>
                        <option value="570">Niue</option>
                        <option value="574">Norfolk Island</option>
                        <option value="580">Northern Mariana Islands</option>
                        <option value="578">Norway</option>
                        <option value="512">Oman</option>
                        <option value="586">Pakistan</option>
                        <option value="585">Palau</option>
                        <option value="275">Palestinian Territory, Occupied</option>
                        <option value="591">Panama</option>
                        <option value="598">Papua New Guinea</option>
                        <option value="600">Paraguay</option>
                        <option value="604">Peru</option>
                        <option value="608">Philippines</option>
                        <option value="612">Pitcairn</option>
                        <option value="616">Poland</option>
                        <option value="620">Portugal</option>
                        <option value="630">Puerto Rico</option>
                        <option value="634">Qatar</option>
                        <option value="638">Réunion</option>
                        <option value="642">Romania</option>
                        <option value="643">Russian Federation</option>
                        <option value="646">Rwanda</option>
                        <option value="652">Saint Barthélemy</option>
                        <option value="654">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="659">Saint Kitts and Nevis</option>
                        <option value="662">Saint Lucia</option>
                        <option value="663">Saint Martin (French part)</option>
                        <option value="666">Saint Pierre and Miquelon</option>
                        <option value="670">Saint Vincent and the Grenadines</option>
                        <option value="882">Samoa</option>
                        <option value="674">San Marino</option>
                        <option value="678">Sao Tome and Principe</option>
                        <option value="682">Saudi Arabia</option>
                        <option value="686">Senegal</option>
                        <option value="688">Serbia</option>
                        <option value="690">Seychelles</option>
                        <option value="694">Sierra Leone</option>
                        <option value="702">Singapore</option>
                        <option value="534">Sint Maarten (Dutch part)</option>
                        <option value="703">Slovakia</option>
                        <option value="705">Slovenia</option>
                        <option value="90">Solomon Islands</option>
                        <option value="706">Somalia</option>
                        <option value="710">South Africa</option>
                        <option value="239">South Georgia and the South Sandwich Islands</option>
                        <option value="728">South Sudan</option>
                        <option value="724">Spain</option>
                        <option value="144">Sri Lanka</option>
                        <option value="729">Sudan</option>
                        <option value="740">Suriname</option>
                        <option value="744">Svalbard and Jan Mayen</option>
                        <option value="748">Swaziland</option>
                        <option value="752">Sweden</option>
                        <option value="756">Switzerland</option>
                        <option value="760">Syrian Arab Republic</option>
                        <option value="158">Taiwan, Province of China</option>
                        <option value="762">Tajikistan</option>
                        <option value="834">Tanzania, United Republic of</option>
                        <option value="764">Thailand</option>
                        <option value="626">Timor-Leste</option>
                        <option value="768">Togo</option>
                        <option value="772">Tokelau</option>
                        <option value="776">Tonga</option>
                        <option value="780">Trinidad and Tobago</option>
                        <option value="788">Tunisia</option>
                        <option value="792">Turkey</option>
                        <option value="795">Turkmenistan</option>
                        <option value="796">Turks and Caicos Islands</option>
                        <option value="798">Tuvalu</option>
                        <option value="800">Uganda</option>
                        <option value="804">Ukraine</option>
                        <option value="784">United Arab Emirates</option>
                        <option value="826">United Kingdom</option>
                        <option value="840">United States</option>
                        <option value="581">United States Minor Outlying Islands</option>
                        <option value="858">Uruguay</option>
                        <option value="860">Uzbekistan</option>
                        <option value="548">Vanuatu</option>
                        <option value="862">Venezuela, Bolivarian Republic of</option>
                        <option value="704">Viet Nam</option>
                        <option value="92">Virgin Islands, British</option>
                        <option value="850">Virgin Islands, U.S.</option>
                        <option value="876">Wallis and Futuna</option>
                        <option value="732">Western Sahara</option>
                        <option value="887">Yemen</option>
                        <option value="894">Zambia</option>
                        <option value="716">Zimbabwe</option>
                      </select>
                    </div>
              </div>


                      <h4 class="col-md-12" style="font-weight:bolder;">Parents Details</h4>
                      <hr>
                      <div class="form-group col-md-12">
                            <label>Father's Name</label>
                            <input type="text" class="form-control" name="stu_father_name" placeholder="First Middle Last" required="true">
                            <div class="invalid-feedback">Enter valid name</div>
                      </div>
                      <div class="form-group col-md-12">
                            <label>Father's Number</label>
                            <input type="text" class="form-control" name="stu_father_number" placeholder="Enter 10 digit number">
                            <div class="invalid-feedback">Enter valid number</div>
                      </div>
                      <div class="form-group col-md-12">
                            <label> Enter Father's Email-id</label>
                            <input type="email" class="form-control" name="stu_father_email" placeholder="Eg : abcd@amail.com">
                            <div class="invalid-feedback">Enter valid email</div>
                      </div>
                      <div class="form-group col-md-12">
                            <label>Mother's Name</label>
                            <input type="text" class="form-control" name="stu_mother_name" placeholder="First Middle Last" required="true">
                      </div>
                      <div class="form-group col-md-12">
                            <label>Mother's Number</label>
                            <input type="text" class="form-control" name="stu_mother_number" placeholder="Enter 10 digit number">
                            <div class="invalid-feedback">Enter valid number</div>
                      </div>
                      <div class="form-group col-md-12">
                            <label> Enter Mother's Email-id</label>
                            <input type="email" class="form-control" name="stu_mother_email" placeholder="Eg : abcd@amail.com">
                            <div class="invalid-feedback">Enter valid email</div>
                      </div>


                      <div class="form-group col-md-12">
                            <label>Upload your photo here:(Type: .jpg)</label>
                            <input type="file" class="form-control" name="stu_img" required="true">
                      </div>
                      
                      <input type="submit" id="stu_sub" value="submit">
            </form>
        </div>
    </div>
</div>

<?php
  require_once 'footer.php';
?>