// よくある質問がクリックされたとき
let questions = document.getElementsByClassName("p-question__question");
for (let i = 0; i < questions.length; i++) {
  // 各ボタンをイベントリスナーに登録
  console.log(questions.length);
  questions[i].addEventListener("click", function () {
    this.classList.toggle("active");
    this.nextElementSibling.classList.toggle("active");
  });
}
delete questions;
