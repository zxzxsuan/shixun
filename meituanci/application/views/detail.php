<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>团购详情</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/detail.css">
    <script src="javascript/rem.js"></script>
    <script src="javascript/jquery-1.12.4.js"></script>
    <script src="javascript/index.js"></script>
    <script src="javascript/detail.js"></script>
    <script src="javascript/jquery.mobile-1.4.5.js"></script>
</head>
<body>
<div data-role="page">
    <div data-role="header" id="header">
        <div id="left">
            <img src="img/left-arrow.png" alt="">
        </div>
        <div id="group">
            团购详情
        </div>
        <div id="collect">
            <span>收藏</span>
            <span>导航</span>
        </div>
    </div>
    <div role="main" class="ui-content">
        <div id="banner">
            <div class="product-name">
                <p>鲜芋仙</p>
                <p>10元代金券一份</p>
            </div>
        </div>
        <div id="price">
            <span class="preferential-price"><span>7.5</span>元</span>
            <span>门市价:10元</span>
            <button data-role="none" class="buy">立即购买</button>
        </div>
        <div id="explain">
            <span class="refund">不支持随时退款</span>
            <span class="refund">支持过期自动退</span><br>
            <span class="refund">已售148027</span>
        </div>
        <div id="evaluate-type">
            <div id="star">
                <img src="img/star-yellow.png" alt="">
                <img src="img/star-yellow.png" alt="">
                <img src="img/star-yellow.png" alt="">
                <img src="img/star-yellow.png" alt="">
                <img src="img/star-gray.png" alt="">
                <span class="score">4.4分</span>
                <span class="evaluate-num">13962人评价&gt;</span>
            </div>
            <div id="type" class="clearfix">
                <span class="hot">回头客797</span>
                <span class="hot">干净卫生387</span>
                <span class="hot">上菜快160</span>
                <span class="hot">冬天吃过瘾3</span>
                <span>朋友聚餐41</span>
                <span>不推荐37</span>
                <span>下午茶17</span>
                <span>家庭聚餐4</span>
                <span>现做现卖4</span>
                <span>深夜食堂3</span>
            </div>
            <div id="inform">
                <h3>最新通知</h3>
                <p>【7月5日更新】【分店暂停接待】鲜芋仙（万达茂店）店有效期内无法接待团购用户，您可前往其他分店消费。给您带来不便，深表歉意。</p>
            </div>
        </div>
        <div id="merchant">
            <h3 class="info">商家信息</h3>
            <div class="contact">
                <div class="address">
                    <p class="name">鲜芋仙（道外百盛店）</p>
                    <p class="position">道外区东直路118号百盛购物中心太平桥店1层</p>
                    <p class="nearest">离我最近</p>
                </div>
                <div class="phone"></div>
            </div>
            <p class="check">查看全部11家适用分店</p>
        </div>
        <div id="combo">
            <h3>套餐</h3>
            <ul class="discount-coupon">
                <li>代金券</li>
                <li>1份</li>
                <li>10元</li>
            </ul>
            <ul class="price">
                <li>店内人均消费参考价：20元</li>
                <li>适用范围：除10元以下产品及招牌点心类外全场通用</li>
                <li>店内部分菜品价格参考：鲜芋仙招牌（25.00元/份）仙草1号（25.00元/份）芋圆布丁（16.00元/份）芒果布丁（16.00元/份）珍珠紫米粥（18.00元/份）招牌奶茶（12.00元/杯）红豆豆花（20.00元/份</li>
            </ul>
            <p class="check">查看图文详情</p>
        </div>
        <div id="notice">
            <h3>购买须知</h3>
            <dl>
                <dt>适用范围</dt>
                <dd>除10元以下产品及招牌点心类外全场通用</dd>
                <dt>有效期</dt>
                <dd>2016.3.14 至 2017.7.25</dd>
                <dt>不可用日期</dt>
                <dd>周五至周日</dd>
                <dt>使用时间</dt>
                <dd>9:30-20:00</dd>
                <dt>使用规则</dt>
                <dd>
                    <ul>
                        <li>无需预约，消费高峰时可能需要等位</li>
                        <li>不可叠加使用 不兑现、不找零</li>
                        <li>店内无包间</li>
                        <li>堂食外带均可，可免费打包</li>
                        <li>团购用户不可同时享受商家其他优惠 酒水饮料等问题，请致电商家咨询，以商家反馈为准</li>
                        <li>提供免费WiFi 停车位收费标准：咨询商家</li>
                    </ul>
                </dd>
            </dl>
        </div>
        <div id="evaluate">
            <div class="evaluate-title">
                <h3>评价</h3>
                <div class="star">
                    <img src="img/star-yellow.png" alt="">
                    <img src="img/star-yellow.png" alt="">
                    <img src="img/star-yellow.png" alt="">
                    <img src="img/star-yellow.png" alt="">
                    <img src="img/star-gray.png" alt="">
                    <span class="score">4.4分</span>
                </div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <div class="item">
                <div class="item-title">
                    <div class="header">
                        <img src="img/header.jpg" alt="">
                    </div>
                    <div class="desc">
                        <p class="name">晴小乐乐乐</p>
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-yellow.png" alt="">
                        <img src="img/star-gray.png" alt="">
                        <span class="date">2017-07-02</span>
                    </div>
                    <img src="img/earnest.png" alt="" class="earnest">
                </div>
                <div class="item-content">
                    好吃好吃 夏天吃太美好了 啊啊啊啊啊 上瘾上瘾 甜甜甜 甜品真是太好吃 冬天吃热的 夏天吃凉的 怎么还不够80个字 好多店 这个店还不错 坐的位置很多 环境也好
                </div>
                <div class="item-img clearfix">
                    <img src="img/item1.jpg" alt="">
                    <img src="img/item2.jpg" alt="">
                    <img src="img/item3.jpg" alt="">
                </div>
                <div class="item-firm"></div>
            </div>
            <p class="check">查看全部评价</p>
        </div>
        <div id="go-top"></div>
    </div>
    <div data-role="footer" id="footer">
        <img src="img/meituan.jpg" alt="" class="logo">
        <div>
            <p>9.9元看电影</p>
            <p>快来美团手机客户端</p>
        </div>
        <button class="download">点击下载</button>
    </div>
</div>
</body>
</html>
























