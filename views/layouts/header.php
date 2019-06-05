<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">
      <!-- Logo -->
      <a href="dashboard.html" class="logo">
        <!-- mini logo -->
        <span class="logo-mini"><b>SIS</b><br /><small>POU</small></span>
        <!-- logo regular -->
        <span class="logo-lg"><h2><strong>SIS</strong>POU</h2></span>
      </a>
      
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="pesquisa-reservas">
          <form action="#" method="get" class="sidebar-form col-sm">
            <div class="input-group">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat btn-left"><i class="fa fa-search"></i>
                </button>
              </span>
              <input type="text" name="q" class="form-control" placeholder="Pesquisar reservas...">
            </div>
          </form>
        </div>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Ajuda -->
            <li class="dropdown help-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-life-ring fa-lg"></i>
                <span class="label label-danger"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header text-center">Você não tem chamados pendentes</li>
                <li>
                  <ul class="menu">
                    <li>
                      <a href="#"></a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- Notificações -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-bell fa-lg"></i>
                <span class="label label-danger"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="header text-center">Você não tem notificações</li>
                <li>
                  <ul class="menu">
                    <li>
                      <a href="#"></a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- Usuário -->
            <li class="dropdown account account-menu" role="presentation">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="https://ui-avatars.com/api/?rounded=true&background=1b2d3b&color=fff&name=Pousada+Teste" class="user-image" alt="User Image">
                <span class="hidden-xs">Pousada Teste <small class="fas fa-caret-down icon-perfil-header"></small></span>
              </a>
              <ul class="dropdown-menu content-account-menu">
                <li class="item treeview">
                  <a href="alterar-senha.html">Alterar minha senha</a>
                </li>
                <li class="item">
                  <a href="#" class="isDisabled">Estabelecimentos</a>
                </li>
                <li class="item">
                  <a href="configuracoes.html">Configurações</a>
                </li>
                <li class="item">
                  <a href="login.html">Sair</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
