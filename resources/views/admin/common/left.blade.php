  <?php

    $menu[] = ['title' => '订单', 'icon' => 'fa-dashboard',
        'child' => [
                ['title' => '查看订单', 'url' => '/hx/admin/m86OrderList', 'icon' => 'fa-circle-o'],
        ],
    ];
      $menu[] = ['title' => '商品服务', 'icon' => 'fa-dashboard',
          'child' => [
              ['title' => '查看服务', 'url' => '/hx/admin/serviceList', 'icon' => 'fa-circle-o'],
              ['title' => '添加服务', 'url' => '/hx/admin/addService', 'icon' => 'fa-circle-o'],
              ['title' => '查看规格', 'url' => '/hx/admin/specList', 'icon' => 'fa-circle-o'],
              ['title' => '查看栏目', 'url' => '/hx/admin/cateList', 'icon' => 'fa-circle-o'],
          ],
      ];

    $menu[] = [
        'title' =>  '后台用户',
        'icon'  =>  'fa-files-o',
        'child' =>  [
            ['title' => '用户', 'url' => '/hx/admin/getAdminUserList', 'icon' => 'fa-circle-o']
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