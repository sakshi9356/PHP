<html>
    <head>
        <title>Sum of numbers</title>
    </head>

    <body>
       <form method="post">
        <input type="number" name="number" id="no">
        <input type="submit"/> 
        </form>

        <?php
        if($_POST)
       { 
     $sum=0;
      $n=$_POST['number'];
      echo "The sum of numbers is $n<br> <br>";

for($i=0; $i<=$n; $i++)
{
    $sum=$sum+$i;
}
echo $sum . "<br>";
}
        ?>
</body>
</html>