<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Index Masterplan</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="{{ asset('') }}plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('') }}plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('') }}css/main.min.css" rel="stylesheet">
    <link href="{{ asset('') }}css/dark-theme.css" rel="stylesheet">
    <link href="{{ asset('') }}css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style>
        .text-x {
            font-size: 6vw
        }

        .card-header {
            font-size: 20px;
        }

        .alert {
            border-radius: 0px !important;
        }

        .card {
            border-radius: 0px 0px 15px 15px !important;
        }

        .border {
            border-style: solid;
            color: #7888fc;
        }
    </style>
</head>

<body>
    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>

    <div class="page-container">
        <div class="">

            <div class="main-wrapper">
                <div class="alert alert-success outline-alert" role="alert">
                    #BRO MONITORING
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center ">
                            <div class="card-header text-success">
                                TOTAL BRO JOINED
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-success">850</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-success">
                                TOTAL BRO (Parent)
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-success">652</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-success">
                                BRO JOINED TODAY
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-success">5</h1>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="alert alert-danger outline-alert" role="alert">
                    #DELIVERY MONITORING
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-danger">
                                DELIVERY PENDING
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-danger">15</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-danger">
                                BRO PACK DELIVERY PENDING
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-danger">114</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-danger">
                                BRO PACK PIC UP PENDING
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-danger">5</h1>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="alert alert-warning outline-alert" role="alert">
                    #STOCK MONITORING
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-warning ">
                                STOCK 0.01 gr
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-warning">7</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-warning">
                                STOCK 0.02 gr
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-warning">0</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card text-center">
                            <div class="card-header text-warning">
                                STOCK 0.05 gr
                            </div>
                            <div class="card-body">
                                <h1 class="text-x text-warning">11</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('') }}plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{ asset('') }}plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('') }}js/main.min.js"></script>
</body>

</html>
