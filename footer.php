<!--==========================
    Footer
  ============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <img src="img/pblogo.png">
                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <h5><strong>RONAK PATIDAR</strong></h5>
                    <strong>Phone:</strong> +91 8982843866<br>
                    <strong>Phone:</strong> +91 7509072116<br>
                    <strong>Email:</strong> purplebloodpb62@gmail.com</<br>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Useful Link</h4>
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>PURPLE BLOOD</strong>. All Rights Reserved | Designed by Shikhar
        </div>
    </div>
</footer>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
<script type="text/javascript">
    function validation() {
        var contact1 = document.form['register']['num'].value;
        alert(contact1);
    }

</script>
<script>
$(document).ready(function() {
$("#register_form").submit(function(e) {
    e.preventDefault();
    var form = $(this);
    //	var name = $("#name").val();
    //	var comment = $("#comment").val();
    //	if(name == "" || comment == "" ) {
    //		$("#error_message").show().html("All Fields are Required");
    //	} else {
    //		$("#error_message").html("").hide();
    var formData = new FormData(form[0]);
    console.log(formData);
    $("#upload").on("change", function() {
        var file = this.files[0];
        console.log(file);
        if (formData) {
            formData.append("image", file);
        }
    });
    //        var file = document.getElementById("file").files[0];
    //        formData.append("companyname", $("#companyname").val());
    //        formData.append("country", $("#country").val());
    //        formData.append("file", file);
    $.ajax({
        type: "POST",
        url: "register_check.php",
        //			data: $('#register_form').serialize(),
        data: formData,
        processData: false,
        contentType: false,
        //			success: function(data){
        //                console.log("ok");
        //				$('#success').fadeIn("slow");
        //				setTimeout(function() {
        //					$('#success').fadeOut("slow");
        //				}, 200000 );
        //			}
        success: function(data) {
            $("#success_message").delay(1000).html(data);
            $("#success").modal('show');
        }
    });

});

$("#profile_update").submit(function(e) {
    e.preventDefault();
    var form = $(this);
    var formData = new FormData(form[0]);
    console.log(formData);
    $("#upload").on("change", function() {
        var file = this.files[0];
        if (formData) {
            formData.append("image", file);
        }
    });
    $.ajax({
        type: "POST",
        url: "profile_update.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            $("#success_message").delay(1000).html(data);
            $("#success").modal('show');
        }
    });

});
});
    

</script>

</body>

</html>
