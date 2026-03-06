<?php
// This file is generated. Do not modify it manually.
return array(
	'custom-animation-wrapper' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'school-blocks/custom-animation-wrapper',
		'version' => '0.1.0',
		'title' => 'Custom Animation Wrapper',
		'category' => 'widgets',
		'icon' => 'slides',
		'description' => 'block wrapper for animate on scroll',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'aosAnimation' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'textdomain' => 'custom-animation-wrapper',
		'editorScript' => 'file:./index.js',
		'viewStyle' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	),
	'school-email' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'school-blocks/school-email',
		'version' => '0.1.0',
		'title' => 'School Email',
		'category' => 'text',
		'icon' => 'email-alt',
		'description' => 'custom block to display email links',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'schoolEmail' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'textdomain' => 'school-email',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
