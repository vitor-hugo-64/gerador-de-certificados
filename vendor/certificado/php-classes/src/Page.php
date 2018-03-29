<?php

	namespace Certificado;

	use Rain\Tpl;

	class Page
	{
		private $config;

		function __construct()
		{
			$views = 'views'.DIRECTORY_SEPARATOR;
			$viewsCache = 'views-cache'.DIRECTORY_SEPARATOR;
			$config = array( 'tpl_dir' => $views, 'cache_dir' => $viewsCache);
			Tpl::configure( $config );
		}

		public function drawPage($pages = array(null), $params = array(null))
		{
			$tpl = new Tpl();
			foreach ($params as $key => $value) {
				$tpl->assign( $key, $value);
			}
			foreach ($pages as $value) {
				$tpl->draw($value);
			}
		}
	}