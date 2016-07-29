@extends('frontend/layout/product')

@section('htmlschema')
itemscope itemtype="http://schema.org/Product"
@endsection

@section('seo')@endsection

@section('jsonschema')@endsection

@section('title')
{!! $product->name !!} | Manufactured By The Grace Company
@endsection

@section('bodyschema')@endsection
@section('bodytag')@endsection
@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection
@section('submenu')@endsection
@section('slider')@endsection
@section('intro')@endsection


@section('page-title')
<section id="page-title">

    <div class="container clearfix">
        <h1>{!! $product->name !!}</h1>
        <span
        >{!! $product->subtitle !!}</span>
        <ol class="breadcrumb">
            <li><a href="{{ url(getLang().'/') }}">Home</a></li>
            <li><a href="{{ url(getLang().'/shop') }}">Shop</a></li>
            <li class="active">Product</li>
        </ol>
    </div>

</section>
@endsection

@section('content')

        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="single-product">

                        <div class="product">

                            <div class="col_two_fifth">

                                <!-- Product Single - Gallery
                                ============================================= -->
                                <div class="product-image">
                                    <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                        <div class="flexslider">
                                            <div class="slider-wrap" data-lightbox="gallery">
                                            @if($product->primary_image)
                                                    @if($product->primary_image)
                                                        <div class="slide" data-thumb="{!! url($product->path . $product->primary_image) !!}" style="width: 413px; float: left; display: block;">
                                                            <a href="{!! url($product->path . $product->primary_image) !!}" title="{!! $product->primary_image_label !!}" data-lightbox="gallery-item">
                                                                <img src="{!! url($product->path . $product->primary_image) !!}" alt="{!! $product->primary_image_label !!} image" draggable="false">
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if($product->second_image)
                                                        <div class="slide" data-thumb="{!! url($product->path . $product->second_image) !!}" style="width: 413px; float: left; display: block;">
                                                            <a href="{!! url($product->path . $product->second_image) !!}" title="{!! $product->second_image_label !!} - Front View" data-lightbox="gallery-item">
                                                                <img src="{!! url($product->path . $product->second_image) !!}" alt="{!! $product->second_image_label !!} image" draggable="false">
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if($product->third_image)
                                                        <div class="slide" data-thumb="{!! url($product->path . $product->third_image) !!}" style="width: 413px; float: left; display: block;">
                                                            <a href="{!! url($product->path . $product->third_image) !!}" title="{!! $product->third_image_label !!}" data-lightbox="gallery-item">
                                                                <img src="{!! url($product->path . $product->third_image) !!}" alt="{!! $product->third_image_label !!} image" draggable="false">
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if($product->fourth_image)
                                                        <div class="slide" data-thumb="{!! url($product->path . $product->fourth_image) !!}" style="width: 413px; float: left; display: block;">
                                                            <a href="{!! url($product->path . $product->fourth_image) !!}" title="{!! $product->fourth_image_label !!}" data-lightbox="gallery-item">
                                                                <img src="{!! url($product->path . $product->fourth_image) !!}" alt="{!! $product->fourth_image_label !!} image" draggable="false">
                                                            </a>
                                                        </div>
                                                    @endif
                                                    @if($product->fifth_image)
                                                        <div class="slide" data-thumb="{!! url($product->path . $product->fifth_image) !!}" style="width: 413px; float: left; display: block;">
                                                            <a href="{!! url($product->path . $product->fifth_image) !!}" title="{!! $product->fifth_image_label !!}" data-lightbox="gallery-item">
                                                                <img src="{!! url($product->path . $product->fifth_image) !!}" alt="{!! $product->fifth_image_label !!} image" draggable="false">
                                                            </a>
                                                        </div>
                                                    @endif


 

                                                @else
                                                    <div class="slide" data-thumb="http://placehold.it/413/2851CC/ffffff" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                                        <a href="http://placehold.it/720x960/2851CC/ffffff?text=image+one" title="{!! $product->name !!}" data-lightbox="">
                                                            <img src="http://placehold.it/720x960/2851CC/ffffff?text=image+one" alt="{!! $product->name !!} image" draggable="false">
                                                        </a>
                                                    </div>
                                                     <div class="slide" data-thumb="http://placehold.it/413/AF2323/ffffff" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                                        <a href="http://placehold.it/720x960/AF2323/ffffff?text=image+two" title="{!! $product->name !!}" data-lightbox="">
                                                            <img src="http://placehold.it/720x960/AF2323/ffffff?text=image+two" alt="{!! $product->name !!} image" draggable="false">
                                                        </a>
                                                    </div>
                                                    <div class="slide" data-thumb="http://placehold.it/413/468B4E/FFFFFF" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                                        <a href="http://placehold.it/720x960/468B4E/FFFFFF?text=image+three" title="{!! $product->name !!}" data-lightbox="">
                                                            <img src="http://placehold.it/720x960/468B4E/FFFFFF?text=image+three" alt="{!! $product->name !!} image" draggable="false">
                                                        </a>
                                                    </div>
                                                @endif
                                            {{--       <div class="slide" data-thumb="images/shop/thumbs/dress/3.jpg"><a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                                                <div class="slide" data-thumb="images/shop/thumbs/dress/3-1.jpg"><a href="images/shop/dress/3-1.jpg" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                                                <div class="slide" data-thumb="images/shop/thumbs/dress/3-2.jpg"><a href="images/shop/dress/3-2.jpg" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @if($product->sale_price)
                                    <div class="sale-flash">Sale!</div>
                                    @endif
                                </div><!-- Product Single - Gallery End -->

                            </div>

                            <div class="col_two_fifth product-desc">

                                <!-- Product Single - Price
                                ============================================= -->
                                <!-- Product Single - Price ============================================= -->
                                @if($product->sale_price)
                                <div class="product-price" itemprop="price"><del>$39.99</del> <ins>$24.99</ins></div>
                                @elseif($product->ispromo)
                                <!-- Product Single - Price End -->
                                <div class="product-price" itemprop="price">Promo: <del>$39.99</del> <ins>$24.99</ins></div>
                                @else
                                <!-- Product Single - Price End -->
                                <div class="product-price" itemprop="price"> <ins>${!! $product->price !!}</ins></div>
                                @endif
@if($product->rating)
                                <!-- Product Single - Rating
                                ============================================= -->
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div><!-- Product Single - Rating End -->
@endif
                                <div class="clear"></div>
                                <div class="line"></div>

                                <!-- Product Single - Quantity & Cart Button
                                ============================================= -->
                                <form action="/cart/add" class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
                                    <div class="quantity clearfix">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                                        <input type="button" value="+" class="plus">
                                    </div>
                                
                                    <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                                    </form>
                                </form><!-- Product Single - Quantity & Cart Button End -->

                                <div class="clear"></div>
                                <div class="line"></div>

                                <!-- Product Single - Short Description
                                ============================================= -->
                               @if ($product->short_description)
                                <!-- Product Single - Short Description ============================================= -->
                                {!! $product->short_description !!}
                                <br />
                                <br />
                                {{-- {!! $product->features[0]->feature_name !!} --}}
                                    <ul class="iconlist ">
                                    @if($product->features)
                                        @foreach($product->features as $feature)
                                            <li> 
                                            @if($feature->useicon == true)
                                            <i class="icon-caret-right"></i>
                                            @endif
                                            {!! $feature->feature_name !!}
                                            </li>  
                                        @endforeach
                                    @endif
                                    </ul>
                                @endif

                                <!-- Product Single - Meta
                                ============================================= -->
                                <div class="panel panel-default product-meta">
                                    <div class="panel-body" itemprop="brand" itemscope itemtype="http://schema.org/Organization">
                                    <span itemprop="name">Brand: <strong>Grace </strong></span>

                                        <div itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization">
                                          @if($product->manufacturer)
                                          Manufactured by: <span itemprop="name"><strong>{!! $product->manufacturer !!}</strong></span>
                                          @else
                                          Manufactured by: <strong>The Grace Company</strong>
                                          @endif
                                        </div>


                                        <div>Model: <span itemprop="model"><strong>{!! $product->model !!}</strong></span></div>
                                        <div>MPN: <span itemprop="model"><strong>{!! $product->mpn !!}</strong></span></div>
                                        <div>Product ID: <span itemprop="productID"><strong>{!! $product->id !!}</strong></span></div>
                                        <div>Condition: <link itemprop="itemCondition" href="http://schema.org/NewCondition" /> New</div>

                                      {{--   <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku"><strong>{!! $product->sku !!}</strong></span></span> --}}
                                        <span itemprop="productUPC" class="sku_wrapper">UPC: <span class="upc"><strong>{!! $product->upc !!}</strong></span></span>
                                         {{-- <span class="posted_in">Category: <a href="#" rel="tag">{!! $product->category[]->title !!}</a>.</span>  --}}
                                        {{--  <span class="tagged_as">Tags:
                                            <a href="#" rel="tag">Pink</a>,
                                            <a href="#" rel="tag">Short</a>,
                                            <a href="#" rel="tag">Dress</a>,
                                            <a href="#" rel="tag">Printed</a>.
                                        </span> --}}
                                        @if($product->rating)
                                        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                            <span itemprop="ratingValue">rating</span> based on <span itemprop="reviewCount">reviewcount</span> reviews</div>
                                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                             <link itemprop="itemCondition" href="http://schema.org/NewCondition" /> New
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                <!-- Product Single - Share
                                ============================================= -->
                                <div class="si-share noborder clearfix">
                                    <span>Share:</span>
                                    <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div><!-- Product Single - Share End -->

                            </div>

                            <div class="col_one_fifth col_last">

                                <img class="image_fade" src="{!! asset('frontend/images/grace-brand.jpg') !!}" alt="Brand Logo">

                                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-thumbs-up2"></i>
                                    </div>
                                    <h3>100% Grace</h3>
                                    <p class="notopmargin">We guarantee you the sale of Our Original Products.</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-credit-cards"></i>
                                    </div>
                                    <h3>Payment Options</h3>
                                    <p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-truck2"></i>
                                    </div>
                                    <h3>Fast Shipping</h3>
                                    <p class="notopmargin">We Deliver to 100+ Locations around the world.</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-undo"></i>
                                    </div>
                                    <h3>30-Days Returns</h3>
                                    <p class="notopmargin">Return or exchange items purchased within 30 days.</p>
                                </div>

                            </div>

                            <div class="col_full nobottommargin">

                                <div class="tabs clearfix nobottommargin" id="tab-1">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> Description</span></a></li>

                                        <li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="hidden-xs"> Additional Information</span></a></li>
                                        @if($product->reviews)
                                        <li><a href="#tabs-3"><i class="icon-star3"></i><span class="hidden-xs"> Reviews (2)</span></a></li>
                                        @endif
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                        {!! $product->description !!}
                                        </div>
                                        @if(isset($product) && $product->variants->count()>0)
                                        <br style="clear:both" />
                                         
                                        <div class="tab-content clearfix" id="tabs-2">
                                        <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <table class="table table-striped table-bordered">
                                                    <tbody>
                                                    @foreach($product->variants as $variant)
                                                        <tr>
                                                            <td>{!! $variant->attribute_name !!}</td>
                                                            <td>{!! $variant->product_attribute_value !!}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                              <div class="col-md-2"></div>
                                        </div>
                                        @endif
                                        @if($product->reviews)

                                        @include('frontend.shop.partials.reviews')
                                        @endif
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="clear"></div><div class="line"></div>

                    <div class="col_full nobottommargin">

                        <h4>Related Products</h4>

                        <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                        <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                        <div class="sale-flash">50% Off*</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                        <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                        <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                        <div class="product-price">$39.99</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a>
                                        <a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                        <div class="product-price">$49</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                        <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                        <div class="product-price">$19.95</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                        <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                        <div class="sale-flash">Sale!</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                        <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->

@endsection



@section('footer_scripts')
@endsection

@section('pp_footer_scripts')
@endsection

@section('inlinejs')

@endsection
