<section id="lacalizacao" class="contact">
    <div class="container">
        <div class="text-center top-text">
            <h1><span>Mapa</span> Localização</h1>
            <h4>Rua Xavantes, 596 - Brás - São Paulo</h4>
        </div>
        <div class="divider text-center">
            <span class="outer-line"></span>
            <span class="fa fa-map-marker" aria-hidden="true"></span>
            <span class="outer-line"></span>
        </div>
    </div>
    <div class="info-map">
        <div class="google-map">
            <div class="gmap_container">
                <div id="gmap_canvas"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row info-map-boxes">
            <div class="col-md-6 col-sm-12">
                <div class="info-map-boxes-item fa fa-clock-o">
                    <h1>NOSSO HORÁRIO:</h1>
                    <p> Seg. a Sex. das 8:00 ás 17:00
                        <br>Sábado das das 8:00 ás 11:00
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="info-map-boxes-item fa fa-phone">
                    <h1>CONTATO ONLINE</h1>
                    <p> 11 99995-5939
                        <br>
                        <a href="#" class="cryptedmail"
                           data-name="contato"
                           data-domain="tnwjeans"
                           data-tld="com.br"
                           onclick="window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld; return false;">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contato" class="contactform">
    <div class="section-overlay">
        <div class="container">
            <div class="text-center top-text">
                <h1><span>ENVIE-NOS</span>  UM EMAIL</h1>
                <h4>Você pode usar o seguinte formulário para nos contactar.</h4>
            </div>
            <div class="form-container">
                <form class="formcontact" method="post" action="php/process-form.php" onsubmit="return false">
                    <div class="row form-inputs">
                        <div class="col-md-6 form-group custom-form-group">
                            <span class="input custom-input">
                                <input placeholder="Seu Nome" class="input-field custom-input-field" id="firstname" name="firstname" type="text" required data-error="NEW ERROR MESSAGE">
                                <label class="input-label custom-input-label" >
                                    <i class="fa fa-user icon icon-field"></i>
                                </label>
                            </span>
                        </div>
                        <div class="col-md-6 form-group custom-form-group">
                            <span class="input custom-input">
                                <input placeholder="Sobrenome" class="input-field custom-input-field" id="lastname" name="lastname" type="text" required>
                                <label class="input-label custom-input-label" >
                                    <i class="fa fa-user-o icon icon-field"></i>
                                </label>
                            </span>
                        </div>
                        <div class="form-group custom-form-group col-md-12">
                            <textarea placeholder="Mensagem" id="message" name="message" cols="45" rows="7" required></textarea>
                        </div>
                        <div class="col-md-6 form-group custom-form-group">
                            <span class="input custom-input">
                                <input placeholder="Seu Email" class="input-field custom-input-field" id="email" name="email" type="text" required>
                                <label class="input-label custom-input-label" >
                                    <i class="fa fa-envelope icon icon-field"></i>
                                </label>
                            </span>
                        </div>
                        <div class="col-md-6 submit-form">
                            <button id="form-submit" name="submit" type="submit" class="custom-button" title="Enviar">Enviar Mensagem</button>
                        </div>
                        <div class="col-sm-12 text-center output_message_holder d-none">
                            <p class="output_message"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
