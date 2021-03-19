<div>
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif
   </div>
   <div class="row no-gutters">

    @foreach ($products as $product)
    <div class="col-md-4 col-sm-6">
        <div class="product-box product-box-hover-down bg--white color-1">
            <div class="product-box__img">
                
                <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}" class="primary-image">
                <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}" class="secondary-image">
                {{-- <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a> --}}
                <a href="{{ route('products.show', $product->slug) }}"  class="product-box__quick-view"><i class="fa fa-search"></i></a>
            </div>
            <div class="product-box__content">
                <h3 class="product-box__title"><a href="single-product.html">{{ $product->name }}</a></h3>
                <div class="ratings">
                    <i class="fa fa-star rated"></i>
                    <i class="fa fa-star rated"></i>
                    <i class="fa fa-star rated"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product-box__price">
                   {{--  <span class="regular-price">$100.00</span> --}}
                    <span class="sale-price">{{ $product->price }} {{ config('cart.currency.fcfa') }}</span>
                </div>
            </div>
            <div class="product-box__action action-2">
                <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                 {{-- @livewire('button-add-cart', ['productId' => $product->id], key($product->id)) --}}
                <button  class="button-out-inline" wire:click="$emitSelf('store', {{ $product->id }})"  data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></button>
                <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row no-gutters">
    <div class="col-12">
        {{ $products->links()}}
    </div>
</div>
</div>
