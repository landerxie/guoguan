<?php
header('Content-type:text/html;charset=utf-8');
define('IN_NKS', true);
require_once("../../../includes/config.php");
require_once("../../../includes/mysql.cls.php");
$dbname = "gg_admin";
$nks_db = new cls_mysql($_config['db']['params']['dbhost'], $_config['db']['params']['username'], $_config['db']['params']['password'], $dbname);
if (empty($_GET["id"])) {
    echo "心理测试不存在";
    exit();
}
$id = $_GET["id"];
$sql = "SELECT * FROM `gg_mentaltest` WHERE mentaltest_status=1 and mentaltest_id='" . $id . "'";
$result = $nks_db->getRow($sql);
if (!$result) {
    echo "心理测试不存在";
    exit();
}
$sql = "SELECT * FROM `gg_mentaltestitem` WHERE test_id='" . $id . "'";
$itemlist = $nks_db->getAll($sql);
if (!$itemlist || count($itemlist) < 1) {
    echo "心理测试不存在";
    exit();
}
$peoplenum = time() - $result["mentaltest_adddate"];
$sql = "SELECT * FROM `gg_resx_assort` WHERE assort_table='mentaltest' and assort_table_id='" . $id . "'";
$assortlist = $nks_db->getAll($sql);
if ($assortlist) {
    $sql = "SELECT * FROM `gg_resx` WHERE resx_id in (" . trim($assortlist[0]["resx_id"], ',') . ") order by resx_order desc";
    $tlist = $nks_db->getAll($sql);
}
$sql = "SELECT * FROM `gg_ad` as a left join `gg_resx` as r on a.ad_resx_id=r.resx_id WHERE ad_status=1 and (ad_tag='testhomebanner' or ad_tag='testhomead' or ad_tag='testresultbanner') and ad_startdate>=".time()." and ad_enddate<".time()." order by ad_order desc";
$adlist = $nks_db->getAll($sql);
?>
<!DOCTYPE html>
<html ng-app="phonecatApp">
    <head>
        <title><?php echo $result["mentaltest_title"] ?></title>
        <meta name="viewport" charset="utf-8" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="global/styles/font-awesome.min.css">
        <link rel="stylesheet" href="global/styles/font-awesome-ie7.min.css">
    </head>
    <body ng-controller="PhoneListCtrl">
        <!--微信遮罩层-->
        <div class="share-cover">
            <div class="share-guide" id="weixin-guide" ng-click="closeCover()"></div>
            <div class="share-guide" id="mobile-guide"></div>
        </div>

        <!--content-->
        <div class="content">
            <!--头部导航-->
            <div class="head-nav">
                <div class="content-next">
                    <h3>国馆潜意识测试</h3>
                    <!--        <a href="#">所有测试</a>-->
                    <a href="#" class="head-nav-a-last">国馆商城</a>
                </div>
            </div>
            <div class="test-title"><?php echo $result["mentaltest_title"] ?></div>

            <!--首页-->
            <div class="home pd1-5" id="home" ng-style="{display: action == 'index' ? 'block' : 'none'}">
                <div class="home-banner">
                    <img src="<?php echo $result["mentaltest_titlephoto"] ?>" alt="中国道" title="中国道"/>
                </div>
                <div class="description">
                    <div class="content-next">
                        <div class="home-detail">
                            <p>
                                <?php echo $result["mentaltest_content"] ?>
                            </p>
                        </div>
                        <div class="m-button start-button" ng-click="goto('item-<?php echo $itemlist[0]["item_id"] ?>')">
                            <div class="m-button-content">
                                开始测试
                            </div>
                        </div>
                        <div class="home-footer-detail">
                            <p>已有<?php echo $peoplenum ?>位企业人事通过测试</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            for ($i = 0; $i < count($itemlist); $i++) {
                if ($itemlist[$i]["item_isresult"] == "1") {
                    continue;
                }
                ?>
                <div class="item-<?php echo $itemlist[$i]["item_id"] ?>" style="display: none;" ng-style="{display: action == 'item-<?php echo $itemlist[$i]["item_id"] ?>' ? 'block' : 'none'}">
                    <div class="home-content">
                        <div class="content-next">
                            <!--进度条-->
                            <div class="process">
                                <div class="number">
                                    <?php echo $i + 1 ?>/<?php echo count($itemlist) - 1 ?>
                                </div>
                                <div class="cent">
                                    <p>
                                    </p>
                                    <div class="Bars">
                                        <div style="width: <?php echo 100 * ($i + 1) / (count($itemlist) - 1) ?>%;">
                                        </div>
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                            <div class="item-title">
                                <?php echo ($i + 1) . "." . $itemlist[$i]["item_title"] ?>
                            </div>
                            <?php
                            if ($itemlist[$i]["item_titlephoto"] != "") {
                                echo '<div class="item-img"><img src="' . $itemlist[$i]["item_titlephoto"] . '" alt="中国道" title="中国道"/></div>';
                            }
                            $content = json_decode($itemlist[$i]["item_itemcontent"]);
                            if ($content && count($content) > 0 && $content[0]->photo == "") {
                                echo '<ul class="ul-type-one">';
                            } else {
                                echo '<ul class="ul-type-three">';
                            }
                            for ($j = 0; $j < count($content); $j++) {
                                if ($j == count($content) - 1) {
                                    if ($content[$j]->photo !== "") {
                                        ?>
                                        <li  ng-click="goto('item-<?php echo $itemlist[$i + 1]["item_id"] ?>')"><div class="img-item"><div class="little-img"><img src="<?php echo $content[$j]->photo ?>" alt=""/></div>
                                                <div class="img-choose"><span><?php echo $content[$j]->title ?></span> </div></div></li>
                                        <?php
                                    } else {
                                        ?><li ng-click="goto('item-<?php echo $itemlist[$i + 1]["item_id"] ?>')"><span> <?php echo $content[$j]->title ?> </span></li>
                                                        <?php
                                                    }
                                                } else {

                                                    if ($content[$j]->photo !== "") {
                                                        ?>
                                        <li  ng-click="goto('item-<?php echo $itemlist[$i + 1]["item_id"] ?>')"><div class="img-item"><div class="little-img"><img src="<?php echo $content[$j]->photo ?>" alt=""/></div>
                                                <div class="img-choose"><span><?php echo $content[$j]->title ?></span> </div></div></li>
                                        <?php
                                    } else {
                                        ?><li ng-click="goto('item-<?php echo $itemlist[$i + 1]["item_id"] ?>')"><span> <?php echo $content[$j]->title ?> </span></li>
                                                        <?php
                                                    }
                                                }
                                            }
                                            echo '</ul>';
                                            if ($i != 0) {
                                                ?> <div class="bottom-button"><div class="m-button pre-item-button" style=" " ng-click="goto('item-<?php echo $itemlist[$i - 1]["item_id"] ?>')"><div class="m-button-content" style="line-height: 3rem">上一题</div> </div>
                                    <?php if ($i == count($itemlist) - 2) { ?>
                                        <div class="m-button btnresult" style="height: 3rem; margin-left: 1rem;"><div class="m-button-content" style="line-height: 3rem" ng-click="goto('result')">查看结果 </div></div>
                                        <?php
                                    }
                                    echo '</div>';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>


                <!--结果页-->
                <div class="result" style="display: none;"  ng-style="{display: action == 'result' ? 'block' : 'none'}">
                    <div class="home-content">
                        <div class="content-next">
                            <div class="item-title">
                                你的测试结果是D
                                <span>注：点击字母查看其他答案</span>
                            </div>

                            <div class="chart-bar">
                                <div class="bar-left">
                                    <!--重复-->
                                    <div class="bar-part" style="width: 30%; color: #6d459e;">
                                        <div class="num">
                                            120
                                        </div>
                                        <div class="bar-body" style="background-color: #6d459e;"></div>
                                        <div class="bar-tag">A</div>
                                    </div>
                                    <div class="bar-part" style="width: 30%; color: #499a33;">
                                        <div class="num">
                                            20
                                        </div>
                                        <div class="bar-body" style="background-color: #499a33;"></div>
                                        <div class="bar-tag">B</div>
                                    </div>
                                    <div class="bar-part" style="width: 10%; color: #9fe220;">
                                        <div class="num">
                                            10
                                        </div>
                                        <div class="bar-body" style="background-color: #9fe220;"></div>
                                        <div class="bar-tag">D</div>
                                    </div>
                                    <div class="bar-part" style="width: 10%; color: #6d459e;">
                                        <div class="num">
                                            120
                                        </div>
                                        <div class="bar-body" style="background-color: #6d459e;"></div>
                                        <div class="bar-tag">A</div>
                                    </div>
                                    <div class="bar-part" style="width: 10%; color: #01acf4;">
                                        <div class="num">
                                            20
                                        </div>
                                        <div class="bar-body" style="background-color: #01acf4;"></div>
                                        <div class="bar-tag selected">C</div>
                                    </div>
                                    <div class="bar-part" style="width: 10%; color: #9fe220;">
                                        <div class="num">
                                            10
                                        </div>
                                        <div class="bar-body" style="background-color: #9fe220;"></div>
                                        <div class="bar-tag">D</div>
                                    </div>
                                </div>
                                <div class="bar-right">%</div>
                                <div style="clear: both"></div>
                            </div>

                            <div class="item-title mb0-6">
                                答案D
                            </div>
                            <div class="answer-title">
                                西楚霸王项羽
                            </div>
                            <div class="result-title">
                                结果分析：
                            </div>
                            <div class="result-content">
                                <p>
                                    是不兴人但他但因东阿加西东东东功功膦肋戈它地是不兴人但他但因东阿加西东东东功功膦肋戈它地是不兴人但他但因东阿加西东东东功功膦肋戈它地
                                </p>
                            </div>
                            <div class="ad-img">
                                <img src="images/zhongguodao.jpg" alt="ijefow"/>
                            </div>

                            <div class="result-button">
                                <div class="left">
                                    <div class=" pre-item-button m-button" style="height: 4rem">
                                        <div class="m-button-content" style="line-height: 1.4rem;padding-top: 0.6rem">
                                            <i class="icon-thumbs-up"></i>
                                            准<br>
                                            <span style="font-size: 1.2rem">
                                                (298)
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-button pre-item-button" style="height: 4rem">
                                        <div class="m-button-content" style="line-height: 1.4rem;padding-top: 0.6rem;">
                                            <i class="icon-thumbs-down"></i>
                                            不准<br>
                                            <span style="font-size: 1.2rem">
                                                (298)
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="m-button  pre-item-button" ng-click="goto('index')" style="width: 100%; height: 4rem">
                                        <div class="m-button-content">
                                            重新测试
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-button share-to-sina-button" style="width: 100%;margin-top: 1.5rem">
                                <div class="m-button-content">
                                    分享到朋友圈
                                </div>
                            </div>
                        </div>
                        <!--tab切换页-->
                        <div id="tab-container" class='tab-container' style="border-top: 0.1rem solid #bbb">
                            <ul class='etabs'>
                                <li class='tab'><a href="#tabs1-one">其他测试</a></li>
                                <li class='tab'><a href="#tabs1-two">有成长</a></li>
                                <li class='tab'><a href="#tabs1-three">事业有成</a></li>
                            </ul>
                            <div class='panel-container'>
                                <div id="tabs1-one" class="tab-bottom">
                                    <div class="content-next">
                                        <ul class="tab-one">
                                            <?php
                                            for ($i = 0; $i < count($tlist); $i++) {
                                                echo '<li><a href="'.$tlist[$i]["resx_url"].'">'.$tlist[$i]["resx_title"].'</a><span>'.$peoplenum.'人</span></li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                                <div id="tabs1-two" class="tab-bottom">
                                    <div class="content-next">
                                        <ul class="tab-two">
                                             <?php
                                            for ($i = 0; $i < count($adlist); $i++) {
                                                echo '<li> <img src="'.$tlist[$i]["ad_url"].'" alt=""/><a href="# " target="_blank" class="">'.$adlist[$i]["ad_title"].'<br> <span >什么小米、锤子都弱爆了，这才是让民族自豪的品牌！</span></a><a href="#" target="_blank" class="look-button">去看看</a> </li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                                <div id="tabs1-three" class="tab-bottom">
                                    <div class="ad-img">
                                        <img src="images/zhongguodao.jpg" alt="ijefow"/>
                                    </div>
                                    <div class="ad-img">
                                        <img src="images/zhongguodao.jpg" alt="ijefow"/>
                                    </div>
                                    <div class="ad-img">
                                        <img src="images/zhongguodao.jpg" alt="ijefow"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab页结束-->
                    </div>
                </div>

                <!--底部广告位-->
                <div class="content-next">
                    <div id="ad">
                        <a href="http://www.guoguan.com">
                            <img src="images/banner_ad.jpg">
                            <div ng-click="hideAd();" style="font-size: 9pt; cursor: pointer; position: absolute; right: 5px; top: 50%; margin-top: -12px;">
                                <img src="img/error_five.png" style="height: 20px; width: 20px; " alt=""/>
                            </div>
                        </a>
                        <div style="clear: both;"></div>
                    </div>
                </div>

            </div>

            <!--加载图片-->
            <div class="loading-div" style="display: none;">
                <div class="spinner-text" style="text-align: center">
                    <img src="img/01-4.png" width="52" height="51">
                </div>
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
                <div class="spinner-text" style="padding-top: 0;">结果分析中</div>
            </div>


            <script src="js/jquery-1.8.0.js" type="text/javascript"></script>
            <script src="js/test.js" type="text/javascript"></script>
            <script src="js/angular.min.js" type="text/javascript"></script>
            <script src="js/controllers.js" type="text/javascript"></script>
            <script src="js/option.js" type="text/javascript"></script>
            <script src="js/jquery.easytabs.min.js" type="text/javascript"></script>
            <script src="js/jquery.hashchange.min.js" type="text/javascript"></script>
            <script>
                                    $(document).ready(function() {
                                        $('#tab-container').easytabs();
                                    });
                                    document.addEventListener("touchstart", function() {
                                    }, false);
            </script>

    </body>
</html>