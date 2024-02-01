<?php 

namespace Thangnghiem\Mvcoop\Controllers\Admin;

use Thangnghiem\Mvcoop\Commons\Controller;

class DashboardController extends Controller
{
    public function index() {
        return $this->renderViewAdmin('dashboard');
    }
}