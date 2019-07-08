<?php
namespace phpBasic {
  class Car
  {
    var $color;
    var $doors;
    function __construct($color="green", $doors=5) {
      $this->color = $color;
      $this->doors = $doors;
    }
    function what_color() {
      return $this->color;
    }
  }

  function print_vars($obj) {
   foreach (get_object_vars($obj) as $prop => $val) {
     echo "\t$prop = $val";
   }
   echo "<br>";
  }

  $herbie = new Car("white", 3);

  echo "herbie: Properties";
  echo "<br>";
  print_vars($herbie);

  $cars=array("Volvo","BMW","Toyota");
  $arrlength=count($cars);
   
  for($x=0;$x<$arrlength;$x++)
  {
    echo $cars[$x];
    echo "<br>";
  }

  $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
   
  foreach($age as $x=>$x_value)
  {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

  class test {
    function _print() {
      echo 'Class:'  . __CLASS__ . "<br>";
      echo 'Function:' . __FUNCTION__ . "<br>";
      echo 'Line:' . __LINE__ . "<br>";
    }
  }
  $t = new test();
  $t->_print();

  function strlen($str)
  {
    return \strlen($str);
  }

  echo strlen("Frozen") . "<br>";
  echo 'Namespace:' . __NAMESPACE__ . "<br>";
}

namespace AnotherProject {
  $a = \phpBasic\strlen("Beauty and Beast");
  echo $a . "<br>";
  echo 'Namespace:' . __NAMESPACE__ . "<br>";
}
?>