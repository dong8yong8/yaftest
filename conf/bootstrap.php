<?php
	use Base\Base;
	use \Yaf\Dispatcher as D;
	class Bootstrap extends Yaf\Bootstrap_Abstract {
		public function _initGetConfig() {
			Base::registrySet('config', Base::app()->getConfig());
		}

		public function _initRoute() {
			$router = Base::getRouter();
			$router->addConfig(Base::registryGet('config')->routes);
		}
/*
		public function _initPlugin(D $dispatcher) {
			$test = new TestPlugin();
			$dispatcher->registerPlugin($test);

			$user = new UserPlugin();
			$dispatcher->registerPlugin($user);
		}
*/
		public function _initLocalNameSpace() {
		//	\Yaf\Loader::getInstance()->registerLocalNameSpace(array('i','M'));
		}
	
	}
