            <div class="contacto">
                <div id="say-hellow" tabindex="-1" role="dialog" class="modal fade">
                    <div role="document" class="modal-dialog modal-lg">
                        <div id="modalbox" class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-label="Cerrar" class="close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-tittle text-center">SAY HELLO!</h3> </div>
                            <div class="modal-body">
                                <form>
                                    <?php echo do_shortcode( '[contact-form-7 id="52" title="Formulario de contacto 1"]' ); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="push"></div>
</div>WRAPER-->
        <hr>
        <footer class="container footer">
        <?php tha_footer_top(); ?>
            <div class="row text-center">
                <div class="col-lg-12 site-sub-footer">
                    <ul class="list-inline">
                        <li >
                            <p class="copy">&copy; <?php echo date('Y'); ?>, All rights reserved.</p>
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
