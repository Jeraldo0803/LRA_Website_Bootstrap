<!DOCTYPE html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'] . '\views\templates\header.php'; ?>

<body>

    <div class="card">
        <img class="card-img img-fluid" style="object-fit: cover; height:500px;" src="../assets/img/front-page-bg.jpg"
            alt="Front Page Image">
        <div class="card-img-overlay d-flex flex-column justify-content-center">
            <div class="container text-white mt-5">
                <h2 class="fw-bolder"><?php echo $lang["homepage_welcome"]; ?></h2>
                <h5 class="fw-bold"><?php echo $lang["homepage_welcomespan"]; ?></h5>
                <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio accusamus quasi
                    <br>nisi deserunt dolore minima omnis voluptas quibusdam repudiandae veniam tempora
                    <br>perferendis est numquam eos, explicabo fugit vero doloremque fugiat?
                </h6>
                <a class="btn custom-btn text-black" href="#"><?php echo $lang["homepage_applynow"]; ?></a>
            </div>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '\views\templates\footer.php'; ?>

</body>

</html>