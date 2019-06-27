<aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://ui-avatars.com/api/?rounded=true&background=1b2d3b&color=A7B254&name=Pousada+Teste" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <?php if(!Yii::$app->user->isGuest ) : ?>
                <h4><?= Yii::$app->user->identity->nome_fantasia ?></h4>
                <p><?= Yii::$app->user->identity->rp_nome ?></p>
            <?php endif; ?>
          </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Inicio', 'icon' => 'home', 'url' => ['/']],
                    [/// MENU CLIENTES
                        'label' => 'Cadastros',
                        'icon' => 'users',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Cliente', 'icon' => 'angle-right', 'url' => ['/cadastro/cliente'],],
                            ['label' => 'Agente (Guia)', 'icon' => 'angle-right', 'url' => ['/cadastro/agente'],],
                            ['label' => 'Empresa', 'icon' => 'angle-right', 'url' => ['/cadastro/empresa'],]
                        ],
                    ],
                    [/// MENU GESTÃO POUSADA
                        'label' => 'Gestão Pousada',
                        'icon' => 'chart-line',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Monitoramento', 'icon' => 'angle-right', 'url' => ['/gestao-pousada/monitoramento'],],
                            ['label' => 'Estadias', 'icon' => 'angle-right', 'url' => ['/gestao-pousada/estadias'],],
                            ['label' => 'Reservas', 'icon' => 'angle-right', 'url' => ['/gestao-pousada/reservas'],],
                            ['label' => 'Estoque', 'icon' => 'angle-right', 'url' => ['/gestao-pousada/estoque'],],
                            ['label' => 'Serviços', 'icon' => 'angle-right', 'url' => ['/gestao-pousada/servicos'],],
                            ['label' => 'Lembretes', 'icon' => 'angle-right', 'url' => ['/gestao-pousada/lembretes'],],
                            ['label' => 'Relatório', 'icon' => 'angle-right', 'url' => ['/gestao-pousada/relatorios'],]
                        ],
                    ],
                    [/// MENU FINANCEIRO
                        'label' => 'Financeiro',
                        'icon' => 'calculator',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Caixa', 'icon' => 'angle-right', 'url' => ['/financeiro/caixa'],],
                            ['label' => 'Contas a Receber', 'icon' => 'angle-right', 'url' => ['/financeiro/contas-a-receber'],],
                            ['label' => 'Contas a Pagar', 'icon' => 'angle-right', 'url' => ['/financeiro/contas-a-pagar'],]
                        ],
                    ],
                    [/// MENU MEU PLANO
                        'label' => 'Meu Plano',
                        'icon' => 'credit-card',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Saldo', 'icon' => 'angle-right', 'url' => ['/meu-plano/saldo'],],
                            ['label' => 'Ofertas', 'icon' => 'angle-right', 'url' => ['/meu-plano/ofertas'],],
                        ],
                    ],
                    [/// MENU AJUDA
                        'label' => 'Ajuda',
                        'icon' => 'question-circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Meus Chamados', 'icon' => 'angle-right', 'url' => ['/ajuda/meus-chamados'],],
                            ['label' => 'Perguntas Frequentes', 'icon' => 'angle-right', 'url' => ['/ajuda/perguntas-frequentes'],],
                            ['label' => 'Documentação', 'icon' => 'angle-right', 'url' => ['/ajuda/documentacao'],],
                            ['label' => 'Contato', 'icon' => 'angle-right', 'url' => ['/ajuda/contato'],]
                        ],
                    ],
                ],
            ]
        ) ?>

        
      </section>
      <!-- /.sidebar -->
    </aside>