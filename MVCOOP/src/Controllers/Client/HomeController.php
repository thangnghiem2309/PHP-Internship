<?php
namespace Thangnghiem\Mvcoop\Controllers\Client;
use Thangnghiem\Mvcoop\Commons\Controller;
class HomeController extends Controller
{
    public function index() 
    {
        return $this->renderViewClient('home');
    }
}
