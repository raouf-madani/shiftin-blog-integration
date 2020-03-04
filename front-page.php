<?php get_header(); ?>
<?php $staticPage = new WP_Query( array('page_id' => '14'));?>
<?php include_once('menu.php'); ?>
<?php include_once('rubrique.php'); ?>
<div class="blog">
<div class="content">
  <div class="description">
    <h2 class="bigtit">Blog</h2>

    <div class="flex">
        <?php

        while ($staticPage->have_posts()): $staticPage->the_post();?>
        <img src="<?php echo get_the_post_thumbnail_url();  endwhile; ?>" alt="" title="" >
        <h1><?php the_content(); ?></h1>
      <div class="clr"></div>
    </div>
  </div>
  <div class="articles">
    <h2>Popular reads</h2>
    <?php
            $post1 = array( 'posts_per_page' => 1,'meta_key' => 'meta-checkbox2','meta_value' => 'yes');
                    $featured = new WP_Query($post1);
            ?>
    <div class="big_article">
        <?php
        while($featured->have_posts()):
        $featured->the_post();
        $c = get_the_category();
        $idc= get_category_link($c[0]->term_id);
        ?>
      <a href="<?php the_permalink();?>">
          <img class="image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" title="" >
      </a>
      <div class="bloc">
        <a href="<?php echo  $idc ; ?>"><h4 style="background-color: #<?php echo get_term_meta( $c[0]->term_id, '_category_color', true ); ?>" class="rubrique ">#<?php echo $c[0]->name;?></h4></a>
        <a href="<?php the_permalink();?>">
          <h3><?php the_title(); ?></h3>
          <div class="auteur">
            <img src="<?php echo get_avatar_url( get_the_author_meta('ID'));  ?>" alt="" title="" >
            <h4>PAR <strong class="name"><?php the_author(); endwhile; ?></strong></h4>
          </div>
        </a>
        <span></span>
      </div>
      <div class="clr"></div>
    </div>

    <div class="clr" style="height: 50px;"></div>

    <div class="triple_article">
        <?php
            $post2 = array('posts_per_page' => 3,'meta_key' => 'meta-checkbox','meta_value' => 'yes');
            $featured2 = new WP_Query($post2);
            
            while($featured2->have_posts()):
            $featured2->the_post();
            $c = get_the_category();
            $idc= get_category_link($c[0]->term_id);
                    ?>
      <div class="article">
          
        <a href="<?php the_permalink();?>">
        <img class="image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" title="" >
        </a>
        <a href="<?php echo  $idc ; ?>"><h4 style="background-color: #<?php echo get_term_meta( $c[0]->term_id, '_category_color', true ); ?>" class="rubrique ">#<?php echo $c[0]->name;?></h4></a>
        <div class="bloc">
          <a href="<?php the_permalink();?>">
          <h3><?php the_title();?></h3>
          <div class="auteur">
            <img src="<?php echo get_avatar_url( get_the_author_meta('ID'));  ?>" alt="" title="" >
            <h4>PAR <strong class="name"><?php the_author(); ?></strong></h4>
          </div>
          </a>
        </div>
      </div> <?php endwhile; ?>
      
      <div class="clr"></div>
    </div>

    <div class="clr" style="height: 50px;"></div>

    <div class="nws">
      <img src="images/Groupe 32.png" alt="" title="newsletter" >
      <div class="blo">
        <h3>Get the best reads</h3>
        <p>
          Like what you see? Keep in touch and we’ll send more your way.
        </p>
        <form action="" method="post">
          <input type="email" name="newsletter" value="" placeholder="Votre E-Mail" >
          <input type="submit" name="inscrire" value="S'inscrire" >
        </form>
      </div>
      <div class="clr"></div>
    </div>

    <div class="policy">
      <p>By signing up you are agreeing to our <a href="" target="_blank">Privacy Policy</a></p>
    </div>

    <div class="clr" style="height: 40px;"></div>

    <h2>Most recent</h2>
    <?php
            $postNum = array( 'numberposts' => '6' );
          $recent_posts = wp_get_recent_posts( $postNum );
          ?>
          <div class="double_article">
            <?php
          foreach( $recent_posts as $recent ){
              $categories = array();
              $POST_CATEGORIES = wp_get_post_categories($recent['ID']);
              $author_id = get_post_field( 'post_author', $recent["ID"] );
            ?>
      <div class="article">
        <?php echo '<a href="' . get_permalink($recent["ID"]) . '">';?>
        <img class="image" src="<?php echo get_the_post_thumbnail_url($recent["ID"]); ?>"/>
        </a>
        
        <?php foreach ($POST_CATEGORIES as $key => $val) {
                $cat = get_category($val);
                $ide = get_category_link( $cat->term_id);
                $categories[] = $cat->name; ?>
        <a href="<?php echo  $ide ; ?>"><h4 style="background-color: #<?php echo get_term_meta( $cat->term_id, '_category_color', true ); ?>" class="rubrique ">#<?php echo $cat->name;} ?></h4></a>
        <div class="bloc">
          <?php echo '<a href="' . get_permalink($recent["ID"]) . '">
          <h3>'.$recent["post_title"].'</h3>
          <div class="auteur">
            <img src="'.get_avatar_url($author_id).'" alt="" title="" >
            <h4>PAR <strong class="name">'.get_the_author_meta('display_name',$author_id).'</strong></h4>
          </div>
          </a>';
          ?>
        </div>
      </div>
          <?php }?>

      <div class="clr"></div>
    </div>
  </div>

  <div class="pagination">
    <a href="" class="desa prec"><span></span>Prec</a>
    <a href="" class="selected">1</a>
    <a href="">2</a>
    <a href="">3</a>
    <a href="" class="suiv">Suivant<span></span></a>
  </div>
</div>
</div>
<?php get_footer(); ?>
