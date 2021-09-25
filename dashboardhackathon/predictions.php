<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./head.html" ?>
</head>

<body>
    <div id="app">
        <?php include "./menu.html" ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Model Performance - Predictions</h3>
                                <!-- <p class="text-subtitle text-muted">A chart for user </p> -->
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Model Predictions</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <section class="section">
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Linear Regression</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_linear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Ridge Regression</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_ridge"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Lasso Regression</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_lasso"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Random Forest Regressor</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_rf"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Support Vector Regression (SVR)</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_svr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>K-Nearest Neighbor Regressor</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_knr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>MLPRegressor (Neural Network Regression)</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_nnr"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Lasso Regression</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_lasso"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Decision Tree Regressor</h4>
                                </div>
                                <div class="card-body">
                                    <div id="bar_decision"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <?php include "./footer.html" ?>
        </div>
    </div>
    <?php include "./scripts.html" ?>
</body>

</html>