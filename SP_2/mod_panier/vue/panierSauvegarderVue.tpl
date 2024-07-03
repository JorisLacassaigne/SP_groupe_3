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
    <title>Panier</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

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

    <!-- FIN Header-->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Séraphin PARYS</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=panier">Panier</a></li>
                        <li class="active">Sauvegarder le panier</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">


                <form class="pos-ajout" method="POST" action="index.php">

                    <input type="hidden" name="gestion" value="panier">
                    <input type="hidden" name="action" value="sauvegarder">
                    {*                    <input type="hidden" name="codev" value="{$panier->getCodev()}">*}
                    {*                    <input type="hidden" name="prenom" value="{$panier->getPrenom()}">*}
                    {*                    <input type="hidden" name="nom" value="{$panier->getnom()}">*}


                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Fiche Commande : Enregistrement</strong></div>


                                <div class="card-body card-block">

                                    <div class="col-md-5"><label for="text-input" class=" form-control-label">Date de
                                            commande :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='date' name='f_date_commande'
                                                                 value='AAAAAAAAAAAAA' >
                                        <br></div>


                                    <div class="col-md-5">
                                        Client :
                                    </div>
                                    <div class="col-md-7">
                                        <select name="comboClient" class="form-control">
                                            <option value=" - " class="form-control option" selected> --- Choisir ---
                                            </option>
                                            {foreach from=$npc item=$nom}
                                                <option value="1"
                                                        class="form-control option">{$nom}</option>
                                            {/foreach}
                                        </select>


                                        <br>
                                    </div>

                                    <div class="col-md-5">
                                        Vendeur :
                                    </div>

                                    <div class="col-md-7">
                                        {$login}
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header"><strong>État de la commande</strong></div>
                                <div class="card-body card-block">

                                    <div class="col-md-5"><label for="text-input" class=" form-control-label">Date de
                                            livraison :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='date'
                                                                 name='f_date_livraison' value='AAAAAAAAAAAAAAAA'>
                                        <br>
                                    </div>

                                    <div class="col-md-5"><label for="text-input" class=" form-control-label">Total HT
                                            (en €) :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='text'
                                                                 name='f_montantCommande'
                                                                 value='{sprintf('%.2f', {$smarty.session.sommeTotalPanier} - {$smarty.session.sommeTotalPanier} / 5 )}'
                                                                 size='3'
                                                                 readonly>
                                        <br></div>

                                    <div class="col-md-5"><label for="text-input" class=" form-control-label">TVA (en €)
                                            :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='text' name='f_tva'
                                                                 value='{sprintf('%.2f', {$smarty.session.sommeTotalPanier} / 5 )}'
                                                                 size='3' readonly>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="col-md-12">
                        <!-- Liste lignes de commande -->
                        <div class="card-body">


                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Référence</th>
                                    <th>Désignation</th>
                                    <th>Quantité</th>
                                    <th>prix</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$panier item=$produit}
                                    <tr>
                                        <td>
                                            {$produit['reference']}
                                        </td>
                                        <td>
                                            {$produit['designation']}
                                        </td>
                                        <td>
                                            {$produit['quantitePanier']}
                                        </td>
                                        <td>
                                            {$produit['prixVente']}
                                        </td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>


                        </div>
                        <div class="card-body card-block">
                            <div class="col-md-6"><input type='button' class="btn btn-submit" value='Retour'
                                                         onclick='location.href = "index.php?gestion=panier"'></div>
                            <div class="col-md-6 "><input type="submit" id="f_btn-action"
                                                          class="btn btn-submit pos-btn-action" value="Valider"></div>
                            <br>
                        </div>

                    </div>
                </form>
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
