<?php 
    echo 'hello oop view <br><br>';

    // 我想要一個 apple banana
    
    // 1.變數
    $apple = 'apple';
    $banana = 'banana';

    $apple = "red";
    $banana = 'yellow';

    // echo $apple;


    // 2.陣列
    $appleArr = [
        'name' => 'apple',
        'color' => 'red'
    ];

    // dd($appleArr);

    //3.
    //除了變數外 variable property
    //動作 function method

    // 3.1 class 類別
    class Fruit {
        //Property 變數 屬性 成員變數
        public $name;
        public $color;

        //Method
        public function dropFun(){
            // echo 'apple 掉下來了<br>';
            echo "$this->name 掉下來了<br>";
            
        }
    }

    // 3.2 object 物件
    $appleObj = new Fruit;
    // dd($appleObj); //name color => null

    //O

    // 練習一 
    // $appleObj name apple
    // $appleObj color red

    // $appleObj->name = 'red';
    $appleObj->name = 'apple';
    $appleObj->color = 'red';
    $appleObj->dropFun();
    $appleObj->dropFun();
    $appleObj->dropFun();
    $appleObj->dropFun();


    $bananaObj = new Fruit;
    $bananaObj->name = 'banana';
    $bananaObj->color = 'yellow';
    $bananaObj->dropFun();
    // dd($bananaObj);
    
    // dd($appleObj);




    

?>