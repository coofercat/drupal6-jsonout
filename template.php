<?php
// $Id: template.php,v 1.4 2009/05/13 11:14:06 robby Exp $
// beginning drupal 6.x theme, created by robin / biboo.net  / gazwal.net  */
/**
 * Override or insert PHPTemplate variables into the templates .
 */
function phptemplate_preprocess_page(&$vars) {
	// set variables for the logo and slogan (from Deco drupal 6.x theme)
return;
	$site_fields = array();
  if ($vars['site_name']) {
    $site_fields[] = check_plain($vars['site_name']);
  }
  if ($vars['site_slogan']) {
    $site_fields[] = check_plain($vars['site_slogan']);
  }
  
	$vars['site_title'] = implode(' ', $site_fields);

	if (isset($site_fields[0])) {
  	$site_fields[0] = '<span class="site-name">'. $site_fields[0] .'</span>';
	}
	if (isset($site_fields[1])) {
		$site_fields[1] = '<span class="site-slogan">'. $site_fields[1] .'</span>';
	}
	
  $vars['site_title_html'] = implode(' ', $site_fields);

}

/**
 * Allow themable wrapping of all comments (from garland).
 */
function phptemplate_comment_wrapper($content, $node) {

	$content = preg_replace('/<form action(.*)\/form>/isU','', $content);
	$content = preg_replace('/<a id=\"comment\-\d+\"><\/a>/','',$content);
        $content = preg_replace('/^<div.*>/m','',$content);
        $content = preg_replace('/(<\/div>)+$/m','', $content);

    return "  ],\n" . '"comments": [' . $content;
}

function beginning_pager($tags = array(), $limit = 10, $element = 0, $parameters = array(), $quantity = 5) {
	return '';
}
