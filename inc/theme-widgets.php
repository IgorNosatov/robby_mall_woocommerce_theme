<?php

function robby_mall_widgets_init(){

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'          => __( 'Sidebar', 'robby_mall' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Add widgets here.', 'robby_mall' ),
			)
		)
	);
	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'robby_mall' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'robby_mall' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Banner', 'robby_mall' ),
				'id'          => 'banner-3',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'robby_mall' ),
			)
		)
	);

}

add_action( 'widgets_init', 'robby_mall_widgets_init' );