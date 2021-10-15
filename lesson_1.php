<?php
   




    function cooking($food, $waterQuantity, $heat, $method){

        echo "The $food was prepare with $waterQuantity cups of water on a $heat through $method <br>";

    }

    // cooking("Fried Yam", 10, "stove", "Frying");


    class Cars{

        private  $noOfTyre;
        private  $noOfDoors;
        private  $brand;
        private  $cost;
        private  $booth;
        private  $color;

        function __construct(int $noOfTyre, int $noOfDoors, String $brand, float $cost, String $booth, String $color){

            $this->noOfTyre = $noOfTyre;
            $this->noOfDoors = $noOfDoors;
            $this->brand = $brand;
            $this->cost = $cost;
            $this->booth = $booth;
            $this->color = $color;

        }

        
        function setNoOfTyre($tyre){
            $this->noOfTyre = $tyre;
        }

        function getNoOfTyre(){
            return $this->noOfTyre;
        }

        function setNoOfDoors($doors){
            $this->noOfDoors = $doors;
        }

        function getNoOfDoors(){
            return $this->noOfDoors;
        }

        function setBrand($brand){
            $this->brand = $brand;
        }

        function getBrand(){
            return $this->brand;
        }

        function setCost($cost){
            $this->cost = $cost;
        }

        function getCost(){
            return $this->Cost;
        }

        function setBooth($booth){
            $this->booth = $booth;
        }

        function getBooth(){
            return $this->booth;
        }

        function setColor($color){
            $this->color = $color;
        }

        function getColor(){
            return $this->color;
        }

        function boothState(){
            // if($this->booth == "false")
            //     return "no";

            // return "large";

            return $this->booth == "false" ?  "no":  "large";
        }
    }


    $car1 = new Cars(3, 2, "toyota", 35000, "false", "black");

    echo "The {$car1->getColor()} {$car1->getBrand()} car has  {$car1->getNoOfTyre()} tyres 
        and {$car1->getNoOfDoors()} doors with {$car1->boothState()} booth<br><br>";

        echo rand(1, 50);

    // if ($car1->getBooth() == "false") {

    //     $car1->setBooth("no");

       

    // }else{

    //     $car1->setBooth("large");

    //     echo "The {$car1->getColor()} {$car1->getBrand()} car has  {$car1->getNoOfTyre()} tyres 
    //     and {$car1->getNoOfDoors()} doors with {$car1->getBooth()} booth<br><br>";
    

    // }

    


   

    // echo "<br><br>";

    // $car1->setNoOfTyre(4);
    // echo "<br><br>";
    
    // echo "The car has  {$car1->getNoOfTyre()} tyres <br><br>";

    



    


?>