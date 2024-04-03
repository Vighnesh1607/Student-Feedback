<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Form</title>
<link rel="stylesheet" href="studentsignup.css">
</head>
<body>

<h2> Fill this student feedback form so that we can make our teaching better</h2>

<div class="form-container"> <!-- Wrap the form content within a div with class form-container -->
    <form action=" " method="post">

<label for="firstname">First Name:</label><br>
    <input type="text" id="firstname" name="firstname" required><br><br>

    <label for="lastname">Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" required><br><br>

    <label for="course">Course:</label><br>
    <select id="course" name="course">
        <option value="CSE">Computer Science and Engineering (CSE)</option>
        <option value="AIML">Artificial Intelligence and Machine Learning (AIML)</option>
        <option value="AIDS">Artificial Intelligence and Data Science (AIDS)</option>
        <option value="IT">Information Technology (IT)</option>
    </select><br><br>

    <label for="rollno">Roll Number:</label><br>
    <input type="text" id="rollno" name="rollno" required><br><br>

   
          <!-- Question 1 -->
          <h4>
            1) Has the Teacher covered entire Syllabus as prescribed by
            University?
          </h4>
          <label>
            <input type="radio" id="ques-1-5" name="ques1" value="5" require/>
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques-1-4" name="ques1" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques-1-3" name="ques1" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques-1-2" name="ques1" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques-1-1" name="ques1" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 2 -->
          <h4>2) Effectiveness of Teacher in terms of:</h4>
          <!-- Question 2-i -->
          <h4>i. Technical Content</h4>
          <label>
            <input type="radio" id="ques-2i-5" name="ques-2i" value="5" require/>
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques-2i-4" name="ques-2i" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques-2i-3" name="ques-2i" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques-2i-2" name="ques-2i" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques-2i-1" name="ques-2i" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 3 -->
          <h4>3) How do you rate the contents of the curricular?</h4>
          <label>
            <input type="radio" id="ques3-5" name="ques3" value="5" require />
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques3-4" name="ques3" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques3-3" name="ques3" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques3-2" name="ques3" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques3-1" name="ques3" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 4 -->
          <h4>4) How do you rate lab experiments, if applicable?</h4>
          <label>
            <input type="radio" id="ques4-5" name="ques4" value="5" require/>
            5- Excellent
          </label>
          <label>
            <input type="radio" id="ques4-4" name="ques4" value="4" />
            4- Very Good
          </label>
          <label>
            <input type="radio" id="ques4-3" name="ques4" value="3" />
            3- Good
          </label>
          <label>
            <input type="radio" id="ques4-2" name="ques4" value="2" />
            2- Average
          </label>
          <label>
            <input type="radio" id="ques4-1" name="ques4" value="1" />
            1- Below Average
          </label>
          <br /><br />
          <!-- Question 5 -->
          <h4>5) Any Remarks</h4>
          <textarea name="remarks" rows="5" require></textarea>
          <br /><br />
        
   

   

    <input type="submit" value="submit" name="submit" ><br><br>
    <br /><br />
    <br /><br />
     
    Thank you for giving Review

</form>

<?php

include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit']))
    {
        $fname   = $_POST['firstname'];
        $lname   = $_POST['lastname'];
        $course  = $_POST['course'];
        $rollno  = $_POST['rollno'];
        
        // Check if the keys exist in $_POST before accessing them
        $Q1      = isset($_POST['ques1']) ? $_POST['ques1'] : '';
        $Q2      = isset($_POST['ques-2i']) ? $_POST['ques-2i'] : '';
        $Q3      = isset($_POST['ques3']) ? $_POST['ques3'] : '';
        $Q4      = isset($_POST['ques4']) ? $_POST['ques4'] : '';
        $Q5      = isset($_POST['remarks']) ? $_POST['remarks'] : '';

        if($fname != "" && $lname != "" && $course != "" && $Q1 != "" && $Q2 != ""
        && $Q3 != "" && $Q4 != "" && $Q5 != ""){

        $query = "Insert into student values('$fname','$lname',
               '$course','$rollno','$Q1','$Q2','$Q3','$Q4','$Q5')";
               // Make sure to properly enclose variables in single quotes if they are strings
        $data  = mysqli_query($conn,$query);

        if($data)
        {
            echo "<script>alert('Data inserted successfully');</script>";
        }
        else{
            echo "<script>alert('Failed');</script>";
        }
    }
    echo "<script>alert('Please fill the field');</script>";
}
}

?>


</body>
</html>
