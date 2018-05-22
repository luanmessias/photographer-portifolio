<?php 
	$args = array('post_type'=>'page', 'pagename'=>'galeria');
	$my_page = get_posts( $args );
?>
<div id="last-jobs" class="col-12 title-general">
	<small><?php echo $my_page[0] -> post_content ?></small>
</div>
<div class="col-12 col-galery">

	<?php $cont = 1; if( $my_page ) : foreach( $my_page as $post ) : setup_postdata( $post ); ?>
	<?php $images = easy_image_gallery_get_image_ids(); ?>
	<?php if($images) : foreach ( $images as $attachment_id ): '' ?>
		<?php $imagefull = wp_get_attachment_image_src ( $attachment_id, '' ); ?>
		<?php $image = wp_get_attachment_image_src ( $attachment_id, 'thumb-custom' ); ?>
		<?php $img_info =  wp_prepare_attachment_for_js($attachment_id); ?>

		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 no-pd">
			<div class="mais-detalhes">
				<div class="img-caption">
					<?php echo $img_info['description'] ?>
				</div>
				<a href="<?php echo $imagefull[0]; ?>" data-toggle="lightbox" data-gallery="example-gallery">Mais detalhes <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<a class="img-cont" style="background-image: url(<?php echo $image[0]; ?>)"></a>
		</div>


	<?php endforeach; endif; ?>

	<?php $cont ++ ; endforeach; endif; ?>
</div>