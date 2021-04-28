<?php

abstract class Employee{
    private $name;
    private $type;
    private $state='働いている';

    private static $company='技術評論社';
    const REGULAR=0x02;//正社員
    const PARTTIME=0x01;
    const CONTRACT=0x04;

    public function __construct($name,$type){
        $this->name=$name;
        $this->type=$type;
    }

    public function getState(){
        return $this->state;
    }
    
    public function setState($state){
         $this->state = $state;
    }

    public static function getCompany(){//staticメソッドの中ではthisは使えません
        echo self::$company ;//あくまでクラス内で用いる
    }

    public static function setCompany($value){
        self::$company=$value;
    }

    abstract public function work();
}

class Programmer extends Employee{

    public function __construct($name,$type){
        parent::__construct($name,$type);


    }


    public function work(){
        echo 'プログラムを書いています';
    }
}

//オブジェクトへの参照を渡している

// $suzuki=$yamada;


//複製したい場合は

// $tanaka=clone $yamada;

?>
