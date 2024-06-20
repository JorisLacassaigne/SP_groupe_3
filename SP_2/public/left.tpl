<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <a href="left.tpl"></a>
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php">{$titrePrincipal}</a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon ti-bag"></i>Passer une commande</a>
                </li>
                <li class=" dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon ti-trash"></i>Vider le panier en cours</a>
                </li>
                <li class=" dropdown">
                    <a href="index.php?gestion=panier">Panier (temporaire)</a>
                </li>

                {*                    <li class="dropdown">*}
                {*                        <a href="#A VOUS D'ECRIRE LE LIEN" > <i class="menu-icon fa fa-th"></i>Mon profil</a>*}
                {*                    </li>*}
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->