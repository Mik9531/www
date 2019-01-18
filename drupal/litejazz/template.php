<?php

/**
 * @file
 * LiteJazz template.php
 */

function get_litejazz_style() {
  $style = theme_get_setting('litejazz_style');
  if (!$style) {
    $style = 'blue';
  }
  if (theme_get_setting('litejazz_pickstyle')) {
    if (isset($_COOKIE["litejazzstyle"])) {
      $style = $_COOKIE["litejazzstyle"];
      $color = array('red', 'green', 'blue');
      if (!in_array($style, $color)) {
        $style = 'blue';
      }
    }
  }
  return $style;
}

function litejazz_check_fontfamily($fontfamily) {
  $fontfamily = check_plain($fontfamily);
  // Restore double quotes, but remove entities that should not be added to CSS.
  $search = array('&quot;', '\\', '/', '&#039;', '(', ')', ':', ';');
  $replace = array('"', '');
  return str_replace($search, $replace, $fontfamily);
}

/**
 * Implements hook_preprocess_html()
 **/
function litejazz_preprocess_html(&$variables) {

  drupal_add_css(path_to_theme() . '/css/style.css'); //is not settet in info file because it's loades to late
  drupal_add_css(path_to_theme() . '/css/' . get_litejazz_style() . '.css');

  if (theme_get_setting('litejazz_pickstyle')) {
    drupal_add_js(drupal_get_path('theme', 'litejazz') . '/js/pickstyle.js');
  }

  if (theme_get_setting('litejazz_suckerfish')) {
    drupal_add_css(drupal_get_path('theme', 'litejazz') . '/css/suckerfish_'  . get_litejazz_style() . '.css');
  }

  if (theme_get_setting('litejazz_uselocalcontent')) {
    $local_content =  theme_get_setting('litejazz_localcontentfile');
    if (file_exists($local_content)) {
      drupal_add_css($local_content);
    }
  }

  // calculates side width and fonts

  //variablesettings
  $page_width = theme_get_setting('litejazz_width');
  $left_sidebar_width = theme_get_setting('litejazz_leftsidebarwidth');
  $right_sidebar_width = theme_get_setting('litejazz_rightsidebarwidth');
  $ldir = $variables['language']->dir;

  $css = "";

  if (!$page_width) {
    $page_width = "95%";
  }

  $css .= "#page { width: $page_width } \n";

  if ($left_sidebar_width) {
    if ($ldir == 'rtl') {
      $css .= "body.sidebar-first #main, body.two-sidebars #main { margin-left: 0; margin-right: -${left_sidebar_width} !important; }\n";
      $css .= "body.sidebar-first #squeeze, body.two-sidebars #squeeze { margin-left: 0; margin-right: ${left_sidebar_width} !important;; }\n";
    }

    if ($ldir == 'ltr') {
      $css .= "body.sidebar-first #main, body.two-sidebars #main { margin-left: -${left_sidebar_width} !important; margin-right: 0; }\n";
      $css .= "body.sidebar-first #squeeze, body.two-sidebars #squeeze { margin-left: ${left_sidebar_width} !important; margin-right: 0; }\n";
    }
    $css .= "#sidebar-left { width: ${left_sidebar_width}; }\n";
  }

  if ($right_sidebar_width) {
    if ($ldir == 'rtl') {
      $css .= "body.sidebar-second #main, body.two-sidebars #main { margin-right: 0; margin-left: -${right_sidebar_width} !important; }\n";
      $css .= "body.sidebar-second #squeeze, body.two-sidebars #squeeze { margin-right: 0; margin-left: ${right_sidebar_width} !important; }\n";
    }

    if ($ldir == 'ltr') {
      $css .= "body.sidebar-second #main, body.two-sidebars #main { margin-right: -${right_sidebar_width} !important; margin-left: 0; }\n";
      $css .= "body.sidebar-second #squeeze, body.two-sidebars #squeeze { margin-right: ${right_sidebar_width} !important; margin-left: 0; }\n";
    }
      $css .= "#sidebar-right { width: ${right_sidebar_width}; }\n";
  }

  if (theme_get_setting('litejazz_fontfamily')) {
    if (theme_get_setting('litejazz_fontfamily') != 'Custom') {
      $fontfamily = theme_get_setting('litejazz_fontfamily');
    }
    else {
      $fontfamily = theme_get_setting('litejazz_customfont');
    }
    $fontfamily = litejazz_check_fontfamily($fontfamily);
    $css .=  'body {
                  font-family : ' . $fontfamily . ';
                }';
  }

  if (theme_get_setting('litejazz_usecustomelogosize')) {
    $css .= "img#logo { width : " . theme_get_setting('litejazz_logowidth') . "px; height: " . theme_get_setting('litejazz_logoheight') . "px; }\n";
  }

  if (theme_get_setting('litejazz_suckerfish')) {
    $css .= "#suckerfishmenu div .contextual-links-wrapper { display:none; }\n";
  }

  // Add inline CSS
  drupal_add_css($css, array('type' => 'inline', 'preprocess' => FALSE));
}

/**
 * Implements hook_preprocess_page()
 **/
function litejazz_preprocess_page(&$variables) {
  if (theme_get_setting('litejazz_themelogo') and theme_get_setting('logo')) {
    $variables['logo'] = base_path() . path_to_theme() . '/images/' . get_litejazz_style() . '/logo.png';
  }
  $variables['title_attributes_array']['class'][] = 'title';
}

/**
 * Implements hook_preprocess_node()
 * inject the class "title" in the node teaser
 */
function litejazz_preprocess_node(&$variables) {
  $variables['title_attributes_array']['class'][] = 'title';
}

/**
 * Implements hook_preprocess_block()
 **/
function litejazz_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if (theme_get_setting('litejazz_suckerfish') && ($variables['block']->region == 'suckerfish')) {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }

  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }

  $variables['title_attributes_array']['class'][] = 'title';
}
