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
//header
if (window.innerWidth >= 768) {
  gsap.fromTo(
    ".header",
    { x: "-100%" },
    {
      x: "0%",
      duration: 1,
      ease: "power2.out",
      scrollTrigger: {
        trigger: ".header",
        start: "top top+=100%",
        end: "+=100",
        toggleActions: "play none none reverse",
      },
    }
  );
}
