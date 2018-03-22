<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html',
		array(
			array( 'property' => 'font-family', 'value' => 'sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dfn',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		pre,
		samp',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input,
		optgroup,
		select,
		textarea',
		array(
			array( 'property' => 'font', 'value' => 'inherit' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'optgroup',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.screen-reader-text:focus',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-family', 'value' => '\'Nunito Sans\', sans-serif' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '\'Catamaran\', sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '28px' ),
			array( 'property' => 'font-size', 'value' => '1.75rem' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-size', 'value' => '1.5rem' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-size', 'value' => '1.125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '0.9375rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-size', 'value' => '0.9375rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '125%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu-item-has-children > a:after,
		.main-navigation .sub-menu .menu-item-has-children > a:after,
		.main-navigation ul .sub-menu ul a:before,
		.main-navigation ul ul a:after,
		.main-navigation ul ul a:before,
		.menu-toggle::before,
		.search-submit:before',
		array(
			array( 'property' => 'font-family', 'value' => '"Genericons-Neue"' ),
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-variant', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="color"],
		input[type="date"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="email"],
		input[type="month"],
		input[type="number"],
		input[type="password"],
		input[type="range"],
		input[type="search"],
		input[type="tel"],
		input[type="text"],
		input[type="time"],
		input[type="url"],
		input[type="week"],
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-submit:before',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-size', 'value' => '1.25rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation .menu > li > a',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation ul .sub-menu ul a:before',
		array(
			array( 'property' => 'font-size', 'value' => '8px' ),
			array( 'property' => 'font-size', 'value' => '0.5rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation ul ul ul a',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-toggle:before',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '0.75rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.nav-links a',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.jetpack-social-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
			array( 'property' => 'font-size', 'value' => '2rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-family', 'value' => '\'Catamaran\', sans-serif' ),
			array( 'property' => 'font-size', 'value' => '36px' ),
			array( 'property' => 'font-size', 'value' => '2.25rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '0.75rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.sticky-post',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '0.75rem' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
			array( 'property' => 'font-size', 'value' => '1.625rem' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-password-form label',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
			array( 'property' => 'font-size', 'value' => '1.625rem' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list .pingback,
		.comment-list .trackback',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '0.75rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.reply',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-size', 'value' => '0.75rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.no-comments',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-awaiting-moderation',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tagcloud a,
		.wp_widget_tag_cloud a',
		array(
			array( 'property' => 'font-size', 'value' => 'inherit !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss a',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-size', 'value' => '0.8125rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_jetpack_display_posts_widget .jetpack-display-remote-posts p',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_calendar table caption',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-size', 'value' => '1rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#main #infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.wp-caption .wp-caption-text',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-size', 'value' => '0.875rem' ),
		)
	);

	return $category_rules;
} );
