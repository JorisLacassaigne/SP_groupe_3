<?php
/* Smarty version 4.3.2, created on 2024-08-01 10:33:13
  from 'C:\Users\lilia\PhpstormProjects\SP_groupe_3\SP_2\public\left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66ab64694c8fb4_75085540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c6d5020ab005bf74f5a5189acf435d7ed3c80b9' => 
    array (
      0 => 'C:\\Users\\lilia\\PhpstormProjects\\SP_groupe_3\\SP_2\\public\\left.tpl',
      1 => 1720162705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ab64694c8fb4_75085540 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <a href="left.tpl"></a>
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php"><?php echo $_smarty_tpl->tpl_vars['titrePrincipal']->value;?>
</a>
            <a class="navbar-brand hidden" href="index.php">SP</a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Accueil </a>
                </li>
                <h3 class="menu-title">ADMINISTRATION</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Clients</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="index.php?gestion=client">Liste</a></li>
                        <li><i class="fa fa-id-badge"></i><a
                                    href="index.php?gestion=client&action=form_ajouter">Nouveau</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Produits</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="index.php?gestion=produit">Liste</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="index.php?gestion=profil"> <i class="menu-icon fa fa-th"></i>Mon profil</a>
                </li>

                <h3 class="menu-title">COMMANDES</h3>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="menu-icon fa fa-tasks" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Historique</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="index.php?gestion=commande">Toutes les commandes</a>
                        </li>
                        <li><i class="fa fa-table"></i><a href="#">Commandes non Validées</a></li>
                        <li><i class="fa fa-table"></i><a href="#">Commandes annulées</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="index.php?gestion=produit&action=listerProduits"></i>Passer une commande</a>
                </li>
                <li class=" dropdown">
                    <a href="index.php?gestion=authentification&action=viderPanier"> <i class="menu-icon ti-trash"></i>Vider le panier en cours</a>
                </li>

                                                            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel --><?php }
}
