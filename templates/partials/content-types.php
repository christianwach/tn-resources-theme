<?php $terms = get_the_terms($post, 'resource-type'); ?>
<?php if($terms && !is_wp_error( $terms )) { ?>
  <div class="flex space-x-3 items-center">
    <?php foreach($terms as $term) { ?>
      <div><a class="no-underline flex items-center space-x-1 text-sm" href="<?php echo get_term_link($term); ?>"><img src="<?php echo get_field('term_icon', 'term_' . $term->term_id)['sizes']['thumbnail']; ?>" class="h-3 w-auto"><span><?php echo $term->name; ?></span></a></div>
    <?php } ?>

    <?php $countries = get_the_terms($post, 'country'); ?>
    <?php if($countries) { ?>
      <?php foreach($countries as $country) { ?>
        <div><a class="no-underline flex items-center space-x-1 text-sm" href="<?php echo get_term_link($country); ?>"><img src="https://flagsapi.com/<?php echo strtoupper($country->slug); ?>/flat/64.png" class="h-3 w-auto"><span><?php echo $country->name; ?></span></a></div>
      <?php } ?>
    <?php } ?>
  </div>
<?php } ?>
