"use strict";
gsap.registerPlugin(ScrollTrigger);
gsap.to(".js-loading-left", {
  duration: 2.5,
  // アニメーションの持続時間
  xPercent: -100,
  // 左カーテンを左に移動
  ease: "power2.inOut", // イージング効果
});

gsap.to(".js-loading-right", {
  duration: 2.5,
  // アニメーションの持続時間
  xPercent: 100,
  // 右カーテンを右に移動
  ease: "power2.inOut",
  // イージング効果
  delay: 0.2, // 左カーテンより少し遅らせて開く
});

gsap.fromTo(
  "top-performance-title span",
  {
    opacity: 0,
  },
  {
    opacity: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: "top-biography__btn-wrapper",
      start: "top 20%",
      markers: true,
      scrub: true,
    },
  }
);
