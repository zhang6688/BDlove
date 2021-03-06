<?php
/* Smarty version 3.1.29, created on 2017-08-04 17:03:43
  from "D:\www\yunjuke\application\pay\views\store_shopping_guide.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5984386f9fe219_22198194',
  'file_dependency' => 
  array (
    '44551ccb36b075d58efe8629c2224de2520530fe' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\store_shopping_guide.html',
      1 => 1501636154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
    'file:common_list_page.html' => 1,
  ),
),false)) {
function content_5984386f9fe219_22198194 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '174575984386f8e0f54_08295954';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<title>导购管理</title>
<body style="background-color: #FFF; overflow: auto;">
	<nav class="breadcrumb">
		<i class="Hui-iconfont">&#xe67f;</i> 店铺管理 <span class="c-gray en">&gt;</span>导购管理
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" >
			<i class="Hui-iconfont">&#xe68f;</i></a>
	</nav>

<div class="page-container">
	<table class="table table-border table-bordered table-hover table-bg table-content">
		<thead>
		<tr>
			<th scope="col" colspan="13">导购列表</th>
		</tr>
		<tr class="text-c">
			<th width=""><input type="checkbox" value="" name="" onclick="content_checkAll(this)"></th>
			<th width="">导购昵称</th>
			<th width="">导购姓名</th>
			<th width="">电话</th>
			<th width="">职位</th>
			<th width="">所属门店</th>
			<th width="">操作</th>
		</tr>
		<tr><th  colspan="11">
			<span class="btn btn-primary radius" onclick="fg_operate('add')"><i class="fa fa-plus"></i>新增导购</span>
			<span class="btn btn-danger radius" onclick="fg_operate('delete')"><i class="fa fa-trash"></i>批量离职</span>
		</th></tr>
		</thead>
		<tbody>
		<tr>
			<td colspan="13"><li class="goods_list mb-20 no-data"><i class="fa fa-exclamation-circle"></i>数据加载中...</li></td>
		</tr>
		</tbody>
	</table>
</div>
<div class="flexigrid">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:common_list_page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function get_check()
    {
        $("input[name='check']:checkbox").each(function(i) {
            if($(this).attr("checked")){
                $(this).parent().parent().addClass('trSelected');
            } else {
                $(this).parent().parent().removeClass('trSelected');
            }
        });
    }

    $(function(){
        var url = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
        $(".select2").select2();
        $('#searchBtn').click(function(){
            load_page_to(url);
        });
        load_page(url);
    });

    //操作
    function fg_operate(name, grid) {
        get_check();
        if (name == 'delete') {
            if($('.trSelected',grid).length>0){
                var itemlist = new Array();
                $('.trSelected',grid).each(function(){
                    itemlist.push($(this).attr('data-id'));
                });
                fg_delete(itemlist);
            }else{
                layer.msg('请选择要离职的导购',{icon:2});
                return false;
            }
        }else if(name == 'more'){
			/*批量导入导购*/
            data_import('导购',"<?php echo base_url('admin.php');?>
/write_import/excel_upload",'storeGuide_import?name=');
        }else if (name == 'add') {
            window.location.href="store_shopping_guide_edit";
        }else if (name == 'del') {
            if($('.trSelected',grid).length>0){
                var itemlist = new Array();
                $('.trSelected',grid).each(function(){
                    itemlist.push($(this).attr('data-id'));
                });
                fg_delete(itemlist);
            }else{
                layer.msg('请选择要离职的导购',{icon:2});
                return false;
            }
        }else if(name == 'download'){
            var itemlist = new Array();
            if($('.trSelected',grid).length>0){
                $('.trSelected',grid).each(function(){
                    itemlist.push($(this).attr('data-id'));
                });
            }
            itemlist = itemlist.join(',');
            $.ajax({
                type: "post",
                dataType: "json",
                url: '<?php echo base_url("vmall.php/receive/download_much_short");?>
',
                data: "id=" + itemlist,
                beforeSend:function(){
                    layer.msg('正在下载，请稍等', {icon: 1});
                },
                success: function(data){
                    if(data.state == '403'){
                        layer.msg(data.msg);
                        window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                    }else if(data.state == '401'){
                        layer.msg(data.msg);
                        return false;
                    }else if(data.state){
                        location.href = data.data;
                        layer.msg(data.msg, {icon: 1});
                    }else{
                        layer.msg(data.msg, {icon: 2});
                    }
                }
            });
        }
    }
	/*下载二维码*/
    function create_shot_code(id){
        window.location.href='<?php echo base_url("vmall.php/receive/create_shot_code?id=");?>
'+id;
    }
	/*编辑*/
    function fg_edit(id){
        window.location.href="store_shopping_guide_edit?id="+id;
    }
	/*修改职务*/
    function update_role(id,check,role,name){
        role_ = (role==2)?'店长':((role==1)?'导购':'兼职导购');		//目前角色的身份
        str_grade = '';
        str_grade = "<?php if (!empty($_smarty_tpl->tpl_vars['roles_str']->value)) {
echo $_smarty_tpl->tpl_vars['roles_str']->value;
} else { ?>''<?php }?>";

		var content_grade = '<div class="pt-10 pb-10 pl-30 pr-30 ">'+
			'<form action="" id="changeRoleType" method="POST"><table class="table"><tbody>'+
			'<tr> <td width="20%">职务选择:</td><td  width="50%"><select name="role_type" value="" class="role_type">'+
			str_grade+'</select> </td></tr></tbody></table></form></div>';
		layer.open({
			type: 1,
			btn: ['确认', '取消'],
			title: '<b>修改'+role_+name+'的职务</b>',
			skin: 'layui-layer-rim', //加上边框
			area: ['320px', 'auto'], //宽高
			content: content_grade,
			yes: function(index,layero){
				role_type = $('#changeRoleType').find('.role_type').val();
				$.ajax({
					type: "post",
					dataType: "json",
					url: "update_role",
					data: {id:id,role:role_type,check:check},
					success: function(data){
                        if(data.state == '403'){
                            layer.msg(data.msg);
                            window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                        }else if(data.state == '401'){
                            layer.msg(data.msg);
                            return false;
                        }else if(data.state){
							layer.msg(data.msg);
							layer.close(index);
						}else{
							layer.msg(data.msg);
						}
						$.get('store_shopping_guide',function () {load_page('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
');});
					}
				});
			},no:function(){
				layer.closeAll();
			}
		})
    }
	/*删除*/
    function fg_delete(id,name){
        title = '';
        if(!name){
            title = '这'+id.length+'个导购';
            id = id.join(',');
        }else{
            title = '导购’'+name+'’';
        }
        layer.confirm('确认将'+title+'离职吗？',
            {btn: ['确认','取消']},
            function(){
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "del_guide",
                    data: {id:id},
                    success: function(data){
                        if(data.state == '403'){
                            layer.msg(data.msg);
                            window.top.location.href = "<?php echo base_url('pay.php/Index/');?>
login_out";
                        }else if(data.state == '401'){
                            layer.msg(data.msg);
                            return false;
                        }else if(data.state){
                            layer.msg(data.msg);
                            $.get('store_shopping_guide',function () {load_page('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
');});
                        }else{
                            layer.alert(data.msg);
                        }
                        $.get('store_shopping_guide',function () {load_page('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
');});
                    }
                })
            }
        )
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
