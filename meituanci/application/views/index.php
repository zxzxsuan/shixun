<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>我的美团</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="shortcut icon" href="../../img/favicon.ico" />
    <link rel="stylesheet" href="../../css/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="../../css/common.css">
    <link rel="stylesheet" href="../../css/index.css">
    <script src="javascript/rem.js"></script>
    <script src="javascript/jquery-1.12.4.js"></script>
    <script src="javascript/index.js"></script>
    <script src="javascript/jquery.mobile-1.4.5.js"></script>

</head>
<body>
    <div data-role="page">
        <div data-role="header" id="header">
            <div id="city">
                哈尔滨
            </div>
            <div id="search">
                <input type="text" placeholder="请输入商家/品类/商圈">
            </div>
            <div data-role="popup" id="popupMenu" data-theme="a">
                        <ul data-role="listview" data-inset="true" style="min-width:2rem;">
                                <li><a id="user-detail" href="javascript:;">个人信息</a></li>
                                <li><a id="logout" href="javascript:;">退出登录</a></li>
                            </ul>
            </div>
            <div id="mine">
                <?php
                $userinfo = $this->session->userinfo;
                if($userinfo){
                    echo "<a href='#popupMenu' data-rel='popup' data-transition='slideup'>". $userinfo -> username ."</a>";
                }else{
                    echo "<span id='login'>登录</span>";
                }
                ?>
            </div>
        </div>
        <div role="main" class="ui-content">
            <div id="banner"></div>
            <div id="guide">
                <ul>
                    <li>
                        <img src="../../img/meishi.png" alt="">
                        <p>美食</p>
                    </li>
                    <li>
                        <img src="../../img/dianying.png" alt="">
                        <p>电影</p>
                    </li>
                    <li>
                        <img src="../../img/jiudian.png" alt="">
                        <p>酒店</p>
                    </li>
                    <li>
                        <img src="../../img/yule.png" alt="">
                        <p>娱乐</p>
                    </li>
                    <li>
                        <img src="../../img/waimai.png" alt="">
                        <p>外卖</p>
                    </li>

                    <li>
                        <img src="../../img/meishi.png" alt="">
                        <p>美食</p>
                    </li>
                    <li>
                        <img src="../../img/dianying.png" alt="">
                        <p>电影</p>
                    </li>
                    <li>
                        <img src="../../img/jiudian.png" alt="">
                        <p>酒店</p>
                    </li>
                    <li>
                        <img src="../../img/yule.png" alt="">
                        <p>娱乐</p>
                    </li>
                    <li>
                        <img src="../../img/waimai.png" alt="">
                        <p>外卖</p>
                    </li>
                    <li>
                        <img src="../../img/ktv.png" alt="">
                        <p>KTV</p>
                    </li>
                    <li>
                        <img src="../../img/zhoubianyou.png" alt="">
                        <p>周边游</p>
                    </li>
                    <li>
                        <img src="../../img/liren.png" alt="">
                        <p>丽人</p>
                    </li>
                    <li>
                        <img src="../../img/xiaochi.png" alt="">
                        <p>小吃</p>
                    </li>
                    <li>
                        <img src="../../img/jipiao.png" alt="">
                        <p>机票</p>
                    </li>
                    <li>
                        <img src="../../img/ktv.png" alt="">
                        <p>KTV</p>
                    </li>
                    <li>
                        <img src="../../img/zhoubianyou.png" alt="">
                        <p>周边游</p>
                    </li>
                    <li>
                        <img src="../../img/liren.png" alt="">
                        <p>丽人</p>
                    </li>
                    <li>
                        <img src="../../img/xiaochi.png" alt="">
                        <p>小吃</p>
                    </li>
                    <li>
                        <img src="../../img/jipiao.png" alt="">
                        <p>机票</p>
                    </li>
                </ul>
                <div id="nav">
                    <span id="left" class="active"></span>
                    <span id="right"></span>
                </div>
            </div>
            <div id="activity">
                <div>
                    <h3 class="friend">我们约吧</h3>
                    <p>恋人家人好朋友</p>
                    <img src="../../img/activity1.png" alt="">
                </div>
                <div>
                    <h3 class="low-price">低价超值</h3>
                    <p>十元惠生活</p>
                    <img src="../../img/activity2.jpg" alt="">
                </div>
                <div>
                    <h3 class="quick-meal">工作简餐</h3>
                    <p>实惠方便选择多</p>
                    <img src="../../img/activity3.png" alt="">
                </div>
            </div>
            <div id="guess">
                <h3>猜你喜欢</h3>
                <ul id="menu">
                    <?php foreach ($result as $product) {?>
                    <li>
                        <img src="<?php echo $product->img?>" alt="" class="brand">

                        <div class="detail">
                            <p class="detail-name"><?php echo $product->product_name?></p>
                            <p class="detail-desc"><?php echo $product->description?></p>
                            <div>
                                <span class="price"><?php echo $product->discount_price?>元</span>
                                <span>门市价：<?php echo $product->price?>元</span>
                                <span class="sold">已售<?php echo $product->num== null?0:$product->num;?></span>
                            </div>
                        </div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div id="go-top"></div>
        </div>
        <div data-role="footer" id="footer">
            <img src="../../img/meituan.jpg" alt="" class="logo">
            <div>
                <p>9.9元看电影</p>
                <p>快来美团手机客户端</p>
            </div>
            <button class="download">点击下载</button>
        </div>
    </div>


</body>
</html>