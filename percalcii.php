<html>
<head>

</head>
<body>



<form action="percalcii.php" method="post">

<center>

Registration Number: <input type="Number" name="regno" required/><br><br>

Name: <input type="varchar" name="naam" required/><br><br>
Maths: <input type="Number" name="mat" required/><br><br>
Physics: <input type="Number" name="phy" required/><br><br>
Science : <input type="Number" name="sci" required/><br><br>




<button type="submit" onclick="" >Submit</button></center>

</form>

<?php

$con = mysqli_connect('localhost','root','','Studentdetails');

$reg = $_POST['regno'];
$name = $_POST['naam'];
$maths = $_POST['mat'];
$physics = $_POST['phy'];
$science = $_POST['sci'];


$total = $maths + $physics + $science;
$percentage = ($total/300)*100;
$drop = "INSERT INTO Studentinfo(Registration,Maths,Physcis,Science,percentage) VALUES ('$reg','$name','$maths','$physics','$science','$percentage')";

$result = mysqli_query($con,$drop);


echo "Congratulations $name. Your percenatge is $percentage %";

?>

</body>
</html>
