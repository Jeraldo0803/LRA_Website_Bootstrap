<!DOCTYPE html>
<html lang="en">


<?php include $_SERVER['DOCUMENT_ROOT'] . '\views\templates\header.php'; ?>

<body>

    <div class="container">
        <h1>Contact page</h1>
        <h3>Get in touch!</h3>


        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <h4>649 Ongpin St. (Heart of Chinatown) Binondo, Manila Brgy 288</h4>
                    <h4>lrabinondo@gmail.com</h4>
                    <h4>2425536
                        <br>2426955
                    </h4>
                </div>
            </div>
            <div class="col">
                <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:500px;height:500px;">
                    <div id="gmap-canvas" style="height:100%; width:100%;max-width:100%;"><iframe
                            style="height:100%;width:100%;border:0;" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=Lorenzo+Ruiz+Academy&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div><a class="my-codefor-googlemap" href="https://www.bootstrapskins.com/themes"
                        id="enable-maps-data">premium
                        bootstrap themes</a>
                    <style>
                        #gmap-canvas img.text-marker {
                            max-width: none !important;
                            background: none !important;
                        }

                        img {
                            max-width: none
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '\views\templates\footer.php'; ?>

</body>

</html>