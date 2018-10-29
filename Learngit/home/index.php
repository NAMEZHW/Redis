<?php
//系统维护
    session_start();
    include('../admin/config/config.php');

    $SQL="select * from res where id=5";
    $res=mysqli_query($con,$SQL);
    $m=mysqli_fetch_assoc($res);
    $id=$m['ke'];
if($id!=1){
header('location:./zhang.html');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>轮播图</title>
		<link rel="stylesheet" type="text/css" href="css/个人网页.css"/>
		<link rel="stylesheet" type="text/css" href="css/1.css"/>
	</head>
	<body>
			<!--头部-->
		<div class="header">
			
		<div class="left">
			<img src="img/logo.png"/>
		<img src="img/github.png"/>

		 </div>
		</div>
		<!--导航-->
		<!--悬浮导航-->
<!--<div class="column_top">
        <ul class="column_ul">
            <li>关于意合<br><span>ABOUT ME</span></li>
            <li>意合动态<br><span>ICGO NEWS</span></li>
            <li>设计案例<br><span>DESIGN CASE</span></li>
            <li>商务合作<br><span>COOPERATION</span></li>
            <li>服务领域<br><span>SERVICE</span></li>
        </ul>
</div>-->
	
<nav>
        <ul>
            <li><a href="index.php">首页<br><span>HOME</span></a>
<!--                <ul>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                </ul>-->
            </li>
            <li><a href="http://theater.mtime.com/China_Beijing/">购票<br><span>TICKETS</span></a>
<!--            	  <ul>-->
<!--                    <li><a href="#">选电影</a></li>-->
<!--                    <li><a href="#">选影院</a></li>-->
<!--                    <li><a href="#">选时间</a></li>-->
<!--                </ul>-->
            </li>
            <li><a href="http://vip.mtime.com">会员<br><span>MEMBER</span></a>
<!--                <ul>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                    <li><a href="#">二级导航</a>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                </ul>-->
            </li>
            <li><a href="http://mall.mtime.com">商城<br><span>MALL</span></a>
<!--                <ul>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                    <li><a href="#">二级导航</a></li>-->
<!--                </ul>-->
            </li>
            <li><a href="#">登陆<br><span>LOGIN</span></a>
                <ul>
                    <li><a href="../admin/login.html">登陆后台</a></li>


                </ul>
            </li>
        </ul>
    </nav>   
    
	<!--	最外层大盒子-->
		<div class="main" id="main">
			<!--1.轮播图片-->
			<div class="banner" id="banner">
				<a href=""> 
					<!--可以通过设置div的背景颜色，也可以通过img插入图片-->
					<!--slide-active用来设置当前图片-->
					<div class="banner-slide slide1 slide-active"></div> 
				</a>
				<a href=""> 
					<div class="banner-slide slide2"></div>
				</a>
				<a href=""> 
					<div class="banner-slide slide3"></div>
				</a>
			</div>	
			<!--2.上一张、下一张按钮-->
			<a href="#" class="button prev" id="prev"></a>
			<a href="#"  class="button next" id="next"></a>
			<!--3.圆点导航-->
			<div class="dots" id="dots">
				<span class="active"></span>  <!--active设置当前导航-->
				<span></span>
				<span></span> 	
			</div>	
		</div>
		
		<!--英语学习简介-->
		<div id="learn">
			<h2>新片预告</h2>
			<dl>
				<dt></dt>
				<dd class="txt1">
复仇者联盟3：无限战争 (2018)
<br/><span>Avengers: Infinity War</span></dd>
				<dd class="txt2">内战只是一个开始。
<br/>
《美国队长：内战》是迄今为止漫威电影宇宙中最雄心勃勃的一部电影,考虑到在过去8年里漫威所取得的巨大成就,这绝对是大实话。<br />
而我们都知道,《内战》只是一个跳板,真正的大事件是先后将在2018年5月4日和2019年5月3日上映的《无限战争》两部曲。
<br />
尽管以典型的漫威风格,《内战》没有明显关联《无限战争》,但它确实提供了一些线索,暗示可能出现的情节,而且这种超级英雄敌对混战的情形已经揭开了无限战争的帷幕。
</dd>
			</dl>
			<!--<div class="imgbox" id="imgbox">
				<span>
					<a href="#"><img src="img/1.jpg"/></a>
					<a href="#"><img src="img/2.jpg"/></a>
					<a href="#"><img src="img/3.jpg"/></a>
					<a href="#"><img src="img/4.jpg"/></a>
				</span>
			</div>		-->
			<marquee  onmouseover=stop()  onmouseout=start()  scrollAmount=5  loop=infinite  deplay="0">
<!--1) scrollAmount。它表示速度，值越大速度越快。
       2) 加入onmouseover=stop()  onmouseout=start()代码，
       鼠标指向循环文字图片时他们会停止滚动，鼠标离开时继续滚动。-->
				    <a href="#"><img src="img/g11.jpg"/></a>
					<a href="#"><img src="img/g22.jpg"/></a>
					<a href="#"><img src="img/g33.jpg"/></a>
					<a href="#"><img src="img/g44.jpg"/></a>
					<a href="#"><img src="img/g55.jpg"/></a>
					<a href="#"><img src="img/g66.jpg"/></a>
			</marquee>
		</div>

		<!--课程特色-->
		<div class="b2">
			<h1>今日热点</h1>
			<img src="img/横.png" class="b2-img" />
			<ul style=" float:left;
 position:relative;
 left:20%;">
			
			<li style="float: left; margin-left: 8px; ;list-style-type:none; position:relative;
 right:47%;"><a href="#">时光对话</a></li>		
			<li style="float: left; margin-left: 15px; ;list-style-type:none; position:relative;
 right:47%;"><a href="#">产业聚焦</a> </li>
			<li style="float: left; margin-left: 15px; ;list-style-type:none; position:relative;
 right:47%;"> <a href="#">电视情报</a></li>
			<li style="float: left; margin-left: 15px; ;list-style-type:none; position:relative;
 right:47%;"><a href="#">全球拾趣</a></li>
			
			</ul>
			<img src="img/横.png" class="b3-img" />
		</div>
		
		
