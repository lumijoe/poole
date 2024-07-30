 <a href="<?php the_permalink(); ?>">
   <figure>
     <img src="<?php $clubImages = get_field('club_images'); echo $clubImages['img1']?>" alt="<?php the_title(); ?>" width="277" height="193">
   </figure>
   <h3><?php the_title(); ?></h3>
 </a>
