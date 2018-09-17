<?php if ( post_password_required() ) { return; } ?>
<a id="reader-comments" name="reader-comments"></a>
<section id="comments" class="comments-area page-section">
	<?php if ( have_comments() ) { ?>
			<h2 class="header-caps text-center"><span>Reader Comments</span></h2>
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
		<?php } ?>
			
		<h2 class="header-caps text-center"><span>Leave a Reply</span></h2>
		<?php 
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$fields =  array(
		  'author' =>
		    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) .
		    ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
		    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		    '" size="30"' . $aria_req . ' /></p>',
		
		  'email' =>
		    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) .
		    ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
		    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		    '" size="30"' . $aria_req . ' /></p>'
		    );
			$args = array(
			'class_form'    => 'comment-form',
			'class_submit'  => 'btn btn-secondary',
			'title_reply'       => '',
			'title_reply_to'    => '',
			'fields'	=> $fields,
			'comment_field' =>  '<div class="form-group"><textarea id="comment" class="form-control " name="comment" cols="45" rows="4" aria-required="true"></textarea></div>'
			);
		?>
		<div class="container-fluid">		
		<?php comment_form($args); ?>
		</div>
</section><!-- #comments -->
