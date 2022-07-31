
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




<header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="432b262f2f2c6d202c2f2c312f2a2103242e222a2f6d202c2e">[email&#160;protected]</a>
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                      <!-- Button trigger modal -->
                        @guest 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Login
                        </button>
                        @endguest
                     @auth                
                    <a class="btn btn-primary" href="{{route('do-logout')}}">Logout</a>
                    @endauth
                    <a class="btn btn-primary" href="{{route('registration')}}">Register</a>




                </div>
            </div>
        </div>


        
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <script data-cfasync="false"
                                    src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script data-pagespeed-no-defer>
                                    //<![CDATA[
                                    (function () {
                                        for (var g = "function" == typeof Object.defineProperties ? Object
                                                .defineProperty : function (b, c, a) {
                                                    if (a.get || a.set) throw new TypeError(
                                                        "ES3 does not support getters and setters.");
                                                    b != Array.prototype && b != Object.prototype && (b[c] = a
                                                        .value)
                                                }, h = "undefined" != typeof window && window === this ? this :
                                                "undefined" != typeof global && null != global ? global : this,
                                                k = ["String", "prototype", "repeat"], l = 0; l < k.length -
                                            1; l++) {
                                            var m = k[l];
                                            m in h || (h[m] = {});
                                            h = h[m]
                                        }
                                        var n = k[k.length - 1],
                                            p = h[n],
                                            q = p ? p : function (b) {
                                                var c;
                                                if (null == this) throw new TypeError(
                                                    "The 'this' value for String.prototype.repeat must not be null or undefined"
                                                    );
                                                c = this + "";
                                                if (0 > b || 1342177279 < b) throw new RangeError(
                                                    "Invalid count value");
                                                b |= 0;
                                                for (var a = ""; b;)
                                                    if (b & 1 && (a += c), b >>>= 1) c += c;
                                                return a
                                            };
                                        q != p && null != q && g(h, n, {
                                            configurable: !0,
                                            writable: !0,
                                            value: q
                                        });
                                        var t = this;

                                        function u(b, c) {
                                            var a = b.split("."),
                                                d = t;
                                            a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                            for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[
                                                e] ? d = d[e] : d = d[e] = {} : d[e] = c
                                        };

                                        function v(b) {
                                            var c = b.length;
                                            if (0 < c) {
                                                for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                                return a
                                            }
                                            return []
                                        };

                                        function w(b) {
                                            var c = window;
                                            if (c.addEventListener) c.addEventListener("load", b, !1);
                                            else if (c.attachEvent) c.attachEvent("onload", b);
                                            else {
                                                var a = c.onload;
                                                c.onload = function () {
                                                    b.call(this);
                                                    a && a.call(this)
                                                }
                                            }
                                        };
                                        var x;

                                        function y(b, c, a, d, e) {
                                            this.h = b;
                                            this.j = c;
                                            this.l = a;
                                            this.f = e;
                                            this.g = {
                                                height: window.innerHeight || document.documentElement
                                                    .clientHeight || document.body.clientHeight,
                                                width: window.innerWidth || document.documentElement
                                                    .clientWidth || document.body.clientWidth
                                            };
                                            this.i = d;
                                            this.b = {};
                                            this.a = [];
                                            this.c = {}
                                        }

                                        function z(b, c) {
                                            var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                            if (a = e && !(e in b.c))
                                                if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                                else {
                                                    d = c.getBoundingClientRect();
                                                    var f = document.body;
                                                    a = d.top + ("pageYOffset" in window ? window.pageYOffset : (
                                                            document.documentElement || f.parentNode || f)
                                                        .scrollTop);
                                                    d = d.left + ("pageXOffset" in window ? window.pageXOffset : (
                                                            document.documentElement || f.parentNode || f)
                                                        .scrollLeft);
                                                    f = a.toString() + "," + d;
                                                    b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g
                                                        .height && d <= b.g.width)
                                                } a && (b.a.push(e),
                                                b.c[e] = !0)
                                        }
                                        y.prototype.checkImageForCriticality = function (b) {
                                            b.getBoundingClientRect && z(this, b)
                                        };
                                        u("pagespeed.CriticalImages.checkImageForCriticality", function (b) {
                                            x.checkImageForCriticality(b)
                                        });
                                        u("pagespeed.CriticalImages.checkCriticalImages", function () {
                                            A(x)
                                        });

                                        function A(b) {
                                            b.b = {};
                                            for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a
                                                .concat(v(document.getElementsByTagName(c[d])));
                                            if (a.length && a[0].getBoundingClientRect) {
                                                for (d = 0; c = a[d]; ++d) z(b, c);
                                                a = "oh=" + b.l;
                                                b.f && (a += "&n=" + b.f);
                                                if (c = !!b.a.length)
                                                    for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a
                                                        .length; ++d) {
                                                        var e = "," + encodeURIComponent(b.a[d]);
                                                        131072 >= a.length + e.length && (a += e)
                                                    }
                                                b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())),
                                                    131072 >= a.length + e.length && (a += e), c = !0);
                                                C = a;
                                                if (c) {
                                                    d = b.h;
                                                    b = b.j;
                                                    var f;
                                                    if (window.XMLHttpRequest) f =
                                                        new XMLHttpRequest;
                                                    else if (window.ActiveXObject) try {
                                                        f = new ActiveXObject("Msxml2.XMLHTTP")
                                                    } catch (r) {
                                                        try {
                                                            f = new ActiveXObject("Microsoft.XMLHTTP")
                                                        } catch (D) {}
                                                    }
                                                    f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") +
                                                            "url=" + encodeURIComponent(b)), f.setRequestHeader(
                                                            "Content-Type", "application/x-www-form-urlencoded"
                                                            ), f.send(a))
                                                }
                                            }
                                        }

                                        function B() {
                                            var b = {},
                                                c;
                                            c = document.getElementsByTagName("IMG");
                                            if (!c.length) return {};
                                            var a = c[0];
                                            if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                            for (var d = 0; a = c[d]; ++d) {
                                                var e = a.getAttribute("data-pagespeed-url-hash");
                                                e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a
                                                    .naturalWidth && 0 < a.naturalHeight || e in b && a.width >=
                                                    b[e].o && a.height >= b[e].m) && (b[e] = {
                                                    rw: a.width,
                                                    rh: a.height,
                                                    ow: a.naturalWidth,
                                                    oh: a.naturalHeight
                                                })
                                            }
                                            return b
                                        }
                                        var C = "";
                                        u("pagespeed.CriticalImages.getBeaconData", function () {
                                            return C
                                        });
                                        u("pagespeed.CriticalImages.Run", function (b, c, a, d, e, f) {
                                            var r = new y(b, c, a, e, f);
                                            x = r;
                                            d && w(function () {
                                                window.setTimeout(function () {
                                                    A(r)
                                                }, 0)
                                            })
                                        });
                                    })();

                                    pagespeed.CriticalImages.Run('/mod_pagespeed_beacon',
                                        'https://preview.colorlib.com/theme/fashi/', '-ilGEe-FWC', true, false,
                                        'mtwWYMKPxlg');
                                    //]]>

                                </script><img
                                    src="data:image/webp;base64,UklGRiIBAABXRUJQVlA4TBYBAAAvV4AFEI9AkG1Tmale/QoCgSSZ/R0mEwikOIsJJsi2me3sd4QnqI+dXRCQJElyImW2pBoadv7/3BKoVceI/k8AXplJUhCvJJkR3Xky/1cJnn3JhT/LXEjWgU6S3ZiSSBbZQ6OS7NPIJCl3Ce0aafTb7lXa8zErT6rGqDjBfEtww5EumIym4xzXhwh1nRjJG6pMTCns8OrEYshDisoAsJ3o0Nv00gEgqf6QpEShOFORVQZMowNAVe0OQZB6NZqDxdB99yRQn3Fcg1Ecpv0tMMQoAQBDimK76/Nlfi4oqqiNnkzoI5NMrxHFNjGydyQWWYE1keRrdiPagcFweQ3kghob78Hi1O6MHBG8CFsnWQc8YJWssux4DA=="
                                    alt="" data-pagespeed-url-hash="1652065695"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img
                                                            src="data:image/webp;base64,UklGRvABAABXRUJQVlA4IOQBAABwDACdASpGAEYAPm0ylkckIyIhqlQKWIANiWcA1WGLg72RTlG9GjOvoizGSSN+36xyU/QF8a+os7ZJl6KvZmgfSQR3wWzyvkGUg3tuYZWJRVVG69yP7mbdiW0zUo1ek4m4/ruMa8+jXfpPAwAA/vsNFaChzMEk1xhyOA+1fI7xPdgjri8iBhHMyY4ZV/4wFnSzpBDIm6yy+jLMsuhCcFexgVBv4AIoqE5gIOcD8A6hMsGruOzWGaQFFg47OqZS/AlsbLGS0Qtx3jWnANWHRF9cg4uIW+O4H4/dz+NejgEYbZwNZ7ClvsSqnEKiTJ5iL9IMtY72Ie5RoXnKiB3zL3ZEBi7JyPqE0ZfNLxwCKBxcNcRGvPHotGMLhdqhP7mfLftB5zV8Kajftr99adPh7Cdiznjnj22LIpTHXOLFCDSoEgEX+lVO06nJ9gSZuVRzXnkjSVLeVUk9BYWG7eLVUcCU90FSpvqIPp2eTxh8opmmGmraWzr39KAEomEGvOZ9ahfHYR5n0zKh+u9BFze2VfX9jrTjA6+sIAMNwYc3rSJjrFy+XHjvLFeU251btGRtxFZ6iU9aIndcMwM6l5xddY9Vk+N1OCgj9YpM8NmlzcBCwnfSEf4pXa8LrvK+YZRBweAamEAA"
                                                            alt="" data-pagespeed-url-hash="697362414"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img
                                                            src="data:image/webp;base64,UklGRvoCAABXRUJQVlA4IO4CAADwDwCdASpGAEYAPm0ylEekIyIhqPSaqIANiUAPL0RW+XgJ/9jdAc7B6AN4p/Y72GP1g61HIo9pd64x62+s5egH1O1soy7olYtrms4m5OqZvtFnRDgQ42YjdeW2lK//Bwa0IGb4Qzr4JK/v4QQ8I82bQDDdg44JhemmweUMZX9IxvW6NHN+neIAAP77cJfuudPn0fnL2+D4z++Q5HQxog9JjomGB25aDxX94c9dm9UFpwO8zeL+6sX1uuE6AanashgDRWP+jIzBH/L7bGvuav8mhkJ7K2N3pclwXzcv/4yw5VCZ77U1muEDydjtjTz6v9JguxcYzOnMIt93X7rhMb5lzPy9B6mjo9zQCbEbnycly5z0Pc3Rqs61vGUSwpvOV5F89sfFl5PiiU0wRy7doiE+dJvVCt/jC09tPz8GwcQaZMUwSAzKyxpmZsutI1vLrApYyxM+Ko9LFvrhEE/lyin7OeMmK7nTGlHqQYujJuHT83gq//EZJu3F1E1v1KxmANB0zlejc2ZNQ1kY7nbwmGugbv7siU6dS+wUHTkyBP1PVa/g7oICmVxySRkr/j/8HrbIXfHTmsee1rhMqn8NP3g5R1sj97px2X2ArmhYxAemzHSjj4+ztFN9fKzA8wRV6xAG+xiTSTkyzIreX9h+BY6zGx6RJrz48B/ntbqW/F5avaSHuXoIdH85kJcbV4A9T4U/yWmueN9XARZ2OOz9AQ16TsZSNJPG/KMyOgmhIAWbIfabZwe8BwQrh8mtFRzyjORgDQ6H0tetZOnV8P65ELc8eBChpR1lsbwT2gfwUQGJVA4YNY3UMDOrnLUr6mysT0K2mcHwiik6bElrIPppkTGFOlU2GcUBWdOv+hV8lf2CQ+fbvarWZzsS5uC1nBYsjBsexYqMRQrQ5uwkxbmR7IDKCx/URHe+4FnCf14Hy93SIM4M9foR6lMsFwujSqNSVWIifStpfuJuMYpG5S//yz/BwxHz/ur/VLVm06x+AAA="
                                                            alt="" data-pagespeed-url-hash="991862335"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$150.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">

                        <span>All departments</span>
                        <ul class="depart-hover">
                            @foreach($categories as $cat)
                            <li class="active">
                                <a href="">{{$cat->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                                <li><a href="./register.html">Register</a></li>
                                <li><a href="./login.html">Login </a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>







    
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Customer Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
    </div>
  </div>
</div>
  