 <?php

$sentence = array("the", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog");
 

#foreach( $sentence as $value){
#    echo $value . "<br>";
#}

$sentences = true;

foreach($sentence as $element => $value) {
  if($sentences) {
    $sentences = false;
  } else {
    echo "$element => $value\n";
  }
}

 ?>
