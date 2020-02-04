<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="http://www.tnwjeans.com.br/debora-seco-2017" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Titulo da foto" />
    <meta property="og:description"   content="Descrição da Foto" />
    <meta property="og:image"         content="http://www.tnwjeans.com.br/debora-seco-2017/imagens/lookbook/270x345/shorts-jeans5-1.jpg" />
</head>
<body>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button"
     data-href="http://www.tnwjeans.com.br/debora-seco-2017"
     data-layout="button_count">
</div>

</body>
</html>