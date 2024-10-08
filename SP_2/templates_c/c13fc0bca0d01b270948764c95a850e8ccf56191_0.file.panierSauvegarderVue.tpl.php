<?php
/* Smarty version 4.3.2, created on 2024-09-19 09:48:21
  from 'C:\Users\lilia\PhpstormProjects\SP_groupe_3\SP_2\mod_panier\vue\panierSauvegarderVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ebf365690e87_48078454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c13fc0bca0d01b270948764c95a850e8ccf56191' => 
    array (
      0 => 'C:\\Users\\lilia\\PhpstormProjects\\SP_groupe_3\\SP_2\\mod_panier\\vue\\panierSauvegarderVue.tpl',
      1 => 1726739294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_66ebf365690e87_48078454 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- <link rel="stylesheet" href="public/assets/css/bootstrap-select.less"> -->
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

                <div <?php if (PanierTable::getMessageErreur() != '') {?> class="alert alert-danger" role="alert" <?php }?>>
                    <?php echo PanierTable::getMessageErreur();?>

                </div>

                <form class="pos-ajout" method="POST" action="index.php">

                    <input type="hidden" name="gestion" value="panier">
                    <input type="hidden" name="action" value="sauvegarder">
                    <?php $_smarty_tpl->_assignInScope('getDateCommande', date("Y-m-d"));?>
                    <?php $_smarty_tpl->_assignInScope('getDateLivraison', date("Y-m-d",strtotime("+7 days")));?>

                                                            

                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Fiche Commande : Enregistrement</strong></div>


                                <div class="card-body card-block">
                                    <div class="col-md-5"><label for="text-input" class="form-control-label">Date de
                                            commande :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='date' name='dateCommande'
                                                                 readonly
                                                                 value='<?php echo $_smarty_tpl->tpl_vars['getDateCommande']->value;?>
'><br></div>


                                    <div class="col-md-5">
                                        Client :
                                    </div>
                                    <div class="col-md-7">
                                        <select name="comboClient" class="form-control">
                                            <option value="" class="form-control option" selected>--- Choisir ---
                                            </option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['npc']->value, 'nom');
$_smarty_tpl->tpl_vars['nom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
"
                                                        class="form-control option"><?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <br>
                                    </div>

                                    <div class="col-md-5">
                                        Vendeur :
                                    </div>

                                    <div class="col-md-7">
                                        <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>État de la commande</strong></div>
                                <div class="card-body card-block">
                                    <div class="row">
                                        <div class="col-md-5"><label for="text-input" class="form-control-label">Date de
                                                livraison :</label></div>
                                        <div class="col-md-7"><input class='form-control' type='date'
                                                                     name='dateLivraison'
                                                                     value='<?php echo $_smarty_tpl->tpl_vars['getDateLivraison']->value;?>
'><br>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5"><label for="text-input" class="form-control-label">Total
                                                HT (en €) :</label></div>
                                        <div class="col-md-7"><input class='form-control' type='number' name='totalHT'
                                                                     value='<?php ob_start();
echo $_SESSION['sommeTotalPanier'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_SESSION['sommeTotalPanier'];
$_prefixVariable2 = ob_get_clean();
echo sprintf('%.2f',$_prefixVariable1-$_prefixVariable2/5);?>
'
                                                                     size='3' readonly><br></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5"><label for="text-input" class="form-control-label">TVA (en
                                                €) :</label></div>
                                        <div class="col-md-7"><input class='form-control' type='number' name='totalTVA'
                                                                     value='<?php ob_start();
echo $_SESSION['sommeTotalPanier'];
$_prefixVariable3 = ob_get_clean();
echo sprintf('%.2f',$_prefixVariable3/5);?>
'
                                                                     size='3' readonly></div>
                                    </div>
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
                            <th>Prix</th>
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
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['produit']->value['reference'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['produit']->value['designation'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['produit']->value['quantitePanier'];?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['produit']->value['quantitePanier']*$_smarty_tpl->tpl_vars['produit']->value['prixVente'];?>

                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td name="montantCommande" colspan="3">Montant de la commande :
                                <input type='number' name='montantCommande'
                                       value="<?php ob_start();
echo $_SESSION['sommeTotalPanier'];
$_prefixVariable4 = ob_get_clean();
echo sprintf('%.2f',$_prefixVariable4);?>
" size='3'
                                       readonly> €
                            </td>
                        <tr>
                    </table>


                </div>
                <div class="card-body card-block">
                    <div class="col-md-6"><input type='button' class="btn btn-submit" value='Retour'
                                                 onclick='location.href = "index.php?gestion=panier"'></div>
                    <div class="col-md-6 "><input type="submit" id="f_btn-action"
                                                  class="btn btn-submit pos-btn-action" value="Valider"
                                                  onclick='location.href = "index.php?accueil"'></div>
                    <br>
                </div>

            </div>
            </form>
        </div>
    </div>

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
