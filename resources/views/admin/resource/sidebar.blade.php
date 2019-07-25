<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Master</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Master Custommer</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('master_agent.index')}}">Master Agent</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{route('master_hotelier.index')}}">Master Hotelier</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Master Transaksi</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{route('master_agent.transaksi_balance')}}">transaksi balance</a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('master_transaksi.index')}}">transaksi hotels</a></li>
                    
                    </ul>
                </li>
               

                <li class="menu-title">Confirmasi</li><!-- /.menu-title -->

                <li>
                    <a href="{{route('master_transaksi.payment')}}"> <i class="menu-icon ti-email"></i>Confimasi  Balance</a>
                </li>
                
                <li>
                    <a href="{{route('master_transaksi.agent')}}"> <i class="menu-icon ti-email"></i>Confimasi Agent </a>
                </li> 
                <li>
                    <a href="{{route('master_transaksi.transaksi')}}"> <i class="menu-icon ti-email"></i>Confimasi Transaksi </a>
                </li>
                 <li>
                    <a href="{{route('master_transaksi.hotelier')}}"> <i class="menu-icon ti-email"></i>Confimasi Hotelier </a>
                </li>
                </li>
                <li class="menu-title">Setting</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Setting </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('setting.bank')}}">Bank Account</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>