<?php
session_start();
?>
<?php
include 'connect/config.php';
?>
    <?php
include 'head.php';
?>
        <?php
include 'navbar.php';
?>
<section id="portfolio" class="section-bg bg-top">
<div class="container bg-blur" >
<header class="section-header">
<h3 class="section-title pb-3">Welcome
<?php echo $_SESSION['user'] ?> </h3>
</header>

<div class="row">
<div class="col-md-12 portfolio-container">
<div class=" row portfolio-item filter-app wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp;height:265px">
<div class=" col-md-4 portfolio-wrap">
              <figure>
                <img src="Uploads/<?php echo $_SESSION['image'] ?>" class="img img-fluid" alt="">
                <a href="Uploads/<?php echo $_SESSION['image'] ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              </figure>
            </div>
<!--
            <div class="profile-header-container">   
                    <div class="profile-header-img">
						<img class="img-circle" src="img/pb.png?sz=120" />
					</div>
    </div>
-->
    
    <div class=" col-md-8 profile-header-container">
<!--
    <div class="profile-header-img">
        <img class="img img-fluid " src="Uploads/<?php echo $_SESSION['image'] ?>" />
    </div>
-->
    <div class="card-body pt-1">
        <h6 class="mb-0 text-center pt-1 pb-1 text-white for-title ">Band Name :
            <?php echo $_SESSION['band_name'] ?><span style="text-transform: uppercase; color:; "> </span></h6>

        <h6 class="text-muted mb-1 mt-2 text-center">Band Master : <span style="text-transform: uppercase;"> <?php echo $_SESSION['user'] ?></span> </h6>
        <hr class="m-1">
        <p class="mb-2 mt-2 text-center">Email :
            <?php echo $_SESSION['email'] ?>
        </p>
        <p class="mb-2 mt-2 text-center">Feedback :
            <?php echo $_SESSION['feedback'] ?>
        </p>
        <div class="for-cont  text-center mt-3">
            <h6 class="mb-2" style="flex:1"><i class="fa fa-phone"> <small> 1 : </small>  <?php echo $_SESSION['number1'] ?></i></h6>
            <h6 class="" style="flex:1"><i class="fa fa-phone"> <small> 2 :  </small> <?php echo $_SESSION['number2'] ?></i></h6>
        </div>
    </div>

</div>
</div>
</div>
<?php
    $password = $_SESSION['password'];
    $email= $_SESSION['email'];
    $query = "SELECT * FROM purpleblood WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$query);
    if ($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            //print_r($row);
            $user_name = $row['user'];
            $band_name = $row['bandname'];
            $email = $row['email'];
            $image = $row['image'];
            $city = $row['city'];
            $state = $row['state'];
            $feedback = $row['question'];
            $number1 = $row['number1'];
            $number2 = $row['number2'];
            $pass = $row['password'];
            $id = $row['id'];
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
$decrypted_pass = my_simple_crypt( $pass, 'd' );
//echo $decrypted_pass;
        }
    }
?>
<div class="col-md-12">
<hr>
<div class="text-center">
<button class="btn btn-info purple mb-3" id="edit_profile">Edit Your Band Profile</button></div>
<form name="register" id="profile_update"  class="theme-form row mt-2" method="post" enctype="multipart/form-data" style="display:none;">
    <div class="col-md-8">
        <div class="form-row" style="display:none;" >
            <div class="form-group col-md-12">
                <input type="text" id="user" name="id" value='<?php echo $id;?>'class="form-control"  required>
            </div>
        </div>
                           
                           <div class="form-row" >
                            <div class="form-group col-md-6">
                                <input type="text" id="user" name="user" value='<?php echo $user_name;?>'class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" id="name" name="name" value='<?php echo $band_name;?>'class="form-control" placeholder="Your Band/Orceshtra Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" id="city" name="city" class="form-control" value='<?php echo $city; ?>' placeholder="City" required>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" name="state" required style="height:44px">
                                    <option  value="Madhya Pradesh" selected >MadhyaPradesh</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Mharastra">Mharastra</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="email" id="email" name="email" value='<?php echo $email;?>' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" name="pwd" pattern=".{6,}" title="Six or more characters" class="form-control"  placeholder="Current Password" required>
                            </div>
                               <div class="form-group col-md-6">
                                <input type="password" name="new_pwd" pattern=".{6,}" title="Six or more characters" class="form-control" placeholder="New Password (If You Want To Change)">
                            </div>
                
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="tel" name="num1" title="10 digit mobile number" class="form-control" placeholder="Contact No.1" value='<?php echo $number1;?>' required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" name="num2" title="10 digit mobile number" class="form-control" placeholder="Contact No.2" value='<?php echo $number2;?>' required>
                            </div>
                        </div>
                         <div class="form-group">
                            <textarea class="form-control" name="qus"  placeholder="Write something about your band.." required><?php echo $feedback;?></textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                  
                            <div class="form-group profile-header-container">
                               
                                <div class="profile-header-img">
                                  <div class=""><img class="img img-thumbnail" src="Uploads/<?php echo $_SESSION['image'] ?>" alt="your image" />
                                  </div>
                                  
                                   <label for="" class="btn purple btn-file mt-2">
                                   Browse Your Image... <input type='file' id="upload" name="image" onchange="readURL(this)"  />
                                    </label>
                                </div>
                                
                            </div>
              
                    </div>
                                  <div class="col-md-12 text-center">          <input type="submit" name="submit" class="btn purple mb-3" value="Update Profile" />

                                    </div>
                </form>
            


</div>
</div>
</div>
</section>
<?php
include 'footer.php';
?>
