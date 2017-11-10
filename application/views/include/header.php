<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        
        <title>Task</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into+Light">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Slabo+27px">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" >
        <!--  Bulletin Board Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into+Light"     >
        
        <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/flavored-reset-and-normalize.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/paper.css'); ?>" />     
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/kanban.css'); ?>" />     
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/task.css'); ?>" />     
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/cork.css'); ?>" />
        
    </head>
    <body>

        <div id="sidebar" style="overflow-y: auto; margin-left: -210px;">

            <!-- sidebar menu start-->
            <div id="nav-icon-close" class="custom-toggle">
                <span></span>
                <span></span>
            </div>

            <ul class="sidebar-menu">		

                

                <li class="">
                    <a class="task-create" href="#searchTaskModal" data-toggle="modal">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>Search</span>
                    </a>
                </li>
                
                <li class="">
                    <a class="" href="http://localhost/main/users/logout">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>

        <div class="main-content animation">
            <div class="topbar">
                <nav class="navbar navbar-custom">
                    <div id="nav-icon-open" class="custom-toggle hidden-toggle" style="display: block;">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a class="navbar-brand" href="<?= base_url(); ?>">Task</a>

                    <div class="navbar-brand ml-auto text-right" >
                        <!-- <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> -->
                        <a href="#" data-toggle="popover" data-placement="bottom"  data-content="<?= $email ?>" data-trigger="hover" style="padding-bottom: 10px;">
                            <img class="img-fluid w-25 mr-auto" src="<?= 'http://localhost/main/assets/img/avatar/'.$user_id.'.png' ?>" alt="😁">
                        </a>
                    </div>

                </nav>
            </div>
            