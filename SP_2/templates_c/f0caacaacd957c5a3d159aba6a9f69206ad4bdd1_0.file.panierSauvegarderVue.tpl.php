<?php
/* Smarty version 4.3.2, created on 2024-06-26 10:45:38
  from 'C:\laragon\www\SP_groupe_3\SP_2\mod_panier\vue\panierSauvegarderVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667bf152492639_27542311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0caacaacd957c5a3d159aba6a9f69206ad4bdd1' => 
    array (
      0 => 'C:\\laragon\\www\\SP_groupe_3\\SP_2\\mod_panier\\vue\\panierSauvegarderVue.tpl',
      1 => 1719398738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_667bf152492639_27542311 (Smarty_Internal_Template $_smarty_tpl) {
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


                <form class="pos-ajout" method="POST" action="index.php">

                    <input type="hidden" name="gestion" value="panier">
                    <input type="hidden" name="action" value="sauvegarder">
                    <input type="hidden" name="codev" value="<?php echo $_smarty_tpl->tpl_vars['panier']->value->getCodev();?>
">
                    <input type="hidden" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['panier']->value->getPrenom();?>
">
                    <input type="hidden" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['panier']->value->getnom();?>
">


                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Fiche Commande : Enregistrement</strong></div>


                                <div class="card-body card-block">

                                    <div class="col-md-5"><label for="text-input" class=" form-control-label">Date de
                                            commande :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='date' name='f_date_commande'
                                                                 value='2024-06-27' readonly>
                                        <br></div>


                                    <div class="col-md-5">
                                        Client :
                                    </div>
                                    <div class="col-md-7">
                                        <select name="comboClient" class="form-control">
                                            <option value=" - " class="form-control option" selected> --- Choisir ---
                                            </option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['npc']->value, 'nom');
$_smarty_tpl->tpl_vars['nom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nom']->value) {
$_smarty_tpl->tpl_vars['nom']->do_else = false;
?>
                                                <option value="1"
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
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header"><strong>État de la commande</strong></div>
                                <div class="card-body card-block">

                                    <div class="col-md-5"><label for="text-input" class=" form-control-label">Date de
                                            livraison :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='date'
                                                                 name='f_date_livraison' value='2024-07-04'>
                                        <br>
                                    </div>

                                    <div class="col-md-5"><label for="text-input" class=" form-control-label">Total HT
                                            (en €) :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='text'
                                                                 name='f_montantCommande' value='<?php echo $_smarty_tpl->tpl_vars['panier']->value->getStat01();?>
'
                                                                 size='3'
                                                                 readonly>
                                        <br></div>

                                    <div class="col-md-5"><label for="text-input" class=" form-control-label">TVA (en €)
                                            :</label></div>
                                    <div class="col-md-7"><input class='form-control' type='text' name='f_tva'
                                                                 value='<?php echo $_smarty_tpl->tpl_vars['panier']->value->getStat02();?>
' size='3' readonly>
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
                                    <th>N° Ligne</th>
                                    <th>Référence</th>
                                    <th>Désignation</th>
                                    <th>Quantité</th>
                                    <th>prix</th>


                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['panier']->value->getReference();?>
</td>
                                    <td>
                                        <a href="index.php?gestion=produit&action=formConsulter&pop=1&f_reference=1004"><?php echo $_smarty_tpl->tpl_vars['panier']->value->getDesignation();?>
</a>
                                    </td>
                                    <td>Quantité</td>
                                    <td>Total</td>

                                </tr>

                                </tbody>
                            </table>


                        </div>
                        <div class="card-body card-block">
                            <div class="col-md-6"><input type='button' class="btn btn-submit" value='Retour'
                                                         onclick='location.href = "index.php?gestion=panier"'></div>
                            <div class="col-md-6 "><input type="submit" id="f_btn-action"
                                                          class="btn btn-submit pos-btn-action" value="Valider"></div>
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