<div class="hot">
	<div class="left3">
		<div class="box">
			<a href="#"><img src="img/1.png" class="box-img"/></a>
			<a href="#"><h5>邓超《心理罪之城市之光》进军贺岁档!</h5></a>
			<a href="#"><p style="color:grey;font-size:14px">成该档期唯一犯罪题材类大片 阮经天文淇联合出演</p></a>
		</div>
	    <div class="box">
			<a href="#"><img src="img/2.png" class="box-img"/></a>
			<a href="#"><h5>动画《玛丽与魔女之花》有望引进</h5></a>
			<a href="#"><p style="color:grey;font-size:14px">类似“魔女宅急使”“借东西小人”导演</p></a>
		</div>
		<div class="box">
			
			<a href="#"><img src="img/3.png" class="box-img"/></a>
			<a href="#"><h5>亲密与梦想的桃花园</h5>
			<p style="color:grey;font-size:14px">米格的音乐，让米格认识到梦想是能与家庭统一的</p></a>
		</div>
		<div class="box">
			<a href="#"><img src="img/4.png" class="box-img"/></a>
			<a href="#"><h5>经典镜头</h5>
			<p style="color:grey;font-size:14px">成该档期唯一犯罪题材类大片 阮经天文淇联合出演</p></a>
		</div>
		<div class="box">
			<a href="#"><img src="img/5.png" class="box-img"/></a>
			<a href="#"><h5>《正义者联盟》艺术概念图比正片更燃</h5>
			<p style="color:grey;font-size:14px">蝙蝠侠被虐队友解围 老爷开飞机副驾驶是谁？</p></a>
		</div>
		<div class="box">
			<a href="#"><img src="img/6.png" class="box-img"/></a>
			<a href="#"><h5>“暴（寂）力（静）之声”致敬历任蝙蝠侠</h5>
			<p style="color:grey;font-size:14px">老爷实乃真 打脸狂魔</p></a>
		</div>
	</div>
	<div class="right">
		<div class="box2">
		<a href="#"><img src="img/8.png" class="right-img"/></a>
		<a href="#"><h4>《巨额来电》全球首映礼</h4></a>
		</div>
        <h3 style="font-size:22px;font-family: '微软雅黑';">更多直播</h3>
        <a href="#"><h5 style="line-height:30px;">《假如王子睡着了》中国首映礼直播</h5></a>
       <a href="#"><h5  style="line-height:30px;">《追捕》首映礼发布会</h5></a> 

       <a href="#"><h5  style="line-height:30px;">《不成问题的问题》首映礼发布会</h5></a>
      
	</div>
</div>

<div class="more">
	<a href="#"><img src="img/查看更多.png" class="more-img" /></a>
</div>
	

	<div class="b2" style="margin-top: 50px;">
			<h1>正版商城</h1>
			<img src="img/横.png" class="b2-img" />
			<ul style=" float:left;
 position:relative;
 left:20%;">
			
			<li style="float: left; margin-left: 8px; ;list-style-type:none; position:relative;
 right:47%;"><a href="#">新品登陆</a></li>		
			<li style="float: left; margin-left: 15px; ;list-style-type:none; position:relative;
 right:47%;"><a href="#">热销爆款</a> </li>
			<li style="float: left; margin-left: 15px; ;list-style-type:none; position:relative;
 right:47%;"> <a href="#">折扣促销</a></li>
			<li style="float: left; margin-left: 15px; ;list-style-type:none; position:relative;
 right:47%;"><a href="#">超前预售</a></li>
			
			</ul>
			<img src="img/横.png" class="b3-img" />
		</div>
		
		<div class="hot3">
			<div class="boxhot3">
			<div class="boxx"><a href="#"><img src="img/shop1.jpg"/></a></div>
			<div class="boxx"><a href="#"><img src="img/shop3.jpg" class="long"/></a></div>
				<div class="boxx"><a href="#"><img src="img/shop5.jpg"/></a></div>
			<div class="boxx">	<a href="#"><img src="img/shop2.jpg"/></a></div>
			<div class="boxx"><a href="#"><img src="img/shop4.jpg"/></a></div>
			<div class="boxx"><a href="#"><img src="img/shop6.jpg"/></a></div>	
</div>
		</div>
		
		<div class="more">
	<a href="#"><img src="img/查看更多.png" class="more-img" /></a>
</div>
		
		<!--脚页-->

			<div class="footer">
	<br/><p>Copying&copy;2017-2018 fhp,All rights reserved.<br/>
		                  版权所有
	</p>
</div>	


		<script type="text/javascript" src="js/个人网页.js">
			
		</script>
	</body>
</html>
