<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand h1 mb-0" href="index.php">
            <img class="me-3" src="Resources/logo.png" height="25" />
            HEXASHOP
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-5 text-uppercase fs-6 fw-bold">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item me-5 text-uppercase fs-6 fw-bold">
                    <a class="nav-link" aria-current="page" href="about.php">About</a>
                </li>
                <li class="nav-item me-5 text-uppercase fs-6 fw-bold">
                    <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" aria-current="page" href="cart.php">
                        <i class="bi bi-cart" style="font-size: 1.5rem;"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person" style="font-size: 1.5rem;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="profile.php">User Profile</a></li>
                        <li><a class="dropdown-item" href="orderHistory.php">History</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" onclick="signOut();">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
