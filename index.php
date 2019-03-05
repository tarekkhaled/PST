<?php 
include 'includes/header.php';
include 'config/config.php';
include 'classes/database.php';
include 'helpers/format_helper.php';




?>

<!-- put your front end here  -->

<div class="arrow">
    <div class="content">
        <h1 class="apec-h1">APEC</h1>
        <h1 class="w-h1">Welcome to the Pst</h1>
        <h1 class="q-h1">20 questions in 30 mins..</h1>
        <h1 class="c-h1">Can you do it ?</h1>
    </div>

</div>
<!--**********************************-->



<!-- ***********questions will be here ************ -->


<div class="container questions">
    <form class="customRadio">
        <?php for ($i = 0; $i < 3; $i++) :  ?>
        <div class="row question-box">
            <div class="question-no">
                <?php echo "Q" . ($i + 1); ?>.
            </div>
            <div class=" col-md-12">

                <div class="row">

                    <h1> What is your dream job?</h1>
                </div>
                <div class="radio-group1">
                    <div class="row">
                        <input type="radio" name="job" id="engineer<?php echo $i; ?>">
                        <label for="engineer<?php echo $i; ?>"> Engineer </label>
                    </div>
                    <div class="row">
                        <input type="radio" name="job" id="doctor<?php echo $i; ?>">
                        <label for="doctor<?php echo $i; ?>"> DoctorDoctorDoctorDoctorDoctorDoctorDoctorDoctorDoctorDoctorDoctorDoctororDoctorDoctorDoctorDoctorDoctorDoctor </label>
                    </div>
                    <div class="row">
                        <input type="radio" name="job" id="driver<?php echo $i; ?>">
                        <label for="driver<?php echo $i; ?>"> DriverDriverDriverDriverDriverDriverDriverDriverDriverDriverDriverDriverDriverDriverDriverDriverDriver </label>
                    </div>
                    <div class="row">
                        <input type="radio" name="job" id="kababgy<?php echo $i; ?>">
                        <label for="kababgy<?php echo $i; ?>"> Kababgy </label>
                    </div>
                </div>

            </div>

        </div>
        <?php endfor; ?>

        <div class="submit-btn"><button type="submit" value="submit" class="btn">Submit</button></div>

    </form>

</div>


<?php include_once 'includes/footer.php';      ?> 