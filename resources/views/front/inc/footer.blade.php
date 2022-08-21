</div>
<!-- SERVICE SECTION START -->
<div class="service-section section pt-70 pb-40">
    <div class="container">
        <div class="row">
            <!-- Single Service -->
            <div class="single-service col-lg-3 col-6 mb-6">
                <div class="service-icon">
                    <i class="pe-7s-world"></i>
                </div>
                <div class="service-title">
                    <h3>FREE SHIPPING</h3>
                    <p>Free shipping on all UK orders</p>
                </div>
            </div>
            <!-- Single Service -->
            <div class="single-service col-lg-3 col-6 mb-6">
                <div class="service-icon">
                    <i class="pe-7s-refresh"></i>
                </div>
                <div class="service-title">
                    <h3>FREE EXCHANGE</h3>
                    <p>30 days return on all items</p>
                </div>
            </div>
            <!-- Single Service -->
            <div class="single-service col-lg-3 col-6 mb-6">
                <div class="service-icon">
                    <i class="pe-7s-headphones"></i>
                </div>
                <div class="service-title">
                    <h3>PREMIUM SUPPORT</h3>
                    <p>We support online 24 hours a day</p>
                </div>
            </div>
            <!-- Single Service -->
            <div class="single-service col-lg-3 col-6 mb-6">
                <div class="service-icon">
                    <i class="pe-7s-gift"></i>
                </div>
                <div class="service-title">
                    <h3>BLACK FRIDAY</h3>
                    <p>Shocking discount on every friday</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE SECTION END -->
<!-- FOOTER TOP SECTION START -->
<div class="footer-top-section section pb-60 pt-100">
    <div class="container">
        <div class="row">
            <!-- Footer Widget -->
            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-8">
                <h4 class="widget-title">Contact Info</h4>
                <p><strong>Address :</strong> <span>28 Green Tower, Street Name, New York City, USA</span>
                </p>
                <p><strong>Phone :</strong> <span>+8880 44338899</span></p>
                <p><strong>Email :</strong> <a href="#">yourmail@outlook.com</a></p>
                <!-- Footer Social -->
                <div class="footer-social fix">
                    <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i
                            class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener"><i
                            class="fa fa-instagram"></i></a>
                    <a href="https://www.rss.com/" target="_blank" rel="noopener"><i class="fa fa-rss"></i></a>
                    <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i
                            class="fa fa-pinterest"></i></a>
                </div>
            </div>
            <!-- Footer Widget -->
            <div class="footer-widget link-widget col-lg-3 col-md-6 col-12 mb-8">
                <h4 class="widget-title">accounts</h4>
                <ul>
                    <li><a href="register.html">My Account</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">My Cart</a></li>
                    <li><a href="login.html">Sign In</a></li>
                    <li><a href="checkout.html">Check out</a></li>
                </ul>
            </div>
            <!-- Footer Widget -->
            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-8">
                <h4 class="widget-title">tags</h4>
                <div class="tag-cloud fix">
                    <a href="shop.html">brand</a>
                    <a href="shop.html">fashion</a>
                    <a href="shop.html">sale</a>
                    <a href="shop.html">winter sale</a>
                    <a href="shop.html">summer sale</a>
                    <a href="shop.html">men</a>
                    <a href="shop.html">women</a>
                    <a href="shop.html">kids</a>
                </div>
            </div>
            <!-- Footer Widget -->
            <div class="footer-widget col-lg-3 col-md-6 col-12 mb-8">
                <h4 class="widget-title">Newsletters</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor
                    incididunt.</p>
                <form class="sunscribe-form">
                    <input type="email" class="email" placeholder="Email Address">
                    <div class="clear"><input type="submit" class="button" value="Subscribe"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER TOP SECTION END -->

