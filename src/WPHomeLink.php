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
			$value = TestHashItemExists( $atts, 'value', "Home" );
			parent::__construct( $href, $value, $atts );
		}
	}
}
