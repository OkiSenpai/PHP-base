<?php

$temperature = 190;
if($temperature >-100 &&  $temperature <=0){
    echo "eau est solide";

}elseif($temperature > 0 && $temperature <= 99){
  echo "eau est liquide";
}else{
  echo "eau est gazeuse ";
}

?>