<?php 
    function sanatize($s) {
        return htmlentities(strip_tags(trim($s)), ENT_QUOTES);
    }
 

    if(isset($_POST['fname']) && !empty($_POST['fname'])) {
        $fname = sanatize($_POST['fname']);
        $flag = true;
    } else { 
        $flag = false;
    }

    if(isset($_POST['lname']) && !empty($_POST['lname'])) {
        $lname = sanatize($_POST['lname']);
        $flag = true;
    } else { 
        $flag = false;
    }

    if(isset($_POST['question1']) && !empty($_POST['question1'])) {
        $question1 = $_POST['question1'];
        $flag = true;
     } else {
        $flag= false;
    }

    
    if(isset($_POST['question2'])) {
        $question2 = $_POST['question2'];
        $flag = true;
    } else {
        $flag = false;
    }

    
    if(isset($_POST['question3'])) {
        $question3 = $_POST['question3'];
        $flag = true;
    } else {
        $flag = false;
    }

    
    if(isset($_POST['question4'])) {
        $question4 = $_POST['question4'];
        $flag = true;
    } else {
      $flag = false;
    }

    
    if(isset($_POST['question5'])) {
        $question5 = $_POST['question5'];
        $flag = true;
    } else {
       $flag = false;
    }

    if(isset($_POST['question6'])) {
        $question6 = $_POST['question6'];
        $flag = true;
    } else {
         $flag = false;
    }

    if(isset($_POST['question7'])) {
        $question7 = $_POST['question7'];
        $flag = true;
    } else {
        $flag = false;
    }

    if(isset($_POST['question8'])) {
        $question8 = $_POST['question8'];
        $flag = true;
    } else {
        $flag = false;
    }

    if(isset($_POST['question9'])) {
        $question9 = $_POST['question9'];
        $flag = true;
    } else {
        $flag = false;
    }


    if(isset($_POST['question10'])) {
        $question10 = $_POST['question10'];
        $flag = true;
    } else {
        $flag = false;
    }
   


    if($flag) {
        echo "";
    } else {
        $flag = false;
    }

    if($flag) {
        $filename = "answers.txt";
    $file = fopen($filename, "r") or exit("Unable to open data file.");
    $myfile = fread($file, filesize($filename));
    fclose($file);
    $answers = preg_split('/[\t \n,]+/', $myfile, -1, PREG_SPLIT_NO_EMPTY);

   

    $count=0;


        if($question1 == $answers[0]) {
            $count++;
        }

        if($question2 == $answers[1]) {
            $count++;
        }

        if($question3 == $answers[2]) {
            $count++;
        }

        if($question4 == $answers[3]) {
            $count++;
        }

        if($question5== $answers[4]) {
            $count++;
        }

        if($question6== $answers[5]) {
            $count++;
        }

        if($question7== $answers[6]) {
            $count++;
        }

        if($question8== $answers[7]) {
            $count++;
        }

        if($question9 == $answers[8]) {
            $count++;
        }

        if($question10== $answers[9]) {
            $count++;
        }


    
    echo "Online Quiz<br>";
    echo "Here are the quiz results for $fname $lname<br>";
    
 
    if($question1 == $answers[0]) {
        echo "<span style='color:green'>1+2=3 $question1</span>";
    } else {
        echo "<span style='color:red'> 1+2=3 $question1</span>";
    }

    echo "<br>";

    if($question2 == $answers[0]) {
        echo "<span style='color:red'>1+4=3 $question2</span>";
    } else {
        echo "<span style='color:green'>1+4=3 $question2</span>";
    }

    echo "<br>";

     if($question3 == $answers[0]) {
        echo "<span style='color:green'>1+7=8 $question3</span>";
    } else {
        echo "<span style='color:red'>1+7=8 $question3</span>";
    }

    echo "<br>";


    if($question4 == $answers[0]) {
        echo "<span style='color:green'>2x3=6 $question4</span>";
    } else {
        echo "<span style='color:red'>2x3=6 $question4</span>";
    }

    echo "<br>";

    if($question5 == $answers[0]) {
        echo "<span style='color:red'>8/4=3 $question5</span>";
    } else {
        echo "<span style='color:green'>8/4=3 $question5</span>";
    }

    echo "<br>";

    if($question6 == '18') {
        echo "<span style='color:green'>9+9= $question6</span>";
    } else {
        echo "<span style='color:red'>9+9= $question6</span>";   
    }

    echo "<br>";

    if($question7 == '45') {
        echo "<span style='color:green'>9+9= $question7</span>";
    } else {
        echo "<span style='color:red'>9+9= $question7</span>";   
    }


    echo "<br>";

    if($question8 == '8') {
        echo "<span style='color:green'>9+9= $question8</span>";
    } else {
        echo "<span style='color:red'>9+9= $question8</span>";   
    }


    echo "<br>";

    if($question9 == 'dog' && $question9 == 'cat') {
        echo "<span style='color:green'>Has Four legs $question9</span>";
    } else {
        echo "<span style='color:red'>Has Four legs $question9</span>";   
    } 
   

    echo "<br>";

    if($question10 == 'vanz' && $question10 == 'nike') {
        echo "<span style='color:green'>Real Brands $question10</span>";
    } else {
        echo "<span style='color:red'>Real Brands $question10</span>";   
    } 

    
   



    




    
    
    
    
    
    
    
    
    echo "<br>scored: $count/10";



    

    } else { ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
</head>
<body>
<h1 style="color:red">Fill out form</h1>
        <form method="POST" action="form.php">
        <div>
        <label for="fname">First Name</label>
        <input type="text" name="fname" value="<?php if(isset($fname)) echo $fname;else echo "" ;?>" 
        style='<?php if(isset($fname)) echo "";else echo "border-color:red'" ;?>'>  
    
        <label for="lname">Last Name</label>
        <input type="text" name="lname" value='<?php if(isset($lname)) echo $lname; else echo "" ?>'
        style='<?php if(isset($fname)) echo "";else echo "border-color:red'" ;?>'>
        </div>

        <div>
    <div>
       <?php if(isset($question1)) echo "1+2=3"; else echo"1+2=3<span style='color:red'>*</span>"?>
       T<input type="radio" name="question1" value="t">
       F<input type="radio" name="question1" value="f">
    </div>
    <div>
        <?php if(isset($question2)) echo "1+4=3"; else echo"1+4=3<span style='color:red'>*</span>"?>
       T<input type="radio" name="question2" value='t'>
       F<input type="radio" name="question2" value='f'>
    </div>
    <div>
      
        <?php if(isset($question3)) echo "1+7=8"; else echo"1+7=8<span style='color:red'>*</span>"?>
       T<input type="radio" name="question3" value='t'>
       F<input type="radio" name="question3" value='f'>
    </div>

    <div>
     
        <?php if(isset($question4)) echo "2x3=6"; else echo"2x3=6<span style='color:red'>*</span>"?>
       T<input type="radio" name="question4" value='t'>
       F<input type="radio" name="question4" value='f'>
    </div>
    <div>
       
        <?php if(isset($question5)) echo "8/4=3"; else echo"8/4=3<span style='color:red'>*</span>"?>
       T<input type="radio" name="question5" value='t'>
       F<input type="radio" name="question5" value='f'>
    </div>
</div>

<div>
    <div>
       
        <?php if(isset($question6)) echo "9+9="; else echo"9+9=<span style='color:red'>*</span>"?>
       18<input type="radio" name="question6" value='18'>
       22<input type="radio" name="question6" value='22'>
       24<input type="radio" name="question6" value='24'>
       12<input type="radio" name="question6" value='12'>
    </div>
    <div>
        
        <?php if(isset($question7)) echo "5x9="; else echo"5x9=<span style='color:red'>*</span>"?>
       5<input type="radio" name="question7" value='5'>
       45<input type="radio" name="question7" value='45'>
       34<input type="radio" name="question7" value='34'>
       23<input type="radio" name="question7" value='23'>
    </div>
    <div>
        
        <?php if(isset($question8)) echo "56/7="; else echo"56/7=<span style='color:red'>*</span>"?>
       34<input type="radio" name="question8" value='f'>
       2<input type="radio" name="question8" value='f'>
       3<input type="radio" name="question8" value='f'>
       8<input type="radio" name="question8" value='t'>
    </div>
  
</div>

<div>
    <div>
      
        <?php if(isset($question9)) echo "Has Four legs"; else echo"Has Four legs<span style='color:red'>*</span>"?>
       Dog<input type="checkbox" name="checkbox1" value='1'>
       Snake<input type="checkbox" name="checkbox1" value='0'>
       Monkey<input type="checkbox" name="checkbox1" value='0'>
       Cat<input type="checkbox" name="checkbox1" value='1'>
    </div>
    <div>
        <?php if(isset($question10)) echo "Real Brands"; else echo"Real Brands<span style='color:red'>*</span>"?>
       Blib<input type="checkbox" name="checkbox2" value='0'>
       Nike<input type="checkbox" name="checkbox2" value='1'>
       Vanz<input type="checkbox" name="checkbox2" value='1'>
       Hoolio<input type="checkbox" name="checkbox2" value='0'>
    </div>
   
  
</div>

<input type="submit" value="submit">
</form>

</body>

<html>

   <?php } ?>




