(function($) {

    var ipInfo = 'https://ipinfo.io?token=11df3951a4c876';

    disabledEle = function(ele) {
        $('#'+ele).html('<a href="javascript:void(0);" class="fas fa-spinner fa-pulse"></a>');
    }

    enabledEle = function(ele, a) {
        setTimeout(function(){
            $('#'+ele).html(a);
        }, 3000);

    }


    shareWhatsapp = function(id, idpro, ele) {
        var a = $('#'+ele).html();
        disabledEle(ele);

        $.get(ipInfo, function(response) {
            var data = {
                id: idpro,
                ip: response.ip,
                local: response.loc,
                city: response.city,
                region: response.region,
                country: response.country,
                zip_code: response.postal,
                social_network_id: id
            };
            postWhatsapp(data, ele, a);
        }, "jsonp");
    }

    postWhatsapp = function(data, ele, a)
    {
        $.ajax({
            url: '/ajax/share/whatsapp',
            type: 'POST',
            dataType: 'Json',
            data: data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                if (data.redirect) {
                    enabledEle(ele, a);
                    window.open(data.redirect);
                    /*
                    window.open('https://www.facebook.com/sharer/sharer.php?u='+
                        encodeURIComponent(data.redirect),
                        'facebook-share-dialog','width=626,height=400');
                    */
                }
            },
            error: function () {
                enabledEle(ele, a);
            }
        });
    }


    /**
     * Compartilhar na rede Social
     * @param id
     * @param idpro
     * @param ele
     */
    socialShare = function (id, idpro, ele) {
        var a = $('#'+ele).html();
        disabledEle(ele);
        $.get(ipInfo, function(response) {
            var data = {
                id: idpro,
                ip: response.ip,
                local: response.loc,
                city: response.city,
                region: response.region,
                country: response.country,
                zip_code: response.postal,
                social_network_id: id
            };
            postShare(data, ele, a);
        }, "jsonp");
    };

    /**
     * Passa os atributos para o analitic e redireciona para url social.
     * @param data
     */
    postShare = function(data, ele, a) {
        $.ajax({
            url: '/ajax/social/share',
            type: 'POST',
            dataType: 'Json',
            data: data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                if (data.redirect) {
                    enabledEle(ele, a);
                    window.open(data.redirect);
                    /*
                    window.open('https://www.facebook.com/sharer/sharer.php?u='+
                        encodeURIComponent(data.redirect),
                        'facebook-share-dialog','width=626,height=400');
                    */
                }
            },
            error: function () {
                enabledEle(ele, a);
            }
        });
    }

    /**
     * Vai fazer compras
     * @param id
     * @param idpro
     */
    goShopping = function (id, idpro, ele) {
        var a = $('#'+ele).html();
        disabledEle(ele);
        $.get(ipInfo, function(response) {
            var data = {
                id: idpro,
                ip: response.ip,
                local: response.loc,
                city: response.city,
                region: response.region,
                country: response.country,
                zip_code: response.postal,
                social_network_id: id
            };
            postShopping(data, ele, a);
        }, "jsonp");
    }

    /**
     * Post fazer compras
     * @param data
     * @param ele
     * @param a
     */
    postShopping = function(data, ele, a) {
        $.ajax({
            url: '/ajax/redirect/shopping',
            type: 'POST',
            dataType: 'Json',
            data: data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                if (data.redirect) {
                    enabledEle(ele, a);
                    window.open(data.redirect);
                }
            },
            error: function () {
                enabledEle(ele, a);
            }
        });
    }



    /**
     * Verifica a Rede Social e a localização do usuário
     *
     * @param id
     */
    socialFollow = function (id, ele) {
        var a = $('#'+ele).html();
        disabledEle(ele);
        $.get(ipInfo, function(response) {
            var data = {
                ip: response.ip,
                local: response.loc,
                city: response.city,
                region: response.region,
                country: response.country,
                zip_code: response.postal,
                social_network_id: id
            };
            postFollow(data, ele, a);
        }, "jsonp");
    };

    /**
     * Passa os atributos para o analitic e redireciona para url social.
     * @param data
     */
    postFollow = function(data, ele, a) {
        $.ajax({
            url: 'ajax/social/follow',
            type: 'POST',
            dataType: 'Json',
            data: data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                if (data.redirect) {
                    window.open(data.redirect);
                    enabledEle(ele, a);
                }
            },
            error: function () {
                enabledEle(ele, a);
            }
        });
    }


})(jQuery);