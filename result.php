<?php
if(!empty($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $abys=$_POST['message'];
    $course=$_POST['cs'];
    $servername = "localhost";
    $username = "parth";
    $password = "61673";
    $db="demo";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    $query ="SELECT * FROM tutor where Course=".$course.";";
    
    $result = $conn->query($query); 
    $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
<form class="p-3 p-xl-4" method="post" action="final.php" >
<div>
                <select name="tu" class="formbold-form-input" >
                    <option>Select Tutor</option>
                    <?php 
                    foreach ($options as $option) {
                    ?>
                      <option name="course" value="<?php echo $option['Name']; ?>"> <?php echo $option['Name'];?>:<?php echo $option['Description']; ?></option>
                    <?php 
                      }
                    ?>
                  </select>
                </div>
                <div><button class="btn btn-primary d-block w-100" type="submit" value="submit" name="submit">Submit</button></div>
    </form>
</body>
