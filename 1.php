<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
<?php
function sum($i){

    if (5<=$i && $i<=20 || 5<=($i%10) && ($i%10)<=9 || $i==0){
        echo "$i минут"."<br>";
    }
    /*elseif (){
        echo "$i минутов"."<br>";
    }
    */
    elseif (2<=($i%10) && ($i%10)<=4 ){
        echo "$i минуты"."<br>";
    }
    else{
        echo "$i минута"."<br>";
    }
}
for ($i=0; $i<100; $i++){
    sum($i);
}
?>
</h1>
</body>
</html>

