
<?php
// $db_server = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "test";
// $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

$connection=mysqli_connect("localhost","root","","test");
if($connection)
{
    echo "connection successful";
}
else
{
    echo "no connection";
}