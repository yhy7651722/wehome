window.onload = function() {
    var image = document.querySelectorAll(".img")
    var dot = document.querySelectorAll(".dot")
    var bt = document.querySelectorAll(".btn")
    var banner = document.querySelector(".banner")
    console.log(image)
    dot[0].style.backgroundColor = "rgba(0, 0, 0, 0.9)"
    image[0].style.opacity = 1
    var index = 0
    var sk = setInterval(function() {
        for (var i = 0; i < 3; i++) {
            image[i].style.opacity = 0
            image[i].style.zIndex = 0
            dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.5)"
        }
        index++
        if (index > 2) {
            index = 0
        }
        image[index].style.opacity = 1
        image[index].style.zIndex = 10
        dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.9)"
    }, 3000)

    banner.onmouseover = function() {
        clearInterval(sk)
    }
    banner.onmouseout = function() {
        sk = setInterval(function() {
            for (var i = 0; i < 3; i++) {
                image[i].style.opacity = 0
                image[i].style.zIndex = 0
                dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.5)"
            }
            index++
            if (index > 2) {
                index = 0
            }
            image[index].style.opacity = 1
            image[index].style.zIndex = 10
            dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.9)"
        }, 3000)
    }

    bt[1].onclick = function() {
        for (var i = 0; i < 3; i++) {
            image[i].style.opacity = 0
            image[i].style.zIndex = 0
            dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.5)"
        }
        index++
        if (index > 2) {
            index = 0
        }
        image[index].style.opacity = 1
        image[index].style.zIndex = 10
        dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.9)"
    }
    bt[0].onclick = function() {
        for (var i = 2; i > 0; i--) {
            image[i].style.opacity = 0
            image[i].style.zIndex = 0
            dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.5)"
        }
        index--
        if (index < 0) {
            index = 2
        }
        image[index].style.opacity = 1
        image[index].style.zIndex = 10
        dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.9)"
    }

    for (let i = 0; i < 3; i++) {
        dot[i].onclick = function() {
            index = i
            for (j = 0; j < 3; j++) {
                image[j].style.opacity = 0
                image[j].style.zIndex = 0
                dot[j].style.backgroundColor = "rgba(0, 0, 0, 0.5)"
            }
            image[index].style.opacity = 1
            image[index].style.zIndex = 10
            dot[index].style.backgroundColor = "rgba(0, 0, 0, 0.9)"
        }
    }




    var barBox1 = document.querySelectorAll(".bar-up");
    var barBox2 = document.querySelector(".bar-down");
    var hdUp = document.querySelector(".hd-up")
    barBox1[0].addEventListener("click", () => {
        barBox1[0].style.display = "none"
        barBox1[1].style.display = "block"
        barBox2.style.display = "block"
    }, false)
    barBox1[1].addEventListener("click", () => {
        barBox1[0].style.display = "block"
        barBox1[1].style.display = "none"
        barBox2.style.display = "none"
    }, false)



    window.addEventListener("scroll", (e) => {
        let currentTop = document.documentElement.scrollTop;
        if (currentTop >= 89.6) {
            hdUp.style.display = "block"
            hdUp.classList.add("fadeInDown");
        } else {
            hdUp.style.display = "none"
            hdUp.classList.remove("fadeInDown");

        }
    }, false);
}