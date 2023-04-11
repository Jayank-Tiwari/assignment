<!DOCTYPE html>
<html>
<head>
	<title>Assessment</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
}

h2 {
  text-align: center;
}

form {
  margin: 0 auto;
  max-width: 500px;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
}

p {
  font-size: 18px;
  margin-top: 20px;
  margin-bottom: 10px;
}

label {
  font-size: 16px;
  display: block;
  margin-bottom: 10px;
}

input[type="radio"] {
  margin-right: 10px;
}

input[type="submit"] {
  display: block;
  margin: 20px auto;
  padding: 10px 20px;
  font-size: 18px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

/* Optional: Add media queries to make the form responsive */
@media screen and (max-width: 600px) {
  form {
    max-width: 100%;
    padding: 10px;
  }
  label {
    font-size: 14px;
  }
}

    </style>
</head>
<body>
	<h2>Assessment</h2>
	<form method="post" action="assessment.php">
		<p>1. What is the sum of 2+2?</p>
		<label><input type="radio" name="q1" value="1">4</label><br>
		<label><input type="radio" name="q1" value="0">3</label><br>
		<label><input type="radio" name="q1" value="0">5</label><br><br>

		<p>2. Is PHP a programming language?</p>
		<label><input type="radio" name="q2" value="1">Yes</label><br>
		<label><input type="radio" name="q2" value="0">No</label><br><br>

		<p>3. What is the capital of France?</p>
		<label><input type="radio" name="q3" value="0">London</label><br>
		<label><input type="radio" name="q3" value="0">New York</label><br>
		<label><input type="radio" name="q3" value="1">Paris</label><br><br>

        <p>4. What's 8%3?</p>
		<label><input type="radio" name="q4" value="1">Yes</label><br>
		<label><input type="radio" name="q4" value="0">No</label><br><br>
        
        <p>5. Capital of India?</p>
		<label><input type="radio" name="q5" value="0">West Bengal</label><br><br>
		<label><input type="radio" name="q5" value="0">Maharastra</label><br>
		<label><input type="radio" name="q5" value="1">Delhi</label><br><br>


        <p>6. In which year were the Olympics held in India?</p>
		<label><input type="radio" name="q6" value="1">2010</label><br>
		<label><input type="radio" name="q6" value="0">2011</label><br><br>
		<label><input type="radio" name="q6" value="0">2014</label><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>