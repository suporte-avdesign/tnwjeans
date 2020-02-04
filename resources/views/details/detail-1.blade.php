<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Swatches Style &ndash; Belle Multipurpose Bootstrap 4 Template</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('details/css/plugins.css')}}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{asset('details/css/bootstrap.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('details/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('details/css/responsive.css')}}">
</head>
<body class="template-product belle">
<div class="pageWrapper">
    <!--Body Content-->
    <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">

            <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                <!--product-single-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-details-img">
                                <div class="product-thumb">
                                    <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                        @foreach($product->images as $image)
                                            <a data-image="{{$image->url.$image->sizes->large->path}}" data-zoom-image="{{$image->url.$image->sizes->orig->path}}" class="slick-slide slick-cloned" data-slick-index="{{$loop->index}}" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{$image->url.$image->sizes->small->path}}" src="{{$image->url.$image->sizes->small->path}}" alt="" />
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="zoompro-wrap product-zoom-right pl-20">
                                    <div class="zoompro-span">
                                        @foreach($product->images as $image)
                                            @if($loop->index == 0)
                                                <img class="{{$image->url.$image->sizes->orig->path}}" alt="" src="{{$image->url.$image->sizes->orig->path}}" />
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="product-buttons">
                                        <a href="#" class="btn prlightbox" title="Zoom">
                                            <i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="lightboximages">
                                    @foreach($product->images as $image)
                                        <a href="{{$image->url.$image->sizes->orig->path}}" data-size="{{$image->sizes->orig->width}}x{{$image->sizes->orig->height}}"></a>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12"></div>
                    </div>
                </div>
            </div>
            <!--#ProductSection-product-template-->
        </div>
        <!--MainContent-->
    </div>

    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>

    <!-- Including Jquery -->
    <script src="{{asset('details/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('details/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('details/js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('details/js/wow.min.js')}}"></script>
    <!-- Including Javascript -->
    <script src="{{asset('details/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('details/js/plugins.js')}}"></script>
    <script src="{{asset('details/js/popper.min.js')}}"></script>
    <script src="{{asset('details/js/lazysizes.js')}}"></script>
    <script src="{{asset('details/js/main.js')}}"></script>

    <!-- Photoswipe Gallery -->
    <script src="{{asset('details/js/photoswipe.min.js')}}"></script>
    <script src="{{asset('details/js/photoswipe-ui-default.min.js')}}"></script>
    <script>
        $(function(){
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function() {
                    var items = [];
                    $('.lightboximages a').each(function() {
                        var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            item = {
                                src : $href,
                                w: $size[0],
                                h: $size[1]
                            }
                        items.push(item);
                    });
                    return items;
                }
            var items = getItems();

            $.each(items, function(index, value) {
                image[index]     = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();

                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index-1;

                var options = {
                    index: $index,
                    bgOpacity: 0.9,
                    showHideOpacity: true
                }
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
    </script>
</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Fechar (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Compartilhar"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Anterior (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Proximo (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

</body>
</html>