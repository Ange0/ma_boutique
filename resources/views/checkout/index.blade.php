@extends('layouts.master')

@section('extra-script')
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
    <div class="main-content-wrapper">
        <div class="checkout-area pt--40 pb--80 pt-sm--30 pb-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Checkout Area Start -->
                        <div class="checkout-wrapper bg--white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout-title">
                                        <h2>Billing Details</h2>
                                    </div>
                                    <div class="checkout-form">
                                        {{-- <div class="form-row mb--30">
                                                <div class="form__group col-md-6 mb-sm--30">
                                                    <label for="billing_fname" class="form__label">First Name <span>*</span></label>
                                                    <input type="text" name="billing_fname" id="billing_fname" class="form__input">
                                                </div>
                                                <div class="form__group col-md-6">
                                                    <label for="billing_lname" class="form__label">Last Name <span>*</span></label>
                                                    <input type="text" name="billing_lname" id="billing_lname" class="form__input">
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <label for="billing_company" class="form__label">Company</label>
                                                    <input type="text" name="billing_company" id="billing_company" class="form__input">
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <label for="billing_country" class="form__label">Country</label>
                                                    <select id="billing_country" name="billing_country" class="form__input nice-select" style="display: none;">
                                                        <option value="">Select a country…</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD" selected="selected">Bangladesh</option>
                                                        <option value="BD">Brazil</option>
                                                        <option value="CN">China</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="FR">France</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US">United States (US)</option>
                                                    </select><div class="nice-select form__input" tabindex="0"><span class="current">Bangladesh</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="" class="option">Select a country…</li><li data-value="AF" class="option">Afghanistan</li><li data-value="AL" class="option">Albania</li><li data-value="DZ" class="option">Algeria</li><li data-value="AR" class="option">Argentina</li><li data-value="AM" class="option">Armenia</li><li data-value="AU" class="option">Australia</li><li data-value="AT" class="option">Austria</li><li data-value="AZ" class="option">Azerbaijan</li><li data-value="BH" class="option">Bahrain</li><li data-value="BD" class="option selected">Bangladesh</li><li data-value="BD" class="option">Brazil</li><li data-value="CN" class="option">China</li><li data-value="EG" class="option">Egypt</li><li data-value="FR" class="option">France</li><li data-value="DE" class="option">Germany</li><li data-value="HK" class="option">Hong Kong</li><li data-value="HU" class="option">Hungary</li><li data-value="IS" class="option">Iceland</li><li data-value="IN" class="option">India</li><li data-value="ID" class="option">Indonesia</li><li data-value="IR" class="option">Iran</li><li data-value="IQ" class="option">Iraq</li><li data-value="IE" class="option">Ireland</li><li data-value="IT" class="option">Italy</li><li data-value="JP" class="option">Japan</li><li data-value="KW" class="option">Kuwait</li><li data-value="MY" class="option">Malaysia</li><li data-value="MV" class="option">Maldives</li><li data-value="MX" class="option">Mexico</li><li data-value="MC" class="option">Monaco</li><li data-value="NP" class="option">Nepal</li><li data-value="RU" class="option">Russia</li><li data-value="KR" class="option">South Korea</li><li data-value="SS" class="option">South Sudan</li><li data-value="ES" class="option">Spain</li><li data-value="LK" class="option">Sri Lanka</li><li data-value="SD" class="option">Sudan</li><li data-value="SZ" class="option">Swaziland</li><li data-value="SE" class="option">Sweden</li><li data-value="CH" class="option">Switzerland</li><li data-value="TN" class="option">Tunisia</li><li data-value="TR" class="option">Turkey</li><li data-value="UA" class="option">Ukraine</li><li data-value="AE" class="option">United Arab Emirates</li><li data-value="GB" class="option">United Kingdom (UK)</li><li data-value="US" class="option">United States (US)</li></ul></div>
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <label for="billing_streetAddress" class="form__label">Street Address</label>
                                                    <input type="text" name="billing_streetAddress" id="billing_streetAddress" class="form__input">
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <label for="billing_apartment" class="form__label">Apartment, suite, unit etc. (optional)</label>
                                                    <input type="text" name="billing_apartment" id="billing_apartment" class="form__input">
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <label for="billing_city" class="form__label">Town/City <span>*</span></label>
                                                    <input type="text" name="billing_city" id="billing_city" class="form__input">
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <label for="billing_district" class="form__label">Distrin <span>*</span></label>
                                                    <select name="billing_district" id="billing_district" class="form__input nice-select" style="display: none;">
                                                        <option value="">Select a District…</option>
                                                        <option>BARISAL</option>
                                                        <option>BHOLA</option>
                                                        <option>BANDARBAN</option>
                                                        <option>BRAHMANBARIA</option>
                                                        <option>CHANDPUR</option>
                                                        <option>CHITTAGONG</option>
                                                        <option>COMILLA</option>
                                                        <option>COX'S BAZAR</option>
                                                        <option>DHAKA</option>
                                                        <option>FARIDPUR</option>
                                                        <option>FENI</option>
                                                        <option>GAZIPUR</option>
                                                        <option>GOPALGANJ</option>
                                                        <option>JAMALPUR</option>
                                                        <option>KHAGRACHHARI</option>
                                                        <option>KISHOREGONJ</option>
                                                        <option>LAKSHMIPU</option>
                                                        <option>RMADARIPUR</option>
                                                        <option>MUNSHIGANJ</option>
                                                        <option>MYMENSINGH</option>
                                                        <option>NARAYANGANJ</option>
                                                        <option>NARSINGDI</option>
                                                        <option>NETRAKONA</option>
                                                        <option>NOAKHALI</option>
                                                        <option>RANGAMATI </option>
                                                        <option>RAJBARI</option>
                                                        <option>SHARIATPUR</option>
                                                        <option>SHERPUR</option>
                                                        <option>TANGAIL</option>
                                                    </select><div class="nice-select form__input" tabindex="0"><span class="current">Select a District…</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="" class="option selected">Select a District…</li><li data-value="BARISAL" class="option">BARISAL</li><li data-value="BHOLA" class="option">BHOLA</li><li data-value="BANDARBAN" class="option">BANDARBAN</li><li data-value="BRAHMANBARIA" class="option">BRAHMANBARIA</li><li data-value="CHANDPUR" class="option">CHANDPUR</li><li data-value="CHITTAGONG" class="option">CHITTAGONG</li><li data-value="COMILLA" class="option">COMILLA</li><li data-value="COX'S BAZAR" class="option">COX'S BAZAR</li><li data-value="DHAKA" class="option">DHAKA</li><li data-value="FARIDPUR" class="option">FARIDPUR</li><li data-value="FENI" class="option">FENI</li><li data-value="GAZIPUR" class="option">GAZIPUR</li><li data-value="GOPALGANJ" class="option">GOPALGANJ</li><li data-value="JAMALPUR" class="option">JAMALPUR</li><li data-value="KHAGRACHHARI" class="option">KHAGRACHHARI</li><li data-value="KISHOREGONJ" class="option">KISHOREGONJ</li><li data-value="LAKSHMIPU" class="option">LAKSHMIPU</li><li data-value="RMADARIPUR" class="option">RMADARIPUR</li><li data-value="MUNSHIGANJ" class="option">MUNSHIGANJ</li><li data-value="MYMENSINGH" class="option">MYMENSINGH</li><li data-value="NARAYANGANJ" class="option">NARAYANGANJ</li><li data-value="NARSINGDI" class="option">NARSINGDI</li><li data-value="NETRAKONA" class="option">NETRAKONA</li><li data-value="NOAKHALI" class="option">NOAKHALI</li><li data-value="RANGAMATI" class="option">RANGAMATI </li><li data-value="RAJBARI" class="option">RAJBARI</li><li data-value="SHARIATPUR" class="option">SHARIATPUR</li><li data-value="SHERPUR" class="option">SHERPUR</li><li data-value="TANGAIL" class="option">TANGAIL</li></ul></div>
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <label for="billing_zip" class="form__label">Post/Zip Code <span>*</span></label>
                                                    <input type="text" name="billing_zip" id="billing_zip" class="form__input">
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-md-6 mb-sm--30">
                                                    <label for="billing_phone" class="form__label">Phone</label>
                                                    <input type="text" name="billing_phone" id="billing_phone" class="form__input">
                                                </div>
                                                <div class="form__group col-md-6">
                                                    <label for="billing_email" class="form__label">Email Address <span>*</span></label>
                                                    <input type="email" name="billing_email" id="billing_email" class="form__input">
                                                </div>
                                            </div>
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" name="createaccount" id="createaccount" class="form__checkbox">
                                                        <label for="createaccount" class="form__checkbox--label">Create An Account?</label>
                                                    </div>
                                                    <div class="new-account hide-in-default">
                                                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                        <label for="newPass" class="form__label">Password <span>*</span></label>
                                                        <input type="text" name="newPass" id="newPass" class="form__input">
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="form-row mb--30">
                                                <div class="form__group col-12">
                                                    <div class="form__checkbox--group">
                                                        <input type="checkbox" name="shipdifferetads" id="shipdifferetads" class="form__checkbox">
                                                        <label for="shipdifferetads" class="form__checkbox--label shipping-label">Ship To A Different Address?</label>
                                                    </div>
                                                    <div class="ship-box-info hide-in-default mt--30">
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-md-6 mb-sm--30">
                                                                <label for="shipping_fname" class="form__label">First Name <span>*</span></label>
                                                                <input type="text" name="shipping_fname" id="shipping_fname" class="form__input">
                                                            </div>
                                                            <div class="form__group col-md-6">
                                                                <label for="shipping_lname" class="form__label">Last Name <span>*</span></label>
                                                                <input type="text" name="shipping_lname" id="shipping_lname" class="form__input">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-12">
                                                                <label for="shipping_company" class="form__label">Company</label>
                                                                <input type="text" name="shipping_company" id="shipping_company" class="form__input">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-12">
                                                                <label for="shipping_country" class="form__label">Country</label>
                                                                <select id="shipping_country" name="shipping_country" class="form__input nice-select" style="display: none;">
                                                                    <option value="">Select a country…</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD" selected="selected">Bangladesh</option>
                                                                    <option value="BD">Brazil</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option value="IN">India</option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom (UK)</option>
                                                                    <option value="US">United States (US)</option>
                                                                </select><div class="nice-select form__input" tabindex="0"><span class="current">Bangladesh</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="" class="option">Select a country…</li><li data-value="AF" class="option">Afghanistan</li><li data-value="AL" class="option">Albania</li><li data-value="DZ" class="option">Algeria</li><li data-value="AR" class="option">Argentina</li><li data-value="AM" class="option">Armenia</li><li data-value="AU" class="option">Australia</li><li data-value="AT" class="option">Austria</li><li data-value="AZ" class="option">Azerbaijan</li><li data-value="BH" class="option">Bahrain</li><li data-value="BD" class="option selected">Bangladesh</li><li data-value="BD" class="option">Brazil</li><li data-value="CN" class="option">China</li><li data-value="EG" class="option">Egypt</li><li data-value="FR" class="option">France</li><li data-value="DE" class="option">Germany</li><li data-value="HK" class="option">Hong Kong</li><li data-value="HU" class="option">Hungary</li><li data-value="IS" class="option">Iceland</li><li data-value="IN" class="option">India</li><li data-value="ID" class="option">Indonesia</li><li data-value="IR" class="option">Iran</li><li data-value="IQ" class="option">Iraq</li><li data-value="IE" class="option">Ireland</li><li data-value="IT" class="option">Italy</li><li data-value="JP" class="option">Japan</li><li data-value="KW" class="option">Kuwait</li><li data-value="MY" class="option">Malaysia</li><li data-value="MV" class="option">Maldives</li><li data-value="MX" class="option">Mexico</li><li data-value="MC" class="option">Monaco</li><li data-value="NP" class="option">Nepal</li><li data-value="RU" class="option">Russia</li><li data-value="KR" class="option">South Korea</li><li data-value="SS" class="option">South Sudan</li><li data-value="ES" class="option">Spain</li><li data-value="LK" class="option">Sri Lanka</li><li data-value="SD" class="option">Sudan</li><li data-value="SZ" class="option">Swaziland</li><li data-value="SE" class="option">Sweden</li><li data-value="CH" class="option">Switzerland</li><li data-value="TN" class="option">Tunisia</li><li data-value="TR" class="option">Turkey</li><li data-value="UA" class="option">Ukraine</li><li data-value="AE" class="option">United Arab Emirates</li><li data-value="GB" class="option">United Kingdom (UK)</li><li data-value="US" class="option">United States (US)</li></ul></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-12">
                                                                <label for="shipping_streetAddress" class="form__label">Street Address</label>
                                                                <input type="text" name="shipping_streetAddress" id="shipping_streetAddress" class="form__input">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-12">
                                                                <label for="shipping_apartment" class="form__label">Apartment, suite, unit etc. (optional)</label>
                                                                <input type="text" name="shipping_apartment" id="shipping_apartment" class="form__input">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-12">
                                                                <label for="shipping_city" class="form__label">Town/City <span>*</span></label>
                                                                <input type="text" name="shipping_city" id="shipping_city" class="form__input">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-12">
                                                                <label for="shipping_district" class="form__label">Distring <span>*</span></label>
                                                                <select id="shipping_district" name="shipping_district" class="form__input nice-select" style="display: none;">
                                                                    <option value="">Select a District…</option>
                                                                    <option>BARISAL</option>
                                                                    <option>BHOLA</option>
                                                                    <option>BANDARBAN</option>
                                                                    <option>BRAHMANBARIA</option>
                                                                    <option>CHANDPUR</option>
                                                                    <option>CHITTAGONG</option>
                                                                    <option>COMILLA</option>
                                                                    <option>COX'S BAZAR</option>
                                                                    <option>DHAKA</option>
                                                                    <option>FARIDPUR</option>
                                                                    <option>FENI</option>
                                                                    <option>GAZIPUR</option>
                                                                    <option>GOPALGANJ</option>
                                                                    <option>JAMALPUR</option>
                                                                    <option>KHAGRACHHARI</option>
                                                                    <option>KISHOREGONJ</option>
                                                                    <option>LAKSHMIPU</option>
                                                                    <option>RMADARIPUR</option>
                                                                    <option>MUNSHIGANJ</option>
                                                                    <option>MYMENSINGH</option>
                                                                    <option>NARAYANGANJ</option>
                                                                    <option>NARSINGDI</option>
                                                                    <option>NETRAKONA</option>
                                                                    <option>NOAKHALI</option>
                                                                    <option>RANGAMATI </option>
                                                                    <option>RAJBARI</option>
                                                                    <option>SHARIATPUR</option>
                                                                    <option>SHERPUR</option>
                                                                    <option>TANGAIL</option>
                                                                </select><div class="nice-select form__input" tabindex="0"><span class="current">Select a District…</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="" class="option selected">Select a District…</li><li data-value="BARISAL" class="option">BARISAL</li><li data-value="BHOLA" class="option">BHOLA</li><li data-value="BANDARBAN" class="option">BANDARBAN</li><li data-value="BRAHMANBARIA" class="option">BRAHMANBARIA</li><li data-value="CHANDPUR" class="option">CHANDPUR</li><li data-value="CHITTAGONG" class="option">CHITTAGONG</li><li data-value="COMILLA" class="option">COMILLA</li><li data-value="COX'S BAZAR" class="option">COX'S BAZAR</li><li data-value="DHAKA" class="option">DHAKA</li><li data-value="FARIDPUR" class="option">FARIDPUR</li><li data-value="FENI" class="option">FENI</li><li data-value="GAZIPUR" class="option">GAZIPUR</li><li data-value="GOPALGANJ" class="option">GOPALGANJ</li><li data-value="JAMALPUR" class="option">JAMALPUR</li><li data-value="KHAGRACHHARI" class="option">KHAGRACHHARI</li><li data-value="KISHOREGONJ" class="option">KISHOREGONJ</li><li data-value="LAKSHMIPU" class="option">LAKSHMIPU</li><li data-value="RMADARIPUR" class="option">RMADARIPUR</li><li data-value="MUNSHIGANJ" class="option">MUNSHIGANJ</li><li data-value="MYMENSINGH" class="option">MYMENSINGH</li><li data-value="NARAYANGANJ" class="option">NARAYANGANJ</li><li data-value="NARSINGDI" class="option">NARSINGDI</li><li data-value="NETRAKONA" class="option">NETRAKONA</li><li data-value="NOAKHALI" class="option">NOAKHALI</li><li data-value="RANGAMATI" class="option">RANGAMATI </li><li data-value="RAJBARI" class="option">RAJBARI</li><li data-value="SHARIATPUR" class="option">SHARIATPUR</li><li data-value="SHERPUR" class="option">SHERPUR</li><li data-value="TANGAIL" class="option">TANGAIL</li></ul></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-12">
                                                                <label for="shipping_zip" class="form__label">Post/Zip Code <span>*</span></label>
                                                                <input type="text" name="shipping_zip" id="shipping_zip" class="form__input">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mb--30">
                                                            <div class="form__group col-md-6 mb-sm--30">
                                                                <label for="shipping_phone" class="form__label">Phone</label>
                                                                <input type="text" name="shipping_phone" id="shipping_phone" class="form__input">
                                                            </div>
                                                            <div class="form__group col-md-6">
                                                                <label for="shipping_email" class="form__label">Email Address <span>*</span></label>
                                                                <input type="email" name="shipping_email" id="shipping_email" class="form__input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="form-row">
                                                <div class="form__group col-12">
                                                    <label for="orderNotes" class="form__label">Order Notes</label>
                                                    <textarea class="form__input form__input--textarea" id="orderNotes" name="orderNotes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>
                                            </div>
                                        </form> --}}
                                        <form id="payment-form">
                                            <div id="card-element">
                                                <!-- Elements will create input elements here -->
                                            </div>

                                            <!-- We'll put the error messages in this element -->
                                            <div id="card-errors" role="alert"></div>

                                            <button id="card-button" class="btn btn-6 btn-style-2 mt-4">Proceder le
                                                paiement</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-md--30">
                                    <div class="order-details">
                                        <h3 class="heading-tertiary">Votre Commande</h3>
                                        <div class="order-table table-content table-responsive mb--30">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Produit</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (Cart::content() as $product)
                                                        <tr>
                                                            <td>{{ $product->name }}<strong> x
                                                                    {{ $product->qty }}</strong></td>
                                                            <td>{{ getFomatterPrice($product->price, $product->qty) }}
                                                                {{ config('cart.currency.fcfa') }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>Sous total</th>
                                                        <td>{{ getFomatterPrice(Cart::subtotal()) }}
                                                            {{ config('cart.currency.fcfa') }} </td>
                                                    </tr>

                                                    <tr class="cart-subtotal">
                                                        <th>TAXE</th>
                                                        <td>{{ getFomatterPrice(Cart::tax()) }}
                                                            {{ config('cart.currency.fcfa') }}</td>
                                                    </tr>

                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td><span
                                                                class="order-total-ammount">{{ getFomatterPrice(Cart::total()) }}
                                                                {{ config('cart.currency.fcfa') }}</span></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="checkout-payment">
                                            {{-- <form action="#" class="payment-form">
                                                <div class="payment-group">
                                                    <div class="payment-radio">
                                                        <input type="radio" value="cash" name="payment-method" id="cheque" checked="">
                                                        <label class="payment-label" for="cheque">Cheque Payment</label>
                                                    </div>
                                                    <div class="payment-info" data-method="cash">
                                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                                <div class="payment-group">
                                                    <div class="payment-radio">
                                                        <input type="radio" value="paypal" name="payment-method" id="paypal">
                                                        <label class="payment-label" for="paypal">
                                                            Paypal 
                                                            <img src="assets/img/others/AM_mc_vs_ms_ae_UK.png" alt="payment">
                                                            <a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What is PayPal?</a>
                                                        </label>
                                                    </div>
                                                    <div class="payment-info paypal hide-in-default" data-method="paypal">
                                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                    </div>
                                                </div>
                                                <div class="payment-group">
                                                    <button type="submit" class="btn btn-6 btn-style-2">Proceder au paiement</button>
                                                </div>
                                            </form> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Area End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        var stripe = Stripe(
            'pk_test_51HdbNoIvcdlShppO4SJP9Z8KgbPMglxzUMtB9Dm2i4XzpGeOPsVoy703ViJs1yApwSXihnCwpyOXjbvA00lazyS800guxVXZAA'
            );

        var elements = stripe.elements();

        var style = {
            base: {
                color: "#32325d",
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                    color: "#aab7c4"
                }
            },
            invalid: {
                color: "#fa755a",
                iconColor: "#fa755a"
            }
        };

        var card = elements.create("card", {
            style: style
        });
        var displayError = document.getElementById('card-errors');

        card.mount("#card-element");
        card.on('change', function(event) {

            if (event.error) {
                /*  displayError.classList.add('alert', 'alert-warning'); */
                displayError.textContent = event.error.message;

            } else {
                /*  displayError.classList.remove('alert', 'alert-warning'); */
                displayError.textContent = '';
            }
        });


        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(ev) {
            ev.preventDefault();
            // If the client secret was rendered server-side as a data-secret attribute
            // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
            stripe.confirmCardPayment("{{ $client_secret }}", {
                payment_method: {
                    card: card,
                }
            }).then(function(result) {
                if (result.error) {
                    // Show error to your customer (e.g., insufficient funds)
                    console.log(result.error.message);
                    displayError.textContent = result.error.message;
                } else {
                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {
                        // Show a success message to your customer
                        // There's a risk of the customer closing the window before callback
                        // execution. Set up a webhook or plugin to listen for the
                        // payment_intent.succeeded event that handles any business critical
                        // post-payment actions.

                        console.log(result.paymentIntent);
                    }
                }
            });
        });

    </script>
@endsection
