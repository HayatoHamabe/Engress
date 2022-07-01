// ロードのクルクル
const loader = document.getElementById("js-loader");
window.addEventListener("load", () => {
  const ms = 400;
  loader.style.transition = "opacity " + ms + "ms";
  const loaderOpacity = function () {
    loader.style.opacity = 0;
  };
  const loaderDisplay = function () {
    loader.style.display = "none";
  };
  setTimeout(loaderOpacity, 1);
  setTimeout(loaderDisplay, ms);
});

//low 960px header-btn
toggle = () => {
  const line = document.getElementById("hamburger-line");
  const nav = document.getElementById("global-nav");
  line.classList.toggle("is-active");
  nav.classList.toggle("is-show");
};

// よくある質問がクリックされたとき
let questions = document.getElementsByClassName("p-question__question");
for (let i = 0; i < questions.length; i++) {
  // 各ボタンをイベントリスナーに登録
  questions[i].addEventListener("click", function () {
    this.classList.toggle("active");
    this.nextElementSibling.classList.toggle("active");
  });
}
delete questions;
