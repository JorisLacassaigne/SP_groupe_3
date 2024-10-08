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
                            <form>
                                {foreach from=$panier item=$produit}
                                    <tr>
                                        <td>
                                            {$produit['reference']}
                                        </td>
                                        <td>
                                            {$produit['designation']}
                                        </td>
                                        <td>
                                            <div class="formulaire">
                                                <label class="formulaire" for="quantitePanier"></label>
                                                <input type="hidden" name="quantitePanier">
                                                <input type="text" name="quantitePanier" class="formulaire" min="0"
                                                       size="5"
                                                       value="{$produit['quantitePanier']}">
                                            </div>
                                        </td>
                                        <td>
                                            {$produit['prix']}
                                        </td>
                                        <td>
                                            <div class="formulaire">
                                                <label class="formulaire" for="prixVente"></label>
                                                <input type="hidden" name="prixVente">
                                                <input type="text" name="prixVente" class="formulaire" min="0" size="5"
                                                       value="{$produit['prixVente']}">
                                            </div>
                                        </td>
                                        <td>
                                            <label class="formulaire" for="totalLigne"></label>
                                            <input type="hidden" name="totalLigne">
                                            <input type="text" name="totalLigne" class="formulaire" readonly size="5"
                                                   value="{sprintf('%.2f', $produit['quantitePanier'] * $produit['prixVente'])}">
                                            €
                                        </td>

                                        <td class="pos-actions">
                                            <form method="POST" action="index.php">
                                                <input type="hidden" name="gestion" value="panier">
                                                <input type="hidden" name="action" value="form_modifier">
                                                <input type="image" name="btn_modifier"
                                                       src="public/images/icones/m32.png">
                                            </form>
                                        </td>
                                        <td class="pos-actions">
                                            <form method="POST" action="index.php">
                                                <input type="hidden" name="gestion" value="panier">
                                                <input type="hidden" name="action" value="form_supprimer">
                                                <input type="image" name="btn_supprimer"
                                                       src="public/images/icones/s32.png">
                                        </td>
                                    </tr>
                                {/foreach}
                            </form>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td name="montantCommande" colspan="3">Montant de la commande :
                                    <input type='text' name='montantCommande'
                                           value="{sprintf('%.2f', {$smarty.session.sommeTotalPanier})}" size='3'
                                           readonly> €
                                </td>
                                <td name="TVA" colspan="3">TVA :
                                    <input type="text" name="montantCommande"
                                           value="{sprintf('%.2f', {$smarty.session.sommeTotalPanier} / 5 )}" size='3'
                                           readonly> €
                                </td>
                                <td name="MargeTotale" colspan="3"> Marge totale :
                                    <input type="text" name="MargeTotale" readonly
                                           value="{sprintf('%.2f', {$smarty.session.sommeTotalPanier} / 5 * 1.357)}"
                                           size='3' readonly> €
                                </td>

                            </tr>
                            </tfoot>
                            </form>
                        </table>
                    </div>
                </div>

                <div class="card-body card-block">

                    <div class="col-md-6"><input type="button" class="btn btn-submit" value="Retour à la commande"
                                                 onclick="location.href='index.php?gestion=produit&action=listerProduits'">
                    </div>
                    <div class="col-md-6"><input type="button" class="btn btn-submit pos-btn-action" value="Sauvegarder"
                                                 onclick="location.href='index.php?gestion=panier&action=panierSauvegarder'">
                    </div>
                </div>

            </div>
            <!- .animated -->
        </div>
    </div>
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
