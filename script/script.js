/* =====================================
   GLOBAL SCROLL REVEAL
===================================== */
const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      }
    });
  },
  { threshold: 0.15 }
);

document.querySelectorAll(".reveal").forEach(el => {
  revealObserver.observe(el);
});


/* =====================================
   STAGGER ANIMATION – WORK CARDS
===================================== */
const workObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const cards = entry.target.querySelectorAll(".work-card");

        cards.forEach((card, index) => {
          setTimeout(() => {
            card.classList.add("show");
          }, index * 150);
        });

        workObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.25 }
);

document.querySelectorAll(".work-category").forEach(section => {
  workObserver.observe(section);
});


/* =====================================
   MICRO INTERACTION (MOBILE TOUCH)
===================================== */
document.querySelectorAll(".work-card").forEach(card => {
  card.addEventListener("touchstart", () => {
    card.classList.add("touch");
  });

  card.addEventListener("touchend", () => {
    setTimeout(() => card.classList.remove("touch"), 300);
  });
});
