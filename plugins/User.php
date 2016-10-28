<?php
	class UserPlugin extends \Yaf\Plugin_Abstract {
		public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
			echo 'aaaaaaaaaaaaaaaaaaaa';
		}
		public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
			echo 2222222222222;
		}
	
	}
