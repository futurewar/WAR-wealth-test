/**
 * @author: feaad
 * @date: Wednesday, 9th January 2018.
 * @time: 10:02 AM
 * @project: Wealth
 * @version: 1.0
 * @update: Wednesday, 9th January 2018.
 * @brief:
 */

// This initializing the carousel for the homw page.
$(document).ready(function () {
    $('.sidenav').sidenav();
});

$('.dropdown-trigger').dropdown();

$(document).ready(function () {
    $('.slider').slider();
});



$(document).ready(function () {
    let sliderInfo = document.querySelectorAll('.slider-info'),
        arrowRight = document.querySelector('#right'),
        arrowLeft = document.querySelector('#left'),
        current = 0;

    function reset() {
        for (let i = 0; i < sliderInfo.length; i++) {
            sliderInfo[i].style.display = 'none';
        }
    }

    function startSlider() {
        reset();
        sliderInfo[0].style.display = 'block';
    }

    function prev() {
        reset();
        current--;
        sliderInfo[current].style.display = 'block';
    }

    function next() {
        reset();
        current++;
        sliderInfo[current].style.display = 'block';
    }

    arrowLeft.addEventListener('click', function () {
        if (current === 0) {
            current = sliderInfo.length;
        }
        prev();
    })

    arrowRight.addEventListener('click', function () {
        if (current === sliderInfo.length - 1) {
            current = -1;
        }
        next();
    })
    startSlider();

});