<?php
session_start();
?>
<?php
include 'connect/config.php';
?>
<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['pwd'];
   // $pass = hash('sha512', $password);
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
$encrypted_pass = my_simple_crypt( $password, 'e' );

}
$query = "SELECT * FROM purpleblood WHERE email = '$email' and password = '$encrypted_pass'";
$result = mysqli_query($conn,$query);
if($result)
{ 
	while($row = mysqli_fetch_assoc($result))
	{
		$user = $row['user'];
		$band_name = $row['bandname'];
		$email = $row['email'];
		$image = $row['image'];
		$city = $row['city'];
		$state = $row['state'];
		$feedback = $row['question'];
		$number1 = $row['number1'];
		$number2 = $row['number2'];
		$password = $row['password'];
		$_SESSION['user'] = $user;
		$_SESSION['band_name'] = $band_name;
		$_SESSION['email'] = $email;
		$_SESSION['image'] = $image;
		$_SESSION['city'] = $city;
		$_SESSION['state'] = $state;
		$_SESSION['feedback'] = $feedback;
		$_SESSION['number1'] = $number1;
		$_SESSION['number2'] = $number2;
		$_SESSION['password'] = $password;
		header("location:p.php");
	}
	
}
?>