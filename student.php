<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Features-Image-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
</head>
<?php
$servername = "localhost";
$username = "parth";
$password = "61673";
$db="demo";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
$query ="SELECT coursename FROM courses";

$result = $conn->query($query);
if($result->num_rows> 0){
  $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><img src="assets/img/Mento%20copy.png" width="148" height="85"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Get in touch with a Mentor</h2>
                    <p>Fill out this form to get in touch with a mentor to pave your career towards success</p>
                </div>
            </div>
            <form class="p-3 p-xl-4" method="post">
                <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div>
                <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Course Name"></div>
                <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="About Yourself"></textarea></div>
                <div>
                <select name="courseName" class="formbold-form-input">
                    <option>Select Course</option>
                    <?php 
                    foreach ($options as $option) {
                    ?>
                      <option><?php echo $option['coursename']; ?> </option>
                      <?php 
                      }
                    ?>
                   </select>
                </div>
                <br>
                <br>
                <div><button class="btn btn-primary d-block w-100" type="submit">Submit</button></div>
            </form>
              <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
                * {
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                }
                body {
                  font-family: 'Inter', sans-serif;
                }
                
                .formbold-form-input {
                  width: 100%;
                  padding: 13px 22px;
                  border-radius: 5px;
                  border: 1px solid #dde3ec;
                  background: #ffffff;
                  font-weight: 500;
                  font-size: 16px;
                  color: #536387;
                  outline: none;
                  resize: none;
                }
                .formbold-form-input::placeholder,
                select.formbold-form-input,
                .formbold-form-input[type='date']::-webkit-datetime-edit-text,
                .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
                .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
                .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
                  color: rgba(83, 99, 135, 0.5);
                }
              
                .formbold-form-input:focus {
                  border-color: #6a64f1;
                  box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                }
                .formbold-form-label {
                  color: #07074D;
                  font-weight: 500;
                  font-size: 14px;
                  line-height: 24px;
                  display: block;
                  margin-bottom: 10px;
                }
              
              </style>
                <div></div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>