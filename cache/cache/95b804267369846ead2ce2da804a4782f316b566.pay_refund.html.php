<?php
/* Smarty version 3.1.29, created on 2017-08-04 09:21:31
  from "D:\www\yunjuke\application\pay\views\pay_refund.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5983cc1b2d0f35_82236622',
  'file_dependency' => 
  array (
    '95b804267369846ead2ce2da804a4782f316b566' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\pay_refund.html',
      1 => 1501636154,
      2 => 'file',
    ),
    '6282d7701d9f48f80f702a7e7b90bb633e309386' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\lib\\link.html',
      1 => 1500887409,
      2 => 'file',
    ),
    '940fa3e7a5fc658c974a607afc3fab9d110f7f64' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\pay\\views\\lib\\footer.html',
      1 => 1499676757,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5983cc1b2d0f35_82236622 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>云聚客门店收银系统 | 智慧店铺</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
		<meta name="format-detection" content="telephone=no">
			<link href="http://[::1]/yunjuke/application/pay/views/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="http://[::1]/yunjuke/application/pay/views/css/sweetalert.css" type="text/css" rel="stylesheet">
		<link href="http://[::1]/yunjuke/application/pay/views/css/animate_new.css" type="text/css" rel="stylesheet">
		<link href="http://[::1]/yunjuke/application/pay/views/css/style.css" type="text/css" rel="stylesheet">
		<link href="http://[::1]/yunjuke/application/pay/views/css/app.css" type="text/css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="http://[::1]/yunjuke/plugins/select2/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/static/h-ui.admin/css/style.css" />
		<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/static/h-ui/css/H-ui.min.css" />
		<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/static/h-ui.admin/css/H-ui.admin.css" />
		<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/H-ui/lib/Hui-iconfont/1.0.7/iconfont.css" />
		<link href="http://[::1]/yunjuke/application/pay/views/css/font-awesome.css" type="text/css" rel="stylesheet">
		<!-- Mainly scripts -->
		<script src="http://[::1]/yunjuke/application/pay/views/js/jquery.js" type="text/javascript"></script>
		<script src="http://[::1]/yunjuke/application/pay/views/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="http://[::1]/yunjuke/application/pay/views/js/jquery.metisMenu.js" type="text/javascript"></script>
		<script src="http://[::1]/yunjuke/application/pay/views/js/jquery.slimscroll.min.js" type="text/javascript"></script>
		<!-- Custom and plugin javascript -->
		<script type="text/javascript" src="http://[::1]/yunjuke/application/pay/views/js/select2.js"></script>
		<script src="http://[::1]/yunjuke/application/pay/views/js/inspinia.js" type="text/javascript"></script>
		<script src="http://[::1]/yunjuke/application/pay/views/js/sweetalert.min.js" type="text/javascript"></script>
		<script src="http://[::1]/yunjuke/application/pay/views/js/jquery.qrcode.min.js" type="text/javascript"></script>
		<script src="http://[::1]/yunjuke/plugins/common/common.js" type="text/javascript"></script>
		<script type="text/javascript" src="http://[::1]/yunjuke/plugins/select2/js/select2.min.js"></script>
		<!----开放式头部，请在自己的页面加上--</head>-->
		<script type="text/javascript">
			$(function() {
				var system = {};
				var p = navigator.platform;
				system.win = p.indexOf("Win") == 0;
				system.mac = p.indexOf("Mac") == 0;
				system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
				if(system.win || system.mac || system.xll) {
					//pc
				} else {
					//mobile
					$(".iconList li").eq(0).hide();
					$(".iconList li").eq(3).hide();
					$(".iconList li").eq(5).hide();
					$(".iconList li").eq(6).hide();
					$(".iconList li").eq(7).hide();
					$(".iconList li").eq(8).hide();
				}
			})
		</script>
		<link rel="stylesheet" type="text/css" href="http://[::1]/yunjuke/plugins/select2/css/select2.min.css" />
		<style>
		    #form3 tr{
			   text-align:center;
		    }
		    #form3 ul{text-align:center;margin:0 20%;}
		    #form3 ul li{
			  float:left;margin:20px 10px;
		    }
		   #form3 ul li a{color:#0096ff;}
		   .pay-content td{
		   	line-height: 29px !important;
		   }
		   table td,
		   table th{
		   	text-align: center;
		   }
		   tr.current{
	          background-color:#999999;  
		   }
		   .btn-paygroup{
		   	position: fixed;
		   	bottom:1%;
		   	right: 42px;
		   }
		   div.input{
	           position:relative;    
		   }
			.modal-dialog {
			    max-width: 90% !important;
			    min-width: 880px !important;
			}
		   span.err{
	           color:red;
		   }
		   .checkbox{
			    position: relative;
			    display: block;
			    margin: 0px; 
			}
			.btn-pay{
				background: #19ba5e;
				color: #fff;
			}
			.btn-pay:hover{
				background: #19ba5e;
				color: #fff;
			}
			.paymoney{
				padding: 10px;
				background: #021a2e;
				color: #fff;
			}
			.paymoney p{
				margin: 0 !important;
			}
			.paymoney span{
				color: red;
				margin: 0 8px;
			}
			.memberinfo{
				background: #858d97;
				padding: 30px;
				border: 1px solid #ddd;
				margin-top: 20px;
				color: #fff;
			}
			.memberinfo td{
				border-top:0px!important;
			}
			.pay-left{
				line-height: 29px !important;
				text-align: right;
			}
			.tabs-container .nav-tabs > li.active > a, .tabs-container .nav-tabs > li.active > a:hover, .tabs-container .nav-tabs > li.active > a:focus {
			    border: 1px solid #ccc;
			    border-bottom-color: transparent;
			}
			.tabs-container .panel-body {
				border: 1px solid #ccc;
			}
			.tabs-container .nav-tabs {
    			border-bottom: 1px solid #ccc;
			}
			th{
				background: #ccc!important;
			}
			.form-control, .single-line {
			    border: 1px solid #ccc;
			    }
			    .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
			    border: 1px solid #ddd;
			}
			.selectarea{
				width: 150px;
			}
			.table-top{
				margin:0 -21px;
				padding: 0 21px;
				border-bottom: 1px solid #ccc;
			}
			.table-content{
				margin: 0 -21px -21px -21px;
				padding:21px;
				overflow-y: auto;
			}
			.totalPrice{
				letter-spacing: 1px;
				margin-top: 15px;
			}
			.totalPrice span.color{
				color: red;
			}
			#refundType{
				color: #666;
			}
			.return-title{
				margin-top: 0px;
				margin-bottom: 25px;
				font-weight: bold;
			}
			.display{
	background: #a9a9a9;
}
.display:hover{
	background: #a9a9a9;
}
.posi{
	position: absolute;
	right: -5px;
	top: 5px;
}
.table-bordered {
    border-collapse: collapse;
}
.btn{
	border: none;
}
        </style>
	</head>

	<body>
		<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 收银台 <span class="c-gray en">&gt;</span> 退换商品
						<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
		</nav>
		<div class="pull-right mr-20 mt-10">
			<select id="storeGuide" name="storeGuide" class="selectarea">
				
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined index: storeGuide</p>
<p>Filename: templates_c/95b804267369846ead2ce2da804a4782f316b566_0.file.pay_refund.html.cache.php</p>
<p>Line Number: 189</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\www\yunjuke\cache\templates_c\95b804267369846ead2ce2da804a4782f316b566_0.file.pay_refund.html.cache.php<br />
			Line: 189<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
	
		
	
		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\www\yunjuke\application\pay\controllers\Account.php<br />
			Line: 860<br />
			Function: display			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\www\yunjuke\pay.php<br />
			Line: 331<br />
			Function: require_once			</p>

		
	

</div>
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: templates_c/95b804267369846ead2ce2da804a4782f316b566_0.file.pay_refund.html.cache.php</p>
<p>Line Number: 189</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\www\yunjuke\cache\templates_c\95b804267369846ead2ce2da804a4782f316b566_0.file.pay_refund.html.cache.php<br />
			Line: 189<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
	
		
	
		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\www\yunjuke\application\pay\controllers\Account.php<br />
			Line: 860<br />
			Function: display			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: D:\www\yunjuke\pay.php<br />
			Line: 331<br />
			Function: require_once			</p>

		
	

</div>			</select>
		</div>
		<div id="wrapper" class="mt-20">
				<div class="wrapper wrapper-content animated fadeIn">
					<div class="row">
						<div class="col-lg-12">
							<div class="tabs-container weixin">
								<div class="tab-content">
									<div id="tab-1" class="tab-pane active">
										<div class="panel-body" style="border-top: 1px solid #ccc;">
											<div class="row">
												<div class="col-sm-12 micropay">
													<div class="table-top">
														<table class="table table-bordered table-responsive">
															<tr>
																<td style="line-height: 29px;">收银单号：</td>
																<td>
																<input type="text" class="form-control input-sm" name="paySn" id="paySn" value=""/>
																</td>
																<td style="line-height: 29px;">订单号：</td>
																<td>
																<input type="text" class="form-control input-sm" name="orderSn" id="orderSn" value=""/>
																<input type="hidden" class="" name="user_id" id="user_id" value=""/>
																</td>
																<!-- <td rowspan="2" style="margin-top: 20px;"><button class="btn btn-primary" style="margin-top: 20px;">确定</button></td> -->
															</tr>
															<!-- <tr>
																<td style="line-height: 29px;">订单日期：</td>
																<td><input type="text" name="startime" onclick="laydate()" id="startime" class="">　
	           													 — 　<input type="text" name="endtime" onclick="laydate()" id="endtime" class=""></td>
																<td style="line-height: 29px;">会员信息：</td>
																<td><input type="text" class="form-control input-sm" placeholder="手机号/微信号输入"/></td>
															</tr> -->
															<!--<tr>
																<td style="line-height: 29px">会员信息：</td>
																<td> <div class="col-xs-6"><input type="text" class="form-control"/></div></td>
															</tr>-->
														</table>
													</div>
													<div class="table-content">
													<form id="stockInfoForm" onsubmit="return false;">
													<!-- <div class="goodsreturn-title">
														<h3 data-sn="">订单号：<span>210521199521</span>　　2017-02-20　15:34:21　　会员信息：小李子</h3>
													</div>
													
													<table class="table table-bordered" style="margin-top: 20px;">
														<thead>
															<tr>
																<th>序号</th>
																<th>品牌</th>
																<th>条码</th>
																<th>货号</th>
																<th>尺码</th>
																<th>数量</th>
																<th>单价</th>
																<th>折扣</th>
																<th>合计</th>
																<th>会员信息</th>
																<th>备注</th>
																<th>操作</th>
															</tr>
														</thead>
														<tbody class="pay-content">
															 <tr>
																<td>1</td>
																<td></td>
																<td></td>
																<td></td>
																<td>s</td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="1"/></td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="268"/></td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="8.8"/></td>
																<td>268</td>
																<td></td>
																<td></td>
																<td><a href="javascript:;">删除</a></td>
															</tr>
															<tr>
																<td>2</td>
																<td></td>
																<td></td>
																<td></td>
																<td>s</td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="1"/></td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="268"/></td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="8.8"/></td>
																<td>268</td>
																<td></td>
																<td></td>
																<td><a href="javascript:;">删除</a></td>
															</tr> 
															<tr>
																<td>3</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td><a href="javascript:;">新增</a></td>
															</tr>
														</tbody>
													</table>
													<div class="goodsreturn-title">
														<h3 data-sn="">订单号：<span>210521199521</span>　　2017-02-20　15:34:21　　会员信息：小李子</h3>
													</div>
													
													<table class="table table-bordered" style="margin-top: 20px;">
														<thead>
															<tr>
																<th>序号</th>
																<th>品牌</th>
																<th>条码</th>
																<th>货号</th>
																<th>尺码</th>
																<th>数量</th>
																<th>单价</th>
																<th>折扣</th>
																<th>合计</th>
																<th>会员信息</th>
																<th>备注</th>
																<th>操作</th>
															</tr>
														</thead>
														<tbody class="pay-content">
															 <tr>
																<td>1</td>
																<td></td>
																<td></td>
																<td></td>
																<td>s</td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="1"/></td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="268"/></td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="8.8"/></td>
																<td>268</td>
																<td></td>
																<td></td>
																<td><a href="javascript:;">删除</a></td>
															</tr>
															<tr>
																<td>2</td>
																<td></td>
																<td></td>
																<td></td>
																<td>s</td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="1"/></td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="268"/></td>
																<td class="col-xs-1"><input type="text" class="form-control input-sm" placeholder="8.8"/></td>
																<td>268</td>
																<td></td>
																<td></td>
																<td><a href="javascript:;">删除</a></td>
															</tr> 
															<tr>
																<td>3</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td><a href="javascript:;">新增</a></td>
															</tr>
														</tbody>
													</table> -->
													</form>
													
													</div>
													
													<button class="btn pull-right btn-sm btn-pay" data-toggle="modal" type="button" onclick="paySure()" style="margin-top: 35px;">确认退货</button>
												</div>
											</div>
										</div>
										<h3 class="totalPrice">合计：
													共<span class="num color">0</span>件商品，共计<span class="number color" >0.00</span>元。
												          订单原商品总价：<span id="totalOrderPrice" class="color">0.00</span><span id="ordercoupon" class="color"></span><span id="ordercard" class="color"></span>，<span id="refundType" nctype="">应退：</span><span class="color" id="refundChajia">0.00</span><span class="color" id="refundCoupon"></span>。
													<input type="hidden" name="totalPrice" value="0.00">
													<input type="hidden" name="total" value="0.00">
													<input type="hidden" name="totalOrderPay" id="totalOrderPay" value="0.00">
													</h3>
										<!--确认收款弹出框-->
										<div class="modal fade" id="confirmpay" tabindex="-1" role="dialog" aria-labelledby="confirmpay" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <div class="modal-header" style="background: #2f4050;color: #fff;">
										                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #fff;">&times;</button>
										                <h3 class="modal-title text-center">收银</h3>
										            </div>
										            <div class="modal-body row">
										            	<div class="col-xs-6">
										            	<form id="payInfoForm" onsubmit="return false;">
										            	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
										            			
										            			<tr>
										            				<td class="pay-left" style="width: 90px;">现金支付</td>
										            				<td><input type="text" onchange="paychange(this)" name="paycash" class="form-control input-sm"/></td>
										            			</tr>
										            			<tr>
										            				<td class="pay-left">银行卡</td>
										            				<td><input type="text" onchange="paychange(this)" name="paybank" class="form-control input-sm"/></td>
										            			</tr>
										            			<tr>
										            				<td class="pay-left">微信支付</td>
										            				<td><input type="text" onchange="paychange(this)" name="paywx" class="form-control input-sm"/></td>
										            			</tr>
										            			<tr>
										            				<td class="pay-left">支付宝支付</td>
										            				<td><input type="text" onchange="paychange(this)" name="payzfb" class="form-control input-sm"/></td>
										            			</tr>
										            			<tr>
										            				<td class="pay-left">余额支付</td>
										            				<td><input type="text" onchange="paychange(this)" name="paybalance" class="form-control input-sm"/></td>
										            			</tr>
										            			
										            	</table>
										            	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
										            			<tr>
										            				<td class="pay-left" style="width: 90px;">券支付</td>
										            				<td><input type="text" onchange="paychange(this)" name="paycoupon" class="form-control input-sm"/></td>
										            			</tr>
										            			<tr>
										            				<td class="pay-left">充值卡支付</td>
										            				<td><input type="text" onchange="paychange(this)" name="paycard" class="form-control input-sm"/></td>
										            			</tr>
										            			
										            	</table>
										            	
										            	<div>
										            		<!-- <button class="btn btn-primary">暂不支付</button> -->
										            		<button class="btn btn-primary"  type="button" onclick="pay()">结账</button>
										            		<!-- <button class="btn btn-primary"  type="button" onclick="payC()">现金退款</button> -->
										            		<button type="button" class="btn btn-primary btn-pay" data-dismiss="modal" aria-hidden="true">取消</button>
										            		<!-- <button class="btn btn-primary">确定</button> -->
										            	</div>
										            	</form>
										            	</div>
										            	
										            	<div class="col-xs-6">
										            	
										            		<div class="paymoney text-center">
										            			<p>数量：<span class="payNumber">0</span>件　　交易金额：<span class="payPrice">00.00</span>元</p>
										            			<!-- <p>(附加服务费：<span>0.00</span>元)</p> -->
										            			<p>　已支付<span style="font-size: 25px;margin: 0 30px;" class="payOldHave">00.00</span>元</p>
										            			<p id="payDcoupon" style="display:none;">　抵用优惠卷<span style="font-size: 25px;margin: 0 30px;" class="payDcoupon">00.00</span>元</p>
										            			<p id="payDcard" style="display:none;">　抵用充值卡<span style="font-size: 25px;margin: 0 30px;" class="payDcard">00.00</span>元</p>
										            			<p id="payDshould">　应支付<span style="font-size: 25px;margin: 0 30px;" class="payHave">00.00</span>元</p>
										            			<p>　找零<span style="font-size: 25px;margin: 0 30px;" class="payRefaud"></span>元</p>
										            			<!-- <p>还应支付<span style="font-size: 25px;margin: 0 30px;">0.00</span>元</p> -->
										            		</div>
										            		<div class="memberinfo">
										            			<table class="table">
										            				<tr>
										            					<td>客户姓名:</td>
										            					<td class="payUserName"></td>
										            				</tr>
										            				<tr>
										            					<td>联系电话:</td>
										            					<td class="payUserTel"></td>
										            				</tr>
										            				<tr>
										            					<td>VIP等级:</td>
										            					<td class="payUserGrade"></td>
										            				</tr>
										            				<tr>
										            					<td>余额:</td>
										            					<td class="payUserBalance"></td>
										            				</tr>
										            				<tr>
										            					<td>可用充值卡:</td>
										            					<td class="payUserCard"></td>
										            				</tr>
										            				<tr>
										            					<td>积分:</td>
										            					<td class="payUserIntegral"></td>
										            				</tr>
										            			</table>
										            		</div>
										            		
										            	</div>
										            </div>
										            <!-- <div class="modal-footer">
										                <button type="button" class="btn btn-primary btn-pay" data-dismiss="modal" aria-hidden="true">取消</button>
										            </div> -->
										        </div><!-- /.modal-content -->
										    </div><!-- /.modal -->
										</div>
										
										<!--会员查询弹出框-->
										<div class="modal fade" id="selectmember" tabindex="-1" role="dialog" aria-labelledby="selectmember" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <div class="modal-header" style="background: #2f4050;color: #fff;">
										                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #fff;">&times;</button>
										                <h3 class="modal-title text-center">会员查询</h3>
										            </div>
										            <div class="modal-body row">
										            	<div class="col-xs-offset-5 col-xs-6">
										            		<div class="col-xs-10"><input type="text" name="membernum" id="membernum" placeholder="查询" class="form-control"/></div>
										            		<div class="col-xs-2"><button class="btn btn-pay" onclick="searchUser()">会员查询</button></div>
										            	</div>
										            	<div style="clear: both;"></div>
										            	<table class="table table-bordered" style="margin-top: 20px;">
										            		<thead>
										            			<tr>
										            				<th>姓名</th>
										            				<th>手机号码</th>
										            				<th>微信号</th>
										            				<th>积分</th>
										            				<th>购买记录</th>
										            				<th>备注</th>
										            			</tr>
										            		</thead>
										            		<tbody>
										            			
										            		</tbody>
										            	</table>
										            	
										            </div>
										            <div class="modal-footer">
										                <button type="button" class="btn btn-primary btn-pay" onclick="selectUserSure()" data-dismiss="modal" aria-hidden="true">确定</button>
										            </div>
										        </div><!-- /.modal-content -->
										    </div><!-- /.modal -->
										</div>
										
										<!--库存查询弹出框-->
										<div class="modal fade" id="selectstock" tabindex="-1" role="dialog" aria-labelledby="selectstock" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <div class="modal-header" style="background: #2f4050;color: #fff;">
										                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #fff;">&times;</button>
										                <h3 class="modal-title text-center">库存查询</h3>
										            </div>
										            <div class="modal-body row">
										            	<div class="col-xs-offset-5 col-xs-6">
										            		<div class="col-xs-10"><input type="text" name="stock" id="stock" placeholder="请输入货号或者名称" class="form-control"/></div>
										            		<div class="col-xs-2"><button class="btn btn-pay" onclick="searchAmount()">库存查询</button></div>
										            	</div>
										            	<div style="clear: both;"></div>
										            	<table class="table table-bordered" style="margin-top: 20px;">
										            		<thead>
										            			<tr>
										            				<th>商品名称</th>
										            				<th>条码</th>
										            				<th>货号</th>
										            				<th>尺码</th>
										            				<th>数量</th>
										            				<th>单价</th>
										            				<th>备注</th>
										            			</tr>
										            		</thead>
										            		<tbody>
										            			<!-- <tr>
										            				<td>耐克</td>
										            				<td></td>
										            				<td></td>
										            				<td></td>
										            				<td></td>
										            				<td></td>
										            				<td></td>
										            			</tr>
										            			<tr>
										            				<td>耐克</td>
										            				<td></td>
										            				<td></td>
										            				<td></td>
										            				<td></td>
										            				<td></td>
										            				<td></td>
										            			</tr> -->
										            		</tbody>
										            	</table>
										            	
										            </div>
										            <div class="modal-footer">
										                <button type="button" class="btn btn-primary btn-pay" data-dismiss="modal" onclick="selectStockSure()" aria-hidden="true">确定</button>
										            </div>
										        </div><!-- /.modal-content -->
										    </div><!-- /.modal -->
										</div>
										
										<!--整单退弹出框-->
										<div class="modal fade" id="allreturn" tabindex="-1" role="dialog" aria-labelledby="allreturn" aria-hidden="true">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <div class="modal-header" style="background: #2f4050;color: #fff;">
										                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #fff;">&times;</button>
										                <h3 class="modal-title text-center">订单查询</h3>
										            </div>
										            <div class="modal-body row">
										            	<div class="row">
										            		<div class="col-xs-10">
										            		<form id="form-order">
										            		<div class="col-xs-3"><input type="text" name="startime" onclick="laydate()" id="startime" class="form-control input-sm"><div class="posi">—</div></div><div class="col-xs-3"><input type="text" name="endtime" onclick="laydate()" id="endtime" class="form-control input-sm"></div>
										            		<div class="col-xs-3"><input type="text" name="orderBuyer" class="form-control input-sm" placeholder="买家用户名/手机号/微信号"/></div>
										            		<div class="col-xs-3"><input type="text" name="allreturn" id="orderReturn" placeholder="订单号、收银单号" class="form-control input-sm"/></div>
										            		</form>
										            		</div>
										            		<div class="col-xs-2"><button class="btn btn-pay" onclick="searchOrder()">搜索</button></div>
										            	</div>
										            	<div style="clear: both"></div>
										            	<table class="table table-bordered" style="margin-top: 20px;">
										            		<thead>
										            			<tr>
										            				<!-- <th><div class="checkbox">
																		<label><input type="checkbox" value=""></label>
																	</div></th> -->
										            				<th>收银单号</th>
										            				<th>订单号</th>
										            				<th>买家</th>
										            				<th>买家电话</th>
										            				<th>下单时间</th>
										            				<th>商品数量</th>
										            				<th>订单总价</th>
										            				<th>商品总价</th>
										            				<th>优惠卷</th>
										            				<th>充值卡</th>
										            			</tr>
										            		</thead>
										            		<tbody>
										            			
										            		</tbody>
										            	</table>
										            </div>
										            <div class="modal-footer">
										                <button type="button" class="btn btn-primary btn-pay" data-dismiss="modal" onclick="selectOrder()" aria-hidden="true">确定</button>
										            </div>
										        </div><!-- /.modal-content -->
										    </div><!-- /.modal -->
										</div>
										
										<ul class="list-inline pull-right btn-paygroup">
												<li><a href="scan_pay"><button class="btn btn-success radius">开始收银</button></a></li>
												<li><button class="btn btn-primary radius" style="background: #5caccd;" id="membercc-r">会员查询</button></li>
												<li><button class="btn btn-primary radius" style="background: #f1a41f;" id="stockcheck-r">库存查询</button></li>
												<li><button class="btn btn-default disabled radius">退换商品</button></li>
												<li><button class="btn btn-primary radius" style="background: #66d17a;" id="ordercheck-r">订单查询</button></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
		<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="http://[::1]/yunjuke/plugins/H-ui/static/h-ui.admin/js/H-ui.admin.js"></script>
		<script type="text/javascript" src="http://[::1]/yunjuke//plugins/layer/layer.js"></script>
		<script src='http://localhost:8000/CLodopfuncs.js'></script>
		<script language="javascript" src="http://[::1]/yunjuke//plugins/Lodop/LodopFuncs.js"></script>
		<script type="text/javascript" src="http://[::1]/yunjuke/plugins/laydate/laydate.js"></script>
		<script type="text/javascript" src="http://[::1]/yunjuke/plugins/select2/js/select2.min.js"></script>
		<!-- <script type="text/javascript" src="http://[::1]/yunjuke/application/pay/views/js/pay.js"></script> -->
		<script>
//会员查询弹出框
$('#membercc-r').click(function(){
	var content_member='<div class="modal-body">'+
							'<div class="col-xs-offset-5 col-xs-6">'+
								'<div class="col-xs-10"><input type="text" name="membernum" id="membernum" placeholder="手机/用户名/qq/微信昵称" class="input-text radius"/></div>'+
									'<div class="col-xs-2"><button class="btn btn-success radius" onclick="searchUser()">会员查询</button></div>'+
								'</div>'+
								'<div style="clear: both;"></div>'+
								'<table class="table table-bordered" style="margin-top: 20px;max-height: 400px;overflow-y: auto;">'+
									'<thead>'+
										'<tr>'+
										    '<th>姓名</th>'+
										    '<th>手机号码</th>'+
										    '<th>微信号</th>'+
										    '<th>积分</th>'+
										    '<th>购买记录</th>'+
										    '<th>备注</th>'+
										'</tr>'+
									'</thead>'+
									'<tbody>'+	            			
									'</tbody>'+
								'</table>'+
							'</div>';
	
	layer.open({
	  type: 1,
	  title:'会员查询',
	  btn:['确定'],
	  skin: 'layui-layer-rim', //加上边框
	  area: ['800px', '450px'], //宽高
	  content: content_member,
	  yes:function(){
	  	selectUserSure()
	  	layer.closeAll();
	  }
	});
})
	


//库存查询弹出框
	$('#stockcheck-r').click(function(){
	var content_stock='<div class="modal-body">'+
										            	'<div class="col-xs-offset-5 col-xs-6">'+
										            		'<div class="col-xs-10"><input type="text" name="stock" id="stock" placeholder="请输入条形码、货号或者名称" class="input-text radius"/></div>'+
										            		'<div class="col-xs-2"><button class="btn btn-success radius" onclick="searchAmount()">库存查询</button></div>'+
										            	'</div>'+
										            	'<div style="clear: both;"></div>'+
										            	'<table class="table table-bordered" style="margin-top: 20px;max-height: 400px;overflow-y: auto;">'+
										            		'<thead>'+
										            			'<tr>'+
										            				'<th>品牌</th>'+
										            				'<th>商品名称</th>'+
										            				'<th>条码</th>'+
										            				'<th>货号</th>'+
										            				'<th>尺码</th>'+
										            				'<th>数量</th>'+
										            				'<th>单价</th>'+
										            				'<th>备注</th>'+
										            			'</tr>'+
										            		'</thead>'+
										            		'<tbody>'+
										            		'</tbody>'+
										            	'</table>'+
										            	'</div>';
	
	layer.open({
	  type: 1,
	  title:'库存查询',
	  btn:['确认'],
	  skin: 'layui-layer-rim', //加上边框
	  area: ['800px', '450px'], //宽高
	  content: content_stock,
	  yes:function(){
	  	selectStockSure();
	  	layer.closeAll();
	  }
	});
})
//订单查询弹出框
	$('#ordercheck-r').click(function(){
	var content_order='<div class="modal-body">'+
										            	'<div class="row">'+
										            		'<div class="col-xs-10">'+
										            		'<form id="form-order">'+
										            		'<div class="col-xs-3"><input type="text" name="startime" onclick="laydate()" id="startime" class="form-control input-sm"><div class="posi">—</div></div><div class="col-xs-3"><input type="text" name="endtime" onclick="laydate()" id="endtime" class="form-control input-sm"></div>'+
										            		'<div class="col-xs-3"><input type="text" name="orderBuyer" class="form-control input-sm" placeholder="买家用户名/手机号/微信号"/></div>'+
										            		'<div class="col-xs-3"><input type="text" name="allreturn" id="orderReturn" placeholder="订单号、收银单号" class="form-control input-sm"/></div>'+
										            		'</form>'+
										            		'</div>'+
										            		'<div class="col-xs-2"><button class="btn btn-pay" onclick="searchOrder()">搜索</button></div>'+
										            	'</div>'+
										            	'<div style="clear: both"></div>'+
										            	'<table class="table table-bordered" style="margin-top: 20px;">'+
										            		'<thead>'+
										            			'<tr>'+
										            				'<!-- <th><div class="checkbox">'+
																		'<label><input type="checkbox" value=""></label>'+
																	'</div></th> -->'+
										            				'<th>收银单号</th>'+
										            				'<th>订单号</th>'+
										            				'<th>买家</th>'+
										            				'<th>买家电话</th>'+
										            				'<th>下单时间</th>'+
										            				'<th>商品数量</th>'+
										            				'<th>订单总价</th>'+
										            				'<th>商品总价</th>'+
										            				'<th>优惠卷</th>'+
										            				'<th>充值卡</th>'+
										            			'</tr>'+
										            		'</thead>'+
										            		'<tbody>'+
										            		'</tbody>'+
										            	'</table>'+
										            '</div>';
	
	layer.open({
	  type: 1,
	  title:'订单查询',
	  btn:['确认'],
	  skin: 'layui-layer-rim', //加上边框
	  area: ['800px', '450px'], //宽高
	  content: content_order,
	  yes:function(){
	  	selectOrder();
	  	layer.closeAll();
	  }
	});
})
			
			
			
			
		
		//			初始化select2
		$(document).ready(function() {
					$("#storeGuide").select2();
				});
				
//		让中间的内容多出滚轮,并调整整个屏幕的高度
		var pelheight = document.body.clientHeight;
		$("#page-wrapper").css("height",pelheight-40)
		$(".table-content").css("height",pelheight-420);
		$(window).resize(function(){
   			var pelheight = document.body.clientHeight;
			$(".table-content").css("height",pelheight-420);
			$("#page-wrapper").css("height",pelheight-40)
		});
			
		function data_null(data,data_){
			data = !data?'':data;
			data_ = !data_?'':data_;
			if(!data){
				data = data_;
			}
			return data;
		}
		 /*会员查询*/
		   function searchUser(){ 
			   var searchVal = $('#membernum').val();
			   if(searchVal==''){
				   swal({title:'',text:'请输入查询条件', type:"error",timer:2000});return false;
			   }else{
				   if(searchVal.length<2){
					   swal({title:'',text:'查询范围太宽，请至少输入两个字符', type:"error",timer:2000});return false;
				   }
				   $.ajax({
		        		type: "post",
		                url: "check_user",
		                data: {user_name:searchVal},
		                dataType: "json",
		                success: function(data){
		                	var str = '';
                            if(data.state == '403'){
                                layer.msg(data.msg);
                                window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                            }else if(data.state == '401'){
                                layer.msg(data.msg);
                                return false;
                            }else if(data.state){
		                		userInfo = data.user;
		                		$.each(userInfo,function(k,v){
		                			if(v.order==''){
		                				orderLog = '';
		                			}else{
		                				orderLog = data_null(v.order.order_sn)+'/'+data_null(v.order.date);
		                			}
		                			var dataStr = JSON.stringify(v).replace(/"/g, "'");
		                			str+='<tr onclick="selectUser(this)" data-val="'+dataStr+'"><td>'+data_null(v.user_name)+'</td>'+
			            				'<td>'+data_null(v.tel)+'</td>'+
			            				'<td>'+data_null(v.wx_nickname)+'</td>'+
			            				'<td>'+data_null(v.integral)+'</td>'+
			            				'<td>'+orderLog+'</td>'+
			            				'<td></td></tr>';
			            				
		                		})
		                		/* $('#userInfo').val(data.data.user_name);
		                		$('#user_id').val(data.data.user_id); */
		                		//$('#userErr').html('');
		                	}else{
		                		str = '<tr><td colspan="6">未搜到符合条件的记录！</td></tr>';
		                		//$('#userErr').html(data.msg);
		                		//swal({title:'',text:data.msg, type:"error",timer:2000});return false;
		                	}
		                	$('#selectmember').find('table').children('tbody').html(str);
		                }
					})
			   }
		   }
		  function selectUser(obj){
			  $(obj).siblings('tr').removeClass('current');
			  $(obj).addClass('current');
			  //console.log(dataJson)
		  }
		  function selectUserSure(){
			  var selectTr = $('#selectmember').find('tbody').find('tr.current');
			  var dataStr = selectTr.attr('data-val');
			  dataStr = dataStr.replace(/'/g, '"');
			  dataJson = JSON.parse(dataStr);
			  $('#user_id').val(data_null(dataJson.user_id));
			  $('#userTel').val(data_null(dataJson.tel));
			  $('#userName').val(data_null(dataJson.user_name));
			  $('#userQQ').val(data_null(dataJson.qq));
			  $('#userAddress').val(data_null(dataJson.user_addres));
			  var payContent = $('.pay-content').find('tr');
	      	  if(payContent.length>0){
	      		    user_name = data_null(dataJson.user_name)==''?data_null(dataJson.tel):data_null(dataJson.user_name);
	      			payContent.find('td.userinfo').text(user_name);
	      	  }
			  $('#selectmember').hide();
		  }
		  var LODOP; //声明为全局变量   
		    function install_print(){
		    	url_32 = "http://[::1]/yunjuke/data/print/CLodop_Setup_for_Win32NT_2.090.zip";
				url_64 = "http://[::1]/yunjuke/data/print/CLodop_Setup_for_Win64NT_2.090.zip";
				url_3264 = "http://[::1]/yunjuke/data/print/CLodopPrint_Setup_for_Win32NT.zip";
				layer.open({
		            type: 1,
		            title: '<b>打印控件下载</b>',
		            skin: 'layui-layer-rim', //加上边框
		            area: ['520px', 'auto'], //宽高
		            content: '<div class="pt-10 pb-10 pl-30 pr-30 "><form action="" id="form3" method="POST" enctype=multipart/form-data>' +
		            '<div id="" style="width:100%;text-align:center;font-size:14px;color:#FF00FF;" class="">打印机控件尚未安装启动!点击下载并安装,安装后请刷新页面。</div>'+
		            '<div style="width: 100%;text-align:center;color:#0096ff"><ul><li>点击下载：</li>' +
		            '<li><a href="'+url_32+'">32位版</a></li><li><a href="'+url_64+'">64位版</a></li><li><a href="'+url_3264+'">综合版</a></li></ul></div>'+
		            '</form></div>',

		        })
		    }
		   
		    
		    function CreateFullBill(data) {
		    	LODOP=getLodop(); 
		    	var topLength = 20;
				LODOP.PRINT_INIT("打印收银小票");
				LODOP.SET_PRINT_PAGESIZE(3,480,10);
				LODOP.ADD_PRINT_TEXT(topLength,2,180,30,data.store_name);
				LODOP.SET_PRINT_STYLEA(0,"FontSize",12);
				LODOP.SET_PRINT_STYLEA(0,"FontColor","#800000");
				LODOP.SET_PRINT_STYLEA(0,"Alignment",2);
				LODOP.ADD_PRINT_TEXT(topLength*2,2,180,20,data.time);
				LODOP.SET_PRINT_STYLEA(0,"FontSize",8);
				LODOP.SET_PRINT_STYLEA(0,"FontColor","#800000");
				LODOP.SET_PRINT_STYLEA(0,"Alignment",2);
				LODOP.ADD_PRINT_TEXT(topLength*3,2,180,25,"收银员："+data.spg_name);
				LODOP.ADD_PRINT_TEXT(topLength*4,2,180,25,"单号："+data.order_sn);
				LODOP.ADD_PRINT_TEXT(topLength*5,2,180,25,"商品   数量  单价  金额");
				LODOP.SET_PRINT_STYLEA(0,"Alignment",2);
				LODOP.ADD_PRINT_LINE(topLength*6, 2,topLength*6,180,4);
				LODOP.ADD_PRINT_LINE(topLength*6+2, 2,topLength*6+2,180,4);
				var i=1;j=0;key=6;
				$.each(data.goods_info,function(k,v){
					j = key+i;
					LODOP.ADD_PRINT_TEXT(topLength*j,2,180,25,v.stock_code+"|"+v.gc_name+"|"+v.goods_size+v.color);
					LODOP.ADD_PRINT_TEXT(topLength*(j+1),2,180,25,v.goods_num+"|"+v.goods_pay_price+"|"+v.goods_pay_price_total);
					LODOP.SET_PRINT_STYLEA(0,"Alignment",3);
					i = i+2;
				})  
				key = key+i;
				LODOP.ADD_PRINT_LINE(topLength*key+8, 2,topLength*key+8,180,4);
				LODOP.ADD_PRINT_LINE(topLength*key+10, 2,topLength*key+10,180,4);
				LODOP.ADD_PRINT_TEXT(topLength*(key+1),2,180,25,"应收合计："+data.order_money);
				LODOP.ADD_PRINT_TEXT(topLength*(key+2),2,180,25,"实收:"+data.money+'  找零:'+data.charge);
				LODOP.ADD_PRINT_TEXT(topLength*(key+3),2,180,25,"电话:"+data_null(data.tel));
				LODOP.ADD_PRINT_TEXT(topLength*(key+4),2,180,25,"地址:"+data_null(data.address));
				LODOP.ADD_PRINT_TEXT(topLength*(key+5),2,180,20,"****谢谢光临****");
				LODOP.SET_PRINT_STYLEA(0,"Alignment",2);
				LODOP.ADD_PRINT_TEXT(topLength*(key+6),2,180,25,"注:"+data_null(data.note));
				LODOP.SET_PRINT_STYLEA(0,"Alignment",2);
		};
	     
			$('button.btn').click(function(){
				$(this).siblings().removeClass('btn-primary');
				$(this).addClass('btn-primary');
				if($(this).attr('data-para')==1){
					$('div.form-group-pay').hide();
					$('div.form-group-cash').show();
				}else{
					$('div.form-group-pay').show();
					$('div.form-group-cash').hide();
				}
			})
			var key_sort = true;
			var ORDER_DATA;
			   $("table").delegate("#paySn","change",function(){ 
				   
				   if(key_sort){
					   check_pay(this);
					   //$(this).val('');
				   }
				}); 
			   $("table").delegate("#paySn","keydown",function(event){ 
				   if (event.keyCode == 13) {
					   key_sort = false;
					   check_pay(this);
			        	//$(this).val('');
			        }
				}); 
			   $("table").delegate("#orderSn","change",function(){   
				   if(key_sort){
					   check_order(this);
					   //$(this).val('');
				   }
				}); 
			   $("table").delegate("#orderSn","keydown",function(event){ 
				   if (event.keyCode == 13) {
					   key_sort = false;
			           check_order(this);
			        	//$(this).val('');
			        }
				}); 
               function check_pay(obj,pay_sn){
            	   $('#ordercoupon').html('');
       			   $('#ordercard').html('');
       			   $('#refundCoupon').html('');
       			  if(pay_sn){
       				  paySn = pay_sn;
         	       }else{
         	    	  paySn = $(obj).val();
         	       }
            	   if(paySn){
						$.ajax({
			        		type: "post",
			                url: "check_pay",
			                data: {paySn:paySn},
			                dataType: "json",
			                success: function(data){
                                if(data.state == '403'){
                                    layer.msg(data.msg);
                                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                }else if(data.state == '401'){
                                    layer.msg(data.msg);
                                    return false;
                                }else if(data.state){
			                		ORDER_DATA = data;
			                		order = data.order;
			                		buyer = data.buyer;
			                		if(pay_sn){
			                			$('#paySn').val('');
			                		}else{
			                			$(obj).val('');
			                		}
			                		
			                		$('#user_id').val(data_null(buyer.buyer_id));
			                		if(buyer.coupon>0||buyer.card>0){
			                			if(buyer.coupon>0){
			                				hcoupon = '抵用优惠卷<span class="coupon money">'+buyer.coupon+'</span>';
			                				$('#ordercoupon').html(hcoupon);
			                			}
			                			if(buyer.card>0){
			                				hcard = '抵用充值卡<span class="coupon money">'+buyer.card+'</span>';
			                				$('#ordercard').html(hcard);
			                			}
			                			appendAll(ORDER_DATA);total_money();
			                			swal({title:'',text:'该笔交易抵用了优惠卷只能整单退', type:"warning",timer:2000});
			                		}else{
				                		appendHtml(ORDER_DATA);total_money();
			                		}
			            			
			            			//info_success(obj);
			                	}else{
			                		swal({title:'',text:data.msg, type:"error",timer:2000});return false;
			                	}
			                }
						})
					}
               }
               function check_order(obj){
            	   orderSn = $(obj).val();
            	   $('#ordercoupon').html('');
       			   $('#ordercard').html('');
       			   $('#refundCoupon').html('');
            	   if(orderSn){
						$.ajax({
			        		type: "post",
			                url: "check_order",
			                data: {orderSn:orderSn},
			                dataType: "json",
			                success: function(data){
                                if(data.state == '403'){
                                    layer.msg(data.msg);
                                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                }else if(data.state == '401'){
                                    layer.msg(data.msg);
                                    return false;
                                }else if(data.state){
			                		ORDER_DATA = data;
			                		order = data.order;
			                		buyer = data.buyer;
			                		$(obj).val('');
			                		$('#user_id').val(data_null(buyer.buyer_id));
			                		if(buyer.coupon>0||buyer.card>0){
			                			
			                			swal({title:'',text:'该笔交易抵用了优惠卷只能整单退', type:"warning",timer:2000});
			                			if(buyer.coupon>0){
			                				hcoupon = '抵用优惠卷<span class="coupon money">'+buyer.coupon+'<span>';
			                				$('#ordercoupon').html(hcoupon);
			                			}
			                			if(buyer.card>0){
			                				hcard = '抵用充值卡<span class="coupon money">'+buyer.card+'<span>';
			                				$('#ordercard').html(hcard);
			                			}
			                			
			                			$('#refundChajia').text(number_format(buyer.paytotal-(buyer.coupon+buyer.card),2))
			                			appendAll(ORDER_DATA);
			                		}else{
			                			
				                		appendHtml(ORDER_DATA);
			                		}
			                		
			            			total_money();
			            			//info_success(obj);
			                	}else{
			                		swal({title:'',text:data.msg, type:"error",timer:2000});return false;
			                	}
			                }
						})
					}
               }
               function selectOrder(){
            	   var vstr = $('#allreturn').find('tbody').find('tr.current').attr('data-val');
            	   vstr = vstr.replace(/'/g, '"');
            	   dVal = JSON.parse(vstr);
            	   pay_sn = dVal.pay_sn;
            	   check_pay(dVal,pay_sn);
            	   //console.log(dVal,pay_sn);return false;
               }
			   /*输入货号尺码确定*/
			   $('.stockSubmit').click(function(){
			    	 var stock_code = $('#stockcode').val();
			    	 var stock_size = $('#size').val();
			    	 if(stock_code==''||stock_size==''){
			    		 swal({title:'',text:'货号和尺码不能为空', type:"error",timer:2000});return false;
			    	 }else{
			    		 check_goods(stock_code,stock_size);
			    	 }
			    	 return false;
			     })
			   var delKey = 0;
			   function returnS(str,obj){
				   delKey++;
				   if($(obj).hasClass('return-now')){
					   swal({title:'',text:'此货已选择退货请直接修改退货数量', type:"error",timer:2000});return false;
				   }
				   if(str.goods_num<=0){
					   swal({title:'',text:'此货已退不能重复退', type:"error",timer:2000});return false;
				   }
				   isReturn = false;
				   $(obj).parents('tr').siblings('tr.old-stock').each(function(){
					   if($(this).attr('data-id')==str.goods_id&&$(this).find('td.stocks_sn').text()==str.stocks_sn&&$(this).find('td.size').text()==str.size){
						   isReturn = true;
					   }
				   })
				   if(isReturn){
					   swal({title:'',text:'此货已退不能重复退', type:"error",timer:2000});return false;
				   }
				   $(obj).text('已退货');
				   $(obj).addClass('return-now');
				   $(obj).parents('tr').addClass('delKey_'+delKey);
				   tobj = $(obj).parents('tr');
				   trlen = tobj.siblings('tr').length;
				   tobj_h = '<tr class="return-stock delKey_'+delKey+'" data-id="'+str.goods_id+'">'+
				   '<td class="sort">'+trlen+'</td><td class="brand">'+data_null(str.brand_name)+
				   '</td><td class="barcode">'+data_null(str.stocks_bar_code)+'</td><td class="stocks_sn">'+str.stocks_sn+
				   '</td><td class="size">'+str.size+'</td>'+
				   '<td class="stocks_price">'+str.stocks_price+'</td><td class="col-xs-1 num">'+
				   '<input type="text" onchange="change_return(this)" data-num="'+str.goods_num+'" class="form-control input-sm" value="'+str.goods_num*(-1)+'" placeholder="退货数量">'+
				   '</td><td class="col-xs-1 true_price">'+str.goods_pay_price+'</td>'+
				   '<td class="col-xs-1 discount">'+str.discount+'</td><td class="stocks_total">'+number_format(data_null(str.priceTotal)*(-1),2)+
				   '</td><td class="memo">'+data_null(str.buyer_memo)+'</td><td class="old-button">'+
				   '<a href="javascript:;" onclick="delS(this)">删除</a></td></tr>';
				   $(obj).parents('tbody').find('td.add-button').parent('tr').before(tobj_h);
				   $(obj).parents('tbody').find('td.add-button').parent('tr').find('td.sort').text(trlen+1);
				   total_money();
				   stockSort();
			   }
			   function delS(obj){
				   var tobj = $(obj).parents('tr');
				   if(tobj.hasClass('return-stock')){
					   tobj.removeClass('return-stock');
					   tobjC = tobj.attr('class');
					   tobj.parent('tbody').find('tr.'+tobjC).find('a.return-now').text('退货');
					   tobj.parent('tbody').find('tr.'+tobjC).find('a.return-now').removeClass('return-now');
					   tobj.parent('tbody').find('tr.'+tobjC).removeClass(tobjC);
				   }
				   tobj.remove();
				   total_money();
				   stockSort();
			   }
			   function addS(str,obj){
				   stocks_code = $(obj).parents('tr').find('input.stocks_sn').val();
				   size = $(obj).parents('tr').find('input.size').val();
				   if(stocks_code&&size){
					   check_goods(stocks_code,size,obj); 
				   }else{
					   swal({title:'',text:'请先填写货号、尺码', type:"error",timer:2000});return false; 
				   }
				   
			   }  
			   function change_barcode(obj){
				   check_barcode(obj);
			   }  
			   function change_return(obj){
				   maxNum = $(obj).attr('data-num');
				   num = $(obj).val();
				   if(num>=0){
					   swal({title:'',text:'请填写小于0的整数', type:"error",timer:2000});return false;
				   }else{
					   if((parseInt(maxNum)+parseInt(num))<0){
						   swal({title:'',text:'退货数量不能大于下单数量', type:"error",timer:2000});
						   $(obj).val(maxNum*(-1));
						   return false;
					   } 
				   }
				   
			   }
			   function appendAll(order){
				   orderData = order.order;
	       			buyerData = order.buyer;
	       			$('#totalOrderPrice').text(number_format(buyerData.paytotal,2));
	       			var tableStr = '';
	       			$.each(orderData,function(index,val){
	       				
	       				tableStr +='<div class="goodsreturn-title">'+
							'<h3 data-sn="">订单号：<span class="refund-order">'+val.order.order_sn+'</span>&nbsp;&nbsp;&nbsp;'+buyerData.created_time+'　　会员信息：'+buyerData.user_name+'</h3>'+
							'</div>';
						tableStr +='<table class="table table-bordered" style="margin-top: 20px;">'+
								   '<thead><tr>'+
								   '<th>序号</th><th>品牌</th><th>条码</th><th>货号</th><th>尺码</th><th>单价</th><th>数量</th><th>实际单价</th><th>折扣</th><th>合计</th><th>备注</th><th>操作</th>'+
								   '</tr></thead>'+
								   '<tbody class="pay-content">';
						var slen = 1;		   
						$.each(val.stock,function(k,v){
							slen++;
							v.goods_pay_price = !(v.goods_pay_price)?v.stocks_price:v.goods_pay_price;
			       			v.goods_num = !(v.goods_num)?1:v.goods_num;
			       			v.user_name = !(v.user_name)?'':v.user_name;
			       			v.tel = !(v.tel)?'':v.tel;
			       			v.buyer_memo = !(v.buyer_memo)?'':v.buyer_memo;
			       			v.discount = (v.goods_pay_price/v.stocks_price).toFixed(2);
			       			v.priceTotal = (v.goods_pay_price*v.goods_num).toFixed(2);
			       			
			       			vstr = (JSON.stringify(v)).replace(/"/g, "'");
							tableStr +='<tr class="old-stock" data-id="'+v.goods_id+'">'+
							           '<td class="sort">'+(k+1)+'</td>'+
							           '<td class="brand">'+v.brand_name+'</td>'+
										'<td class="barcode">'+data_null(v.stocks_bar_code)+'</td>'+
										'<td class="stocks_sn">'+v.stocks_sn+'</td>'+
										'<td class="size">'+v.size+'</td>'+
										'<td class="stocks_price">'+v.stocks_price+'</td>'+
										'<td class="col-xs-1 num">'+v.goods_num+'</td>'+
										'<td class="col-xs-1 true_price">'+v.goods_pay_price+'</td>'+
										'<td class="col-xs-1 discount">'+v.discount+'</td>'+
										'<td class="stocks_total">'+v.priceTotal+'</td>'+
										'<td class="memo">'+data_null(v.buyer_memo)+'</td>'+
										'<td class="old-button"></td>'+
									'</tr>';
						})
					 tableStr1 ='<tr class="add-stock">'+
				           '<td>'+slen+'</td>'+
				           '<td></td>'+
							'<td><input type="text" onchange="change_barcode(this)" class="form-control input-sm" value="" placeholder="条码"></td>'+
							'<td><input type="text" onchange="change(this)" class="form-control input-sm" value="" placeholder="货号"></td>'+
							'<td><input type="text" onchange="change(this)" class="form-control input-sm" value="" placeholder="尺码"></td>'+
							'<td></td>'+
							'<td class="col-xs-1"><input type="text" onchange="change(this)" class="form-control input-sm" value="" placeholder="数量"></td>'+
							'<td class="col-xs-1"><input type="text" onchange="change(this)" class="form-control input-sm" value="" placeholder="实际单价"></td>'+
							'<td class="col-xs-1"><input type="text" onchange="change(this)" class="form-control input-sm" value="" placeholder="折扣"></td>'+
							'<td></td>'+
							'<td></td>'+
							'<td class="add-button"><a href="javascript:;"  onclick="addS('+vstr+',this)">新增</a></td>'+
						'</tr>';
				     tableStr +='</tbody></table>';	
	       			})
	       			$('#stockInfoForm').html(tableStr);
			   }
			   function appendHtml(order,stock){
				    stock_k = $('.pay-content').find('tr').size()+1;
		       		user_name = '';stockData = [];
		       		if(!stock){
		       			orderData = order.order;
		       			buyerData = order.buyer;
		       			$('#totalOrderPrice').text(number_format(buyerData.paytotal,2));
		       			var tableStr = '';
		       			$.each(orderData,function(index,val){
		       				
		       				tableStr +='<div class="goodsreturn-title">'+
								'<h3 data-sn="">订单号：<span class="refund-order">'+val.order.order_sn+'</span>&nbsp;&nbsp;&nbsp;'+buyerData.created_time+'　　会员信息：'+buyerData.user_name+'</h3>'+
								'</div>';
							tableStr +='<table class="table table-bordered" style="margin-top: 20px;">'+
									   '<thead><tr>'+
									   '<th>序号</th><th>品牌</th><th>条码</th><th>货号</th><th>尺码</th><th>单价</th><th>数量</th><th>实际单价</th><th>折扣</th><th>合计</th><th>备注</th><th>操作</th>'+
									   '</tr></thead>'+
									   '<tbody class="pay-content">';
							var slen = 1;		   
							$.each(val.stock,function(k,v){
								slen++;
								v.goods_pay_price = !(v.goods_pay_price)?v.stocks_price:v.goods_pay_price;
				       			v.goods_num = !(v.goods_num)?1:v.goods_num;
				       			v.user_name = !(v.user_name)?'':v.user_name;
				       			v.tel = !(v.tel)?'':v.tel;
				       			v.buyer_memo = !(v.buyer_memo)?'':v.buyer_memo;
				       			v.discount = (v.goods_pay_price/v.stocks_price).toFixed(2);
				       			v.priceTotal = (v.goods_pay_price*v.goods_num).toFixed(2);
				       			
				       			vstr = (JSON.stringify(v)).replace(/"/g, "'");
								tableStr +='<tr class="old-stock" data-id="'+v.goods_id+'">'+
								           '<td class="sort">'+(k+1)+'</td>'+
								           '<td class="brand">'+v.brand_name+'</td>'+
											'<td class="barcode">'+data_null(v.stocks_bar_code)+'</td>'+
											'<td class="stocks_sn">'+v.stocks_sn+'</td>'+
											'<td class="size">'+v.size+'</td>'+
											'<td class="stocks_price">'+v.stocks_price+'</td>'+
											'<td class="col-xs-1 num">'+v.goods_num+'</td>'+
											'<td class="col-xs-1 true_price">'+v.goods_pay_price+'</td>'+
											'<td class="col-xs-1 discount">'+v.discount+'</td>'+
											'<td class="stocks_total">'+v.priceTotal+'</td>'+
											'<td class="memo">'+data_null(v.buyer_memo)+'</td>'+
											'<td class="old-button"><a href="javascript:;"  onclick="returnS('+vstr+',this)">退货</a></td>'+
										'</tr>';
							})
						 tableStr +='<tr class="add-stock">'+
					           '<td>'+slen+'</td>'+
					           '<td></td>'+
					           '<td><input type="text" onchange="change_barcode(this)" class="form-control input-sm barcode" value="" placeholder="条码"></td>'+
								'<td><input type="text" onchange="change(this)" class="form-control input-sm stocks_sn" value="" placeholder="货号"></td>'+
								'<td><input type="text" onchange="change(this)" class="form-control input-sm size" value="" placeholder="尺码"></td>'+
								'<td></td>'+
								'<td class="col-xs-1"></td>'+
								'<td class="col-xs-1"></td>'+
								'<td class="col-xs-1"></td>'+
								'<td></td>'+
								'<td></td>'+
								'<td class="add-button"><a href="javascript:;"  onclick="addS('+vstr+',this)">新增</a></td>'+
							'</tr>';
					     tableStr +='</tbody></table>';	
		       			})
		       			$('#stockInfoForm').html(tableStr);
		       			//$('#totalOrderPay').val(order.goods_price);
		       			//stockData = orderData;
		       			old = true;
		       			stockType = 1;
		       		}else{
		       			old = false;
		       			stockType = 2;
		       			stockData = [stock];
		       		
		       		tr_str = '';
		       		$.each(stockData,function(k,stocks){
		       			stocks.goods_pay_price = !(stocks.goods_pay_price)?stocks.stocks_price:stocks.goods_pay_price;
		       			stocks.goods_num = !(stocks.goods_num)?1:stocks.goods_num;
		       			stocks.user_name = !(stocks.user_name)?'':stocks.user_name;
		       			stocks.tel = !(stocks.tel)?'':stocks.tel;
		       			stocks.buyer_memo = !(stocks.buyer_memo)?'':stocks.buyer_memo;
		       			discount = (stocks.goods_pay_price/stocks.stocks_price).toFixed(2);
		       			priceTotal = (stocks.goods_pay_price*stocks.goods_num).toFixed(2);
		       			tr_str += '<tr>'+
						'<td class="sort stockData"><span class="sort">'+stock_k+'</span>'+
						'<input type="hidden" name="put_goods_name[barcode][]" class="stock_barcode" value="'+stocks.stocks_bar_code+'"/>'+
						'<input type="hidden" name="put_goods_name[type][]" class="stock_type" value="'+stockType+'"/>'+
						'<input type="hidden" name="put_goods_name[stock_code][]" class="stock_code" value="'+stocks.stocks_sn+'"/>'+
						'<input type="hidden" name="put_goods_name[stock_size][]" class="stock_size" value="'+stocks.size+'"/>'+
						'<input type="hidden" name="put_goods_name[stock_num][]" class="stock_num" value="'+stocks.goods_num+'"/>'+
						'<input type="hidden" name="put_goods_name[stock_price][]" class="stock_price" value="'+stocks.stocks_price+'"/>'+
						'<input type="hidden" name="put_goods_name[stock_true_price][]" class="stock_true_price" value="'+stocks.goods_pay_price+'"/>'+
						'<input type="hidden" name="put_goods_name[stock_discount][]" class="stock_discount" value="'+discount+'"/>'+
						'<input type="hidden" name="put_goods_name[stock_price_total][]" class="stock_price_total" value="'+priceTotal+'"/>'+
						'</td>'+
						'<td class="barcode">'+stocks.stocks_bar_code+'</td>'+
						'<td class="code">'+stocks.stocks_sn+'</td>'+
						'<td class="size">'+stocks.size+'</td>'+
						'<td class="price">'+stocks.stocks_price+'</td>';
						if(old){
							tr_str +='<td class="num">'+stocks.goods_num+'</td>'+
							'<td class="true_price">'+stocks.goods_pay_price+'</td>'+
							'<td class="discount">'+discount+'</td>';
						}else{
							tr_str +='<td class="col-xs-1 num"><input type="text" onchange="change(this)" class="form-control input-sm" value="'+stocks.goods_num+'" placeholder="1"></td>'+
								'<td class="col-xs-1 true_price"><input type="text" onchange="change(this)" class="form-control input-sm" value="'+stocks.goods_pay_price+'" placeholder=""></td>'+
								'<td class="col-xs-1 discount"><input type="text" onchange="change(this)" class="form-control input-sm" value="'+discount+'" placeholder=""></td>';
						}
						tr_str +='<td class="sort price_total">'+priceTotal+'</td>'+
						'<td class="sort userinfo">'+data_null(stocks.user_name,stocks.tel)+'</td>'+
						'<td class="sort note">'+data_null(stocks.buyer_memo)+'</td>';
						if(old){
							tr_str +='<td class="sort"><a href="javascript:;" onclick="refundStock(this)">退货</a></td>';
						}else{
							tr_str +='<td class="sort"><a href="javascript:;" onclick="delStock(this)">删除</a></td>';
						}
						tr_str +='</tr>';
		       		})
		       		if(old){
		       			$('.pay-content').html(tr_str);
		       		}else{
		       			$('.pay-content').find('.addTr').before(tr_str);
		       		}	
		       		tr_str_null = '<tr class="addTr"><td class="sort stockData"><span class="sort"></span>'+
		       		'<input type="hidden" name="" class="stock_type" value="">'+
		       		'<input type="hidden" name="" class="stock_price" value="">'+
		       		'<input type="hidden" name="" class="stock_price_total" value="">'+
		       		'</td>'+
		       		'<td class="barcode"><input type="text" name="" class="stock_barcode" value=""></td>'+
		       		'<td class="code"><input type="text" name="" class="stock_code" value=""></td>'+
		       		'<td class="size"><input type="text" name="" class="stock_size" value=""></td>'+
		       		'<td class="price"></td>'+
		       		'<td class="num"></td>'+
		       		'<td class="true_price"></td>'+
		       		'<td class="discount"></td>'+
		       		'<td class="sort price_total"></td>'+
		       		'<td class="sort note"></td>'+
		       		'<td class="sort"><a href="javascript:;" onclick="addStock(this)">新增</a></td></tr>';
		       		if($('.pay-content').find('tr.addTr').length==0){
		       			$('.pay-content').append(tr_str_null);
		       		}
		       	}
	   			     stockSort();
	   			    total_money();
		   			
			    }
			   
			   function refundStock(obj){
				   delKey++;
				   thisTr = $(obj).parents('tr');
				   if(thisTr.hasClass('haveRefund')){
					   swal({title:'',text:'改商品已退货请直接修改退货数量', type:"error",timer:2000});return false;
				   }else{
					   thisTr.addClass('haveRefund');
					   thisTr.addClass('delKey_'+delKey);
					   $(obj).text('已退货');
				   }
				   thisTrHtml = '<tr class="isRefund delKey_'+delKey+'"><td class="sort stockData"><span class="sort"></span>'+
		       		'<input type="hidden" name="put_goods_name[type][]" class="stock_type" value="3">'+
		       		'<input type="hidden" name="put_goods_name[barcode][]" class="stock_barcode" value="'+thisTr.find('td.barcode').text()+'">'+
		       		'<input type="hidden" name="put_goods_name[stock_size][]" class="stock_size" value="'+thisTr.find('td.size').text()+'">'+
		       		'<input type="hidden" name="put_goods_name[stock_code][]" class="stock_code" value="'+thisTr.find('td.code').text()+'">'+
		       		'<input type="hidden" name="put_goods_name[stock_price][]" class="stock_price" value="'+thisTr.find('td.price').text()+'">'+
		       		'<input type="hidden" name="put_goods_name[stock_true_price][]" class="stock_true_price" value="'+thisTr.find('td.true_price').text()+'">'+
		       		'<input type="hidden" name="" class="stock_num" value="'+parseInt(thisTr.find('td.num').text())*(-1)+'">'+
		       		'<input type="hidden" name="put_goods_name[stock_old_num][]" class="stock_old_num" value="'+thisTr.find('td.num').text()+'">'+
		       		'<input type="hidden" name="put_goods_name[stock_discount][]" class="stock_discount" value="'+thisTr.find('td.discount').text()+'">'+
		       		'<input type="hidden" name="put_goods_name[stock_price_total][]" class="stock_price_total" value="'+parseFloat(thisTr.find('td.price_total').text())*(-1)+'">'+
		       		'</td>'+
		       		'<td class="barcode">'+thisTr.find('td.barcode').text()+'</td>'+
		       		'<td class="code">'+thisTr.find('td.code').text()+'</td>'+
		       		'<td class="size">'+thisTr.find('td.size').text()+'</td>'+
		       		'<td class="price">'+thisTr.find('td.price').text()+'</td>'+
		       		'<td class="num"><input type="text" name="put_goods_name[stock_num][]" onchange="change(this)" class="stock_num" value="'+parseInt(thisTr.find('td.num').text())*(-1)+'"></td>'+
		       		'<td class="true_price">'+thisTr.find('td.true_price').text()+'</td>'+
		       		'<td class="discount">'+thisTr.find('td.discount').text()+'</td>'+
		       		'<td class="sort price_total">'+number_format(parseFloat(thisTr.find('td.price_total').text())*(-1),2)+'</td>'+
		       		'<td class="sort note">'+thisTr.find('td.note').text()+'</td>'+
		       		'<td class="sort"><a href="javascript:;" onclick="delStock(this)">删除</a></td></tr>';
				   $('.pay-content').find('.addTr').before(thisTrHtml);
				   stockSort();
				   total_money();
			   }
			   function addStock(obj){
				   thisTr = $(obj).parents('tr');
				   barcode = thisTr.find('td.barcode').find('input').val();
				   stockcode = thisTr.find('td.code').find('input').val();
				   stocksize = thisTr.find('td.size').find('input').val();
				   if(barcode||(stockcode&&stocksize)){
					   if(barcode){
						   obj = thisTr.find('td.barcode').find('input');
						   check_barcode(obj);
					   }else{
						   check_goods(stockcode,stocksize); 
					   }
					   
				   }else{
					   swal({title:'',text:'请输入条码或者输入货号和尺码', type:"error",timer:2000});return false;
				   }
			   }
				function check_goods(stock_code,stock_size,obj){
						$.ajax({
			        		type: "post",
			                url: "check_goods",
			                data: {stock_code:stock_code,size:stock_size},
			                dataType: "json",
			                success: function(data){
                                if(data.state == '403'){
                                    layer.msg(data.msg);
                                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                }else if(data.state == '401'){
                                    layer.msg(data.msg);
                                    return false;
                                }else if(data.state){
			                		stocks = data.data;
			                		appendStock(stocks,obj);
			                		total_money();
			                	}else{
			                		swal({title:'',text:data.msg, type:"error",timer:2000});return false;
			                	}
			                }
						})
					
					
				}
			    
				function check_barcode(obj){
					barcode = $(obj).val();
					if(barcode){
						$.ajax({
			        		type: "post",
			                url: "check_barcode",
			                data: {barcode:barcode},
			                dataType: "json",
			                success: function(data){
                                if(data.state == '403'){
                                    layer.msg(data.msg);
                                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                }else if(data.state == '401'){
                                    layer.msg(data.msg);
                                    return false;
                                }else if(data.state){
			                		stocks = data.data;
			                		//console.log(stocks);
			                		appendStock(stocks,obj);
			            			total_money();
			            			//info_success(obj);
			                	}else{
			                		swal({title:'',text:data.msg, type:"error",timer:2000});return false;
			                	}
			                }
						})
					}
					
				}
				function appendStock(stocks,obj){
					//console.log(stocks)
					str='<tr class="new-stock" data-id="'+stocks.goods_id+'"><td>1</td><td>'+data_null(stocks.brand_name)+'</td><td class="barcode">'
					+data_null(stocks.stocks_bar_code)+'</td><td class="stocks_sn">'
					+stocks.stocks_sn+'</td><td  class="size">'
					+stocks.size+'</td><td  class="stocks_price">'+stocks.stocks_price+'</td>'+
					'<td class="col-xs-1  num">'+
					'<input type="text" onchange="change(this)" class="form-control input-sm" value="1" placeholder="数量">'+
					'</td>'+
					'<td class="col-xs-1 true_price">'+
					'<input type="text" onchange="change(this)" class="form-control input-sm" value="'+stocks.stocks_price+'" placeholder="实际价格">'+
					'</td>'+
					'<td class="col-xs-1 discount">'+
					'<input type="text" onchange="change(this)" class="form-control input-sm " value="" placeholder="折扣">'+
					'</td>'+
					'<td class="pricetotal">'+stocks.stocks_price+'</td><td></td><td class="new-button">'+
					'<a href="javascript:;" onclick="delS(this)">删除</a></td></tr>';
					$(obj).parents('tr').before(str);
					//console.log(str);
					stockSort();
				}
			function delStock(obj){
				thisTr = $(obj).parents('tr');
                if(thisTr.hasClass('isRefund')){
                	thisTr.removeClass('isRefund');
                	thisClass = thisTr.attr('class');
                	thisTr.remove();
                	$('tr.'+thisClass).removeClass('haveRefund');
                	$('tr.'+thisClass).find('td:last').find('a').text('退货');
                	$('tr.'+thisClass).removeClass();
				}else{
					thisTr.remove();
				}
				total_money();
				stockSort();
			}	
			function change(obj){
				var thisTr = $(obj).parents('tr');
				var num = thisTr.find('td.num').find('input').val();
				var num1 = thisTr.find('td.num').text();num = data_null(num,num1);
				var price = thisTr.find('td.stocks_price').text();
				var true_price = thisTr.find('td.true_price').find('input').val();
				var true_price1 = thisTr.find('td.true_price').text();true_price = data_null(true_price,true_price1);
				var discount = thisTr.find('td.discount').find('input').val();
				var discount1 = thisTr.find('td.discount').text();discount = data_null(discount,discount1);
	            if($(obj).hasClass('true_price')||$(obj).parent().hasClass('true_price')){
	            	discount = parseFloat(true_price/price).toFixed(2);
	            }
	            if($(obj).hasClass('discount')||$(obj).parent().hasClass('discount')){
	            	true_price = parseFloat(price*discount).toFixed(2);
	            }
				numV = (num=='')?1:num;
				discountV = (discount=='')?1:discount;
				totalPrice = (true_price*numV).toFixed(2)
				console.log(totalPrice)
				thisTr.find('td.pricetotal').text(totalPrice);
				if(thisTr.find('td.true_price input').length!=0){
					thisTr.find('td.true_price input').val(true_price);
				}else{
					thisTr.find('td.true_price').text(true_price);
				}
				if(thisTr.find('td.discount input').length!=0){
					thisTr.find('td.discount input').val(discountV);
				}else{
					thisTr.find('td.discount').text(discountV);
				}
				total_money();
			}
			function stockSort(){
				$('tbody.pay-content').each(function(index,tt){
					$(this).find('tr').each(function(k,v){
						thisTd = $(this).find('td:first');
						thisTd.text(k+1);
					})
				})
			}
			function total_money(){
				amount = 0;number = 0;total=0;
				$('tbody.pay-content').find('tr').each(function(){
					barcode = $(this).find('td.barcode').text();
					stock_code = $(this).find('td.stocks_sn').text();
					price = $(this).find('td.stocks_price').text();
					if($(this).hasClass('old-stock')){
						num = $(this).find('td.num').text();
						true_price = $(this).find('td.true_price').text();
						discount = $(this).find('td.discount').text();
					}else if($(this).hasClass('return-stock')){
						num = $(this).find('td.num input').val();
						true_price = $(this).find('td.true_price').text();
						discount = $(this).find('td.discount').text();
					}else if($(this).hasClass('new-stock')){
						num = $(this).find('td.num input').val();
						true_price = $(this).find('td.true_price input').val();
						discount = $(this).find('td.discount input').val();
					}
					if(!isNaN(num*true_price)&&(barcode||stock_code)){
						amount +=parseFloat(num*true_price);
						number +=parseInt(num);
						total +=parseFloat(num*price);
					}
					
				})
				ordercoupon = $('#ordercoupon .money').text();
				ordercard = $('#ordercard .money').text();
				oldAmount = parseFloat($('#totalOrderPrice').text());
				if(data_null(ordercoupon)>0||data_null(ordercard)>0){
					refundChajia = amount-parseFloat(ordercoupon)-parseFloat(ordercard);
				}else{
					refundChajia = oldAmount-amount;
				}
				if(refundChajia>=0){
					$('#refundType').text('应退：');
					$('#refundType').attr('nctype',1);
					$('#refundChajia').text(number_format(refundChajia,2));
					if(data_null(ordercard)>0){
						$('#refundCoupon').html(',返还充值卡<span class="color">'+number_format(ordercard,2)+'</span>');
					}
				}else if(refundChajia<0){
					$('#refundType').text('应补差价：');
					$('#refundType').attr('nctype',2);
					$('#refundChajia').text(number_format(refundChajia*(-1),2));
				}
				amount = number_format(amount,2);
				total = number_format(total,2);
				$('h3.totalPrice').find('span.number').text(amount);
				$('h3.totalPrice').find('span.num').text(number);
				$('h3.totalPrice').find('input[name=totalPrice]').val(amount);
				$('h3.totalPrice').find('input[name=total]').val(total);
			}
			/*库存查询*/
			function searchAmount(){
				var searchVal = $('#stock').val();
				
				   if(searchVal==''){
					   swal({title:'',text:'请输入查询条件', type:"error",timer:2000});return false;
				   }else{
					   if(searchVal.length<2){
							swal({title:'',text:'请至少输入2个字符', type:"error",timer:2000});return false;
						}
					   $.ajax({
			        		type: "post",
			                url: "check_stock",
			                data: {stock:searchVal},
			                dataType: "json",
			                success: function(data){
			                	var str = '';
                                if(data.state == '403'){
                                    layer.msg(data.msg);
                                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                }else if(data.state == '401'){
                                    layer.msg(data.msg);
                                    return false;
                                }else if(data.state){
			                		stockInfo = data.stock;
			                		$.each(stockInfo,function(k,v){
			                			if(v.price){
			                				v.stocks_price=v.price;
			                			}
			                			if(v.barcode){
			                				v.stocks_bar_code=v.barcode;
			                			}
			                			if(!v.stocks_sn){
			                				v.stocks_sn=v.stocks_sku;
			                			}
			                			var dataStr = JSON.stringify(v).replace(/"/g, "'");
			                			str+='<tr onclick="selectStock(this)" data-val="'+dataStr+'"><td>'+data_null(v.goods_name)+'</td>'+
				            				'<td>'+data_null(v.stocks_bar_code)+'</td>'+
				            				'<td>'+data_null(v.stocks_sn)+'</td>'+
				            				'<td>'+data_null(v.size)+'</td>'+
				            				'<td>'+data_null(v.amount)+'</td>'+
				            				'<td>'+data_null(v.stocks_price)+'</td>'+
				            				'<td></td></tr>';
				            				
			                		})
			                		/* $('#userInfo').val(data.data.user_name);
			                		$('#user_id').val(data.data.user_id); */
			                		//$('#userErr').html('');
			                	}else{
			                		str = '<tr><td colspan="7">未搜到符合条件的记录！</td></tr>';
			                		//$('#userErr').html(data.msg);
			                		//swal({title:'',text:data.msg, type:"error",timer:2000});return false;
			                	}
			                	$('#selectstock').find('table').children('tbody').html(str);
			                }
						})
				   }
			}
			/*库存查询*/
			function searchOrder(){
				var searchVal = $('#orderReturn').val();
				var searchVal_ = $('#form-order').serialize();
				   if(searchVal==''&&$('#startime').val()==''&&$('#endtime').val()==''&&$('input[name=orderBuyer]').val()==''){
					   swal({title:'',text:'请输入查询条件', type:"error",timer:2000});return false;
				   }else{
					   if($('#startime').val()==''&&$('#endtime').val()==''){
						   if(searchVal.length<2&&$('input[name=orderBuyer]').val().length<2){
								swal({title:'',text:'搜索范围过大，请至少输入2个字符', type:"error",timer:2000});return false;
							}
					   }
					   $.ajax({
			        		type: "post",
			                url: "check_orderAll",
			                data: searchVal_,
			                dataType: "json",
			                success: function(data){
			                	var str = '';
                                if(data.state == '403'){
                                    layer.msg(data.msg);
                                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                }else if(data.state == '401'){
                                    layer.msg(data.msg);
                                    return false;
                                }else if(data.state){
			                		stockInfo = data.data;
			                		$.each(stockInfo,function(k,v){
			                			var dataStr = JSON.stringify(v).replace(/"/g, "'");
			                			str+='<tr onclick="selectStock(this)" data-val="'+dataStr+'">'+
			                			/* '<td><div class="checkbox">'+
											'<label><input type="checkbox" value=""></label>'+
											'</div></td>'+ */
				            				'<td>'+data_null(v.pay_sn)+'</td>'+
				            				'<td>'+data_null(v.order_sn)+'</td>'+
				            				'<td>'+data_null(v.user_name)+'</td>'+
				            				'<td>'+data_null(v.tel)+'</td>'+
				            				'<td>'+data_null(v.date)+'</td>'+
				            				'<td>'+data_null(v.goods_num)+'</td>'+
				            				'<td>'+data_null(v.order_price)+'</td>'+
				            				'<td>'+data_null(v.goods_price)+'</td>'+
				            				'<td>'+data_null(v.counpon_amount)+'</td>'+
				            				'<td>'+data_null(v.rechargeable_card_num)+'</td>'+
				            				'</tr>';
				            				
			                		})
			                		/* $('#userInfo').val(data.data.user_name);
			                		$('#user_id').val(data.data.user_id); */
			                		//$('#userErr').html('');
			                	}else{
			                		str = '<tr><td colspan="12">未搜到符合条件的记录！</td></tr>';
			                		//$('#userErr').html(data.msg);
			                		//swal({title:'',text:data.msg, type:"error",timer:2000});return false;
			                	}
			                	$('#allreturn').find('table').children('tbody').html(str);
			                }
						})
				   }
			}
			function selectStock(obj){
				  $(obj).siblings('tr').removeClass('current');
				  $(obj).addClass('current');
				  //console.log(dataJson)
			  }
			  function selectStockSure(){
				  var selectTr = $('#selectstock').find('tbody').find('tr.current');
				  var dataStr = selectTr.attr('data-val');
				  dataStr = dataStr.replace(/'/g, '"');
				  dataJson = JSON.parse(dataStr);
				  dataJson.stocks_bar_code = data_null(dataJson.barcode,dataJson.stocks_bar_code);
				  dataJson.stocks_sn = data_null(dataJson.stocks_sn,dataJson.stocks_sku);
				  dataJson.stocks_price = data_null(dataJson.price,dataJson.stocks_price);
				  dataJson.size = data_null(dataJson.size);
				  appendHtml(dataJson);
				  total_money();
			  }
			  function refund(type_,state){
				  post_data = [];  
				  $('span.refund-order').each(function(){
					  stocks = [];
					  $(this).parents('div.goodsreturn-title').next('table').find('.pay-content').find('tr').each(function(){
						  if($(this).attr('data-id')){
							  if(type_==0){
								  num = $(this).find('td.num').text();
								  price = $(this).find('td.true_price').text();
								  stock = {
											'stocks_sn':$(this).find('td.stocks_sn').text(),'goods_id':$(this).attr('data-id'),
											'size':$(this).find('td.size').text(),'num':num,'true_price':price,
											'type':1,
										  };
								  stock_ = {
											'stocks_sn':$(this).find('td.stocks_sn').text(),'goods_id':$(this).attr('data-id'),
											'size':$(this).find('td.size').text(),'num':num*(-1),'true_price':price,
											'type':2,
										  };
								  stocks.push(stock);
								  stocks.push(stock_);
							  }else{
								  if($(this).hasClass('old-stock')){
									  type = 1;
									  num = $(this).find('td.num').text();
									  price = $(this).find('td.true_price').text();
								  }else if($(this).hasClass('return-stock')){
									  type = 2;
									  num = $(this).find('td.num input').val();
									  price = $(this).find('td.true_price').text();
								  }else if($(this).hasClass('new-stock')){
									  type = 3;
									  num = $(this).find('td.num input').val();
									  price = $(this).find('td.true_price input').val();
								  }
								  if(type_==0){
									  num = (num>0)?num*(-1):num;
								  }
								  stock = {
											'stocks_sn':$(this).find('td.stocks_sn').text(),'goods_id':$(this).attr('data-id'),
											'size':$(this).find('td.size').text(),'num':num,'true_price':price,
											'type':type,
										  };
								  stocks.push(stock);
							  }
							  
						  } 
					  })
					  order = {"order_sn":$(this).text(),"stocks":stocks};
					  post_data.push(order);
				  })
				  var post_dataInfo = JSON.stringify(post_data);
				  pay = $('#payInfoForm').serialize();
				  $.ajax({
		        		type: "post",
		                url: "refund?state="+state+"&guide="+$('#storeGuide').val()+'&type='+type_,
		                data: 'order='+post_dataInfo+'&'+pay,
		                dataType: "json",
		                success: function(data){

                            if(data.state == '403'){
                                layer.msg(data.msg);
                                window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                            }else if(data.state == '401'){
                                layer.msg(data.msg);
                                return false;
                            }else if(data.state){
		                		
		                		swal({title:'',text:data.msg, type:"success",timer:2000});
		                		$('#confirmpay').modal('hide');
		                		CreateFullBill(data.data);
		            	    	LODOP.PRINT();
		                		 setTimeout(function(){
		                			 window.location.reload();
		                		    },2000);
		                	}else{
		                		swal({title:'',text:data.msg, type:"error",timer:2000});return false;
		                	}
		                }
					})
			  }
			  function refundOrder(type_){
				  if($('.payRefaud').text()>0){
					  layer.confirm('退换现金还是余额？',{btn:['余额','现金']},function(){
						  layer.closeAll();
						  refund(type_,1);
					  },function(){
						  refund(type_,2);
						  layer.closeAll();
					  })
				  }
				}
			/*确认收款*/
			function paySure(){
				 var payData = $('tbody.pay-content');
				 if(payData.find('tr').length==0){
					 swal({title:'',text:'请先添加订单商品', type:"error",timer:2000});return false;
				 }
				 refundChajia = $('#refundChajia').text();
				 refundType = $('#refundType').attr('nctype');
				 oldtotalOrderPrice = $('#totalOrderPrice').text();
				 if(oldtotalOrderPrice<=0){
					 swal({title:'',text:'订单商品已全退不能再退了', type:"error",timer:2000});return false;
				 }
				 var isSure = payData.find('td.num').find('input').size();
				 var refundAll = payData.find('tr.old-stock').size();
				 if(isSure){
					 $('#confirmpay').modal('show');
					 $('#confirmpay').on('shown.bs.modal', function () {
						  // 执行一些动作...
						  var totalPrice = $('h3.totalPrice').find('span.number').text();//商品总价
						  var payOldHave = $('h3.totalPrice').find('#totalOrderPrice').text();//原总价
						  var total = $('h3.totalPrice').find('input[name=total]').val();//原不打折总价
						  var totalNumber = $('h3.totalPrice').find('span.num').text();//件数
						  var userId = $('#user_id').val();
						  $('span.payNumber').text(totalNumber);
						  $('span.payPrice').text(totalPrice);
						  $('span.payOldHave').text(payOldHave);
						  var payHave = parseFloat(payOldHave)-parseFloat(totalPrice);
						  $('span.payHave').text(totalPrice);
						  $('span.payRefaud').text(number_format(payHave,2));
						  if(userId){
							  $.ajax({
					        		type: "post",
					                url: "getUser",
					                data: {userId:userId},
					                dataType: "json",
					                success: function(data){
                                        if(data.state == '403'){
                                            layer.msg(data.msg);
                                            window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                        }else if(data.state == '401'){
                                            layer.msg(data.msg);
                                            return false;
                                        }else if(data.state){
					                	  var userTel = data.user.tel;
					      				  var userBalance = data.user.balance;
					      				  var userGrade = data.user.mld_name;
					      				  var userName = data.user.user_name;
					      				  var userIntegral = data.user.integral;
					      				  var userCard = data.user.rechargeable_card_num;
					      				  //console.log(userName);
					      				$('td.payUserName').text(userName);
					  				    $('td.payUserTel').text(userTel);
					  				    $('td.payUserGrade').text(userGrade);
					  				    $('td.payUserBalance').text(userBalance);
					  				    $('td.payUserCard').text(userCard);
					  				    $('td.payUserIntegral').text(userIntegral);
					                	}
					                }
								})
						  }
						  //paychange();
						  
					})
				 }else if(refundAll){
					 layer.confirm('确认全部退货？',{btn:['确认','取消']},function(){
						 layer.closeAll();
						 $('#refundType').attr('nctype',0);
						 $('#confirmpay').modal('show');
						 $('#confirmpay').on('shown.bs.modal', function () {
							  // 执行一些动作...
							  $('#payDshould').hide();
							  var totalPrice = $('h3.totalPrice').find('span.number').text();//商品总价
							  var payOldHave = $('h3.totalPrice').find('#totalOrderPrice').text();//原总价
							  var total = $('h3.totalPrice').find('input[name=total]').val();//原不打折总价
							  var totalNumber = $('h3.totalPrice').find('span.num').text();//件数
							  var coupon = $('#ordercoupon .money').text();//卷
							  var chargrcard = $('#ordercard .money').text();//充值卡
							  coupon = parseFloat(number_null(coupon)); chargrcard = parseFloat(number_null(chargrcard));
							  if(coupon>0){
								  $('#payDcoupon').show();
								  $('#payDcoupon .payDcoupon').text(parseFloat(coupon));
								  
							  }
							  if(chargrcard>0){
								  $('#payDcard').show();
								  $('#payDcard .payDcard').text(parseFloat(chargrcard));
							  }
							  var userId = $('#user_id').val();
							  $('span.payNumber').text(totalNumber);
							  $('span.payPrice').text(totalPrice);
							  $('span.payOldHave').text(payOldHave);
							  var payHave = parseFloat(payOldHave)-parseFloat(totalPrice);
							  $('span.payHave').text(0);
							  refundChajia = parseFloat(totalPrice)-coupon-chargrcard;
							  $('span.payRefaud').text(number_format(refundChajia,2));
							  $('#refundChajia').text(number_format(refundChajia,2));
							  $('#payInfoForm').find('input[type=text]').attr('readonly',true);
							  if(userId){
								  $.ajax({
						        		type: "post",
						                url: "getUser",
						                data: {userId:userId},
						                dataType: "json",
						                success: function(data){
                                            if(data.state == '403'){
                                                layer.msg(data.msg);
                                                window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                            }else if(data.state == '401'){
                                                layer.msg(data.msg);
                                                return false;
                                            }else if(data.state){
						                	  var userTel = data.user.tel;
						      				  var userBalance = data.user.balance;
						      				  var userGrade = data.user.mld_name;
						      				  var userName = data.user.user_name;
						      				  var userIntegral = data.user.integral;
						      				  var userCard = data.user.rechargeable_card_num;
						      				  //console.log(userName);
						      				$('td.payUserName').text(userName);
						  				    $('td.payUserTel').text(userTel);
						  				    $('td.payUserGrade').text(userGrade);
						  				    $('td.payUserBalance').text(userBalance);
						  				    $('td.payUserCard').text(userCard);
						  				    $('td.payUserIntegral').text(userIntegral);
						                	}
						                }
									})
							  }
							 
							  
						})
					 })
					 
				 }
				 else{
					 swal({title:'',text:'请先选择要退换的商品', type:"error",timer:2000});return false;
				 }
				 
			 } 
			function paychange(obj){
				var user_id = $('#user_id').val();
				var payHave = $('span.payPrice').text();payHave = parseFloat(payHave);//商品价
				var payOldHave = $('span.payOldHave').text();payOldHave = parseFloat(payOldHave);//已支付
				payS = parseFloat(payHave-payOldHave);//还应支付
				//var ml = $('input[name=payml]').val();ml = (ml=='')?0:parseFloat(ml);
				var balance = $('input[name=paybalance]').val();balance = (balance=='')?0:parseFloat(balance);
				var coupon = $('input[name=paycoupon]').val();coupon = (coupon=='')?0:parseFloat(coupon);
				var card = $('input[name=paycard]').val();card = (card=='')?0:parseFloat(card);
				var cash = $('input[name=paycash]').val();cash = (cash=='')?0:parseFloat(cash);
				var bank = $('input[name=paybank]').val();bank = (bank=='')?0:parseFloat(bank);
				var wx = $('input[name=paywx]').val();wx = (wx=='')?0:parseFloat(wx);
				var zfb = $('input[name=payzfb]').val();zfb = (zfb=='')?0:parseFloat(zfb);
				if(!user_id){
					if(balance>0){
						$('input[name=paybalance]').val('');
						swal({title:'',text:'用户还不是会员不存在余额', type:"error",timer:2000});return false;
					}
					if(card>0){
						$('input[name=paycard]').val('');
						swal({title:'',text:'用户还不是会员不存在充值卡余额', type:"error",timer:2000});return false;
					}
				}
				if($(obj).attr('name')=='paybalance'){
					maxB_ = $('.payUserBalance').text();maxB = parseFloat(number_null(maxB_));
					if(balance>maxB){
						$('input[name=paybalance]').val(maxB_);
						swal({title:'',text:'用户余额不足', type:"error",timer:2000});
						balance = maxB;
					}
				}
				if($(obj).attr('name')=='paycard'){
					maxC_ = $('.payUserCard').text();maxC = parseFloat(number_null(maxC_));
					if(card>maxC){
						$('input[name=paycard]').val(maxC_);
						swal({title:'',text:'用户充值卡余额不足', type:"error",timer:2000});
						card = maxC;
					}
				}
				if(coupon>payS||(coupon+card)>=payS){
					if(card>0&&coupon>payS){
						$('input[name=paycard]').val('');
					}else{
						pay_have = number_format(card,2);
					}
					pay_have = '0.00';
					payNow = '0.00';
					payRefaud = balance+cash+bank+wx+zfb;
					payRefaud = number_format(payRefaud,2);
				}else{
					pay_have = number_format((payHave-coupon),2);
					payhave = number_format((payHave-coupon-payOldHave),2);
					payNow = cash+bank+wx+zfb+balance+coupon+card;
					payTrue = cash+bank+wx+zfb+balance+card;
					payRefaud = payTrue-payhave;
					payNow = number_format(payTrue,2);
					payRefaud = number_format(payRefaud,2);
					
				}
				$('span.payTrue').text(payNow);
				$('span.payRefaud').text(payRefaud);
				$('span.payHave').text(pay_have);
			}
			//指向下一个焦点
			function input_focus(){		
				//$("a.btn-yes").parents('tr').find('td.barcode input').focus();
			}

			function payOrder(){
				user = $('#userInfoForm').serialize();
				stock = $('#stockInfoForm').serialize();
				pay = $('#payInfoForm').serialize();
				$.ajax({
	        		type: "post",
	                url: "pay?guide="+$('#storeGuide').val(),
	                data: user+'&'+stock+'&'+pay,
	                dataType: "json",
	                success: function(data){

                        if(data.state == '403'){
                            layer.msg(data.msg);
                            window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                        }else if(data.state == '401'){
                            layer.msg(data.msg);
                            return false;
                        }else if(data.state){
	                		
	                		swal({title:'',text:data.msg, type:"success",timer:2000});
	                		$('#confirmpay').modal('hide');
	                		CreateFullBill(data.data);
	            	    	LODOP.PRINT();
	                		 setTimeout(function(){
	                			 window.location.reload();
	                		    },2000);
	                	}else{
	                		swal({title:'',text:data.msg, type:"error",timer:2000});return false;
	                	}
	                }
				})
				//return false;
			}
			function pay(){
				amount = 0;isPay = false;isSure = true;
				payRefaud = $('span.payRefaud').text();
				type = $('#refundType').attr('nctype');
				if(payRefaud==''){
					isSure = false;
				}else{
					if(parseFloat(payRefaud)<0){
						isSure = false;
					}
				}
				if(isSure){
					refundOrder(type);
				}else{
					swal({   title: "Are you sure?",   
						     text: "实际支付金额不够，确认结账？",   
						     type: "warning",   
						     showCancelButton: true,   
						     confirmButtonColor: "#DD6B55",   
						     cancelButtonText: "取消",   
						     confirmButtonText: "确认结账",   
						     closeOnConfirm: false 
						  }, 
					      function(){   
							  refundOrder(type);  
							  //swal("Deleted!", "Your imaginary file has been deleted.", "success");
					});
				}
				/*return false;
				$('tbody.pay-content').find('tr').each(function(){
					num = $(this).find('td.stock_num input').val();
					price = $(this).find('td.stock_price input').val();
					if(!isNaN(num*price)){
						isPay = true;
						amount +=parseFloat(num*price);
					}
					
				})
				//console.log(amount);
				//amount = $('#goods_price').val();
				amount = number_format(amount,2);
				if(amount>=0.1){
					
					$.ajax({
		        		type: "post",
		                url: 'pay?type='+$('button.btn-primary').attr('data-para'),
		                data: $('#micropay').serialize(),
		                dataType: "json",
		                success: function(data){
		                	if(data.state == '403'){
                            layer.msg(data.msg);
                            window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                        }else if(data.state == '401'){
                            layer.msg(data.msg);
                            return false;
                        }else if(data.state){
		                		swal({title:'',text:data.msg, type:"success",timer:2000});
		                		CreateFullBill(data.data);
		            	    	LODOP.PRINT();
		                		 setTimeout(function(){
		                			 window.location.reload();
		                		    },2000);
		                	}else{
		                		swal({title:'',text:data.msg, type:"error",timer:2000});return false;
		                	}
		                }
					})
				}else{
					if($('table').find('tr.odd').size()>=2){
						swal({title:'',text:'支付金额至少为0.1元', type:"error",timer:2000});return false;
					}else{
						swal({title:'',text:'没有货品信息', type:"error",timer:2000});return false;
					}
					
				}*/
			}
		 $(document).ready(function() {
		    	if(typeof(LODOP)=='object'&&typeof(LODOP.PRINT_INITA)=='function'){
		    		input_focus();
		    	}else{
		    		install_print();
		    	}
		    	//检查手机号是否正确
		    	var isTel = true;
		    	function checkTel(value){
		          var length = value.length; 
          		  var mobile = /^(((13[0-9]{1})|(15[0-9]{1}|(18[0-9]{1})|(17[0-9]{1})))+\d{8})$/; 
          		   if(length == 11 && mobile.test(value)){
          			 isTel = true;
          		   }else{
          			 isTel = false;  
          		   }
		    	}
		    	 $('#userTel').blur(function(){
		    		var user_tel = $(this).val();
		    		if(user_tel!=''){
		    			checkTel(user_tel);
		    			if(!isTel){
		    				swal({title:'',text:'手机格式不正确', type:"error",timer:2000});return false;
		    			}
		    			$.ajax({
			        		type: "post",
			                url: "check_user_tel",
			                data: {user_tel:user_tel},
			                dataType: "json",
			                success: function(data){
                                if(data.state == '403'){
                                    layer.msg(data.msg);
                                    window.top.location.href = "http://[::1]/yunjuke/pay.php/Index/login_out";
                                }else if(data.state == '401'){
                                    layer.msg(data.msg);
                                    return false;
                                }else if(data.state){
			                		$('#user_id').val(data.user.user_id);
			                		$('#userName').val(data_null(data.user.user_name));
		                			$('#userQQ').val(data_null(data.user.qq));
		                			$('#userAddress').val(data_null(data.user.user_addres));
			                		var payContent = $('.pay-content').find('tr');
			                		if(payContent.length>0){
			                			payContent.find('td.userinfo').text(data_null(data.user.user_name));
			                		}
			                		//$('#userErr').html('');
			                	}else{
			                		//$('#userErr').html(data.msg);
			                		//swal({title:'',text:data.msg, type:"error",timer:2000});return false;
			                	}
			                }
						})
		    		}
		    	}) 
		    })
		   
	    
		</script>
		
	</body>

</html><?php }
}