<!-- FOOTER BOTTOM SECTION START -->
<div class="footer-bottom-section section pb-20 pt-20">
    <div class="container">
        <div class="row">
            <!-- Copyright -->
            <div class="copyright text-center text-md-start col-md-6 col-12">
                <p>© 2022 Furnish. Made with <i class="fa fa-heart heart-icon"></i> By <a target="_blank"
                        href="https://hasthemes.com/">HasThemes</a></p>
            </div>
            <!-- Payment Method -->
            <div class="payment-method text-center text-md-end col-md-6 col-12">
                <a href="shop.html">
                    <img src="{{ asset('/') }}assets/front/img/payment/1.png" alt="payment" />
                    <img src="{{ asset('/') }}assets/front/img/payment/2.png" alt="payment" />
                    <img src="{{ asset('/') }}assets/front/img/payment/3.png" alt="payment" />
                    <img src="{{ asset('/') }}assets/front/img/payment/4.png" alt="payment" />
                </a>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER BOTTOM SECTION END -->



</div>
<!-- Body main wrapper end -->


<!-- Placed JS at the end of the document so the pages load faster -->

<!-- jQuery latest version -->
<script src="{{ asset('/') }}assets/front/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}assets/front/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Bootstrap js -->
<script src="{{ asset('/') }}assets/front/js/bootstrap.bundle.min.js"></script>
<!-- Plugins js -->
<script src="{{ asset('/') }}assets/front/js/plugins.js"></script>
<!-- Ajax Mail js -->
<script src="{{ asset('/') }}assets/front/js/ajax-mail.js"></script>
<!-- cart js -->
<!-- Main js -->
<script src="{{ asset('/') }}assets/front/js/cart.js"></script>
<script src="{{ asset('/') }}assets/front/js/main.js"></script>
<script>
    function renderCart(items) {
        const $cart = document.querySelector(".cart")
        const $count = document.querySelector(".itemstotal")
        $cart.innerHTML = items.map((item) => `
<div class="single-cart clearfix">
									<div class="cart-image">
										<a href="product-details.php"><img
												// src="{{ asset('/') }}assets/images/product/${item.image}"
												alt="Image"></a>
									</div>
									<div class="cart-info">
										<h5><a href="product-details.php">${item.name}</a></h5>
										<a type="button" href="#" class="cart-delete" title="Remove this item" onClick="cartLS.remove(${item.id})"><i
												class="pe-7s-trash"></i></a>
									</div>
								</div>`)
        $count.innerHTML = JSON.parse(localStorage.getItem('__cart')).length;
        document.querySelector(".totali").innerHTML = "$" + cartLS.total()
    }
    renderCart(cartLS.list())
    cartLS.onChange(renderCart)

    function renderCheckout(items) {
        const $cartcheck = document.querySelector(".cartcheck")
        $cartcheck.innerHTML = items.map((item) => `
								  <tr>
									 <td class="pro-thumbnail"><a href="product-details.html"><img
												 src="{{ asset('/') }}assets/images/product/${item.image}" alt="Image" /></a></td>
									 <td class="pro-title"><a href="product-details.html">${item.name}</a>
									 </td>
									 <td class="pro-price"><span class="amount"> $ ${item.price}</span></td>
									 <td class="pro-quantity">
										 <div class="product-quantity"><input type="text" value="${item.quantity}">
											<span class="dec qtybtn" ><i class="fa fa-angle-left" onClick="cartLS.quantity(${item.id},-1)"></i></span>
											<span class="inc qtybtn"><i class="fa fa-angle-right" onClick="cartLS.quantity(${item.id},1)"></i></span>
											</div>
									 </td>
									 <td class="pro-subtotal">${item.price * item.quantity}</td>
									 <td class="pro-remove"><a onClick="cartLS.remove(${item.id})">×</a></td>
								 </tr>
 `)

        document.querySelector(".totali").innerHTML = "$" + cartLS.total()
        // console.log(total())
    }
    renderCheckout(cartLS.list())
    cartLS.onChange(renderCheckout)
</script>
</body>



</html>
