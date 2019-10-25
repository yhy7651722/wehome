window.onload = function() {

    //四个方框的动画效果
    //先获取要改变的元素
    var imglist = document.querySelectorAll(".frame");
    console.log(imglist)

    //添加一个事件
    window.addEventListener("scroll",   (e)  =>  {    
        res  =  document.documentElement.scrollTop;    
        if  (res  >=  300)  {         imgList.forEach((v)  =>  {             v.classList.add("fadeInUp")         })     }
    },  false)


}