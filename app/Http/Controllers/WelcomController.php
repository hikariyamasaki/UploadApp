<?php
namespace AppHttpControllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomController extends Controller{

    piblic function index()
    {
      return view('welcom');
    }

    piblic function contact()
    {
      return "contact";
    }

}
 ?>
