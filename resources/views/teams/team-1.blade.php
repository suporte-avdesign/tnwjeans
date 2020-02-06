<section id="team" class="team">
    <div class="container">
        <div class="text-center top-text">
            <h1>Coleção  <span class="hot">Outono</span></h1>
            <h4>Compre Online</h4>
        </div>
        <div class="divider text-center">
            <span class="outer-line"></span>
            <span class="fa fa-users" aria-hidden="true"></span>
            <span class="outer-line"></span>
        </div>
        <div class="row team-members magnific-popup-gallery">
            @foreach($products as $product)
                <div class="team-products col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member">
                        @foreach($product->photos as $photo)
                            @if($loop->index == 1)
                                <a title="{{$product->description}}" href="{{$photo->url.$photo->orig}}" data-gal="magnific-pop-up[team]" class="team-member-img-wrap">
                                    <img src="{{$photo->url.$photo->large}}" alt="{{$product->name}}" height="400px">
                                </a>
                            @endif
                        @endforeach
                        <div class="team-member-caption social-icons">
                            <h4>{{$product->name}}</h4>
                            <p>Grade: <strong>{{str_replace(',', '/', $product->size_group_name)}}</strong></p>
                            <ul class="list list-inline social" style="display: block">
                                <li>
                                    <a href="javascript:void(0);" onclick="socialShare(3, '{{$product->id}}');" title="Compartilhar" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" title="COMPRAR" class="fa fa-cart-plus"></a>
                                </li>
                                <li>
                                    <a href="#" title="Whatsapp" class="fa fa-whatsapp"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>