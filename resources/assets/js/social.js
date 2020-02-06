(function($) {

    /**
     * Verifica a Rede Social e a localização do usuário
     *
     * @param id
     */
    socialFollow = function (id) {
        $.get("https://ipinfo.io?token=11df3951a4c876", function(response) {
            var data = {
                ip: response.ip,
                local: response.loc,
                city: response.city,
                region: response.region,
                country: response.country,
                zip_code: response.postal,
                social_network_id: id
            };
            postFollow(data);

        }, "jsonp");
    };

    /**
     * Passa os atributos para o analitic e redireciona para url social.
     * @param data
     */
    postFollow = function(data) {
        $.ajax({
            url: 'ajax/social/follow',
            type: 'POST',
            dataType: 'Json',
            data: data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

            success: function (data) {
                if (data.redirect) {
                    window.open(data.redirect);
                }
            }
        });
    }

    socialShare = function (id, idpro) {
        $.get("https://ipinfo.io?token=11df3951a4c876", function(response) {
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
            postShare(data);
        }, "jsonp");
    };

    /**
     * Passa os atributos para o analitic e redireciona para url social.
     * @param data
     */
    postShare = function(data) {
        $.ajax({
            url: '/ajax/social/share',
            type: 'POST',
            dataType: 'Json',
            data: data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                if (data.redirect) {
                    window.open(data.redirect);
                    /*
                    window.open('https://www.facebook.com/sharer/sharer.php?u='+
                        encodeURIComponent(data.redirect),
                        'facebook-share-dialog','width=626,height=400');
                    */
                }
            }
        });
    }

    changeMetaContent = function(metaName, newMetaContent) {
        $("meta").each(function() {

            if($(this).attr("name") == metaName) {
                $(this).attr("content" , newMetaContent);
            };
        });
    }

})(jQuery);