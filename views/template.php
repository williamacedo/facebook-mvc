<!DOCTYPE html>
<html>
	<head>
		<title>Rede Social </title>
		<!--Atribuindo o Link para o Arquivo de Estilo (style.css) -->
		<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>/assets/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>/assets/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE; ?>/assets/js/scripts.js"></script>
	</head>
	<body>
            <nav class="navbar navbar-inverse">
        <div class="container">
            <div id="navbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="<?php echo BASE; ?>">Rede Social</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">
                            <?php echo $viewData['usuario_nome']; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASE; ?>perfil">Editar Perfil</a></li>
                            <li><a href="<?php echo BASE; ?>login/sair">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!--Carrega as informações do loadViewInTemplate -->
		<?php $this->loadViewInTemplate($viewName, $viewData);?>
    </div>
	</body>
</html>