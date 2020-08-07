<?php

  class abc{
      public $name = 'Rohit';
      public $profile = 'PHP Developer';

      public function __sleep(){
          return array("name");
      }
  }

$obj = new abc;
$text = serialize($obj);
echo $text;

?>
