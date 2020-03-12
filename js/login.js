$(document).ready(function () {
// SIGNUP
    $("#signup").click(function () {
        $("#signup-form").fadeToggle();
    });

    // var Registerbtn = $('#Register-btn');
    // Registerbtn.click(function () {
    $('#Register-btn').click(function () {

    var name = $("#name").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    var re_pass = $("#re_pass").val();
    // var agree_term = $('#agree_term').checked();
    console.log(agree_term);
        //http://localhost/shop-master/shop-master/php/login.php?name=hamidreza&email=hr.ahmadi689%40yahoo.com&pass=132&re_pass=1321&agree-term=on&signup=Submit
    var signup_dataString = '&name=' + name + '&email=' + email + '&pass=' + pass + '&re_pass=' + re_pass + '&agree_term=' + agree_term + "&signup=";

    if (name == '' || email == '' || pass == '') {
        alert("پر کردن فیلد نام طرح و توضیحات آن اجباری است");
    } else {
        $.ajax({
            type: "GET",
            url: '../php/login.php',
            data: signup_dataString,
            cache: false,
            success: function (respon) {
                console.log("Daryaft shod , javab");
                console.log(respon);
                // $('#fancy_back').addClass(' fancy');
                // $('#fancybox').addClass(' myjavacss');
                // if (respon == 1001) {
                //     $fancy_result.html("<h4>اطلاعات با موفقیت ذخیره گردید</h4>");
                //     $fancy_btn.html("<button type='button' class='border-color:red btn btn-primary'>بازگشت</button>");
                //     $fancy_btn.click(function () {
                //         window.location.reload();
                //     });
                // }else {
                //     $fancy_result.html("<h4>اطلاعات به درستی ذخیره نشد! لطفا دوباره تلاش کنید!</h4>");
                //     $fancy_btn.html("<button type='button' class='border-color:red btn btn-danger'>بازگشت</button>");
                //     $fancy_btn.click(function () {
                //         window.location.reload();
                //     });
                // }
            }
        });
    }



// SIGNUP
//
//     $("#signin").click(function () {
//         $("#signin-form").fadeToggle();
//     });

});

});