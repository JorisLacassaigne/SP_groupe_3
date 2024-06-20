<?php
/* Smarty version 4.3.2, created on 2024-06-20 16:18:01
  from 'C:\laragon\www\SP_groupe_3\SP_2\mod_commande\vue\commandeFicheNouvelleVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_667456396eee58_66486334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4906cb4470a7ef047f57b3349da930b2e694499' => 
    array (
      0 => 'C:\\laragon\\www\\SP_groupe_3\\SP_2\\mod_commande\\vue\\commandeFicheNouvelleVue.tpl',
      1 => 1718895021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_667456396eee58_66486334 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    <label> Voir le panier : <input id="aImage" type="image" name="btn_voir_panier"  src='public/images/icones/voir16.png'></label>

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

                            <tr>
                                <form method="POST" action="index.php">


                                    <td>1004</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=1004" target="_blank">FEU DE JOIE LIQUEUR ASSORT.</a></td>
                                    <td>49</td>
                                    <td>23
                                        <input type="hidden" name="f_prixUnitaire" value="23" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='31.28' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="1004">
                                        <input type="hidden" name="f_designation" value="FEU DE JOIE LIQUEUR ASSORT.">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>1007</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=1007" target="_blank">TENDRE FRUIT</a></td>
                                    <td>120</td>
                                    <td>18
                                        <input type="hidden" name="f_prixUnitaire" value="18" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='24.48' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="1007">
                                        <input type="hidden" name="f_designation" value="TENDRE FRUIT">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>1015</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=1015" target="_blank">CARACAO</a></td>
                                    <td>50</td>
                                    <td>24.5
                                        <input type="hidden" name="f_prixUnitaire" value="24.5" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='33.32' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="1015">
                                        <input type="hidden" name="f_designation" value="CARACAO">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>1016</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=1016" target="_blank">COKTAIL</a></td>
                                    <td>40</td>
                                    <td>33
                                        <input type="hidden" name="f_prixUnitaire" value="33" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='44.88' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="1016">
                                        <input type="hidden" name="f_designation" value="COKTAIL">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>1017</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=1017" target="_blank">ORFIN</a></td>
                                    <td>40</td>
                                    <td>32
                                        <input type="hidden" name="f_prixUnitaire" value="32" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='43.52' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="1017">
                                        <input type="hidden" name="f_designation" value="ORFIN">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>3002</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=3002" target="_blank">CARRE PECTO</a></td>
                                    <td>40</td>
                                    <td>29
                                        <input type="hidden" name="f_prixUnitaire" value="29" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='39.44' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="3002">
                                        <input type="hidden" name="f_designation" value="CARRE PECTO">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>3004</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=3004" target="_blank">ZAN ALESAN</a></td>
                                    <td>50</td>
                                    <td>15
                                        <input type="hidden" name="f_prixUnitaire" value="15" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='20.4' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="3004">
                                        <input type="hidden" name="f_designation" value="ZAN ALESAN">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>3010</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=3010" target="_blank">PATES GRISES</a></td>
                                    <td>100</td>
                                    <td>35
                                        <input type="hidden" name="f_prixUnitaire" value="35" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='47.6' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="3010">
                                        <input type="hidden" name="f_designation" value="PATES GRISES">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>3016</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=3016" target="_blank">CARAMEL AU LAIT</a></td>
                                    <td>100</td>
                                    <td>20
                                        <input type="hidden" name="f_prixUnitaire" value="20" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='27.2' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="3016">
                                        <input type="hidden" name="f_designation" value="CARAMEL AU LAIT">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>3017</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=3017" target="_blank">VIOLETTE TRADITION</a></td>
                                    <td>100</td>
                                    <td>25
                                        <input type="hidden" name="f_prixUnitaire" value="25" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='34' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="3017">
                                        <input type="hidden" name="f_designation" value="VIOLETTE TRADITION">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4002</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4002" target="_blank">SUCETTE BOULE FRUIT</a></td>
                                    <td>100</td>
                                    <td>14
                                        <input type="hidden" name="f_prixUnitaire" value="14" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='19.04' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4002">
                                        <input type="hidden" name="f_designation" value="SUCETTE BOULE FRUIT">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4004</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4004" target="_blank">SUCETTE BOULE POP</a></td>
                                    <td>50</td>
                                    <td>21
                                        <input type="hidden" name="f_prixUnitaire" value="21" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='28.56' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4004">
                                        <input type="hidden" name="f_designation" value="SUCETTE BOULE POP">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4010</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4010" target="_blank">CARAMBAR</a></td>
                                    <td>20</td>
                                    <td>18
                                        <input type="hidden" name="f_prixUnitaire" value="18" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='24.48' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4010">
                                        <input type="hidden" name="f_designation" value="CARAMBAR">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4011</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4011" target="_blank">CARANOUGA</a></td>
                                    <td>100</td>
                                    <td>18
                                        <input type="hidden" name="f_prixUnitaire" value="18" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='24.48' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4011">
                                        <input type="hidden" name="f_designation" value="CARANOUGA">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4012</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4012" target="_blank">CARAMBAR FRUIT</a></td>
                                    <td>100</td>
                                    <td>19.5
                                        <input type="hidden" name="f_prixUnitaire" value="19.5" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='26.52' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4012">
                                        <input type="hidden" name="f_designation" value="CARAMBAR FRUIT">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4013</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4013" target="_blank">CARAMBAR COLA</a></td>
                                    <td>50</td>
                                    <td>18
                                        <input type="hidden" name="f_prixUnitaire" value="18" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='24.48' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4013">
                                        <input type="hidden" name="f_designation" value="CARAMBAR COLA">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4015</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4015" target="_blank">SOURIS REGLISSE</a></td>
                                    <td>50</td>
                                    <td>24
                                        <input type="hidden" name="f_prixUnitaire" value="24" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='32.64' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4015">
                                        <input type="hidden" name="f_designation" value="SOURIS REGLISSE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4016</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4016" target="_blank">SOURIS CHOCO</a></td>
                                    <td>50</td>
                                    <td>24
                                        <input type="hidden" name="f_prixUnitaire" value="24" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='32.64' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4016">
                                        <input type="hidden" name="f_designation" value="SOURIS CHOCO">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4019</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4019" target="_blank">SCHTROUMPFS VERTS</a></td>
                                    <td>50</td>
                                    <td>24
                                        <input type="hidden" name="f_prixUnitaire" value="24" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='32.64' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4019">
                                        <input type="hidden" name="f_designation" value="SCHTROUMPFS VERTS">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4020</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4020" target="_blank">CROCODILE</a></td>
                                    <td>50</td>
                                    <td>21
                                        <input type="hidden" name="f_prixUnitaire" value="21" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='28.56' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4020">
                                        <input type="hidden" name="f_designation" value="CROCODILE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4022</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4022" target="_blank">PERSICA</a></td>
                                    <td>20</td>
                                    <td>28
                                        <input type="hidden" name="f_prixUnitaire" value="28" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='38.08' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4022">
                                        <input type="hidden" name="f_designation" value="PERSICA">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4025</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4025" target="_blank">COLA CITRIQUE</a></td>
                                    <td>50</td>
                                    <td>21
                                        <input type="hidden" name="f_prixUnitaire" value="21" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='28.56' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4025">
                                        <input type="hidden" name="f_designation" value="COLA CITRIQUE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4026</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4026" target="_blank">COLA LISSE</a></td>
                                    <td>50</td>
                                    <td>25
                                        <input type="hidden" name="f_prixUnitaire" value="25" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='34' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4026">
                                        <input type="hidden" name="f_designation" value="COLA LISSE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4027</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4027" target="_blank">BANANE</a></td>
                                    <td>20</td>
                                    <td>23
                                        <input type="hidden" name="f_prixUnitaire" value="23" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='31.28' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4027">
                                        <input type="hidden" name="f_designation" value="BANANE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4029</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4029" target="_blank">OEUF SUR LE PLAT</a></td>
                                    <td>20</td>
                                    <td>25
                                        <input type="hidden" name="f_prixUnitaire" value="25" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='34' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4029">
                                        <input type="hidden" name="f_designation" value="OEUF SUR LE PLAT">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4030</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4030" target="_blank">FRAISIBUS</a></td>
                                    <td>50</td>
                                    <td>25
                                        <input type="hidden" name="f_prixUnitaire" value="25" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='34' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4030">
                                        <input type="hidden" name="f_designation" value="FRAISIBUS">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4031</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4031" target="_blank">FRAISE TSOIN-TSOIN</a></td>
                                    <td>40</td>
                                    <td>25
                                        <input type="hidden" name="f_prixUnitaire" value="25" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='34' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4031">
                                        <input type="hidden" name="f_designation" value="FRAISE TSOIN-TSOIN">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4032</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4032" target="_blank">METRE REGLISSE ROULE</a></td>
                                    <td>50</td>
                                    <td>19
                                        <input type="hidden" name="f_prixUnitaire" value="19" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='25.84' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4032">
                                        <input type="hidden" name="f_designation" value="METRE REGLISSE ROULE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4033</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4033" target="_blank">MAXI COCOBAT</a></td>
                                    <td>20</td>
                                    <td>19
                                        <input type="hidden" name="f_prixUnitaire" value="19" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='25.84' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4033">
                                        <input type="hidden" name="f_designation" value="MAXI COCOBAT">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4034</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4034" target="_blank">DENTS VAMPIRE</a></td>
                                    <td>50</td>
                                    <td>22
                                        <input type="hidden" name="f_prixUnitaire" value="22" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='29.92' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4034">
                                        <input type="hidden" name="f_designation" value="DENTS VAMPIRE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4036</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4036" target="_blank">LANGUE COLA CITRIQUE</a></td>
                                    <td>40</td>
                                    <td>21
                                        <input type="hidden" name="f_prixUnitaire" value="21" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='28.56' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4036">
                                        <input type="hidden" name="f_designation" value="LANGUE COLA CITRIQUE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4037</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4037" target="_blank">OURSON CANDI</a></td>
                                    <td>50</td>
                                    <td>21
                                        <input type="hidden" name="f_prixUnitaire" value="21" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='28.56' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4037">
                                        <input type="hidden" name="f_designation" value="OURSON CANDI">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4039</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4039" target="_blank">SERPENT ACIDULE</a></td>
                                    <td>20</td>
                                    <td>21
                                        <input type="hidden" name="f_prixUnitaire" value="21" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='28.56' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4039">
                                        <input type="hidden" name="f_designation" value="SERPENT ACIDULE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4042</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4042" target="_blank">TETINE CANDI</a></td>
                                    <td>40</td>
                                    <td>20
                                        <input type="hidden" name="f_prixUnitaire" value="20" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='27.2' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4042">
                                        <input type="hidden" name="f_designation" value="TETINE CANDI">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4045</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4045" target="_blank">COLLIER PECCOS</a></td>
                                    <td>50</td>
                                    <td>21
                                        <input type="hidden" name="f_prixUnitaire" value="21" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='28.56' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4045">
                                        <input type="hidden" name="f_designation" value="COLLIER PECCOS">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4052</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4052" target="_blank">TWIST ASSORTIS</a></td>
                                    <td>50</td>
                                    <td>22
                                        <input type="hidden" name="f_prixUnitaire" value="22" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='29.92' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4052">
                                        <input type="hidden" name="f_designation" value="TWIST ASSORTIS">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4053</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4053" target="_blank">OURSON GUIMAUVE</a></td>
                                    <td>10</td>
                                    <td>35
                                        <input type="hidden" name="f_prixUnitaire" value="35" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='47.6' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4053">
                                        <input type="hidden" name="f_designation" value="OURSON GUIMAUVE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4054</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4054" target="_blank">BOULE COCO MULER</a></td>
                                    <td>10</td>
                                    <td>34
                                        <input type="hidden" name="f_prixUnitaire" value="34" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='46.24' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4054">
                                        <input type="hidden" name="f_designation" value="BOULE COCO MULER">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4055</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4055" target="_blank">COCOMALLOW</a></td>
                                    <td>10</td>
                                    <td>33
                                        <input type="hidden" name="f_prixUnitaire" value="33" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='44.88' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4055">
                                        <input type="hidden" name="f_designation" value="COCOMALLOW">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4057</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4057" target="_blank">CRIC-CRAC</a></td>
                                    <td>10</td>
                                    <td>33
                                        <input type="hidden" name="f_prixUnitaire" value="33" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='44.88' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4057">
                                        <input type="hidden" name="f_designation" value="CRIC-CRAC">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4059</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4059" target="_blank">Zan au Fraises du mali</a></td>
                                    <td>120</td>
                                    <td>12
                                        <input type="hidden" name="f_prixUnitaire" value="12" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='16.32' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4059">
                                        <input type="hidden" name="f_designation" value="Zan au Fraises du mali">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form method="POST" action="index.php">


                                    <td>4061</td>
                                    <td><a href="index.php?gestion=produit&action=form_consulter&pop=1&f_reference=4061" target="_blank">BOULE DE GLACE NOIRE</a></td>
                                    <td>120</td>
                                    <td>3
                                        <input type="hidden" name="f_prixUnitaire" value="3" >
                                    </td>

                                    <td>
                                        <input type='text' name='f_prixVente' value='4.08' size='5'>

                                    </td>
                                    <td>
                                        <input type='text' name='f_quantite' value='' size='5'>

                                    </td>

                                    <td class="pos-actions">

                                        <input type="hidden" name="gestion" value="commande">
                                        <input type="hidden" name="action" value="ajout_panier">
                                        <input type="hidden" name="f_reference" value="4061">
                                        <input type="hidden" name="f_designation" value="BOULE DE GLACE NOIRE">


                                        <input id="pImage" type="image" name="btn_ajouter_panier" src='public/images/icones/cmdvert16.png'>

                                    </td>
                                </form>
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
