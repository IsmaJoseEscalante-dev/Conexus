<div class="row">
    <div class="col-md-6">
        <div class="contact-info">
            <div class="contact-item">
                <i class="flaticon-address"></i>
                <div class="contact-text">
                    <h2>Domicilio</h2>
                    <p>Alférez Valko N°165-Alto Comedero, 4600, San Salvador de Jujuy-Argentina</p>
                </div>
            </div>
            <div class="contact-item">
                <i class="flaticon-call"></i>
                <div class="contact-text">
                    <h2>Telefono/Celular</h2>
                    <p>+012 345 67890</p>
                </div>
            </div>
            <div class="contact-item">
                <i class="flaticon-send-mail"></i>
                <div class="contact-text">
                    <h2>Email</h2>
                    <p>gerconexos.salta@gmail.com</p>
                    <p>gerconexos@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="contact-form">
            <div id="success"></div>
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                    <input type="text" class="form-control" id="name" placeholder="Ingrese nombre" required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control" id="email" placeholder="Ingrese email" required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="subject" placeholder="Asunto" required="required" data-validation-required-message="Please enter a subject" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control" id="message" placeholder="Mensage" required="required" data-validation-required-message="Please enter your message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn" type="submit" id="sendMessageButton">Enviar mensaje</button>
                </div>
            </form>
        </div>
    </div>
</div>