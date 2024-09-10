<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diabetes Risk Assessment Analytics</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style10.css">
</head>

<body>
<nav>
        <ul>
            <li><a href="dashboard.php">Back to Dashboard</a>
            <li><a href="logout.php">Logout</a>
        </ul>
    </nav>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#cardiovascularChart">Cardiovascular System</a>
                            </li>
                            <li>
                                <a href="#renalChart">Kidneys (Renal System)</a>
                            </li>
                            <li>
                                <a href="#ophthalmicChart">Eyes (Ophthalmic System)</a>
                            </li>
                            <li>
                                <a href="#nervousChart">Nerves (Nervous System)</a>
                            </li>
                            <li>
                                <a href="#skinChart">Skin</a>
                            </li>
                            <li>
                                <a href="#digestiveChart">Digestive System</a>
                            </li>
                            <li>
                                <a href="#reproductiveChart">Reproductive System</a>
                            </li>
                            <li>
                                <a href="#immuneChart">Immune System</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
                <!-- /.nav -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar side -->

        <!-- page-wrapper -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Diabetes Risk Assessment Analytics</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Cardiovascular System</h2>
                            </div>
                            <div class="panel-body">
                                <canvas id="cardiovascularChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Kidneys (Renal System)</h2>
                            </div>
                            <div class="panel-body">
                                <canvas id="renalChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Eyes (Ophthalmic System)</h2>
                            </div>
                            <div class="panel-body">
                                <canvas id="ophthalmicChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Nerves (Nervous System)</h2>
                            </div>
                            <div class="panel-body">
                                <canvas id="nervousChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Skin</h2>
                            </div>
                            <div class="panel-body">
                                <canvas id="skinChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Digestive System</h2>
                            </div>
                            <div class="panel-body">
                                <canvas id="digestiveChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Reproductive System</h2>
                            </div>
                            <div class="panel-body">
                                <canvas id="reproductiveChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Immune System</h2>
                            </div>
                            <div class="panel-body">
                                <canvas id="immuneChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->


    <!-- Chart.js Scripts -->
    <script src="analytics.js"></script>
</body>

</html>
