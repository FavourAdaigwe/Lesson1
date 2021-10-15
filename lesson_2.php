


<?php

    session_start();

    class Calculate{

        private $firstNumber;
        private $secondNumber;

        function __construct(){

            $this->firstNumber = rand(1, 50);
            $this->secondNumber = rand(1, 50);

        }

        function setFirstNumber($num){
            $this->firstNumber = $num;
        }

        function setSecondNumber($num){
            $this->secondNumber = $num;
        }

        function getFirstNumber(){
            return $this->firstNumber;
        }
        function getSecondNumber(){
            return $this->secondNumber;
        }

        function add(){
            return $this->firstNumber + $this->secondNumber;
        }

        function subtract(){
            return $this->firstNumber - $this->secondNumber;
        }
 

    }

    $question = new Calculate();

    echo "{$question->getFirstNumber()} + {$question->getSecondNumber()} = ";

    $_SESSION['first'] = $question->getFirstNumber();

    $_SESSION['second'] = $question->getSecondNumber();

    $_SESSION['answer'] = $question->add();


?>

<form action="lesson_3.php" method="post">

    <input name ="answer" type = "text"/><br>

    <button type = "submit"> Check </button>
</form>
