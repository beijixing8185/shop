  <?php

    $menu[] = ['title' => '订单', 'icon' => 'fa-dashboard',
        'child' => [
                ['title' => '查看订单', 'url' => '/hx/admin/orderList', 'icon' => 'fa-circle-o'],
        ],
    ];
      $menu[] = ['title' => '商品服务', 'icon' => 'fa-dashboard',
          'child' => [
              ['title' => '查看服务', 'url' => '/hx/admin/serviceList', 'icon' => 'fa-circle-o'],
              ['title' => '添加服务', 'url' => '/hx/admin/addService', 'icon' => 'fa-circle-o'],
              ['title' => '查看规格', 'url' => '/hx/admin/specList', 'icon' => 'fa-circle-o'],
              ['title' => '查看分类', 'url' => '/hx/admin/cateList', 'icon' => 'fa-circle-o'],
              ['title' => '添加分类', 'url' => '/hx/admin/addCates', 'icon' => 'fa-circle-o'],
          ],
      ];
      $menu[] = ['title' => '商品案例', 'icon' => 'fa-dashboard',
          'child' => [
              ['title' => '查看案例', 'url' => '/hx/admin/caseList', 'icon' => 'fa-circle-o'],
              ['title' => '添加案例', 'url' => '/hx/admin/addCase', 'icon' => 'fa-circle-o'],
          ],
      ];
      $menu[] = ['title' => '发布文章', 'icon' => 'fa-dashboard',
          'child' => [
              ['title' => '分类列表', 'url' => '/hx/admin/cateArticleList', 'icon' => 'fa-circle-o'],
              ['title' => '添加分类', 'url' => '/hx/admin/addArticleCates', 'icon' => 'fa-circle-o'],
              ['title' => '文章列表', 'url' => '/hx/admin/articleList', 'icon' => 'fa-circle-o'],
              ['title' => '添加文章', 'url' => '/hx/admin/addArticle', 'icon' => 'fa-circle-o'],
          ],
      ];
      $menu[] = ['title' => '关于我们', 'icon' => 'fa-dashboard',
          'child' => [
              ['title' => '查看列表', 'url' => '/hx/admin/aboutList', 'icon' => 'fa-circle-o'],
              ['title' => '添加关于', 'url' => '/hx/admin/addAbout', 'icon' => 'fa-circle-o'],
          ],
      ];
  $menu[] = ['title' => '关于链接', 'icon' => 'fa-dashboard',
      'child' => [
          ['title' => '查看列表', 'url' => '/hx/admin/linkList', 'icon' => 'fa-circle-o'],
          ['title' => '添加链接', 'url' => '/hx/admin/addLink', 'icon' => 'fa-circle-o'],
      ],
  ];
      $menu[] = ['title' => 'banner图', 'icon' => 'fa-dashboard',
          'child' => [
              ['title' => '图库列表', 'url' => '/hx/admin/bannerList', 'icon' => 'fa-circle-o'],
              ['title' => '添加banner', 'url' => '/hx/admin/addBanner', 'icon' => 'fa-circle-o'],
          ],
      ];
      $menu[] = [
          'title' =>  '用户会员',
          'icon'  =>  'fa-files-o',
          'child' =>  [
              ['title' => '用户列表', 'url' => '/hx/admin/getUserList', 'icon' => 'fa-circle-o']
          ]
      ];

    $menu[] = [
        'title' =>  '后台管理员',
        'icon'  =>  'fa-files-o',
        'child' =>  [
            ['title' => '管理员', 'url' => '/hx/admin/getAdminUserList', 'icon' => 'fa-circle-o']
        ]
    ];

  ?>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        @foreach($menu as $k => $v)
          <li class="treeview">
            <a href="#">
              <i class="fa {{$v['icon']}}"></i> <span>{{$v['title']}}</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu ">
              @foreach($v['child'] as $vv)
                <li class="liClass ">
                  <a href="{{$vv['url']}}"><i class="fa {{$vv['icon']}}"></i> {{$vv['title']}}</a>
                </li>
              @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
    </section>
  </aside>
  <script type="text/javascript">
    var pathname = window.location.pathname;
    var list = $('.treeview-menu .liClass');

    for(var i = 0; i < list.length; i++) {
      if(list.find('a').eq(i).attr('href') == pathname){
        list.eq(i).addClass('active');
        list.eq(i).parent().parent().parent();
        list.eq(i).parent().parent().first('.treeview').addClass('active menu-open');
      }
    }
  </script>