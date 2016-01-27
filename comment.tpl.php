
<?php
global $base_url;
$content = preg_replace('/' . preg_quote($base_url,'/') . '/', '', $content);
?>
{
  "commentnew": "<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; print ' '. $zebra; ?>",
  <?php if ($picture): ?>"commentpicture": <?php print json_encode($picture) ?>,
<?php endif; ?>
  "commenttitle": <?php print json_encode(strip_tags($title)) ?>,
  <?php if ($submitted): ?>"commentsubmitted": <?php print json_encode($submitted); ?>,
<?php endif; ?>
  "commentcontent": <?php print json_encode($content); ?>,
  <?php if ($signature): ?>"commentsignature": <?php print json_encode($signature) ?>,
<?php endif; ?>
},
