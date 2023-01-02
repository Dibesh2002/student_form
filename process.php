<?php
if(isset($_POST["submit"])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $book_no = $_POST["book_no"];
    $phone_no = $_POST["phone_no"];
    $place = $_POST["place"];
    $gender = $_POST["gender"];
    if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($book_no) && !empty($phone_no) && !empty($place) && !empty($gender)) {
       $link = mysqli_connect("localhost","root","","registers");
       if($link==false)
       {
        die(mysqli_connect_error());
       }
       $sql = "INSERT INTO library (first_name, last_name, email, book_no, phone_no, place, gender ) VALUES ('$first_name','$last_name','$email','$book_no','$phone_no','$place','$gender')";
       if(mysqli_query($link, $sql))
       {
        echo"Record inserted sucessfully";
       }
       else
       {
        echo"Something went Worng";
       }
       }else {
        echo "Please Provide all Information";
    }
}
?>
