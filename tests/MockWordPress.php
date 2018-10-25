<?php

const WP_HOME_URL = "https://www.jaimeson-waugh.com";
const WP_HOME_TEXT = "Home Page";

class WP_Post
{
	public function __construct()
	{
		$this->title = WP_HOME_TEXT;
	}

	public $title;
}

function get_home_url()
{
	return WP_HOME_URL;
}

function get_post( $slug )
{
	return new WP_Post();
}

function get_option( $key )
{
	return 'index';
}
