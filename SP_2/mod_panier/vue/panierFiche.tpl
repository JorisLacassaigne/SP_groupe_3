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
    <!-- <link rel="stylesheet" href="template/assets/css/bootstrap-select.less"> -->
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
                        <li class="active">Panier</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div {if PanierTable::getMessageSucces() neq ''} class="alert-success" role="alert" {/if}>
        {PanierTable::getMessageSucces()}
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-12">

                    <div class="card-body">
                        <table id="" class="table table-striped table-bordered">
                            <!-- PLACER LA LISTE DES CLIENTS -->
                            <thead>
                            <tr>
                                <th>N° Ligne</th>
                                <th>Référence</th>
                                <th>Désignation</th>
                                <th>Quantité</th>
                                <th>Prix HT</th>
                                <th>Prix Vente</th>
                                <th>Total</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$panier item=$produit}
                                <tr>
                                    <td>1</td>
                                    <td>{$produit['reference']}</td>
                                    <td>{$produit['designation']}</td>
                                    <td>
                                        <div class="formulaire">
                                            <label class="formulaire" for="quantite"></label>
                                            <input type="text" name="quantite" class="formulaire"
                                                   value="{$produit['quantite']}">
                                        </div>
                                    </td>
                                    <td>{$produit['prixUnitaireHT']}</td>
                                    <td>
                                        <div class="formulaire">
                                            <label class="formulaire" for="prixVente"></label>
                                            <input type="text" name="prixVente" class="formulaire"
                                                   value="Prix de vente">
                                        </div>
                                    </td>
                                    <td>Total</td>
                                    {**}
                                    <td class="pos-actions">
                                        <form method="POST" action="index.php">
                                            <input type="hidden" name="gestion" value="panier">
                                            <input type="hidden" name="action" value="form_modifier">
                                            {*                                                <input type="hidden" name="codec" value="{$panier->getCodec()}">*}
                                            <input type="image" name="btn_modifier"
                                                   src="public/images/icones/m32.png">
                                        </form>
                                    </td>
                                    <td class="pos-actions">
                                        <form method="POST" action="index.php">
                                            <input type="hidden" name="gestion" value="panier">
                                            <input type="hidden" name="action" value="form_supprimer">
                                            {*                                                <input type="hidden" name="codec" value="{$panier->getCodec()}">*}
                                            <input type="image" name="btn_supprimer"
                                                   src="public/images/icones/s32.png">
                                        </form>
                                    </td>
                                </tr>
                            {/foreach}
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3">Montant de la commande : <strong>{$produit->getStat01()} €</strong></td>
                                <td colspan="3">Total TVA : <strong>{$produit->getStat02()} €</strong></td>
                                <td colspan="3">Marche brute : <strong>{$produit->getStat03()} €</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="card-body card-block">

                    <div class="col-md-6"><input type="button" class="btn btn-submit" value="Retour à la commande"
                                                 onclick="location.href='index.php?accueil'">
                    </div>
                    <div class="col-md-6"><input type="button" class="btn btn-submit" value="Sauvegarder"
                                                 onclick="location.href='index.php?accueil'">
                    </div>
                </div>

            </div>
            <!- .animated -->
        </div>
        <!-- .content -->


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
