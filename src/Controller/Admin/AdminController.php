<?php 

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController {

	public function initialize() {
		
		parent::initialize();
		$this->viewBuilder()->setLayout('admin');

	}

}