<div>
   <div class="container">
        @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif
   </div>
@if (Cart::count() > 0)
<div class="main-content-wrapper">
    <div class="cart-area pt--40 pb--80 pt-sm--30 pb-sm--60">
        <div class="container">
            <div class="cart-wrapper bg--white mb--80 mb-sm--60">
                <div class="row">
                    <div class="col-12">
                        <!-- Cart Area Start -->
                        <div class="cart-table table-content table-responsive">
                            <table class="table mb--30">
                                <thead>
                                    <tr>
                                        
                                        <th>Retirer</th>
                                        <th>Images</th>
                                        <th>Product</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $product)
                                    <tr>
                                        <td>
                                             <button class="button-out" wire:click="$emit('destroy', '{{ $product->rowId }}')"><i class="fa fa-trash"></i></button>
                                        </td>
                                        <td>
                                            <a href="single-product.html">
                                                <img src="{{ $product->model->image }}" alt="product">
                                            </a>
                                        </td>
                                        <td class="wide-column">
                                            <h3><a href="single-product.html">{{ $product->model->name }}</a></h3>
                                        </td>
                                        <td class="cart-product-price"><strong>{{ getFomatterPrice($product->model->price) }} Fcfa</strong></td>
                                        <td>
                                            <div class="quantity">
                                                
                                                <input type="number" class="quantity-input" wire:model="qty"  id="qty{{ $product->id }}" min="1">
                                            </div>
                                        </td>
                                        <td class="cart-product-price"><strong> {{ getFomatterPrice($product->model->price *  $product->qty) }} Fcfa</strong></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- <div class="row pb--30">
                            <div class="col-12">
                                <div class="apply-coupon-wrapper">
                                    <div class="form__group d-flex justify-content-between flex-sm-row flex-column">
                                        <input type="text" name="coupon" id="coupon" class="form__input" placeholder="Coupon Code">
                                        <button type="submit" class="btn btn-5 btn-style-1 color-1">Apply Coupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-md-right">
                                <div class="cart-btn-group">
                                    <a href="shop.html" class="btn btn-5 btn-style-1 color-1">Update Cart</a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Cart Area End --> 
                    </div>
                </div>
            </div>
            <div class="cart-page-total-wrapper">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="cart-page-total bg--white">
                            <h2>Cart Totals</h2>
                            <div class="cart-calculator-table table-content table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Sous-total</th>
                                            <td><span class="price-ammount">{{(Cart::subtotal()) }} FCFA</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>TAX</th>
                                            <td>
                                                Invoirienne: <span class="price-ammount">{{ Cart::tax() }} FCFA</span>
                                               {{--  <a href="#" class="expand-calculator">Calculate Shipping</a>
                                                <form action="#" id="shipping-calculator" class="form shipping-form hide-in-default">
                                                    <select name="shipping_country" id="shipping_country" class="form__input form__input--2">
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
                                                    </select>
                                                    <input type="text" name="shipping_state" id="shipping_state" class="form__input form__input--2" placeholder="State / Country">
                                                    <input type="text" name="shipping_zip" id="shipping_zip" class="form__input form__input--2" placeholder="Postcode / Zip">
                                                    <button type="submit" class="btn btn-5 btn-style-1 color-1">Update Totals</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                        <tr class="cart-total">
                                            <th>TOTAL</th>
                                            <td><span class="price-ammount">{{ Cart::total() }} FCFA</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="checkout.html" class="btn btn-6 btn-style-2">Passer à la caisse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning text-center">
                Votre panier est vide !
            </div>
        </div>
    </div>
</div>
@endif


</div>