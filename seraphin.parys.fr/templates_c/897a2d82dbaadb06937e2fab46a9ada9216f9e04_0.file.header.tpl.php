<?php
/* Smarty version 4.3.2, created on 2024-02-06 11:13:45
  from 'C:\laragon\www\seraphinparysfilrouge\mvc-sp-10\public\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65c21469e36df3_58138356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '897a2d82dbaadb06937e2fab46a9ada9216f9e04' => 
    array (
      0 => 'C:\\laragon\\www\\seraphinparysfilrouge\\mvc-sp-10\\public\\header.tpl',
      1 => 1707218023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c21469e36df3_58138356 (Smarty_Internal_Template $_smarty_tpl) {
?>       <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="public/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="index.php?gestion=authentification&action=deconnecter"><i class="fa fa-power -off"></i><?php echo $_smarty_tpl->tpl_vars['deconnexion']->value;?>
</a>
                        </div>
                    </div>
                        <div class="user-area">
                        Bienvenue <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

                        </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
<?php }
}
