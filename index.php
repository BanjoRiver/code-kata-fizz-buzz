<?php

// Do Stuff Here
for ($i=1; $i < 101; $i++) {
    $fizz = $i % 3;
    $buzz = $i % 5;
    $fizzbuzz = $i % 15;
    if($fizzbuzz == 0){
        echo "<p>FizzBuzz</p>";
    }elseif($fizz == 0){
        echo "<p>Fizz</p>";
    }elseif($buzz == 0){
        echo "<p>Buzz</p>";
    }else{
        echo "<p>$i</p>";
    }
}
?>
