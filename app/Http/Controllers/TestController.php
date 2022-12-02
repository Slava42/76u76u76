<?php 
/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller { 
public function show() { 
return 'TestController'; 
} 
}*/




/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
public function show($param) 
// получаем переданный параметр 
{ // в переменной $param будет переданный параметр } 
}*/



/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
	{	 
		public function show($param1, $param2) 
			{
 				return '' .$param1*$param2; 
			} 
	}*/




/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
	{	 
		public function sum ($num1,$num2)
			{
 				return '' .$num1+$num2;
			} 
	}*/
 


	/*namespace App\Http\Controllers; 
	use App\Http\Controllers\Controller; 
	class TestController extends Controller 
	{ 
			private $employees; 
			public function __construct() { 
				$this->employees = [ 
					1 => [ 
							'name' => 'user1', 
							'surname' => 'surname1', 								'salary' => 1000, 
						], 
					2 => [ 	
							'name' => 'user2', 
							'surname' => 'surname2', 								'salary' => 2000, 
							], 
					3 => [ 
						'name' => 'user3', 
						'surname' => 'surname3', 
						'salary' => 3000, 
						], 
					4 => [ 
							'name' => 'user4', 
							'surname' => 'surname4', 								'salary' => 4000, ], 
					5 => [ 
							'name' => 'user5', 
							'surname' => 'surname5', 								'salary' => 5000, 
						], 
					]; 
	
	}*/ 

/*public function showOne($id)
{
	return $this->employees[$id];
}
public function showField($id, $name)
{
	return $this->employees[$id][$name];
}
	}*/


	//Лаб. 4


/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
		public function show() { 
								return view('test'); 
							} 
}*/


/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
public function show() 
{ 
return view('test', ['var1' => '1', 'var2' => '2']); 
} 
}*/


/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
public function show() 
{  
return view('test.test', ['name' => 'Slava', 'surname' => 'B']); 
} 
}*/
 


/*namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class TestController extends Controller 
{ 
public function show() 
{ */

/*return view('test.test', ['name' => 'Slava', 'age' => '18', 'salary' => '1000', 'var' => 'color:green']);*/
/*return view('test.test', ['arr' => [1, 2]]);*/
/*return view('test.test', ['arr'=> ['name'=>'Slava', 'age' => '18', 'salary' => '1000']]);*/
/*return view ('test.test',  ['city'=> 'Omsk']);*/
/*return view ('test.test',  ['age'=> date("1")]);*/
/*return view ('test.test', ['arr' => [[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,

		],
	]
]);*/

namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request; // подключаем класс Request

	class TestController extends Controller
	{
		public function show(Request $request) // выполняем инъекцию
		{
			$request->session()->put('key', 'value');
			$value = $request->session()->get('key');
		}
	}

?>







