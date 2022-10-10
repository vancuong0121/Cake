// Search
// click vào icon sẽ ẩn input và giảm kích thước search

const search = document.querySelector('.search');
const iconSearch = document.querySelector('.nav-icon');
const inputSearch = document.querySelector('.search-input');

changeWidth = () => {
    inputSearch.classList.toggle('show')
    search.classList.toggle('active-search')
}

// Simple Slide
// 2. slide đi vòng tròn
// 3. setInterval để chuyển slide tự dộng
window.addEventListener('load', function() {
    const slider = document.querySelector('#slider')
    const sliderItems = document.querySelectorAll('.slider-item')
    const sliderMain = document.querySelector('.slider-main')
    const nextBtn = document.querySelector('.slider-next')
    const prevBtn = document.querySelector('.slider-prev')
    const dotItems = document.querySelectorAll('.slider-dot-item')

    const sliderItemWidth = sliderItems[0].offsetWidth;
    const slidersLength = sliderItems.length;
    let positionX = 0;
    let index = 0;

    nextBtn.addEventListener('click', function() {
        handleChangeSlide(1)
    });

    prevBtn.addEventListener('click', function() {
        handleChangeSlide(-1)
    });

    [...dotItems].forEach(item => item.addEventListener('click', function(e) {
        // xóa hết các nút đang active
        [...dotItems].forEach(el => el.classList.remove('active'));
        // sau đó thêm active cho nút đc click
        e.target.classList.add('active');
        const slideIndex = parseInt(e.target.dataset.index);
        index = slideIndex;
        positionX = -1 * index * sliderItemWidth;
        sliderMain.style = `transform: translateX(${positionX}px)`
    }));

    function handleChangeSlide(direction) {
        if (direction === 1) {
            if (index >= slidersLength - 1) {
                index = slidersLength - 1;
                return;
            }
            positionX = positionX - sliderItemWidth;
            sliderMain.style = `transform: translateX(${positionX}px)`
            index++;
        } else if (direction === -1) {
            if (index <= 0) {
                index = 0;
                return;
            }
            positionX = positionX + sliderItemWidth;
            sliderMain.style = `transform: translateX(${positionX}px)`
            index--;
        }

        [...dotItems].forEach(el => el.classList.remove('active'));
        dotItems[index].classList.add('active')
    }

})

// Slick Slide
$(document).ready(function() {
    $('.product-wrap').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa-solid fa-chevron-left'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa-solid fa-chevron-right'</button>"
    });
    // $('.product-wrap').slick({
    //     prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa-solid fa-chevron-left'></i></button>",
    //     nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa-solid fa-chevron-right'</button>"
    // });
});


// Button Show More - Less

const listProduct = document.querySelector('.our-products-list');
const btnMore = document.querySelector('.btn.more');
const btnLess = document.querySelector('.btn.less');

btnMore.addEventListener('click', event => {
    listProduct.classList.remove('collapsed');
    btnMore.classList.add('hidden');
    btnLess.classList.remove('hidden');
});

btnLess.addEventListener('click', event => {
    listProduct.classList.add('collapsed');
    btnMore.classList.remove('hidden');
    btnLess.classList.add('hidden');
});

// Scroll Top
window.addEventListener('scroll', function() {
    var scroll = document.querySelector('.scroll-top')
    scroll.classList.toggle('active', window.scrollY > 800)
})

backToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    })
}

// Light box

const images = document.querySelectorAll('.our-product-item img')
console.log(images);
images.forEach(item => item.addEventListener('click', handelZoomImage));

function handelZoomImage(e) {
    console.log(e.target);
    // const image = e.target.getAttribute('src')
    // console.log(image);
}











































