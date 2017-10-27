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
    <script src="../js/show_creatures_witchers_kaedwen.js"></script>
    <script src="../js/javascript.js"></script>
</head>

<body class="container">

    <?php include('partials/nav.php'); ?>

    <div class="jumbotron">
        <h1>Creatures of Kaedwen</h1>
        <p>Destroy all monsters</p>
    </div>
    <div id="show_creatures">
        <!-- creature data appears in here -->
    </div>

    <input class="form-control" type="text" id="creature_type" placeholder="Insert creature type"><br>
    <input class="form-control" type="text" id="gender" placeholder="Insert gender"><br>
    <input class="form-control" type="text" id="last_known_location" placeholder="Insert last known location"><br>
    <input class="form-control" type="text" id="region_id" placeholder="Insert region">
    <button class="btn btn-primary" id="create_entry">Create new entry</button>

    <table id="show_creatures_witchers_kaedwen" class="table">
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
