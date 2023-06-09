import "./bootstrap";
import jQuery, { event } from "jquery";
window.$ = jQuery;

$(function () {
    $("#callback-button").click(function () {
        $(".modal").addClass("modal_active");
        $("body").addClass("hidden");
    });

    $(".modal__close-button").click(function () {
        $(".modal").removeClass("modal_active");
        $("body").removeClass("hidden");
    });

    $(".modal").mouseup(function (e) {
        let modalContent = $(".modal__content");
        if (
            !modalContent.is(e.target) &&
            modalContent.has(e.target).length === 0
        ) {
            $(this).removeClass("modal_active");
            $("body").removeClass("hidden");
        }
    });
});

let slideIndex = 1;
showSlides(slideIndex);

document.getElementById("next").onclick = function () {
    plusSlides(+1);
};
document.getElementById("prew").onclick = function () {
    plusSlides(-1);
};

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

const filterProducts = document.querySelector("#myBtnContainer");

const filterBtn = document.querySelectorAll(".btn_filter");

const products = document.querySelectorAll("._product");

filterProducts.addEventListener("click", (event) => {
    const target = event.target;
    if (target.classList.contains("filterBtn")) {
    }
    let dataf = target.dataset["f"];

    products.forEach((elem) => {
        elem.classList.remove("hide");
        if (!elem.classList.contains(dataf) && dataf !== "All") {
            elem.classList.add("hide");
        }
    });
});
