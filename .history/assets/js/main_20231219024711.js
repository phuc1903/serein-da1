(function ($) {
    "use strict";

    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });

    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });




})(jQuery);
// detail_product
function detail_product_trans_img() {
    const miniImgs = document.querySelectorAll('.mini_img img');
    const detailProductImg = document.querySelector('.detail_product_img img');
    miniImgs.forEach(miniImg => {
        miniImg.addEventListener('mouseover', () => {
            detailProductImg.src = miniImg.src;
        });
    });
}
detail_product_trans_img();
//cart-button
var btn_press = 0;
function buttonClick(number) {
    if (number == 0) {
        document.getElementById('product-quantity-number').value = ++btn_press;
    } else if (number == 1) {
        document.getElementById('product-quantity-number').value = --btn_press;
        if (document.getElementById('product-quantity-number').value < 0) {
            btn_press = 0;
            document.getElementById('product-quantity-number').value = 0;
        }
    }
}
// function search_input_change(str) {
//     if (str.length > 3) {
//         $(document).on('keyup', '#search', function (e) {
//             $.ajax({
//                 type: "GET",
//                 url: "blog_controller.php",
//                 dataType: "html",
//                 success: function (data) {
//                     $("#search_results").html(data);
//                 }
//             });
//         });
//     }
// }


// cart add and delete
function addProduct(productId, quantity, price) {
    $.ajax({
        url: "../controller/cart_controller.php",
        type: "POST",
        data: {
            action: 'add',
            id: productId,
            quantity: quantity,
            price: price
        },
        success: function (data) {
            alert('Sản phẩm đã được thêm vào giỏ hàng !')
        }
    });
}
function deleteProduct(productId) {
    $.ajax({
        url: "../controller/cart_controller.php",
        type: "POST",
        data: {
            action: 'delete',
            id: productId,
        },
        success: function (data) {
            window.location.reload();
        }
    });
}
function notify() {
    alert('Giỏ hàng không có sản phẩm để đặt hàng !')
}



//change img 
function chooseImage() {
    document.getElementById('fileInput').click();
}
function previewImage(input) {
    var preview = document.getElementById('imagePreview');
    var file = input.files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    };
    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = '../assets/upload/default_avatar.jpg';
    }
}

