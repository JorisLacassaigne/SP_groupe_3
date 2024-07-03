<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$titrePrincipal}</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
{*    <link rel="stylesheet" href="public/assets/css/bootstrap-select.less">*}
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

{*    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>*}

</head>
<body>


<!-- Left Panel -->
{include file='public/left.tpl'}



<!-- Left Panel -->
<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->

   {include file='public/header.tpl'}

    <!-- Header-->



<!--- Travail Christine---->

    <h1> EN CONSTRUCTION</h1>
    <p>(Mais vraies stats)</p>

{*    <div class="content mt-3">*}

{*        <div class="col-sm-12">*}
{*            <div class="alert  alert-success alert-dismissible fade show" role="alert">*}
{*                <span class="badge badge-pill badge-success">Bonjour</span> Sylvain Fillard votre CA en 2020 est de*}
{*                <button type="button" class="close" data-dismiss="alert" aria-label="Close">*}
{*                    <span aria-hidden="true">&times</span>*}
{*                </button>*}
{*            </div>*}
{*        </div>*}

{*        <div>&nbsp;</div>*}

{*        <br>*}

        <div class="animated fadeIn">
            <div class="row">

                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Chiffre d'affaire de l'entreprise</div>
                                    <div class="stat-digit">{sprintf('%.2f',{$tabBord->getStat04()})} €</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Votre chiffre d'affaire</div>
                                        <div class="stat-digit">{sprintf('%.2f',{$tabBord->getStat01()})} €</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Nombre de Clients total</div>
                                    <div class="stat-digit">{$tabBord->getStat02()}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total de produit vendus</div>
                                    <div class="stat-digit">{$tabBord->getStat03()}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{*            <div class="row">*}
{*                <div class="col-lg-6">*}
{*                    <div class="card">*}
{*                        <div class="card-body">*}
{*                            <h4 class="mb-3">Le chiffre d'affaires des 8 meilleurs clients</h4>*}
{*                            <iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px;*}
{*                            _100%; position: absolute; pointer-events: none; z-index:-1" tabindex="-1"></iframe>*}

{*                            <div id="clientTab" style="visibility:hidden; height:2px;">["LEGROS Christian","MARIN Dominique","BOUCHE Carole","CANILLE Walter","COTOY Sylvie","MARTUSE"]</div>*}
{*                            <div id="caTab" style="visibility:hidden; height:2px;">["33525.19","15651.10","5837.12","2135.16"]</div>*}
{*                            <canvas id="barChart" style="display: block; width: 673px; height: 336px;" width="673" height="336">*}
{*                                <iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px;*}
{*                            _100%; position: absolute; pointer-events: none; z-index:-1" tabindex="-1"></iframe>*}
{*                            </canvas>*}

{*                        </div>*}
{*                    </div>*}
{*                </div>*}
{*            </div>*}

{*            <div class="col-lg-6 grid-margin stretch-card">*}
{*                <div class="card">*}
{*                    <div class="card-body">*}

{*                        <h4 class="mb-3">Les produits en vedette</h4>*}
{*                        <div id="areaChart" style="visibility:hidden; height:2px;">["CARACAO","FEU DE JOIE LIQUEUR ASSORT.","LANGUE COLA CITRIQUE"]</div>*}
{*                        <div id="qteTab" style="visibility:hidden; height:2px;">["1050","653","147"]</div>*}
{*                        <canvas id="doughnutChart" style="display: block; width: 673px; height: 336px;" width="673" height="336"></canvas>*}

{*                    </div>*}
{*                </div>*}
{*            </div>*}







{*            <!--/.col-->*}
{*            <div class="col-sm-8 hidden-sm-down">*}
{*                *}{*                            <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i*}
{*                *}{*                                        class="fa fa-cloud-download"></i></button>*}
{*                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">*}
{*                    <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">*}

{*                    </div>*}
{*                </div>*}
{*            </div><!--/.col-->*}



{*            <!-- /# card -->*}
{*        </div>*}


{*    </div> <!-- .content -->*}


    <!---- Travail Christine --->






{*    <div class="breadcrumbs">*}
{*        <div class="col-sm-4">*}
{*            <div class="page-header float-left">*}
{*                <div class="page-title">*}
{*                    <h1>{$tabBord}</h1>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}
{*        <div class="col-sm-8">*}
{*            <div class="page-header float-right">*}
{*                <div class="page-title">*}
{*                    <ol class="breadcrumb text-right">*}
{*                        <li class="active">{$tabBord}</li>*}
{*                    </ol>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}
{*    </div>*}

{*    <div class="content mt-3">*}

{*        <div class="col-sm-12">*}
{*            <div class="alert  alert-success alert-dismissible fade show" role="alert">*}
{*                <span class="badge badge-pill badge-success">Bonjour</span> Sylvain Fillard votre CA en 2020 est de*}
{*                <button type="button" class="close" data-dismiss="alert" aria-label="Close">*}
{*                    <span aria-hidden="true">&times;</span>*}
{*                </button>*}
{*            </div>*}
{*        </div>*}








{*        <div class="col-xl-6">*}
{*            <div class="card">*}
{*                <div class="card-body">*}
{*                    <div class="row">*}
{*                        <div class="col-sm-4">*}
{*                            <h4 class="card-title mb-0">Le chiffre d'affaires des 8 meilleurs clients</h4>*}

{*                        </div>*}
{*                        <!--/.col-->*}
{*                        <div class="col-sm-8 hidden-sm-down">*}
{*                            <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i*}
{*                                        class="fa fa-cloud-download"></i></button>*}
{*                            <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">*}
{*                                <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">*}

{*                                </div>*}
{*                            </div>*}
{*                        </div><!--/.col-->*}


{*                    </div><!--/.row-->*}
{*                    <div class="chart-wrapper mt-4">*}
{*                        <canvas id="trafficChart" style="height:200px;" height="200"></canvas>*}
{*                    </div>*}


{*                </div>*}
{*                <div class="card-footer">*}

{*                    <ul>*}
{*                        <li>*}
{*                            <div class="text-muted">Visits</div>*}
{*                            <strong>29.703 Users (40%)</strong>*}
{*                            <div class="progress progress-xs mt-2" style="height: 5px;">*}
{*                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%;"*}
{*                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>*}
{*                            </div>*}
{*                        </li>*}
{*                        <li class="hidden-sm-down">*}
{*                            <div class="text-muted">Unique</div>*}
{*                            <strong>24.093 Users (20%)</strong>*}
{*                            <div class="progress progress-xs mt-2" style="height: 5px;">*}
{*                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%;"*}
{*                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>*}
{*                            </div>*}
{*                        </li>*}
{*                        <li>*}
{*                            <div class="text-muted">Pageviews</div>*}
{*                            <strong>78.706 Views (60%)</strong>*}
{*                            <div class="progress progress-xs mt-2" style="height: 5px;">*}
{*                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"*}
{*                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>*}
{*                            </div>*}
{*                        </li>*}
{*                        <li class="hidden-sm-down">*}
{*                            <div class="text-muted">New Users</div>*}
{*                            <strong>22.123 Users (80%)</strong>*}
{*                            <div class="progress progress-xs mt-2" style="height: 5px;">*}
{*                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;"*}
{*                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>*}
{*                            </div>*}
{*                        </li>*}
{*                        <li class="hidden-sm-down">*}
{*                            <div class="text-muted">Bounce Rate</div>*}
{*                            <strong>40.15%</strong>*}
{*                            <div class="progress progress-xs mt-2" style="height: 5px;">*}
{*                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40"*}
{*                                     aria-valuemin="0" aria-valuemax="100"></div>*}
{*                            </div>*}
{*                        </li>*}
{*                    </ul>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}


{*        <div class="col-xl-3 col-lg-6">*}
{*            <div class="card">*}
{*                <div class="card-body">*}
{*                    <div class="stat-widget-one">*}
{*                        <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>*}
{*                        <div class="stat-content dib">*}
{*                            <div class="stat-text">Chriffre d'affaires global pour l'année 2020</div>*}
{*                            <div class="stat-digit">1,012</div>*}
{*                        </div>*}
{*                    </div>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}


{*        <div class="col-xl-3 col-lg-6">*}
{*            <div class="card">*}
{*                <div class="card-body">*}
{*                    <div class="stat-widget-one">*}
{*                        <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>*}
{*                        <div class="stat-content dib">*}
{*                            <div class="stat-text">Chriffre d'affaires global pour l'année 2019</div>*}
{*                            <div class="stat-digit">1,012</div>*}
{*                        </div>*}
{*                    </div>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}


{*        <div class="col-xl-3 col-lg-6">*}
{*            <div class="card">*}
{*                <div class="card-body">*}
{*                    <div class="stat-widget-one">*}
{*                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>*}
{*                        <div class="stat-content dib">*}
{*                            <div class="stat-text">Nombre de clients total en 2028</div>*}
{*                            <div class="stat-digit">961</div>*}
{*                        </div>*}
{*                    </div>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}

{*        <div class="col-xl-3 col-lg-6">*}
{*            <div class="card">*}
{*                <div class="card-body">*}
{*                    <div class="stat-widget-one">*}
{*                        <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>*}
{*                        <div class="stat-content dib">*}
{*                            <div class="stat-text">Moyenne de produits par commande</div>*}
{*                            <div class="stat-digit">770 produits</div>*}
{*                        </div>*}
{*                    </div>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}

{*        <div class="col-lg-6">*}
{*            <div class="card">*}
{*                <div class="card-body">*}
{*                    <h4 class="mb-3">Single Bar Chart </h4>*}
{*                    <canvas id="singelBarChart"></canvas>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}
{*        <div class="col-lg-12">*}
{*            <div class="card">*}
{*                <div class="card-body">*}
{*                    <h4 class="mb-3">Doughut Chart </h4>*}
{*                    <canvas id="doughutChart"></canvas>*}

{*                </div>*}
{*            </div>*}
{*        </div>*}


{*            <!-- /# card -->*}
{*        </div>*}


{*    </div> <!-- .content -->*}
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="public/assets/js/plugins.js"></script>
<script src="public/assets/js/main.js"></script>


<script src="public/assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/lib/chart-js/chartjs-init.js"></script>
<script src="public/assets/js/dashboard.js"></script>
<script src="public/assets/js/widgets.js"></script>
<script src="public/assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="public/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="public/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="public/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>
</html>
