<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>后台管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="/assets/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
       <!--<img src="/chinapost/Public/assets/img/top.png">-->
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">root</span><a href="/chinapost/index.php?m=Public&a=logout" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        		<li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>		     
				<li class="nav-item dl-selected"><div class="nav-item-inner nav-order">博文管理</div></li> 
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <script type="text/javascript" src="/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="/assets/js/bui-min.js"></script>
  <script type="text/javascript" src="/assets/js/common/main-min.js"></script>
  <script type="text/javascript" src="/assets/js/config-min.js"></script>
  <script>
    BUI.use('common/main',function(){
      var config = [{
    	  id:'1',
    	  menu:[{
    		  text:'系统管理',
    		  items:[{
    			  id:'1_2',
    			  text:'机构管理',
    			  href:'__APP__/Node/'
    		  },{
    			  id:'1_3',
    			  text:'角色管理',
    			  href:'__APP__/Role/'
    		  },{
    			  id:'1_4',
    			  text:'用户管理',
    			  href:'__APP__/User/'
    		  },{
    			  id:'1_5',
    			  text:'菜单管理',
    			  href:'__APP__/Menu/'
    		 }]
    	  }]
      }
      ,{id:'2',
       	menu:[{
       		text:'日志管理',
       		items:[{
        			id:'2_1',
        			text:'内容管理',
        			href:'__APP__/Article/'
   				  },{
        			id:'2_2',
        			text:'分类管理',
        			href:'Node/Cloumns'
       			  },{
        			id:'2_3',
        			text:'评论管理',
        			href:'Node/Comment'
       			  }
       			]
       		}]
         }
      ];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
 </body>
</html>