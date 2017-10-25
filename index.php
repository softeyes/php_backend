<!DOCTYPE html>
<html>

<?php include('partials/head.php'); ?>

<body class="container">

  <div id="login_div">
    <div id="login_title"><strong>Witchers log-in here:</strong></div>
    <div id="outside">
      <input type="text" id="username" placeholder="enter username">
      <input type="password" id="password" placeholder="enter password">

      <button id="login">login</button>

      <div id="message"></div>
  </div>

    <div id="inside">
      <p>you are logged in!</p>
      <button id="logout">logout</button>

      <!-- now show only logged in stuff! -->
      <a href="page2.php">go to page 2</a>
    </div><br>

  <?php include('partials/nav.php'); ?>

    <div class="jumbotron">
        <h1>Creature Database</h1>
        <p>All monsters must die</p>
    </div>
    <div id="show_creatures">
        <!-- creature data appears in here -->
    </div>

<input class="form-control" type="text" id="creature_type" placeholder="Insert creature type"><br>
<input class="form-control" type="text" id="gender" placeholder="Insert gender"><br>
<input class="form-control" type="text" id="last_known_location" placeholder="Insert last known location"><br>
<button class="btn btn-primary" id="create_entry">Create new entry</button>

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

   <?php include('partials/footer.php'); ?> 
</body>

</html>