<?php

require_once( 'MockWordPress.php' );

use PHPUnit\Framework\TestCase;
use WaughJ\HomeHTMLLink\HomeHTMLLink;

class HomeHTMLLinkTest extends TestCase
{
	public function testObjectWorks() : void
	{
		$object = new HomeHTMLLink();
		$this->assertTrue( is_object( $object ) );
	}

	public function testCorrectDefaults() : void
	{
		$object = new HomeHTMLLink();
		$this->assertEquals( $object->getURL(), WP_HOME_URL );
		$this->assertEquals( $object->getText(), WP_HOME_TEXT );
		$this->assertEquals( $object->getHTML(), '<a href="' . WP_HOME_URL . '">' . WP_HOME_TEXT . '</a>' );
	}

	public function testCorrectArguments() : void
	{
		$object = new HomeHTMLLink([ 'text' => 'Index', 'class' => 'home-link' ]);
		$this->assertEquals( $object->getURL(), WP_HOME_URL );
		$this->assertEquals( $object->getText(), 'Index' );
		$this->assertEquals( $object->getAttributeValue( 'class' ), 'home-link' );
		$this->assertEquals( $object->getHTML(), '<a href="' . WP_HOME_URL . '" class="home-link">Index</a>' );
	}
}