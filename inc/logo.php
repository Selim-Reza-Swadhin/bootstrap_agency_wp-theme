<!--King Composer Start-->
<?php
if ( function_exists( 'kc_add_map' ) ) {
	kc_add_map(
		array(
			'logo' => array(
				'name'=>'Logo',
				'title'=>'My King',
				'category'=>'Amader',
				'icon'=>'et-strategy',
				'params'=>array(
					array(
						'name'=>'image_name',
						'label'=>'Image',
//						'type'=>'attach_image',
						'type'=>'icon_picker'
					),
					array(
						'name'=>'description_url',
						'label'=>'Url',
						'type'=>'textarea'
					),
				)
			)

		)
	);
}

function logo_description_shortcode($atts, $content) {
	$short = shortcode_atts( array(
		'image_name'=>'',
		'description_url'=>'',
	), $atts, 'logo');

	ob_start();
	?>
		<a href="<?= $short['description_url'];?>">
            <?php
            $logo = wp_get_attachment_image_src( $short['image_name'], 'thumbnail');
            //print_r( $logo);
            //wp_die();
            ?>
			<img class="img-fluid d-block mx-auto" src="<?php echo $logo[0];?>" alt="No Image">
		</a>
	<?php
    return ob_get_clean();
}

add_shortcode( 'logo', 'logo_description_shortcode' );
