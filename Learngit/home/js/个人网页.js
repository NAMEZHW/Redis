//定义全局变量
var index=0,   //索引值，判断图片
    timer=null,
    pics=document.getElementById("banner").getElementsByTagName("div"),
    len=pics.length,
    dots=document.getElementById("dots").getElementsByTagName("span"),
    prev=document.getElementById("prev"),
    next=document.getElementById("next");
//将所有的操作定义在函数slideImg中    
function slideImg(){
	var banner=document.getElementById("banner");
	//滑过清除定时器，离开继续
	banner.onmouseover=function(){
		//滑过清除定时器
		if(timer) clearInterval(timer);
	}
	banner.onmouseout=function(){      //调用onmouseout事件
		//离开继续
		timer=setInterval(function(){      
			index++;
			//console.log(index); 可以通过控制台查看index的值变化
			if(index>=len){
				index=0;
			}
			//console.log(index);
			//每隔3秒切换图片
			changeImg();
		},3000);
	}
	//------自动在banner上触发鼠标离开的事件
	banner.onmouseout();   //调用onmouseout方法
	//------点击圆点切换图片
	//遍历所有圆点，且绑定点击事件，点击圆点切换图片
	for(var d=0;d<len;d++){
		//给所有span添加一个id属性,值为d,作为当前span的索引
		dots[d].id = d;
		dots[d].onclick=function(){
			//改变index为当前span的索引
			//alert(this.id);
			index=this.id;
			//调用changeImg,实现切换图片
			changeImg();
		}
	}
	//下一张
	next.onclick=function(){
		index++;
	    //console.log(index); //可以通过控制台查看index的值变化
		if(index>=len){
			index=0;
		}
		//alert(index);
		changeImg();
	}
	//上一张
	prev.onclick=function(){
		index--;
		if(index<0) index=len-1;
		changeImg();
	}
}
//切换图片
function changeImg(){
	//遍历banner下所有div及dots下所有的span，将div隐藏,将span消除类
	for(var i=0;i<len;i++){
		pics[i].style.display="none";
		dots[i].className="";
	}
	//根据index索引找到当前div和当前span,将其显示出来和设为当前
	pics[index].style.display="block";
	dots[index].className="active";
}
//调用函数
slideImg();

function change(myid,mode){
	document.getElementById(myid).style.display=mode;
	if(mode=="block"){
		//设置下拉菜单所在div的边框
		document.getElementById(myid).style.border="1px solid white";
		document.getElementById(myid).style.borderTop="none";
		//设置鼠标滑过li的边框及背景色
		//设置父节点的样式
		document.getElementById(myid).parentNode.style.background="#77c59ef"; 
		document.getElementById(myid).parentNode.style.border="1px solid #eee";
		document.getElementById(myid).parentNode.style.borderBottom="none";
	}
	else{
		//当不显示下拉列表时，鼠标滑过的li边框及背景颜色
		document.getElementById(myid).parentNode.style.background="";
		document.getElementById(myid).parentNode.style.border="";
	}
}

