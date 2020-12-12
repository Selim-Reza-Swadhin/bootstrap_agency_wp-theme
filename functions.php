<?php
add_action( 'after_setup_theme', 'theme_start' );

function theme_start() {

	//custom header image
	//add_theme_support('custom-header');
	add_theme_support( 'custom-header', array(
		'header-text'        => true,
		'default-text-color' => '#fff'
	) );

	add_theme_support( 'custom-background' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio' ) );
	add_theme_support( 'post-thumbnails' );

	//custom logo title
	//add_theme_support('custom-logo');
	add_theme_support( 'custom-logo', array(
		'width'       => 200,
		'height'      => 100,
		'flex-width'  => true,
		'flex-height' => true
	) );


	//register menu
	register_nav_menus( array(
//	'primary' => __( 'Primary Menu', 'agency' ),
		'main-menu' => __( 'Main Menu' )
	) );
}

//for responsive menu start
require_once get_template_directory() . '/inc/custom-walker-nav-menu.php';

//shortcode api
//add_shortcode( 'service-shortcode', 'service_section_shortcode');

/*function service_section_shortcode(){
//echo '<h2>Service Section</h2>';//not echo. it is always echo
	return '<h2 style="text-align: center">Service Section</h2>';
}*/

/*function service_section_shortcode($atts, $content){

	$attss = shortcode_atts( array(
		'align'=>'right',
	), $atts, 'service-shortcode');

	extract( $attss);

	return "<h2 style='text-align:$align;'>Service Section</h2>";
}*/

add_shortcode( 'ami', 'custom_shortcode_add' );

function custom_shortcode_add( $atts, $content ) {
	//return '<h2>Swadhin Islam</h2>';
	//print_r( $atts );
	//echo "color:".$atts['kalor'];
	$allattrs = shortcode_atts( array(
		'kalor' => '',
		'size'  => '',
	), $atts, 'ami' );
	//exit();
	?>
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase"
                    style="color:<?php echo $allattrs['kalor']; ?>; font-size:color:<?php echo $allattrs['size']; ?>"><?php echo $content; ?></h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <svg class="svg-inline--fa fa-circle fa-w-16 fa-stack-2x text-primary" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="circle" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path
                                        fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> Font Awesome fontawesome.com -->
                            <svg class="svg-inline--fa fa-shopping-cart fa-w-18 fa-stack-1x fa-inverse"
                                 aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart"
                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path
                                        fill="currentColor"
                                        d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg>
                            <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> Font Awesome fontawesome.com -->
                        </span>
                    <h4 class="my-3">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <svg class="svg-inline--fa fa-circle fa-w-16 fa-stack-2x text-primary" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="circle" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path
                                        fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> Font Awesome fontawesome.com -->
                            <svg class="svg-inline--fa fa-laptop fa-w-20 fa-stack-1x fa-inverse" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="laptop" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path
                                        fill="currentColor"
                                        d="M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z"></path></svg>
                            <!-- <i class="fas fa-laptop fa-stack-1x fa-inverse"></i> Font Awesome fontawesome.com -->
                        </span>
                    <h4 class="my-3">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <svg class="svg-inline--fa fa-circle fa-w-16 fa-stack-2x text-primary" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="circle" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path
                                        fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> Font Awesome fontawesome.com -->
                            <svg class="svg-inline--fa fa-lock fa-w-14 fa-stack-1x fa-inverse" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="lock" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path
                                        fill="currentColor"
                                        d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg>
                            <!-- <i class="fas fa-lock fa-stack-1x fa-inverse"></i> Font Awesome fontawesome.com -->
                        </span>
                    <h4 class="my-3">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
	<?php
}

add_shortcode( 'user', 'custom_user_shortcode' );

function custom_user_shortcode( $atts ) {
	$user_role = $atts['role'];

	$all_user = get_users( array(
		"role" => $user_role
	) );

	echo '<pre>';
	foreach ( $all_user as $key => $value ) {
		echo "Name : " . $value->data->display_name . "<br>";
		echo "Name : " . $value->data->user_email . "<br>";
	}
	print_r( $all_user );
}

//problem test
add_shortcode( 'hi', function () {
	//echo '<h3>Hi, how are you</h3>';
	return '<h3>Hi, how are you</h3>';
} );
add_shortcode( 'hlw', function () {
	//echo '<h3>Hello, I am fine</h3>';
	//return '<h3>Hello, I am fine</h3>';

	ob_start();
	?>


    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <svg class="svg-inline--fa fa-circle fa-w-16 fa-stack-2x text-primary" aria-hidden="true"
                                 focusable="false" data-prefix="fas" data-icon="circle" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path
                                        fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                            <!-- <i class="fas fa-circle fa-stack-2x text-primary"></i> Font Awesome fontawesome.com -->
                            <svg class="svg-inline--fa fa-shopping-cart fa-w-18 fa-stack-1x fa-inverse"
                                 aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart"
                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path
                                        fill="currentColor"
                                        d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg>
                            <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> Font Awesome fontawesome.com -->
                        </span>
        <h4 class="my-3">E-Commerce</h4>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
            architecto quo inventore harum ex magni, dicta impedit.</p>
    </div>

	<?php
	return ob_get_clean();
} );


//loads style through function
add_action( 'wp_enqueue_scripts', 'agency_enqueue_style' );
function agency_enqueue_style() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/styles.css' );
	wp_enqueue_style( 'core-css', get_stylesheet_uri() );//style.css
	wp_enqueue_style( 'agency-fonts', agency_fonts_url() );//remote Google fonts link

	//remote Google fonts link
	//wp_enqueue_style( 'fonts-lora', '//fonts.googleapis.com/css?family=Montserrat:400,700' );
	//wp_enqueue_style( 'fonts-family', '//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' );
	//wp_enqueue_style( 'fonts-familly', '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' );
}


