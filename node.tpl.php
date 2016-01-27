<?php
global $base_url;
$content = preg_replace('/' . preg_quote($base_url,'/') . '/', '', $content);
?>
{
  "nodeurl": <?php print json_encode($node_url)?>,
  "nodetitle": <?php print json_encode($title)?>,
  "nodecontent": <?php print json_encode($content)?>,
  <?php if ($submitted): ?>"nodesubmitted": <?php print json_encode($submitted)?>,
<?php endif; ?>
  <?php if (links): ?>"nodelinks": <?php print json_encode($links)?>,
<?php endif; ?>
  <?php if ($terms): ?>"nodetags": <?php print json_encode($terms)?>,
<?php endif; ?>
},
