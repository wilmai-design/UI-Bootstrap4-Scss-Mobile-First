<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<header class="header-me clearfix visible-xs-block visible-sm-block">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-5">
                <div class="brand-gob">
                    <?php if ($logo): ?>
                    <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>"
                        title="<?php print t('Home'); ?>">
                        <div class="logo-xs">
                            <div class="left-bar"></div>
                            <div class="right-bar"></div>
                        </div>
                        <h3 class="visible-xs">Ministerio de Energía</h3>
                        <img class="hidden-xs" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <!--INI: Region Menú TOP-->
            <div class="col-xs-6 col-sm-7 menuContainer">
                <div class="row">
                    <?php if (!empty($page['menu_top'])): ?>
                    <?php print render($page['menu_top']); ?>
                    <?php endif; ?>
                    <!--INI: Menú TOP-->
                    <!--FIN: Menú TOP-->

                    <!--INI: Menú Estático Accesibilidad y Buscador-->
                    <div class="col-xs-6">
                        <ul class="nav nav-pills">
                            <li class="hidden-xs"><img
                                    src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Linea-blanca.svg"
                                    class="white-line"></li>
                            <li class="hidden-xs" role="presentation"><a href="#!" class="btn-set-contraste"><img
                                        src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Contraste-icon.svg"
                                        alt=""></a></li>
                            <li class="hidden-xs" role="presentation"><a href="#!" class="btn-set-minfont"><img
                                        src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/A-menos.svg"
                                        alt=""></a></li>
                            <li class="hidden-xs" role="presentation"><a href="#!" class="btn-set-maxfont"><img
                                        src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/A-mas.svg"
                                        alt=""></a></li>
                            <li class="hidden-xs"><img
                                    src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Linea-blanca.svg"
                                    class="white-line"></li>
                            <li role="presentation"><a href="#!" class="open-searchbox"><img
                                        src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Lupa-icon.svg"
                                        alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <!--INI: Menú Estático Accesibilidad y Buscador-->

                    <div class="institutions hidden-xs">
                        <p>Instituciones relacionadas</p>
                        <!--INI: Vista Instituciones Relacionadas-->
                        <ul class="institutions-brand">
                            <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-sec.png"
                                    alt=""></li>
                            <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-amp.png"
                                    alt=""></li>
                            <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-cne.png"
                                    alt=""></li>
                            <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-cchen.png"
                                    alt=""></li>
                        </ul>
                        <!--INI: Vista Instituciones Relacionadas-->
                    </div>
                    <div class="col-xs-6 col-sm-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-slide-dropdown">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse mainMenu col-xs-12" id="bs-slide-dropdown">
               <?php if (!empty($page['navigation'])): ?>
                 <?php print render($page['navigation']); ?>
               <?php endif; ?>
             </div><!-- /.navbar-collapse -->
            <!--FIN: Region Menú TOP-->
        </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="header-me-search col-xs-12">
            <div class="close-searchbox">x</div>
            <div class="row">
                <!--INI: Región Buscador Top-->
                <!--INI: Bloque/Vista Barra de búsqueda-->
                <!--FIN: Bloque/Vista Barra de búsqueda-->
                <div class="col-sm-8 col-sm-offset-2">
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

<header class="header-me clearfix hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-5">
                <div class="brand-gob">
                    <?php if ($logo): ?>
                    <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>"
                        title="<?php print t('Home'); ?>">
                        <div class="logo-xs">
                            <div class="left-bar"></div>
                            <div class="right-bar"></div>
                        </div>
                        <h3 class="visible-xs">Ministerio de Energía</h3>
                        <img class="hidden-xs" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <!--INI: Region Menú TOP-->
            <div class="col-xs-3 col-sm-7">
                <?php if (!empty($page['menu_top'])): ?>
                <?php print render($page['menu_top']); ?>
                <?php endif; ?>
                <!--INI: Menú TOP-->
                <!--FIN: Menú TOP-->

                <!--INI: Menú Estático Accesibilidad y Buscador-->
                <ul class="nav nav-pills">
                    <li class="hidden-xs"><img
                            src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Linea-blanca.svg"
                            class="white-line"></li>
                    <li class="hidden-xs" role="presentation"><a href="#!" class="btn-set-contraste"><img
                                src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Contraste-icon.svg"
                                alt=""></a></li>
                    <li class="hidden-xs" role="presentation"><a href="#!" class="btn-set-minfont"><img
                                src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/A-menos.svg"
                                alt=""></a></li>
                    <li class="hidden-xs" role="presentation"><a href="#!" class="btn-set-maxfont"><img
                                src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/A-mas.svg"
                                alt=""></a></li>
                    <li class="hidden-xs"><img
                            src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Linea-blanca.svg"
                            class="white-line"></li>
                    <li role="presentation"><a href="#!" class="open-searchbox"><img
                                src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Lupa-icon.svg"
                                alt=""></a>
                    </li>
                </ul>
                <!--INI: Menú Estático Accesibilidad y Buscador-->

                <div class="institutions hidden-xs">
                    <p>Instituciones relacionadas</p>
                    <!--INI: Vista Instituciones Relacionadas-->
                    <ul class="institutions-brand">
                        <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-sec.png"
                                alt=""></li>
                        <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-amp.png"
                                alt=""></li>
                        <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-cne.png"
                                alt=""></li>
                        <li><img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/logo-cchen.png"
                                alt=""></li>
                    </ul>
                    <!--INI: Vista Instituciones Relacionadas-->
                </div>
            </div>
            <!--FIN: Region Menú TOP-->

            <div class="col-sm-12">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-slide-dropdown">
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
                <div class="col-sm-8 col-sm-offset-2">
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

<div class="main-container <?php print $regiones_class; ?> <?php print $container_class; ?>">

    <header role="banner" id="page-header">
        <?php if (!empty($site_slogan)): ?>
        <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>

        <?php print render($page['header']); ?>
    </header>

    <div class="row">

        <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
            <?php print render($page['sidebar_first']); ?>
        </aside> <!-- /#sidebar-first -->
        <?php endif; ?>

        <section<?php print $content_column_class; ?>>
            <?php if (!empty($page['highlighted'])): ?>
            <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <?php if (!empty($breadcrumb)): print $breadcrumb;
      endif;?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if (!empty($title)): ?>
            <h1 class="page-header"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            </section>

            <?php if (!empty($page['sidebar_second'])): ?>
            <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_second']); ?>
            </aside> <!-- /#sidebar-second -->
            <?php endif; ?>

    </div>
</div>

<?php if (!empty($page['banner_gobierno'])): ?>
<section class="banners-gobierno">
    <div class="container">
        <div class="row">
            <?php print render($page['banner_gobierno']); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($page['footer'])): ?>
<section class="up-back">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <button id="back-arrow" type="button" class="btn flecha-volver" title="página anterior"></button>
                <button id="top-arrow" type="button" class="btn flecha-arriba" title="volver arriba"></button>
            </div>
        </div>
    </div>
</section>
<footer class="footer-me">
    <div class="container">
        <div class="row">
            <?php print render($page['footer']); ?>
            <img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia'); ?>/img/icons/Linea-Gob.svg"
                alt="" class="footer-logo-gob">
        </div>
    </div>
</footer>
<?php endif; ?>