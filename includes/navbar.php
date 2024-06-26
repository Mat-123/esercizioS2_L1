<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/esercizioS2_L1/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if ($user_from_db) {
                            $user_from_db["username"];
                        } else {
                            echo 'Guest';
                        } ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login.php">Log In</a></li>
                        <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="?logout=1">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</nav>