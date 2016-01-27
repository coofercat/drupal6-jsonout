<?php
// $Id: page.tpl.php,v 1.8 2010/09/03 15:58:18 robby Exp $
// beginning drupal 6.x theme, created by robin / biboo.net / gazwal.com

global $base_url;

$content = preg_replace('/^.*<div class="item-list"><ul><li class="first last"><a href="\/node\/add\/blog">Post new blog entry.<\/a><\/li>.*<\/ul><\/div>/Us','',$content);

header('Content-Type: application/json');

?>
{
  "nodes": [
                    <?php print $content; ?>

  ],
}
