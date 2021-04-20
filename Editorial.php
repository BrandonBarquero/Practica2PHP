<?php
  

class Editorial extends Model {

static $Editoriales = [
    ['id'=>1,'publisher'=>'John Wiley & Sons','country'=>'United States',
     'founded'=>'1807','genere'=>'Academic', 'booksbook_id' => ['a'=>'1','b'=>'2'] ,'bookstitle'=> 
     ['a'=>'Operating System Concepts', 'b'=> 'Database System Concepts']], 

 

       ['id'=>2,'publisher'=>'Pearson Education','country'=>'United Kingdom',
     'founded'=>'1844','genere'=>'Education', 'booksbook_id'=>  ['a'=>'3','b'=>'4'],'bookstitle'=> 
     ['a'=>'Computer Networks', 'b'=> 'Modern Operating Systems']], 




  ];
  public static function all() { 
    return self::$Editoriales; 
  }

  public static function find($id) {
    foreach (self::$Editoriales  as $key => $prof)
      if ($prof['id'] == $id) return $prof;
    return [];
  }
}
?>