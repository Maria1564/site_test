const contactBtnDesktop = document.querySelector(".header__btn")
const contactBtnMobile = document.querySelector(".header__btn_mobile")

const requestPopup = document.querySelector(".request__overlay")
const resultPopup = document.querySelector(".result__overlay")

const btnRequest = document.querySelector(".request__send")
const btnResult = document.querySelector(".result__btn")

const btnCloseRequest = document.querySelector(".request__close-btn")
const btnCloseResult = document.querySelector(".result__close-btn")

const openPopup = (event) => {
    event.preventDefault()
    requestPopup.classList.add("request_open")
    document.querySelector("body").style.overflow = "hidden"
}

contactBtnDesktop.addEventListener("click", openPopup)
contactBtnMobile.addEventListener("click", openPopup)

btnRequest.addEventListener("click", () => {
    requestPopup.classList.remove("request_open")
    resultPopup.classList.add("result_open")
})

btnResult.addEventListener("click", () => {
    resultPopup.classList.remove("result_open")
    document.querySelector("body").style.overflow = "auto"
})


btnCloseRequest.addEventListener("click", () => {
    requestPopup.classList.remove("request_open")
    document.querySelector("body").style.overflow = "auto"
})
btnCloseResult.addEventListener("click", () => {
    resultPopup.classList.remove("result_open")
    document.querySelector("body").style.overflow = "auto"
})

