<?php
	get_header();
?>

<div id="primary" class="site-content">
	<div id="content" role="main">
		<div class="post-archive blog-posts readable-content">
			<header class="page-header">
				<h1 class="page-title"><?php echo __( 'Posts por data', 'read' ); ?> <span class="on"><?php echo __( '&#8594;', 'read' ); ?></span> <span><?php echo get_the_date(); ?></span></h1>
			</header>
			<!-- end .page-header -->
			
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
					
						$format = get_post_format();
						
						if ( $format != false )
						{
							get_template_part( 'format', $format );
						}
						else
						{
							get_template_part( 'format', 'standard' );
						}
						
					endwhile;
				else :
					?>
						<div class="not-found">
							<h2><?php echo __( 'Nada encontrado', 'read' ); ?></h2>
							
							<p><?php echo __( 'Ops, nada aqui.', 'read' ); ?></p>
							
							<?php
								get_search_form();
							?>
						</div>
					<?php
				endif;
				wp_reset_query();
			?>
			
			<?php
				get_template_part( 'part', 'pagination' );
			?>
		</div>
		<!-- end .search-results -->
	</div>
	<!-- end #content -->
</div>
<!-- end #primary -->

<?php
	get_footer();
?>