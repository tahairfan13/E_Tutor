<!-- Page to apply for teaching -->
<?php
include("header.php");


?>
<!-- /Header -->

<section id="contact" class="contact--area section">
    <div class="container">
        <div class="row contact--row">
            <div class="col-md-6">
                <div class="contact--form">
                    <form id="tutor_data" method="post" action="#" enctype="multipart/form-data">
                        <div class="form-group in_name">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group in_email">
                           <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group in_description">
                        <textarea rows="5" name="description" class="form-control" id="description" placeholder="A little description of yourself" required="required"></textarea>
                        </div>
                        <div class="form-group in_major_subjects">
                        <input type="text" name="major_subjects" class="form-control" id="major_subjects" placeholder="Your Major Subjects" required="required">
                        </div>
                        <div class="form-group in_subject_description">
                        <input type="text" name="subject_description" class="form-control" id="subject_description" placeholder="What will you teach?" required="required">
                        </div>
                    </form>
                </div> <!-- contact--form -->
            </div> <!-- col-md-6 -->
            <div class="col-md-6">
            <img class="profile-pic" src="media/icons/gallery.svg" height="400" >
            <div class="upload-button">Upload Image</div>
            <input class="file-upload" type="file" accept="image/*"/>
            </div> <!-- col-md-6 -->
        </div> <!-- row contact--row -->
</div> <!--container -->
</section>

<!-- Footer -->
<?php

include("footer.php");

?>