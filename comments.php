<?php if ( post_password_required() ) { return; } ?>
<a id="reader-comments" name="reader-comments"></a>
<section id="comments" class="comments-area page-section">
	<?php if ( have_comments() ) { ?>
	<h2 class="header-caps text-center"><span>Reader Comments</span></h2>
	<div class="comments-list-wrap">
			<div class="container-fluid">
			<h3 class="comments-title">
				<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'beautifulhomes' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Replies to &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'beautifulhomes'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
				?>
			</h3>
	
			<ol class="comment-list list-unstyled">
				<?php
					wp_list_comments(
						array(
							'avatar_size' => 100,
							'style'       => 'ol',
							'short_ping'  => true,
							'reply_text'  => '<span>Reply</span> <i class="fa fa-comments"></i>',
						)
					);
				?>
			</ol>
	
			<?php
			the_comments_pagination( array('prev_text' => '<span>Previous</span>','next_text' => '<span>Next</span>') );
			?>
		</div>	
	</div>	
		<?php } ?>
		<?php 
			$args = array(
			'class_form'    => 'comment-form',
			'class_submit'  => 'btn btn-secondary btn-block',
			'title_reply'       => '<h3 class="header-caps text-center"><span>Leave a Reply</span></h3>',
			'title_reply_to'    => '',
			'comment_field' =>  '<div class="form-group"><textarea id="comment" class="form-control " name="comment" cols="45" rows="4" aria-required="true"></textarea></div>',
			'cancel_reply_link' => __( 'Cancel Reply <i class="fa fa-times"></i>' ),
			);
		?>	
		<?php comment_form($args); ?>
</section><!-- #comments -->
