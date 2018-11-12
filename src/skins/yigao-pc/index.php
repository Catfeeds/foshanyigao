<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>佛山市艺高语言艺术培训中心</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />

    <!--JQ基础文件-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <!--IE6 PNG透明-->
    <!--[if lte IE 6]>
    <script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
    </script>
    <![endif]-->

    <!--wow.js-->
    <script type="text/javascript" src="js/wow.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true
        });
        wow.init();
    </script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="dist/css/swiper.min.css">

    <!--TAB JS-->
    <script type="text/javascript">
        function setTab(m,n){
            var menu=document.getElementById("tab"+m).getElementsByTagName("li");
            var div=document.getElementById("tablist"+m).getElementsByTagName("div");
            var showdiv=[];
            for (i=0; j=div[i]; i++)
            {
                if((" "+div[i].className+" ").indexOf(" tablist ")!=-1)
                {
                    showdiv.push(div[i]);
                }
            }
            for(i=0;i<menu.length;i++)
            {
                menu[i].className=i==n?"now":"";
                showdiv[i].style.display=i==n?"block":"none";
            }
        }
    </script>

</head>

<body>

<!--头部-->
<div class="top clear">
    <div class="top_in">
        <div class="top_l">欢迎来到佛山市艺高语言艺术培训中心</div>
        <div class="top_r">
            <ul>
                <li>
                    <a href="tencent://message/?uin=63912980&&Menu=yes">
                        <dt><img src="images/top_qq.png" width="30" height="30" /></dt>
                        <dd>办公QQ</dd>
                    </a>
                </li>
                <li class="wx1">
                    <a href="###">
                        <dt><img src="images/top_wx.png" width="30" height="30" /></dt>
                        <dd>微信公众号</dd>
                        <div class="wx_qr1"><img src="images/wx_qr.jpg" /></div>
                    </a>
                </li>
                <script>
                    $(function(){
                        $('.wx1').mouseover(function(){
                            $('.wx_qr1').show();
                        });
                        $('.wx1').mouseleave(function(){
                            $('.wx_qr1').hide()
                        });
                    });
                </script>
            </ul>
        </div>
    </div>
</div>

<!--导航-->
<div class="nav_all">
    <div class="nav_in clear">
        <div class="logo"><a href="#"><img src="images/logo.jpg"  /></a></div>
        <div class="nav_list">
            <ul>
                <li class="now"><a href="###">首页</a></li>
                <li><a href="###">中心介绍</a></li>
                <li><a href="###">雄厚师资</a></li>
                <li><a href="###">传媒艺考</a></li>
                <li><a href="###">教育产品</a></li>
                <li><a href="###">新闻动态</a></li>
                <li><a href="#contact">联系我们</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:url(images/banner.jpg) top center no-repeat;"></div>
        <div class="swiper-slide" style="background:url(images/banner.jpg) top center no-repeat;"></div>
        <div class="swiper-slide" style="background:url(images/banner.jpg) top center no-repeat;"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Arrows
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    -->
</div>

<!-- Swiper JS -->
<script src="dist/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
</script>

<!--创办宗旨-->
<div class="idx_title"><img src="images/idx_title1.jpg" /></div>
<div class="idx_title_b">宗旨宗旨宗宗旨宗旨宗宗旨宗旨宗宗旨宗旨宗宗旨宗旨宗宗宗旨宗旨宗旨宗旨宗旨宗旨宗旨宗旨宗旨宗旨宗旨宗旨宗旨</div>

