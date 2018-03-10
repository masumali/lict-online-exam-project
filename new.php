<!DOCTYPE html>
<html>
<head>
<title>EXAM SYSTEM MAKING </title>
<link rel="stylesheet" href="css/style.css">
<script src="jquery-1.12.0.min.js"></script>
<script src="js/one.js"></script>
</head>
<body>
<div class="table">
  <div class="res">
  <h2>HERE YOUR QUESTION</h2>
</div>
<div class="valen">
<?php require('db.php');?>

<?php $response=mysqli_query($con,"SELECT * from ques ORDER BY rand()");?>

<form method='post' id='quiz_form' action="ques1.php">
<?php while($result=mysqli_fetch_array($response)){ ?>
<div id="question_<?php echo $result['qid'];?>" class='questions'>
<h2 id="question_<?php echo $result['qid'];?>"><?php echo $result['question'];?></h2>
<div class='align'>
<input type="radio" value="A" id='radio1_<?php echo $result['qid'];?>' name='<?php echo $result['qid'];?>'>
<label id='ans1_<?php echo $result['qid'];?>' for='1'><?php echo $result['ans1'];?></label>
<br/>
<input type="radio" value="B" id='radio2_<?php echo $result['qid'];?>' name='<?php echo $result['qid'];?>'>
<label id='ans2_<?php echo $result['qid'];?>' for='1'><?php echo $result['ans2'];?></label>
<br/>
<input type="radio" value="C" id='radio3_<?php echo $result['qid'];?>' name='<?php echo $result['qid'];?>'>
<label id='ans3_<?php echo $result['qid'];?>' for='1'><?php echo $result['ans3'];?></label>
<br/>
<input type="radio" value="D" id='radio4_<?php echo $result['qid'];?>' name='<?php echo $result['qid'];?>'>
<label id='ans4_<?php echo $result['qid'];?>' for='1'><?php echo $result['ans4'];?></label>
<input type="radio" checked='checked' value="5" style='display:none' id='radio4_<?php echo $result['qid'];?>' name='<?php echo $result['qid'];?>'>
</div>
<br/>
</div>
<?php }?>
<input type="submit" id='' value='submit' name='<?php echo $result['qid'];?>' class='question'/>
</form>
</div>
</div>
</body>
</html>
