<?php
    class Car {
        public $brand;
        public $color;

        function displayDetails (){
            echo "This car is a" . $this->color . "" . $this->brand . ".";
        }
    }

    $myCar = new Car();

    $myCar->brand = "Toyota";
    $myCar-> color = "Red";

    $myCar->displayDetails();
?>