<?php
	use Base\Base;

	class ListController extends \Yaf\Controller_Abstract {
		public function indexAction() {
			Base::disableView();
			Base::dump(Base::getRouter()->getCurrentRoute());
			echo 11111;
		}
	
	}
