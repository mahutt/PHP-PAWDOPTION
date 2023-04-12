<div class="header">
    <div class="branding">
        <div class="logo">
            <a href="home.html"><img src="pawdoption_logo3.png" alt="Logo"></a>
        </div>
        <div class="titles">
            <h1>PAWDOPTION</h1>
            <p>Cat & Dog Adoption Agency</p>
        </div>
    </div>
    <div class="header-end">
        <div id="date"></div>
        <div id="logout">
            <form action="home.php" method="POST">
            <?php
                if (isset($_SESSION["username"])) {
                    echo "<input type=\"submit\" name=\"submit\" value=\"logout\"></form>";
                }
                else {
                    echo "<input type=\"submit\" name=\"submit\" value=\"login\">";
                }
            ?>
            </form>
        </div>
    </div>
    
    
</div>