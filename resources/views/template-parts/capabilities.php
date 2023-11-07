
<?php $capList = get_field('capability_list'); ?>

<?php if( $capList ) : ?>

  <div class="capablities_content">

  <h2 class="section-heading">Capabilities</h2>

  <ul class="cap-list">
    
    <?php while( have_rows('capability_list') ) : the_row(); ?>
      
      <?php $cap_title = get_sub_field('cap_title'); ?>
      
        <li class="cap-list__item">
          <a href=""><?php echo $cap_title; ?></a>
        </li>

    <?php endwhile; ?>

  </ul>

   <a class="btn btn-txt" href="">Our Process</a>

  </div>
<?php endif; ?>

<?php if( $capList ) : ?>
  <div class="cap-bgs">

    <?php while( have_rows('capability_list') ) : the_row(); ?>
      
      <?php $image = get_sub_field('cap_hero');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
        } ?>

    <?php endwhile; ?>

  </div>

 <?php endif; ?>
