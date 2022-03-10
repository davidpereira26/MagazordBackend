<?php
session_start();
include ('init.php');
?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Magazord | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>        
      
        <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
                
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />        

        <style>
        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #ffffff !important;
            color: #fff;
            font-size: 1em;
        }
        </style>
             
                
    </head>

    <body data-layout="horizontal" data-topbar="colored" data-layout-size="boxed">

        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box">
                           <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="https://www.magazord.com.br/wp-content/themes/magazord/image/logo-magazord.svg" alt="" height="50">
                                </span>
                                <span class="logo-lg ">                                   
                                    <img src="https://www.magazord.com.br/wp-content/themes/magazord/image/logo-magazord.svg" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="topnav">

                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">

                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">
                                            <i class="uil-home-alt mr-2"></i> Dashboard
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/search-people">
                                            <i class="mdi mdi-face-outline"></i> Consultar pessoas
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="/search-contact">
                                            <i class="mdi mdi-email-outline"></i> Consultar contatos
                                        </a>
                                    </li>

                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" id="new">
                                            <i class="mdi mdi-pen"></i> Cadastrar contato
                                        </a>
                                    </li>

                                    <li id="time" class="mt-3 text-muted clock" style="margin-left:250px !important;font-size: 15px;"></li>
                                                                
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Contatos de Pessoas</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Nome completo</th>
                                                        <th>CPF</th>
                                                        <th>Tipo</th>
                                                        <th>Descrição</th>
                                                        <th>Editar</th>
                                                        <th>Deletar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $select_contact = mysqli_query($conn, "SELECT * FROM `contato` WHERE 1");
                                                while($select_contact_assoc = mysqli_fetch_assoc($select_contact)){
                                                    $select_pessoa_assoc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `pessoa` WHERE `id`='".$select_contact_assoc['idPessoa']."'"));
                                                    
                                                    if($select_contact_assoc['tipo'] == 0){
                                                        $type = "E-mail";
                                                    }
                                                    else{
                                                        $type = "Telefone";
                                                    }

                                                    echo '
                                                    <tr>
                                                    <td>'.$select_pessoa_assoc['nome'].'</td>

                                                    <td>
                                                        '.$select_pessoa_assoc['cpf'].'
                                                    </td>

                                                    <td>
                                                        '.$type.'
                                                    </td>

                                                    <td>
                                                        '.$select_contact_assoc['descricao'].'
                                                    </td>

                                                    <td>
                                                       <a href="/edit/'.$select_contact_assoc['id'].'" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                           Editar contato
                                                    </a>
                                                    </td>

                                                    <td>
                                                        <a href="/delete/'.$select_contact_assoc['id'].'" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            Excluir contato
                                                    </a>
                                                    </td>
                                                </tr>
                                                    ';
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-0">
                                <div class="text-sm-right d-none d-sm-block">
                                    Magazord - Test Back-end - David Pereira<i class="fa fa-heart text-danger animat ml-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>     
                    
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>        
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/js/pages/dashboard.init.js"></script> 
        <script src="assets/js/app.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script src="assets/js/print-text.js"></script>  
        <style>body {background-color: #22252f !important;}</style>

        <script>
        $("#cpf").mask("000.000.000-00");
        $(document).ready(function(){
            $('#new').click(function(){
                Swal.fire({
                title: '<strong>Cadastro de Contato</strong>',
                icon: 'info',
                html:
                '<form action="./register-contact" method="POST">' +
                '<label>Nome completo: </label><input type="text" name="name" class="form-control"><br>' +
                '<label>CPF: </label><input id="cpf" type="text" name="cpf" class="form-control"><br>' +
                '<input name="_token" type="hidden" value="{{ csrf_token() }}"/>' +
                '<label>Tipo de contato: </label><select name="tipo_contact" class="form-control"><br>' +
                '<option value="0">E-mail</option>' +
                '<option value="1">Telefone</option>' +
                '</select>' +
                '<label>Descrição: </label><textarea name="description" class="form-control"></textarea><br>' +
                '<input type="submit" value="Cadastrar informações" class="form-control"><br>' +
                '</form>' +
                '',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText:
                '<input type="hidden">'
                })
            });
        });
        </script>

        <?php
        if(isset($_SESSION['edit'])){
            $contact_assoc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `contato` WHERE `id`='".$_SESSION['edit']."'"));
            $people_assoc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `pessoa` WHERE `id`='".$contact_assoc['idPessoa']."'"));
        ?>
        <script>
            $("#cpf").mask("000.000.000-00");
            Swal.fire({
            title: '<strong>Editar Contato</strong>',
            icon: 'info',
            html:
            '<form action="./edit-save" method="POST">' +
            '<label>Nome completo: </label><input type="text" name="name" value="<?php echo $people_assoc['nome'];?>" class="form-control"><br>' +
            '<label>CPF: </label><input id="cpf" type="text" name="cpf" value="<?php echo $people_assoc['cpf'];?>" class="form-control"><br>' +
            '<input type="hidden" name="idContact" value="<?php echo $_SESSION['edit'];?>">' +
            '<input name="_token" type="hidden" value="{{ csrf_token() }}"/>' +
            '<label>Tipo de contato: </label><select name="tipo_contact" class="form-control"><br>' +
            '<option value="0">E-mail</option>' +
            '<option value="1">Telefone</option>' +
            '</select>' +
            '<label>Descrição: </label><textarea name="description" class="form-control"><?php echo $contact_assoc['descricao'];?></textarea><br>' +
            '<input type="submit" value="Cadastrar informações" class="form-control"><br>' +
            '</form>' +
            '',
            showCloseButton: true,
            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText:
            '<input type="hidden">'
            })
        </script>
        <?php
        unset($_SESSION['edit']);
        }
        ?>

        <?php
        if(isset($_SESSION['insert_success'])){
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Cadastro concluído!',
                text: 'Seu cadastro foi concluído com sucesso.'
            })
        </script>
        <?php
        unset($_SESSION['insert_success']);
        }
        ?>

        <?php
        if(isset($_SESSION['delete_success'])){
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'O Contato foi deletado.',
                text: 'O contato foi deletado com sucesso!'
            })
        </script>
        <?php
        unset($_SESSION['delete_success']);
        }
        ?>

        <?php
        if(isset($_SESSION['update_success'])){
        ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Atualização efetuada com sucesso!',
                text: 'Seus dados foram atualizados com sucesso.'
            })
        </script>
        <?php
        unset($_SESSION['update_success']);
        }
        ?>

        <?php
        if(isset($_SESSION['insert_failed'])){
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro interno!',
                text: 'Houve um erro interno, tente novamente mais tarde!'
            })
        </script>
        <?php
        unset($_SESSION['insert_failed']);
        }
        ?>

</body>

</html>