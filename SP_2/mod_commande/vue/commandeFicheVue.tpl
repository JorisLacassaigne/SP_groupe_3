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

{*    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>*}

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
                        <li class="active">{$titrePage}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <form action="index.php" method="POST">

                    <!-- PLACER LE FORMULAIRE EN CONSULTATION -->

                    <input type="hidden" name="gestion"  value="commande" >
                    <input type="hidden" name="action"  value="{$action}" >

                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div {if CommandeTable::getMessageErreur() neq ''} class="alert alert-danger" role="alert" {/if}>
                                {CommandeTable::getMessageErreur()}
                            </div>
                            <div class="card">
                                <div class="card-header"><strong>{$titrePage}</strong></div>

                                <div class="card-body card-block" >

                                    <div class="form-group">
                                        <label class="form-control-label" for="numero">Numéro commande : </label>
                                        <input type="text" name="numero" class="form-control" {$readonly}
                                               value="{$uneCommande["commande"]->getNumero()}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="nom">Vendeur : </label>
                                        <input type="text" name="nom" class="form-control" {$readonly}
                                               value="{$uneCommande["vendeur"]->getPrenom()} {$uneCommande["vendeur"]->getNom()}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="codec">Code client : </label>
                                        <input type="text" name="codec" class="form-control" {$readonly}
                                               value="{$uneCommande["client"]->getCodec()}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="prenom">Client : </label>
                                        <input type="text" name="prenom" class="form-control" {$readonly}
                                               value="{$uneCommande["client"]->getNom()} {$uneCommande["client"]->getPrenom()}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header"><strong>Etat de la commande</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class="form-control-label" for="numero">Date de commande : </label>
                                        <input type="text" name="numero" class="form-control" {$readonly}
                                               value="{$uneCommande["commande"]->getDateCommande()}">
                                    </div><div class="form-group">
                                        <label class="form-control-label" for="numero">Date de livraison : </label>
                                        <input type="text" name="numero" class="form-control" {$readonly}
                                               value="{$uneCommande["commande"]->getDateLivraison()}">
                                    </div><div class="form-group">
                                        <label class="form-control-label" for="numero">Total HT : </label>
                                        <input type="text" name="numero" class="form-control" {$readonly}
                                               value="{$uneCommande["commande"]->getTotalHT()}">
{*                                    </div><div class="form-group">*}
{*                                        <label class="form-control-label" for="numero">Commande Validée : </label>*}
{*                                        <input type="text" name="numero" class="form-control" {$readonly}*}
{*                                               value="{$uneCommande["commande"]->getEtat()}">*}
{*                                    </div>*}
                                </div>
                            </div>
                        </div>



                    </div>












                    <div class="col-md-12">
                        <!-- Liste lignes de commande -->

                        <div class="card-body">
                            <table  class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>N° Ligne</th>
                                    <th>Référence</th>
                                    <th>Désignation</th>
                                    <th>Quantité</th>
                                    <th>prix</th>
                                    <!--<th class="pos-actions">Consulter</th>
                                    <th class="pos-actions">Modifier</th>
                                    <th class="pos-actions">Supprimer</th>-->

                                </tr>
                                </thead>
                                <tr>
                                    <td colspan="3"> Montant de la commande : 226.62 € </td>
                                    <td colspan="2"> Total TVA : 45.32 €</td>
                                </tr>
                                </tbody>
                            </table>


                        </div>
                        <div class="card-body card-block">
                            <div class="col-md-6"> <input type='button' class="btn btn-submit" value='Retour' onclick='location.href = "index.php?gestion=commande"'></div>
                            <div class="col-md-6 "> </div>
                            <br>
                        </div>

                    </div>
                </form>

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
