<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->

        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '首页', 'url' => '#'],
                    [
                        'label' => '数据处理',
                        'items' => [
                            [
                                'label' => '数据集成',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'HDFS数据源', 'url' => '#'],
                                    ['label' => 'KAFKA数据源', 'url' => '#'],
                                ],
                            ],
                            [
                                'label' => 'ETL',
                                'url' => '#',
                                'items' => [
                                    ['label' => '模型', 'url' => '#'],
                                    ['label' => 'SQL', 'url' => '#'],
                                    ['label' => 'HDFS数据加载', 'url' => '#'],
                                    ['label' => 'HIVE数据加载', 'url' => '#'],
                                    ['label' => 'MYSQL数据加载', 'url' => '#'],
                                    ['label' => '日志下载', 'url' => '#'],
                                ],
                            ],
                            [
                                'label' => '统计',
                                'url' => '#',
                                'items' => [
                                    ['label' => '模型', 'url' => '#'],
                                    ['label' => 'MYSQL', 'url' => '#'],
                                    ['label' => 'HIVE&SPARK-SQL', 'url' => '#'],
                                ],
                            ],
                            [
                                'label' => '自定义',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'HADOOP-STREAMING', 'url' => '#'],
                                    ['label' => '自定义脚本', 'url' => '#'],
                                ],
                            ],
                            ['label' => '工作流', 'url' => '#'],
                        ],
                    ],
                    [
                        'label' => '在线查询',
                        'url' => '#',
                        'items' => [
                            ['label' => 'HIVE在线查询-SQL', 'url' => '#'],
                            ['label' => 'HIVE在线查询-配置', 'url' => '#'],
                            ['label' => 'GREENPLUM在线查询', 'url' => '#'],
                            ['label' => 'MYSQL在线查询', 'url' => '#'],
                        ],
                    ],
                    [
                        'label' => '系统管理',
                        'url' => '#',
                        'items' => [
                            ['label' => 'HIVE库', 'url' => '#'],
                            ['label' => '资源队列', 'url' => '#'],
                            ['label' => '业务管理', 'url' => '#'],
                            ['label' => '集群信息', 'url' => '#'],
                            ['label' => '数据库实例', 'url' => '#'],
                            ['label' => '黑名单', 'url' => '#'],
                            ['label' => '短信报警组', 'url' => '#'],
                        ],
                    ],
                    [
                        'label' => '权限',
                        'url' => '#',
                        'items' => [
                            ['label' => '用户', 'url' => '#'],
                            ['label' => '角色', 'url' => '#'],
                            ['label' => '用户角色', 'url' => '#'],
                            ['label' => '操作记录', 'url' => '#'],
                            ['label' => '切换账号', 'url' => '#'],
                        ],
                    ],
                    [
                        'label' => '调度',
                        'url' => '#',
                        'items' => [
                            ['label' => '任务设置列表', 'url' => '#'],
                            ['label' => '任务运行情况', 'url' => '#'],
                            ['label' => '调度服务状态', 'url' => '#'],
                        ],
                    ],
                    [
                        'label' => '工具',
                        'url' => '#',
                        'items' => [
                            ['label' => '查找任务', 'url' => '#'],
                            ['label' => 'HDFS数据删除', 'url' => '#'],
                            ['label' => 'MYSQL数据备份', 'url' => '#'],
                        ],
                    ],

                    // ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    // ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    // [
                    //     'label' => 'Same tools',
                    //     'icon' => 'share',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                    //         ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                    //         [
                    //             'label' => 'Level One',
                    //             'icon' => 'circle-o',
                    //             'url' => '#',
                    //             'items' => [
                    //                 ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                    //                 [
                    //                     'label' => 'Level Two',
                    //                     'icon' => 'circle-o',
                    //                     'url' => '#',
                    //                     'items' => [
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                     ],
                    //                 ],
                    //             ],
                    //         ],
                    //     ],
                    // ],
                ],
            ]
        ) ?>

    </section>

</aside>