<div class="purpose wow fadeInUp">
    <ul class="clear">
        <li>
            <dt><img src="images/purpose_dot1.jpg" /></dt>
            <dd>官方承认</dd>
            <div class="purpose_show">
                <span>官方承认</span>
                <label>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</label>
            </div>
        </li>
        <li>
            <dt><img src="images/purpose_dot2.jpg" /></dt>
            <dd>全面服务</dd>
            <div class="purpose_show">
                <span>全面服务</span>
                <label>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</label>
            </div>
        </li>
        <li>
            <dt><img src="images/purpose_dot3.jpg" /></dt>
            <dd>顶级师资</dd>
            <div class="purpose_show">
                <span>顶级师资</span>
                <label>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</label>
            </div>
        </li>
        <li>
            <dt><img src="images/purpose_dot4.jpg" /></dt>
            <dd>一流环境</dd>
            <div class="purpose_show">
                <span>一流环境</span>
                <label>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</label>
            </div>
        </li>
    </ul>
    <script>
        $(function(){
            $('.purpose ul li').mouseover(function(){
                $(this).children('.purpose_show').stop().fadeIn();
            });
            $('.purpose ul li').mouseleave(function(){
                $(this).children('.purpose_show').stop().fadeOut();
            });
        });
    </script>
</div>

<a href="###" class="idx_btn wow flipInX">了解更多</a>


<!--顶级师资-->
<div class="idx_title wow fadeInUp"><img src="images/idx_title2.jpg" /></div>

<div class="idx_teacher wow fadeInUp">
    <ul class="clear">
        <li>
            <span><img src="images/teacher_pic.jpg" width="223" height="241" /></span>
            <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍</label>
            <a class="idx_teacher" href="###">顾 月 GUYUE</a>
        </li>
        <li>
            <span><img src="images/teacher_pic.jpg" width="223" height="241" /></span>
            <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍</label>
            <a class="idx_teacher" href="###">顾 月 GUYUE</a>
        </li>
        <li>
            <span><img src="images/teacher_pic.jpg" width="223" height="241" /></span>
            <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍</label>
            <a class="idx_teacher" href="###">顾 月 GUYUE</a>
        </li>
        <li>
            <span><img src="images/teacher_pic.jpg" width="223" height="241" /></span>
            <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍</label>
            <a class="idx_teacher" href="###">顾 月 GUYUE</a>
        </li>
    </ul>
</div>

<a href="###" class="idx_btn wow flipInX">了解更多</a>


<!--首页广告-->
<div class="idx_av wow fadeInUp"><img src="images/idx_av.jpg" /></div>


<!--教育产品-->
<div class="idx_title wow fadeInLeft"><img src="images/idx_title3.jpg" /></div>
<div class="idx_title_b wow fadeInLeft">产品简介产品简介产品简介产品简介产品简介产品简介产品简介产品简介产品简介产品简介产品简介产品简介产品简介产品简介</div>

<div class="idx_education wow fadeInLeft">
    <ul class="clear">
        <li>
            <a href="###">
                <img src="images/education_pic1.jpg" />
                <span>19年编导专业</span>
                <dd href="#">KNOW MORE</dd>
                <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍</label>
            </a>
        </li>
        <li>
            <a href="###">
                <img src="images/education_pic2.jpg" />
                <span>19年播音专业</span>
                <dd href="#">KNOW MORE</dd>
                <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍</label>
            </a>
        </li>
        <li>
            <a href="###">
                <img src="images/education_pic3.jpg" />
                <span>茁壮成长</span>
                <dd href="#">KNOW MORE</dd>
                <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍</label>
            </a>
        </li>
        <li>
            <a href="###">
                <img src="images/education_pic4.jpg" />
                <span>冬/夏令营</span>
                <dd href="#">KNOW MORE</dd>
                <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍</label>
            </a>
        </li>
    </ul>
</div>

<a href="###" class="idx_btn wow flipInX">了解更多</a>


<!--关于我们-->
<div class="idx_about clear wow  fadeInRight">
    <div class="idx_about_l"></div>
    <div class="idx_about_m">
        <span>佛山市语言艺术培训中心艺考中心</span>
        <label>简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介</label>
    </div>
    <a class="idx_about_r" href="###">关于我们</a>
</div>

