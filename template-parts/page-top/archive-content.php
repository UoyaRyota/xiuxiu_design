
      <li class="card7">
        <a href="<?php the_permalink(); ?>" class="works-item" style="color: black;text-decoration: none;">
          <div class="card__image-holder">
            <?php if(has_post_thumbnail()): ?>
            <img class="works-item__thumbnail-image card__image" src="<?php the_post_thumbnail_url('large'); ?>">
            <?php endif; ?>
          </div>
          <p style="color: black;text-decoration: none;">

          <?php
          
              if ( mb_strlen( $post->post_content, 'UTF-8' ) > 60 ) {
                $remove_array = ["\r\n", "\r", "\n", " ", "　"];
                $content = wp_trim_words( get_the_content(), 60, '…' );
                $content = str_replace($remove_array, '', $content);
                echo $content;

              } else {
                echo strip_tags( $post->post_content );
              }
          ?>

          </p>
        </a>

      </li>
      
