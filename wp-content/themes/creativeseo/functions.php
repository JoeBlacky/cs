<?php
/**
 * Creative Seo functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Creative_Seo
 */

if ( ! function_exists( 'creativeseo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function creativeseo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Creative Seo, use a find and replace
	 * to change 'creativeseo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'creativeseo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'creativeseo' ),
		'footer' => esc_html__( 'Footer Menu', 'creativeseo' ),
		'social' => esc_html__( 'Social Menu', 'creativeseo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'creativeseo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'creativeseo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creativeseo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'creativeseo_content_width', 640 );
}
add_action( 'after_setup_theme', 'creativeseo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function creativeseo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'creativeseo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'creativeseo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name' => __('Footer', 'creativeseo'),
		'description'   => __('Footer Sidebar', 'creativeseo'),
		'id'            => 'footer-sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}
add_action( 'widgets_init', 'creativeseo_widgets_init' );

/**
 * Add fields to admin settings page
 */
function add_custom_settings_to_general_page(){
	$fields = array(
		'address' => 'Address',
		'phone_number'  => 'Phone Number',
		'contact_email' => 'Contact_Email'
	);
	foreach ($fields as $code => $label) {
		register_setting( 'general', $code );
		add_settings_field(
			$code,
			$label,
			'new_settings_field_callback',
			'general',
			'default',
			array(
				'id' => $code,
				'option_name' => $code
			)
		);
	}
}
add_action('admin_menu', 'add_custom_settings_to_general_page');

function new_settings_field_callback( $val ){
	$id = $val['id'];
	$option_name = $val['option_name'];
	?>
	<input type="text"
		   name="<?php echo $option_name; ?>"
		   id="<?php echo $id; ?>"
		   value="<?php echo esc_attr( get_option($option_name) ); ?>" />
	<?php
}

/**
 *	Redefine comments function
 */
function mytheme_comment($comment, $args, $depth){
	$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<div>
			<?php comment_text() ?>
		</div>
		<div class="comment-author vcard">
			<cite class="fn">By <?php echo get_comment_author_link() ?></cite>
		</div>
		<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting validation.</em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata">
			<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">On <?php echo get_comment_date('l dS F \'y') ?></a>
			<?php edit_comment_link('(Edit)', '  ', '') ?>
		</div>

		<!--<div class="reply">
			<?php /*comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) */?>
		</div>-->
	</div>
	<?php
}

/**
 * Enqueue scripts and styles.
 */


function creativeseo_scripts() {
	wp_enqueue_style( 'creativeseo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'creativeseo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'creativeseo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery.1.12.3', get_template_directory_uri() . '/assets/js/dev/jquery.1.12.3.js', array(), '', true );

	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/dev/owl.carousel.js', array(), '', true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/dev/main.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creativeseo_scripts' );

function wp_cs_styles()
  {
    wp_register_style('cs-style', get_template_directory_uri() . '/assets/css/main.css', array(), 'all');
    wp_enqueue_style('cs-style');
  }
add_action('wp_enqueue_scripts', 'wp_cs_styles');

function sort_comment_fields( $fields ){
	$new_fields = array();
	$myorder = array('author','email','url','comment'); // порядок полей

	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;
	return $new_fields;
}
add_filter('comment_form_fields', 'sort_comment_fields' );

/* Adding field to admin customizer ========================================= */
function creativeseoThemeCustomizer($wp_customize){
	$wp_customize->add_section( 'themeslug_logo_section' , array(
		'title'       => __( 'Logo', 'themeslug' ),
		'priority'    => 30,
		'description' => 'Upload a logo image.',
	));

	$wp_customize->add_setting( 'themeslug_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
		'label'    => __('Logo', 'themeslug'),
		'section'  => 'themeslug_logo_section',
		'settings' => 'themeslug_logo',
	)));
}
add_action( 'customize_register', 'creativeseoThemeCustomizer' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Custom String Length ===================================================== */
	function customStringLength($srting, $length){
	  $stringLength = strlen($srting);

	  if ($stringLength > $length) {
	    return substr($srting, 0, $length) . '...';
	  }
	  else {
	    return $srting;
	  }
	}
/* Custom Post Listing ====================================================== */
	function customPostListing($postType, $showPerPage = -1) {
	  $args = array(
      'post_type'      => $postType,
      'post_status'    => 'publish',
      'post__not_in'   => array(get_post()->ID),
      'posts_per_page' => $showPerPage,
      'order'					 => 'ASC'
	  );
	  $postList = new WP_Query($args);
    return $postList;
  }
/* Custom Placeholder ======================================================= */
	function getPlaceholder() {
		$themePath   = get_template_directory_uri();
		$assetsPath  = '/assets/img/';
		$largeImage  = 'placeholder.png';
		$smallImage  = 'placeholder-small.png';
		$postType    = get_post_type();

		if ($postType == 'works'){
			$placeholder = $themePath . $assetsPath . $smallImage;
		} else {
			$placeholder = $themePath . $assetsPath . $largeImage;
		}

		return $placeholder;
	}
/* Additional Block ========================================================= */
	function getAdditionalBlock($name){
		if(post_type_exists('additional')){
			$post = get_posts(array(
				'name' => $name,
				'post_type' => 'additional'
			));
		  return array_shift($post) ?: null;
		}

		return null;
}
/* Allowing .SVG to be uploaded ============================================= */
  function customMimeTypes($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'customMimeTypes');
/* ========================================================================== */