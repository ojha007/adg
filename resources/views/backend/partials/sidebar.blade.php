<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{asset('/backend/images/logo.png')}}" class="img-circle" alt="american-diversity-group-logo">
        </div>
        <div class="pull-left info">
            <p>American Diversity Group</p>
        </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                <span class="pull-right-container">
            </span>
            </a>
        </li>
        <li class="treeview {{isActive('admin.news.*')}}">
            <a href="#">
                <i class="fa fa-newspaper-o"></i>
                <span>News Management</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{isActive('admin.news.index')}}">
                    <a href="{{route('admin.news.index')}}">
                        <i class="fa fa-circle-o"></i>List
                    </a>
                </li>
                <li class="{{isActive('admin.news.create')}}">
                    <a href="{{route('admin.news.create')}}">
                        <i class="fa fa-circle-o"></i>Add
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview {{isActive('admin.events.*')}}">
            <a href="#">
                <i class="fa fa-group"></i>
                <span>Events Management</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{isActive('admin.events.index')}}">
                    <a href="{{route('admin.events.index')}}">
                        <i class="fa fa-circle-o"></i>List
                    </a>
                </li>
                <li class="{{isActive('admin.events.create')}}">
                    <a href="{{route('admin.events.create')}}">
                        <i class="fa fa-circle-o"></i>Add
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</section>
