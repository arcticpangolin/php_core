<?php

/**

  TODO:
  - So many notes
  - Just make this actually a real thing not just  ahacky test.

 */
namespace App\Controllers;
//use Core;

class HomeController #extends Controller
{
  
  public function index() {
    echo 'Hello from the home controller!! I am alive :)';
    echo '<p>Query string parameters: <pre>' . htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
  }
}