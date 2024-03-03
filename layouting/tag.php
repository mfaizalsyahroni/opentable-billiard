<header>
    <div>
        <a href="detailtable.php">Menyala Billiard Hall</a>
    </div>
    <div>
        <?php
        if (isset($_SESSION['is_login'])) {
            echo "<div class='right'>";
            echo "<a href='reportdata.php'>report</a>";
            echo "<a href='logoutclient.php'>logout</a>";
            echo "</div>";
        } else {
            echo "<a href='login.php'>login</a>";
        }
        ?>
    </div>
</header>