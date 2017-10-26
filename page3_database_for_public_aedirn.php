<!DOCTYPE html>
<html>

<?php include('partials/head.php'); ?>

<body class="container">

    <?php include('partials/nav.php'); ?>

    <div class="jumbotron">
        <h1>Creature Database</h1>
        <p>All monsters must die</p>
    </div>
    <div id="show_creatures">
        <!-- creature data appears in here -->
    </div>
<!--

    <input class="form-control" type="text" id="creature_type" placeholder="Insert creature type"><br>
    <input class="form-control" type="text" id="gender" placeholder="Insert gender"><br>
    <input class="form-control" type="text" id="last_known_location" placeholder="Insert last known location"><br>
    <button class="btn btn-primary" id="create_entry">Create new entry</button>
-->

    <table id="show_creatures" class="table">
        <thead>
            <tr>
                <th>Creature type</th>
                <th>Gender</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>

</body>
   
    <?php include('partials/footer.php'); ?>

</html>
