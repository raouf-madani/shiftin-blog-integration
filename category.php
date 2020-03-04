<?php get_header(); ?>
<?php include_once('precedent.php'); ?>
<?php include_once('menu.php'); ?>
<?php include_once('rubrique.php'); ?>

 <div class="blog" style="overflow:visible;">
 	<div class="content">

 <?php
 $casetegory = get_queried_object();

 $args = array(
     'post_type' => 'post',
     'post_status' => 'publish',
     'category_name' => $casetegory->slug,
     'posts_per_page' => -1,
 );
 $arr_posts = new WP_Query( $args );

         ?>
<div class="">

</div>
<div class="articles" style="margin-top:12% ;">
  <?php if ( $arr_posts->have_posts() ) :
printf( '	<h2 class="tit co_black" "> Results for <span style="color: #%s;"> %s</span> category : </h2>',get_term_meta( $casetegory->term_id, '_category_color', true ) ,$casetegory->name );?>
      				<div class="double_article">
  <?php
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post(); ?>


      					<div class="article">
      						<a href="<?php the_permalink();?>"><img class="image" src="<?php the_post_thumbnail_url(); ?>" alt="" title="" ></a>
                  <?php
         $cats = get_the_category();
         foreach ($cats as $cat) {
         $ide = get_category_link( $cat->term_id);

          ?>
      						<a href="<?php echo $ide ?>"><h4 style="background-color: #<?php echo get_term_meta( $cat->term_id, '_category_color', true ); ?>" class="rubrique">#<?php echo $cat->name ; ?></h4></a>
 <?php } ?>
      						<div class="bloc">
      							<a href="<?php the_permalink();?>">
      							<h3><?php the_title(); ?></h3>
      							<div class="auteur">
  <img src="<?php echo get_avatar_url( get_the_author_meta('ID'));  ?>" alt="" title="" >
      								<h4>PAR <strong class="name"><?php the_author(); ?></strong></h4>
      							</div>
      							</a>
      						</div>

      					</div>

                <?php
                endwhile;
                else :
                        get_template_part( 'template-parts/category', 'noresult' );
                endif;?>
      					<div class="clr"></div>
      				</div>
 </div>


 </div>
</div>
 <?php  get_footer(); ?>
