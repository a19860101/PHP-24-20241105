<?php
    //物件導向程式設計

    // 類別 
    // 屬性
    // 方法

    class Human {
        // 屬性
        public $skin = 'yellow';
        public $gender = 'unknown';
        public $eye_color;
        public $hair_color;
        public $name = 'anounmous';

        // 方法
        function walk(){
            // return $this->name.' walk';
            return "{$this->name} walk!!!";
        }
        function run(){
            return $this->name.' run';
        }
        function jump(){
            return $this->name.' jump';
        }
    }

    // 建立實體
    $human1 = new Human;
    $human1->skin = 'yellow';
    $human1->gender = 'Female';
    $human1->eye_color = 'Brown';
    $human1->hair_color = 'Black';
    $human1->name = 'Mary';
    // echo $human1->jump();
    echo $human1->walk();
    print_r($human1);

    $human2 = new Human;
    $human2->name = 'Micheal';
    print_r($human2);
    echo $human2->jump();


