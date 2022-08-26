        <link href="main.css" rel="stylesheet">
        <link href="bootstrap.min.css" rel="stylesheet">
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <nav class="navbar navbar-expand-lg header fixed-top">
            <div class="container-fluid">
                <img
                    src="images/money.svg"
                    width="50"
                    height="50"
                    alt="logo"
                >
                <h3 class="title">TSF Bank</h3>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white navi active" aria-current="page" href="home.html">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link navi text-white" href="fund_transfer.php">Fund Transfer</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link navi text-white" href="staff_login.php">Staff Login</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link navi text-white" href="open_account.php">Open account</a>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle text-white navi"
                                href="#"
                                id="navbarDropdownMenuLink"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Internet Banking
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="customer_login.php">Login</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="net_banking_reg.php">Sign Up</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>