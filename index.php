<?php get_header(); ?>
<?php get_sidebar("sidebar"); ?>

	<section class="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

        <article class="header--text">
            
			<span class="icon-paper-clip"></span>
            <a class="a a--tittle" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

				<div class="iconos--datos">

					<p class="iconos--datosContainer">
						<span class="icon-chat"> </span>
						<span><?php comments_number( 'sin comentarios', 'un comentario', '% comentarios' ); ?></span>
					</p>
					<p class="iconos--datosContainer">	
							<span class="icon-clock2"> </span>
							<span><?php the_date() ?></span>
				    </p>
					<p class="iconos--datosContainer">
							<span class="icon-tag-fill"> </span>	
							<?php	echo get_the_tag_list('<span class="tags--span"> ',', ','</span>');?>
					</p>
							
				</div>
				
				</article>

            <?php the_post_thumbnail('large') ?>
            
			<div class="texto">
							
				<p class="excerpt"><?php the_excerpt(); ?></p>
						
				<?php echo get_avatar(get_the_author_meta( 'ID' )); ?>

            	<p class="pie--post">Por: <?php the_author(); ?> <br/> <?php the_author_meta('description'); ?></p>

            </div>

            <a class="ancla--leer a" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Seguir Leyendo</a>
						
						<div class="separador"></div>

						<p><?php get_the_posts_pagination() ?></p>

            <?php  endwhile; else : ?>

            <?php endif; ?>

						<p><?php get_the_posts_pagination() ?></p>
						<P class="paginacion"><?php echo paginate_links( $args ); ?></P>

						<?php next_posts_link( 'Posts antiguos' ); ?>

						<div class="">
						
							<?php previous_posts_link( 'Posts nuevos' ); ?>
					
					  </div> 

	</section>

<?php get_footer("footer") ?>
