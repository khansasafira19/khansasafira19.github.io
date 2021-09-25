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
                            <h3>Final Data</h3>
                            <!-- <p class="text-subtitle text-muted">For user to check they list</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Final Data</li>
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
                                <h4 class="card-title">Training Set (Processed)</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">The following is the result of data pre-processing on the training set.
                                    </p>
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-lg">
                                            <thead>
                                                <tr class="tableizer-firstrow">
                                                    <th>Id</th>
                                                    <th>Year</th>
                                                    <th>Month</th>
                                                    <th>TPK BPS</th>
                                                    <th>Available Room</th>
                                                    <th>Total Room</th>
                                                    <th>Booked Room</th>
                                                    <th>Computed TPK Online</th>
                                                    <th>Computed TPK Online (Denoised)</th>
                                                    <th>Flight Passengers</th>
                                                    <th>Domestic Tourists</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2020</td>
                                                    <td>Januari</td>
                                                    <td>59.29</td>
                                                    <td>459</td>
                                                    <td>766</td>
                                                    <td>279</td>
                                                    <td>37.10691824</td>
                                                    <td>37.43387744</td>
                                                    <td>1094169</td>
                                                    <td>879702</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>2020</td>
                                                    <td>Februari</td>
                                                    <td>45.98</td>
                                                    <td>433.5</td>
                                                    <td>713</td>
                                                    <td>284</td>
                                                    <td>39.44838057</td>
                                                    <td>39.57086986</td>
                                                    <td>772595</td>
                                                    <td>721105</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>2020</td>
                                                    <td>Maret</td>
                                                    <td>25.41</td>
                                                    <td>629.5</td>
                                                    <td>758</td>
                                                    <td>186</td>
                                                    <td>24.49712644</td>
                                                    <td>25.58433841</td>
                                                    <td>527776</td>
                                                    <td>567452</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>2020</td>
                                                    <td>April</td>
                                                    <td>3.22</td>
                                                    <td>21190</td>
                                                    <td>33285</td>
                                                    <td>9520</td>
                                                    <td>22.7798458</td>
                                                    <td>22.75313465</td>
                                                    <td>50874</td>
                                                    <td>175120</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>2020</td>
                                                    <td>Mei</td>
                                                    <td>2.07</td>
                                                    <td>16659</td>
                                                    <td>32539</td>
                                                    <td>15707</td>
                                                    <td>30.79260811</td>
                                                    <td>31.06216917</td>
                                                    <td>4047</td>
                                                    <td>101948</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>2020</td>
                                                    <td>Juni</td>
                                                    <td>2.07</td>
                                                    <td>33407</td>
                                                    <td>50624</td>
                                                    <td>16181</td>
                                                    <td>32.45711924</td>
                                                    <td>32.63582524</td>
                                                    <td>12273</td>
                                                    <td>137395</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>2020</td>
                                                    <td>Juli</td>
                                                    <td>2.57</td>
                                                    <td>34482</td>
                                                    <td>51258</td>
                                                    <td>15414</td>
                                                    <td>30.43262059</td>
                                                    <td>30.30836007</td>
                                                    <td>43492</td>
                                                    <td>229112</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>2020</td>
                                                    <td>Agustus</td>
                                                    <td>3.68</td>
                                                    <td>2274</td>
                                                    <td>3793</td>
                                                    <td>1519</td>
                                                    <td>32.98868008</td>
                                                    <td>32.09770091</td>
                                                    <td>84721</td>
                                                    <td>355732</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>2020</td>
                                                    <td>September</td>
                                                    <td>5.28</td>
                                                    <td>29066</td>
                                                    <td>49852</td>
                                                    <td>19863</td>
                                                    <td>37.91300032</td>
                                                    <td>37.22287739</td>
                                                    <td>81321</td>
                                                    <td>283349</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>2020</td>
                                                    <td>Oktober</td>
                                                    <td>9.53</td>
                                                    <td>29403.5</td>
                                                    <td>49999.5</td>
                                                    <td>18812</td>
                                                    <td>35.94214606</td>
                                                    <td>35.51850075</td>
                                                    <td>99562</td>
                                                    <td>337304</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>2020</td>
                                                    <td>November</td>
                                                    <td>9.32</td>
                                                    <td>27918</td>
                                                    <td>48904</td>
                                                    <td>19868</td>
                                                    <td>39.08344226</td>
                                                    <td>38.77074898</td>
                                                    <td>169895</td>
                                                    <td>425097</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>2020</td>
                                                    <td>Desember</td>
                                                    <td>19</td>
                                                    <td>522</td>
                                                    <td>650</td>
                                                    <td>146</td>
                                                    <td>23.81729201</td>
                                                    <td>24.47610622</td>
                                                    <td>189485</td>
                                                    <td>382841</td>
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
                                <h4 class="card-title">Testing Set (Processed)</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">The following is the result of data processing on the testing set.
                                    </p>
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-lg">
                                            <thead>
                                                <tr class="tableizer-firstrow">
                                                    <th>Id</th>
                                                    <th>Year</th>
                                                    <th>Month</th>
                                                    <th>TPK BPS</th>
                                                    <th>Available Room</th>
                                                    <th>Total Room</th>
                                                    <th>Booked Room</th>
                                                    <th>Computed TPK Online</th>
                                                    <th>Computed TPK Online (Denoised)</th>
                                                    <th>Flight Passengers</th>
                                                    <th>Domestic Tourists</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2021</td>
                                                    <td>Januari</td>
                                                    <td>11.15</td>
                                                    <td>17361.01613</td>
                                                    <td>27941.91935</td>
                                                    <td>10580.90323</td>
                                                    <td>23.61346682</td>
                                                    <td>23.58492863</td>
                                                    <td>119160</td>
                                                    <td>282248</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>2021</td>
                                                    <td>Februari</td>
                                                    <td>8.99</td>
                                                    <td>15538.51786</td>
                                                    <td>26191.53571</td>
                                                    <td>10653.01786</td>
                                                    <td>26.4804538</td>
                                                    <td>26.42356562</td>
                                                    <td>71122</td>
                                                    <td>240608</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>2021</td>
                                                    <td>Maret</td>
                                                    <td>10.24</td>
                                                    <td>16422.63333</td>
                                                    <td>26036.83333</td>
                                                    <td>9614.2</td>
                                                    <td>23.08332992</td>
                                                    <td>23.26182456</td>
                                                    <td>117088</td>
                                                    <td>305579</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>2021</td>
                                                    <td>April</td>
                                                    <td>10.09</td>
                                                    <td>17021.98333</td>
                                                    <td>27078.53333</td>
                                                    <td>10056.55</td>
                                                    <td>24.76548443</td>
                                                    <td>24.69678961</td>
                                                    <td>142329</td>
                                                    <td>330593</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>2021</td>
                                                    <td>Mei</td>
                                                    <td>10.35</td>
                                                    <td>17185.81034</td>
                                                    <td>27388.15517</td>
                                                    <td>10202.34483</td>
                                                    <td>25.10257223</td>
                                                    <td>25.03408675</td>
                                                    <td>121076</td>
                                                    <td>363959</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>2021</td>
                                                    <td>Juni</td>
                                                    <td>16.68</td>
                                                    <td>16729.86667</td>
                                                    <td>27310.68333</td>
                                                    <td>10580.81667</td>
                                                    <td>26.39210914</td>
                                                    <td>26.43109706</td>
                                                    <td>226287</td>
                                                    <td>498852</td>
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