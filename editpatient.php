<?php
// including the database connection file
include_once("inc/header.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phoneNo=$_POST['phoneNo']; 
    $address=$_POST['address'];    
    
    // checking empty fields
    if(empty($firstname) || empty($lastname) || empty($phoneNo) || empty($address)) {            
        if(empty($firstname)) {
            echo "<font color='red'>firstname field is empty.</font><br/>";
        }
        
        if(empty($lastname)) {
            echo "<font color='red'>lastname field is empty.</font><br/>";
        }
        
        
        if(empty($phoneNo)) {
            echo "<font color='red'>phoneNo field is empty.</font><br/>";
        }

        if(empty($address)) {
            echo "<font color='red'>address field is empty.</font><br/>";
        }        
    } else {    


        //updating the table
        $result = mysqli_query($mysqli, "UPDATE users SET firstname='$firstname', lastname='$lastname',phoneNo='$phoneNo'  address='$address' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{   

     $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "hospital_management";
    $firstname = $res['firstname'];
    $lastname = $res['lastname'];
    $phoneNo = $res['phoneNo'];
    $address = $res['address'];
}
?>
<html>
<head>    
    <title>Edit Patient</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>FirstName</td>
                <td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
            </tr>
            <tr> 
                <td>LastName</td>
                <td><input type="text" name="lastname" value="<?php echo $lastname;?>"></td>
            </tr>
            <tr> 
                <td>PhoneNo</td>
                <td><input type="text" name="phoneNo" value="<?php echo $phoneNo;?>"></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $address;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>