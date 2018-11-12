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

/*Route::get('/', function () {
    $todosNoDatubazes = \App\Todo::orderBy('updated_at', 'asc')->get();   //var arī \App\Todo::all();
    


    return view('todo', [
    'todos' => $todosNoDatubazes,
    ]);
});

/*Route::post('/', function () {
 dd( \Request('note'));
});*/

/*Route::any('addnew', function () {
    $jaunsTodo = new \App\Todo;
    $jaunsTodo->title = \Request('note');
    $jaunsTodo->body = 'Some default body';
    $jaunsTodo->is_done=false;
    $jaunsTodo->save();
   
    return redirect('/');
   });

/*Route::get('/about/{id?}', function ($id) {  //dinamiskais route // par to visu 07.11.2018 no 17:35 apskat ~10 min
    $title='Home Page'.$id;
    return view('welcome2'[
        'pageTitle' => $title,
    ]);
});

Route::get('/delete/{id}', function($id){

    $todo = \App\Todo::find($id);
    if($todo !=null){
    $todo->delete();
    };
    return redirect('/');

});


Route::get('/update/{id}', function($id){
    $todo = \App\Todo::find($id);
    if($todo->is_done == true){
        $todo->is_done = false;
    }else{
        $todo->is_done=true;
    }
    $todo->save();

    return redirect('/');
});


Route::get('/item/{id}', function($id){
    $todo = \App\Todo::find($id);
    
    if ($todo != null) {
        return view('todo_item', [
            'todo_item' => $todo,
        ]);
    }
    
});

Route::get('/blog', function () {
    return 'Blog';
});
*/

Route::get('/', function(){
    return view('mySite');
});

Route::get('/site2', function () {
    $blogiNoDB = \App\Blog::orderBy('updated_at', 'asc')->get();   //var arī \App\Todo::all();
    


    return view('blog', [
    'blogs' => $blogiNoDB,
    ]);
});

Route::any('addnew', function () {
    $jaunsBlog = new \App\Blog;
    $jaunsBlog->title = \Request('note2');
    $jaunsBlog->body = \Request('note');
    $jaunsBlog->save();
   
    return redirect('/site2');
   });

   Route::get('/delete/{id}', function($id){

    $blog = \App\Blog::find($id);
    if($blog!=null){
    $blog->delete();
    };
    return redirect('/site2');

});

Route::get('/site3', function () {
    return view('mySite3');
});

