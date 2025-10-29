<?php
namespace App\classes;  // ভার্চুয়াল ডিরেক্টরি (namespace)

class HelloWorld // ক্লাসের নাম এবং ফাইলের নাম এক রাখাই ভালো
{
    public $message, $fastNumber, $secinNumber, $thardNumber, $i , $data=[],
    $student=[],$students=[];
    public function __construct() 
    {
        $this->message = "Hello World !";  // প্রপার্টি ব্যবহার করা
        
    }

    public function tuhin() 
    {
        // multiple students
        $students = [
           0 => [
                'name'   => 'Tuhin',
                'email'  => 'tuhin@gmail.com',
                'mobail' => [
                      'parsonl'=>'777777',
                       'gardan' =>'567844',
                    ],
                'address' => 'Dhaka'
            ],
           1 => [
                'name'   => 'Eusha',
                'email'  => 'eusha@gmail.com',
                'mobail' => [
                      'parsonl'=>'777777',
                       'gardan' =>'567844',
                    ],
                'address' => 'Dhaka'
            ],
            2 =>[
                'name'   => 'Nabil',
                'email'  => 'nabil@gmail.com',
                'mobail' => '11223344'
                
            ],
        ];

        include_once "views/home.php";
        // echo '<pre>';
        // var_dump($this->students);

// print_r($this->students);

//         foreach($this->students as $student) {
//     foreach($student as $key => $item) {
//         if(is_array($item)) {
//             // যদি value আবার array হয় (nested array)
//             foreach($item as $key => $valu) {
//                 echo ucfirst($key) . "=" . $valu . " ";
//             }
//             echo "<br/>";
//         } else {
//             echo $item . "<br/>";
//         }
//     }
//     echo "<br/>";
// }

        // foreach($this->students   as $key => $student) 
        //     {
        //     foreach($student as $item) 
        //         {
        //     }if(is_array($item)){
        //         foreach($item as $value){
        //             echo $value.'';
        //         }
        //     }else{
        //         echo $item.'';
        //     }
        //     echo "<br/>";
          
        // }

      
             // $this->student= [ 
        // 'name'   =>'tuhin', 
        // 'email'  =>'tuhin@gmail.om', 
        // 'mobail' =>'12345678'];
        //10 20 30
       
        // Array declare
        // $this->data = [10, 20, 30, 'Thuni', 'shahin', 10.5, true];

        // // Loop through array and print
        // foreach($this->data as $key=>$item) {
        //     echo 'index on:'.$key .'valu is:'.$item."<br/>";
        // }
         
        // $this->i =100;
        // do
        // {
        //     echo "Hello NIYD <br>";
        //     $this->i++;
        // }
        // while ($this->i >=110);


        // $this->i =100;
        // while($this->i >=110){
        //     echo "Hello NIYD <br>";
        //     $this->i++;
        // }

        // for($this->i = 30; $this->i >= 20; $this->i--) {
        //     echo $this->i . "<br/>";
        // }
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

//         $this->fastNumber = 10;
//         $this->secinNumber = 20;
//         $this->thardNumber = $this->fastNumber + $this->secinNumber;

//         // switch statement
//         switch ($this->fastNumber)
//         {
//             case 10:
//                 echo "Hello PHP<br>";
//                 break;

//             case 20:
//                 echo "Hello Laravel<br>";
//                 break;

//             case 30:
//                 echo "Hello HTML<br>";
//                 break;

//             default:
//                 echo "Hello Default<br>";
        }
    }


// অবজেক্ট তৈরি করে কল করা


// $obj = new HelloWorld();
// $obj->tuhin();
