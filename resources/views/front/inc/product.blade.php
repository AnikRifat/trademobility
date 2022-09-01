
    <div class="product-item">
        <div class="product-img">
            <a class="image" href="{{ route('product.details', $product->id) }}"><img
                  src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="" /></a>
            {{-- <button type="button" class="add-to-cart"
              onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}',image:'{{
            $product->image }}', price: {{ $product->price }}})">add
            to
            cart</button> --}}
            {{-- <div class="action-btn fix text-center">

                <a href="{{ route('product.details', $product->id) }}" title="Quickview"><i class="pe-7s-look"></i></a>
        </div> --}}
    </div>
    <div class="product-info">
        <h5 class="title"><a class="word-limit-2" href="" {{ route('product.details', $product->id)
                }}">{{ $product->name }}</a>
        </h5>
        <div class="d-flex justify-content-between">
            <div>
                <span class="price"><span class="new">
                        price: ${{ $product->price }}.00</span>
                </span>

            </div>
            <div>
                <span class="price"><span class="new">
                        quantity: {{ $product->unit }} pc</span>
            </div>
        </div>

    </div>
</div>