//loads script through function
add_action( 'wp_enqueue_scripts', 'agency_enqueue_script' );

function agency_enqueue_script() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/all.js', array( 'jquery' ), 1.0, true );//dependency array('jquery') means after jquery file setup
	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/assets/mail/jqBootstrapValidation.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/assets/mail/contact_me.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), 1.0, true );
}

/**
 * Register custom fonts.
 */
function agency_fonts_url() {
	$fonts_url = '';

	/*
	 * translators: If there are characters in your language that are not supported
	 * by Libre Franklin, translate this to 'off'. Do not translate into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'agency' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Montserrat:400,700';
		$font_families[] = 'Droid Serif:400,700,400italic,700italic';
		$font_families[] = 'Roboto Slab:400,100,300,700';

		$query_args = array(
			'family'  => urlencode( implode( '|', $font_families ) ),
			'subset'  => urlencode( 'latin,latin-ext' ),
			'display' => urlencode( 'fallback' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

?>

    <!--King Composer Start-->
<?php
if ( function_exists( 'kc_add_map' ) ) {
	kc_add_map(
		array(
			'title_description' => array(
			        'name'=>'My King',
			        'title'=>'My King',
			        'category'=>'Amader',
			        'icon'=>'et-megaphone',
                'params'=>array(
                        array(
                              'name'=>'title_name',
                              'label'=>'Title',
                              'type'=>'text'
                        ),
                        array(
                              'name'=>'description_name',
                              'label'=>'Description',
                              'type'=>'textarea'
                        ),
                )
            )

		)
	);

	kc_add_map(
		array(
			'title_service' => array(
				'name'=>'Servicee',
				'category'=>'Servicee',
				'icon'=>'et-bike',
				'params'=>array(
					array(
						'name'=>'icon_name',
						'label'=>'Icon',
						'type'=>'icon_picker'
					),
					array(
						'name'=>'title_namee',
						'label'=>'Title',
						'type'=>'text'
					),
					array(
						'name'=>'description_namee',
						'label'=>'Description',
						'type'=>'textarea'
					),
				)
			)

		)
	);
}

function title_description_shortcode($atts, $content) {
    $short = shortcode_atts( array(
            'title_name'=>'',
            'description_name'=>'',
    ), $atts, 'title_description');
	?>
    <div class="text-center">
        <h2 class="section-heading text-uppercase"><?= $short['title_name'];?></h2>
        <h3 class="section-subheading text-muted"><?= $short['description_name'];?></h3>
    </div>
	<?php
}

add_shortcode( 'title_description', 'title_description_shortcode' );


function service_description_shortcode($atts, $content) {
    $shortt = shortcode_atts( array(
            'icon_name'=>'',
            'title_namee'=>'',
            'description_namee'=>'',
    ), $atts, 'title_service');

    ob_start();
	?>
        <div class="text-center">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack text-primary"></i>
                            <i class="<?= $shortt['icon_name'];?> fa-stack-1x fa-inverse"></i>
                        </span>
            <h4 class="my-3"><?= $shortt['title_namee'];?></h4>
            <p class="text-muted text-justify"><?= $shortt['description_namee'];?></p>
        </div>

	<?php
    return ob_get_clean();
}

add_shortcode( 'title_service', 'service_description_shortcode' );

require_once get_template_directory().'/inc/logo.php';
require_once get_template_directory().'/inc/codestar-framework/codestar-framework.php';
require_once get_template_directory().'/inc/custom-cf.php';
//require_once get_theme_file_path().'/inc/codestar-framework/codestar-framework.php';
//require_once get_theme_file_path().'/inc/custom-cf.php';

?>