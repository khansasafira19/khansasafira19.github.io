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

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Table</h3>
                            <!-- <p class="text-subtitle text-muted">For user to check they list</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Predictions</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Tables start -->
                <section class="section">
                <div class="row" id="basic-table">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">TPK Predictions in 2020</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">The following is the result of TPK Predictions on the training set.
                                    </p>
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">                                       
                                        <table class="table mb-0 table-lg">
                                            <thead>
                                                <tr class="tableizer-firstrow">
                                                    <th>Month</th>
                                                    <th>Decision</th>
                                                    <th>KNR</th>
                                                    <th>Lasso</th>
                                                    <th>Linear</th>
                                                    <th>NNR</th>
                                                    <th>Random Forest</th>
                                                    <th>Ridge</th>
                                                    <th>SVR</th>
                                                    <th>TRUE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>January</td>
                                                    <td>59.29</td>
                                                    <td>59.29</td>
                                                    <td>59.15</td>
                                                    <td>59.95</td>
                                                    <td>30.21</td>
                                                    <td>45.98</td>
                                                    <td>59.95</td>
                                                    <td>37.16</td>
                                                    <td>59.29</td>
                                                </tr>
                                                <tr>
                                                    <td>February</td>
                                                    <td>45.98</td>
                                                    <td>45.98</td>
                                                    <td>42.46</td>
                                                    <td>42.94</td>
                                                    <td>23.55</td>
                                                    <td>45.98</td>
                                                    <td>42.94</td>
                                                    <td>28.43</td>
                                                    <td>45.98</td>
                                                </tr>
                                                <tr>
                                                    <td>March</td>
                                                    <td>25.41</td>
                                                    <td>25.41</td>
                                                    <td>29.64</td>
                                                    <td>30.05</td>
                                                    <td>10.99</td>
                                                    <td>36.62</td>
                                                    <td>30.05</td>
                                                    <td>22.41</td>
                                                    <td>25.41</td>
                                                </tr>
                                                <tr>
                                                    <td>April</td>
                                                    <td>3.22</td>
                                                    <td>3.22</td>
                                                    <td>4.38</td>
                                                    <td>4.19</td>
                                                    <td>3.98</td>
                                                    <td>4.64</td>
                                                    <td>4.19</td>
                                                    <td>6.77</td>
                                                    <td>3.22</td>
                                                </tr>
                                                <tr>
                                                    <td>May</td>
                                                    <td>2.07</td>
                                                    <td>2.07</td>
                                                    <td>1.79</td>
                                                    <td>1.38</td>
                                                    <td>3.05</td>
                                                    <td>2.26</td>
                                                    <td>1.38</td>
                                                    <td>3.83</td>
                                                    <td>2.07</td>
                                                </tr>
                                                <tr>
                                                    <td>June</td>
                                                    <td>2.07</td>
                                                    <td>2.07</td>
                                                    <td>2.32</td>
                                                    <td>1.93</td>
                                                    <td>2.93</td>
                                                    <td>2.58</td>
                                                    <td>1.93</td>
                                                    <td>4.55</td>
                                                    <td>2.07</td>
                                                </tr>
                                                <tr>
                                                    <td>July</td>
                                                    <td>2.57</td>
                                                    <td>2.57</td>
                                                    <td>4.18</td>
                                                    <td>3.95</td>
                                                    <td>2.90</td>
                                                    <td>2.77</td>
                                                    <td>3.95</td>
                                                    <td>7.12</td>
                                                    <td>2.57</td>
                                                </tr>
                                                <tr>
                                                    <td>August</td>
                                                    <td>3.68</td>
                                                    <td>3.68</td>
                                                    <td>6.67</td>
                                                    <td>6.58</td>
                                                    <td>4.00</td>
                                                    <td>6.47</td>
                                                    <td>6.58</td>
                                                    <td>10.23</td>
                                                    <td>3.68</td>
                                                </tr>
                                                <tr>
                                                    <td>September</td>
                                                    <td>5.28</td>
                                                    <td>5.28</td>
                                                    <td>6.26</td>
                                                    <td>6.02</td>
                                                    <td>5.67</td>
                                                    <td>5.07</td>
                                                    <td>6.02</td>
                                                    <td>8.28</td>
                                                    <td>5.28</td>
                                                </tr>
                                                <tr>
                                                    <td>October</td>
                                                    <td>9.53</td>
                                                    <td>9.53</td>
                                                    <td>7.35</td>
                                                    <td>7.21</td>
                                                    <td>5.58</td>
                                                    <td>9.72</td>
                                                    <td>7.21</td>
                                                    <td>9.82</td>
                                                    <td>9.53</td>
                                                </tr>
                                                <tr>
                                                    <td>November</td>
                                                    <td>9.32</td>
                                                    <td>9.32</td>
                                                    <td>11.18</td>
                                                    <td>11.11</td>
                                                    <td>9.91</td>
                                                    <td>22.11</td>
                                                    <td>11.11</td>
                                                    <td>12.50</td>
                                                    <td>9.32</td>
                                                </tr>
                                                <tr>
                                                    <td>December</td>
                                                    <td>19.00</td>
                                                    <td>19.00</td>
                                                    <td>12.03</td>
                                                    <td>12.11</td>
                                                    <td>4.58</td>
                                                    <td>11.46</td>
                                                    <td>12.11</td>
                                                    <td>13.15</td>
                                                    <td>19.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="basic-table">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">TPK Predictions in mid-2021</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">The following is the result of TPK Predictions on the testing set.
                                    </p>
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-lg">
                                            <thead>
                                                <tr class="tableizer-firstrow">
                                                    <th>Month</th>
                                                    <th>Decision Tree</th>
                                                    <th>KNR</th>
                                                    <th>Lasso</th>
                                                    <th>Linear</th>
                                                    <th>NNR</th>
                                                    <th>Random Forest</th>
                                                    <th>Ridge</th>
                                                    <th>SVR</th>
                                                    <th>TRUE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>January</td>
                                                    <td>9.53</td>
                                                    <td>11.28</td>
                                                    <td>8.16</td>
                                                    <td>8.11</td>
                                                    <td>3.98</td>
                                                    <td>8.53</td>
                                                    <td>8.11</td>
                                                    <td>10.01</td>
                                                    <td>11.15</td>
                                                </tr>
                                                <tr>
                                                    <td>February</td>
                                                    <td>3.22</td>
                                                    <td>2.89</td>
                                                    <td>5.61</td>
                                                    <td>5.46</td>
                                                    <td>3.29</td>
                                                    <td>5.06</td>
                                                    <td>5.46</td>
                                                    <td>8.13</td>
                                                    <td>8.99</td>
                                                </tr>
                                                <tr>
                                                    <td>March</td>
                                                    <td>9.53</td>
                                                    <td>12.08</td>
                                                    <td>8.13</td>
                                                    <td>8.12</td>
                                                    <td>4.18</td>
                                                    <td>8.53</td>
                                                    <td>8.12</td>
                                                    <td>10.49</td>
                                                    <td>10.24</td>
                                                </tr>
                                                <tr>
                                                    <td>April</td>
                                                    <td>9.53</td>
                                                    <td>15.05</td>
                                                    <td>9.48</td>
                                                    <td>9.49</td>
                                                    <td>3.93</td>
                                                    <td>9.85</td>
                                                    <td>9.49</td>
                                                    <td>11.28</td>
                                                    <td>10.09</td>
                                                </tr>
                                                <tr>
                                                    <td>May</td>
                                                    <td>9.53</td>
                                                    <td>15.76</td>
                                                    <td>8.52</td>
                                                    <td>8.56</td>
                                                    <td>3.94</td>
                                                    <td>11.46</td>
                                                    <td>8.56</td>
                                                    <td>11.58</td>
                                                    <td>10.35</td>
                                                </tr>
                                                <tr>
                                                    <td>June</td>
                                                    <td>25.41</td>
                                                    <td>21.54</td>
                                                    <td>14.25</td>
                                                    <td>14.47</td>
                                                    <td>6.16</td>
                                                    <td>23.63</td>
                                                    <td>14.47</td>
                                                    <td>15.95</td>
                                                    <td>16.68</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Tables end -->

            </div>

            <?php include "./footer.html" ?>
        </div>
    </div>
    <?php include "./scripts.html" ?>

</body>

</html>