@extends('layout/website')
@section('content')
<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <!-- Start banner_cotact_one -->
  <section class="pt_banner_inner banner_cotact_five" id="myNavbar">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="banner_title_inner margin-b-5">
            <h1 class="c-dark" data-aos="fade-up" data-aos-delay="0">
              {{ $page->name}}
            </h1>
            <p class="c-gray" data-aos="fade-up" data-aos-delay="100">
              {{$page->description}}
            </p>
            <div data-aos="fade-up" data-aos-delay="200">
              <a href="#contact"
                class="btn btn_lg_primary sweep_top sweep_letter bg-blue rounded-8 c-white margin-t-3">
                <div class="inside_item">
                  <span data-hover="Let's talk!">Let's talk!</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End. Banner -->

  <!-- Start section_contact_four -->
  <section class="section_contact_five margin-t-5 padding-py-12" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="title_sections_inner margin-b-6">
            <h2>Contact Us</h2>
            <p>{!!$page->content!!}</p>
          </div>
          <div class="form_cc_four">
            <form action="" class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" class="form-control" placeholder="ex. john@mail.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control" placeholder="ex. John Doe">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Select Country <span class="c-gray font-s-13">(Optional)</span></label>
                  <select class="form-control custom-select" name="country">
                    <option>Please Select</option>
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
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                    </option>
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
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of
                    </option>
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
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav
                      Republic of</option>
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
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South
                      Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
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
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                    </option>
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
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Select a Subject</label>
                  <select class="form-control custom-select">
                    <option>Please Select</option>
                    <option>Purchase</option>
                    <option>Support</option>
                    <option>Technique</option>
                    <option>Service Request</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Message</label>
                  <textarea class="form-control" rows="7"
                    placeholder="Tell us more about your project, needs, and timeline."></textarea>
                </div>
              </div>

              <div class="col-12 d-md-flex justify-content-between margin-t-2">
                <div class="item_upload mb-3 mb-md-0">
                  <div class="upload__file">
                    <input type="file">
                    <button type="button" class="btn btn_md_primary">
                      <i class="tio attachment"></i>
                      Attach File
                    </button>
                  </div>
                  <span class="my-auto">Maximum size: 12 MB</span>
                </div>
                <a href="" class="btn btn_md_primary bg-blue rounded-8 c-white h-fit-content">
                  Request Order
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End. section_contact_four -->

  <!-- Start sec__office_location -->
  <section class="sec__office_location with_map_office padding-t-15 padding-b-12">
    <div class="container">
      <div class="office_location_icon">
        <div class="row justify-content-lg-center">

          <div class="col-lg-4">
            <div class="block_map_locat" data-aos="fade-up" data-aos-delay="0">

              <div class="google_map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26371661.85956456!2d-113.72360706725829!3d36.21040627051876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1576137923429!5m2!1sen!2s"
                  width="100%" height="170" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>

              <div class="block_loaction">
                <div class="item_locat">
                  <h3>HQ - San Mateo, CA</h3>
                  <p class="add_ress">
                    2950 S. Delaware Street, Suite 201
                    San Mateo CA 94403
                  </p>

                  <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                    <g id="golden-gate-bridge" transform="translate(-1 -1)">
                      <path id="Path_1651" data-name="Path 1651"
                        d="M27,6c-.034,0-.066.009-.1.01a5,5,0,0,0-9.8,0c-.034,0-.066-.01-.1-.01a3,3,0,1,0,2.143,5.1,4.962,4.962,0,0,0,5.714,0A3,3,0,1,0,27,6Z"
                        fill="#58d5d3" opacity="0.15" />
                      <path id="Path_1652" data-name="Path 1652"
                        d="M47,10c-.034,0-.066.009-.1.01a5,5,0,0,0-9.8,0c-.034,0-.066-.01-.1-.01a3,3,0,1,0,2.143,5.1,4.962,4.962,0,0,0,5.714,0A3,3,0,1,0,47,10Z"
                        fill="#58d5d3" opacity="0.15" />
                      <g id="Group_6447" data-name="Group 6447">
                        <path id="Path_1653" data-name="Path 1653"
                          d="M1,44H3v3a1,1,0,0,0,1,1H5v9H4a1,1,0,0,0-1,1v3H1v2H63V61H61V58a1,1,0,0,0-1-1H59V48h1a1,1,0,0,0,1-1V44h2V42H1Zm51,4h1v9H52a1,1,0,0,0-1,1v3H13V58a1,1,0,0,0-1-1H11V48h1a1,1,0,0,0,1-1V44H51v3A1,1,0,0,0,52,48ZM11,46H5V44h6ZM7,48H9v9H7ZM5,59h6v2H5Zm48,2V59h6v2Zm4-4H55V48h2Zm2-11H53V44h6Z"
                          fill="#58d5d3" />
                        <path id="Path_1654" data-name="Path 1654"
                          d="M59,4a3,3,0,0,0-6,0V9A21,21,0,0,1,11,9V4A3,3,0,0,0,5,4V38H1v2H63V38H59ZM57,25H55V17h2Zm-2,2h2V38H55ZM56,3a1,1,0,0,1,1,1V5H55V4A1,1,0,0,1,56,3ZM55,7h2v8H55ZM53,38H51V21.944a23.018,23.018,0,0,0,2-3.581ZM49,24.476V38H45V27.96A23.151,23.151,0,0,0,49,24.476Zm-22,6.97a22.9,22.9,0,0,0,4,.529V38H27ZM25,38H21V29.194a22.923,22.923,0,0,0,4,1.714Zm8-6.025a22.9,22.9,0,0,0,4-.529V38H33Zm6-1.068a22.847,22.847,0,0,0,4-1.714V38H39ZM19,27.96V38H15V24.476A23.151,23.151,0,0,0,19,27.96Zm-6-6.016V38H11V18.363A22.927,22.927,0,0,0,13,21.944ZM9,25H7V17H9ZM9,15H7V7H9ZM8,3A1,1,0,0,1,9,4V5H7V4A1,1,0,0,1,8,3ZM7,38V27H9V38Z"
                          fill="#58d5d3" />
                        <path id="Path_1655" data-name="Path 1655"
                          d="M19.232,12.318a6.041,6.041,0,0,0,5.535,0A3.96,3.96,0,0,0,27,13a4,4,0,0,0,.677-7.942,6,6,0,0,0-11.354,0A4,4,0,0,0,17,13,3.954,3.954,0,0,0,19.232,12.318ZM15,9a1.994,1.994,0,0,1,1.913-2.005c.037.005.12.013.158.015a1.01,1.01,0,0,0,1.009-.8,4,4,0,0,1,7.84,0,1,1,0,0,0,.98.8A1.211,1.211,0,0,0,27.04,7a2,2,0,1,1-1.469,3.4,1,1,0,0,0-1.287-.12,4.028,4.028,0,0,1-4.568,0,1,1,0,0,0-1.287.12A2,2,0,0,1,15,9Z"
                          fill="#58d5d3" />
                        <path id="Path_1656" data-name="Path 1656"
                          d="M39.232,16.318a6.041,6.041,0,0,0,5.535,0A3.96,3.96,0,0,0,47,17a4,4,0,0,0,.677-7.942,6,6,0,0,0-11.354,0A4,4,0,0,0,37,17,3.954,3.954,0,0,0,39.232,16.318ZM35,13A1.994,1.994,0,0,1,36.913,11c.037.005.121.013.158.015a1.03,1.03,0,0,0,1.009-.8,4,4,0,0,1,7.84,0,1,1,0,0,0,.98.8,1.225,1.225,0,0,0,.14-.01,2,2,0,1,1-1.469,3.4,1,1,0,0,0-1.287-.12,4.028,4.028,0,0,1-4.568,0,1,1,0,0,0-1.287.12A2,2,0,0,1,35,13Z"
                          fill="#58d5d3" />
                        <path id="Path_1657" data-name="Path 1657"
                          d="M40,50a3,3,0,0,1-3-3H35a3,3,0,0,1-6,0H27a3,3,0,0,1-6,0H19a4.985,4.985,0,0,0,9,2.969,4.954,4.954,0,0,0,8,0A4.985,4.985,0,0,0,45,47H43A3,3,0,0,1,40,50Z"
                          fill="#58d5d3" />
                        <path id="Path_1658" data-name="Path 1658"
                          d="M40,57a3,3,0,0,1-3-3H35a3,3,0,0,1-6,0H27a3,3,0,0,1-6,0H19a4.985,4.985,0,0,0,9,2.969,4.954,4.954,0,0,0,8,0A4.985,4.985,0,0,0,45,54H43A3,3,0,0,1,40,57Z"
                          fill="#58d5d3" />
                      </g>
                    </g>
                  </svg>


                  <div class="availability">
                    <span>Availability</span>
                    <p>(Mon-Fri) 9AM to 5PM PST</p>
                  </div>
                  <div class="availability mb-0">
                    <span>General enquiries</span>
                    <a href="tel:+1 002 297 0112" class="c-blue">+1 002 297 0112</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mx-auto">
            <div class="block_loaction" data-aos="fade-up" data-aos-delay="100">
              <div class="title">
                London, UK
              </div>
              <div class="item_locat">
                <p class="add_ress">WeWork, 26 Hatton Garden,
                  London, EC1N 8BR
                </p>

                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                  <g id="england" transform="translate(-1 -1)">
                    <path id="Path_1634" data-name="Path 1634" d="M24,28H40v4H24Z" fill="#fd6b3b"
                      opacity="0.15" />
                    <circle id="Ellipse_231" data-name="Ellipse 231" cx="4" cy="4" r="4"
                      transform="translate(28 38)" fill="#fd6b3b" opacity="0.15" />
                    <g id="Group_6444" data-name="Group 6444">
                      <path id="Path_1635" data-name="Path 1635"
                        d="M27,42a5,5,0,1,0,5-5A5.006,5.006,0,0,0,27,42Zm5-3a3,3,0,1,1-3,3A3,3,0,0,1,32,39Z"
                        fill="#fd6b3b" />
                      <path id="Path_1636" data-name="Path 1636"
                        d="M41,48.816A3,3,0,0,0,43,46V38a3,3,0,0,0-2-2.816V21H39v4l-1.2-1.6A1,1,0,0,0,37,23V14H35v2.63A17.348,17.348,0,0,1,33.184,11H35V9H33.017c0-.062-.007-.125-.008-.187A2.983,2.983,0,0,0,33,3.184V1H31V3.184a2.983,2.983,0,0,0-.009,5.629c0,.062-.007.125-.008.187H29v2h1.816A17.348,17.348,0,0,1,29,16.63V14H27v9a1,1,0,0,0-.8.4L25,25V21H23V35.184A3,3,0,0,0,21,38v8a3,3,0,0,0,2,2.816V61H1v2H63V61H41ZM27,51v2H25V49H39v4H37V51H35v2H33V51H31v2H29V51Zm4,4v6H29V55Zm2,0h2v6H33Zm4,0h2v6H37ZM25,29H39v2H25Zm0,4H39v2H25Zm9.067-14H29.932A19.3,19.3,0,0,0,32,14.676,19.393,19.393,0,0,0,34.067,19ZM32,5a1,1,0,1,1-1,1A1,1,0,0,1,32,5ZM29,21h6v2H29Zm-1.5,4h9L38,27H26ZM23,38a1,1,0,0,1,1-1H40a1,1,0,0,1,1,1v8a1,1,0,0,1-1,1H24a1,1,0,0,1-1-1Zm2,17h2v6H25Z"
                        fill="#fd6b3b" />
                      <path id="Path_1637" data-name="Path 1637"
                        d="M7.232,44.318a6.035,6.035,0,0,0,5.535,0A3.96,3.96,0,0,0,15,45a4,4,0,0,0,.677-7.942,6,6,0,0,0-11.354,0A4,4,0,0,0,5,45a3.954,3.954,0,0,0,2.232-.682ZM3,41a1.994,1.994,0,0,1,1.913-2.005c.037.005.12.013.157.015a1.022,1.022,0,0,0,1.01-.8,4,4,0,0,1,7.84,0,1,1,0,0,0,.98.8,1.225,1.225,0,0,0,.14-.01A2,2,0,0,1,15,43a1.982,1.982,0,0,1-1.428-.6,1,1,0,0,0-1.288-.12,4.028,4.028,0,0,1-4.568,0,1,1,0,0,0-1.288.12A1.982,1.982,0,0,1,5,43a2,2,0,0,1-2-2Z"
                        fill="#fd6b3b" />
                      <path id="Path_1638" data-name="Path 1638"
                        d="M59.677,15.058a6,6,0,0,0-11.354,0A4,4,0,0,0,49,23a3.954,3.954,0,0,0,2.232-.682,6.035,6.035,0,0,0,5.535,0A3.96,3.96,0,0,0,59,23a4,4,0,0,0,.677-7.942ZM59,21a1.982,1.982,0,0,1-1.428-.6,1,1,0,0,0-1.288-.12,4.028,4.028,0,0,1-4.568,0,1,1,0,0,0-1.288.12A1.982,1.982,0,0,1,49,21a2,2,0,0,1-.087-4.005c.037,0,.12.013.157.015a1.026,1.026,0,0,0,1.01-.8,4,4,0,0,1,7.84,0,1,1,0,0,0,.98.8c.034,0,.083,0,.14-.01A2,2,0,0,1,59,21Z"
                        fill="#fd6b3b" />
                    </g>
                  </g>
                </svg>

                <div class="availability">
                  <span>Availability</span>
                  <p>(Mon-Fri) 9AM to 5PM PST</p>
                </div>
                <div class="availability mb-0">
                  <span>General enquiries</span>
                  <a href="tel:+1 002 297 0112" class="c-blue">+1 002 297 0112</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block_loaction" data-aos="fade-up" data-aos-delay="200">
              <div class="title">
                Paris, France
              </div>
              <div class="item_locat">
                <p class="add_ress">
                  WeWork, 92 Av. des Champs-Élysées, 75008 Paris, France
                </p>

                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                  <g id="france" transform="translate(-1 -1)">
                    <path id="Path_1639" data-name="Path 1639" d="M18,44H46v4H18Z" fill="#6c45f3"
                      opacity="0.15" />
                    <path id="Path_1640" data-name="Path 1640" d="M22,34H42v4H22Z" fill="#6c45f3"
                      opacity="0.15" />
                    <g id="Group_6445" data-name="Group 6445">
                      <path id="Path_1641" data-name="Path 1641"
                        d="M63,52a5,5,0,1,0-6,4.9V61H52.484a67.143,67.143,0,0,1-7.941-12H46a1,1,0,0,0,1-1V44a1,1,0,0,0-1-1H41.783c-.524-1.314-1-2.652-1.444-4H42a1,1,0,0,0,1-1V34a1,1,0,0,0-1-1H38.669A67.161,67.161,0,0,1,37,18.16V10a1,1,0,0,0-1-1H35V6a1,1,0,0,0-1-1H33V1H31V5H30a1,1,0,0,0-1,1V9H28a1,1,0,0,0-1,1v8.16A67.161,67.161,0,0,1,25.331,33H22a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h1.661c-.441,1.348-.92,2.685-1.444,4H18a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h1.482a67.082,67.082,0,0,1-7.957,12H7V56.9a5,5,0,1,0-2,0V61H1v2H63V61H59V56.9A5.009,5.009,0,0,0,63,52ZM3,52a3,3,0,1,1,4,2.816V51H5v3.816A3,3,0,0,1,3,52Zm36.642-9H36.721l-1.333-4h2.846C38.66,40.346,39.133,41.68,39.642,43Zm-6.363-4,1.333,4H29.387l1.333-4Zm1.742-19.393L33.414,18,35,16.414V18.16C35,18.643,35.011,19.125,35.021,19.607ZM32,16.586,30.414,15h3.172Zm-3-.172L30.586,18l-1.607,1.607c.01-.482.021-.964.021-1.447Zm-.262,7.738L30.586,26l-2.342,2.342q.311-2.087.494-4.19ZM29.414,22,32,19.414,34.586,22,32,24.586Zm5.848,2.152q.183,2.1.494,4.19L33.414,26ZM31,7h2V9H31Zm-2,4h6v2H29ZM27.639,31.775,32,27.414l4.361,4.361c.082.409.17.817.259,1.225H27.38C27.469,32.592,27.557,32.184,27.639,31.775ZM23,35H41v2H23Zm2.766,4h2.846l-1.333,4H24.358c.509-1.32.982-2.654,1.408-4ZM19,45H45v2H19Zm2.724,4h20.55a69.175,69.175,0,0,0,7.62,12H41V60a9,9,0,1,0-18,0v1H14.107a69.159,69.159,0,0,0,7.617-12ZM39,61H25V60a7,7,0,0,1,14,0Zm16-9a3,3,0,1,1,4,2.816V51H57v3.816A3,3,0,0,1,55,52Z"
                        fill="#6c45f3" />
                      <path id="Path_1642" data-name="Path 1642"
                        d="M7.232,32.318a6.041,6.041,0,0,0,5.535,0A3.96,3.96,0,0,0,15,33a4,4,0,0,0,.677-7.942,6,6,0,0,0-11.354,0A4,4,0,0,0,5,33a3.954,3.954,0,0,0,2.232-.682ZM3,29a1.994,1.994,0,0,1,1.913-2.005c.037,0,.12.013.158.015a1.018,1.018,0,0,0,1.009-.8,4,4,0,0,1,7.84,0,1,1,0,0,0,.98.8,1.225,1.225,0,0,0,.14-.01,2,2,0,1,1-1.469,3.4,1,1,0,0,0-1.287-.12,4.028,4.028,0,0,1-4.568,0,1,1,0,0,0-1.287.12A2,2,0,0,1,3,29Z"
                        fill="#6c45f3" />
                      <path id="Path_1643" data-name="Path 1643"
                        d="M59.677,25.058a6,6,0,0,0-11.354,0A4,4,0,0,0,49,33a3.954,3.954,0,0,0,2.232-.682,6.041,6.041,0,0,0,5.535,0A3.96,3.96,0,0,0,59,33a4,4,0,0,0,.677-7.942ZM59,31a1.99,1.99,0,0,1-1.429-.6,1,1,0,0,0-1.287-.12,4.028,4.028,0,0,1-4.568,0,1,1,0,0,0-1.287.12,2,2,0,1,1-1.516-3.4c.037,0,.121.013.158.015a1.014,1.014,0,0,0,1.009-.8,4,4,0,0,1,7.84,0,1,1,0,0,0,.98.8,1.211,1.211,0,0,0,.14-.01A2,2,0,0,1,59,31Z"
                        fill="#6c45f3" />
                    </g>
                  </g>
                </svg>

                <div class="availability">
                  <span>Availability</span>
                  <p>(Mon-Fri) 9AM to 5PM PST</p>
                </div>
                <div class="availability mb-0">
                  <span>General enquiries</span>
                  <a href="mailto:info@mail.com" class="c-blue">info@mail.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End. sec__office_location -->

</main>
@endsection