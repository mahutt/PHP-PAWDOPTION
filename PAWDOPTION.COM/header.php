<div class="header">
    <div class="branding">
        <div class="logo">
            <a href="index.php"><img src="pawdoption_logo3.png" alt="Logo"></a>
        </div>
        <div class="titles">
            <h1>PAWDOPTION</h1>
            <p>Cat & Dog Adoption Agency</p>
        </div>
    </div>
    <div class="header-end">
        <div id="date"></div>
        <div id="logout">
            <form action="login.php" method="POST">
            <?php
                if (isset($_SESSION["username"])) {
                    echo "<input type=\"submit\" name=\"logout\" value=\"Logout\"></form>";
                }
                else {
                    echo "<input type=\"submit\" name=\"submit\" value=\"Login\">";
                }
            ?>
            </form>
        </div>
    </div>
    
    
</div>