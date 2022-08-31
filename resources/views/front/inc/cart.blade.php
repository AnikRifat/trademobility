<div class="cart-totals d-flex justify-content-between align-items-center">
    <div>
        <h5>Total : <span class="totali"></span></h5>
    </div>
    <div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>

</div>


<!-- Cart Products -->
<div class="cart-box">
    <div class="cart-items">
        <p>You have <span class="text-warning"> <strong class="itemstotalcart"> </strong> items</span> in your shopping
            bag</p>
    </div>
    <div class="all-cart-product cart clearfix">


    </div>
    {{-- --}}
    <div class="cart-bottom  clearfix">
        <a href="{{ route('cart') }}">Cart</a>
    </div>
</div>

<!-- Cart Button -->