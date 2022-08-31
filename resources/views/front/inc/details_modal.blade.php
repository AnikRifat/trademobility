<!-- The Modal -->
@foreach ($products as $product)
<div class="modal" id="myModal{{ $product->id }}">
  <div class="modal-dialog modal-xl">
    <div class="modal-content details">

      <button type="button" class="btn btn-danger cls-btn" data-bs-dismiss="modal">x</button>
      <!-- Modal body -->
      <div class="modal-body">

        <div class="container">
          <div class="row mb-40">
            <div class="col-12 col-md-6 col-lg-4 mb-40">
              <!-- Tab panes -->
              <div class="tab-content mb-10">
                <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                  <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="Image" />
                </div>
                @if($product->image_2)
                <div class="pro-large-img tab-pane" id="pro-large-img-2">
                  <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="Image" />
                </div>
                @endif
                @if($product->image_3)
                <div class="pro-large-img tab-pane" id="pro-large-img-3">
                  <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="Image" />
                </div>
                @endif

              </div>
              <!-- Nav tabs -->
              <div class="pro-thumb-img-slider nav">
                <div><a href="#pro-large-img-1" data-bs-toggle="tab"><img
                      src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="Image" /></a>
                </div>
                @if($product->image_2)
                <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img
                      src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="Image" /></a>
                </div>
                @endif
                @if($product->image_3)
                <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img
                      src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="Image" /></a>
                </div>
                @endif
                @if($product->image_2)
                <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img
                      src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="Image" /></a>
                </div>
                @endif
                @if($product->image_3)
                <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img
                      src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="Image" /></a>
                </div>
                @endif



              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8 mb-40">
              <div class="product-details">
                <h2 class="title">{{ $product->name }}</h2>
                <span class="price section"><span class="new">${{ $product->price }}.00</span></span>

                <div class="short-desc section">
                  <p><strong>Quick Overview:</strong> {!! $product->details !!}</p>
                </div>

                <div class="quantity-cart section">
                  <button type="button" class="add-to-cart"
                    onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}', price: {{ $product->price }}})">add
                    to
                    cart</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8 mb-40">
              <h2 class="despro">Product Description</h2>

              <div>
                {!! $product->description !!}
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>
@endforeach