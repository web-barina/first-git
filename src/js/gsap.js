"use strict";

// title の一文字ずつに span を囲む
var textWrapPerformance = document.querySelectorAll(".top-performance__title");
textWrapPerformance.forEach((t) => {
  t.innerHTML = t.textContent.replace(/\S/g, "<span class='top-performance-span'>$&</span>");
});

var textWrapBlog = document.querySelectorAll(".top-blog__title");
textWrapBlog.forEach((t) => {
  t.innerHTML = t.textContent.replace(/\S/g, "<span class='top-blog-span'>$&</span>");
});

//ローディング画面
// カーテンを左右に開くアニメーション
gsap
  .timeline()
  .to(".js-loading-left", {
    x: "-100%",
    duration: 3,
    ease: "power2.out",
  })
  .to(
    ".js-loading-right",
    {
      x: "100%",
      duration: 3,
      ease: "power2.out",
      onComplete: function () {
        gsap.set(".js-loading", { display: "none" });
      },
    },
    "-=3.0"
  );

// TOP アニメーション
gsap.fromTo(
  ".topFVswiper__texts",
  {
    y: "20%",
    opacity: 0,
  },
  {
    y: 0,
    duration: 2,
    delay: 1.6,
    opacity: 1,
  }
);

// タイムラインに scrollTrigger を設定
var tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".top-biography__img",
    start: "top 80%",
  },
});

tl.fromTo(
  ".top-biography__img",
  {
    x: "-20%",
    opacity: 0,
  },
  {
    x: 0,
    duration: 1.5,
    opacity: 1,
  }
).fromTo(
  ".top-biography__content",
  {
    y: "20%",
    opacity: 0,
  },
  {
    y: 0,
    duration: 1.5,
    opacity: 1,
  }
);

// .top-performance__title の文字をフェードインさせるアニメーション
gsap.fromTo(
  ".top-performance-span",
  {
    opacity: 0,
    y: 20,
  },
  {
    opacity: 1,
    y: 0,
    duration: 0.5,
    stagger: 0.1,
    scrollTrigger: {
      trigger: ".top-performance__title",
      start: "top 80%",
    },
  }
);

gsap.fromTo(
  ".top-performance__content",
  {
    opacity: 0,
    y: "20%",
  },
  {
    opacity: 1,
    y: 0,
    duration: 1,
    scrollTrigger: {
      trigger: ".top-performance__content",
      start: "top 80%",
    },
  }
);

gsap.from(".blog-cards__item", {
  scrollTrigger: {
    trigger: ".blog__cards",
    start: "top 80%",
  },
  y: 50,
  opacity: 0,
  duration: 1,
  ease: "power2.out",
  stagger: 0.5,
});

// .top-blog__title の文字をフェードインさせるアニメーション
gsap.fromTo(
  ".top-blog-span",
  {
    opacity: 0,
    y: 20,
  },
  {
    opacity: 1,
    y: 0,
    duration: 0.5,
    stagger: 0.1,
    scrollTrigger: {
      trigger: ".top-blog__title",
      start: "top 80%",
    },
  }
);

gsap.fromTo(
  ".contact__inner",
  {
    opacity: 0,
    y: "20%",
  },
  {
    opacity: 1,
    y: 0,
    duration: 1,
    scrollTrigger: {
      trigger: ".contact__inner",
      start: "top 80%",
    },
  }
);

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  /*********************
   *ハンバーガーメニュー*
   *********************/

  $(document).ready(function () {
    // ハンバーガーメニューのクリックイベント
    $("#js-hamburger").on("click", function () {
      if ($(this).hasClass("js-active")) {
        $(".header__sp-nav").fadeOut();
        $(this).removeClass("js-active");
      } else {
        $(".header__sp-nav").fadeIn();
        $(this).addClass("js-active");
      }
    });

    // ウィンドウリサイズ時のイベント
    $(window).on("resize", function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        $("#js-hamburger").removeClass("js-active");
        $(".header__sp-nav").fadeOut();
      }
    });

    // ハンバーガーメニュー内のリンククリック時のイベント
    $(".header__sp-nav a").on("click", function () {
      $(".header__sp-nav").fadeOut();
      $("#js-hamburger").removeClass("js-active");
    });
  });

  /***********
   *FV-swiper*
   ***********/
  var topFVswiper = new Swiper("#js-topFVswiper", {
    effect: "fade",
    speed: 1500,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });

  /**************
   *カラーボックス*
   **************/
  var box = $(".js-color-box"),
    speed = 700;
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    color.on("inview", function () {
      if (counter == 0) {
        $(this)
          .delay(200)
          .animate(
            {
              width: "100%",
            },
            speed,
            function () {
              image.css("opacity", "1");
              $(this).css({
                left: "0",
                right: "auto",
              });
              $(this).animate(
                {
                  width: "0%",
                },
                speed
              );
            }
          );
        counter = 1;
      }
    });
  });

  /*****************
   *スクロールトップ*
   *****************/
  function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 300) {
      $("#js-scroll-top").removeClass("DownMove");
      $("#js-scroll-top").addClass("UpMove");
    } else {
      if ($("#js-scroll-top").hasClass("UpMove")) {
        $("#js-scroll-top").removeClass("UpMove");
        $("#js-scroll-top").addClass("DownMove");
      }
    }
    var wH = window.innerHeight;
    var footerPos = $("#footer").offset().top;
    if (scroll + wH >= footerPos + 10) {
      var pos = scroll + wH - footerPos + 15; //スクロールの値＋画面の高さからfooterの位置＋15pxを引いた場所を取得し
      $("#js-scroll-top").css("bottom", pos);
    } else {
      //それ以外は
      if ($("#js-scroll-top").hasClass("UpMove")) {
        $("#js-scroll-top").css("bottom", "10px");
      }
    }
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime();
  });
  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    PageTopAnime();
  });
  // #scroll-topをクリックした際の設定
  $("#js-scroll-top").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0, //ページトップまでスクロール
      },
      500
    ); //ページトップスクロールの速さ。
    return false; //リンク自体の無効化
  });

  /******************
   *AboutUs モーダル*
   *****************/
  $(document).ready(
    $(function () {
      $(".photo").on("click", function () {
        var modal_id = $(this).attr("id");
        $(".modal#cont-" + modal_id).fadeIn(200);
        $(".modal#cont-" + modal_id).addClass("active");
        $("html, body").css("overflow-y", "hidden");
      });
      $(".modal").on("click", function () {
        if ($(this).hasClass("active")) {
          $(this).fadeOut();
          $("html, body").css("overflow-y", "auto");
        }
      });
    })
  );

  /********************
   *サイドバーアーカイブ*
   ********************/
  $(function () {
    $(".sidebar__archive-year").on("click", function () {
      $(this).next().slideToggle(300);
      $(this).toggleClass("open", 300);
    });
  });
});
