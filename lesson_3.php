<?php

    session_start();

    $first = $_SESSION['first'];
    $second = $_SESSION['second'];
    $answer = $_SESSION['answer'];

    // print_r($_POST//)

    if($answer == $_POST['answer']){
        echo "$first + $second = $answer <br><br>";
        echo "Our answer is correct";
    }else{
        echo "$first + $second = {$_POST['answer']} <br><br>";
        echo "Our answer is wrong, the correct answer is <br>";
        echo "$first + $second = $answer <br><br>";

    }
    


?>

<form action="lesson_2.php" method="post">

<button type = "submit"> next </button>
</form>