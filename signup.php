<?php
include("header.php");
?>

<section id="contact" class="contact--area section">
    <div class="container">
        <div class="row contact--row">
            <div class="col-md-6">
                <div class="contact--form">
                    <!-- <form id="tutor_data" method="post" action="https://nameless-plateau-58795.herokuapp.com/auth/signup" enctype="multipart/form-data"> -->
                        <div class="form-group in_name">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group in_email">
                           <input type="email" name="email" class="form-control" id="email" placeholder="Email" >
                        </div>
                        <div class="form-group in_username">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" >
                        </div>
                        <div class="radio-buttons">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="true">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="false">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="form-group in_password">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <button class="btn btn-lg-primary" name="signup-button" id="signup-button" type="submit" value="Signup">Signup</button>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include("footer.php");
?>
<script>
    $(document).ready(function(){
        console.log("Halo");
        $("#signup-button").on('click', function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var username = $("#username").val();
        var gender = $("input[name='gender']:checked").val();
        var password = $("#password").val();
        // alert (gender+" "+email+ " "+name+" "+username +" "+password);
        var data = {
            name: name,
            email: email,
            username: username,
            gender: gender,
            password: password,
            password_confirmation: password
        };
        // alert(JSON.stringify(data));
        // console.log(JSON.stringify(data));
        $.ajax({
            type: 'POST',
            url: 'https://nameless-plateau-58795.herokuapp.com/auth/signup',
            data: data,
            success: function(res){
                var token = res.stoken;
                var sid = res.sid; 
                var username = res.user.username;
                console.log(username);
                // window.location.href = "http://localhost/Tuition%20Center/"; 
            }
            });
});
});
    </script>