<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contacto">
                    <h5>Contacto</h5>
                    <ul class="contactos">
                        <li><a href="mailto:correo@example.com"><i class="fas fa-envelope"></i> correo@example.com</a></li>
                        <li><a href="tel:+56987449948"><i class="fas fa-phone"></i> +56987449948</a></li>
                        <li><a href="https://www.linkedin.com/in/constanza-albornoz-torres-843918179/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="LinkedIn" class="linkedin-icon"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter">
                    <h5>Newsletter</h5>
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Suscribirse</button>
                            </div>
                        </div>
                    </form>
                    <p>Suscríbete a nuestro boletín para recibir noticias y actualizaciones.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