<!--首页留言-->
<div class="idx_msg wow flipInY">

    <div class="idx_msg_l"><img src="images/msg_l.jpg" /></div>
    <div class="idx_msg_r"><img src="images/msg_r.jpg" /></div>

    <div id="tablist1">
        <div class="idx_msg_m tablist block">
            <div class="idx_msg_m_t">他们为什么为选择我们?</div>
            <div class="idx_msg_m_m">111111111111111111111111111简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介</div>
            <div class="idx_msg_m_b">
                <span>李荣耀先生</span>
                <label>中国财经副主席</label>
            </div>
        </div>
        <div class="idx_msg_m tablist ">
            <div class="idx_msg_m_t">他们为什么为选择我们?</div>
            <div class="idx_msg_m_m">222222222222222222222222简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介</div>
            <div class="idx_msg_m_b">
                <span>李荣耀先生</span>
                <label>中国财经副主席</label>
            </div>
        </div>
        <div class="idx_msg_m tablist ">
            <div class="idx_msg_m_t">他们为什么为选择我们?</div>
            <div class="idx_msg_m_m">33333333333333333333333333简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介</div>
            <div class="idx_msg_m_b">
                <span>李荣耀先生</span>
                <label>中国财经副主席</label>
            </div>
        </div>
        <div class="idx_msg_m tablist ">
            <div class="idx_msg_m_t">他们为什么为选择我们?</div>
            <div class="idx_msg_m_m">44444444444444444444444简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介绍简单介</div>
            <div class="idx_msg_m_b">
                <span>李荣耀先生</span>
                <label>中国财经副主席</label>
            </div>
        </div>
    </div>

    <div class="idx_msg_b" id="tab1">
        <ul>
            <li onmouseover="setTab(1,0)" class="circle now"><img class="circle" src="images/msg_pic.jpg" /></li>
            <li onmouseover="setTab(1,1)" class="circle"><img class="circle" src="images/msg_pic.jpg" /></li>
            <li onmouseover="setTab(1,2)" class="circle"><img class="circle" src="images/msg_pic.jpg" /></li>
            <li onmouseover="setTab(1,3)" class="circle"><img class="circle" src="images/msg_pic.jpg" /></li>
        </ul>
    </div>

</div>


<!--首页联系我们-->
<div class="idx_contact" name="contact" id="contact">
    <div class="idx_contact_in clear">
        <div class="idx_title" style="margin-top:0;"><img src="images/idx_title4.jpg" /></div>
        <div class="idx_contact_l">
            <div class="idx_contact_l_t">通过这些方式联系我们</div>
            <div class="idx_contact_l_list clear">
                <span><img src="images/idx_ct_dot1.jpg" width="24" height="24" /></span>
                <label>广东省佛山市禅城区轻工二路3号佛山市工会职业技术学校</label>
            </div><div class="idx_contact_l_list clear">
                <span><img src="images/idx_ct_dot2.jpg" width="24" height="24" /></span>
                <label>0757-82360855</label>
            </div><div class="idx_contact_l_list clear">
                <span><img src="images/idx_ct_dot3.jpg" width="24" height="24" /></span>
                <label>fsyikao@163.com</label>
            </div>
            <dt>更多联系方式</dt>
            <dd class="iconfont wx2">
                <a href="#">&#xe63b;</a>
                <div class="wx_qr2"><img src="images/wx_qr.jpg" /></div>
                <script>
                    $(function(){
                        $('.wx2').mouseover(function(){
                            $('.wx_qr2').show();
                        });
                        $('.wx2').mouseleave(function(){
                            $('.wx_qr2').hide()
                        });
                    });
                </script>
            </dd>
            <dd class="iconfont">
                <a href="tencent://message/?uin=63912980&&Menu=yes">&#xe63a;</a>
            </dd>
        </div>
        <div class="idx_contact_r">
            <div class="idx_contact_r_t">
                <div class="idx_contact_r_t_l">广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语广告语</div>
                <a class="idx_contact_r_t_l" href="###">艺考报名</a>
            </div>
            <div class="idx_contact_r_b"></div>
        </div>
    </div>
</div>

<div class="copyright">©COPYRIGHT FOSHANYIKAO 版权所有 佛山艺高语言培训中心</div>


</body>
</html>
