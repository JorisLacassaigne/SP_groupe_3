<?php
/* Smarty version 4.3.2, created on 2024-08-01 10:35:17
  from 'C:\Users\lilia\PhpstormProjects\SP_groupe_3\SP_2\mod_panier\vue\panierFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ab64e54fc155_67919064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fb864477692610c4e5de02149a0c347a389373b' => 
    array (
      0 => 'C:\\Users\\lilia\\PhpstormProjects\\SP_groupe_3\\SP_2\\mod_panier\\vue\\panierFicheVue.tpl',
      1 => 1722503623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_66ab64e54fc155_67919064 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panier']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['produit']->value['designation'];?>

                                        </td>
                                        <td>
                                            <div class="formulaire">
                                                <label class="formulaire" for="quantitePanier"></label>
                                                <input type="hidden" name="quantitePanier">
                                                <input type="text" name="quantitePanier" class="formulaire" min="0"
                                                       size="5"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['produit']->value['quantitePanier'];?>
">
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['produit']->value['prix'];?>

                                        </td>
                                        <td>
                                            <div class="formulaire">
                                                <label class="formulaire" for="prixVente"></label>
                                                <input type="hidden" name="prixVente">
                                                <input type="text" name="prixVente" class="formulaire" min="0" size="5"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['produit']->value['prixVente'];?>
">
                                            </div>
                                        </td>
                                        <td>
                                            <label class="formulaire" for="totalLigne"></label>
                                            <input type="hidden" name="totalLigne">
                                            <input type="text" name="totalLigne" class="formulaire" readonly size="5"
                                                   value="<?php echo sprintf('%.2f',$_smarty_tpl->tpl_vars['produit']->value['quantitePanier']*$_smarty_tpl->tpl_vars['produit']->value['prixVente']);?>
">
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
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </form>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td name="montantCommande" colspan="3">Montant de la commande :
                                    <input type='text' name='montantCommande'
                                           value="<?php ob_start();
echo $_SESSION['sommeTotalPanier'];
$_prefixVariable1 = ob_get_clean();
echo sprintf('%.2f',$_prefixVariable1);?>
" size='3'
                                           readonly> €
                                </td>
                                <td name="TVA" colspan="3">TVA :
                                    <input type="text" name="montantCommande"
                                           value="<?php ob_start();
echo $_SESSION['sommeTotalPanier'];
$_prefixVariable2 = ob_get_clean();
echo sprintf('%.2f',$_prefixVariable2/5);?>
" size='3'
                                           readonly> €
                                </td>
                                <td name="MargeTotale" colspan="3"> Marge totale :
                                    <input type="text" name="MargeTotale" readonly
                                           value="<?php ob_start();
echo $_SESSION['sommeTotalPanier'];
$_prefixVariable3 = ob_get_clean();
echo sprintf('%.2f',$_prefixVariable3/5*1.357);?>
"
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
