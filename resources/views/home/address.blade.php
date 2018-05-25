@extends('layout.home')
@section('address')
        <link href="css/style_3.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/common_3.js"></script>
        <script type="text/javascript" src="js/shopping_flow_3.js"></script>
    </head>

    <body style="cursor: auto;">
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
                            <script type="text/javascript" src="js/jquery-1_2.js"></script>
                            <script type="text/javascript" src="js/jquery_002_2.js"></script>
                            <script type="text/javascript" src="js/jquery_2.js"></script>
                            <script type="text/javascript" src="js/transport_jquery_2.js"></script>
                            <script type="text/javascript" src="js/utils_3.js"></script>
                            <script type="text/javascript" src="js/ecmoban_common_2.js"></script>
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
                    <script type="text/javascript" src="js/default_2.js"></script>
                    <div class="headBox HeadBox">
                        <div class="logo f_l">
                            <a href="http://weipin.ecshop119.com/index.php" name="top">
                                <img src="picture/logo_3.gif">
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
                <div class="nstep_titBoxT">
                    <div class="order_map order_map_step2">
                    </div>
                </div>
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
        <div class="block_s" style="padding-bottom:20px;">
            <script type="text/javascript" src="js/region.js"></script>
            <script type="text/javascript">
                region.isAdmin = false;
                var consignee_not_null = "收货人姓名不能为空！";
                var country_not_null = "请您选择收货人所在国家！";
                var province_not_null = "请您选择收货人所在省份！";
                var city_not_null = "请您选择收货人所在城市！";
                var district_not_null = "请您选择收货人所在区域！";
                var invalid_email = "您输入的邮件地址不是一个合法的邮件地址。";
                var address_not_null = "收货人的详细地址不能为空！";
                var tele_not_null = "电话不能为空！";
                var shipping_not_null = "请您选择配送方式！";
                var payment_not_null = "请您选择支付方式！";
                var goodsattr_style = "1";
                var tele_invaild = "电话号码不有效的号码";
                var zip_not_num = "邮政编码只能填写数字";
                var mobile_invaild = "手机号码不是合法号码";

                onload = function() {
                    if (!document.all) {
                        document.forms['theForm'].reset();
                    }
                }
            </script>
            <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
                <div class="buytab_a">
                    <div class="nstep_products">
                        <h2 class="nstep1_tit2">
                            收货人信息
                        </h2>
                        <div class="nstep2_ctent" style="margin-top:15px;">
                            <div style="line-height:30px;">
                                <table class="innerTable" border="0" cellpadding="5" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr height="45">
                                            <td class="txt_r" width="14%">
                                                配送区域
                                                <span class="pink">
                                                    *
                                                </span>
                                                &nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;">
                                                <select name="country" id="selCountries_0" onchange="region.changed(this, 1, 'selProvinces_0')"
                                                style="padding:2px 4px;border:1px solid #abadb3;">
                                                    <option value="0">
                                                        请选择国家
                                                    </option>
                                                    <option value="1" selected="selected">
                                                        中国
                                                    </option>
                                                </select>
                                                <select name="province" id="selProvinces_0" onchange="region.changed(this, 2, 'selCities_0')"
                                                style="padding: 2px 4px; border: 1px solid rgb(171, 173, 179);">
                                                    <option value="0">
                                                        请选择省
                                                    </option>
                                                    <option value="2">
                                                        北京
                                                    </option>
                                                    <option value="3">
                                                        安徽
                                                    </option>
                                                    <option selected="selected" value="4">
                                                        福建
                                                    </option>
                                                    <option value="5">
                                                        甘肃
                                                    </option>
                                                    <option value="6">
                                                        广东
                                                    </option>
                                                    <option value="7">
                                                        广西
                                                    </option>
                                                    <option value="8">
                                                        贵州
                                                    </option>
                                                    <option value="9">
                                                        海南
                                                    </option>
                                                    <option value="10">
                                                        河北
                                                    </option>
                                                    <option value="11">
                                                        河南
                                                    </option>
                                                    <option value="12">
                                                        黑龙江
                                                    </option>
                                                    <option value="13">
                                                        湖北
                                                    </option>
                                                    <option value="14">
                                                        湖南
                                                    </option>
                                                    <option value="15">
                                                        吉林
                                                    </option>
                                                    <option value="16">
                                                        江苏
                                                    </option>
                                                    <option value="17">
                                                        江西
                                                    </option>
                                                    <option value="18">
                                                        辽宁
                                                    </option>
                                                    <option value="19">
                                                        内蒙古
                                                    </option>
                                                    <option value="20">
                                                        宁夏
                                                    </option>
                                                    <option value="21">
                                                        青海
                                                    </option>
                                                    <option value="22">
                                                        山东
                                                    </option>
                                                    <option value="23">
                                                        山西
                                                    </option>
                                                    <option value="24">
                                                        陕西
                                                    </option>
                                                    <option value="25">
                                                        上海
                                                    </option>
                                                    <option value="26">
                                                        四川
                                                    </option>
                                                    <option value="27">
                                                        天津
                                                    </option>
                                                    <option value="28">
                                                        西藏
                                                    </option>
                                                    <option value="29">
                                                        新疆
                                                    </option>
                                                    <option value="30">
                                                        云南
                                                    </option>
                                                    <option value="31">
                                                        浙江
                                                    </option>
                                                    <option value="32">
                                                        重庆
                                                    </option>
                                                    <option value="33">
                                                        香港
                                                    </option>
                                                    <option value="34">
                                                        澳门
                                                    </option>
                                                    <option value="35">
                                                        台湾
                                                    </option>
                                                </select>
                                                <select name="city" id="selCities_0" onchange="region.changed(this, 3, 'selDistricts_0')"
                                                style="padding: 2px 4px; border: 1px solid rgb(171, 173, 179);">
                                                    <option value="0">
                                                        请选择市
                                                    </option>
                                                    <option value="53">
                                                        福州
                                                    </option>
                                                    <option value="54">
                                                        龙岩
                                                    </option>
                                                    <option value="55">
                                                        南平
                                                    </option>
                                                    <option selected="selected" value="56">
                                                        宁德
                                                    </option>
                                                    <option value="57">
                                                        莆田
                                                    </option>
                                                    <option value="58">
                                                        泉州
                                                    </option>
                                                    <option value="59">
                                                        三明
                                                    </option>
                                                    <option value="60">
                                                        厦门
                                                    </option>
                                                    <option value="61">
                                                        漳州
                                                    </option>
                                                </select>
                                                <select name="district" id="selDistricts_0" style="padding: 2px 4px; border: 1px solid rgb(171, 173, 179);">
                                                    <option value="0">
                                                        请选择区
                                                    </option>
                                                    <option value="548">
                                                        蕉城区
                                                    </option>
                                                    <option value="549">
                                                        福安市
                                                    </option>
                                                    <option value="550">
                                                        福鼎市
                                                    </option>
                                                    <option value="551">
                                                        霞浦县
                                                    </option>
                                                    <option selected="selected" value="552">
                                                        古田县
                                                    </option>
                                                    <option value="553">
                                                        屏南县
                                                    </option>
                                                    <option value="554">
                                                        寿宁县
                                                    </option>
                                                    <option value="555">
                                                        周宁县
                                                    </option>
                                                    <option value="556">
                                                        柘荣县
                                                    </option>
                                                </select>
                                                (必填)
                                            </td>
                                        </tr>
                                        <tr height="45">
                                            <td class="txt_r">
                                                收货人姓名
                                                <span class="pink">
                                                    *
                                                </span>
                                                &nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;" bgcolor="#ffffff">
                                                <input name="consignee" class="ipt" id="consignee_0" type="text">
                                                (必填)
                                            </td>
                                        </tr>
                                        <tr height="45">
                                            <td class="txt_r">
                                                电子邮件地址
                                                <span class="pink">
                                                    *
                                                </span>
                                                &nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;" bgcolor="#ffffff">
                                                <input name="email" class="ipt" id="email_0" value="2521489351@qq.com"
                                                type="text">
                                                (必填)
                                            </td>
                                        </tr>
                                        <tr height="45">
                                            <td class="txt_r">
                                                详细地址
                                                <span class="pink">
                                                    *
                                                </span>
                                                &nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;" bgcolor="#ffffff">
                                                <input name="address" size="60" class="ipt" id="address_0" type="text">
                                                (必填)
                                            </td>
                                        </tr>
                                        <tr height="45">
                                            <td class="txt_r">
                                                邮政编码&nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;" bgcolor="#ffffff">
                                                <input name="zipcode" class="ipt" id="zipcode_0" type="text">
                                            </td>
                                        </tr>
                                        <tr height="45">
                                            <td class="txt_r">
                                                电话
                                                <span class="pink">
                                                    *
                                                </span>
                                                &nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;" bgcolor="#ffffff">
                                                <input name="tel" class="ipt" id="tel_0" type="text">
                                                (必填)
                                            </td>
                                        </tr>
                                        <tr height="45">
                                            <td class="txt_r">
                                                手机&nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;" bgcolor="#ffffff">
                                                <input name="mobile" class="ipt" id="mobile_0" type="text">
                                            </td>
                                        </tr>
                                        <tr height="45">
                                            <td class="txt_r">
                                                标志建筑&nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;" bgcolor="#ffffff">
                                                <input name="sign_building" class="ipt" id="sign_building_0" type="text">
                                            </td>
                                        </tr>
                                        <tr height="45">
                                            <td class="txt_r">
                                                最佳送货时间&nbsp;&nbsp;
                                            </td>
                                            <td style="text-align:left;" bgcolor="#ffffff">
                                                <input name="best_time" class="ipt" id="best_time_0" type="text">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" style="padding:20px 0;" align="center" bgcolor="#ffffff">
                                                <input name="Submit" class="bnt_blue" value="配送至这个地址" type="submit">
                                                <input name="step" value="consignee" type="hidden">
                                                <input name="act" value="checkout" type="hidden">
                                                <input name="address_id" value="" type="hidden">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection