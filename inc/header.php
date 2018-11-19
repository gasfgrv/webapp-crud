<!doctype html>
<html lang="pt_br">
    <head>
        <title>Clientes</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <style>
            body {
                padding-top: 50px;
                padding-botton: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-dark bg-dark container" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed btn btn-dark" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">Clientes</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <div class="row">
                        <li class="dropdown">
                            <a href="<?php echo BASEURL; ?>customers" class="btn btn-dark" role="button" aria-haspopup="true" aria-expanded="false"> Gerenciar Clientes</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo BASEURL; ?>customers/add.php" class="btn btn-dark" role="button" aria-haspopup="true" aria-expanded="false">Novo Cliente</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    
    

    <main class="container">