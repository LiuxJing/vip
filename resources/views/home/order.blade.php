@extends('layout.home')
@section('address')
        <link href="css/style_4.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/common_4.js">
        </script>
        <script type="text/javascript" src="js/shopping_flow_4.js">
        </script>
        <style class="firebugResetStyles" type="text/css" charset="utf-8">
            /* See license.txt for terms of usage */ /** reset styling **/ .firebugResetStyles
            { z-index: 2147483646 !important; top: 0 !important; left: 0 !important;
            display: block !important; border: 0 none !important; margin: 0 !important;
            padding: 0 !important; outline: 0 !important; min-width: 0 !important;
            max-width: none !important; min-height: 0 !important; max-height: none
            !important; position: fixed !important; transform: rotate(0deg) !important;
            transform-origin: 50% 50% !important; border-radius: 0 !important; box-shadow:
            none !important; background: transparent none !important; pointer-events:
            none !important; white-space: normal !important; } style.firebugResetStyles
            { display: none !important; } .firebugBlockBackgroundColor { background-color:
            transparent !important; } .firebugResetStyles:before, .firebugResetStyles:after
            { content: "" !important; } /**actual styling to be modified by firebug
            theme**/ .firebugCanvas { display: none !important; } /* * * * * * * *
            * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
            * * * * */ .firebugLayoutBox { width: auto !important; position: static
            !important; } .firebugLayoutBoxOffset { opacity: 0.8 !important; position:
            fixed !important; } .firebugLayoutLine { opacity: 0.4 !important; background-color:
            #000000 !important; } .firebugLayoutLineLeft, .firebugLayoutLineRight {
            width: 1px !important; height: 100% !important; } .firebugLayoutLineTop,
            .firebugLayoutLineBottom { width: 100% !important; height: 1px !important;
            } .firebugLayoutLineTop { margin-top: -1px !important; border-top: 1px
            solid #999999 !important; } .firebugLayoutLineRight { border-right: 1px
            solid #999999 !important; } .firebugLayoutLineBottom { border-bottom: 1px
            solid #999999 !important; } .firebugLayoutLineLeft { margin-left: -1px
            !important; border-left: 1px solid #999999 !important; } /* * * * * * *
            * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
            * * * * * */ .firebugLayoutBoxParent { border-top: 0 none !important; border-right:
            1px dashed #E00 !important; border-bottom: 1px dashed #E00 !important;
            border-left: 0 none !important; position: fixed !important; width: auto
            !important; } .firebugRuler{ position: absolute !important; } .firebugRulerH
            { top: -15px !important; left: 0 !important; width: 100% !important; height:
            14px !important; background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82")
            repeat-x !important; border-top: 1px solid #BBBBBB !important; border-right:
            1px dashed #BBBBBB !important; border-bottom: 1px solid #000000 !important;
            } .firebugRulerV { top: 0 !important; left: -15px !important; width: 14px
            !important; height: 100% !important; background: url("images/ec5ab1e0efcf4b74a859399c13206a6d.gif)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82")
            repeat-y !important; border-left: 1px solid #BBBBBB !important; border-right:
            1px solid #000000 !important; border-bottom: 1px dashed #BBBBBB !important;
            } .overflowRulerX > .firebugRulerV { left: 0 !important; } .overflowRulerY
            > .firebugRulerH { top: 0 !important; } /* * * * * * * * * * * * * * *
            * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */ .fbProxyElement
            { position: fixed !important; pointer-events: auto !important; }
        </style>
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
                            <script type="text/javascript" src="js/jquery-1_3.js">
                            </script>
                            <script type="text/javascript" src="js/jquery_002_3.js">
                            </script>
                            <script type="text/javascript" src="js/jquery_3.js">
                            </script>
                            <script type="text/javascript" src="js/transport_jquery_3.js">
                            </script>
                            <script type="text/javascript" src="js/utils_4.js">
                            </script>
                            <script type="text/javascript" src="js/ecmoban_common_3.js">
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
                    <script type="text/javascript" src="js/default_3.js">
                    </script>
                    <div class="headBox HeadBox">
                        <div class="logo f_l">
                            <a href="http://weipin.ecshop119.com/index.php" name="top">
                                <img src="picture/logo_4.gif">
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
        <div class="block_s">
            <div class="buytab_a" style="padding-bottom:20px;">
                <div>
                    <form action="flow.php" method="post" name="theForm" class="validator"
                    id="theForm" onsubmit="return checkOrderForm(this)">
                        <script type="text/javascript">
                            var flow_no_payment = "您必须选定一个支付方式。";
                            var flow_no_shipping = "您必须选定一个配送方式。";
                        </script>
                        <h2 class="nstep1_tit2">
                            收货人信息
                        </h2>
                        <div class="nstep2_ctent">
                            <div class="OrderProInfo">
                                <div class="Address">
                                    <ul>
                                        <li>
                                            <dl class="co_saved_addr_item on">
                                                <dd class="deliver_name">
                                                    哈哈
                                                </dd>
                                                <dd class="full_addr">
                                                    北京 西城区 啊身份卡计划是否离开
                                                </dd>
                                                <dd class="addr_phone">
                                                    1854566485
                                                </dd>
                                            </dl>
                                            <div style="display: none;" class="Modification">
                                                <a href="http://weipin.ecshop119.com/flow.php?step=consignee">
                                                    修改
                                                </a>
                                            </div>
                                        </li>
                                        <script type="text/javascript">
                                            $(".Address li").hover(function() {
                                                $(this).find(".Modification").css("display", "block");
                                            },
                                            function() {
                                                $(this).find(".Modification").css("display", "none");
                                            });
                                        </script>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blank">
                        </div>
                        <div class="blank">
                        </div>
                        <h2 class="nstep1_tit2">
                            商品列表
                            <a href="http://weipin.ecshop119.com/flow.php" style="font-weight:normal;margin-left:15px; display:none;"
                            class="f14 pink">
                                修改
                            </a>
                        </h2>
                        <div class="OrderProInfo">
                            <div class="OrderProInfoCon">
                                <table id="shippingTable" class="shippingTable" border="0" cellpadding="10"
                                cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <th colspan="2" style="background:#fcf8e2; height:auto;">
                                                商品名称
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="100">
                                                单价
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="100">
                                                数量
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="70">
                                                小计
                                            </th>
                                        </tr>
                                        <tr class="co_show">
                                            <td style="border: 0px none;" width="25">
                                                &nbsp;
                                            </td>
                                            <td style="border: 0px none;">
                                                <span class="co_show_pic">
                                                    【图】
                                                    <span class="por_big_img">
                                                        <i class="left_arrow">
                                                        </i>
                                                        <img src="picture/199_thumb_g_1403133749580_1.jpg" alt="">
                                                    </span>
                                                </span>
                                                <a href="http://weipin.ecshop119.com/goods.php?id=199" title="卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002"
                                                target="_blank">
                                                    卡玛Kar&amp;Ma 指甲油组合(气质女王) 18ml*2--176+002
                                                </a>
                                                <span>
                                                </span>
                                            </td>
                                            <td style="border: 0px none;" align="center">
                                                ￥
                                                <span>
                                                    169.00
                                                </span>
                                            </td>
                                            <td style="border: 0px none;" align="center">
                                                1
                                            </td>
                                            <td style="border: 0px none;" align="center">
                                                ￥
                                                <span>
                                                    169.00
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <script type="text/javascript">
                                    $(".co_show").each(function() {
                                        $(".co_show_pic").hover(function() {
                                            $(this).find(".por_big_img").css("display", "block");
                                        },
                                        function() {
                                            $(this).find(".por_big_img").css("display", "none");
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="blank">
                        </div>
                        <div class="blank">
                        </div>
                        <h2 class="nstep1_tit2">
                            配送方式
                        </h2>
                        <div class="OrderProInfo">
                            <div class="OrderProInfoCon">
                                <table id="shippingTable" class="shippingTable" border="0" cellpadding="10"
                                cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <th style="background:#fcf8e2; height:auto;" width="5%">
                                                &nbsp;
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="25%">
                                                名称
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;">
                                                订购描述
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="15%">
                                                费用
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="15%">
                                                免费额度
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="15%">
                                                保价费用
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <input name="shipping" value="3" supportcod="1" insure="0" onclick="selectShipping(this)"
                                                type="radio">
                                            </td>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <strong>
                                                    城际快递
                                                </strong>
                                            </td>
                                            <td class="weiruan " style="text-align:left;" bgcolor="#ffffff">
                                                配送的运费是固定的
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    10.00
                                                </span>
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    100000.00
                                                </span>
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                不支持保价
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <input name="shipping" value="6" supportcod="0" insure="0" onclick="selectShipping(this)"
                                                type="radio">
                                            </td>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <strong>
                                                    邮局平邮
                                                </strong>
                                            </td>
                                            <td class="weiruan " style="text-align:left;" bgcolor="#ffffff">
                                                邮局平邮的描述内容。
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    3.50
                                                </span>
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    50000.00
                                                </span>
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                不支持保价
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <input name="shipping" value="8" supportcod="0" insure="1%" onclick="selectShipping(this)"
                                                type="radio">
                                            </td>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <strong>
                                                    邮政挂号印刷品
                                                </strong>
                                            </td>
                                            <td class="weiruan " style="text-align:left;" bgcolor="#ffffff">
                                                邮政挂号印刷品的描述内容。
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    3.40
                                                </span>
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    0.00
                                                </span>
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                1%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 0px none;" colspan="6" align="right" bgcolor="#ffffff">
                                                <label for="ECS_NEEDINSURE">
                                                    <input name="need_insure" id="ECS_NEEDINSURE" onclick="selectInsure(this.checked)"
                                                    value="1" disabled="true" type="checkbox">
                                                    配送是否需要保价
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="blank">
                        </div>
                        <div class="blank">
                        </div>
                        <h2 class="nstep1_tit2">
                            支付方式
                        </h2>
                        <div class="OrderProInfo">
                            <div class="OrderProInfoCon">
                                <table id="paymentTable" class="shippingTable" border="0" cellpadding="10"
                                cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <th style="background:#fcf8e2; height:auto;" width="5%">
                                                &nbsp;
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="20%">
                                                名称
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;">
                                                订购描述
                                            </th>
                                            <th style="background:#fcf8e2; height:auto;" width="15%">
                                                手续费
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <input name="payment" value="1" iscod="0" onclick="selectPayment(this)"
                                                type="radio">
                                            </td>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <strong>
                                                    余额支付
                                                </strong>
                                            </td>
                                            <td class="weiruan " style="text-align:left;" bgcolor="#ffffff">
                                                使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    0.00
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <input name="payment" value="2" iscod="0" onclick="selectPayment(this)"
                                                type="radio">
                                            </td>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <strong>
                                                    银行汇款/转帐
                                                </strong>
                                            </td>
                                            <td class="weiruan " style="text-align:left;" bgcolor="#ffffff">
                                                银行名称 收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。 注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    0.00
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <input name="payment" value="3" iscod="1" onclick="selectPayment(this)"
                                                disabled="true" type="radio">
                                            </td>
                                            <td class="weiruan " bgcolor="#ffffff">
                                                <strong>
                                                    货到付款
                                                </strong>
                                            </td>
                                            <td class="weiruan " style="text-align:left;" bgcolor="#ffffff">
                                                开通城市：××× 货到付款区域：×××
                                            </td>
                                            <td class="weiruan " align="center" bgcolor="#ffffff">
                                                <span id="ECS_CODFEE">
                                                    ￥
                                                    <span>
                                                        0.00
                                                    </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 0px none;" class="weiruan " bgcolor="#ffffff">
                                                <input name="payment" value="4" iscod="0" onclick="selectPayment(this)"
                                                type="radio">
                                            </td>
                                            <td style="border: 0px none;" class="weiruan " bgcolor="#ffffff">
                                                <strong>
                                                    支付宝
                                                </strong>
                                            </td>
                                            <td class="weiruan " style="text-align: left; border: 0px none;" bgcolor="#ffffff">
                                                支付宝网站(www.alipay.com) 是国内先进的网上支付平台。
                                                <br>
                                                支付宝收款接口：在线即可开通，
                                                <font color="red">
                                                    <b>
                                                        零预付，免年费
                                                    </b>
                                                </font>
                                                ，单笔阶梯费率，无流量限制。
                                                <br>
                                                <a href="http://cloud.ecshop.com/payment_apply.php?mod=alipay" target="_blank">
                                                    <font color="red">
                                                        立即在线申请
                                                    </font>
                                                </a>
                                            </td>
                                            <td style="border: 0px none;" class="weiruan " align="center" bgcolor="#ffffff">
                                                ￥
                                                <span>
                                                    0.00
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="blank">
                        </div>
                        <div class="blank">
                        </div>
                        <div class="blank">
                        </div>
                        <div class="blank">
                        </div>
                        <div class="mod_bd clearfix">
                            <div class="mod_bd_l f_l">
                                <div class="co_confirm_main">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td width="70">
                                                    送货信息：
                                                </td>
                                                <td>
                                                    <span>
                                                        哈哈
                                                    </span>
                                                    <span>
                                                        1854566485
                                                    </span>
                                                    <p>
                                                        北京 西城区 啊身份卡计划是否离开
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="mod_bd_r f_r">
                                <div class="co_pay_table">
                                    <div id="ECS_ORDERTOTAL" style="color:#000">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        商品总价:
                                                    </td>
                                                    <td align="right">
                                                        ￥
                                                        <span>
                                                            169.00
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="f14 bold">
                                                        应付款金额:
                                                    </td>
                                                    <td class="bold hlight_main" align="right">
                                                        ￥
                                                        <span>
                                                            169.00
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div style="height:auto; overflow:hidden; padding-left:60px;">
                                    <input class="orderconfirmBtn" value=" " type="submit" vspace="">
                                    <input name="step" value="done" type="hidden">
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(".shippingTable").each(function() {
                                $(this).find("tr:last td").css("border", 0);
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
@endsection