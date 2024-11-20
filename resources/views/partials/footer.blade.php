<!-- resources/views/partials/footer.blade.php -->
<footer>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

*:focus,
*:active {
  outline: none !important;
  -webkit-tap-highlight-color: transparent;
}

html,
body {
  display: grid;
  height: 100%;
  width: 100%;
  font-family: "Poppins", sans-serif;
  place-items: center;
  background: linear-gradient(315deg, #ffffff, #d7e1ec);
}

.wrapper {
  display: inline-flex;
  list-style: none;
}

.wrapper .icon {
  position: relative;
  background: #ffffff;
  border-radius: 15px;
  padding: 15px;
  margin: 5px; /* Reducido de 10px a 5px */
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}


.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: #ffffff;
  color: #ffffff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #ffffff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #1877F2;
  color: #ffffff;
}

.wrapper .tiktok:hover,
.wrapper .tiktok:hover .tooltip,
.wrapper .tiktok:hover .tooltip::before {
  background: #000000;
  color: #ffffff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #7a21b6;
  color: #ffffff;
}

.wrapper .whatsapp:hover,
.wrapper .whatsapp:hover .tooltip,
.wrapper .whatsapp:hover .tooltip::before {
  background: #25D366;
  color: #ffffff;
}
.footer-section iframe {
    max-width: 100%;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

</style>

    <div class="footer-top">
        <div class="footer-logo">
            <img src="{{ asset('imagenes/logo.jpg') }}" alt="Logo" />
        </div>
        
        <div class="subscription">
            <p>Suscríbete y obtén un 15% de descuento en tu primera compra</p>
            <button>Suscribirse</button>
            <div class="payment-options">
                <img src="{{ asset('imagenes/visa.png') }}" alt="Visa" />
                <img src="{{ asset('imagenes/mastercard.png') }}" alt="Mastercard" />
                <img src="{{ asset('imagenes/bcp.png') }}" alt="BCP" />
                <img src="{{ asset('imagenes/bbva.png') }}" alt="BBVA" />
                <img src="{{ asset('imagenes/yape.png') }}" alt="Yape" />
            </div>
        </div>
    </div>

    <div class="footer-main">
        <div class="footer-section">
            <h3>Nosotros</h3>
            <ul>
                <li><a href="/nosotros">Nosotros</a></li>
                <li><a href="/garantias">Garantías</a></li>
                <li><a href="/politicas">Políticas de privacidad</a></li>
                <li><a href="/promociones">Promociones - Términos y Condiciones</a></li>
                <li><a href="#">Términos y condiciones Venta Telefónica</a></li>
                <li><a href="#">Términos y condiciones Delivery</a></li>
                <li><a href="/preguntas">Preguntas Frecuentes</a></li>
                <li><a href="/vision-carreteras">Buena Visión en Carretera</a></li>
                <li><a href="#">Permisos PRSS</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Servicios</h3>
            <ul>
                <li><a href="#">Convenios</a></li>
                <li><a href="#">Agenda tu examen visual</a></li>
                <li><a href="#">Cupones</a></li>
                <li><a href="/nosotros">Nuestro blog</a></li>
                <li><a href="/testimonios">Testimonios</a></li>
                <li><a href="#">Reservas de citas</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contacto</h3>
            <p>Horario para atención:</p>
            <p>Lunes a Sábado de 10:00 a 19:00</p>
            <p>Consultas Venta Tienda: 0800-14600</p>
            <p>Horario atención venta telefónica: Lunes a Sábado de 11:00 a 19:00</p>
            <h4>Síguenos en:</h4>
            <!-- Enlace a FontAwesome para los iconos -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

            <div class="social-media">
                <ul class="wrapper">
                    <li class="icon facebook">
                        <a href="https://www.facebook.com/veoopticaspuno/" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                            <div class="tooltip">Facebook</div>
                        </a>
                    </li>
                    <li class="icon instagram">
                        <a href="https://www.instagram.com/veoveooptica/?hl=es" target="_blank">
                            <i class="fab fa-instagram"></i>
                            <div class="tooltip">Instagram</div>
                        </a>
                    </li>
                    <li class="icon tiktok">
                        <a href="https://www.tiktok.com/@veoveoopticas" target="_blank">
                            <i class="fab fa-tiktok"></i>
                            <div class="tooltip">TikTok</div>
                        </a>
                    </li>
                    <li class="icon whatsapp">
                        <a href="https://acortar.link/uycF3E" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                            <div class="tooltip">WhatsApp</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-section">
            <h3>Ubicación</h3>
            <!-- Mapa de Google con la URL proporcionada -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.824272108225!2d-70.0303461!3d-15.8382079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d6993cb884f79%3A0x97a58c97f9bf0eb!2sVeo+Veo+Opticas!5e0!3m2!1ses!2spe!4v1633569010785!5m2!1ses!2spe"
                width="100%" 
                height="450" 
                frameborder="0" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
            </iframe>
        </div>

    </div>
</footer>


