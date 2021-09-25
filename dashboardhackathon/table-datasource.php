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
                <h3>Source Code for All Models with All Variables</h3>
            </div>
            <div class="page-content">

                <section class="list-group-navigation">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Source</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4">
                                                <div class="list-group" role="tablist">
                                                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab">TPK BPS (True TPK)</a>
                                                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab">Flight Passengers</a>
                                                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab">Domestic Tourists</a>
                                                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab">Foreign Tourists</a>
                                                    <a class="list-group-item list-group-item-action" id="list-settings-list2" data-bs-toggle="list" href="#list-settings2" role="tab">Days</a>
                                                    <a class="list-group-item list-group-item-action" id="list-settings-list3" data-bs-toggle="list" href="#list-settings3" role="tab">Google Mobility</a>
                                                    <a class="list-group-item list-group-item-action" id="list-settings-list4" data-bs-toggle="list" href="#list-settings4" role="tab">Covid Cases</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-8 mt-1">
                                                <div class="tab-content text-justify" id="nav-tabContent">
                                                    <div class="tab-pane show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                                        Provided by The Committee in BPS (unavailable to the public)
                                                    </div>
                                                    <div class="tab-pane" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                                        Derived from this table: https://www.bps.go.id/indicator/17/66/1/jumlah-penumpang-pesawat-di-bandara-utama.html
                                                    </div>
                                                    <div class="tab-pane" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                                        Derived from this table: https://bali.bps.go.id/statictable/2018/02/09/29/banyaknya-wisatawan-domestik-bulanan-ke-bali-2004-2020.html
                                                        and from Disparda (Dinas Pariwisata Daerah) of Bali Province (I contacted them)
                                                    </div>
                                                    <div class="tab-pane" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                                        Derived from this table: https://www.bps.go.id/dynamictable/2018/04/05%2000:00:00/1296/jumlah-kunjungan-wisatawan-mancanegara-per-bulan-ke-indonesia-menurut-pintu-masuk-2017-2019.html
                                                    </div>
                                                    <div class="tab-pane" id="list-settings2" role="tabpanel" aria-labelledby="list-settings-list2">
                                                        Just a number of days in a month.
                                                    </div>
                                                    <div class="tab-pane" id="list-settings3" role="tabpanel" aria-labelledby="list-settings-list3">
                                                        Derived from: https://ourworldindata.org/covid-google-mobility-trends
                                                    </div>
                                                    <div class="tab-pane" id="list-settings4" role="tabpanel" aria-labelledby="list-settings-list4">
                                                        Derived from: https://docs.google.com/spreadsheets/d/1ma1T9hWbec1pXlwZ89WakRk-OfVUQZsOCFl4FwZxzVw/edit#gid=2052139453
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <?php include "./footer.html" ?>
        </div>
    </div>
    <?php include "./scripts.html" ?>
</body>

</html>