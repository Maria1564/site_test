const contactBtnDesktop = document.querySelector(".header__btn")
const contactBtnMobile = document.querySelector(".header__btn_mobile")

const requestPopup = document.querySelector(".request__overlay")
const resultPopup = document.querySelector(".result__overlay")

const btnRequest = document.querySelector(".request__send")
const btnResult = document.querySelector(".result__btn")

const btnCloseRequest = document.querySelector(".request__close-btn")
const btnCloseResult = document.querySelector(".result__close-btn")

const closeRequestPopup = () => {
    requestPopup.classList.remove("request_open")
    document.querySelector("html").style.overflow = "auto"
}

const closeResultPopup = () => {
    resultPopup.classList.remove("result_open")
    document.querySelector("html").style.overflow = "auto"
}

const openPopup = (event) => {
    event?.preventDefault()
    requestPopup.classList.add("request_open")
    document.querySelector("html").style.overflow = "hidden"
}

contactBtnDesktop.addEventListener("click", openPopup)
contactBtnMobile.addEventListener("click", openPopup)

btnRequest.addEventListener("click", () => {
    requestPopup.classList.remove("request_open")
    resultPopup.classList.add("result_open")
})

btnResult.addEventListener("click", () => {
    closeResultPopup()
})


btnCloseRequest.addEventListener("click", () => {
    closeRequestPopup()
})
btnCloseResult.addEventListener("click", () => {
    closeResultPopup()
})

requestPopup.addEventListener("click", (event) => {
    if (event.target === requestPopup) {
        closeRequestPopup()
    }
})

resultPopup.addEventListener("click", (event) => {
    if (event.target === resultPopup) {
        closeResultPopup()
    }
})


const swiperWrapper = document.querySelector(".swiper-wrapper")

swiperWrapper.addEventListener("click", (e) => {
  if(e.target.closest(".development-stages__label")) {
    openPopup()
  }
})
