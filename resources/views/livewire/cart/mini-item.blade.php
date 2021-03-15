<div class="mini-cart mini-cart--1">
    <a class="mini-cart__dropdown-toggle" id="cartDropdown">
        <i class="fa fa-shopping-bag mini-cart__icon"></i>
        <sub class="mini-cart__count">{{ Cart::count() }}</sub>
    </a>
    <div class="mini-cart__dropdown-menu">
        @if(Cart::count() > 0)
        <div class="mini-cart__content">
            <div class="mini-cart__item">
                @foreach (Cart::content() as $product)
                    <div class="mini-cart__item--single">
                        <div class="mini-cart__item--image">
                            <img src="{{ $product->model->image }}" alt="product">
                        </div>
                        <div class="mini-cart__item--content">
                            <h4><a href="{{ route('cart.item') }}">{{ $product->model->name }}</a> </h4>
                            <p>{{ $product->qty }}</p>
                            <p>{{ getFomatterPrice( $product->model->price) }} FCFA</p>
                        </div>
                        <button class="button-out" wire:click="$emit('destroy', '{{ $product->rowId }}')"><i class="fa fa-trash"></i></button>
                    </div>
                @endforeach
            </div>
            <div class="mini-cart__total">
                <h4>
                    <span class="mini-cart__total--title">Sous-Total</span>
                    <span class="mini-cart__total--ammount">{{ Cart::subtotal() }} FCFA</span>
                </h4>
            </div>
            <div class="mini-cart__btn">
                <a href="{{ route('cart.item') }}" class="btn btn-small btn-icon btn-style-1 color-1">Voir le panier <i class="fa fa-angle-right"></i></a>
                <a href="checkout.html" class="btn btn-small btn-icon btn-style-1 color-1">Finaliser <i class="fa fa-angle-right"></i></a>
            </div>
            
        </div>
        @else
        <p style="color: #fb9935;" class="text-center">Votre panier est vide.</p>
        @endif
        
    </div>
</div>