<div class="span8">
  
  <legend><span class="badge badge-info">1</span>  配置zookeeper集群</legend>
  <div>首先配置zookeeper集群，选择cluster config菜单，然后添加集群名称，集群各个节点ip与端口，节点之间用逗号分隔。</div>
  <br>
  <legend><span class="badge badge-info">2</span>  查看zookeeper状态</legend>

  <div>选择Cluster Monitor菜单，从下拉菜单中选取配置好的zookeeper集群名称,即可看到各个节点的参数数值。点击各个节点的ip地址可以查看到
  该节点类似于文件系统的数据结构。点击图标 <i class='icon-zoom-in'></i> 可以查看该节点连接客户端详细信息。点击<i class='icon-signal'></i>
  图标可以查看该节点中的 参数watch、connection、sent的可视化图表，每隔5秒钟数据刷新一次。
  </div>
  
</div>