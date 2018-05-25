@extends('layout.home')
@section('address')
        <link href="css/style_1.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/common_1.js">
        </script>
        <script type="text/javascript" src="js/shopping_flow_1.js">
        </script>
    </head>

    <body>
        <div class="bodycart_v ">
            <script type="text/javascript">
                var process_request = "正在处理您的请求...";
            </script>
            <script type="text/javascript">
                //收藏本站 bbs.ecmoban.com
                function AddFavorite(title, url) {
                    try {
                        window.external.addFavorite(url, title);
                    } catch(e) {
                        try {
                            window.sidebar.addPanel(title, url, "");
                        } catch(e) {
                            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
                        }
                    }
                }
            </script>
            <div id="TopTools" class="TopToolsFlow" style=" height:24px; background:#fdfdfd; border-bottom:1px solid #e9e9e9;">
                <div class="headBox">
                    <div class="TopToolsLeft f_l">
                    </div>
                    <div class="TopToolsRight f_r">
                        <ul>
                            <script type="text/javascript" src="js/jquery-1.js">
                            </script>
                            <script type="text/javascript" src="js/jquery_002.js">
                            </script>
                            <script type="text/javascript" src="js/jquery.js">
                            </script>
                            <script type="text/javascript" src="js/transport_jquery.js">
                            </script>
                            <script type="text/javascript" src="js/utils_1.js">
                            </script>
                            <script type="text/javascript" src="js/ecmoban_common.js">
                            </script>
                            <li>
                                <a href="http://weipin.ecshop119.com/user.php">
                                    chen25214
                                </a>
                            </li>
                            <li>
                                <a href="http://weipin.ecshop119.com/user.php?act=logout">
                                    退出
                                </a>
                            </li>
                            <li>
                                <a href="http://weipin.ecshop119.com/flow.php">
                                    购物袋
                                </a>
                            </li>
                            <li>
                                <a href="http://weipin.ecshop119.com/user.php?act=collection_list">
                                    收藏的商品
                                </a>
                            </li>
                            <li>
                                <a href="http://weipin.ecshop119.com/user.php?act=order_list">
                                    我的订单
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript">
                    $(".Hover").hover(function() {
                        $(this).children('.HoverCon').fadeIn(0);
                        $(".Hover").addClass("On");
                    },

                    function() {
                        $(this).children('.HoverCon').fadeOut(0);
                        $(".Hover").removeClass("On");
                    });
                </script>
            </div>
            <div class="header headerFlow">
                <div class="headBody">
                    <script type="text/javascript" src="js/default.js">
                    </script>
                    <div class="headBox HeadBox">
                        <div class="logo f_l">
                            <a href="" name="top">
                                <img src="picture/logo_1.gif">
                            </a>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(".All").hover(function() {
                        $(this).addClass("on");
                    },
                    function() {
                        $(this).removeClass("on");
                    });
                    //
                    jQuery(".slideTxtBox").slide({
                        delayTime: 0
                    });
                </script>
            </div>
        </div>
        <div class="nstep_tit">
            <div class="nstep_titBox">
                <div class="ShoppingProcess">
                    <ul>
                        <li>
                            <i class="ico1">
                            </i>
                            100%正品保证
                        </li>
                        <li>
                            <i class="ico2">
                            </i>
                            七天无理由退货
                        </li>
                        <li>
                            <i class="ico3">
                            </i>
                            退货返运费
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="block_s">
            <script type="text/javascript" src="js/showdiv_1.js">
            </script>
            <script type="text/javascript">
                var user_name_empty = "请输入您的用户名！";
                var email_address_empty = "请输入您的电子邮件地址！";
                var email_address_error = "您输入的电子邮件地址格式不正确！";
                var new_password_empty = "请输入您的新密码！";
                var confirm_password_empty = "请输入您的确认密码！";
                var both_password_error = "您两次输入的密码不一致！";
                var show_div_text = "请点击更新购物车按钮";
                var show_div_exit = "关闭";
            </script>
            <div class="nstep_products">
                <div class="order_ok_title">
                    <li class="cl_s01">
                        发货订单
                    </li>
                    <li class="cl_s02">
                        单价（元）
                    </li>
                    <li class="cl_s03">
                        数量（件）
                    </li>
                    <li class="cl_s04">
                        小计
                    </li>
                    <li class="cl_s05">
                        操作
                    </li>
                </div>
                <form id="formCart" name="formCart" method="post" action="flow.php">
                    <div class="flowBox" style=" border:0;">
                        <div class="flowCon">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr id="tr_goods_134" class="cartList">
                                        <td class="nstep_pbox" style="text-align: right; border-bottom: 0px none;"
                                        width="56">
                                            <p>
                                                <a href="http://weipin.ecshop119.com/goods.php?id=199" target="_blank"
                                                class="FlowSmallImg">
                                                    <img src="picture/199_thumb_g_1403133749580.jpg" alt="卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002"
                                                    border="0" height="49" width="49">
                                                </a>
                                                <span style="display: none;" class="por_big_img">
                                                    <i class="left_arrow">
                                                    </i>
                                                    <img src="picture/199_thumb_g_1403133749580.jpg" alt="卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002">
                                                </span>
                                            </p>
                                        </td>
                                        <td style="border-bottom: 0px none;" width="439">
                                            <div style=" overflow:hidden; line-height:20px; padding-left:20px;">
                                                <p class="nstep_name">
                                                    <a href="http://weipin.ecshop119.com/goods.php?id=199" target="_blank">
                                                        卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002
                                                    </a>
                                                </p>
                                                <p style="color:gray; text-align:left;">
                                                    颜色:红色[10] 重量:5g
                                                </p>
                                            </div>
                                        </td>
                                        <td style="border-bottom: 0px none;" class="f7" align="center" bgcolor="#ffffff"
                                        width="159">
                                            ￥
                                            <span>
                                                169.00
                                            </span>
                                        </td>
                                        <td style="border-bottom: 0px none;" align="center" bgcolor="#ffffff"
                                        width="140">
                                            <a href="javascript:void(0)" onclick="changenum(134,-1)" class="minus">
                                            </a>
                                            <input name="goods_number[134]" id="goods_number_134" value="1" size="1"
                                            class="inp_num" style="text-align:center" onchange="change_goods_number(134,this.value)"
                                            type="text">
                                            <a  href="javascript:void(0)" onclick="changenum(134,1)" class="plus">
                                            </a>
                                        </td>
                                        <td style="border-bottom: 0px none;" id="goods_subtotal_134" class="f8"
                                        align="center" bgcolor="#ffffff">
                                            ￥
                                            <span>
                                                169.00
                                            </span>
                                        </td>
                                        <td style="border-bottom: 0px none;" align="center" bgcolor="#ffffff"
                                        width="56">
                                            <a href="javascript:if%20(confirm('%E6%82%A8%E7%A1%AE%E5%AE%9E%E8%A6%81%E6%8A%8A%E8%AF%A5%E5%95%86%E5%93%81%E7%A7%BB%E5%87%BA%E8%B4%AD%E7%89%A9%E8%BD%A6%E5%90%97%EF%BC%9F'))%20location.href='flow.php?step=drop_goods&amp;id=134';">
                                                删除
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input name="step" value="update_cart" type="hidden">
                            <script type="text/javascript">
                                $(".flowCon").find("tr:last td").css({
                                    "border-bottom": 0
                                });
                                //
                                $(".FlowSmallImg").each(function() {
                                    $(this).hover(function() {
                                        $(this).siblings().css({
                                            "display": "block"
                                        });
                                    },
                                    function() {
                                        $(this).siblings().css({
                                            "display": "none"
                                        });
                                    });
                                });
                            </script>
                        </div>
                        <div class="orderaction">
                            <a class="continueFind" href="http://weipin.ecshop119.com/flow.php?step=checkout">
                                立即购买
                            </a>
                        </div>
                        <script type="text/javascript">
                                       
                            function changenum(rec_id, diff)            {               
                                var goods_number = Number($('#goods_number_' + rec_id).val()) + Number(diff);    
                                if (goods_number < 1) {
                                    alert("购买数量不能少于1件");
                                } else {
                                    change_goods_number(rec_id, goods_number);
                                }           
                            }           
                            function change_goods_number(rec_id, goods_number)            {                    Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id + '&goods_number=' + goods_number, change_goods_number_response, 'POST', 'JSON');                           
                            }           
                            function change_goods_number_response(result)            {                              
                                if (result.error == 0)                {                   
                                    var rec_id = result.rec_id;                   $('#goods_number_' + rec_id).val(result.goods_number); //更新数量
                                                       $('#goods_subtotal_' + rec_id).html(result.goods_subtotal); //更新小计
                                    $("#market_box").html(result.market_price);
                                    $("#saving_box").html(result.saving);                   
                                    if (result.goods_number <= 0)                    { // 数量为零则隐藏所在行
                                                               $('#tr_goods_' + rec_id).style.display = 'none';                       $('#tr_goods_' + rec_id).innerHTML = '';                   
                                    }                   $('#total_desc').html(result.flow_info); //更新合计
                                                       
                                    if ($('ECS_CARTINFO'))                    { //更新购物车数量
                                                               $('#ECS_CARTINFO').html(result.cart_info);                   
                                    }               
                                }               
                                else if (result.message != '')                {                   alert(result.message);               
                                }                           
                            }       
                        </script>
                        <script type="text/javascript" charset="utf-8">
                            function collect_to_flow(goodsId) {
                                var goods = new Object();
                                var spec_arr = new Array();
                                var fittings_arr = new Array();
                                var number = 1;
                                goods.spec = spec_arr;
                                goods.goods_id = goodsId;
                                goods.number = number;
                                goods.parent = 0;
                                Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), collect_to_flow_response, 'POST', 'JSON');
                            }
                            function collect_to_flow_response(result) {
                                if (result.error > 0) {
                                    // 如果需要缺货登记，跳转
                                    if (result.error == 2) {
                                        if (confirm(result.message)) {
                                            location.href = 'user.php?act=add_booking&id=' + result.goods_id;
                                        }
                                    } else if (result.error == 6) {
                                        openSpeDiv(result.message, result.goods_id);
                                    } else {
                                        alert(result.message);
                                    }
                                } else {
                                    location.href = 'flow.php';
                                }
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>
@endsection