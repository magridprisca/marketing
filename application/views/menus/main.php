<li class="header">MAIN NAVIGATION</li>
<li class="menu-open <?php if($menu=='home'){echo "active";}?>">
  <a href="<?= base_url(); ?>">
    <i class="fa fa-universal-access"></i> <span>Dashboard</span>
  </a>
</li>
<li class="treeview menu <?php if($menu=='project'){echo "active";}?>">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>Project</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li class="menu-open  <?php if($menu=='project'){echo "active";}?>"><a href="<?= base_url('C_Project');?>"><i class="fa fa-circle-o"></i> Process Project</a></li>
  </ul>
</li>
