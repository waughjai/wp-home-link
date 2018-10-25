<?php

declare( strict_types = 1 );
namespace WaughJ\WPHomeLink
{
	use WaughJ\HTMLLink\HTMLLink;
	use function WaughJ\TestHashItem\TestHashItemExists;

	class WPHomeLink extends HTMLLink
	{
		public function __construct( array $atts = [] )
		{
			$href = get_home_url();
			$text = TestHashItemExists( $atts, 'text', get_post( get_option( 'page_on_front' ) )->title );
			parent::__construct( $href, $text, $atts );
		}
	}
}
