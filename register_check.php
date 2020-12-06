<?php 
include 'connect/config.php';
?>
<?php
//if(isset($_POST['submit']))
//{
	$user =input($conn,$_POST['user']);
	$nam =input($conn,$_POST['name']);
	$emal =input($conn,$_POST['email']);
	$city =input($conn,$_POST['city']);
	$qus =input($conn,$_POST['qus']);
	$pass =input($conn,$_POST['pwd']);
	$num1 =input($conn,$_POST['num1']);
	$num2 =input($conn,$_POST['num2']);
	$state =input($conn,$_POST['state']);
//  $pass = hash('sha512', $pass);
    function my_simple_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }
    return $output;
}
$encrypted_pass = my_simple_crypt( $pass, 'e' );
//  print_r($_FILES);
$f_name= $_FILES['image']['name'];
                $f_loc = $_FILES['image']['tmp_name'];
                $f_size = $_FILES['image']['size'];
                $f_extension = explode('.',$f_name);
                $f_extension = strtolower(end($f_extension));
                $f_newname =input($conn,uniqid().'.'.$f_extension);
                $store  = "Uploads/".$f_newname;
                if($f_extension =='jpg'||$f_extension =='png'||$f_extension =='jpeg'||$f_extension =='gif')
                {
                    if($f_size>=20000000)
                    {
                        header ("location:index.php");

//                        echo "out of limit";
                    }
                    else
                    {
                       if(move_uploaded_file($f_loc,$store))
                          {
                             // echo "sucess";
                          }
                    }
                }
    
//	print_r($_POST);
//	print_r($_FILES);
	
//}
$query= "INSERT INTO purpleblood (user,bandname,email,image,city,state,question,number1,number2,password) VALUES ('$user','$nam','$emal','$f_newname','$city','$state','$qus','$num1','$num2','$encrypted_pass')";
$result= mysqli_query($conn,$query);
if($result){
    echo "You are Register Successfully";
//	$msg = "<script type='text/javascript'>alert('submitted successfully!')</script>";
//  $success = "Message successfully sent";
//	header("location:index.php");

}
?>
<?php
function input($conn,$data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($conn,$data);
  return $data;
}


?>