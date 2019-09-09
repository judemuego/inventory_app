<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
 
class DashboardController extends Controller {
     
    //For Index Page
    public function index(){
        return view('index');
    }
}
?>