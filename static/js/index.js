var imgList = document.querySelectorAll(".tj-itme");
var gsjjImg = document.querySelector(".gsjj-img");
var mrzsImg = document.querySelector(".mrzs-img")
window.addEventListener("scroll", (e) => {
    res = document.documentElement.scrollTop;
    if (res >= 300) {
        imgList.forEach((v) => {
            v.classList.add("fadeInUp")
        })
    }

    if (res >= 910) {
        gsjjImg.classList.add("zoomIn")
    }
    if (res >= 1100) {
        mrzsImg.classList.add("zoomIn")
    }


}, false)