<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Page extends Controller { 

public function showOne($id=0){
{return ''.$id*$id;} where('id', '[0-9]+');
}

 
public function showAll() { 
return 'Page'; 
}

public function showOne($id=0){
return $id;
}

public function showOne($id){
$pages = 
[ 
1 => 'страница 1', 
2 => 'страница 2', 
3 => 'страница 3', 
4 => 'страница 4', 
5 => 'страница 5', ];

if ($id > 0 and $id < 6)
	return $pages[$id];  
else 
	return 'страницы с таким номером нет!'; 
}

}


//Лаб. 4


