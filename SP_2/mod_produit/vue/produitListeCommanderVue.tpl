<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$titrePage}</title>
    <meta name="description" content="{$titrePage}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="public/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

{include file='public/left.tpl'}

<!-- FIN : Left Panel -->



<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    {include file='public/header.tpl'}

    <!-- FIN : header -->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{$titrePrincipal}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=commande">Commandes</a></li>
                        <li class="active">Fiche Commande : Nouvelle</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">



                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong class="card-title">

                                <form action='index.php' method='POST' >
                                    <input type="hidden" name="gestion" value="commande">
                                    <input type="hidden" name="action" value="affiche_panier">
                                    <label> Voir le panier : <input id="aImage" type="image" name="btn_voir_panier"  src='public/images/icones/a16.png'></label>

                                </form>

                            </strong></div>

                        <div class="card-body card-block" >
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">Total HT (en €):</label></div>
                            <div class="col col-md-7"><input class='form-control' type='text' name='f_totalPanier' value='1564' size='3' readonly>
                            </div>

                            <div class="form-group"><br></div>
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">Quantité d'article(s) dans le panier : </label></div>
                            <div class="col col-md-7"> <input class='form-control' type='text' name='f_quantitePanier' value='50' size='8' readonly>
                                <!--<input class='form-control' type='text' name='f_date_commande' value='' readonly> -->
                            </div>

                        </div>

                    </div>
                    <!-- FIN PANIER -->
                </div>





                <div class="col-md-12">
                    <!-- Liste lignes de commande -->

                    <div class="card-body">
                        <!--<table  class="table table-striped table-bordered">-->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <form method="POST" action="index.php">
                            <tr>

                                <th>Référence</th>
                                <th>Désignation</th>
                                <th>Stock</th>
                                <th>Prix HT</th>
                                <th>Prix Vente</th>
                                <th>Quantité</th>
                                <th class="pos-actions"></th>

                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$listeProduits item=produit}

                                <tr>
                                    <td>{$produit->getReference()}</td>
                                    <td>{$produit->getDesignation()}</td>
                                    <td>{$produit->getStock()}</td>
                                    <td>
                                        <input type="text" value="{$produit->getPrixUnitaireHT()}">
                                    </td>
                                    <td>
                                        <input type="text" value="{$produit->getPrixUnitaireHT()}">
                                    </td>
                                    <td>
                                        <input type="text" value="{$produit->getQuantite()}"
                                    </td>
                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4061">
                                        <input type="hidden" name="f_designation" value="BOULE DE GLACE NOIRE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/a16.png'>

                                    </td>
                                    </form>
                                </tr>
                            {/foreach}
                            </tbody>
                        </table>


                    </div>
                    <div class="card-body card-block">
                        <div class="col-md-6"> <input type='button' class="btn btn-submit" value='Retour' onclick='location.href = "index.php?gestion=commande"'></div>
                        <div class="col-md-6 "> </div>
                        <br>
                    </div>

                </div>


            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
        <script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="public/assets/js/plugins.js"></script>
        <script src="public/assets/js/main.js"></script>


        <script src="public/assets/js/lib/data-table/datatables.min.js"></script>
        <script src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="public/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="public/assets/js/lib/data-table/jszip.min.js"></script>
        <script src="public/assets/js/lib/data-table/pdfmake.min.js"></script>
        <script src="public/assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="public/assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="public/assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="public/assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="public/assets/js/lib/data-table/datatables-init.js"></script>


        <script type="text/javascript">
            $(document).ready(function () {
                $('#bootstrap-data-table-export').DataTable();
            });
        </script>

</body>
</html>
