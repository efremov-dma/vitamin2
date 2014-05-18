<?php
/**
 * Implements template_preprocess_page().
 * @param $vars
 */
function vitamin_preprocess_page(&$vars) {
	$vars['attributes_array']['id'] = 'main-wrapper';
	unset($vars['attributes_array']['class']);
}

/**
 * Implements template_preprocess_maintenance_page().
 * @param $vars
 */
function vitamin_preprocess_maintenance_page(&$vars) {
	$vars['attributes_array']['id'] = 'main-wrapper';
	unset($vars['attributes_array']['class']);
}

/**
 * Implements template_preprocess_section().
 * @param $vars
 */
function vitamin_preprocess_section(&$vars) {
	$id = $vars['attributes_array']['id'];
	switch ($id) {
		case 'section-header':
		case 'section-content':
		case 'section-footer':
			unset($vars['attributes_array']['class']);
			break;
	}
}

/**
 * Implements hook_process_region().
 * @param $vars
 */
function vitamin_process_region(&$vars) {
  if (in_array($vars['elements']['#region'], array('header', 'footer'))) {
    $theme = alpha_get_theme();

    switch ($vars['elements']['#region']) {
      // case 'content':
      //   $vars['title_prefix'] = $theme->page['title_prefix'];
      //   $vars['title'] = $theme->page['title'];
      //   $vars['title_suffix'] = $theme->page['title_suffix'];
      //   $vars['tabs'] = $theme->page['tabs'];
      //   $vars['action_links'] = $theme->page['action_links'];
      //   $vars['title_hidden'] = $theme->page['title_hidden'];
      //   $vars['feed_icons'] = $theme->page['feed_icons'];
      //   break;

      // case 'menu':
      //   $vars['main_menu'] = $theme->page['main_menu'];
      //   $vars['secondary_menu'] = $theme->page['secondary_menu'];
      //   break;

      // case 'branding':
      //   $vars['site_name'] = $theme->page['site_name'];
      //   $vars['linked_site_name'] = l($vars['site_name'], '<front>', array('attributes' => array('title' => t('Home')), 'html' => TRUE));
      //   $vars['site_slogan'] = $theme->page['site_slogan'];
      //   $vars['site_name_hidden'] = $theme->page['site_name_hidden'];
      //   $vars['site_slogan_hidden'] = $theme->page['site_slogan_hidden'];
      //   $vars['logo'] = $theme->page['logo'];
      //   $vars['logo_img'] = $vars['logo'] ? '<img src="' . $vars['logo'] . '" alt="' . check_plain($vars['site_name']) . '" id="logo" />' : '';
      //   $vars['linked_logo_img'] = $vars['logo'] ? l($vars['logo_img'], '<front>', array('attributes' => array('rel' => 'home', 'title' => check_plain($vars['site_name'])), 'html' => TRUE)) : '';
      //   break;

      case 'header':
      	$vars['site_name'] = $theme->page['site_name'];
      	$vars['logo'] = $theme->page['logo'];
        $vars['logo_img'] = $vars['logo'] ? '<img src="' . $vars['logo'] . '" alt="' . check_plain($vars['site_name']) . '">' : '';
        $vars['linked_logo_img'] = $vars['logo'] ? l($vars['logo_img'], '<front>', array('attributes' => array('rel' => 'home'), 'html' => TRUE)) : '';
        $vars['date'] = '<span class="day-name">' . format_date(time(), 'custom', 'l') . '</span> ' . format_date(time(), 'custom', 'j F Y');
      	break;

      case 'footer':
        $vars['main_menu'] = isset($theme->page['main_menu']) ? $theme->page['main_menu'] : '';
        $vars['copy'] = '&copy; 2010 - ' . format_date(time(), 'custom', 'Y ') . t('Протек');
        break;

    }
  }
}


function vitamin_preprocess_block(&$vars) {
	$bid = $vars['elements']['#block']->bid;
	switch ($bid) {
		case '84':
			/* Block Social */
			$vars['content_attributes_array']['class'] = array('block', 'block-social');
			break;
	}
}