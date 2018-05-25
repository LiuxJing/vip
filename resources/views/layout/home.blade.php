<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            唯品会
        </title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="icon" href="animated_favicon.gif" type="image/gif" />
@section('address')
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/common.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </head>

    <body>
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
        <div id="TopTools">
            <div class="headBox">
                <div class="TopToolsLeft f_l">
                </div>
                <div class="TopToolsRight f_r">
                    <ul>
                        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
                        <script type="text/javascript" src="js/jquery.json.js"></script>
                        <script type="text/javascript" src="js/jquery.superslide.js"></script>
                        <script type="text/javascript" src="js/transport_jquery.js"></script>
                        <script type="text/javascript" src="js/utils.js"></script>
                        <script type="text/javascript" src="js/ecmoban_common.js"></script>
                        <li>
                            <a href="user.php">
                                <span class="f9">
                                    登陆
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="user.php?act=register">
                                <span class="f9">
                                    注册
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="flow.php">
                                购物袋
                            </a>
                        </li>
                        <li>
                            <a href="user.php?act=order_list">
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
@section('gouwu')
        <div class="header">
            <div class="headBody">
                <script type="text/javascript" src="js/default.js"></script>
                <div class="headBox HeadBox">
                    <div class="logo f_l">
                        <a href="index.php" name="top">
                            <img src="picture/logo.gif" />
                        </a>
                    </div>
                    <div class="HeadRight f_r">
                        <div class="CatBox f_r">
                            <div class="Cat f_l" id="ECS_CARTINFO">
                                <div class="Cart shop_txt">
                                    <div class="CartTit">
                                        <a class="header_cart_title" href="flow.php">
                                            特卖会购物袋
                                        </a>
                                        <a class="header_cart_num" href="flow.php">
                                            0
                                        </a>
                                    </div>
                                    <div class="CartCon shopBody" id="shopBody">
                                        <div class="CartBox">
                                            <p class="shopNo">
                                                购物袋内还没有商品，赶快选购吧！
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function deleteCartGoods(rec_id) {
                                        Ajax.call('delete_cart_goods.php', 'id=' + rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
                                    }

                                    /**
 * 接收返回的信息
 */
                                    function deleteCartGoodsResponse(res) {
                                        if (res.error) {
                                            alert(res.err_msg);
                                        } else {
                                            $("#ECS_CARTINFO").html(res.content);
                                        }
                                    }

                                    $(function() {
                                        $("#ECS_CARTINFO li.shopWhite").mouseenter(function() {
                                            $(this).removeClass("shopWhite");
                                            $(this).addClass("shopGray");
                                        });

                                        $("#ECS_CARTINFO li.shopWhite").mouseleave(function() {
                                            $(this).removeClass("shopGray");
                                            $(this).addClass("shopWhite");
                                        });
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="HeadNavBox">
                    <div class="headNav">
                        <div class="LeftNav">
                            <div id="wed-service" class="All">
                                <div id="web-service-title" class="AllTitle">
                                    <span>
                                        在售商品分类
                                    </span>
                                </div>
                                <div id="service-list" class="slideTxtBox AllCon">
                                    <ul class="hd hcl_class">
                                        <li>
                                            <div class="hlc_icon hlc_icon hlc_class1">
                                                <p>
                                                    服饰
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hlc_icon hlc_icon hlc_class2">
                                                <p>
                                                    鞋类
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hlc_icon hlc_icon hlc_class3">
                                                <p>
                                                    箱包
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hlc_icon hlc_icon hlc_class4">
                                                <p>
                                                    配饰
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hlc_icon hlc_icon hlc_class5">
                                                <p>
                                                    化妆品
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hlc_icon hlc_icon hlc_class6">
                                                <p>
                                                    3C产品
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="hlc_icon hlc_icon hlc_class7">
                                                <p>
                                                    家居百货
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="bd hcl_con">
                                        <div class="J_hlc_row">
                                            <dl>
                                                <dt>
                                                    女装
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=307" title="T恤" target="_blank">
                                                        T恤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=308" title="Polo" target="_blank">
                                                        Polo
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=309" title="外套" target="_blank">
                                                        外套
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=310" title="毛衣" target="_blank">
                                                        毛衣
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=311" title="针织衫" target="_blank">
                                                        针织衫
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=312" title="衬衫" target="_blank">
                                                        衬衫
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=313" title="连身裙" target="_blank">
                                                        连身裙
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=314" title="半截裙" target="_blank">
                                                        半截裙
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=315" title="休闲裤" target="_blank">
                                                        休闲裤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=316" title="牛仔裤" target="_blank">
                                                        牛仔裤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=317" title="内衣(抹胸)" target="_blank">
                                                        内衣(抹胸)
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=318" title="内裤" target="_blank">
                                                        内裤
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    男装
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=319" title="T恤" target="_blank">
                                                        T恤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=320" title="Polo" target="_blank">
                                                        Polo
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=321" title="针织衫" target="_blank">
                                                        针织衫
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=322" title="衬衫" target="_blank">
                                                        衬衫
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=323" title="卫衣" target="_blank">
                                                        卫衣
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=324" title="外套" target="_blank">
                                                        外套
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=325" title="休闲裤" target="_blank">
                                                        休闲裤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=326" title="牛仔裤" target="_blank">
                                                        牛仔裤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=327" title="袜子" target="_blank">
                                                        袜子
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=328" title="皮带" target="_blank">
                                                        皮带
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=329" title="夹克" target="_blank">
                                                        夹克
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=330" title="泳裤" target="_blank">
                                                        泳裤
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    童装
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=331" title="女童背心" target="_blank">
                                                        女童背心
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=332" title="女童T恤" target="_blank">
                                                        女童T恤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=333" title="女童针织衫" target="_blank">
                                                        女童针织衫
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=334" title="女童连身裙" target="_blank">
                                                        女童连身裙
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=335" title="女童裤" target="_blank">
                                                        女童裤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=336" title="男童背心" target="_blank">
                                                        男童背心
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=337" title="男童T恤" target="_blank">
                                                        男童T恤
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=338" title="男童针织衫" target="_blank">
                                                        男童针织衫
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=339" title="男童衬衫" target="_blank">
                                                        男童衬衫
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=340" title="男童外套" target="_blank">
                                                        男童外套
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=341" title="男童裤" target="_blank">
                                                        男童裤
                                                    </a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="J_hlc_row">
                                            <dl>
                                                <dt>
                                                    男鞋
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=363" title="休闲鞋" target="_blank">
                                                        休闲鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=364" title="皮鞋" target="_blank">
                                                        皮鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=365" title="凉鞋" target="_blank">
                                                        凉鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=366" title="跑鞋" target="_blank">
                                                        跑鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=367" title="靴" target="_blank">
                                                        靴
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=368" title="拖鞋" target="_blank">
                                                        拖鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=369" title="篮球鞋" target="_blank">
                                                        篮球鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=370" title="网球鞋" target="_blank">
                                                        网球鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=371" title="登山鞋" target="_blank">
                                                        登山鞋
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    女鞋
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=355" title="高跟鞋" target="_blank">
                                                        高跟鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=356" title="凉鞋" target="_blank">
                                                        凉鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=357" title="休闲鞋" target="_blank">
                                                        休闲鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=358" title="皮鞋" target="_blank">
                                                        皮鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=359" title="单鞋" target="_blank">
                                                        单鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=360" title="运动鞋" target="_blank">
                                                        运动鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=361" title="靴" target="_blank">
                                                        靴
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=362" title="拖鞋" target="_blank">
                                                        拖鞋
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    童鞋
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=345" title="女童凉鞋" target="_blank">
                                                        女童凉鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=346" title="女童单鞋" target="_blank">
                                                        女童单鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=347" title="女童运动鞋" target="_blank">
                                                        女童运动鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=348" title="男童凉鞋" target="_blank">
                                                        男童凉鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=349" title="男童单鞋" target="_blank">
                                                        男童单鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=350" title="男童皮鞋" target="_blank">
                                                        男童皮鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=351" title="男童休闲鞋" target="_blank">
                                                        男童休闲鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=352" title="男童运动鞋" target="_blank">
                                                        男童运动鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=353" title="女童拖鞋" target="_blank">
                                                        女童拖鞋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=354" title="男童拖鞋" target="_blank">
                                                        男童拖鞋
                                                    </a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="J_hlc_row">
                                            <dl>
                                                <dt>
                                                    女包
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=382" title="钱包" target="_blank">
                                                        钱包
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=383" title="手提包" target="_blank">
                                                        手提包
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=384" title="手袋" target="_blank">
                                                        手袋
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=385" title="背包" target="_blank">
                                                        背包
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=386" title="腰包" target="_blank">
                                                        腰包
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    男包
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=379" title="钱包" target="_blank">
                                                        钱包
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=380" title="提包/挎包" target="_blank">
                                                        提包/挎包
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=381" title="背包" target="_blank">
                                                        背包
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    商务包
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=378" title="商务包" target="_blank">
                                                        商务包
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    运动/旅行包
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=376" title="运动包" target="_blank">
                                                        运动包
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=377" title="拉杆箱" target="_blank">
                                                        拉杆箱
                                                    </a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="J_hlc_row">
                                            <dl>
                                                <dt>
                                                    饰品
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=398" title="戒指" target="_blank">
                                                        戒指
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=399" title="项链/吊坠/胸针" target="_blank">
                                                        项链/吊坠/胸针
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=400" title="耳环耳钉" target="_blank">
                                                        耳环耳钉
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=401" title="手链/手镯" target="_blank">
                                                        手链/手镯
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=402" title="脚链" target="_blank">
                                                        脚链
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=403" title="发夹" target="_blank">
                                                        发夹
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=404" title="手机挂饰" target="_blank">
                                                        手机挂饰
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=405" title="套装" target="_blank">
                                                        套装
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    手表
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=397" title="手表" target="_blank">
                                                        手表
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    眼镜
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=395" title="眼镜" target="_blank">
                                                        眼镜
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=396" title="太阳眼镜" target="_blank">
                                                        太阳眼镜
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    烟具
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=394" title="打火机" target="_blank">
                                                        打火机
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    珠宝玉器
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=392" title="珠宝挂饰" target="_blank">
                                                        珠宝挂饰
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=393" title="珠宝摆件" target="_blank">
                                                        珠宝摆件
                                                    </a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="J_hlc_row">
                                            <dl>
                                                <dt>
                                                    护肤品
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=433" title="面膜" target="_blank">
                                                        面膜
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=434" title="眼霜/眼膜" target="_blank">
                                                        眼霜/眼膜
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=435" title="卸妆" target="_blank">
                                                        卸妆
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=436" title="去角质/磨砂" target="_blank">
                                                        去角质/磨砂
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=437" title="隔离霜/乳" target="_blank">
                                                        隔离霜/乳
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=438" title="套装组合" target="_blank">
                                                        套装组合
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=439" title="鼻贴膜" target="_blank">
                                                        鼻贴膜
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    彩妆
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=425" title="BB霜" target="_blank">
                                                        BB霜
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=426" title="唇彩" target="_blank">
                                                        唇彩
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=427" title="护甲" target="_blank">
                                                        护甲
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=428" title="睫毛膏" target="_blank">
                                                        睫毛膏
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=429" title="腮红/胭脂" target="_blank">
                                                        腮红/胭脂
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=430" title="遮瑕" target="_blank">
                                                        遮瑕
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=431" title="粉底" target="_blank">
                                                        粉底
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=432" title="眼线" target="_blank">
                                                        眼线
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    美体
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=420" title="足手部护理" target="_blank">
                                                        足手部护理
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=421" title="身体润肤乳" target="_blank">
                                                        身体润肤乳
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=422" title="磨砂膏" target="_blank">
                                                        磨砂膏
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=423" title="沐浴乳" target="_blank">
                                                        沐浴乳
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=424" title="美体其它" target="_blank">
                                                        美体其它
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    美发
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=416" title="染发" target="_blank">
                                                        染发
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=417" title="护发" target="_blank">
                                                        护发
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=418" title="头发造型" target="_blank">
                                                        头发造型
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=419" title="洗头水" target="_blank">
                                                        洗头水
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    香水/香氛系列
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=411" title="男性香水" target="_blank">
                                                        男性香水
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=412" title="香体膏" target="_blank">
                                                        香体膏
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=413" title="中性香水" target="_blank">
                                                        中性香水
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=414" title="身体香氛" target="_blank">
                                                        身体香氛
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=415" title="女性香水" target="_blank">
                                                        女性香水
                                                    </a>
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="J_hlc_row">
                                            <dl>
                                                <dt>
                                                    数码电子
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=442" title="数码配件" target="_blank">
                                                        数码配件
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    小家电
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=443" title="搅拌机" target="_blank">
                                                        搅拌机
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=444" title="电子按摩器" target="_blank">
                                                        电子按摩器
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=445" title="咖啡机" target="_blank">
                                                        咖啡机
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=446" title="电磁炉" target="_blank">
                                                        电磁炉
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=447" title="吸尘器" target="_blank">
                                                        吸尘器
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=448" title="电吹风" target="_blank">
                                                        电吹风
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=449" title="灭蚊灯" target="_blank">
                                                        灭蚊灯
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=450" title="豆浆机" target="_blank">
                                                        豆浆机
                                                    </a>
                                                </dd>
                                            </dl>
                                        </div>
                                       <!--  <div class="J_hlc_row">
                                            <dl>
                                                <dt>
                                                    厨具/餐具
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=454" title="杯具" target="_blank">
                                                        杯具
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=455" title="厨房刀具" target="_blank">
                                                        厨房刀具
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=456" title="烹饪锅具" target="_blank">
                                                        烹饪锅具
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=457" title="厨房容器" target="_blank">
                                                        厨房容器
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=458" title="收纳用品" target="_blank">
                                                        收纳用品
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=459" title="保鲜盒" target="_blank">
                                                        保鲜盒
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    寝具/浴具
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=460" title="床上用品" target="_blank">
                                                        床上用品
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=461" title="靠枕/抱枕" target="_blank">
                                                        靠枕/抱枕
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=462" title="毛毯" target="_blank">
                                                        毛毯
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=463" title="沐浴容器" target="_blank">
                                                        沐浴容器
                                                    </a>
                                                </dd>
                                                <dd>
                                                    <a href="category.php?id=464" title="卫浴" target="_blank">
                                                        卫浴
                                                    </a>
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>
                                                    刀具
                                                </dt>
                                                <dd>
                                                    <a href="category.php?id=465" title="军刀" target="_blank">
                                                        军刀
                                                    </a>
                                                </dd>
                                            </dl>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="subNav">
                                <ul>
                                    <li class="current">
                                        <a href="index.php">
                                            首页
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.php?id=299">
                                            <span class="beauty_icon">
                                                鲜花
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/topic.php?topic_id=1">
                                            <span class="beauty_icon">
                                                专题
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="group_buy.php">
                                            <span class="beauty_icon">
                                                特卖商品
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="FloatNav" id="inner">
                    <div class="FloatNavBj">
                    </div>
                    <div class="FloatNavCon">
                        <a href="./" class="fsc_icon">
                        </a>
                        <ul class="fsc_nav">
                            <li class="on">
                                <a href="./">
                                    首页
                                </a>
                            </li>
                            <li>
                                <a href="category.php?id=299">
                                    鲜花
                                </a>
                            </li>
                            <li>
                                <a href="/topic.php?topic_id=1">
                                    专题
                                </a>
                            </li>
                            <li>
                                <a href="group_buy.php">
                                    特卖商品
                                </a>
                            </li>
                        </ul>
                        <div class="fsc_cart">
                            <div class="fsc_cart_con">
                                <a href="#" class="fsc_cart_title">
                                    购物袋
                                </a>
                                <a href="javascript:void(0);" class="fsc_cart_num" id="ECS_CARTINFO2">
                                    0
                                </a>
                            </div>
                            <div class="fsc_cart_list">
                            </div>
                        </div>
                        <div class="fsc_class">
                            <div class="fsc_class_tit">
                                在售商品分类
                                <i class="fsc_class_title_icon">
                                </i>
                            </div>
                            <div class="fsc_class_con slideTxtBox">
                                <ul class="hd hcl_class">
                                    <li>
                                        <div class="hlc_icon hlc_class1">
                                            <p>
                                                服饰
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hlc_icon hlc_class2">
                                            <p>
                                                鞋类
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hlc_icon hlc_class3">
                                            <p>
                                                箱包
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hlc_icon hlc_class4">
                                            <p>
                                                配饰
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hlc_icon hlc_class5">
                                            <p>
                                                化妆品
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hlc_icon hlc_class6">
                                            <p>
                                                3C产品
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="hlc_icon hlc_class7">
                                            <p>
                                                家居百货
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="bd hcl_con">
                                    <div class="J_hlc_row">
                                        <dl>
                                            <dt>
                                                女装
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=307" title="T恤" target="_blank">
                                                    T恤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=308" title="Polo" target="_blank">
                                                    Polo
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=309" title="外套" target="_blank">
                                                    外套
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=310" title="毛衣" target="_blank">
                                                    毛衣
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=311" title="针织衫" target="_blank">
                                                    针织衫
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=312" title="衬衫" target="_blank">
                                                    衬衫
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=313" title="连身裙" target="_blank">
                                                    连身裙
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=314" title="半截裙" target="_blank">
                                                    半截裙
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=315" title="休闲裤" target="_blank">
                                                    休闲裤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=316" title="牛仔裤" target="_blank">
                                                    牛仔裤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=317" title="内衣(抹胸)" target="_blank">
                                                    内衣(抹胸)
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=318" title="内裤" target="_blank">
                                                    内裤
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                男装
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=319" title="T恤" target="_blank">
                                                    T恤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=320" title="Polo" target="_blank">
                                                    Polo
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=321" title="针织衫" target="_blank">
                                                    针织衫
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=322" title="衬衫" target="_blank">
                                                    衬衫
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=323" title="卫衣" target="_blank">
                                                    卫衣
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=324" title="外套" target="_blank">
                                                    外套
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=325" title="休闲裤" target="_blank">
                                                    休闲裤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=326" title="牛仔裤" target="_blank">
                                                    牛仔裤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=327" title="袜子" target="_blank">
                                                    袜子
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=328" title="皮带" target="_blank">
                                                    皮带
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=329" title="夹克" target="_blank">
                                                    夹克
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=330" title="泳裤" target="_blank">
                                                    泳裤
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                童装
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=331" title="女童背心" target="_blank">
                                                    女童背心
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=332" title="女童T恤" target="_blank">
                                                    女童T恤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=333" title="女童针织衫" target="_blank">
                                                    女童针织衫
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=334" title="女童连身裙" target="_blank">
                                                    女童连身裙
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=335" title="女童裤" target="_blank">
                                                    女童裤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=336" title="男童背心" target="_blank">
                                                    男童背心
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=337" title="男童T恤" target="_blank">
                                                    男童T恤
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=338" title="男童针织衫" target="_blank">
                                                    男童针织衫
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=339" title="男童衬衫" target="_blank">
                                                    男童衬衫
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=340" title="男童外套" target="_blank">
                                                    男童外套
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=341" title="男童裤" target="_blank">
                                                    男童裤
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="J_hlc_row">
                                        <dl>
                                            <dt>
                                                男鞋
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=363" title="休闲鞋" target="_blank">
                                                    休闲鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=364" title="皮鞋" target="_blank">
                                                    皮鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=365" title="凉鞋" target="_blank">
                                                    凉鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=366" title="跑鞋" target="_blank">
                                                    跑鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=367" title="靴" target="_blank">
                                                    靴
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=368" title="拖鞋" target="_blank">
                                                    拖鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=369" title="篮球鞋" target="_blank">
                                                    篮球鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=370" title="网球鞋" target="_blank">
                                                    网球鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=371" title="登山鞋" target="_blank">
                                                    登山鞋
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                女鞋
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=355" title="高跟鞋" target="_blank">
                                                    高跟鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=356" title="凉鞋" target="_blank">
                                                    凉鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=357" title="休闲鞋" target="_blank">
                                                    休闲鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=358" title="皮鞋" target="_blank">
                                                    皮鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=359" title="单鞋" target="_blank">
                                                    单鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=360" title="运动鞋" target="_blank">
                                                    运动鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=361" title="靴" target="_blank">
                                                    靴
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=362" title="拖鞋" target="_blank">
                                                    拖鞋
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                童鞋
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=345" title="女童凉鞋" target="_blank">
                                                    女童凉鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=346" title="女童单鞋" target="_blank">
                                                    女童单鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=347" title="女童运动鞋" target="_blank">
                                                    女童运动鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=348" title="男童凉鞋" target="_blank">
                                                    男童凉鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=349" title="男童单鞋" target="_blank">
                                                    男童单鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=350" title="男童皮鞋" target="_blank">
                                                    男童皮鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=351" title="男童休闲鞋" target="_blank">
                                                    男童休闲鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=352" title="男童运动鞋" target="_blank">
                                                    男童运动鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=353" title="女童拖鞋" target="_blank">
                                                    女童拖鞋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=354" title="男童拖鞋" target="_blank">
                                                    男童拖鞋
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="J_hlc_row">
                                        <dl>
                                            <dt>
                                                女包
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=382" title="钱包" target="_blank">
                                                    钱包
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=383" title="手提包" target="_blank">
                                                    手提包
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=384" title="手袋" target="_blank">
                                                    手袋
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=385" title="背包" target="_blank">
                                                    背包
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=386" title="腰包" target="_blank">
                                                    腰包
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                男包
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=379" title="钱包" target="_blank">
                                                    钱包
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=380" title="提包/挎包" target="_blank">
                                                    提包/挎包
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=381" title="背包" target="_blank">
                                                    背包
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                商务包
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=378" title="商务包" target="_blank">
                                                    商务包
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                运动/旅行包
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=376" title="运动包" target="_blank">
                                                    运动包
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=377" title="拉杆箱" target="_blank">
                                                    拉杆箱
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="J_hlc_row">
                                        <dl>
                                            <dt>
                                                饰品
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=398" title="戒指" target="_blank">
                                                    戒指
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=399" title="项链/吊坠/胸针" target="_blank">
                                                    项链/吊坠/胸针
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=400" title="耳环耳钉" target="_blank">
                                                    耳环耳钉
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=401" title="手链/手镯" target="_blank">
                                                    手链/手镯
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=402" title="脚链" target="_blank">
                                                    脚链
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=403" title="发夹" target="_blank">
                                                    发夹
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=404" title="手机挂饰" target="_blank">
                                                    手机挂饰
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=405" title="套装" target="_blank">
                                                    套装
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                手表
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=397" title="手表" target="_blank">
                                                    手表
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                眼镜
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=395" title="眼镜" target="_blank">
                                                    眼镜
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=396" title="太阳眼镜" target="_blank">
                                                    太阳眼镜
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                烟具
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=394" title="打火机" target="_blank">
                                                    打火机
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                珠宝玉器
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=392" title="珠宝挂饰" target="_blank">
                                                    珠宝挂饰
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=393" title="珠宝摆件" target="_blank">
                                                    珠宝摆件
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="J_hlc_row">
                                        <dl>
                                            <dt>
                                                护肤品
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=433" title="面膜" target="_blank">
                                                    面膜
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=434" title="眼霜/眼膜" target="_blank">
                                                    眼霜/眼膜
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=435" title="卸妆" target="_blank">
                                                    卸妆
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=436" title="去角质/磨砂" target="_blank">
                                                    去角质/磨砂
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=437" title="隔离霜/乳" target="_blank">
                                                    隔离霜/乳
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=438" title="套装组合" target="_blank">
                                                    套装组合
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=439" title="鼻贴膜" target="_blank">
                                                    鼻贴膜
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                彩妆
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=425" title="BB霜" target="_blank">
                                                    BB霜
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=426" title="唇彩" target="_blank">
                                                    唇彩
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=427" title="护甲" target="_blank">
                                                    护甲
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=428" title="睫毛膏" target="_blank">
                                                    睫毛膏
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=429" title="腮红/胭脂" target="_blank">
                                                    腮红/胭脂
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=430" title="遮瑕" target="_blank">
                                                    遮瑕
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=431" title="粉底" target="_blank">
                                                    粉底
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=432" title="眼线" target="_blank">
                                                    眼线
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                美体
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=420" title="足手部护理" target="_blank">
                                                    足手部护理
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=421" title="身体润肤乳" target="_blank">
                                                    身体润肤乳
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=422" title="磨砂膏" target="_blank">
                                                    磨砂膏
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=423" title="沐浴乳" target="_blank">
                                                    沐浴乳
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=424" title="美体其它" target="_blank">
                                                    美体其它
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                美发
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=416" title="染发" target="_blank">
                                                    染发
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=417" title="护发" target="_blank">
                                                    护发
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=418" title="头发造型" target="_blank">
                                                    头发造型
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=419" title="洗头水" target="_blank">
                                                    洗头水
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                香水/香氛系列
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=411" title="男性香水" target="_blank">
                                                    男性香水
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=412" title="香体膏" target="_blank">
                                                    香体膏
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=413" title="中性香水" target="_blank">
                                                    中性香水
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=414" title="身体香氛" target="_blank">
                                                    身体香氛
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=415" title="女性香水" target="_blank">
                                                    女性香水
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="J_hlc_row">
                                        <dl>
                                            <dt>
                                                数码电子
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=442" title="数码配件" target="_blank">
                                                    数码配件
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                小家电
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=443" title="搅拌机" target="_blank">
                                                    搅拌机
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=444" title="电子按摩器" target="_blank">
                                                    电子按摩器
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=445" title="咖啡机" target="_blank">
                                                    咖啡机
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=446" title="电磁炉" target="_blank">
                                                    电磁炉
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=447" title="吸尘器" target="_blank">
                                                    吸尘器
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=448" title="电吹风" target="_blank">
                                                    电吹风
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=449" title="灭蚊灯" target="_blank">
                                                    灭蚊灯
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=450" title="豆浆机" target="_blank">
                                                    豆浆机
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="J_hlc_row">
                                        <dl>
                                            <dt>
                                                厨具/餐具
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=454" title="杯具" target="_blank">
                                                    杯具
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=455" title="厨房刀具" target="_blank">
                                                    厨房刀具
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=456" title="烹饪锅具" target="_blank">
                                                    烹饪锅具
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=457" title="厨房容器" target="_blank">
                                                    厨房容器
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=458" title="收纳用品" target="_blank">
                                                    收纳用品
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=459" title="保鲜盒" target="_blank">
                                                    保鲜盒
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                寝具/浴具
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=460" title="床上用品" target="_blank">
                                                    床上用品
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=461" title="靠枕/抱枕" target="_blank">
                                                    靠枕/抱枕
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=462" title="毛毯" target="_blank">
                                                    毛毯
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=463" title="沐浴容器" target="_blank">
                                                    沐浴容器
                                                </a>
                                            </dd>
                                            <dd>
                                                <a href="category.php?id=464" title="卫浴" target="_blank">
                                                    卫浴
                                                </a>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>
                                                刀具
                                            </dt>
                                            <dd>
                                                <a href="category.php?id=465" title="军刀" target="_blank">
                                                    军刀
                                                </a>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(".fsc_class").hover(function() {
                                        $(this).addClass("on");
                                    },
                                    function() {
                                        $(this).removeClass("on");
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                var obj11 = document.getElementById("inner");
                var top11 = getTop(obj11);
                var isIE6 = /msie 6/i.test(navigator.userAgent);
                $("#inner").css({
                    "position": "fixed",
                    "top": -45 + "px"
                });
                window.onscroll = function() {
                    var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                    if (bodyScrollTop > top11) {
                        obj11.style.position = (isIE6) ? "absolute": "fixed";
                        obj11.style.top = (isIE6) ? bodyScrollTop + "px": "0px";
                        $("#inner").stop(true, false).animate({
                            "top": 0
                        },
                        300);
                    } else {
                        obj11.style.position = "fixed";
                        $("#inner").stop(true, false).animate({
                            "top": -45 + "px"
                        },
                        300);
                    }
                }
                function getTop(e) {
                    var offset = e.offsetTop;
                    if (e.offsetParent != null) offset += getTop(e.offsetParent);
                    return offset;
                }
            </script>
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
        <!-- 内容     -->
@section('content')
@show

@show

@show
        <!-- 页脚 -->
        <div class="footer">
            <div class="footerBody">
                <div class="footTopBox">
                    <div class="footTop">
                        <dl>
                            <dt class="Help01">
                                服务保障
                            </dt>
                            <dd>
                                <p>
                                    <a href="article.php?id=79" title="正品保证">
                                        正品保证
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=80" title="7天无理由退货">
                                        7天无理由退货
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=81" title="退货返运费">
                                        退货返运费
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=82" title="7x15小时客户服务">
                                        7x15小时客户服务
                                    </a>
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="Help02">
                                购物指南
                            </dt>
                            <dd>
                                <p>
                                    <a href="article.php?id=83" title="导购演示">
                                        导购演示
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=84" title="订单操作">
                                        订单操作
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=85" title="会员注册">
                                        会员注册
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=86" title="账户管理">
                                        账户管理
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=87" title="收货样品">
                                        收货样品
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=88" title="会员等级">
                                        会员等级
                                    </a>
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="Help03">
                                支付方式
                            </dt>
                            <dd>
                                <p>
                                    <a href="article.php?id=89" title="23家主流网银支付">
                                        23家主流网银支付
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=90" title="货到付款">
                                        货到付款
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=91" title="支付宝、银联等支付">
                                        支付宝、银联等支付
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=92" title="信用卡支付">
                                        信用卡支付
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=93" title="唯品钱包支付">
                                        唯品钱包支付
                                    </a>
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="Help04">
                                配送方式
                            </dt>
                            <dd>
                                <p>
                                    <a href="article.php?id=94" title="全场满288元免运费">
                                        全场满288元免运费
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=95" title="配送范围及运费">
                                        配送范围及运费
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=96" title="验货与签收">
                                        验货与签收
                                    </a>
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt class="Help05">
                                售后服务
                            </dt>
                            <dd>
                                <p>
                                    <a href="article.php?id=97" title="退货政策">
                                        退货政策
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=98" title="退货流程">
                                        退货流程
                                    </a>
                                </p>
                                <p>
                                    <a href="article.php?id=99" title="退款方式和时效">
                                        退款方式和时效
                                    </a>
                                </p>
                            </dd>
                        </dl>
                        <dl class="f_client">
                            <dt class="Help06">
                                唯品会客户端二维码
                            </dt>
                            <dd class="qr">
                                <img src="picture/qr-app.png" alt="">
                            </dd>
                            <dd>
                                下载唯品会移动客户端
                            </dd>
                        </dl>
                        <dl class="f_client">
                            <dt class="Help07">
                                用微信扫一扫
                            </dt>
                            <dd class="qr">
                                <img src="picture/qr-weixin.png" alt="">
                            </dd>
                            <dd>
                                <a href="#">
                                    订阅唯品会官方微信
                                </a>
                            </dd>
                        </dl>
                    </div>
                    <script type="text/javascript">
                        $(".footTop dl:last").css({
                            "border": "0"
                        });
                    </script>
                </div>
                <div class="BottomNav">
                    <div class="BottomNavBox">
                        <a href="article.php?id=79">
                            正品保证
                        </a>
                        <span>
                            |
                        </span>
                        <a href="article.php?id=85">
                            会员注册
                        </a>
                        <span>
                            |
                        </span>
                        <a href="article.php?id=87">
                            收货样品
                        </a>
                        <span>
                            |
                        </span>
                        <a href="article.php?id=83">
                            导购演示
                        </a>
                        <span>
                            |
                        </span>
                        <a href="article.php?id=86">
                            账户管理
                        </a>
                        <span>
                            |
                        </span>
                        <a href="article.php?id=90">
                            货到付款
                        </a>
                        <span>
                            |
                        </span>
                        <a href="article.php?id=97">
                            退货政策
                        </a>
                        <span>
                            |
                        </span>
                        <a href="article.php?id=98">
                            退货流程
                        </a>
                        <span>
                            |
                        </span>
                    </div>
                    <script type="text/javascript">
                        $(".BottomNavBox span:last").css("display", "none");
                    </script>
                </div>
                <div class="footer_txt">
                    <p>
                        Copyright © 2008-2016 ECSHOP119.COM，All Rights Reserved 粤ICP备08114786号-1
                        许可证：粤B2-20080329 使用本网站即表示接受唯品会用户协议。
                    </p>
                    <p class="lightGrey">
                        版权所有 ECSHOP模板屋网络科技有限公司 （技术支持：
                        <a title="ECSHOP模板" target="_blank" href="http://www.ecshop119.com/">
                            ECSHOP模板
                        </a>
                        ）
                    </p>

                    <div align="center">
                        @foreach($links as $v)
                        <a href="{{$v->url}}">
                            <img src="{{$v->logo}}" border="0">
                        </a>
                        @endforeach
                    </div>
                </div>
                <div id="bottomNav" class="box" style="display:none">
                    <div class="bNavList clearfix">
                        <div class="f_l">
                            <a href="article.php?id=79">
                                正品保证
                            </a>
                            -
                            <a href="article.php?id=85">
                                会员注册
                            </a>
                            -
                            <a href="article.php?id=87">
                                收货样品
                            </a>
                            -
                            <a href="article.php?id=83">
                                导购演示
                            </a>
                            -
                            <a href="article.php?id=86">
                                账户管理
                            </a>
                            -
                            <a href="article.php?id=90">
                                货到付款
                            </a>
                            -
                            <a href="article.php?id=97">
                                退货政策
                            </a>
                            -
                            <a href="article.php?id=98">
                                退货流程
                            </a>
                        </div>
                    </div>
                </div>
                <div id="footer" style="height:0; width:1px; overflow:hidden; background:none; margin:0;">
                    <div class="text">
                        &copy; 2005-2016 最新ECSHOP唯品会模板【ECSHOP唯品会模板】唯品会模板-ECSHOP模板屋 版权所有，并保留所有权利。
                        <br />
                        <br />
                        共执行 11 个查询，用时 0.029687 秒，在线 3 人，Gzip 已禁用，占用内存 3.571 MB
                        <img src="picture/cron.php" alt="" style="width:0px;height:0px;" />
                        <br />
                        <br />
                        <div align="left" id="rss">
                            <a href="feed.php">
                                <img src="picture/xml_rss2.gif" alt="rss" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="RightFloatNav">
                    <div class="RightFloatNavBox">
                        <ul class="sbar_oper">
                            <li>
                                <a href="user.php" target="_blank">
                                    <i class="i_sbar_my">
                                    </i>
                                </a>
                                <span>
                                    个人中心
                                </span>
                            </li>
                            <li>
                                <a href="user.php" target="_blank">
                                    <i class="i_sbar_asset">
                                    </i>
                                </a>
                                <span>
                                    我的资产
                                </span>
                            </li>
                            <li>
                                <a href="user.php?act=collection_list" target="_blank">
                                    <i class="i_sbar_fav">
                                    </i>
                                </a>
                                <span>
                                    收藏商品
                                </span>
                            </li>
                            <li class="sbar_cart">
                                <a href="flow.php" target="_blank">
                                    <i class="i_sbar_cat">
                                    </i>
                                    <p class="sbar_cart_text">
                                        购物袋
                                    </p>
                                    <i class="i_sbar_nub" id="ECS_CARTINFO3">
                                        0
                                    </i>
                                </a>
                            </li>
                        </ul>
                        <div class="sbar_top" id="topcontrol">
                            <div class="nreturn">
                                <a id="sider_returntop" href="#" class="s1" title="返回顶部">
                                </a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(".sbar_oper li").hover(function() {
                                $(this).addClass("on");
                                $(this).children("span").stop(true, false).animate({
                                    "right": 36,
                                    "z-index": 1
                                },
                                200);
                            },
                            function() {
                                $(this).removeClass("on");
                                $(this).children("span").stop(true, false).animate({
                                    "right": -90,
                                    "z-index": -1
                                },
                                200);
                            });
                            //
                            var h = $(".RightFloatNavBox").height();
                            $(".RightFloatNavBox").css({
                                "margin-top": -h / 2
                            });
                        </script>
                    </div>
                </div>
                <script>
                    $(function() {
                        isIe6 = false;

                        if ('undefined' == typeof(document.body.style.maxHeight)) {
                            isIe6 = true;
                        }
                        var offset = $("#topcontrol").offset();
                        var bottom = $("#topcontrol").css("bottom");
                        $("#topcontrol #sider_returntop").click(function() {
                            $('body,html').animate({
                                scrollTop: 0
                            },
                            500);
                            return false;
                        });
                    })
                </script>
            </div>
        </div>
        <script type="text/javascript">
            var button_compare = '';
            var exist = "您已经选择了%s";
            var count_limit = "最多只能选择4个商品进行对比";
            var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
            var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
            var btn_buy = "购买";
            var is_cancel = "取消";
            var select_spe = "请选择商品属性";
        </script>
    </body>

</html>