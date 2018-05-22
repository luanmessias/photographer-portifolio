<?php 
	$args = array('post_type'=>'page', 'pagename'=>'Sobre');
	$my_page = get_posts( $args );
	$cont = 1; if( $my_page ) : foreach( $my_page as $post ) : setup_postdata( $post );
	$images = easy_image_gallery_get_image_ids();
	if($images) : foreach ( $images as $attachment_id ): '';
	$imagefull = wp_get_attachment_image_src ( $attachment_id, '' );
		$img[] = $imagefull[0];
	endforeach; endif;
	$cont ++ ; endforeach; endif;
?>

<div id="page-about" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about" style="background-image: url(<?php echo $img[0] ?>);">
	<div class="cont">
		<?php echo $my_page[0] -> post_content ?>
	</div>
</div>
