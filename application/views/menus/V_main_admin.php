<li class="header">MAIN NAVIGATION</li>
<li class="active menu-open">
  <a href="#">
    <i class="fa fa-universal-access"></i> <span>Dashboard</span>
  </a>
</li>
<li class="treeview">
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
<li>
  <a href="C_client/getList">
    <i class="fa fa-handshake-o"></i> <span>Client</span>
</li>
