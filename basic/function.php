<?php
    function foo(){
        return 'hello function';
    }

    function taxin($price){
        return $price * 1.1;
    }

    function jp_tw($price,$exc){
        return $price*$exc;
    }
    function jp_tw2($price,$exc=0.21){
        return $price*$exc;
    }

    echo jp_tw(159800,0.21);
    echo jp_tw2(159800);