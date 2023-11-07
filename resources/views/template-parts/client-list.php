
<?php the_field('client_content_clients_heading'); ?>


<?php $clients = get_field('client_list'); ?>

<?php if( $clients ) : ?>

    <?php shuffle($clients) ?>

    <ul class="workwith">

      <?php foreach($clients as $client) : ?> 

          <?php $image = $client['client_logo']; ?>

		    	<li class="workwitih_org">

            <img src="<?php  echo esc_url($image['url']);; ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

          </li>

          <?php // echo esc_attr($image['title']); ?>
    
      <?php endforeach; ?>

    </ul>

<?php endif; ?>