<?php
/* Smarty version 4.3.2, created on 2024-06-18 16:33:30
  from 'C:\laragon\www\SP_groupe_3\SP_2\mod_produit\vue\produitFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6671b6da95d184_55679997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59257f049b255b959deb0df5cc3d033863efd1e0' => 
    array (
      0 => 'C:\\laragon\\www\\SP_groupe_3\\SP_2\\mod_produit\\vue\\produitFicheVue.tpl',
      1 => 1718728407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6671b6da95d184_55679997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\SP_groupe_3\\SP_2\\include\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
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
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="template/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

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
                        <li><a href="index.php?gestion=produit">Produits</a></li>
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

                <div class="col-md-6">

                    <div <?php if (ClientTable::getMessageErreur() != '') {?> class="alert alert-danger" role="alert" <?php }?>>
                        <?php echo ClientTable::getMessageErreur();?>

                    </div>

                    <div <?php if (ClientTable::getMessageSucces() != '') {?> class="alert alert-danger" role="alert" <?php }?>>
                        <?php echo ClientTable::getMessageSucces();?>

                    </div>

                    <div class="card">
                        <div class="card-header"><strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</strong></div>
                        <form action="index.php" method="POST">

                            <!-- PLACER LE FORMULAIRE EN CONSULTATION -->
                            <input type="hidden" name="gestion" value="produit">
                            <input type="hidden" name="action" value=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
>

                            <div class="card-body card-block">
                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                    <div class="form-group">
                                        <label class="form-control-label" for="reference">Code produit : </label>
                                        <input type="text" name="reference" class="form-control" readonly
                                               value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getReference();?>
">
                                    </div>
                                <?php }?>
                                <div class="form-group">
                                    <label class="form-control-label" for="designation">Désignation : </label>
                                    <input type="text" name="designation" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                           value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getDesignation();?>
">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="quantite">Quantite : </label>
                                    <input type="text" name="$quantite" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                           value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getQuantite();?>
">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="descriptif">Déscriptif : </label>
                                    <input type="text" name="descriptif" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                           value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getDescriptif();?>
">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="prixUnitaireHT">Prix unitaire HT : </label>
                                    <input type="text" name="prix_unitaire_HT" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                           value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getPrixUnitaireHT();?>
">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="stock">Stock : </label>
                                    <input type="text" name="stock" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                           value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getStock();?>
">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="poidsPiece">Poids pièce : </label>
                                    <input type="text" name="poids_piece" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>

                                           value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getPoidsPiece();?>
">
                                </div>

                            </div>

                            <div class="card-body card-block">

                                <div class="col-md-6"><input type="button" class="btn btn-submit" value="Retour"
                                                             onclick="location.href='index.php?gestion=produit'">
                                </div>
                                <div class="col-md-6">
                                    <?php if ($_smarty_tpl->tpl_vars['action']->value != "consulter") {?>
                                        <input class="btn btn-submit float-right" type="submit" name="btn_valider"
                                               value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value);?>
">
                                    <?php }?>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
                                                                                                                                                

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
