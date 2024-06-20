<?php
/* Smarty version 4.3.2, created on 2024-06-20 17:51:14
  from 'C:\laragon\www\SP_groupe_3\SP_2\mod_produit\vue\produitListeCommanderVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66746c12a173c4_98702942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba992ebd0a5caaca9be486962a619470d26583ea' => 
    array (
      0 => 'C:\\laragon\\www\\SP_groupe_3\\SP_2\\mod_produit\\vue\\produitListeCommanderVue.tpl',
      1 => 1718905873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_66746c12a173c4_98702942 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="shortcut icon" href="favicon.ico">

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
                        <li class="active">Fiche Commande : Nouvelle</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">



                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong class="card-title">

                                <form action='index.php' method='POST' >
                                    <input type="hidden" name="gestion" value="commande">
                                    <input type="hidden" name="action" value="affiche_panier">
                                    <label> Voir le panier : <input id="aImage" type="image" name="btn_voir_panier"  src='public/images/icones/a16.png'></label>

                                </form>

                            </strong></div>

                        <div class="card-body card-block" >
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">Total HT (en €):</label></div>
                            <div class="col col-md-7"><input class='form-control' type='text' name='f_totalPanier' value='1564' size='3' readonly>
                            </div>

                            <div class="form-group"><br></div>
                            <div class="col col-md-5"><label for="text-input" class=" form-control-label">Quantité d'article(s) dans le panier : </label></div>
                            <div class="col col-md-7"> <input class='form-control' type='text' name='f_quantitePanier' value='50' size='8' readonly>
                                <!--<input class='form-control' type='text' name='f_date_commande' value='' readonly> -->
                            </div>

                        </div>

                    </div>
                    <!-- FIN PANIER -->
                </div>





                <div class="col-md-12">
                    <!-- Liste lignes de commande -->

                    <div class="card-body">
                        <!--<table  class="table table-striped table-bordered">-->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <form method="POST" action="index.php">
                            <tr>

                                <th>Référence</th>
                                <th>Désignation</th>
                                <th>Stock</th>
                                <th>Prix HT</th>
                                <th>Prix Vente</th>
                                <th>Quantité</th>
                                <th class="pos-actions"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProduits']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>

                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produit']->value->getDesignation();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['produit']->value->getStock();?>
</td>
                                    <td>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrixUnitaireHT();?>
">
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrixUnitaireHT();?>
">
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getQuantite();?>
"
                                    </td>
                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4061">
                                        <input type="hidden" name="f_designation" value="BOULE DE GLACE NOIRE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/a16.png'>

                                    </td>
                                    </form>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>


                    </div>
                    <div class="card-body card-block">
                        <div class="col-md-6"> <input type='button' class="btn btn-submit" value='Retour' onclick='location.href = "index.php?gestion=commande"'></div>
                        <div class="col-md-6 "> </div>
                        <br>
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
