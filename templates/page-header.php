<?php use Roots\Sage\Titles; ?>

<?php
global $post;
$slug = get_post( $post )->post_name;
?>
<div class="page-header <?=$slug; ?>">
  <h1>
    <?= Titles\title(); ?>
  </h1>
  <hr class="mini" />
</div>
