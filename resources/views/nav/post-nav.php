<?php

$prev_post = get_previous_post();
$next_post = get_next_post();

if (!empty($prev_post)) {
  echo '<a href="' . get_permalink($prev_post->ID) . '" tooltip="'. $prev_post->post_title .'" rel="prev">Prev</a>'; 
}

if (!empty($next_post)) {
  echo '<a href="' . get_permalink($next_post->ID). '" tooltip="'. $next_post->post_title .'" rel="next">Next</a>';
}
?>



