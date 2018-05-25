@extends('layout.home')
@section('content')
        <link href="css/style_1.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/global.js">
        </script>
        <script type="text/javascript" src="js/compare.js">
        </script>
        <div class="block">
            <!--<p></p>-->
            <div class="contentBody">
                <div class="mainBody">
                    <div id="small-nav">
                        <div id="brand" class="f_l where">
                            <div class="first">
                                品牌
                            </div>
                            <ul id="brand-text">
                                <li>
                                    <span>
                                        全部
                                    </span>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;brand=78&amp;price_min=0&amp;price_max=0">
                                        蒙娜丽莎
                                    </a>
                                </li>
                            </ul>
                            <div class="filter_more">
                                <a href="javascript:;" class="where-more f_r brand_where">
                                    <span>
                                        更多
                                    </span>
                                    <i>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="f-l where">
                            <div class="first">
                                颜色
                            </div>
                            <ul class="where-ul">
                                <li>
                                    <span>
                                        全部
                                    </span>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=0&amp;price_max=0&amp;filter_attr=411.0">
                                        白色
                                    </a>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=0&amp;price_max=0&amp;filter_attr=413.0">
                                        紫色
                                    </a>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=0&amp;price_max=0&amp;filter_attr=412.0">
                                        红色
                                    </a>
                                </li>
                            </ul>
                            <div class="filter_more">
                                <a href="javascript:;" class="where-more f_r brand_where">
                                    <span>
                                        更多
                                    </span>
                                    <i>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="f-l where">
                            <div class="first">
                                重量
                            </div>
                            <ul class="where-ul">
                                <li>
                                    <span>
                                        全部
                                    </span>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.415">
                                        10g
                                    </a>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.416">
                                        15g
                                    </a>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.417">
                                        20g
                                    </a>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.414">
                                        5g
                                    </a>
                                </li>
                            </ul>
                            <div class="filter_more">
                                <a href="javascript:;" class="where-more f_r brand_where">
                                    <span>
                                        更多
                                    </span>
                                    <i>
                                    </i>
                                </a>
                            </div>
                        </div>
                        <div class="f-l where">
                            <div class="first">
                                价格
                            </div>
                            <ul class="where-ul">
                                <li>
                                    <span>
                                        全部
                                    </span>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=50&amp;price_max=100">
                                        50&nbsp;-&nbsp;100
                                    </a>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=150&amp;price_max=200">
                                        150&nbsp;-&nbsp;200
                                    </a>
                                </li>
                                <li>
                                    <a href="category.php?id=407&amp;price_min=450&amp;price_max=500">
                                        450&nbsp;-&nbsp;500
                                    </a>
                                </li>
                            </ul>
                            <div class="filter_more">
                                <a href="javascript:;" class="where-more f_r brand_where">
                                    <span>
                                        更多
                                    </span>
                                    <i>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--<div id="more_options">
                    <div id="mo_bg"></div>
                    <a href="javascript:;" id="mo_bt">更多选项<i id="mo_op"></i></a>
                    </div>-->
                    <script type="text/javascript">
                        $(function() {

                            $(".filter_more").each(function() {
                                var parent = $(this).parent(".where");
                                var h1 = parent.css("height");
                                parent.css({
                                    height: "auto"
                                });
                                var h2 = parent.outerHeight();
                                parent.css({
                                    height: h1
                                });
                                var done = false;
                                var ul = $(this).parent(".where").find("ul").height();
                                if (ul <= parseInt(h1)) {
                                    $(this).hide();
                                }
                                $(this).click(function() {
                                    var h3 = parent.css("height");

                                    if (!done) {
                                        done = !done;
                                        parent.stop().animate({
                                            height: h2 - 10
                                        });
                                        $(this).find("span").text("收缩");
                                        $(this).find("i").css("background-position", "0 -71px");
                                    } else {
                                        done = !done;
                                        parent.stop().animate({
                                            height: h1
                                        });
                                        $(this).find("span").text("更多");
                                        $(this).find("i").css("background-position", "0 -65px");
                                    }
                                });
                            });
                            /*
    (function(){
        var fn=function(){
            var len=$(".where").length;
            if(len<=5){
                $("#mo_bt").hide();
            }
            for(var i=len-1;i>4;i--){
                $(".where").eq(i).hide();
            }
        }
        fn();
        var done=false;
        $("#mo_bt").click(function(){
            if(!done){
                $(".where").show();
                done=!done;
                $(this).html("精简选项"+"<i id='mo_up'></i>");
            }else{
                fn();
                done=!done;
                $(this).html("更多选项"+"<i id='mo_op'></i>");
            }
        });
    })();
    */
                            //
                            $("#small-nav .where:last").css("border-bottom", "0");
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="content_c">
            <div class="searchBody block">
                <div class="block clearfix">
                    <div class="AreaR" style="width:100%;">
                        <div class="searchRight_title">
                            <div class="rightTitle_left">
                                <form method="GET" class="sort" name="listform">
                                    <div class="f_l ProFilter" style="display:block;">
                                        <a href="javascript:;" style="display:none;" onClick="javascript:display_mode('list')">
                                            <img src="picture/display_mode_list.gif" alt="">
                                        </a>
                                        <a href="javascript:;" style="display:none;" onClick="javascript:display_mode('grid')">
                                            <img src="picture/display_mode_grid_act.gif" alt="">
                                        </a>
                                        <a href="javascript:;" style="display:none;" onClick="javascript:display_mode('text')">
                                            <img src="picture/display_mode_text.gif" alt="">
                                        </a>
                                        <a style="display:block;" class="Sort Active" href="category.php?category=407&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC">
                                            综合
                                            </span>
                                        </a>
                                        <a style="display:block;" class="Sort" href="category.php?category=407&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=sales_volume&order=DESC">
                                            销量
                                        </a>
                                        <a style="display:block;" class="Sort" href="category.php?category=407&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC">
                                            最新
                                        </a>
                                        <a style="display:block;" class="Sort" href="category.php?category=407&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC">
                                            价格
                                        </a>
                                    </div>
                                </form>
                                <div class="Next-pre" style="display:none;">
                                    <span>
                                        <label>
                                            1 / 1
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="h39" style="height:39px; display:none;">
                        </div>
                        <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
                            <div class="searchRight_body product_list pb30">
                                <ul class="y_searchList clearfix">
                                    <li class="gItem_199">
                                        <div class="pro_item_img">
                                            <a href="goods.php?id=199" title="卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002"
                                            target="_blank">
                                                <img src="picture/199_thumb_g_1403133749580.jpg" alt="卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002"
                                                width="320" height="186">
                                            </a>
                                        </div>
                                        <div class="pro_item_tit">
                                            <a href="goods.php?id=199" title="卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002"
                                            target="_blank">
                                                <span>
                                                    4.1折
                                                </span>
                                                / 卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002
                                            </a>
                                        </div>
                                        <div class="pro_item_info">
                                            <div class="pro_item_info_L">
                                                ￥
                                                <span>
                                                    159
                                                </span>
                                            </div>
                                            <div class="pro_item_info_C">
                                                <span class="icon_dscnt">
                                                    <i class="icon_dscnt_l">
                                                    </i>
                                                    <em class="icon_dscnt_m">
                                                        立省：¥112
                                                    </em>
                                                    <i class="icon_dscnt_r">
                                                    </i>
                                                </span>
                                                <del>
                                                    ￥
                                                    <span>
                                                        190
                                                    </span>
                                                </del>
                                            </div>
                                            <div class="pro_item_info_R">
                                                <span class="pro_item_count_person">
                                                    <em>
                                                        1人
                                                    </em>
                                                    已购买
                                                </span>
                                                <a href="javascript:addToCartShowDiv(199,1,'goodsList')" class="Addcart Sub">
                                                </a>
                                            </div>
                                        </div>
                                        <input type="hidden" value="picture/199_thumb_g_1403133749580.jpg" name="goodsThumb"
                                        />
                                    </li>
                                    <li class="gItem_198">
                                        <div class="pro_item_img">
                                            <a href="goods.php?id=198" title="ZLIME致美 超柔净透洁肤仪（粉紫） 1pc" target="_blank">
                                                <img src="picture/198_thumb_g_1403133425869.jpg" alt="ZLIME致美 超柔净透洁肤仪（粉紫） 1pc"
                                                width="320" height="186">
                                            </a>
                                        </div>
                                        <div class="pro_item_tit">
                                            <a href="goods.php?id=198" title="ZLIME致美 超柔净透洁肤仪（粉紫） 1pc" target="_blank">
                                                <span>
                                                    2.3折
                                                </span>
                                                / ZLIME致美 超柔净透洁肤仪（粉紫） 1pc
                                            </a>
                                        </div>
                                        <div class="pro_item_info">
                                            <div class="pro_item_info_L">
                                                ￥
                                                <span>
                                                    498
                                                </span>
                                            </div>
                                            <div class="pro_item_info_C">
                                                <span class="icon_dscnt">
                                                    <i class="icon_dscnt_l">
                                                    </i>
                                                    <em class="icon_dscnt_m">
                                                        立省：¥459
                                                    </em>
                                                    <i class="icon_dscnt_r">
                                                    </i>
                                                </span>
                                                <del>
                                                    ￥
                                                    <span>
                                                        597
                                                    </span>
                                                </del>
                                            </div>
                                            <div class="pro_item_info_R">
                                                <span class="pro_item_count_person">
                                                    <em>
                                                        2人
                                                    </em>
                                                    已购买
                                                </span>
                                                <a href="javascript:addToCartShowDiv(198,1,'goodsList')" class="Addcart Sub">
                                                </a>
                                            </div>
                                        </div>
                                        <input type="hidden" value="picture/198_thumb_g_1403133425869.jpg" name="goodsThumb"
                                        />
                                    </li>
                                    <li class="gItem_197" style="margin-right:0;">
                                        <div class="pro_item_img">
                                            <a href="goods.php?id=197" title="ARTOS雅涂 602沙滩城堡+608酒红色 13ml" target="_blank">
                                                <img src="picture/197_thumb_g_1403133060692.jpg" alt="ARTOS雅涂 602沙滩城堡+608酒红色 13ml"
                                                width="320" height="186">
                                            </a>
                                        </div>
                                        <div class="pro_item_tit">
                                            <a href="goods.php?id=197" title="ARTOS雅涂 602沙滩城堡+608酒红色 13ml" target="_blank">
                                                <span>
                                                    8.4折
                                                </span>
                                                / ARTOS雅涂 602沙滩城堡+608酒红色 13ml
                                            </a>
                                        </div>
                                        <div class="pro_item_info">
                                            <div class="pro_item_info_L">
                                                ￥
                                                <span>
                                                    178
                                                </span>
                                            </div>
                                            <div class="pro_item_info_C">
                                                <span class="icon_dscnt">
                                                    <i class="icon_dscnt_l">
                                                    </i>
                                                    <em class="icon_dscnt_m">
                                                        立省：¥35
                                                    </em>
                                                    <i class="icon_dscnt_r">
                                                    </i>
                                                </span>
                                                <del>
                                                    ￥
                                                    <span>
                                                        213
                                                    </span>
                                                </del>
                                            </div>
                                            <div class="pro_item_info_R">
                                                <span class="pro_item_count_person">
                                                    <em>
                                                        1人
                                                    </em>
                                                    已购买
                                                </span>
                                                <a href="javascript:addToCartShowDiv(197,1,'goodsList')" class="Addcart Sub">
                                                </a>
                                            </div>
                                        </div>
                                        <input type="hidden" value="picture/197_thumb_g_1403133060692.jpg" name="goodsThumb"
                                        />
                                    </li>
                                    <li class="gItem_196">
                                        <div class="pro_item_img">
                                            <a href="goods.php?id=196" title="VEECCI唯资 超完美持久水眉笔104#灰色 1.5g" target="_blank">
                                                <img src="picture/196_thumb_g_1403132759548.jpg" alt="VEECCI唯资 超完美持久水眉笔104#灰色 1.5g"
                                                width="320" height="186">
                                            </a>
                                        </div>
                                        <div class="pro_item_tit">
                                            <a href="goods.php?id=196" title="VEECCI唯资 超完美持久水眉笔104#灰色 1.5g" target="_blank">
                                                <span>
                                                    4.4折
                                                </span>
                                                / VEECCI唯资 超完美持久水眉笔104#灰色 1.5g
                                            </a>
                                        </div>
                                        <div class="pro_item_info">
                                            <div class="pro_item_info_L">
                                                ￥
                                                <span>
                                                    59
                                                </span>
                                            </div>
                                            <div class="pro_item_info_C">
                                                <span class="icon_dscnt">
                                                    <i class="icon_dscnt_l">
                                                    </i>
                                                    <em class="icon_dscnt_m">
                                                        立省：¥50
                                                    </em>
                                                    <i class="icon_dscnt_r">
                                                    </i>
                                                </span>
                                                <del>
                                                    ￥
                                                    <span>
                                                        89
                                                    </span>
                                                </del>
                                            </div>
                                            <div class="pro_item_info_R">
                                                <span class="pro_item_count_person">
                                                    <em>
                                                        1人
                                                    </em>
                                                    已购买
                                                </span>
                                                <a href="javascript:addToCartShowDiv(196,1,'goodsList')" class="Addcart Sub">
                                                </a>
                                            </div>
                                        </div>
                                        <input type="hidden" value="picture/196_thumb_g_1403132759548.jpg" name="goodsThumb"
                                        />
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <script type="text/javascript">
                            $(".y_searchList li").hover(function() {
                                $(this).find(".Addcart").css({
                                    "display": "block"
                                });
                                $(this).find(".pro_item_count").stop(true, false).animate({
                                    "bottom": 0
                                },
                                300);
                            },
                            function() {
                                $(this).find(".Addcart").css({
                                    "display": "none"
                                });
                                $(this).find(".pro_item_count").animate({
                                    "bottom": -22 + "px"
                                },
                                200);
                            });
                        </script>
                        <script type="Text/Javascript" language="JavaScript">
                            // < !--
                            function selectPage(sel) {
                                sel.form.submit();
                            }
                            //-->

                        </script>
                        <script type="text/javascript">
                            window.onload = function() {
                                Compare.init();
                                fixpng();
                            }
                            var button_compare = '';
                            var exist = "您已经选择了%s";
                            var count_limit = "最多只能选择4个商品进行对比";
                            var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
                            var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
                            var btn_buy = "购买";
                            var is_cancel = "取消";
                            var select_spe = "请选择商品属性";
                        </script>
                        <form name="selectPageForm" action="/category.php" method="get">
                        </form>
                        <script type="Text/Javascript" language="JavaScript">
                            // < !--
                            function selectPage(sel) {
                                sel.form.submit();
                            }
                            //-->

                        </script>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection