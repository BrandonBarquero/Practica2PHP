<?php

  require_once('Author.php');

  class authorController extends Controller {

   public function index() {
      return view('author',
       ['Authors'=>Author::all(),
        'title'=>'Authors List']);
    }

    public function show($id) {
      $prof = Author::find($id);
      return view('author',
        ['author'=>$prof,
        'author2' =>  $prof['bookstitle']['b'],
         'author3' =>  $prof['bookstitle']['a'] 
        ]);
    }
  }
?>