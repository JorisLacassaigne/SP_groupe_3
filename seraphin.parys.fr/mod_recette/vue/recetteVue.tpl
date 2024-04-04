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
    <meta http-equiv="X-UA-Compatible" content={$titrePage}>
    <title>{$titrePrincipal}</title>
    <meta name="description" content="<!-- PLACER LE TITRE-->">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
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

    <!-- FIN : header -->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><!-- PLACER LE SLOGAN--></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <!-- PLACER LE FIL D'ARIANE -->
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=produit">Produits</a></li>
                        <li class="active">{$titrePage}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-6">

{*                                        <div {if ProfilTable::getMessageErreur() neq ''} class="alert alert-danger" role="alert" {/if}>*}
{*                                            {ProfilTable::getMessageErreur()}*}
{*                                        </div>*}
{*                                        <div {if ProfilTable::getMessageSucces() neq ''} class="alert-success" role="alert" {/if}>*}
{*                                            {ProfilTable::getMessageSucces()}*}
{*                                        </div>*}

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{$titrePage}
                                <!-- PLACER LE FORMULAIRE D'AJOUT-->

                            </strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <form method="POST" action="index.php">
                                    <input type="hidden" name="gestion" value="profil">
                                    <input type="hidden" name="action" value="modifier">

                            </table>
                        </div>
                        <div class="row">
                            <div class="card-body">
                                <table id="bootstrap-data-table"
                                       class="table table-striped table-bordered">
                                    <!-- PLACER LA LISTE DES CLIENTS -->
                                    <thead>
                                    <tr>
                                        <th>Liste ingrédients :</th>
                                        <th>Quantité en litres, grammes ou piece :</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    {foreach from=$uneRecette item=ingredient}
                                        <tr>
                                            <td>{$ingredient->getDesignation()}</td>
                                            <td>{$ingredient->getquantite()}</td>
                                        </tr>
                                    {/foreach}
                                    <label class="form-control-label" for="produit"><strong>Code produit : </strong> {$ingredient->getProduit()}</label>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        </form>


                        <div class="col-md-6"><input type="button" class="btn btn-submit" value="Retour"
                                                     onclick="location.href='index.php?gestion=produit'">
                        </div>
                        <div class="col-md-12">
                            <input class="btn btn-submit float-right" type="button" name="btn_telecharger"
                                   value="Télécharger" onclick="window.location.href='mod_recette/recettes_a_telecharger/recetteTest.pdf'">
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>


</div>
<!- .animated -->

</div>
<!-- .content -->


</div><!-- /#right-panel -->


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