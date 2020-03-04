<div class="blog">
	<div class="menu_blog">
		<div class="rubr">
			<a href=""><img src="images/hashtag.svg" alt="" title="rubrique" ></a>
		</div>
		<div class="search">
			<a href="" ><img src="images/search.svg" alt="" title="recherche" ></a>
		</div>
	</div>
</div>
<?php $categories = get_categories( array("hide_empty" => 0)); ?>

 <!-- <div class="menu_rubr">
	<div class="ccc">
		<h2>Rubriques</h2>
		<nav>
			<ul>

				<li><a href="">#Web<span class="webb"></span></a></li>
				<li><a href="">#Mobile<span class="mobb"></span></a></li>
				<li><a href="">#MarketingDigital<span class="mark"></span></a></li>
				<li><a href="">#Analytics<span class="analy"></span></a></li>
				<li><a href="">#Strategy<span class="stratt"></span></a></li>
			</ul>
		</nav>
	</div>
	<div class="ddd"></div>
</div> -->
<div class="menu_rubr">
 <div class="ccc">
	 <h2>Rubriques</h2>
	 <nav>
		 <ul>
			 <?php

			 foreach ( $categories as $category ) {

    printf( '<li><a href="%3$s">#%1$s<span  style="background-color:#%2$s;"></span></a></li>',
        // esc_url( get_category_link( $category->term_id ) ),
        esc_html( $category->name ),
				get_term_meta( $category->term_id, '_category_color', true ),
				esc_url( get_category_link( $category->term_id ) )

    );
} ?>

		 </ul>
	 </nav>
 </div>
 <div class="ddd"></div>
</div>


<div class="menu_sear">
	<?php get_search_form(); ?>
	<!-- <div class="article_rech">
		<div class="article">
			<img class="image" src="images/Groupe de masques 25.png" alt="" title="" >
			<div class="bloc">
				<h3 class="mobb">#Mobile</h3>
				<h2>The Future of Brain-Computer Interfaces and the Human Machine</h2>
				<div class="auteur">
					<img src="images/Groupe de masques 27.png" alt="" title="" >
					<h4>PAR <strong class="name">Majda Nafissa Rahal</strong></h4>
				</div>
			</div>
		</div>
		<div class="article">
			<img class="image" src="images/Groupe de masques 25.png" alt="" title="" >
			<div class="bloc">
				<h3 class="mobb">#Mobile</h3>
				<h2>The Future of Brain-Computer Interfaces and the Human Machine</h2>
				<div class="auteur">
					<img src="images/Groupe de masques 27.png" alt="" title="" >
					<h4>PAR <strong class="name">Majda Nafissa Rahal</strong></h4>
				</div>
			</div>
		</div>
	</div> -->
</div>
