<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Member;

use App\Teacher;  // for deffirent model name other than table name

use Illuminate\Http\Request;

class DemoController extends Controller{
	function index(Request $request){
		//echo $request->get('name','if name not found show this message');
		//dd($request->all());
		//dd($request);
		echo $request->name;
	}
	function index2(){
		$bikes=['hero','yamaha','honda','tvs','bajaj'];
		$price=[5000,4000,2000,40000,909090900];
		$string="vikas singh thakur";

		// first way to inser data
		/* create object of model */
		// $obj=new Member;

		// $obj->mname="akash singh";
		// $obj->address="pamoli teriya";
		// $obj->save();

		/* alternate way to insert data by using constructor */

		$obj2=new Teacher(['mname'=>'helloo hwo are jla dj','address'=>"akbarpur"]);

		$obj2->save();

		/* first way return value to model */
		
		#return view('view2')->with(['bikes'=>$bikes,'price'=>$price]);

		/* second way return value to model by chaning using with */

		return view('view2')->withbikes($bikes)->withprice($price)->withname($string);
	}
}
?>