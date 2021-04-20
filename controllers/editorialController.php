<?php

  require_once('Editorial.php');

  class editorialController extends Controller {

   public function index() {  
      return view('editorial',
       ['editorial'=>Editorial::all(),
        'title'=>'Editoriales List']);
    }

    public function show($id) {

      $prof = Editorial::find($id);
      

      return view('editorial',
        ['editorial'=>$prof,
         'editorial2' =>  $prof['bookstitle']['b'],
         'editorial3' =>  $prof['bookstitle']['a']
         ]);
    }
  }
?>