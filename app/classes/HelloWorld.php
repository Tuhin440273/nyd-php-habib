<?php
namespace App\classes;  // ভার্চুয়াল ডিরেক্টরি (namespace)

class HelloWorld // ক্লাসের নাম এবং ফাইলের নাম এক রাখাই ভালো
{
    public $message, $fastNumber, $secinNumber, $thardNumber; // প্রপার্টি ডিক্লেয়ার করা

    public function __construct() 
    {
        $this->message = "Hello World !";  // প্রপার্টি ব্যবহার করা
        $this->fastNumber = 10;
        $this->secinNumber = 20;
    }

    public function tuhin() 
    {
        /*
        Arithhmatic oprater: +, -, *, /, %, ++, --, (-)
        Assignment Operator: =, +=, -=, *=, /=, %=
        Conditional Operator: >, >=, <, <=, ==, !=, ===, !==
        Logical Operator: &&, ||, !
        */

        // echo $this->fastNumber + $this->secinNumber;  // যোগ
        // echo $this->fastNumber - $this->secinNumber;  // বিয়োগ
        // echo $this->fastNumber * $this->secinNumber;  // গুণ
        // echo $this->fastNumber / $this->secinNumber;  // ভাগ
        // echo $this->fastNumber % $this->secinNumber;  // ভাগশেষ
        // echo $this->fastNumber ** $this->secinNumber; // ঘাত (power)

        // echo $this->fastNumber > $this->secinNumber;   // true = 1
        // echo $this->fastNumber < $this->secinNumber;   // false = ''
        // echo $this->fastNumber && $this->secinNumber;  // true = 1
        // echo $this->fastNumber != $this->secinNumber;  // true = 1

        // echo '<br>';
        // echo $this->fastNumber += $this->secinNumber;
        // echo '<br>';
        // echo $this->fastNumber -= $this->secinNumber;
        // echo '<br>';
        // echo $this->fastNumber *= $this->secinNumber;
        // echo '<br>';
        // echo $this->fastNumber /= $this->secinNumber;
        // echo '<br>'; 
        // echo $this->fastNumber %= $this->secinNumber; 
        // echo '<br>'; 
        // echo $this->fastNumber .= $this->secinNumber;
        // echo '<br>'; 
        // echo $this->fastNumber > $this->secinNumber;
        // echo '<br>'; 
        // echo $this->fastNumber < $this->secinNumber;
        // echo '<br>'; 
        // echo $this->fastNumber <= $this->secinNumber;
        // echo '<br>'; 
        // echo $this->fastNumber >= $this->secinNumber;
        // echo '<br>'; 
        // echo $this->fastNumber && $this->secinNumber;
        // echo '<br>'; 
        // echo $this->fastNumber != $this->secinNumber;

        // $this->fastNumber  = -30;
        // echo $this->fastNumber; 

        $this->fastNumber = 10;
        $this->secinNumber = 20;
        $this->thardNumber = $this->fastNumber + $this->secinNumber;

        // switch statement
        switch ($this->fastNumber)
        {
            case 10:
                echo "Hello PHP<br>";
                break;

            case 20:
                echo "Hello Laravel<br>";
                break;

            case 30:
                echo "Hello HTML<br>";
                break;

            default:
                echo "Hello Default<br>";
        }
    }
}

// অবজেক্ট তৈরি করে কল করা
$obj = new HelloWorld();
$obj->tuhin();
