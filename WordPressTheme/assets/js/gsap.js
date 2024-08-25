"use strict";

gsap.to(".js-loading-left", {
  duration: 2.5,
  xPercent: -100,
  ease: "power2.inOut",
});
gsap.to(".js-loading-right", {
  duration: 2.5,
  xPercent: 100,
  ease: "power2.inOut",
  delay: 0.2,
});
