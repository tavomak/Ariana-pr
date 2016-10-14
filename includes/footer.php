    <?php tha_footer_before(); ?>
            <div class="contacto">
                <div id="say-hellow" tabindex="-1" role="dialog" class="modal fade">
                    <div role="document" class="modal-dialog modal-lg">
                        <div id="modalbox" class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-label="Cerrar" class="close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-tittle text-center">SAY HELLOW!</h3> </div>
                            <div class="modal-body">
                                <form>
                                    <?php echo do_shortcode( '[contact-form-7 id="1865" title="Contact form 1"]' ); ?>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h3 class="modal-tittle text-center">SOCIAL</h3>
                                <div id="social-media">
                                    <div class="text-center">
                                        <ul class="text-center">
                                            <li class="social-icon">
                                                <a class="fl" href="https://www.instagram.com/arianapr/" target="_blank">
                                                    <img src="<?php bloginfo('template_directory'); ?>/asset/img/ins-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/ins-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/ins-logo.jpg '" alt="https://www.instagram.com/arianapr/" class="icon">
                                                    <!--<p>instagram</p>-->
                                                </a>
                                            </li>
                                            <li class="social-icon">
                                                <a class="fl" href="https://www.facebook.com/ariana.p.33/" target="_blank">
                                                    <img src="<?php bloginfo('template_directory'); ?>/asset/img/fac-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/fac-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/fac-logo.jpg '" alt="https://www.facebook.com/ariana.p.33/" class="icon">
                                                    <!--<p>facebook</p>-->
                                                </a>
                                            </li>
                                            <li class="social-icon">
                                                <a class="fl" href="https://twitter.com/arianaprmedia" target="_blank">
                                                    <img src="<?php bloginfo('template_directory'); ?>/asset/img/twi-logo.jpg" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/twi-logo-hover.jpg'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/twi-logo.jpg '" alt="https://twitter.com/mm_electra" class="icon">
                                                    <!--<p>twitter</p>-->
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push"></div>
        </div><!--WRAPER-->
        <footer class="container footer">
        <?php tha_footer_top(); ?>
            <div class="row text-center">
                <div class="col-lg-12 site-sub-footer">
                    <ul class="list-inline">
                        <li >
                            <p class="copy">&copy; <?php echo date('Y'); ?>, Todos los derechos reservados.</p>
                        </li>
                        <li class="list-inline">
                           <a href="http://estelaestudio.com/">
                                <p class="est">Designed and coded by</p>
                            </a>
                        </li>
                        <li class="list-inline">
                           <a href="http://estelaestudio.com/">
                                <img class="" src="<?php bloginfo('template_directory'); ?>/asset/img/estela-logo.png" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/asset/img/estela-logo-hover.png'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/asset/img/estela-logo.png '" alt="Estela estudio de diseño">
                           </a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php tha_footer_bottom(); ?>
        </footer>
    <?php tha_footer_after(); ?>
    <?php wp_footer(); ?>
    <?php tha_body_bottom(); ?>
    </body>

</html>
