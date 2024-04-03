<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <link rel="stylesheet" href="dispdata.css">
</head>
<body>
    
<?php
include 'Connection.php';

$query = "select * from student";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total != 0)
{
?>

<h2 align="center"> <mark>Display Feedback</mark></h2>
<table align="center" border="3" cellspacing="7"><tr>
    <th width="10%">First name</th>
    <th width="10%">Last name</th>
    <th width="10%">Course</th>
    <th width="10%">Roll No</th>
    <th width="10%">Q.1</th>
    <th width="10%">Q.2</th>
    <th width="10%">Q.3</th>
    <th width="10%">Q.4</th>
    <th width="20%">Q.5</th>
</tr>

<?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo  "<tr>
                 <td>".$result['fname']."</td>
                 <td>".$result['lname']."</td>
                 <td>".$result['course']."</td>
                 <td>".$result['rollno']."</td>
                 <td>".$result['Q1']."</td>
                 <td>".$result['Q2']."</td>
                 <td>".$result['Q3']."</td>
                 <td>".$result['Q4']."</td>
                 <td>".$result['Q5']."</td>
              </tr> ";
    }
}
else{
    echo "No records found";
}


?>
</table><br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<a href="logout.php">
<input type="submit" value="logout" name="logout"><br><br></a>
</body>
</html>

