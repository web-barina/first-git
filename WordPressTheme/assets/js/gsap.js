"use strict";

// title の一文字ずつに span を囲む
var textWrap = document.querySelectorAll(".top-performance__title");
textWrap.forEach(function (t) {
  t.innerHTML = t.textContent.replace(/\S/g, "<span class='top-performance-span'>$&</span>");
});
var textWrap = document.querySelectorAll(".top-blog__title");
textWrap.forEach(function (t) {
  t.innerHTML = t.textContent.replace(/\S/g, "<span class='top-blog-span'>$&</span>");
});

// TOP アニメーション
gsap.fromTo(".topFVswiper__texts", {
  x: "20%",
  opacity: 0
}, {
  x: 0,
  duration: 1.5,
  opacity: 1
});
gsap.fromTo(".top-biography__content", {
  x: "20%",
  opacity: 0
}, {
  x: 0,
  duration: 1.5,
  opacity: 1
});

// title の文字をフェードインさせるアニメーション
gsap.fromTo(".top-performance-span", {
  opacity: 0,
  y: 20
}, {
  opacity: 1,
  y: 0,
  duration: 0.5,
  stagger: 0.1,
  scrollTrigger: {
    trigger: ".top-performance__title",
    start: "top center",
    // トリガー要素のどこからアニメーションを開始するか
    markers: true // デバッグ用のマーカーを表示（納品時には削除）
  }
});

gsap.fromTo(".top-blog-span", {
  opacity: 0,
  y: 20
}, {
  opacity: 1,
  y: 0,
  duration: 0.5,
  stagger: 0.1,
  scrollTrigger: {
    trigger: ".top-blog__title",
    start: "top center",
    // トリガー要素のどこからアニメーションを開始するか
    markers: true // デバッグ用のマーカーを表示（納品時には削除）
  }
});