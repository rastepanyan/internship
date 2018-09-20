<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="./index.php">ONLINE SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-right">
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Sign Up</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contacts.php">Contacts</a>
                </li>
            </ul>
        </div>
        <div class="profile_info">
            <img src="img/blank.jpg">

            <div>
                <?php if (isset($_SESSION['user'])) : ?>
                    <strong><?php echo $_SESSION['user']['username']; ?></strong>
                    <small>
                        <i style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
                        <br>
                        <a href="index.php?logout='1'">Logout</a>
                    </small>
                <?php endif ?>
            </div>
        </div>
    </div>
    </div>
</nav>
