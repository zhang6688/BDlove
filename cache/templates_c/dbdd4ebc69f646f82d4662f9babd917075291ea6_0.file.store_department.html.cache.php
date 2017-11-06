<?php
/* Smarty version 3.1.29, created on 2017-08-04 15:12:20
  from "D:\www\yunjuke\application\admin\views\store_department.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59841e54e74b64_63565106',
  'file_dependency' => 
  array (
    'dbdd4ebc69f646f82d4662f9babd917075291ea6' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\store_department.html',
      1 => 1501568389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_59841e54e74b64_63565106 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '359959841e54d866b4_84480185';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body style="background-color: #FFF; overflow: auto;">
		<div id="append_parent"></div>
		<div id="ajaxwaitid"></div>
		<div class="page">
			<div class="fixed-bar">
				<div class="item-title">
					<div class="subject">
						<h3>集合店管理</h3>
						<h5>线下店铺集合店管理</h5>
					</div>
					
				</div>
			</div>
			<!-- 操作说明 -->
			<div class="explanation" id="explanation">
				<div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
					<h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
					<span id="explanationZoom" title="收起提示"></span> </div>
				<ul>
					<li> 可新增，删除或编辑修改集合门店</li>
				</ul>
		     </div>
            <div id="flexigrid">
            </div>
	</div>
	<?php echo '<script'; ?>
>
$(function(){

	$("#flexigrid").flexigrid({
		url: 'get_store_depart',
		colModel : [
			{display: '操作', name : 'operation', width : 150, sortable : false, align: 'center', className: 'handle-s'},
			{display: '集合店名称', name : 'storelogo', width : 150, sortable : true, align: 'center'},
			{display: '联系人', name : 'member_name', width : 150, sortable : true, align: 'left'},
			{display: '联系电话', name : 'member_email', width : 150, sortable : true, align: 'left'},
			{display: '地址', name : 'member_sex', width : 200, sortable : true, align: 'center'},
			{display: '添加时间', name : 'member_truename', width : 100, sortable : true, align: 'left'},
		],
		buttons : [
			{display: '<i class="fa fa-plus"></i>新增集合店', name : 'add', bclass : 'add', title : '新增集合店', onpress : fg_operate },
			{display: '<i class="fa fa-trash-o"></i>批量删除', name : 'delete', bclass : 'delete', title : '批量删除', onpress : fg_operate },
		],
		searchitems : [
			{display: '联系电话', name : 'member_id'},
			{display: '门店名称', name : 'member_name'}
		],
		title: '集合店列表'
	});
	function fg_operate(name, grid) {
    if (name == 'delete') {
        if($('.trSelected',grid).length>0){
            var itemlist = new Array();
            $('.trSelected',grid).each(function(){
            	itemlist.push($(this).attr('data-id'));
            });
            num = itemlist.length;
            itemlist = itemlist.join(',');
            fg_delete(itemlist,num);
        }else{
            return false;
        }
    }else if (name == 'add') {
    	window.location.href="store_department_edit";
    }
}
});
function fg_bj(data){
	window.location.href="store_department_edit?dp_id="+data.id;
}
//删除
function fg_delete(data,num){
	var stname = '';
	if(typeof(data)=='object'){
		var id = data.id;
		stname = data.name;
	}else{
		stname = '这'+num+'个集合店';
		id = data;
	}
	layer.confirm('确认删除'+stname+'吗？',
	   {btn: ['确认','取消']}, 
	   function(){
		   $.ajax({
		        type: "post",
		        dataType: "json",
		        url: "store_depart_del",
		        data: "id="+id,
		        success: function(data){
				  if(data.state=='403'){
			           login_ajax('shopadmin');
		            }else{
		            	layer.msg(data.msg);
		            	$("#flexigrid").flexReload();
		            }
		        }
		   })
	   }
	)
	//console.log(typeof(id))
}
<?php echo '</script'; ?>
>
			<div id="goTop">
				<a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a>
				<a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a>
			</div>
	</body>

	</html><?php }
}
