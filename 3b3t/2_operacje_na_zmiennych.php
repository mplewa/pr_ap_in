<?php
  //wersja php
  echo PHP_VERSION,'<br>';
  // echo phpinfo();

  $pow= 2 ** 8;
  echo $pow,'<br>'; //

  echo 'a','b','c'; //abc
  echo '<br>';
  echo 'a'.'b'.'c'; //a+b+c => abc

  //operatory bitowe
  //and &, or |, xor ^, not ~, <<, >>

  $x= 0b1010;
  echo "<hr>$x<br>";
  $x = $x << 2; //101000(2) => 8+32=40
  echo "$x<br>";

  $x = $x >> 1; //10100(2) => 4+16=20
  echo "$x<br>";

    //porównanie <=>
    $x = 10;
    $y = 20;
    echo $x <=> $y;
    $result = $x <=> $y;
    echo "$result<br>";

    $x=1;
    $y=1.0;

    if ($x==$y)
    {
      echo 'Zmienne są równe<br>';
    }
      else
      {
        echo 'Zmienne są różne<br>';
      }
echo gettype($x), '<br>'; //integer
echo gettype($y), '<br>'; //double

####################################################################

/*
preinkrementacja ++$x
predekrementacja --$x
postinkrementacja $x++
postdekrementacja $x--
*/

$x=1;
$x=$x++;
echo $x, '<br>'; //1

$x=++$x;
echo $x, '<br>'; //2

$y=$x++;
echo $x, '<br>'; //3
echo $y, '<br>'; //2

$y=++$x*2-1;
echo $x, '<br>'; //4
echo $y, '<br>'; //7

$x=2;
echo $x++; //2
echo ++$x; //4
echo $x; //4

$y=$x++;
echo $y; //4

$y=++$x;
echo $y; //6
echo ++$y; //7

//operatory rzutowania
//bool, int, float, string, array, object, unset

$test='123abc';
$test1=0;
$test2=20;

echo '<hr>Typ danych $test: ', gettype($test);
$x=(int)$test;
echo "<hr>$x<br>";
echo 'Typ danych $x: ', gettype($x);

$x=(bool)$test1;
echo "<hr>$x<br>";
echo 'Typ danych $x: ', gettype($x);

?>
