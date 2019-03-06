<?php 
include 'includes/header.php';
include 'config/config.php';
include 'classes/database.php';
include 'helpers/helpers.php';

$db = new Database;
$query = "SELECT * from pst ";
$result = $db->get_query_result($query);
$i = 0;
while ($question = $result->fetch_assoc()) {
    $zeez[] = $question;
}
$numbers = createRandArray();

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

    <?php for ($i = 0; $i < 20; $i++) :  ?>
    <form class="customRadio">
        <div class="row question-box">
            <div class="question-no">
                <?php echo "Q" . ($i + 1); ?>.
            </div>
            <div class=" col-md-12">

                <div class="row">
                    <input type="hidden" id="serial" value="<?php echo $zeez[$numbers[$i]]['correct_answer']; ?>">
                    <h1> <?php echo $zeez[$numbers[$i]]['question_name']; ?></h1>
                </div>
                <div class="radio-group1">
                    <div class="row">
                        <input type="radio" name="job" id="engineer<?php echo $i; ?>" class="1">
                        <label for="engineer<?php echo $i; ?>"> <?php echo $zeez[$numbers[$i]]['answer1']; ?> </label>
                    </div>
                    <div class="row">
                        <input type="radio" name="job" id="doctor<?php echo $i; ?>" class="2">
                        <label for="doctor<?php echo $i; ?>"> <?php echo $zeez[$numbers[$i]]['answer2']; ?> </label>
                    </div>
                    <div class="row">
                        <input type="radio" name="job" id="driver<?php echo $i; ?>" class="3">
                        <label for="driver<?php echo $i; ?>"> <?php echo $zeez[$numbers[$i]]['answer3']; ?> </label>
                    </div>
                    <div class="row">
                        <input type="radio" name="job" id="kababgy<?php echo $i; ?>" class="4">
                        <label for="kababgy<?php echo $i; ?>"> <?php echo $zeez[$numbers[$i]]['answer4']; ?> </label>
                    </div>
                </div>

            </div>

        </div>
    </form>
    <?php endfor; ?>

    <div class="submit-btn"><button type="submit" value="submit" class="btn" id="submit">Submit</button></div>



</div>


<?php include_once 'includes/footer.php';         ?> 