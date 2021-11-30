<?php 
// Task 1
for ($i=10000; $i<=10050; $i++){
    echo "<p>The value is: {$i} </p>";
}
for ($i=10000; $i>=9950; $i--){
    echo"<p> The value is: {$i}</p>";
}
//Task2.1
for ($i=1;$i<=500;$i++){
    if ($i%3==0){
        echo "{$i}<br>";
    }
}
//Task 2.2
for($i=1;$i<=500;$i++){
    if ($i%4==0){
    echo "{$i} <br>";
}
}
//task3
for($i=1;$i<=200;$i=$i+3){
    echo "{$i}<br>";
    if ($i%11==0){
        break;
    }
}
// Task 4.1 
for ($i=1; $i<=10; $i++ ){
    echo " 2 * {$i}=". ($i*2). "<br>";
}
//Task 4.2
for ($i=1; $i<=10; $i++ ){
    echo " 3*{$i}=". ($i*3). "<br>";

}
//Task 4.3
for ($i=1; $i<=10;$i++){
    echo "4*{$i}=".($i*4)."<br>";
}
//Task 4.4
for ($i=1;$i<=10;$i++){
    echo "5*{$i}=".($i*5)."<br>";
}
//Task 5
for ($i=1; $i<=500; $i=$i+6){
    echo "{$i}<br>";
    if ($i%5==0){
        break;
    }
}
?>
