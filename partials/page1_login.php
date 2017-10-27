<img src="images/background.jpg" alt="background image">
<div class="login">
    <div id="login_div">
        <div id="login_title"><strong>Witchers log-in here:</strong></div>
        <div id="outside">
            <input type="text" id="username" placeholder="enter name">
            <input type="password" id="password" placeholder="enter password">
            <button id="login">Login</button>
            <div id="message"></div><br>
            <a href="page2_for_public.php" class="public_access">Public Access</a>
        </div>

        <div id="inside">
            <!-- now show only logged in stuff! -->
            <a href="page2_for_witchers.php">Welcome back Witcher. Proceed to the database!</a><br>
            <button id="logout">Logout</button>
        </div>
    </div>
</div>
