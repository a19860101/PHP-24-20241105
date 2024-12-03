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
        // private $hp = 100;
        protected $hp = 100;

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
        function showHP(){
            return $this->hp;
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
    // echo $human1->walk();
    // print_r($human1);
    // echo $human1->hp;
    // echo $human1->showHP();

    $human2 = new Human;
    $human2->name = 'Micheal';
    // print_r($human2);
    // echo $human2->jump();
    echo $human2->run();


    class NPC extends Human{
        public $name = 'npc';
        function showHP(){
            return $this->hp;
        }
    }

    $n1 = new NPC;
    echo $n1->showHP();
    // print_r($n1);
    // echo $n1->jump();


    /* 
        public 可使用在所有地方
        private 只能使用在自己的類別內
        protected 可使用在類別內，包含繼承
    */