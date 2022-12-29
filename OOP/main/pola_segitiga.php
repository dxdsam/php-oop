<?php
// SEGITIGA SIKU SIKU
/*
Fungsi for yang pertama untuk menentukan nilai dan variabel awal, for yang kedua agar menentukan membuat gambar menjadi segitiga siku-siku dan for yang ketiga untuk menentukan dari mulai angka berapa kita akan membuat segitiga(angka awal). 
*/

for ($i=1; $i<=5; $i++) {
    for ($j=4; $j>=$i; $j--) {
        echo "  ";
    }for ($k=1; $k<=$i; $k++) {
         echo "$k";
    }echo "<br>";
}

echo "<br><br>";

for ($i=1; $i<=5; $i++){
    for ($j=5; $j>=$i; $j--){
        echo $j;
    }echo "<br>";
}

for( $a=10; $a>0; $a--){
    for($i=1; $i<=$a; $i++){
        echo "  ";
    }for($a1=10; $a1>$a; $a1--){
        echo"x";
    }for($a2=11; $a2>$a; $a2--){
        echo"x";
    }echo"<br>";
}

for( $a=9; $a>0; $a--){
    for($i=1; $i<=$a; $i++){
        echo "  ";
    }for($a1=10; $a1>$a; $a1--){
        echo"x";
    }for($a2=9; $a2>$a; $a2--){
        echo"x";
    }echo"<br>";
}for($b=0; $b<=9; $b++){
    for($j=1; $j<=$b; $j++){
        echo"  ";
    }for($b1=10; $b1>$b; $b1--){
        echo"x";
    }for($b2=9; $b2>$b; $b2--){
        echo"x";
    }echo"<br>";
}

// for ($i=5; $i>=1; $i--){
//     for ($j=5; $j>=$i; $j--){
//           echo $j;
//      }echo "<br>";
// }


// for ($i=1; $i<=5; $i++) {
//     for ($j=4; $j>=$i; $j--) {
//          echo "  ";
//      }for ($k=$i; $k>=1; $k--) {
//          echo "$k";
//      }echo "<br>";
// }








?>