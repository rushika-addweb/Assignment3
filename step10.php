<?php
function year($age) {
  return ($age < 21) ? false : true; 
  };


if(year(25)) {
     echo ' you are welcome in club';
 }
else {
    echo 'sorry! you are not allowed in th club  because below 21';
}

?>

