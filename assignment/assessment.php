<?php
// Start the session
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Define the correct answers
$correct_answers = array("q1" => "1", "q2" => "1", "q3" => "1", "q4" =>"1","q5" =>"1", "q6" =>"1");

// Initialize total questions
$total_questions = count($correct_answers);

$total_correct = 0;

// Check user's answers and store results in an associative array
$results = array();
foreach ($correct_answers as $question => $correct_answer) {
    if (isset($_POST[$question])) {
        $user_answer = mysqli_real_escape_string($conn, $_POST[$question]);
        if ($user_answer == $correct_answer) {
            $total_correct++;
            $result = "Correct";
        } else {
            $result = "Incorrect";
        }
    } else {
        $user_answer = "";
        $result = "Not answered";
    }
    $results[$question] = array("user_answer" => $user_answer, "result" => $result);
}

// Insert the results into the database
$username = mysqli_real_escape_string($conn, $_SESSION['username']);
foreach ($results as $question => $result) {
    $user_answer = $result['user_answer'];
    $correct_answer = mysqli_real_escape_string($conn, $correct_answers[$question]);
    $result = $result['result'];

    $sql = "INSERT INTO assessment_results (username, question, user_answer, correct_answer, result)
            VALUES ('$username', '$question', '$user_answer', '$correct_answer', '$result')";

    if (mysqli_query($conn, $sql)) {
        // echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Display the results and the correct answers in the same questionnaire
echo '<h2>Assessment Results</h2>';
echo '<form>';
foreach ($correct_answers as $question => $correct_answer) {
    echo '<p>' . ucfirst($question) . '. ' . $question . '</p>';
    foreach (array("1" => "4", "2" => "3", "3" => "5", "4" => "6", "5" => "2", "6" => "1") as $option_value => $option_text) {
        if ($option_value == $results[$question]['user_answer']) {
            $checked = 'checked';
        } else {
            $checked = '';
        }
        echo '<label><input type="radio" name="' . $question . '" value="' . $option_value . '" ' . $checked . ' disabled>' . $option_text . '</label><br>';
    }
    echo '<p>Your answer: ' . $results[$question]['user_answer'] . '</p>';
    echo '<p>Correct answer: ' . $correct_answer . '</p>';
    echo '<p>Result: ' . $results[$question]['result'] . '</p>';
}
echo '</form>';

// Display total score
$score = $total_correct / $total_questions * 100;
echo "Total Score: $total_correct / $total_questions = $score%";

// Close the database connection
mysqli_close($conn);

?>
