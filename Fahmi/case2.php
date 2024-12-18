<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="client.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background-color: #537FE7;
            font-family: 'Poppins', sans-serif;
        }

        .full-height {
            height: 100%;
        }

        .sidebar {
            background-color: rgba(255, 255, 255, 0);
        }

        .main-content {
            background-color: #E9F8F9;
        }

        .table-container {
            overflow-y: auto;
        }

        .card {
            background-color: #ffffff;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
        }

        button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-2 full-height sidebar">
                <div class="d-flex flex-column p-3 full-height">
                    <a href="../home.php"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white link-body-emphasis text-decoration-none fs-3 justify-content-center">
                        <b>PeseninKuy</b>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="../home.php" class="nav-link text-white" aria-current="page">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="../case1.php" class="nav-link text-white" aria-current="page">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-ticket" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5z" />
                                </svg>
                                Voucher Hotel
                            </a>
                        </li>
                        <li>
                            <a href="case2.php" class="nav-link text-white" aria-current="page">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                </svg>
                                Cek Pemesanan
                            </a>
                        </li>
                        <li>
                            <a href="../Citra/case3.php" class="nav-link text-white" aria-current="page">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                                    <path
                                        d="M4 4.85v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9z" />
                                    <path
                                        d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3zM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9z" />
                                </svg>
                                Voucher Cafe
                            </a>
                        </li>
                        <li>
                            <a href="../Aldi/case4.php" class="nav-link text-white" aria-current="page">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                                    <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z" />
                                </svg>
                                Pembayaran
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <a href="#"
                            class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle text-white"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                            <strong>Admin</strong>
                        </a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="login.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-1" style="background-color: #E9F8F9;"></div>
            <div class="col-8 full-height main-content d-flex flex-column">
                <div class="mt-5 table-container flex-grow-1">
                    <p>M. Fahmi Tassha Hoqi - 225150607111022</p>
                    <h2><b>Cek Pesanan</b></h2>
                    <hr>
                    <div class="container d-flex justify-content-center mt-5">
                        <div class="card d-flex justify-content-center p-4" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title"><b>PeseninKuy</b></h3>
                                <h6 class="card-subtitle mb-2 text-body-secondary mb-3">Cek Pemesanan</h6>
                                <div class="mb-3">
                                    <input class="form-control" id="name">
                                </div>
                                <div class="mt-2 d-flex justify-content-center gap-2">
                                    <button id="vch" class="btn text-white" style="background-color: #3498db;">Find
                                        Order
                                        Number</button>
                                </div>
                                <div id="output" class="mt-2 d-flex justify-content-center gap-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1" style="background-color: #E9F8F9;"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>