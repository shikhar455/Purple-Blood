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
    <section id="portfolio"  class="section-bg bg-top">
      <div class="container bg-blur">
        <header class="section-header">
          <h3 class="section-title pb-2">Search Result</h3>
        </header>

        <div class="row portfolio-container justify-content-center" style="position: relative;">


<?php
if(isset($_POST['searching']))
{
	$search = $_POST['search'];
$min_length = 3;
    if(strlen($search) >= $min_length)
    {
	$query = "SELECT * FROM purpleblood WHERE user LIKE '%$search%' or bandname LIKE '%$search%' or image LIKE '%$search%' or email LIKE '%$search%'  or city LIKE '%$search%' or state LIKE '%$search%' or question LIKE '%$search%' or number1 LIKE '%$search%' or number2 LIKE '%$search%'";
	$search_result = mysqli_query($conn,$query);
        if($search_result)
        {
            $count = mysqli_num_rows($search_result);
            if($count >=3)
            {
            while($row = mysqli_fetch_assoc($search_result))
            {
               // print_r($row);
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
           
?>
   <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp; height:440px">
            <div class="profile-header-container">   
                    <div class="profile-header-img">
						<figure>
                <img src="Uploads/<?php echo $_SESSION['image'] ?>" class="img img-fluid" alt="">
                <a href="Uploads/<?php echo $_SESSION['image'] ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              </figure>
					</div>
            
			<div class="card-body pt-1">
                 
                  <h6 class="mb-0 text-center pt-1 pb-1 text-white for-title">Band Name : <span  style="text-transform: uppercase;"> <?php echo $band_name; ?></span></h6>
                  
                   <h6 class="text-muted mb-1 mt-2 text-center" ><span style="text-transform: uppercase;"> <?php echo $user; ?></span></h6>
                        <hr class="m-1">
                    <p class="mb-2 mt-2 text-center">Email : <?php echo $email ; ?></p>
                    <p class="mb-2 mt-2 text-center">Feedback : <?php echo $feedback ; ?></p>
                    <div class="for-cont  text-center mt-3">
                    <h6 class="mb-2" style="flex:1"><i class="fa fa-phone"> <small> 1 : </small> </i> <?php echo $number1?></h6>
                    <h6 class=""  style="flex:1"><i class="fa fa-phone"> <small> 2 : </small> </i> <?php echo $number2?></h6></div>
					
                </div>

            </div>
          </div>
<?php
	 }
            }
            else if($count ==2)
            {
            while($row = mysqli_fetch_assoc($search_result))
            {
               // print_r($row);
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
            ?>
             <div class="col-lg-6 col-md-6  portfolio-item filter-app wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp; height:440px">
            <div class="profile-header-container">   
                    <div class="profile-header-img">
						<img class="img-circle" src="img/pb.png?sz=120" />
					</div>
            
			<div class="card-body pt-1">
                 
                  <h6 class="mb-0 text-center pt-1 pb-1 text-white for-title">Band Name : <span  style="text-transform: uppercase;"> <?php echo $band_name; ?></span></h6>
                  
                   <h6 class="text-muted mb-1 mt-2 text-center" ><span style="text-transform: uppercase;"> <?php echo $user; ?></span></h6>
                        <hr class="m-1">
                    <p class="mb-2 mt-2 text-center">Email : <?php echo $email ; ?></p>
                    <p class="mb-2 mt-2 text-center">Feedback : <?php echo $feedback ; ?></p>
                    <div class="for-cont  text-center mt-3">
                    <h6 class="mb-2" style="flex:1"><i class="fa fa-phone"> <small> 1 : </small> </i> <?php echo $number1?></h6>
                    <h6 class=""  style="flex:1"><i class="fa fa-phone"> <small> 2 : </small> </i> <?php echo $number2?></h6></div>
					
                </div>

            </div>
          </div>
            
        <?php 
            }
            }
            elseif($count ==1)
                {
            while($row = mysqli_fetch_assoc($search_result))
            {
               // print_r($row);
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
            ?>
             <div class="col-lg-4 col-md-4 offset-md-4 portfolio-item filter-app wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp; height:440px">
            <div class="profile-header-container">   
                    <div class="profile-header-img">
						<img class="img-circle" src="img/pb.png?sz=120" />
					</div>
            
			<div class="card-body pt-1">
                 
                  <h6 class="mb-0 text-center pt-1 pb-1 text-white for-title">Band Name : <span  style="text-transform: uppercase;"> <?php echo $band_name; ?></span></h6>
                  
                   <h6 class="text-muted mb-1 mt-2 text-center" ><span style="text-transform: uppercase;"> <?php echo $user; ?></span></h6>
                        <hr class="m-1">
                    <p class="mb-2 mt-2 text-center">Email : <?php echo $email ; ?></p>
                    <p class="mb-2 mt-2 text-center">Feedback : <?php echo $feedback ; ?></p>
                    <div class="for-cont  text-center mt-3">
                    <h6 class="mb-2" style="flex:1"><i class="fa fa-phone"> <small> 1 : </small> </i> <?php echo $number1?></h6>
                    <h6 class=""  style="flex:1"><i class="fa fa-phone"> <small> 2 : </small> </i> <?php echo $number2?></h6></div>
					
                </div>

            </div>
          </div>
         
        <?php 
            }
            }
            else
                {
            ?>
             <div class="col-lg-12 col-md-12 portfolio-item filter-app wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp; height:200px">
            <div class="profile-header-container">   
                <div class="card-body pt-1">
                    <div class="for-noresult">
                        <h3 class="section-title">Sorry No Result Found </h3>
                    </div>
                </div>
            </div>
          </div>
          <?php 
            }
        }
    }
    
}

?>
        </div>

      </div>
    </section>

<?php
include 'footer.php';
?>