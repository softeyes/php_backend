<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php_backend</title>
    <link rel="icon" href="https://www.codester.com/static/uploads/categories/10/icon.png">

    <!-- stylesheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <!-- javascript-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/show_creatures_public_aedirn.js"></script>
    <script src="../js/javascript.js"></script>
</head>

<body class="container">

    <?php include('partials/nav.php'); ?>

    <div class="jumbotron">
        <h1>Creatures of Aedirn</h1>
        <p>Destroy all monsters</p>
    </div>
    <div id="show_creatures">
        <!-- creature data appears in here -->
    </div>

    <table id="show_creatures_public_aedirn" class="table">
        <thead>
            <tr>
                <th>creature_id</th>
                <th>creature_type</th>
                <th>gender</th>
                <th>last_known_location</th>
                <th>region_id</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>

</body>
   
    <?php include('partials/footer.php'); ?>

</html>
