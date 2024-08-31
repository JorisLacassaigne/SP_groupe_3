<?php
/* Smarty version 4.3.2, created on 2024-08-17 11:09:02
  from 'C:\Users\lilia\PhpstormProjects\SP_groupe_3\SP_2\mod_accueil\vue\AccueilVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66c084ce0de394_03720244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f9cc401a8f235ee8502ef2ef523f99a581212b3' => 
    array (
      0 => 'C:\\Users\\lilia\\PhpstormProjects\\SP_groupe_3\\SP_2\\mod_accueil\\vue\\AccueilVue.tpl',
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
function content_66c084ce0de394_03720244 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title><?php echo $_smarty_tpl->tpl_vars['titrePrincipal']->value;?>
</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>
<body>


<!-- Left Panel -->
<?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- Left Panel -->
<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->

   <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Header-->



<!--- Travail Christine---->

    <h1> EN CONSTRUCTION</h1>
    <p>(Mais vraies stats)</p>





        <div class="animated fadeIn">
            <div class="row">

                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Chiffre d'affaire de l'entreprise</div>
                                    <div class="stat-digit"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tabBord']->value->getStat04();
$_prefixVariable1 = ob_get_clean();
echo sprintf('%.2f',$_prefixVariable1);?>
 €</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Votre chiffre d'affaire</div>
                                        <div class="stat-digit"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tabBord']->value->getStat01();
$_prefixVariable2 = ob_get_clean();
echo sprintf('%.2f',$_prefixVariable2);?>
 €</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Nombre total de clients</div>
                                    <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['tabBord']->value->getStat02();?>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total de produit vendus</div>
                                    <div class="stat-digit"><?php echo $_smarty_tpl->tpl_vars['tabBord']->value->getStat03();?>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3">Le chiffre d'affaires des 5 meilleurs clients</h4>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>



            












            <!-- /# card -->
        </div>


    </div> <!-- .content -->


    <!---- Travail Christine --->




































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
 src="public/assets/js/lib/chart-js/Chart.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/lib/chart-js/chartjs-init.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/dashboard.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/widgets.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/vector-map/jquery.vmap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/vector-map/jquery.vmap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/vector-map/jquery.vmap.sampledata.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/lib/vector-map/country/jquery.vmap.world.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/statsAccueil.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
