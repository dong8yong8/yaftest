<?php
	namespace Base;
	class Base {
		public static function dump() {
			$args = func_get_args();

			foreach($args as $v) {
				echo '<pre>';
				var_dump($v);
				echo '</pre>';
			}
		}

		//获取app实例
		public static function app() {
			return \Yaf\Application::app();
		}

		//获取路由器
		public static function getRouter() {
			return \Yaf\Dispatcher::getInstance()->getRouter();
		}

		//禁用视图
		public static function disableView() {
			return \Yaf\Dispatcher::getInstance()->disableView();
		}

		//Registry about
		public static function registryGet($key) {
			return \Yaf\Registry::get($key);
		}

		public static function registrySet($key, $value) {
			return \Yaf\Registry::set($key, $value);
		}

	}
