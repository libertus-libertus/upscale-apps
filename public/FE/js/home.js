document.addEventListener("DOMContentLoaded", function () {
  // =======================
  // 🔹 Menu Toggle Script
  // =======================
  const navbar = document.getElementById("main-navbar");
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");

  mobileMenuButton.addEventListener("click", (e) => {
    e.stopPropagation();
    const isVisible = mobileMenu.classList.contains("translate-y-0");

    if (isVisible) {
      mobileMenu.classList.remove(
        "translate-y-0",
        "opacity-100",
        "pointer-events-auto"
      );
      mobileMenu.classList.add(
        "translate-y-[-100%]",
        "opacity-0",
        "pointer-events-none"
      );
      document.body.style.overflow = "auto";
    } else {
      mobileMenu.classList.remove(
        "translate-y-[-100%]",
        "opacity-0",
        "pointer-events-none"
      );
      mobileMenu.classList.add(
        "translate-y-0",
        "opacity-100",
        "pointer-events-auto"
      );
      document.body.style.overflow = "hidden";
    }
  });

  mobileMenu.addEventListener("click", (e) => e.stopPropagation());
  document.addEventListener("click", () => {
    if (mobileMenu.classList.contains("translate-y-0")) {
      mobileMenu.classList.remove(
        "translate-y-0",
        "opacity-100",
        "pointer-events-auto"
      );
      mobileMenu.classList.add(
        "translate-y-[-100%]",
        "opacity-0",
        "pointer-events-none"
      );
      document.body.style.overflow = "auto";
    }
  });

  // ==========================
  // 🔹 Atur padding atas hero agar tidak tertutup navbar
  // ==========================
  function adjustHeroPadding() {
    const navbar = document.querySelector("nav");
    const hero = document.querySelector(".content-overlay");
    if (navbar && hero) {
      const navbarHeight = navbar.offsetHeight;
      hero.style.paddingTop = `${navbarHeight}px`;
    }
  }

  window.addEventListener("load", adjustHeroPadding);
  window.addEventListener("resize", adjustHeroPadding);

  // ==========================
  // 🔹 Ubah background navbar saat di-scroll
  // ==========================
  window.addEventListener("scroll", () => {
    if (window.scrollY > 10) {
      navbar?.classList.remove("bg-transparent");
      navbar?.classList.add("bg-[#37517E]");
    } else {
      navbar?.classList.add("bg-transparent");
      navbar?.classList.remove("bg-[#37517E]");
    }
  });

  // ==========================
  // 🔹 Fungsi untuk menganimasikan angka
  // ==========================
  const animateCount = (el, target, suffix = "") => {
    let start = 0;
    const duration = 2000;
    const stepTime = Math.max(Math.floor(duration / target), 20);
    const increment = Math.ceil(target / (duration / stepTime));

    const counterInterval = setInterval(() => {
      start += increment;
      if (start >= target) {
        el.textContent = `${target.toLocaleString()}${suffix}`;
        clearInterval(counterInterval);
      } else {
        el.textContent = `${start.toLocaleString()}${suffix}`;
      }
    }, stepTime);
  };

  const counters = document.querySelectorAll(".count-up");
  let hasAnimated = false;

  const countUpObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && !hasAnimated) {
          counters.forEach((counter) => {
            const target = parseInt(counter.dataset.target);
            const suffix = counter.dataset.suffix || "";
            animateCount(counter, target, suffix);
          });
          hasAnimated = true;
          observer.disconnect();
        }
      });
    },
    { threshold: 0.6 }
  );

  counters.forEach((counter) => countUpObserver.observe(counter));

  // ==========================
  // 🔹 Toggle Login Modal
  // ==========================
  function toggleLoginModal() {
    const modal = document.getElementById("loginModal");
    modal.classList.toggle("hidden");
    document.body.classList.toggle("overflow-hidden");
  }

  const loginBtn = document.getElementById("login-btn");
  const mobileLoginBtn = document.getElementById("mobile-login-btn");
  const closeModalBtn = document.getElementById("login-modal-close"); // 👈 Tambahan baru

  loginBtn?.addEventListener("click", (e) => {
    e.stopPropagation();
    toggleLoginModal();
  });

  mobileLoginBtn?.addEventListener("click", (e) => {
    e.stopPropagation();
    toggleLoginModal();
  });

  closeModalBtn?.addEventListener("click", (e) => {
    e.stopPropagation();
    toggleLoginModal();
  });

  // ==========================
  // 🔹 AOS Init
  // ==========================
  AOS.init();

  // ==========================
  // 🔹 Swiper Init
  // ==========================
  new Swiper(".partner-swiper", {
    slidesPerView: 2,
    spaceBetween: 20,
    loop: true,
    loopedSlides: 6,
    watchOverflow: false,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    speed: 800,
    breakpoints: {
      640: { slidesPerView: 3 },
      768: { slidesPerView: 4 },
      1024: { slidesPerView: 4 },
      1280: { slidesPerView: 5 },
    },
  });

  const links = document.querySelectorAll('[data-link]');
    const currentPath = window.location.pathname.split("/").pop(); // Get current file name (e.g., "faq.html")

    links.forEach(link => {
      const linkPath = link.getAttribute("href");

      if (linkPath === currentPath || (linkPath === "index.html" && currentPath === "")) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
});
