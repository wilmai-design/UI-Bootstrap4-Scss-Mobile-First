<!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
	<head>
		<link rel="profile" href="<?php print $grddl_profile; ?>" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php print $head_title; ?>"/>
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
		<!--[if lt IE 9]>
			<script src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia') . '/js/html5shiv.min.js'; ?>"></script>
			<script src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia') . '/js/respond.min.js'; ?>"></script>
		<![endif]-->
		<?php print $scripts; ?>
</head>
<body<?php print $body_attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <script src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'minenergia') . '/js/redes-sociales.js'; ?>"></script>
</body>
</html>