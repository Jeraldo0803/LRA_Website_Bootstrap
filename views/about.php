<!DOCTYPE html>
<html lang="en">


<?php include $_SERVER['DOCUMENT_ROOT'] . '\views\templates\header.php'; ?>

<body>
    <div class="container">
        <div class="mt-3 d-flex flex-row container text-center justify-content-around">

            <div>
                <h1 class="fw-bolder">謙虛</h1>
                <h5>Loyalty</h5>
            </div>

            <div>
                <h1 class="fw-bolder">忠誠</h1>
                <h5>Humility</h5>
            </div>

            <div>
                <h1 class="fw-bolder">仁愛</h1>
                <h5>Benevolence</h5>
            </div>

        </div>

        <div class="row no-gutters">
            <div class="col">
                <h2 class="fw-bolder"><?php echo $lang["vision"]; ?></h2>
                <br>
                <p>
                    <bold class="fw-bolder"><?php echo $lang["LRA"]; ?></bold>
                    <?php echo $lang["vision_description"]; ?>
                </p>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img img-fluid" src="../assets/img/2nd-page-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="fw-bolder"><?php echo $lang["mission"]; ?></h2>
        <p>
            <?php echo $lang["mission_description1"]; ?>
            <br>
            <?php echo $lang["mission_description2"]; ?>
            <br><br>
            <?php echo $lang["mission_description3"]; ?>
            <br><br>
            <?php echo $lang["mission_description4"]; ?>
            <br>
        </p>
    </div>

    <div class="container bg-black text-center text-white">

    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '\views\templates\footer.php'; ?>

</body>

</html>