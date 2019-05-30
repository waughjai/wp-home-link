<?php

require_once( 'MockWordPress.php' );

use PHPUnit\Framework\TestCase;
use WaughJ\WPHomeLink\WPHomeLink;

class WPHomeLinkTest extends TestCase
{
	public function testObjectWorks() : void
	{
		$object = new WPHomeLink();
		$this->assertTrue( is_object( $object ) );
	}

	public function testCorrectDefaults() : void
	{
		$object = new WPHomeLink();
		$this->assertEquals( $object->getURL(), WP_HOME_URL );
		$this->assertEquals( $object->getValue(), "Home" );
		$this->assertEquals( $object->getHTML(), '<a href="' . WP_HOME_URL . '">Home</a>' );
	}

	public function testCorrectArguments() : void
	{
		$object = new WPHomeLink([ 'value' => 'Index', 'class' => 'home-link' ]);
		$this->assertEquals( $object->getURL(), WP_HOME_URL );
		$this->assertEquals( $object->getValue(), 'Index' );
		$this->assertEquals( $object->getAttributeValue( 'class' ), 'home-link' );
		$this->assertStringContainsString( ' href="' . WP_HOME_URL . '"', $object->getHTML() );
		$this->assertStringContainsString( ' class="home-link"', $object->getHTML() );
	}
}
