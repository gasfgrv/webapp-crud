<?php require_once 'config.php'; ?>
<?php require_once DBAPI;?>

<?php include(HEADER); ?>
<?php $db = open_db(); ?>

<h1>Dashboard</h1>
<hr>

<?php if ($db) : ?>
	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="clientes/add.php" class="btn btn-primary">
				<i class="fa fa-plus fa-5x"></i>
				<p>Novo Cliente</p>
			</a>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="clientes" class="btn btn-default">
				<i class="fa fa-user fa-5x"></i>
				<p>Clientes</p>
			</a>
		</div>
	</div>
<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>
<?php endif; ?>

<?php include(FOOTER); ?>