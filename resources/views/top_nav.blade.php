<!-- TOP NAV -->
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="/">
                       Be Elite Store
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="/boots">
                            BOOT ROOM
                        </a>
                    </li>
                    <!--li>
                        <a href="#">
                            CONTACT
                        </a>
                    </li-->
                    <li>
                        <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            CART
                            <span class="">
                                ({{Cart::count()}})
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>