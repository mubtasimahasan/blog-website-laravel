<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/service.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <div id="app">
            @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        </div>
        <header >
            {{-- <div class="top-nav container">
                <div class="logo">Laravel Ecommerce</div>
                <ul>
                    <li><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="/posts">Blog</a></li>
                    <li><a href="#">Cart <span class="cart-count"><span>3</span></span></a></li>
                </ul>
            </div> <!-- end top-nav --> --}}
           
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Laravel Ecommerce</h1>

                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>

                {{-- <div class="tabs">
                    <div class="tab">
                        Featured
                    </div>
                    <div class="tab">
                        On Sale
                    </div>
                </div> --}}

                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                        <a href="#"><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$2499.99</div>
                    </div>
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="#" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->



        {{-- @include('partials.footer') --}}


    </body>
</html>
