<?php

namespace Megumi\WP;

class oAuth
{
	private $default = array(
		'path' => 'auth',
		'callback_path' => 'callback',
		'callback_transport' => 'post',
	);

	public function __construct( $config )
	{
		$config = wp_parse_args( $config, $this->get_default() );
		$oauth = new Opauth( $config );
	}

	private function get_default()
	{
		return add_filter( 'oauth_config', $this->default );
	}
}
