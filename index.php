<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 

        // ------ Exercise 1 ---------
        // for($i=0; $i <= 49 ; $i++){
        //     echo "Tim" . "<br>" ;
        // }

        // echo "<hr>";

        // $z = 0;
        // while($z <= 49){
        //     echo "Haselsteiner" . "<br>";
        //     $z++;
        // }

        // echo "<hr>";

        // $y = 0;
        // do{
        //     echo "Tim Haselsteiner" . "<br>";
        //     $y++;
        // } while ($y <= 49);

        //------- Exercise 2 -------

        // $arr = array (0,1,2,3,4,5,6,7,8,9); # []

        // foreach($arr as $key => $val){
        //     echo "The Index of the element is " . $key . "and the value is " . $val . "<br>";
        // }

        //-------- Exercise 3 --------

        // $arr = array (876,212,24,644,123323,47869);

        // $arr = array ();

        // for ($a=0; $a < 11 ; $a++) { 
        //     array_push($arr, rand(0, 100));
        // }

        // var_dump($arr);
        // echo "<br> The highest number of the array is: " .  max($arr);

        // ------- Exercise 4 -------

        foreach (range(1, 100) as $number) {
            if(0 !== $number % 3 && 0 !== $number % 5) {
                echo $number.'<br>';
                continue;
            }
        
            if(0 === $number % 3) {
                echo 'Backend';
            }
        
            if(0 === $number % 5) {
                echo 'Frontend';
            }

            if(0 === $number % 3 && 0 === $number % 5) {
                echo 'Fullstack';
            }


        
            echo '<br>';
        }
 
        


        ?>
</body>
</html>