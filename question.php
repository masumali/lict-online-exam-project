<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>result for exam</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/jquery-ui.js"></script>
</head>
<body>
<div class="print1">
<div class="print">
<button onClick="window.print()">Print this page</button></div></div>
<?php
$ip="localhost";
$user="root";
$password="";
$dbname="result";
$con=mysqli_connect($ip,$user,$password,$dbname);
if (!mysqli_connect_error()) {
      echo "";
}else{
      echo "database not coonect";
}
    $opp=$_SESSION['email'];
      $query="SELECT `name` FROM signin WHERE email='$opp'"; 
 $row=mysqli_query($con,$query);
      $op=mysqli_fetch_array($row);
        $sop=$op['name'] ;
if (isset($_POST['submit'])) {
            $answer1=$_POST['question-1-answers'];
            $answer2=$_POST['question-2-answers'];
            $answer3=$_POST['question-3-answers'];
            $answer4=$_POST['question-4-answers'];
            $answer5=$_POST['question-5-answers'];
            $count=0;
         if ($answer1=="D") {
             $GLOBALS['$count']=1;
         }else{
            $GLOBALS['$count']=0;
         }

         if ($answer2=="D") {
               $GLOBALS['$count1']=1;
         }else{

             $GLOBALS['$count1']=0;

         }
         if ($answer3=="C") {
               $GLOBALS['$count2']=1;
            
         }else{
            $GLOBALS['$count2']=0;

         }
         if ($answer4=="B") {
              $GLOBALS['$count3']=1;
            
         }else{
            $GLOBALS['$count3']=0;

         }
         if ($answer5=="C") {
              $GLOBALS['$count4']=1;
           
         }else{
             $GLOBALS['$count4']=0;

         }

          $num=$GLOBALS['$count']+ $GLOBALS['$count1']+ $GLOBALS['$count2']+ $GLOBALS['$count3']+ $GLOBALS['$count4'];
          $makr=5;
            echo "<table>";
                  echo "<tr>";
                        echo "<th>name</th>";
                        echo "<th>Marks obtained</th>";
                        echo "<th>Total marks</th>";
                  echo "</tr>";


                      echo "<tr>";
                        echo "<td>$sop</td>";
                        echo "<td>$num</td>";
                        echo "<td>$makr</td>";
                  echo "</tr>";
                           

            echo "</table>";


      }
 
?>

</body>
</html>
