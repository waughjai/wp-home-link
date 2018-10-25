<?php

declare( strict_types = 1 );
namespace WaughJ\HomeHTMLLink
{
	use WaughJ\HTMLLink\HTMLLink;
	use function WaughJ\TestHashItem\TestHashItemExists;

	class HomeHTMLLink extends HTMLLink
	{
		public function __construct( array $atts = [] )
		{
			$href = get_home_url();
			$text = TestHashItemExists( $atts, 'text', get_post( get_option( 'page_on_front' ) )->title );
			parent::__construct( $href, $text, $atts );
		}
	}
}
