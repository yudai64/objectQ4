<?php
  class Car {
    protected $name = "";
    protected $price = "";
    protected $capacity = "";
    protected $acceleration = "";
    protected $defective_acceleration = "";
    protected $crew = "";

    //アクセルを踏んでる間は最高速度に到達しない範囲で加速する。
    function StepOnAccelerator () {
      
    }

    //乗車人数から加速度を計算して表示する。
    function CalculateAcceleration() {

      //定員数と元の加速度を表示する
      if ($this->defective_acceleration == "") {
        //欠落がないとき
        //トヨタの車の場合、値段から加速度が決まることを表示
        if ($this->name == "トヨタ") {
          echo $this->name . "の定員数は" . $this->capacity . "人です。</br>" .$this->name . "は価格に比例して加速度が決まります。(1人乗車時)</br>
          今回の" . $this->name . "の価格は" . $this->price . "万円です。そのため加速度は" . $this->acceleration . "m/s²です。</br>";
        } else {
          //それ以外の車の場合
          echo $this->name . "の定員数は" . $this->capacity . "人です。</br>1人で乗車した時の加速度は" . $this->acceleration . "m/s²です。</br>";
        }
        
      } else {
        //欠落があるとき
        if ($this->name == "トヨタ") {
          echo $this->name . "は価格に比例して加速度が決まります。(1人乗車時)</br>
          今回の" . $this->name . "の価格は" . $this->price . "万円です。そのときの加速度は" . $this->acceleration . "m/s²です。</br>
          しかし今回トヨタの車は生産時に欠落が発見されたので加速度が本来の60%しかでません。加速度は" . $this->defective_acceleration . "m/s²です。";
        } else {
          echo $this->name . "の定員数は" . $this->capacity . "人です。</br>
        1人で乗車した時の加速度は" . $this->defective_acceleration . "m/s²です。(" . $this->name ."の車は生産時に欠陥が発見されました。そのため本来の60%しか加速度がでません。)</br>";
        }
      }


      //乗車人数とそれに応じた加速度を計算して表示する
      if ($this->defective_acceleration == "") {
        //欠落がないとき
        $this->acceleration *= (100-5 * ($this->crew-1)) / 100;
        echo "今回の" . $this->name . "の乗車数は" . $this->crew . "人なので、加速度は" . $this->acceleration . "m/s²です。</br>";
      } else {
        //欠落があるとき
        $this->defective_acceleration *= (100-5 * ($this->crew-1)) / 100;
        echo "今回の" . $this->name . "の乗車数は" . $this->crew . "人なので、加速度は" . $this->defective_acceleration . "m/s²です。</br>";
      }
    }

    function ReturnName() {
      return $this->name;
    }

    function ReturnPrice() {
      return $this->price;
    }

    function ReturnCapacity() {
      return $this->capacity;
    }

    function ReturnAcceleration() {
      return $this->acceleration;
    }

    function ReturnMaxSpeed() {
      return $this->max_speed;
    }

  }

?>