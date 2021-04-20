<?php
 

  require_once('Libro.php');

  class LibroController extends Controller {

   public function index() {  
      return view('Libro',
       ['Libros'=>Libro::all(),
        'title'=>'Libros List']);
    }

    public function show($id) {
      $prof = Libro::find($id);
      return view('Libro/show',
        ['Libro'=>$prof,
         'title'=>'Libro Detail']);
    }


  }
?>