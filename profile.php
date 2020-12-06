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
          <h3 class="section-title">Our Team</h3>
        </header>

        <div class="row portfolio-container" style="position: relative; height: 1080px;">

<?php
$query = "SELECT * from purpleblood ";
$result = mysqli_query($conn,$query);
if($result)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$user = $row['user'];
		$name = $row['bandname'];
		$email = $row['email'];
		$message = $row['question'];
		$num1 = $row['number1'];
		$num2 = $row['number2'];
?>

   <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-name: fadeInUp; height:440px">
            <div class="profile-header-container">   
                    <div class="profile-header-img">
						<img class="img-circle" src="img/pb.png?sz=120" />
					</div>
            
			<div class="card-body pt-1">
                 
                  <h6 class="mb-0 text-center pt-1 pb-1 text-white for-title">Band Name : <span  style="text-transform: uppercase;"> <?php echo $name; ?></span></h6>
                  
                   <h6 class="text-muted mb-1 mt-2 text-center" ><span style="text-transform: uppercase;"> <?php echo $user; ?></span></h6>
                        <hr class="m-1">
                    <p class="mb-2 mt-2 text-center">Email : <?php echo $email ?></p>
                    <p class="mb-2 mt-2 text-center">Feedback : <?php echo $message ?></p>
                    <div class="for-cont  text-center mt-3">
                    <h6 class="mb-2" style="flex:1"><i class="fa fa-phone"> <small> 1 : </small> </i> <?php echo $num1?></h6>
                    <h6 class=""  style="flex:1"><i class="fa fa-phone"> <small> 2 : </small> </i> <?php echo $num2?></h6></div>
					<button type="button" class="btn purpl" name="edit" data-toggle="modal" data-target="#at-login">Edit</button>
                </div>

            </div>
          </div>
<?php
	}
}
?>
        </div>

      </div>
    </section>

<?php
include 'footer.php';
?>