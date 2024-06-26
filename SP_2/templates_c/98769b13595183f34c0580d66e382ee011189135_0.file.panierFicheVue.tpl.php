<?php
/* Smarty version 4.3.2, created on 2024-06-26 10:52:09
  from 'C:\laragon\www\SP_groupe_3\SP_2\mod_panier\vue\panierFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667bf2d9711a71_85201246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98769b13595183f34c0580d66e382ee011189135' => 
    array (
      0 => 'C:\\laragon\\www\\SP_groupe_3\\SP_2\\mod_panier\\vue\\panierFicheVue.tpl',
      1 => 1719399129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_667bf2d9711a71_85201246 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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


    <div <?php if (PanierTable::getMessageSucces() != '') {?> class="alert-success" role="alert" <?php }?>>
        <?php echo PanierTable::getMessageSucces();?>

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
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panier']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['designation'];?>
</td>
                                    <td>
                                        <div class="formulaire">
                                            <label class="formulaire" for="quantite"></label>
                                            <input type="hidden" name="produits[<?php echo '<?'; ?>
= $produit['reference'] <?php echo '?>'; ?>
][quantite]" value="<?php echo '<?'; ?>
= $produit['quantite'] <?php echo '?>'; ?>
">
                                            <input type="number" name="quantite" class="formulaire" min="0"
                                                   value="<?php echo '<?php'; ?>
 echo isset($produit['quantite']) ? $produit['quantite'] : ''; <?php echo '?>'; ?>
">

                                        </div>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produit']->value['prix'];?>
</td>
                                    <td>
                                        <div class="formulaire">
                                            <label class="formulaire" for="prixVente"></label>
                                            <input type="hidden" name="produits[<?php echo '<?'; ?>
= $produit['reference'] <?php echo '?>'; ?>
][prixVente]" value="<?php echo '<?'; ?>
= $produit['prixVente'] <?php echo '?>'; ?>
">
                                            <input type="number" name="prixVente" class="formulaire" min="0"
                                                   value="<?php echo '<?php'; ?>
 echo isset($produit['prixVente']) ? $produit['prixVente'] : ''; <?php echo '?>'; ?>
">

                                        </div>
                                    </td>
                                    <td>Total</td>
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
                                        </form>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3">Montant de la commande : <strong><?php echo $_smarty_tpl->tpl_vars['produit']->value->getStat01();?>
 €</strong></td>
                                <td colspan="3">Total TVA : <strong><?php echo $_smarty_tpl->tpl_vars['produit']->value->getStat02();?>
 €</strong></td>
                                <td colspan="3">Marge brute : <strong><?php echo $_smarty_tpl->tpl_vars['produit']->value->getStat03();?>
 €</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="card-body card-block">

                    <div class="col-md-6"><input type="button" class="btn btn-submit" value="Retour à la commande"
                                                 onclick="location.href='index.php?gestion=produit&action=lister_produits'">
                    </div>
                    <div class="col-md-6"><input type="button" class="btn btn-submit" value="Sauvegarder"
                                                 onclick="location.href='index.php?gestion=panier&action=panierSauvegarder'">
                    </div>
                </div>

            </div>
            <!- .animated -->
        </div>
        <!-- .content -->


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
