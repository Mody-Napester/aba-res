@extends('@public._layouts.master_en')

@section('title') {{ trans('about.page_title') }} @endsection

@section('content')

    <div class="page-title-area" >
        <div class="container">
            <div class="page-title-content">
                <h2 >Cart</h2>
                <p id="breadcrumbs"><span><span><a href="../elearning-school/index.html">Home</a> &raquo; <span class="breadcrumb_last" aria-current="page">Cart</span></span></span></p>                                    </div>
        </div>

        <div class="shape9">
            <img sm-src="https://aba-resources.com//wp-content/themes/ecademy/assets/img/shape8.svg" alt="Shape Image One">
        </div>
    </div>

    <div class="page-main-content">

        <div class="page-area">
            <div class="container">
                <div id="post-1002" class="post-1002 page type-page status-publish hentry">

                    <div class="entry-content ecademy-Cart-un">
                        <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><p class="cart-empty woocommerce-info">Your cart is currently empty.</p>	<p class="return-to-shop">
                                <a class="button wc-backward" href="../shop/index.html">
                                    Return to shop		</a>
                            </p>
                        </div>
                    </div><!-- .entry-content -->

                </div><!-- #post-1002 -->



            </div>		</div>
    </div>

@endsection
