<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
function test_input($data){
    $data = trim($data);
    $data=stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$arrGender=array(
    1=>"Male",
    2=>"Female",
    3=>"Other"
);
      


$first_name =test_input( $_POST["first-name"]);
$last_name =test_input( $_POST["last-name"]);
$email = test_input($_POST["email"]);
$gender =$arrGender[test_input($_POST["gender"])];
$feedback =test_input($_POST["feedback"]);
?>
    <h1>Thank you for your feedback</h1>
    <h2>Your feedback:</h2>
    <div>
    <?php
    echo $feedback;
    ?>
    </div>
<a href="./index.html">Home</a>
</body>
</html>

