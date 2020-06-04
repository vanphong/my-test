<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
  //  return view('welcome');
	  $tasks = Task::orderBy('created_at', 'asc')->get();
	  //return view('tasks');
	  return view('tasks',['tasks'=>$tasks]);
});

/**
*Add New Task
*/
Route::post('/task', function (Request $request){
	 
	/* $validatedData = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);*/
/*
$validator = Validator::($request->all(),['name'=>'required|max:255',]);
	if($validator->fails())
	{
		return redirect('/')->withInput()->withErrors($validator);
	}
*/
	$task=new Task;
	$task->name=$request->name;
	$task->memo="Phong Task";
	$task->save();

	return redirect('/');
});

/**
*Delete Task
*/
Route::delete('/task/{task}', function (Task $task) {
        $task->delete();

        return redirect('/');
    });




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/**
*Add New Task
*/
Route::post('/home', function (Request $request){
	 
	/* $validatedData = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);*/
/*
$validator = Validator::($request->all(),['name'=>'required|max:255',]);
	if($validator->fails())
	{
		return redirect('/')->withInput()->withErrors($validator);
	}
*/
	$task=new Task;
	$task->name=$request->name;
	$task->memo="Phong Task";
	$task->save();

	return redirect('/home');
});


/**
*Delete Task
*/
Route::delete('/home/{task}', function (Task $task) {
        $task->delete();

        return redirect('/home');
    });
Route::get('/home', function () {
  //  return view('welcome');
	  $tasks = Task::orderBy('created_at', 'asc')->get();
	  //return view('home');
	  return view('home',['tasks'=>$tasks]);
});
