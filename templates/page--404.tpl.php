<header class="header-me clearfix">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="brand-gob">
          <?php if ($logo): ?>
            <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          <?php endif; ?>
        </div>
      </div>
      <!--INI: Region Menú TOP-->
      <div class="col-sm-7">
          <?php if (!empty($page['menu_top'])): ?>
            <?php print render($page['menu_top']); ?>
          <?php endif; ?>
          <!--INI: Menú TOP-->
          <!--FIN: Menú TOP-->

          <!--INI: Menú Estático Accesibilidad y Buscador-->
          <ul class="nav nav-pills">
            <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Linea-blanca.svg" class="white-line"></li>
            <li role="presentation"><a><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Contraste-icon.svg" alt=""></a></li>
            <li role="presentation"><a><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/A-menos.svg" alt=""></a></li>
            <li role="presentation"><a><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/A-mas.svg" alt=""></a></li>
            <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Linea-blanca.svg" class="white-line"></li>
            <li role="presentation"><a class="open-searchbox"><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Lupa-icon.svg" alt=""></a>
            </li>
          </ul>
          <!--INI: Menú Estático Accesibilidad y Buscador-->

          <div class="institutions">
            <p>Instituciones relacionadas</p>
            <!--INI: Vista Instituciones Relacionadas-->
            <ul class="institutions-brand">
              <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-sec.png" alt=""></li>
              <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-amp.png" alt=""></li>
              <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-cne.png" alt=""></li>
              <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-cchen.png" alt=""></li>
            </ul>
            <!--INI: Vista Instituciones Relacionadas-->
          </div>
      </div>
      <!--FIN: Region Menú TOP-->

      <div class="col-xs-12">
        <nav class="navbar navbar-default" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse mainMenu" id="bs-slide-dropdown">
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </div><!-- /.navbar-collapse -->
        </nav>
      </div>
    </div>
    <div class="header-me-search">
      <div class="close-searchbox">x</div>
      <div class="row">
        <!--INI: Región Buscador Top-->
        <!--INI: Bloque/Vista Barra de búsqueda-->
        <!--FIN: Bloque/Vista Barra de búsqueda-->
        <div class="col-sm-10 col-sm-offset-1">
          <!--INI: Bloque/Vista Preguntas Frecuentes-->
          <?php if (!empty($page['buscador_top'])): ?>
            <?php print render($page['buscador_top']); ?>
          <?php endif; ?>
          <!--FIN: Bloque/Vista Preguntas Frecuentes-->
          <!--INI: Bloque/Vista Documentos-->
          <!--FIN: Bloque/Vista Documentos-->
        </div>
        <!--FIN: Región Buscador Top-->
      </div>
    </div>
  </div>
</header>

<div class="main-container <?php print $container_class; ?>">
	<div class="container">
		<div class="row">
			<h1>Error 404: Página no encontrada</h1>
			<div class="col-md-8 col-md-offset-2">
				<p><img alt="Error 404" class="img-responsive" src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/error-404.svg" title="Error 404" /></p>

				<h2>Disculpa las molestias, te recomendamos visitar:</h2>

				<ul class="list-unstyled">
					<li><a href="#">Sobre el Ministerio</a></li>
					<li><a href="#">Educación</a></li>
					<li><a href="#">Servicios Online</a></li>
					<li><a href="#">Participación Ciudadana</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer-me">
    <div class="container">
      <div class="row">
        <?php print render($page['footer']); ?>
        <img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Linea-Gob.svg" alt="" class="footer-logo-gob">
      </div>
    </div>
  </footer>
<?php endif; ?>