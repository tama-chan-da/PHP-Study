<?php
class User
{

    // ↓フィールド============================
    private $id;
    private $name;
    private $age;
    private $address;
    // ↑フィールド============================

    // コンストラクタ
    function __construct($id, $name, $age, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    // idを取得
    function getId()
    {
        return $this->id;
    }

    // 名前を変更
    function setName($name)
    {
        $this->name = $name;
    }

    // 名前を取得
    function getName()
    {
        return $this->name;
    }

    // 年齢を変更
    function setAge($age)
    {
        $this->age = $age;
    }

    // 年齢を取得
    function getAge()
    {
        return $this->age;
    }

    // 住所を取得
    function getaddress()
    {
        return $this->address;
    }

    // 問題2
    function getOlder()
    {
        if ($this->age < 99) {
            $this->age++;
        }
        $this->age++;
    }
}
