var cartLS = function (a) {
	'use strict';

	function b(a, b, c) {
		return b in a ? Object.defineProperty(a, b, {
			value: c,
			enumerable: !0,
			configurable: !0,
			writable: !0
		}) : a[b] = c, a
	}

	function c(a, b) {
		var c = Object.keys(a);
		if (Object.getOwnPropertySymbols) {
			var d = Object.getOwnPropertySymbols(a);
			b && (d = d.filter(function (b) {
				return Object.getOwnPropertyDescriptor(a, b).enumerable
			})), c.push.apply(c, d)
		}
		return c
	}

	function d(a) {
		for (var b, d = 1; d < arguments.length; d++) b = null == arguments[d] ? {} : arguments[d], d % 2 ? c(b, !0).forEach(function (c) {
			f(a, c, b[c])
		}) : Object.getOwnPropertyDescriptors ? Object.defineProperties(a, Object.getOwnPropertyDescriptors(b)) : c(b).forEach(function (c) {
			Object.defineProperty(a, c, Object.getOwnPropertyDescriptor(b, c))
		});
		return a
	}
	var e = function (a, b) {
		return b = {
			exports: {}
		}, a(b, b.exports), b.exports
	}(function (a) {
		function b(a) {
			return b = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (a) {
				return typeof a
			} : function (a) {
				return a && "function" == typeof Symbol && a.constructor === Symbol && a !== Symbol.prototype ? "symbol" : typeof a
			}, b(a)
		}

		function c(d) {
			return a.exports = "function" == typeof Symbol && "symbol" === b(Symbol.iterator) ? c = function (a) {
				return b(a)
			} : c = function (a) {
				return a && "function" == typeof Symbol && a.constructor === Symbol && a !== Symbol.prototype ? "symbol" : b(a)
			}, c(d)
		}
		a.exports = c
	}),
		f = b,
		g = "__cart",
		h = null,
		i = function (a) {
			h = a
		},
		j = function (a) {
			return JSON.parse(localStorage.getItem(a || g)) || []
		},
		k = function (a, b) {
			localStorage.setItem(b || g, JSON.stringify(a)), h && h(j(b || g))
		},
		l = function (a) {
			localStorage.removeItem(a || g), h && h(j(a || g))
		},
		m = function (a) {
			return j().find(function (b) {
				return b.id === a
			})
		},
		n = function (a) {
			return !!m(a)
		},
		o = function (a) {
			return k(j().filter(function (b) {
				return b.id !== a
			}))
		},
		p = function (a, b, c) {
			return k(j().map(function (e) {
				return e.id === a ? d({}, e, f({}, b, c)) : e
			}))
		},
		q = function (a) {
			return a.id && a.price
		},
		r = function (a) {
			return s(a) ? a.price * a.quantity : 0
		},
		s = function (a) {
			return a && a.price && a.quantity
		},
		t = function (a) {
			return a && "function" == typeof a
		};
	return a.add = function (a, b) {
		return q(a) ? n(a.id) ? p(a.id, "quantity", m(a.id).quantity + (b || 1)) : k(j().concat(d({}, a, {
			quantity: b || 1
		}))) : null
	}, a.destroy = function () {
		return l()
	}, a.exists = n, a.get = m, a.list = j, a.onChange = function (a) {
		return t(a) ? i(a) : console.log(e(a))
	}, a.quantity = function (a, b) {
		return n(a) && 0 < m(a).quantity + b ? p(a, "quantity", m(a).quantity + b) : o(a)
	}, a.remove = o, a.subtotal = r, a.total = function (a) {
		return j().reduce(function (b, c) {
			return t(a) ? a(b, c) : b += r(c)
		}, 0)
	}, a.update = p, a
}({});

//# sourceMappingURL=cart-localstorage.min.js.map

// function renderCheckout(items) {
// 	const $cartcheck = document.querySelector(".cartcheck")
// 	const $totali = document.querySelector(".totalii")
// 	$cartcheck.innerHTML = items.map((item) => `
// 								  <tr>
// 									 <td class="pro-thumbnail"><a href="product-details.html"><img
// 												 src="{{ asset('/') }}assets/images/product/${item.image}" alt="Image" /></a></td>
// 									 <td class="pro-title"><a href="product-details.html">${item.name}</a>
// 									 </td>
// 									 <td class="pro-price"><span class="amount"> $ ${item.price}</span></td>
// 									 <td class="pro-quantity">
// 										 <div class="product-quantity"><input type="text" value="${item.quantity}">
// 											<span class="dec qtybtn" ><i class="fa fa-angle-left" onClick="cartLS.quantity(${item.id},-1)"></i></span>
// 											<span class="inc qtybtn"><i class="fa fa-angle-right" onClick="cartLS.quantity(${item.id},1)"></i></span>
// 											</div>
// 									 </td>
// 									 <td class="pro-subtotal">${item.price * item.quantity}</td>
// 									 <td class="pro-remove"><a onClick="cartLS.remove(${item.id})">×</a></td>
// 								 </tr>
//  `).join("")

// $totali.innerHTML = "$" + cartLS.total()
// }
// renderCheckout(cartLS.list())
// cartLS.onChange(renderCheckout)

