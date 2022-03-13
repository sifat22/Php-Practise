<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- question 1:leapyear-->
    
<?php   
    echo "<p><strong>Question 1 :</strong> Write a program to check whether a year is a leap year or not.</p>";
    $year = 2011;
    if(($year % 400 == 0) || (($year % 100 == 0) && ($year % 4 == 0))){

        echo "Sample Input : $year"."<br>";
        echo "Sample Output : Leap Year"; 

    } else{
        echo "Sample Input : $year"."<br>";
        echo "Sample Output : Not Leap Year"; 

    } 


    echo "<br><br><br><br>";
    ?>  

<!--week number-->
<?php 

    echo "<p><strong>Question 2 :</strong> Write a program to input week numbers and print week day.</p>";
    
    $weeknumber =4;
              
        if((1 <= $weeknumber) && ($weeknumber<=7)){
            if($weeknumber==1){ 
                echo "Sample Input : $weeknumber"."<br>";
                echo "Sample Output : Sunday"; 

            }
            else if($weeknumber==2){ 
                echo "Sample Input : $weeknumber"."<br>";
                echo "Sample Output : Monday";
            }
            else if($weeknumber==3){ 
                echo "Sample Input : $weeknumber"."<br>";
                echo "Sample Output : Tuesday";
            }
            else if($weeknumber==4){ 
                echo "Sample Input : $weeknumber"."<br>";
                echo "Sample Output : Wednesday";
            }
            else if($weeknumber==5){ 
                echo "Sample Input : $weeknumber"."<br>";
                echo "Sample Output : Thursday";
            }
            else if($weeknumber==6){ 
                echo "Sample Input : $weeknumber"."<br>";
                echo "Sample Output : Friday";
            }
            else if($weeknumber==7){ 
                echo "Sample Input : $weeknumber"."<br>";
                echo "Sample Output : Saturday";
            }
        }
        else{
            echo "Please enter the valid nuber of the day";
        }  
      
        echo "<br><br><br><br>";
    
    
    ?>



<!--note problem-->
<?php   
 
    echo "<p><strong>Question 3 :</strong> Write a program to count the total number of notes in a given amount.</p>";

    $amount = 575;   
  
     $amount1 = $amount;
     $notes = array(500, 100, 50, 20, 10, 5, 2, 1);
     $noteCounts =array(0, 0, 0, 0, 0, 0, 0, 0,0);
     for ($i = 0; $i < 8; $i++){         
         if ($amount >= $notes[$i]){
                 $noteCounts[$i] = intval($amount / $notes[$i]);
                 $amount = $amount - $noteCounts[$i] * $notes[$i];
             }
         }
         echo "Sample Input : ".$amount1."<br>"; 
         echo "Sample Output : <br>";

         echo ("Total Number of Notes :"."<br>"); 

         for ($i = 0; $i < 8; $i++)
         {

             echo ($notes[$i] . " : " .$noteCounts[$i]."<br>" );

         }
        
         echo "<br><br><br><br>";

?> 

    <!--loss profit-->

    <?php   

    echo "<p><strong>Question 4 :</strong> Write a program to calculate profit or loss.</p>";

 
   
      $buy = 1000;
        $sell = 1500;;
         
            if($buy > $sell){

                $loss = ($buy - $sell);
                echo "Input Cost Price : ".$buy."<br>";
                echo "Input Selling Price : ".$sell."<br>";
                echo "Loss : $loss"."<br>";
    
                
            }
            else if($buy < $sell){
    
                $profit = ($sell - $buy);
                echo "Input Cost Price : ".$buy."<br>";
                echo "Input Selling Price : ".$sell."<br>";
                echo "Profit : $profit"."<br>";
    
            }
            else{
                echo " You have no loss or Profit";
            }
             
            echo "<br><br><br><br>";
    
?>  

<!--lowercase and uppercase-->
<?php   
 
    echo "<p><strong>Question 5 :</strong> Write a program to check whether a character is uppercase or lowercase alphabet.</p>";
   

        $character = 'C';   
        if($character === strtoupper($character)) {
            echo "Sample Input : ".$character."<br>";
            echo "Sample Output: ".$character. " is a Uppercase Letter <br>";
        }
        else if($character === strtolower($character)) {
            echo "Sample Input : ".$character."<br>";
            echo "Sample Output: ".$character."is a Lowercase Letter <br>";
        }

        echo "<br><br><br><br>";
       
?>  

<!--maximum between two-->
<?php   


    echo "<p><strong>Question 6 :</strong> Write a program to find the maximum between two numbers using a switch case.</p>";
 
   

        $num1 = 40;  
        $num2 = 30; 
        
            switch($num1 > $num2)
            {   
                case 0: 
                    echo $num1." is Minimum<br>"; 
                    echo $num2." is Maximum<br>"; 
                    break;
            
            
                case 1: 
                    echo $num1." is Maximum<br>"; 
                    echo $num2." is Minimum<br>"; 
                    break;
            
                default: 
                    echo "Number is equal";
            }

            echo "<br><br><br><br>";
            
        
?>  

<!--odd even-->

<?php 

    echo "<p><strong>Question 7 :</strong> Write a program to print all even numbers between 1 to 100. - using while loop.</p>";

    $i = 0;
    while ($i <100){

        $i +=2;
        
        echo $i."<br>";
    
}

echo "<br><br><br><br>";


?>

<!--parent-->
<?php

    echo "<p><strong>Question 8 :</strong> Create an array which contains 1-100 numbers & print it. From Parent Array print even & odd number array bottom of parent array. Use array & loop</p>";

    $parArray = array();
    $oddArray = array();
    $evenArray = array();
    
    
    for($i=1; $i<=100; $i++) {
    
        $parrentArray[] = $i;
    
    }
    print_r( $parArray);
    echo "<br><br><br><br>";
    
    
    foreach ($parrentArray as $val){
        if($val%2== 0){
            $evenArray[] = $val;
        }
        else{
            $oddArray[] = $val;
        }
    }
    echo "Even :";
    print_r($evenArray);
    echo "<br><br><br><br>";
    
    
    echo "Odd :";
    print_r($oddArray);
    
    echo "<br><br><br><br>";



?>

<!--prime-->
<?php   
 
        echo "<p><strong>Question 9 :</strong> Write a programme which returns a number is prime or not.</p>";

        $checkprime=0;
        $number = 7;   
 
            if ($number == 0 || $number == 1)
                $checkprime = 1;

            for ($i = 2; $i <= $number / 2; ++$i) {
                if ($number % $i == 0) {
                    $checkprime = 1;
                    break;
                }
            }
            if ($checkprime == 0){
                echo "Sample Input : ".$number."<br>"; 
                echo "Sample Output :".$number. " is a prime number <br>";

                
    
            }
            else{
                echo "Sample Input : ".$number."<br>"; 
                echo "Sample Output :".$number. " is not a prime number <br>";
            }
          
?>  


<!--reverse string-->


<?php   
 
        echo "<p><strong>Question 10 :</strong> Write a programme which return the reverse string.</p>";

    
        
        function reverse_string($str){
            
            $len = strlen($str);

            if($len == 1)
            {
                return $str;
            }

            else
            {
                $len--;
                return reverse_string(substr($str,1, $len)).substr($str, 0, 1);
            }
        }
        $str ='Sifat';
        echo "Sample Inputs : " . $str."<br>";
        echo "Sample Output :".(reverse_string($str));   


        
          
      
          
?>  
</body>
</html>