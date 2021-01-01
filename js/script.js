$(function () {
  //ハンバーガーメニュー
  $(".menu-btn").click(function () {
    $(this).toggleClass("active");

    if ($(this).hasClass("active")) {
      $(".menu").addClass("active");
    } else {
      $(".menu").removeClass("active");
    }
  });
  $(".menu__list").click(function () {
    $(".menu,.menu-btn").removeClass("active");
  });

  //ヘッダー固定(SP)
  //fvを超えたらスクロールでheaderに色を付ける
  var mainPos = $(".fv").height();

  $(window).scroll(function () {
    if ($(window).scrollTop() > mainPos) {
      $(".header__inner").addClass("addColor");
    } else {
      $(".header__inner").removeClass("addColor");
    }
  });
});
