<?php

$GLOBALS['wgHooks']['BeforePageDisplay'][] = function( OutputPage $out, Skin $skin ) {
	$out->addModuleStyles( 'func.commonstyles' );
};

$GLOBALS['wgHooks']['ResourceLoaderRegisterModules'][] = function( ResourceLoader $resourceLoader ) {
	$resourceLoader->register( 'func.commonstyles', [
		'styles' => [
			'func.commonstyles.mediaobject.less'
		],
		'localBasePath' => __DIR__ . '/resources',
		'targets' => [ 'desktop', 'mobile' ]
	] );
};