<?php
/* Smarty version 4.3.2, created on 2024-02-08 08:43:36
  from 'C:\laragon\www\seraphinparysfilrouge\mvc-sp-11\public\left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65c4943864bd14_96291888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '225cf0099cf2c6ecd033d26f753baed754058025' => 
    array (
      0 => 'C:\\laragon\\www\\seraphinparysfilrouge\\mvc-sp-11\\public\\left.tpl',
      1 => 1707214699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c4943864bd14_96291888 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <a href="left.tpl"></a>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Services</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="index.php?gestion=service">Liste</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="index.php?gestion=service&action=form_ajouter">Nouveau</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel --><?php }
}
