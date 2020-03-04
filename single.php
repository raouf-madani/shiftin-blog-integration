	<?php get_header(); ?>
	<?php include_once('precedent.php'); ?>
	<?php include_once('menu.php'); ?>
	<?php include_once('rubrique.php'); ?>
	<div class="progress">
		<div class="bar"></div>
	</div>
	<div class="progress2">
		<div class="bar2"></div>
	</div>
	<div class="blog">
		<div id="test">
		<div class="content">
	            <?php
			    if(have_posts()):
			    while(have_posts()):
			    the_post();  
			    $c = get_the_category();
                $idc= get_category_link($c[0]->term_id);
			    ?>
			<div class="head_blog">
				<img class="image" src="<?php echo the_post_thumbnail_url(); ?>"/>
				<div class="bloc">
					<a href="<?php echo  $idc ; ?>"><h2 style="background-color: #<?php echo get_term_meta( $c[0]->term_id, '_category_color', true ); ?>" class="rubrique ">#<?php echo $c[0]->name;?></h2></a>
					<h1><?php the_title(); ?></h1>
					<h4 class="sous"><?php the_excerpt(); ?></h4>
					<div class="auteur">
						<img src="<?php echo get_avatar_url( get_the_author_meta('ID'));  ?>" alt="" title="" >
						<h4><?php the_author(); ?></h4>
						<p><?php the_field('temps_de_lecture'); ?> min lecture</p>
					</div>
					<div class="tags">
					    <?php the_tags(' ',' ',' ');?>
					</div>
					<div class="clr"></div>
				</div>
			</div>
			
			<div class="clr"></div>
			<div class="reseau">
			    <a href="https://www.facebook.com/sharer/sharer.php?u=" class="fb"><span></span></a>
				<a class="tw"><span></span></a>
				<a class="lin"><span></span></a>
				
			</div>
			<div class="corp_blog">
			<?php the_content(); ?>
			<div class="tags">
            <?php the_tags(' ',' ',' '); ?>
            </div>
            <div class="spec3">
            <img src="<?php echo get_avatar_url( get_the_author_meta('ID')); ?>" alt="" title="">
            <h4><?php the_author(); ?></h4>
            <p class="poste"><?php echo get_the_author_meta('job'); ?></p>
            <p><?php the_author_description(); endwhile; wp_reset_postdata(); endif;  ?></p>
            </div>    
		   </div>
		<div class="clr"></div>
		</div>
		<!--FIN CONTENT ***************************************************** !-->
		<div class="content">
			<div class="nws nws2">
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
				<img src="images/Groupe-de-masques-26.png" alt="" title="newsletter" >
				<div class="clr"></div>
			</div>

			<div class="policy">
				<p>By signing up you are agreeing to our <a href="" target="_blank">Privacy Policy</a></p>
			</div>

			<div class="clr"></div>
			<h4 class="titree">RELATED ARTICLES</h4>
			<div class="clr"></div>
			<div class="triple_article">
			    <?php
			   
			    $arrayTag=[];
			    $CurrentId = get_the_ID();
			    $tags= wp_get_post_tags($CurrentId);
			    foreach($tags as $tag){
			      $arrayTag[] =$tag->slug ;
			    }
			    
			    $args=array('posts_per_page'=>3, 'tag_slug__in' => $arrayTag);
			    $tagged_posts = new WP_Query($args);

                    if ( $tagged_posts->have_posts() ) {

                      while ( $tagged_posts->have_posts() ) {
                        $tagged_posts->the_post();
                        $tag_count = 0;
                        $tag_min_match = 2;
                        $c = get_the_category();
                        $idc= get_category_link($c[0]->term_id);   
                        foreach ( $arrayTag as $tag ) {
                          if ( has_tag($tag) && $tag_count < $tag_min_match ) {
                              
                             $tag_count ++;
                          }
                       }
                       if ($tag_count == $tag_min_match && get_the_ID() != $CurrentId) {
                ?>
				<div class="article">
					<a href="<?php the_permalink(); ?>"><img class="image" src="<?php echo the_post_thumbnail_url(); ?>" alt="" title="" ></a>
					<a href="<?php echo  $idc ; ?>"><h4 style="background-color: #<?php echo get_term_meta( $c[0]->term_id, '_category_color', true ); ?>" class="rubrique ">#<?php echo $c[0]->name;?></h4></a>
					<div class="bloc">
						<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
						<div class="auteur">
							<img src="<?php echo get_avatar_url( get_the_author_meta('ID'));  ?>" alt="" title="" >
							<h4>PAR <strong class="name"><?php the_author(); ?></strong></h4>
						</div>
						</a>
					</div>
				</div>
				<?php } }
                            wp_reset_query(); }?>
				
				<div class="clr"></div>
			</div>

			<div class="clr"></div>
			
			<h4 class="titree">READ NEXT</h4>
			<?php
			 $post = get_field('read_next');
			 if( $post ):
			 setup_postdata($post);
			 $c = get_the_category();
                $idc= get_category_link($c[0]->term_id);
			?>
			<div class="head_blog foot_blog">
			    <a href="<?php the_permalink(); ?>">
				 <?php //$image2 = wp_get_attachment_image_src( get_post_thumbnail_id( $next_post->ID ), 'single-post-thumbnail' ); ?>
				<img class="image" src="<?php echo the_post_thumbnail_url(); ?>"/>
				</a>
				<div class="bloc">
				    <a href="<?php echo  $idc ; ?>"><h2 style="background-color: #<?php echo get_term_meta( $c[0]->term_id, '_category_color', true ); ?>" class="rubrique ">#<?php echo $c[0]->name;?></h2></a>
					<h1><?php the_title(); ?></h1>
					<h4 class="sous"><?php the_excerpt() ;?></h4>
					<div class="auteur">
					    <img src="<?php echo get_avatar_url( get_the_author_meta('ID'));  ?>" alt="" title="" ><!--<img src="<?php //echo get_avatar_url($next_athor);  ?>" alt="" title="" >!-->
						<h4><?php the_author(); ?></h4>
						<p><?php the_field('temps_de_lecture'); ?> min lecture</p>
					</div>
					<div class="tags">
					 <?php the_tags(' ',' ',' ');?>
					</div>
					<?php  wp_reset_postdata(); endif; ?>
					<div class="clr" style="height: 40px;"></div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>