@extends('layouts.page')

@section('content')
<div class="container">
    <div class="account-login">
        <div class="page-title text-center">
            <h1>Đăng ký tài khoản</h1>
        </div>
        <fieldset class="col2-set">
            <div class="col-1 registered-users full-width">
                <div class="content">
                    <p>Nếu bạn đã đăng ký tài khoản với chúng tôi, vui lòng <a href="/dang-nhap.html">đăng nhập</a>.</p>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <fieldset id="account">
                            <legend>Chi tiết tài khoản</legend>
                            <div class="form-group required" style="display: none;">
                                <label class="col-sm-2 control-label">Nhóm Khách hàng</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="customer_group_id" value="1" checked="checked">
                                            Mặc định</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-firstname">Họ &amp; Tên đệm</label>
                                <div class="col-sm-10">
                                    <input type="text" name="firstname" value="" placeholder="Họ &amp; Tên đệm"
                                           id="input-firstname" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-lastname">Tên</label>
                                <div class="col-sm-10">
                                    <input type="text" name="lastname" value="" placeholder="Tên" id="input-lastname"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" value="" placeholder="Email" id="input-email"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-telephone">Điện thoại</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="telephone" value="" placeholder="Điện thoại"
                                           id="input-telephone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-fax">Số Fax</label>
                                <div class="col-sm-10">
                                    <input type="text" name="fax" value="" placeholder="Số Fax" id="input-fax"
                                           class="form-control">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="address">
                            <legend>Địa chỉ</legend>
                            <div id="custom-field1" class="form-group custom-field required" data-sort="0" style="">
                                <label class="col-sm-2 control-label" for="input-custom-field1">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input type="text" name="custom_field[address][1]" value=""
                                           placeholder="Số điện thoại" id="input-custom-field1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-company">Công ty</label>
                                <div class="col-sm-10">
                                    <input type="text" name="company" value="" placeholder="Công ty" id="input-company"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-address-1">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address_1" value="" placeholder="Địa chỉ"
                                           id="input-address-1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-address-2">Địa chỉ dòng 2</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address_2" value="" placeholder="Địa chỉ dòng 2"
                                           id="input-address-2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-city">Quận / Huyện</label>
                                <div class="col-sm-10">
                                    <input type="text" name="city" value="" placeholder="Quận / Huyện" id="input-city"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-postcode">Mã bưu điện</label>
                                <div class="col-sm-10">
                                    <input type="text" name="postcode" value="" placeholder="Mã bưu điện"
                                           id="input-postcode" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-country">Quốc gia</label>
                                <div class="col-sm-10">
                                    <select name="country_id" id="input-countryid" class="form-control">
                                        <option value=""> --- Chọn ---</option>
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
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-zone">Tỉnh / TP</label>
                                <div class="col-sm-10">
                                    <select name="zone_id" id="input-zone" class="form-control">
                                        <option value=""> --- Chọn ---</option>
                                        <option value="3751">An Giang</option>
                                        <option value="3756">Bà Rịa - Vũng Tàu</option>
                                        <option value="3752">Bắc Giang</option>
                                        <option value="3753">Bắc Kạn</option>
                                        <option value="3754">Bạc Liêu</option>
                                        <option value="3755">Bắc Ninh</option>
                                        <option value="3757">Bến Tre</option>
                                        <option value="3759">Bình Dương</option>
                                        <option value="3760">Bình Phước</option>
                                        <option value="3761">Bình Thuận</option>
                                        <option value="3758">Bình Định</option>
                                        <option value="3762">Cà Mau</option>
                                        <option value="3763">Cần Thơ</option>
                                        <option value="3764">Cao Bằng</option>
                                        <option value="3771">Gia Lai</option>
                                        <option value="3772">Hà Giang</option>
                                        <option value="3775">Hà Nam</option>
                                        <option value="3776">Hà Nội</option>
                                        <option value="3778">Hà Tĩnh</option>
                                        <option value="3773">Hải Dương</option>
                                        <option value="3774">Hải Phòng</option>
                                        <option value="3781">Hậu Giang</option>
                                        <option value="3779">Hòa Bình</option>
                                        <option value="3782">Hưng Yên</option>
                                        <option value="4236">Khánh Hòa</option>
                                        <option value="4237">Kiên Giang</option>
                                        <option value="4238">Kon Tum</option>
                                        <option value="4239">Lai Châu</option>
                                        <option value="4242">Lâm Đồng</option>
                                        <option value="4241">Lạng Sơn</option>
                                        <option value="4240">Lào Cai</option>
                                        <option value="4243">Long An</option>
                                        <option value="4244">Nam Định</option>
                                        <option value="4245">Nghệ An</option>
                                        <option value="4246">Ninh Bình</option>
                                        <option value="4247">Ninh Thuận</option>
                                        <option value="4248">Phú Thọ</option>
                                        <option value="4249">Phú Yên</option>
                                        <option value="4250">Quảng Bình</option>
                                        <option value="4251">Quảng Nam</option>
                                        <option value="4252">Quảng Ngãi</option>
                                        <option value="4253">Quảng Ninh</option>
                                        <option value="4254">Quảng Trị</option>
                                        <option value="4255">Sóc Trăng</option>
                                        <option value="4256">Sơn La</option>
                                        <option value="4257">Tây Ninh</option>
                                        <option value="4258">Thái Bình</option>
                                        <option value="4259">Thái Nguyên</option>
                                        <option value="4260">Thanh Hóa</option>
                                        <option value="4261">Thừa Thiên Huế</option>
                                        <option value="4262">Tiền Giang</option>
                                        <option value="3780">TP.Hồ Chí Minh</option>
                                        <option value="4263">Trà Vinh</option>
                                        <option value="4264">Tuyên Quang</option>
                                        <option value="4265">Vĩnh Long</option>
                                        <option value="4266">Vĩnh Phúc</option>
                                        <option value="4267">Yên Bái</option>
                                        <option value="3767">Đà Nẵng</option>
                                        <option value="3765">Đăk Lăk</option>
                                        <option value="3766">Đăk Nông</option>
                                        <option value="3768">Điện Biên</option>
                                        <option value="3769">Đồng Nai</option>
                                        <option value="3770">Đồng Tháp</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Mật khẩu</legend>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-password">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" value="" placeholder="Mật khẩu"
                                           id="input-password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-confirm">Mật khẩu xác nhận</label>
                                <div class="col-sm-10">
                                    <input type="password" name="confirm" value="" placeholder="Mật khẩu xác nhận"
                                           id="input-confirm" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Đăng ký nhận tin</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Đăng ký nhận tin</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" name="newsletter" value="1">
                                        Có</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="newsletter" value="0" checked="checked">
                                        Không</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons-set text-center">
                            <p style="line-height: 40px;">
                                <input type="checkbox" name="agree" value="1">
                                Tôi đã đọc và đồng ý với <a
                                    href="/index.php?route=information/information/agree&amp;information_id=3"
                                    class="agree"><b>Chính sách bảo mật</b></a></p>
                            <button id="send2" type="submit" class="button login" style="float: none;">
                                <span>Tiếp tục</span></button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </fieldset>
    </div>
   {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
