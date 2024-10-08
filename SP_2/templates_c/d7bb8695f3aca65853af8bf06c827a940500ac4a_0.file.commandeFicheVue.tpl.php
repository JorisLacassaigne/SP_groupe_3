<?php
/* Smarty version 4.3.2, created on 2024-08-17 11:41:58
  from 'C:\Users\lilia\PhpstormProjects\SP_groupe_3\SP_2\mod_commande\vue\commandeFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c08c8692c054_43691452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7bb8695f3aca65853af8bf06c827a940500ac4a' => 
    array (
      0 => 'C:\\Users\\lilia\\PhpstormProjects\\SP_groupe_3\\SP_2\\mod_commande\\vue\\commandeFicheVue.tpl',
      1 => 1720162703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_66c08c8692c054_43691452 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
">
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


</head>
<body>


<!-- Left Panel -->

<?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- FIN : header -->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><?php echo $_smarty_tpl->tpl_vars['titrePrincipal']->value;?>
</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=commande">Commandes</a></li>
                        <li class="active"><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</li>
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
                    <input type="hidden" name="action"  value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >

                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div <?php if (CommandeTable::getMessageErreur() != '') {?> class="alert alert-danger" role="alert" <?php }?>>
                                <?php echo CommandeTable::getMessageErreur();?>

                            </div>
                            <div class="card">
                                <div class="card-header"><strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</strong></div>

                                <div class="card-body card-block" >

                                    <div class="form-group">
                                        <label class="form-control-label" for="numero">Numéro commande : </label>
                                        <input type="text" name="numero" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                               value="<?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["commande"]->getNumero();?>
">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="nom">Vendeur : </label>
                                        <input type="text" name="nom" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                               value="<?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["vendeur"]->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["vendeur"]->getNom();?>
">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="codec">Code client : </label>
                                        <input type="text" name="codec" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                               value="<?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["client"]->getCodec();?>
">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="prenom">Client : </label>
                                        <input type="text" name="prenom" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                               value="<?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["client"]->getNom();?>
 <?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["client"]->getPrenom();?>
">
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
                                        <input type="text" name="numero" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                               value="<?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["commande"]->getDateCommande();?>
">
                                    </div><div class="form-group">
                                        <label class="form-control-label" for="numero">Date de livraison : </label>
                                        <input type="text" name="numero" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                               value="<?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["commande"]->getDateLivraison();?>
">
                                    </div><div class="form-group">
                                        <label class="form-control-label" for="numero">Total HT : </label>
                                        <input type="text" name="numero" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                               value="<?php echo $_smarty_tpl->tpl_vars['uneCommande']->value["commande"]->getTotalHT();?>
">
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
        <?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/jszip.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/pdfmake.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/vfs_fonts.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.html5.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.print.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.colVis.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables-init.js"><?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function () {
                $('#bootstrap-data-table-export').DataTable();
            });
        <?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
