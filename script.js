const html = document.querySelector("html");
const mobileMenu = html.querySelector(".mobile__menu");
const btnOpenMenu = html.querySelector(".mobile__menu-btn");
const btnCloseMenu = html.querySelector(".mobile__menu-cross");

btnOpenMenu.addEventListener("click", () => {
  mobileMenu.style.transform = "translateX(0%)";
  html.style.overflow = "hidden";
});

btnCloseMenu.addEventListener("click", () => {
  mobileMenu.style.transform = "translateX(100%)";
  html.style.overflow = "";
});

const headerContainer = document.querySelector(".header__container");
const nav = document.querySelector(".header__nav");


function updateHeaderStickyState() {
  const isSticky = window.scrollY > 140;
  headerContainer.classList.toggle("header__container_sticky", isSticky);
  nav.classList.toggle("header__nav_sticky", isSticky);
}

window.addEventListener("scroll", updateHeaderStickyState);
window.addEventListener("load", updateHeaderStickyState);


const faq = document.querySelector(".faq__content");

if (faq) {
  const cards = faq.querySelectorAll(".faq__card");

  const closeCard = (card) => {
    const question = card.querySelector(".faq__question");
    const answer = card.querySelector(".faq__answer");

    if (!question || !answer) {
      return;
    }

    answer.style.maxHeight = `${answer.scrollHeight}px`;

    requestAnimationFrame(() => {
      question.classList.remove("faq__question_active");
      answer.style.maxHeight = "0";
    });
  };

  const openCard = (card) => {
    const question = card.querySelector(".faq__question");
    const answer = card.querySelector(".faq__answer");

    if (!question || !answer) {
      return;
    }

    question.classList.add("faq__question_active");
    answer.style.maxHeight = `${answer.scrollHeight}px`;
  };

  cards.forEach((card) => {
    const question = card.querySelector(".faq__question");
    const answer = card.querySelector(".faq__answer");

    if (!question || !answer) {
      return;
    }

    if (question.classList.contains("faq__question_active")) {
      answer.style.maxHeight = `${answer.scrollHeight}px`;
    }
  });

  faq.addEventListener("click", (e) => {
    const arrow = e.target.closest(".faq__arrow");

    if (!arrow) {
      return;
    }

    const card = arrow.closest(".faq__card");
    const question = card?.querySelector(".faq__question");
    const answer = card?.querySelector(".faq__answer");

    if (!question || !answer) {
      return;
    }

    const isOpen = question.classList.contains("faq__question_active");
    const activeCard = faq.querySelector(".faq__question_active")?.closest(".faq__card");

    if (isOpen) {
      closeCard(card);
      return;
    }

    if (activeCard && activeCard !== card) {
      closeCard(activeCard);
    }

    openCard(card);
  });
}

const solutionsFilter = document.querySelector(".solutions-filter");

if (solutionsFilter) {
  const filterButtons = solutionsFilter.querySelectorAll(".solutions-filter__item");
  const cards = document.querySelectorAll(".solution-card");

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const filter = button.dataset.filter;

      filterButtons.forEach((item) => {
        item.classList.remove("solutions-filter__item_active");
      });

      button.classList.add("solutions-filter__item_active");

      cards.forEach((card) => {
        const tags = card.dataset.tags.split(" ");
        const isVisible = filter === "all" || tags.includes(filter);

        card.hidden = !isVisible;
      });
    });
  });
}
