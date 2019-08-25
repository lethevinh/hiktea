@extends('layouts.page')
@section('title', "Thanh Toán")
@section('breadcrumb')
    <div class="bg_breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><span>Thanh Toán</span></li>
            </ul>
        </div>
    </div>
@stop
@section('content')
    <div id="content" class="col-sm-12">
        <div class="row">
            <form method="post" action="" name="checkout_form" id="checkout_form" enctype="multipart/form-data" class="form-horizontal">
                <div class="col-md-8 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> Địa chỉ nhận hàng </h3>
                        </div>
                        <div class="panel-body">
                            <!-- Apply for VN -->
                            <div class="form-group required">
                                <label class="control-label col-md-2" for="input-firstname">Tên đầy đủ</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fullname" id="input-firstname" value="" placeholder="Ví dụ: Nguyễn Văn A" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required">
                                        <label class="control-label col-sm-4" for="input-email">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" id="input-email" value="" placeholder="contact@yourdomain.com" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required">
                                        <label class="control-label col-sm-4" for="input-telephone">Điện thoại</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="telephone" id="input-telephone" value="" placeholder="Ví dụ: 01234567890" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required">
                                        <label class="control-label col-md-4" for="input-countryid">Quốc gia</label>
                                        <div class="col-md-8">
                                            <select name="country_id" id="input-countryid" class="form-control">
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua and Barbuda</option>
                                                <option value="10">Argentina</option>
                                                <option value="11">Armenia</option>
                                                <option value="12">Aruba</option>
                                                <option value="252">Ascension Island (British)</option>
                                                <option value="13">Australia</option>
                                                <option value="14">Austria</option>
                                                <option value="15">Azerbaijan</option>
                                                <option value="16">Bahamas</option>
                                                <option value="17">Bahrain</option>
                                                <option value="18">Bangladesh</option>
                                                <option value="19">Barbados</option>
                                                <option value="20">Belarus</option>
                                                <option value="21">Belgium</option>
                                                <option value="22">Belize</option>
                                                <option value="23">Benin</option>
                                                <option value="24">Bermuda</option>
                                                <option value="25">Bhutan</option>
                                                <option value="26">Bolivia</option>
                                                <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="27">Bosnia and Herzegovina</option>
                                                <option value="28">Botswana</option>
                                                <option value="29">Bouvet Island</option>
                                                <option value="30">Brazil</option>
                                                <option value="31">British Indian Ocean Territory</option>
                                                <option value="32">Brunei Darussalam</option>
                                                <option value="33">Bulgaria</option>
                                                <option value="34">Burkina Faso</option>
                                                <option value="35">Burundi</option>
                                                <option value="36">Cambodia</option>
                                                <option value="37">Cameroon</option>
                                                <option value="38">Canada</option>
                                                <option value="251">Canary Islands</option>
                                                <option value="39">Cape Verde</option>
                                                <option value="40">Cayman Islands</option>
                                                <option value="41">Central African Republic</option>
                                                <option value="42">Chad</option>
                                                <option value="43">Chile</option>
                                                <option value="44">China</option>
                                                <option value="45">Christmas Island</option>
                                                <option value="46">Cocos (Keeling) Islands</option>
                                                <option value="47">Colombia</option>
                                                <option value="48">Comoros</option>
                                                <option value="49">Congo</option>
                                                <option value="50">Cook Islands</option>
                                                <option value="51">Costa Rica</option>
                                                <option value="52">Cote D'Ivoire</option>
                                                <option value="53">Croatia</option>
                                                <option value="54">Cuba</option>
                                                <option value="246">Curacao</option>
                                                <option value="55">Cyprus</option>
                                                <option value="56">Czech Republic</option>
                                                <option value="237">Democratic Republic of Congo</option>
                                                <option value="57">Denmark</option>
                                                <option value="58">Djibouti</option>
                                                <option value="59">Dominica</option>
                                                <option value="60">Dominican Republic</option>
                                                <option value="61">East Timor</option>
                                                <option value="62">Ecuador</option>
                                                <option value="63">Egypt</option>
                                                <option value="64">El Salvador</option>
                                                <option value="65">Equatorial Guinea</option>
                                                <option value="66">Eritrea</option>
                                                <option value="67">Estonia</option>
                                                <option value="68">Ethiopia</option>
                                                <option value="69">Falkland Islands (Malvinas)</option>
                                                <option value="70">Faroe Islands</option>
                                                <option value="71">Fiji</option>
                                                <option value="72">Finland</option>
                                                <option value="74">France, Metropolitan</option>
                                                <option value="75">French Guiana</option>
                                                <option value="76">French Polynesia</option>
                                                <option value="77">French Southern Territories</option>
                                                <option value="126">FYROM</option>
                                                <option value="78">Gabon</option>
                                                <option value="79">Gambia</option>
                                                <option value="80">Georgia</option>
                                                <option value="81">Germany</option>
                                                <option value="82">Ghana</option>
                                                <option value="83">Gibraltar</option>
                                                <option value="84">Greece</option>
                                                <option value="85">Greenland</option>
                                                <option value="86">Grenada</option>
                                                <option value="87">Guadeloupe</option>
                                                <option value="88">Guam</option>
                                                <option value="89">Guatemala</option>
                                                <option value="256">Guernsey</option>
                                                <option value="90">Guinea</option>
                                                <option value="91">Guinea-Bissau</option>
                                                <option value="92">Guyana</option>
                                                <option value="93">Haiti</option>
                                                <option value="94">Heard and Mc Donald Islands</option>
                                                <option value="95">Honduras</option>
                                                <option value="96">Hong Kong</option>
                                                <option value="97">Hungary</option>
                                                <option value="98">Iceland</option>
                                                <option value="99">India</option>
                                                <option value="100">Indonesia</option>
                                                <option value="101">Iran (Islamic Republic of)</option>
                                                <option value="102">Iraq</option>
                                                <option value="103">Ireland</option>
                                                <option value="254">Isle of Man</option>
                                                <option value="104">Israel</option>
                                                <option value="105">Italy</option>
                                                <option value="106">Jamaica</option>
                                                <option value="107">Japan</option>
                                                <option value="257">Jersey</option>
                                                <option value="108">Jordan</option>
                                                <option value="109">Kazakhstan</option>
                                                <option value="110">Kenya</option>
                                                <option value="111">Kiribati</option>
                                                <option value="253">Kosovo, Republic of</option>
                                                <option value="114">Kuwait</option>
                                                <option value="115">Kyrgyzstan</option>
                                                <option value="116">Lao People's Democratic Republic</option>
                                                <option value="117">Latvia</option>
                                                <option value="118">Lebanon</option>
                                                <option value="119">Lesotho</option>
                                                <option value="120">Liberia</option>
                                                <option value="121">Libyan Arab Jamahiriya</option>
                                                <option value="122">Liechtenstein</option>
                                                <option value="123">Lithuania</option>
                                                <option value="124">Luxembourg</option>
                                                <option value="125">Macau</option>
                                                <option value="127">Madagascar</option>
                                                <option value="128">Malawi</option>
                                                <option value="129">Malaysia</option>
                                                <option value="130">Maldives</option>
                                                <option value="131">Mali</option>
                                                <option value="132">Malta</option>
                                                <option value="133">Marshall Islands</option>
                                                <option value="134">Martinique</option>
                                                <option value="135">Mauritania</option>
                                                <option value="136">Mauritius</option>
                                                <option value="137">Mayotte</option>
                                                <option value="138">Mexico</option>
                                                <option value="139">Micronesia, Federated States of</option>
                                                <option value="140">Moldova, Republic of</option>
                                                <option value="141">Monaco</option>
                                                <option value="142">Mongolia</option>
                                                <option value="242">Montenegro</option>
                                                <option value="143">Montserrat</option>
                                                <option value="144">Morocco</option>
                                                <option value="145">Mozambique</option>
                                                <option value="146">Myanmar</option>
                                                <option value="147">Namibia</option>
                                                <option value="148">Nauru</option>
                                                <option value="149">Nepal</option>
                                                <option value="150">Netherlands</option>
                                                <option value="151">Netherlands Antilles</option>
                                                <option value="152">New Caledonia</option>
                                                <option value="153">New Zealand</option>
                                                <option value="154">Nicaragua</option>
                                                <option value="155">Niger</option>
                                                <option value="156">Nigeria</option>
                                                <option value="157">Niue</option>
                                                <option value="158">Norfolk Island</option>
                                                <option value="112">North Korea</option>
                                                <option value="159">Northern Mariana Islands</option>
                                                <option value="160">Norway</option>
                                                <option value="161">Oman</option>
                                                <option value="162">Pakistan</option>
                                                <option value="163">Palau</option>
                                                <option value="247">Palestinian Territory, Occupied</option>
                                                <option value="164">Panama</option>
                                                <option value="165">Papua New Guinea</option>
                                                <option value="166">Paraguay</option>
                                                <option value="167">Peru</option>
                                                <option value="168">Philippines</option>
                                                <option value="169">Pitcairn</option>
                                                <option value="170">Poland</option>
                                                <option value="171">Portugal</option>
                                                <option value="172">Puerto Rico</option>
                                                <option value="173">Qatar</option>
                                                <option value="174">Reunion</option>
                                                <option value="175">Romania</option>
                                                <option value="176">Russian Federation</option>
                                                <option value="177">Rwanda</option>
                                                <option value="178">Saint Kitts and Nevis</option>
                                                <option value="179">Saint Lucia</option>
                                                <option value="180">Saint Vincent and the Grenadines</option>
                                                <option value="181">Samoa</option>
                                                <option value="182">San Marino</option>
                                                <option value="183">Sao Tome and Principe</option>
                                                <option value="184">Saudi Arabia</option>
                                                <option value="185">Senegal</option>
                                                <option value="243">Serbia</option>
                                                <option value="186">Seychelles</option>
                                                <option value="187">Sierra Leone</option>
                                                <option value="188">Singapore</option>
                                                <option value="189">Slovak Republic</option>
                                                <option value="190">Slovenia</option>
                                                <option value="191">Solomon Islands</option>
                                                <option value="192">Somalia</option>
                                                <option value="193">South Africa</option>
                                                <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                                <option value="113">South Korea</option>
                                                <option value="248">South Sudan</option>
                                                <option value="195">Spain</option>
                                                <option value="196">Sri Lanka</option>
                                                <option value="249">St. Barthelemy</option>
                                                <option value="197">St. Helena</option>
                                                <option value="250">St. Martin (French part)</option>
                                                <option value="198">St. Pierre and Miquelon</option>
                                                <option value="199">Sudan</option>
                                                <option value="200">Suriname</option>
                                                <option value="201">Svalbard and Jan Mayen Islands</option>
                                                <option value="202">Swaziland</option>
                                                <option value="203">Sweden</option>
                                                <option value="204">Switzerland</option>
                                                <option value="205">Syrian Arab Republic</option>
                                                <option value="206">Taiwan</option>
                                                <option value="207">Tajikistan</option>
                                                <option value="208">Tanzania, United Republic of</option>
                                                <option value="209">Thailand</option>
                                                <option value="210">Togo</option>
                                                <option value="211">Tokelau</option>
                                                <option value="212">Tonga</option>
                                                <option value="213">Trinidad and Tobago</option>
                                                <option value="255">Tristan da Cunha</option>
                                                <option value="214">Tunisia</option>
                                                <option value="215">Turkey</option>
                                                <option value="216">Turkmenistan</option>
                                                <option value="217">Turks and Caicos Islands</option>
                                                <option value="218">Tuvalu</option>
                                                <option value="219">Uganda</option>
                                                <option value="220">Ukraine</option>
                                                <option value="221">United Arab Emirates</option>
                                                <option value="222">United Kingdom</option>
                                                <option value="223">United States</option>
                                                <option value="224">United States Minor Outlying Islands</option>
                                                <option value="225">Uruguay</option>
                                                <option value="226">Uzbekistan</option>
                                                <option value="227">Vanuatu</option>
                                                <option value="228">Vatican City State (Holy See)</option>
                                                <option value="229">Venezuela</option>
                                                <option value="230" selected="selected">Việt Nam</option>
                                                <option value="231">Virgin Islands (British)</option>
                                                <option value="232">Virgin Islands (U.S.)</option>
                                                <option value="233">Wallis and Futuna Islands</option>
                                                <option value="234">Western Sahara</option>
                                                <option value="235">Yemen</option>
                                                <option value="238">Zambia</option>
                                                <option value="239">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required">
                                        <label class="control-label col-md-4" for="input-zoneid" id="label-zone">Tỉnh / TP</label>
                                        <div class="col-md-8">
                                                    <span id="load-ajax-zone">
                                                        <select name="zone_id" id="input-zoneid" class="form-control"></select>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group required">
                                        <label class="control-label col-md-4" for="input-address">Quận / Huyện</label>
                                        <div class="col-sm-8">
                                                    <span id="load-ajax-ward">
                                                        <select name="ward_id" id="input-wardid" onchange="loadListShipping()" class="form-control"></select>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group required">
                                        <label class="control-label col-md-4" for="input-address">Địa chỉ chi tiết</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="address_1" value="" id="input-address" placeholder="Ví dụ: Số 247, Cầu Giấy, Q. Cầu Giấy" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="input-zoneid" id="label-zone">Lời nhắn</label>
                                <div class="col-sm-10">
                                    <textarea name="comment" id="input-comment" rows="3" class="form-control" placeholder="Ví dụ: Chuyển hàng ngoài giờ hành chính"></textarea>
                                </div>
                            </div>
                            <hr />
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="adr-oms checkbox">
                                        <input type="checkbox" name="same_info_as_buyer_toggle" id="is-delivery-address" onclick="showHideDeliveryAddress()" checked />
                                        <label for="is-delivery-address"><strong>Địa chỉ nhận hàng và thanh toán giống nhau</strong></label>
                                    </div>
                                </div>
                            </div>
                            <div id="container-form-address-ship">
                                <h4>Thông tin thanh toán</h4>
                                <!-- Apply for VN -->
                                <div class="form-group required">
                                    <label class="control-label col-md-2" for="input-payment-firstname">Tên đầy đủ</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="payment_firstname" id="input-payment-firstname" value="" placeholder="Ví dụ: Nguyễn Văn A" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="control-label col-md-2" for="input-payment-telephone">Điện thoại</label>
                                    <div class="col-md-4">
                                        <input type="text" name="payment_telephone" id="input-payment-telephone" value="" placeholder="Ví dụ: 01234567890" class="form-control" />
                                    </div>
                                    <label class="control-label col-md-2" for="input-payment-email">Email</label>
                                    <div class="col-md-4">
                                        <input type="email" name="payment_email" id="input-payment-email" value="" placeholder="contact@yourdomain.com" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="control-label col-md-2" for="input-countryid">Quốc gia</label>
                                    <div class="col-md-4">
                                        <select name="payment_country_id" id="input-payment-countryid" class="form-control">
                                            <option value="244">Aaland Islands</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Albania</option>
                                            <option value="3">Algeria</option>
                                            <option value="4">American Samoa</option>
                                            <option value="5">Andorra</option>
                                            <option value="6">Angola</option>
                                            <option value="7">Anguilla</option>
                                            <option value="8">Antarctica</option>
                                            <option value="9">Antigua and Barbuda</option>
                                            <option value="10">Argentina</option>
                                            <option value="11">Armenia</option>
                                            <option value="12">Aruba</option>
                                            <option value="252">Ascension Island (British)</option>
                                            <option value="13">Australia</option>
                                            <option value="14">Austria</option>
                                            <option value="15">Azerbaijan</option>
                                            <option value="16">Bahamas</option>
                                            <option value="17">Bahrain</option>
                                            <option value="18">Bangladesh</option>
                                            <option value="19">Barbados</option>
                                            <option value="20">Belarus</option>
                                            <option value="21">Belgium</option>
                                            <option value="22">Belize</option>
                                            <option value="23">Benin</option>
                                            <option value="24">Bermuda</option>
                                            <option value="25">Bhutan</option>
                                            <option value="26">Bolivia</option>
                                            <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="27">Bosnia and Herzegovina</option>
                                            <option value="28">Botswana</option>
                                            <option value="29">Bouvet Island</option>
                                            <option value="30">Brazil</option>
                                            <option value="31">British Indian Ocean Territory</option>
                                            <option value="32">Brunei Darussalam</option>
                                            <option value="33">Bulgaria</option>
                                            <option value="34">Burkina Faso</option>
                                            <option value="35">Burundi</option>
                                            <option value="36">Cambodia</option>
                                            <option value="37">Cameroon</option>
                                            <option value="38">Canada</option>
                                            <option value="251">Canary Islands</option>
                                            <option value="39">Cape Verde</option>
                                            <option value="40">Cayman Islands</option>
                                            <option value="41">Central African Republic</option>
                                            <option value="42">Chad</option>
                                            <option value="43">Chile</option>
                                            <option value="44">China</option>
                                            <option value="45">Christmas Island</option>
                                            <option value="46">Cocos (Keeling) Islands</option>
                                            <option value="47">Colombia</option>
                                            <option value="48">Comoros</option>
                                            <option value="49">Congo</option>
                                            <option value="50">Cook Islands</option>
                                            <option value="51">Costa Rica</option>
                                            <option value="52">Cote D'Ivoire</option>
                                            <option value="53">Croatia</option>
                                            <option value="54">Cuba</option>
                                            <option value="246">Curacao</option>
                                            <option value="55">Cyprus</option>
                                            <option value="56">Czech Republic</option>
                                            <option value="237">Democratic Republic of Congo</option>
                                            <option value="57">Denmark</option>
                                            <option value="58">Djibouti</option>
                                            <option value="59">Dominica</option>
                                            <option value="60">Dominican Republic</option>
                                            <option value="61">East Timor</option>
                                            <option value="62">Ecuador</option>
                                            <option value="63">Egypt</option>
                                            <option value="64">El Salvador</option>
                                            <option value="65">Equatorial Guinea</option>
                                            <option value="66">Eritrea</option>
                                            <option value="67">Estonia</option>
                                            <option value="68">Ethiopia</option>
                                            <option value="69">Falkland Islands (Malvinas)</option>
                                            <option value="70">Faroe Islands</option>
                                            <option value="71">Fiji</option>
                                            <option value="72">Finland</option>
                                            <option value="74">France, Metropolitan</option>
                                            <option value="75">French Guiana</option>
                                            <option value="76">French Polynesia</option>
                                            <option value="77">French Southern Territories</option>
                                            <option value="126">FYROM</option>
                                            <option value="78">Gabon</option>
                                            <option value="79">Gambia</option>
                                            <option value="80">Georgia</option>
                                            <option value="81">Germany</option>
                                            <option value="82">Ghana</option>
                                            <option value="83">Gibraltar</option>
                                            <option value="84">Greece</option>
                                            <option value="85">Greenland</option>
                                            <option value="86">Grenada</option>
                                            <option value="87">Guadeloupe</option>
                                            <option value="88">Guam</option>
                                            <option value="89">Guatemala</option>
                                            <option value="256">Guernsey</option>
                                            <option value="90">Guinea</option>
                                            <option value="91">Guinea-Bissau</option>
                                            <option value="92">Guyana</option>
                                            <option value="93">Haiti</option>
                                            <option value="94">Heard and Mc Donald Islands</option>
                                            <option value="95">Honduras</option>
                                            <option value="96">Hong Kong</option>
                                            <option value="97">Hungary</option>
                                            <option value="98">Iceland</option>
                                            <option value="99">India</option>
                                            <option value="100">Indonesia</option>
                                            <option value="101">Iran (Islamic Republic of)</option>
                                            <option value="102">Iraq</option>
                                            <option value="103">Ireland</option>
                                            <option value="254">Isle of Man</option>
                                            <option value="104">Israel</option>
                                            <option value="105">Italy</option>
                                            <option value="106">Jamaica</option>
                                            <option value="107">Japan</option>
                                            <option value="257">Jersey</option>
                                            <option value="108">Jordan</option>
                                            <option value="109">Kazakhstan</option>
                                            <option value="110">Kenya</option>
                                            <option value="111">Kiribati</option>
                                            <option value="253">Kosovo, Republic of</option>
                                            <option value="114">Kuwait</option>
                                            <option value="115">Kyrgyzstan</option>
                                            <option value="116">Lao People's Democratic Republic</option>
                                            <option value="117">Latvia</option>
                                            <option value="118">Lebanon</option>
                                            <option value="119">Lesotho</option>
                                            <option value="120">Liberia</option>
                                            <option value="121">Libyan Arab Jamahiriya</option>
                                            <option value="122">Liechtenstein</option>
                                            <option value="123">Lithuania</option>
                                            <option value="124">Luxembourg</option>
                                            <option value="125">Macau</option>
                                            <option value="127">Madagascar</option>
                                            <option value="128">Malawi</option>
                                            <option value="129">Malaysia</option>
                                            <option value="130">Maldives</option>
                                            <option value="131">Mali</option>
                                            <option value="132">Malta</option>
                                            <option value="133">Marshall Islands</option>
                                            <option value="134">Martinique</option>
                                            <option value="135">Mauritania</option>
                                            <option value="136">Mauritius</option>
                                            <option value="137">Mayotte</option>
                                            <option value="138">Mexico</option>
                                            <option value="139">Micronesia, Federated States of</option>
                                            <option value="140">Moldova, Republic of</option>
                                            <option value="141">Monaco</option>
                                            <option value="142">Mongolia</option>
                                            <option value="242">Montenegro</option>
                                            <option value="143">Montserrat</option>
                                            <option value="144">Morocco</option>
                                            <option value="145">Mozambique</option>
                                            <option value="146">Myanmar</option>
                                            <option value="147">Namibia</option>
                                            <option value="148">Nauru</option>
                                            <option value="149">Nepal</option>
                                            <option value="150">Netherlands</option>
                                            <option value="151">Netherlands Antilles</option>
                                            <option value="152">New Caledonia</option>
                                            <option value="153">New Zealand</option>
                                            <option value="154">Nicaragua</option>
                                            <option value="155">Niger</option>
                                            <option value="156">Nigeria</option>
                                            <option value="157">Niue</option>
                                            <option value="158">Norfolk Island</option>
                                            <option value="112">North Korea</option>
                                            <option value="159">Northern Mariana Islands</option>
                                            <option value="160">Norway</option>
                                            <option value="161">Oman</option>
                                            <option value="162">Pakistan</option>
                                            <option value="163">Palau</option>
                                            <option value="247">Palestinian Territory, Occupied</option>
                                            <option value="164">Panama</option>
                                            <option value="165">Papua New Guinea</option>
                                            <option value="166">Paraguay</option>
                                            <option value="167">Peru</option>
                                            <option value="168">Philippines</option>
                                            <option value="169">Pitcairn</option>
                                            <option value="170">Poland</option>
                                            <option value="171">Portugal</option>
                                            <option value="172">Puerto Rico</option>
                                            <option value="173">Qatar</option>
                                            <option value="174">Reunion</option>
                                            <option value="175">Romania</option>
                                            <option value="176">Russian Federation</option>
                                            <option value="177">Rwanda</option>
                                            <option value="178">Saint Kitts and Nevis</option>
                                            <option value="179">Saint Lucia</option>
                                            <option value="180">Saint Vincent and the Grenadines</option>
                                            <option value="181">Samoa</option>
                                            <option value="182">San Marino</option>
                                            <option value="183">Sao Tome and Principe</option>
                                            <option value="184">Saudi Arabia</option>
                                            <option value="185">Senegal</option>
                                            <option value="243">Serbia</option>
                                            <option value="186">Seychelles</option>
                                            <option value="187">Sierra Leone</option>
                                            <option value="188">Singapore</option>
                                            <option value="189">Slovak Republic</option>
                                            <option value="190">Slovenia</option>
                                            <option value="191">Solomon Islands</option>
                                            <option value="192">Somalia</option>
                                            <option value="193">South Africa</option>
                                            <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                            <option value="113">South Korea</option>
                                            <option value="248">South Sudan</option>
                                            <option value="195">Spain</option>
                                            <option value="196">Sri Lanka</option>
                                            <option value="249">St. Barthelemy</option>
                                            <option value="197">St. Helena</option>
                                            <option value="250">St. Martin (French part)</option>
                                            <option value="198">St. Pierre and Miquelon</option>
                                            <option value="199">Sudan</option>
                                            <option value="200">Suriname</option>
                                            <option value="201">Svalbard and Jan Mayen Islands</option>
                                            <option value="202">Swaziland</option>
                                            <option value="203">Sweden</option>
                                            <option value="204">Switzerland</option>
                                            <option value="205">Syrian Arab Republic</option>
                                            <option value="206">Taiwan</option>
                                            <option value="207">Tajikistan</option>
                                            <option value="208">Tanzania, United Republic of</option>
                                            <option value="209">Thailand</option>
                                            <option value="210">Togo</option>
                                            <option value="211">Tokelau</option>
                                            <option value="212">Tonga</option>
                                            <option value="213">Trinidad and Tobago</option>
                                            <option value="255">Tristan da Cunha</option>
                                            <option value="214">Tunisia</option>
                                            <option value="215">Turkey</option>
                                            <option value="216">Turkmenistan</option>
                                            <option value="217">Turks and Caicos Islands</option>
                                            <option value="218">Tuvalu</option>
                                            <option value="219">Uganda</option>
                                            <option value="220">Ukraine</option>
                                            <option value="221">United Arab Emirates</option>
                                            <option value="222">United Kingdom</option>
                                            <option value="223">United States</option>
                                            <option value="224">United States Minor Outlying Islands</option>
                                            <option value="225">Uruguay</option>
                                            <option value="226">Uzbekistan</option>
                                            <option value="227">Vanuatu</option>
                                            <option value="228">Vatican City State (Holy See)</option>
                                            <option value="229">Venezuela</option>
                                            <option value="230" selected="selected">Việt Nam</option>
                                            <option value="231">Virgin Islands (British)</option>
                                            <option value="232">Virgin Islands (U.S.)</option>
                                            <option value="233">Wallis and Futuna Islands</option>
                                            <option value="234">Western Sahara</option>
                                            <option value="235">Yemen</option>
                                            <option value="238">Zambia</option>
                                            <option value="239">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <label class="control-label col-md-2" for="input-payment-zoneid" id="label-payment-zone">Tỉnh / TP</label>
                                    <div class="col-md-4">
                                                <span id="load-ajax-payment-zone">
                                                    <select name="payment_zone_id" id="input-payment-zoneid" class="form-control"></select>
                                                </span>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="control-label col-md-2" for="input-payment-address">Địa chỉ chi tiết</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="payment_address_1" value="" id="input-payment-address" placeholder="Ví dụ: Số 247, Cầu Giấy, Q. Cầu Giấy" class="form-control" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="adr-oms checkbox">
                                            <input type="checkbox" name="update_address" id="update-address" checked />&nbsp;&nbsp;<label for="update-address">Cập nhật thông tin trên làm địa chỉ hiện tại của tôi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-credit-card" aria-hidden="true"></i> Phương thức thanh toán </h3>
                        </div>
                        <div class="panel-body" id="form_payment_method">
                            <div class="group">
                                <div class="adr-oms radio select-method">
                                    <input type="radio" id="payment-method-bank_transfer" name="payment_method" value="bank_transfer" />
                                    <label for="payment-method-bank_transfer">
                                        <div class="adr-oms payment-method">
                                            <div class="thumbnail">
                                                <img alt="Chuyển khoản" src="assets/images/bank_transfer.png" />
                                            </div>
                                            <div class="description">
                                                <div class="title">Chuyển khoản</div>
                                                <div class="subtitle">Sử dụng thẻ ATM hoặc dịch vụ Internet Banking để tiến hành chuyển khoản cho chúng tôi</div>
                                                <div class="tkz-selection-info"></div>
                                            </div>
                                        </div>
                                    </label>
                                    <div class="payment-method-toggle box-installment installment-disabled" id="payment-method-info-bank_transfer">
                                        <div class="disabled-cod-body">
                                            <p><span style="display: inline !important; float: none; background-color: transparent; color: #1c1e21; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Tên tài khoản :<span style="background-color: transparent; color: #1c1e21; display: inline; float: none; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"> HÀ MỸ DUNG </span></span></p><br />
                                            <p>
                                                <span style="display: inline !important; float: none; background-color: transparent; color: #1c1e21; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Số tài khoản : &nbsp; 10620596362016</span></p><br />
                                            <p><span style="font-family: Helvetica,Arial,sans-serif;"><span >Ngân hàng: Techcombank - TPHCM
                                                        <span style="display: inline !important; float: none; background-color: transparent; color: #1c1e21; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><span style="background-color: transparent; color: #1c1e21; display: inline; float: none; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"></span></span></span></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="adr-oms radio select-method">
                                    <input type="radio" id="payment-method-cod" name="payment_method" value="cod" />
                                    <label for="payment-method-cod">
                                        <div class="adr-oms payment-method">
                                            <div class="thumbnail">
                                                <img alt="Thu tiền tại nhà (COD)" src="assets/images/cod.png" />
                                            </div>
                                            <div class="description">
                                                <div class="title">Thu tiền tại nhà (COD)</div>
                                                <div class="subtitle">Khách hàng thanh toán bằng tiền mặt cho nhân viên giao hàng khi sản phẩm được chuyển tới địa chỉ nhận hàng</div>
                                                <div class="tkz-selection-info"></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <div class="adr-oms checkbox">
                                    <input type="checkbox" name="invoice" id="request-invoice" onclick="showHideInvoice();" />
                                    <label for="request-invoice">Yêu cầu xuất hoá đơn GTGT</label>
                                </div>
                            </h3>
                        </div>
                        <div class="panel-body" id="container-form-invoice">
                            <div class="form-group">
                                <label class="control-label col-md-2" for="input-taxcode">Mã số thuế</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tax_code" id="input-taxcode" value="" placeholder="Ví dụ: 398473094385" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="input-company">Tên công ty</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company" id="input-company" value="" placeholder="Ví dụ: Công ty Cổ phần ASIA" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2" for="input-company-address">Địa chỉ công ty</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company_address" id="input-company-address" value="" placeholder="Ví dụ: 247 Cầu Giấy, Hà Nội, P. Dịch Vọng, Q. Cầu Giấy, TP. Hà Nội" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <i>Lưu ý: Giá trị hóa đơn không bao gồm giá trị của Mã giảm giá</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                Đơn hàng</strong> (1 sản phẩm)
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table class="adr-oms table table_order_items">
                                <tbody id="orderItem">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-truck" aria-hidden="true"></i> Vận chuyển</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-12">
                                            <span id="ajax-load-shipping-method">
                                                <div><strong>Phí giao hàng tận nơi</strong></div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="shipping_method" onclick="updateFee()" value="geo.geo" checked />
                                                        Phí giao hàng tận nơi - 0đ </label>
                                                </div>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-tag" aria-hidden="true"></i> Sử dụng mã giảm giá</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <span id="show_notice_coupon"></span>
                                    <div class="input-group">
                                        <input type="text" name="coupon" value="" placeholder="Nhập mã giảm giá" id="input-coupon" class="form-control" />
                                        <span class="input-group-btn">
                                                    <input class="btn btn-primary" type="button" value="Áp dụng" id="button-coupon" data-loading-text="Đang áp dụng" />
                                                </span>
                                    </div>
                                    <span id="load-input-hidden"></span>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $('#button-coupon').on('click', function() {
                                    var coupon_submit = '<input type="hidden" name="submit_coupon" value="1">';
                                    $('#load-input-hidden').html(coupon_submit);

                                    $.ajax({
                                        url: '/index.php?route=extension/total/coupon/coupon',
                                        type: 'post',
                                        data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),
                                        dataType: 'json',
                                        beforeSend: function() {
                                            $('#button-coupon').button('loading');
                                        },
                                        complete: function() {
                                            $('#button-coupon').button('reset');
                                        },
                                        success: function(json) {
                                            $('.console.log').remove();

                                            if (json['error']) {
                                                $('#show_notice_coupon').html('<div class="console.log console.log-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="console.log">&times;</button></div>');
                                            } else {
                                                $("form#checkout_form").submit();
                                            }
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="panel panel-default" id="ajax-load-total">
                        <div class="panel-body">
                            <table class="adr-oms table">
                                <tbody class="orderSummary">
                                <tr class="row-total-amount">
                                    <td class="text-left">Thành tiền</td>
                                    <td class="text-right">
                                        <strong class="">455,000đ</strong>
                                    </td>
                                </tr>
                                <tr class="row-total-amount">
                                    <td class="text-left">Phí giao hàng tận nơi</td>
                                    <td class="text-right">
                                        <strong class="">0đ</strong>
                                    </td>
                                </tr>
                                <tr class="row-total-amount">
                                    <td class="text-left">Tổng số</td>
                                    <td class="text-right">
                                        <strong class="text-danger">455,000đ</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="pull-left" href="/gio-hang.html" title="Quay lại giỏ hàng">
                            <i class="fa fa-mail-reply-all" aria-hidden="true"></i> Quay lại giỏ hàng </a>
                        <button class="btn btn-primary pull-right btn_checkout" type="button" id="submit_form_button">Đặt hàng <i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


