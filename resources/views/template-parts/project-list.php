
<?php $projects = get_field('projects'); ?>

<?php if($projects): ?>

<div class="projects">

  <?php foreach($projects as $project):  ?>
    <?php $related = $project['project']; // relationship array ?>
    
    <?php foreach($related as $post): ?>

      <article class="project project-<?php echo $post->ID; ?>">

      <?php $thumb = $post->project_thumb; ?>
      <?php $thumb = wp_get_attachment_image_src($thumb, 'full'); ?>
      <?php $title = $post->project_title ?: $post->post_title; ?>
      <?php $blurb = $post->project_blurb; ?>

      <img class="project__thumb" src="<?php echo $thumb[0]; ?>" />
      
      <h2 class="project__title"><?php echo $title; ?></h2> 
      <p class="project__blurb"><?php echo $blurb ?></p>
        <a class="project__link" href="<?php echo get_the_permalink( $post->ID ); ?>"></a>
      </article>
    <?php endforeach; ?>
    
  <?php endforeach; ?>

  <?php wp_reset_postdata(); ?>
  
</div>

<?php endif; ?>