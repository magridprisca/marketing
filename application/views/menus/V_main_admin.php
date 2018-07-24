<li class="header">MAIN NAVIGATION</li>
<li class="active treeview menu-open">
  <a href="#">
    <i class="fa fa-universal-access"></i> <span>Dashboard</span>
    <span class="pull-right-container">
  </a>
</li>
<li class="treeview menu-open">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>Project</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class="active"><a href="<?= base_url('C_Project/addProject');?>"><i class="fa fa-circle-o"></i> Add New Project</a></li>
    <li class="active"><a href="<?= base_url('C_Project');?>"><i class="fa fa-circle-o"></i> Process Project</a></li>
  </ul>
</li>
<li class="menu-open">
  <a href="<?= base_url('C_client/getList');?>">
    <i class="fa fa-handshake-o"></i> <span>Client</span>
    <span class="pull-right-container">
</li>
