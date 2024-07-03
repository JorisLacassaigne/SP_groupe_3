<?php
/* Smarty version 4.3.2, created on 2024-07-03 08:29:38
  from 'C:\laragon\www\SP_groupe_3\SP_2\mod_profil\vue\profilListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66850bf267f7d9_92021091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c16aa4a58873b46a15a111af12d4854f4c14512' => 
    array (
      0 => 'C:\\laragon\\www\\SP_groupe_3\\SP_2\\mod_profil\\vue\\profilListeVue.tpl',
      1 => 1719326056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_66850bf267f7d9_92021091 (Smarty_Internal_Template $_smarty_tpl) {
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
    <meta http-equiv="X-UA-Compatible" content=<?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['titrePrincipal']->value;?>
</title>
    <meta name="description" content="<!-- PLACER LE TITRE-->">
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
                    <h1><!-- PLACER LE SLOGAN--></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <!-- PLACER LE FIL D'ARIANE -->
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=profil">Profil</a></li>
                        <li class="active"><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
        <div class="animated fadeIn">

            <div>

                <div class="col-md-6">

                    <div <?php if (ProfilTable::getMessageErreur() != '') {?> class="alert alert-danger" role="alert" <?php }?>>
                        <?php echo ProfilTable::getMessageErreur();?>

                    </div>
                    <div <?php if (ProfilTable::getMessageSucces() != '') {?> class="alert alert-success" role="alert" <?php }?>>
                        <?php echo ProfilTable::getMessageSucces();?>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>

                                <!-- PLACER LE FORMULAIRE D'AJOUT-->

                            </strong>
                        </div>

                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <form method="POST" action="index.php">
                                    <input type="hidden" name="gestion" value="profil">
                                    <input type="hidden" name="login" value=<?php echo $_smarty_tpl->tpl_vars['profil']->value->getLogin();?>
>
                                    <input type="hidden" name="motdepasse" value=<?php echo $_smarty_tpl->tpl_vars['profil']->value->getMotdepasse();?>
>
                                    <input type="hidden" name="action" value="modifier">
                                    <input type="hidden" name="codev" value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getCodev();?>
">

                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label class="form-control-label" for="codev"><strong>Code
                                                    vendeur : </strong><?php echo $_smarty_tpl->tpl_vars['profil']->value->getCodev();?>
</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="prenom" value=<?php echo $_smarty_tpl->tpl_vars['profil']->value->getPrenom();?>
>
                                            <label class="form-control-label"
                                                   for="prenom"><strong>Prénom : </strong><?php echo $_smarty_tpl->tpl_vars['profil']->value->getPrenom();?>

                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="nom" value=<?php echo $_smarty_tpl->tpl_vars['profil']->value->getNom();?>
>
                                            <label class="form-control-label"
                                                   for="nom"><strong>Nom : </strong><?php echo $_smarty_tpl->tpl_vars['profil']->value->getNom();?>
</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                   for="adresse"><strong>Adresse :</strong></label>
                                            <input type="text" name="adresse" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getAdresse();?>
">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="cp"><strong>Code
                                                    postal :</strong></label>
                                            <input type="text" name="cp" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getCp();?>
">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                   for="ville"><strong>Ville :</strong></label>
                                            <input type="text" name="ville" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getVille();?>
">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label"
                                                   for="telephone"><strong>Téléphone :</strong></label>
                                            <input type="tel" name="telephone" class="form-control"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getTelephone();?>
">
                                        </div>

                                        <div class="pos-actions">

                                            <input class="btn btn-submit float-right" type="submit"
                                                   name="btn_modifier"
                                                   value="Modifier">
                                        </div>
                                    </div>
                                </form>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header"><strong>Statistiques</strong></div>
                    <div class="card-body">
                        <div class="form-group"><strong>Total des ventes : </strong><?php echo $_smarty_tpl->tpl_vars['profil']->value->getstv01();?>
 €</div>
                    </div>
                </div>
                <div>
                    <form method="POST" action="index.php">
                        <input type="hidden" name="gestion" value="profil">
                        <input type="hidden" name="action" value="valider">
                        <input type="hidden" name="codev" value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getCodev();?>
">
                        <div class="card">
                            <div class="card-header"><strong>Changer de mot de passe</strong></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="hidden" name="login" value=<?php echo $_smarty_tpl->tpl_vars['profil']->value->getLogin();?>
>
                                    <label class="form-control-label" for="login"><strong>Login
                                            vendeur : </strong><?php echo $_smarty_tpl->tpl_vars['profil']->value->getLogin();?>
</label>

                                </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="motdepasse"><strong>Nouveau mot de
                                                passe :</strong></label>
                                        <input type="password" name="motdepasse" class="form-control"
                                               value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="confirmation"><strong>Confirmer mot de
                                                passe :</strong></label>
                                        <input type="password" name="confirmation" class="form-control"
                                               value="">
                                    </div>

                                    <div class="pos-actions">

                                        <input class="btn btn-submit float-right" type="submit" name="valider"
                                               value="Changer">
                            </div>
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>


</div>
<!- .animated -->

</div>
<!-- .content -->


</div><!-- /#right-panel -->


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
</html><?php }
}
