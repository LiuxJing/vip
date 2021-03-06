﻿@extends('layout.home')
@section('content')
        <link href="css/style_2.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="js/left_goodslist.js"></script>
        <script>
            function changeAtt(t) {
                t.lastChild.checked = 'checked';
                for (var i = 0; i < t.parentNode.childNodes.length; i++) {
                    if (t.parentNode.childNodes[i].className == 'cattsel') {
                        t.parentNode.childNodes[i].className = '';
                    }
                }
                t.className = "cattsel";
                changePrice();
            }
        </script>
        <script type="text/javascript">
            function $id(element) {
                return document.getElementById(element);
            }
            //切屏--是按钮，_v是内容平台，_h是内容库
            function reg(str) {
                var bt = $id(str + "_b").getElementsByTagName("h2");
                for (var i = 0; i < bt.length; i++) {
                    bt[i].subj = str;
                    bt[i].pai = i;
                    bt[i].style.cursor = "pointer";
                    bt[i].onclick = function() {
                        $id(this.subj + "_v").innerHTML = $id(this.subj + "_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
                        for (var j = 0; j < $id(this.subj + "_b").getElementsByTagName("h2").length; j++) {
                            var _bt = $id(this.subj + "_b").getElementsByTagName("h2")[j];
                            var ison = j == this.pai;
                            _bt.className = (ison ? "": "h2bg");
                        }
                    }
                }
                $id(str + "_h").className = "none";
                $id(str + "_v").innerHTML = $id(str + "_h").getElementsByTagName("blockquote")[0].innerHTML;
            }
        </script>

            <div class="content_detailed">
                <div class="contentBody">
                    <div class="mainBody ProductDetail" style="overflow:visible;">
                        <div id="goodsInfo" class="clearfix">
                            <div class="bt_box_t clearfix">
                                <div class="bt_box_tL f_l">
                                    <h1 class="bt_title">
                                        <b>
                                            ARTOS雅涂 602沙滩城堡+608酒红色 13ml
                                        </b>
                                        　唯资VEECCI，满足所有追求时尚自然持久防水眉妆的女性而设计，画出立体眉形潮流，史无前例的无敌口碑，超高性价比。
                                    </h1>
                                </div>
                            </div>
                            <div class="bt_infos_box clearfix">
                                <div class="mod_picfold clearfix">
                                    <div id="detail_main_img" class="imgbox">
                                        <div class="layout_wrap">
                                            <div class="prodimg">
                                                <img id="J_prodImg" src="picture/197_g_1403133060893.jpg" width="690"
                                                height="400" alt="ARTOS雅涂 602沙滩城堡+608酒红色 13ml" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="textInfo">
                                    <form action="javascript:addToCart(197)" method="post" name="ECS_FORMBUY"
                                    id="ECS_FORMBUY">
                                        <div class="bt_infos_r_t">
                                            <div class="bt_infos_r_con">
                                                <b class="bt_infos_price">
                                                    ￥
                                                    <span>
                                                        178.00
                                                    </span>
                                                </b>
                                                <div class="bt_infos_sign">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="bt_price_list clearfix">
                                            <li>
                                                <p>
                                                    市场价
                                                </p>
                                                <del>
                                                    ￥
                                                    <span>
                                                        213
                                                    </span>
                                                </del>
                                            </li>
                                            <li>
                                                <p>
                                                    <b>
                                                        折扣
                                                    </b>
                                                </p>
                                                <p>
                                                    8.4折
                                                </p>
                                            </li>
                                            <li style="border:0;">
                                                <p>
                                                    节省
                                                </p>
                                                <p>
                                                    <b>
                                                        ¥35
                                                    </b>
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="bt_infos_r_m">
                                            <div id="bt_onsale">
                                                <p class="bt_buy_num">
                                                    正在疯抢中...
                                                </p>
                                            </div>
                                            <p class="bt_saleout_info">
                                                本商品已被抢光
                                                <br />
                                                下次出手要快哦！
                                            </p>
                                        </div>
                                        <div class="bt_infos_r_b">
                                            <span class="bt_counts">
                                                数量：
                                            </span>
                                            <a onclick="buyNumber.minus()" href="javascript:;" class="minus">
                                            </a>
                                            <input name="number" type="text" value="1" defaultnumber="1" onkeyup="inputOnlyNum(this, 1,999);"
                                            id="product_num" class="inp_num">
                                            <a onclick="buyNumber.plus()" href="javascript:;" class="plus">
                                            </a>
                                            <div id="detail_store">
                                                <div class="center_shop_btn">
                                                    <a href="javascript:addToCartShowDiv(197,1,'goodsinfo');" class="Sub">
                                                    </a>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                // add by liuguichun 2011-7-19
                                                var buyNumber = {
                                                    maxNumber: 100,
                                                    minNumber: 1,
                                                    defaultNumber: function() {
                                                        var defaultnumber = $('#product_num').attr('defaultnumber');
                                                        defaultnumber = parseInt(defaultnumber) if (defaultnumber < 1) {
                                                            defaultnumber = 1;
                                                        }
                                                        return defaultnumber;
                                                    },

                                                    goodNumber: function(num) {
                                                        if (typeof(num) == 'number') {
                                                            return $('#product_num').val(num);
                                                        } else {
                                                            return parseInt($('#product_num').val());
                                                        }
                                                    },

                                                    plus: function() {
                                                        var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
                                                        if (num <= buyNumber.maxNumber) {
                                                            buyNumber.goodNumber(num);
                                                        }
                                                    },
                                                    minus: function() {
                                                        var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
                                                        if (num >= buyNumber.minNumber) {
                                                            buyNumber.goodNumber(num);
                                                        }
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="bt_bline">
                                <div class="bt_goods_other_l clearfix">
                                    <div style="float:left; line-height:28px; color:#999; padding-left:20px;">
                                        商品编号：6937617060285
                                    </div>
                                    <div style="float:right;">
                                        <div class="bdsharebuttonbox" style="float:right;">
                                            <a href="#" class="bds_more" data-cmd="more">
                                                分享到：
                                            </a>
                                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">
                                                新浪微博
                                            </a>
                                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">
                                                QQ空间
                                            </a>
                                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">
                                                腾讯微博
                                            </a>
                                            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">
                                                人人网
                                            </a>
                                        </div>
                                        <script>
                                            window._bd_share_config = {
                                                "common": {
                                                    "bdSnsKey": {},
                                                    "bdText": "",
                                                    "bdMini": "2",
                                                    "bdMiniList": false,
                                                    "bdPic": "",
                                                    "bdStyle": "0",
                                                    "bdSize": "16"
                                                },
                                                "share": {
                                                    "bdSize": 16
                                                }
                                            };
                                            // with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = '' + ~ ( - new Date() / 36e5)];
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="picture/197_g_1403133060893.jpg" name="goodsThumb"
                            />
                        </div>
                    </div>
                </div>
                <div class="detail_middle ">
                    <div class="block goodsCon clearfix">
                        <div class="AreaL">
                            <div class="bt_promise clearfix">
                                <dl>
                                    <dt>
                                        <b class="s1">
                                            100%正品保证
                                        </b>
                                    </dt>
                                    <dd>
                                        唯品会所售品牌均经过授权；并由中国太平洋保险为您购买的每一件商品进行承保。
                                    </dd>
                                </dl>
                                <dl class="bt_promise_item">
                                    <dt>
                                        <b class="s2">
                                            上市公司保障
                                        </b>
                                    </dt>
                                    <dd>
                                        唯品会支持货到付款，开箱验货。
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                        <b class="s3">
                                            100%正品保证
                                        </b>
                                    </dt>
                                    <dd>
                                        华南首家上市电子商务公司，我们有实力也有决心保障您的合法利益。
                                    </dd>
                                </dl>
                            </div>
                            <div class="inDetail_boxOut ">
                                <DIV class="inDetail_box">
                                    <div class="fixed_out">
                                        <div class="inLeft_btn fixed" id="inner">
                                            <div style="width:1000px;">
                                                <ul>
                                                    <li class="current">
                                                        商品参数
                                                    </li>
                                                    <li>
                                                        商品详情
                                                    </li>
                                                    <li>
                                                        品牌介绍
                                                    </li>
                                                    <li>
                                                        用户评价
                                                    </li>
                                                    <li style="display:none;">
                                                    </li>
                                                </ul>
                                                <div class="inLeft_btn_right">
                                                    <span class="bt_fixed_price">
                                                        ￥
                                                        <span>
                                                            0
                                                        </span>
                                                    </span>
                                                    <a href="javascript:addToCartShowDiv(197,1,'promotion')" class="bt_fixed_buy Sub">
                                                        加入购物车
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="h40" style="height:43px; display:none;">
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var obj11 = document.getElementById("inner");
                                        var top11 = getTop(obj11);
                                        var isIE6 = /msie 6/i.test(navigator.userAgent);
                                        window.onscroll = function() {
                                            var bodyScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                                            if (bodyScrollTop > top11) {
                                                obj11.style.position = (isIE6) ? "absolute": "fixed";
                                                obj11.style.top = (isIE6) ? bodyScrollTop + "px": "0px";
                                                //$("#inner").addClass("hover");
                                                $("#inner").css({
                                                    "width": "100%",
                                                    "z-index": 99,
                                                    "left": 0,
                                                });
                                                $(".h40").css({
                                                    "display": "block"
                                                });
                                                $(".inLeft_btn").find(".inLeft_btn_right").css({
                                                    "display": "block"
                                                });
                                                $(".inLeft_btn ul").css({
                                                    "border-left": "1px solid #999"
                                                });
                                            } else {
                                                obj11.style.position = "absolute";
                                                //$("#inner").removeClass("hover");
                                                $(".h40").css({
                                                    "display": "none"
                                                });
                                                $(".inLeft_btn").find(".inLeft_btn_right").css({
                                                    "display": "none"
                                                });
                                                $(".inLeft_btn ul").css({
                                                    "border": 0
                                                });
                                            }
                                        }
                                        function getTop(e) {
                                            var offset = e.offsetTop;
                                            if (e.offsetParent != null) offset += getTop(e.offsetParent);
                                            return offset;
                                        }
                                    </script>
                                    <div id="no_try_record" class="ProBox js_nn_lc_con">
                                        <div class="BusinessInfo ProDetailBox Propar">
                                            <p>
                                                <img src="picture/mzpd-6936410760590-110_1.jpg" alt="商品参数" />
                                            </p>
                                            <h2 class="bt_con_title bt_con_title0">
                                                商品参数
                                            </h2>
                                            <ul style="min-height: 142px;">
                                                <img src="picture/mzpd-6936410760590-11.jpg" class="bt_lt_par_img" alt=""
                                                />
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        商品名称：
                                                    </b>
                                                    <p class="bt_lt_par_p">
                                                        602沙滩城堡+608酒红色 13ml
                                                    </p>
                                                </li>
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌：
                                                    </b>
                                                    <p class="bt_lt_par_p">
                                                        ARTOS雅涂
                                                    </p>
                                                </li>
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        分&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;类：
                                                    </b>
                                                    <p class="bt_lt_par_p">
                                                        指甲油/洗甲水
                                                    </p>
                                                </li>
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        规&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格：
                                                    </b>
                                                    <p class="bt_lt_par_p">
                                                        13ml
                                                    </p>
                                                </li>
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        产&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地：
                                                    </b>
                                                    <p class="bt_lt_par_p">
                                                        上海
                                                    </p>
                                                </li>
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        有&nbsp;&nbsp;效&nbsp;&nbsp;期：
                                                    </b>
                                                    <p class="bt_lt_par_p">
                                                        2016年3月（具体日期以收到的实物为准）
                                                    </p>
                                                </li>
                                                <li style="display: none;">
                                                    <b class="bt_lt_par_t">
                                                        适合人群：
                                                    </b>
                                                    <p class="bt_lt_par_p">
                                                        &nbsp;
                                                    </p>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        温馨提示：
                                                    </b>
                                                    <p class="bt_lt_par_p bt_lt_par_p2">
                                                        由于进货批次不同，存在不同包装和生产日期，随机发货。因此您收到的商品可能与图片包装不同，生产日期有差异，但均为正品，并且都在保质期内，请放心选购。
                                                        此类商品属于特殊商品，收货时请仔细验货，如遇非质量问题签收后恕不接受退货。请见谅！
                                                    </p>
                                                </li>
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        退货规则：
                                                    </b>
                                                    <p class="bt_lt_par_p bt_lt_par_p2">
                                                        此类商品属于特殊商品，收货时请仔细验货，如遇非质量问题签收后恕不接受退货。请见谅！
                                                    </p>
                                                </li>
                                                <li>
                                                    <b class="bt_lt_par_t">
                                                        功能特点：
                                                    </b>
                                                    <p class="bt_lt_par_p bt_lt_par_p2">
                                                        <span class="bt_lt_par_gn">
                                                            美甲
                                                        </span>
                                                        <span class="bt_lt_par_gn">
                                                            快干
                                                        </span>
                                                        <span class="bt_lt_par_gn">
                                                            天然
                                                        </span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="BusinessInfo ProDetailBox">
                                            <h2 class="bt_con_title bt_con_title1">
                                                商品详情
                                            </h2>
                                            <p>
                                                <img src="picture/mzpd-6936410760590-110_2.jpg" alt="商品详情" />
                                            </p>
                                            <h2 class="bt_con_title bt_con_title2">
                                                用户口碑
                                            </h2>
                                            <p>
                                                <img src="picture/mzpd-6936410760590-110_3.jpg" alt="用户口碑" />
                                            </p>
                                        </div>
                                        <div class="BusinessInfo ProDetailBox">
                                            <h2 class="bt_con_title bt_con_title4">
                                                关于唯品会
                                            </h2>
                                            <div class="BrandYoushi SlideTxtBox">
                                                <div class="hd">
                                                    <ul>
                                                        <li>
                                                            <span class="s1">
                                                                1
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="s2">
                                                                2
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="s3">
                                                                3
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="s4">
                                                                4
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="s5">
                                                                5
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="s6">
                                                                6
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="s7">
                                                                7
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bd">
                                                    <div>
                                                        <img src="picture/bt_img1.jpg" />
                                                    </div>
                                                    <div>
                                                        <img src="picture/bt_img2.jpg" />
                                                    </div>
                                                    <div>
                                                        <img src="picture/bt_img3.jpg" />
                                                    </div>
                                                    <div>
                                                        <img src="picture/bt_img4.jpg" />
                                                    </div>
                                                    <div>
                                                        <img src="picture/bt_img5.jpg" />
                                                    </div>
                                                    <div>
                                                        <img src="picture/bt_img6.jpg" />
                                                    </div>
                                                    <div>
                                                        <img src="picture/bt_img7.jpg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                jQuery(".SlideTxtBox").slide({
                                                    autoPlay: true,
                                                    delayTime: 0
                                                });
                                            </script>
                                        </div>
                                        <div class="BusinessInfo ProDetailBox">
                                            <h2 class="bt_con_title bt_con_title2">
                                                用户评价
                                            </h2>
                                            <div id="i-comment">
                                                <div class="rate">
                                                    <strong>
                                                        100%
                                                    </strong>
                                                    <br>
                                                    好评度
                                                </div>
                                                <div class="percent">
                                                    <dl>
                                                        <dt>
                                                            好评
                                                        </dt>
                                                        <dd class="d1">
                                                            <div style="width: 100%;">
                                                            </div>
                                                        </dd>
                                                        <dd class="d2">
                                                            100%
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>
                                                            中评
                                                        </dt>
                                                        <dd class="d1">
                                                            <div style="width: 0%;">
                                                            </div>
                                                        </dd>
                                                        <dd class="d2">
                                                            0%
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt>
                                                            差评
                                                        </dt>
                                                        <dd class="d1">
                                                            <div style="width: 0%;">
                                                            </div>
                                                        </dd>
                                                        <dd class="d2">
                                                            0%
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="btns">
                                                    <a href="javascript:void(0);" class="btn-comment" id="showcommentform">
                                                        我要评价
                                                    </a>
                                                </div>
                                                <div class="clear">
                                                </div>
                                            </div>
                                            <div class="comment_body ">
                                                <div id="ECS_COMMENT">
                                                    <div class="clearfix CommentsList">
                                                        <ul>
                                                            <p class="NoneComments">
                                                                暂时还没有任何用户评论
                                                            </p>
                                                        </ul>
                                                        <div id="boxOverlay">
                                                        </div>
                                                        <div class="i-zixun" id="commentform">
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="aui_border">
                                                                <tr>
                                                                    <td class="aui_nw">
                                                                    </td>
                                                                    <td class="aui_n">
                                                                    </td>
                                                                    <td class="aui_ne">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="aui_w">
                                                                    </td>
                                                                    <td class="aui_c" style="background:#fff;">
                                                                        <h3>
                                                                            <p>
                                                                                发表评论
                                                                            </p>
                                                                            <a class="close">
                                                                                ×
                                                                            </a>
                                                                        </h3>
                                                                        <form id="commentForm" name="commentForm" method="post" onsubmit="submitComment(this)"
                                                                        action="javascript:;">
                                                                            <table cellspacing="0" cellpadding="0" border="0" style="margin:10px 0 20px;">
                                                                                <tbody>
                                                                                    <tr class="tr1">
                                                                                        <td class="td1">
                                                                                            商品满意度：
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="cmtRank">
                                                                                                <span onclick="showrank(this,'1','#Rank','#commentrank')" onmouseover="showrank(this,'1','#Rank')"
                                                                                                onmouseout="hiddenrank(this,'#Rank','#commentrank')">
                                                                                                </span>
                                                                                                <span onclick="showrank(this,'2','#Rank','#commentrank')" onmouseover="showrank(this,'2','#Rank')"
                                                                                                onmouseout="hiddenrank(this,'#Rank','#commentrank')">
                                                                                                </span>
                                                                                                <span onclick="showrank(this,'3','#Rank','#commentrank')" onmouseover="showrank(this,'3','#Rank')"
                                                                                                onmouseout="hiddenrank(this,'#Rank','#commentrank')">
                                                                                                </span>
                                                                                                <span onclick="showrank(this,'4','#Rank','#commentrank')" onmouseover="showrank(this,'4','#Rank')"
                                                                                                onmouseout="hiddenrank(this,'#Rank','#commentrank')">
                                                                                                </span>
                                                                                                <span onclick="showrank(this,'5','#Rank','#commentrank')" onmouseover="showrank(this,'5','#Rank')"
                                                                                                onmouseout="hiddenrank(this,'#Rank','#commentrank')">
                                                                                                </span>
                                                                                            </div>
                                                                                            <span id="Rank">
                                                                                            </span>
                                                                                            <span>
                                                                                                点击星星就可以评分
                                                                                            </span>
                                                                                        </td>
                                                                                        <input type="hidden" value="" name="comment_rank" id="commentrank">
                                                                                        <input type="hidden" name="cmt_type" value="0" />
                                                                                        <input type="hidden" name="id" value="197" />
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="td1">
                                                                                            E-mail：
                                                                                        </td>
                                                                                        <td>
                                                                                            <input type="text" class="inputBorder text2" value="" maxlength="100"
                                                                                            id="email" name="email">
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="td1">
                                                                                            商品评论：
                                                                                        </td>
                                                                                        <td>
                                                                                            <textarea onblur="if(this.value=='') this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue) this.value='';"
                                                                                            name="content">
                                                                                                所有用户都可以对该商品发表评论
                                                                                            </textarea>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="td2">
                                                                                        </td>
                                                                                        <td>
                                                                                            <table>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            验证码：
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input type="text" tabindex="0" name="captcha" value="" onfocus="if(this.value==this.defaultValue) this.value='';"
                                                                                                            onblur="if(this.value=='') this.value=this.defaultValue;" class="text1">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <img src="picture/captcha.php" alt="captcha" onClick="this.src='captcha.php?'+Math.random()"
                                                                                                            class="captcha">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <input type="submit" value="发表评论" class="sub">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </form>
                                                                    </td>
                                                                    <td class="aui_e">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="aui_sw">
                                                                    </td>
                                                                    <td class="aui_s">
                                                                    </td>
                                                                    <td class="aui_se">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="blank5">
                                                    </div>
                                                    <script type="text/javascript">
                                                        //<![CDATA[
                                                        var cmt_empty_username = "请输入您的用户名称";
                                                        var cmt_empty_email = "请输入您的电子邮件地址";
                                                        var cmt_error_email = "电子邮件地址格式不正确";
                                                        var cmt_empty_content = "您没有输入评论的内容";
                                                        var captcha_not_null = "验证码不能为空!";
                                                        var cmt_invalid_comments = "无效的评论内容!";

                                                        /**
 * 提交评论信息
*/
                                                        function submitComment(frm) {
                                                            var cmt = new Object;

                                                            //cmt.username        = frm.elements['username'].value;
                                                            cmt.email = frm.elements['email'].value;
                                                            cmt.content = frm.elements['content'].value;
                                                            cmt.type = frm.elements['cmt_type'].value;
                                                            cmt.id = frm.elements['id'].value;
                                                            cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value: '0';
                                                            cmt.captcha = frm.elements['captcha'] ? frm.elements['captcha'].value: '';
                                                            /*zhou edit start*/
                                                            cmt.rank = frm.elements['comment_rank'].value ? frm.elements['comment_rank'].value: 0;

                                                            if (cmt.rank <= 0) {
                                                                alert('请选择评分等级');
                                                                return false;
                                                            }
                                                            /*zhou edit end*/
                                                            /*
  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }
  */

                                                            //  if (cmt.username.length == 0)
                                                            //  {
                                                            //     alert(cmt_empty_username);
                                                            //     return false;
                                                            //  }
                                                            if (cmt.email.length > 0) {
                                                                if (! (Utils.isEmail(cmt.email))) {
                                                                    alert(cmt_error_email);
                                                                    return false;
                                                                }
                                                            } else {
                                                                alert(cmt_empty_email);
                                                                return false;
                                                            }

                                                            if (cmt.content.length == 0) {
                                                                alert(cmt_empty_content);
                                                                return false;
                                                            }

                                                            if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0) {
                                                                alert(captcha_not_null);
                                                                return false;
                                                            }

                                                            Ajax.call('comment.php', 'cmt=' + $.toJSON(cmt), commentResponse, 'POST', 'JSON');
                                                            return false;
                                                        }

                                                        /**
 * 处理提交评论的反馈信息
*/
                                                        function commentResponse(result) {
                                                            if (result.message) {
                                                                alert(result.message);
                                                            }

                                                            if (result.error == 0) {
                                                                var layer = document.getElementById('ECS_COMMENT');

                                                                if (layer) {
                                                                    layer.innerHTML = result.content;
                                                                }
                                                            }
                                                        }

                                                        //]]>

                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </DIV>
                            </div>
                            <div class="blank">
                            </div>
                        </div>
                        <div class="AreaR" style=" overflow:hidden">
                            <div class="box BoughtGoods">
                                <div class="box_1">
                                    <h3>
                                        <span>
                                            买了的人还买了
                                        </span>
                                    </h3>
                                    <div class="BoughtGoodsCon">
                                        <ul>
                                            <li>
                                                <a href="goods.php?id=200">
                                                    <img src="picture/200_thumb_g_1403134234783.jpg" alt="萌黛儿 顶级黑水牛角梳防静电加大加厚款"
                                                    width="210" height="139" />
                                                </a>
                                                <p>
                                                    <a href="goods.php?id=200" title="萌黛儿 顶级黑水牛角梳防静电加大加厚款">
                                                        萌黛儿 顶级黑水牛角梳防静电加大加厚款
                                                    </a>
                                                </p>
                                                <span class="price-vipshop">
                                                    ￥178.00
                                                </span>
                                                <span class="price-market">
                                                    ￥
                                                    <span>
                                                        213
                                                    </span>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="goods.php?id=202">
                                                    <img src="picture/202_thumb_g_1403135666809.jpg" alt="诗妃 玫瑰嫩白润手霜 60g"
                                                    width="210" height="139" />
                                                </a>
                                                <p>
                                                    <a href="goods.php?id=202" title="诗妃 玫瑰嫩白润手霜 60g">
                                                        诗妃 玫瑰嫩白润手霜 60g
                                                    </a>
                                                </p>
                                                <span class="price-vipshop">
                                                    ￥178.00
                                                </span>
                                                <span class="price-market">
                                                    ￥
                                                    <span>
                                                        213
                                                    </span>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="goods.php?id=204">
                                                    <img src="picture/204_thumb_g_1403136331238.jpg" alt="meier美尔 全身水密码 240ml"
                                                    width="210" height="139" />
                                                </a>
                                                <p>
                                                    <a href="goods.php?id=204" title="meier美尔 全身水密码 240ml">
                                                        meier美尔 全身水密码 240ml
                                                    </a>
                                                </p>
                                                <span class="price-vipshop">
                                                    ￥178.00
                                                </span>
                                                <span class="price-market">
                                                    ￥
                                                    <span>
                                                        213
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box BoughtGoods">
                                <div class="box_1">
                                    <h3>
                                        <span>
                                            精选单品
                                        </span>
                                    </h3>
                                    <div class="BoughtGoodsCon">
                                        <ul>
                                            <li>
                                                <a href="goods.php?id=207">
                                                    <img src="picture/207_thumb_g_1403136826829.jpg" alt="三草两木 自然肌本水动力保湿乳 120ml"
                                                    width="210" height="139" />
                                                </a>
                                                <p>
                                                    <a href="goods.php?id=207" title="三草两木 自然肌本水动力保湿乳 120ml">
                                                        三草两木 自然肌本水动力保湿乳 120ml
                                                    </a>
                                                </p>
                                                <span class="price-vipshop">
                                                </span>
                                                <span class="price-market">
                                                    ￥
                                                    <span>
                                                        238
                                                    </span>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="goods.php?id=195">
                                                    <img src="picture/195_thumb_g_1403132067629.jpg" alt="圣荷stherb LoveBank[TangerineDream]佛罗蒙女用香水30ml"
                                                    width="210" height="139" />
                                                </a>
                                                <p>
                                                    <a href="goods.php?id=195" title="圣荷stherb LoveBank[TangerineDream]佛罗蒙女用香水30ml">
                                                        圣荷stherb LoveBank[TangerineDre...
                                                    </a>
                                                </p>
                                                <span class="price-vipshop">
                                                </span>
                                                <span class="price-market">
                                                    ￥
                                                    <span>
                                                        318
                                                    </span>
                                                </span>
                                            </li>
                                            <li>
                                                <a href="goods.php?id=198">
                                                    <img src="picture/198_thumb_g_1403133425869.jpg" alt="ZLIME致美 超柔净透洁肤仪（粉紫） 1pc"
                                                    width="210" height="139" />
                                                </a>
                                                <p>
                                                    <a href="goods.php?id=198" title="ZLIME致美 超柔净透洁肤仪（粉紫） 1pc">
                                                        ZLIME致美 超柔净透洁肤仪（粉紫） 1pc
                                                    </a>
                                                </p>
                                                <span class="price-vipshop">
                                                </span>
                                                <span class="price-market">
                                                    ￥
                                                    <span>
                                                        597
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box BoughtGoods" id="history_div">
                                <div class="box_1">
                                    <h3>
                                        <span>
                                            浏览历史
                                        </span>
                                    </h3>
                                    <div class="HistroyCon" id='history_list'>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                if (document.getElementById('history_list').innerHTML.replace(/\s/g, '').length < 1) {
                                    document.getElementById('history_div').style.display = 'none';
                                } else {
                                    document.getElementById('history_div').style.display = 'block';
                                }
                                function clear_history() {
                                    Ajax.call('user.php', 'act=clear_history', clear_history_Response, 'GET', 'TEXT', 1, 1);
                                }
                                function clear_history_Response(res) {
                                    document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
                                }
                            </script>
                            <script type="text/javascript">
                                $(".BoughtGoods").each(function() {
                                    $(this).find("li:last").css({
                                        "border": 0
                                    });
                                    $(this).find("dl:last").css({
                                        "border": 0
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank5">
            </div>
        </div>
@endsection