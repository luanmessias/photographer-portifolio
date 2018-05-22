
<!-- LOOP de Galeria de fotos -->

<?php $images = easy_image_gallery_get_image_ids(); ?>
<?php if($images) : foreach ( $images as $attachment_id ):?>
<?php $imagefull = wp_get_attachment_image_src ( $attachment_id, '' ); ?>
<?php $image = wp_get_attachment_image_src ( $attachment_id, 'thumb-custom' ); ?>

<a class="popup" rel="fancybox[group]" href="<?php echo $imagefull[0]; ?>">
	
	<img src="<?php echo $image[0]; ?>">

</a>

<?php endforeach; endif; ?>


<!-- LOOP de Vídeo youtube -->
<?php 
	$args = array('post_type'=>'videos', 'showposts'=> 10);
	$my_slide_video = get_posts( $args );
 ?>
<?php if( $my_slide_video ) : foreach( $my_slide_video as $post ) : setup_postdata( $post ); ?>
        
    <?php
        $textDescription = get_field('link_video');
        $parsed     = parse_url($textDescription);
        $hostname   = $parsed['host'];
        $query      = $parsed['query'];
        $path       = $parsed['path'];
        $Arr = explode('v=',$query);
        $videoIDwithString = $Arr[1];
        $videoID = substr($videoIDwithString,0,11); // 5sRDHnTApSw
        if( (isset($videoID)) && (isset($hostname)) && ($hostname=='www.youtube.com' || $hostname=='youtube.com')){?>
            <li><iframe width="707" height="375" src="http://www.youtube.com/embed/<?php echo $videoID; ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe></li>
    <?php }?>

<?php endforeach; endif; wp_reset_postdata(); ?>


<?php 

/**************************************
 * Registro Custom Post type profissional
 **************************************/
add_action('init', 'videos_registrer');
function videos_registrer(){
     $labels = array(
        'name' => _x('Vídeos', 'post type general name'),
        'singular_name' => _x('Vídeos', 'post type singular name'),
        'add_new' => _x('Adicionar novo video', 'video'),
        'add_new_item' => __('Adicionar novo'),
        'edit_item' => __('Editar video'),
        'new_item' => __('Novo video'),
        'view_item' => __('Ver video'),
        'search_items' => __('Procurar video'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => false, 
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 4,
        'supports' => array('title'),
      );
    register_post_type('videos',$args);
}

?>