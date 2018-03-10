
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Table using CSS</title>
    <style media="screen">
      h1{
        text-align: center;
        font-family: sans-serif;
      }
      table {
        font-family: sans-serif;
        border-collapse: collapse;
        border-spacing: 0;
        width: 80%;
        border: 1px solid #ddd;
      }
      th, td {
        text-align: left;
        padding: 16px;
      }
      tr:nth-child(even) {
        background-color: #f2f2f2
      }
    </style>
  </head>
  <body>
    <div class="tines">
		<?php
		require_once('db.php');

		$response=mysqli_query($con,"SELECT  `qid`,`question`,`correctans` from ques");


			 $i=1;
			 $right_answer=0;
			 $wrong_answer=0;
			 $unanswered=0;
			 while($result=mysqli_fetch_array($response)){
			       if($result['correctans']==$_POST["$i"]){
				       $right_answer++;
				   }else if($_POST["$i"]==10){
				       $unanswered++;
				   }
				   else{
				       $wrong_answer++;
				   }
				   $i++;
			 }

			 echo "<table>";
echo "<tr>";
echo "<th>marks</th>";
echo "<th>wronganswered</th>";
echo "<th>Unanswered</th>";
echo "</tr>";
echo "<tr>";
echo "<td>$right_answer</td>";
echo "<td>$wrong_answer</td>";
echo "<td>$unanswered</td>";
echo "</tr>";
 echo "</table>";

		?>


</div>
  </body>
</html>
