<?php

class Employee{
    public $name;
    private $state='働いている';
    const REGULAR=0x02;//正社員

    public static $company='技術評論社';

    public function getState(){
        return $this->state;
    }
    
    public function setState($state){
         $this->state = $state;
    }

    public function work(){
        echo '書類を整理しています';
    }

    public function getCompany(){
        echo self::$company ;//あくまでクラス内で用いる
    }
}

$yamada=new Employee();

$yamada->name='山田';

$yamada->setState('休憩している');

echo $yamada->name.'さんは'.$yamada->getState();

echo Employee::$company;

$yamada->work();

$yamada->getCompany();

echo Employee::REGULAR

//オブジェクトへの参照を渡している

// $suzuki=$yamada;


//複製したい場合は

// $tanaka=clone $yamada;

?>
