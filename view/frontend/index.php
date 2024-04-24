<?php
include '../../Controller/activityC.php';
include '../../Model/activity.php';

$error = "";

$activityC = new ActivityC();

if (
    isset($_GET['id_activite']) &&
    isset($_GET['nomActivite']) &&
    isset($_GET['type']) &&
    isset($_GET['description']) &&
    isset($_GET['duree']) &&
    isset($_GET['id_evenement']) &&
    isset($_GET['difficulte']) &&
    isset($_GET['categorie']) &&
    isset($_GET['prix'])
) {
    if (
        !empty($_GET['id_activite']) &&
        !empty($_GET['nomActivite']) &&
        !empty($_GET['type']) &&
        !empty($_GET['description']) &&
        !empty($_GET['duree']) &&
        !empty($_GET['id_evenement']) &&
        !empty($_GET['difficulte']) &&
        !empty($_GET['categorie']) &&
        !empty($_GET['prix'])
    ) {
        $activity = new Activity(
            $_GET['id_activite'],
            $_GET['nomActivite'],
            $_GET['type'],
            $_GET['description'],
            $_GET['duree'],
            $_GET['id_evenement'],
            $_GET['difficulte'],
            $_GET['categorie'],
            $_GET['prix']
        );

        $activityC->addActivity($activity);
        echo 'Success';
    } else {
        $error = "Missing information";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Activity Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
    <div id="activity" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="booking-bg"></div>
                        <form method="GET">
                            <div class="form-header">
                                <h2>Activity Booking</h2>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="id_activite" placeholder="Enter activity ID">
                                <span class="form-label">ID</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="nomActivite" placeholder="Enter activity name">
                                <span class="form-label">Activity Name</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="type" placeholder="Enter activity type">
                                <span class="form-label">Type</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="description" placeholder="Enter activity description">
                                <span class="form-label">Description</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="duree" placeholder="Enter activity duration">
                                <span class="form-label">Duration</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="id_evenement" placeholder="Enter event ID">
                                <span class="form-label">Event ID</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="difficulte" placeholder="Enter activity difficulty">
                                <span class="form-label">Difficulty</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="categorie" placeholder="Enter activity category">
                                <span class="form-label">Category</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="prix" placeholder="Enter activity price">
                                <span class="form-label">Price</span>
                            </div>
                            <button class="submit-btn">Pre-Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.form-control').each(function () {
            floatedLabel($(this));
        });

        $('.form-control').on('input', function () {
            floatedLabel($(this));
        });

        function floatedLabel(input) {
            var $field = input.closest('.form-group');
            if (input.val()) {
                $field.addClass('input-not-empty');
            } else {
                $field.removeClass('input-not-empty');
            }
        }
    </script>

</body>

</html>
