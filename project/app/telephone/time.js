const timer = document.getElementById("call-time-up");
let startTime;

//startボタンを押した時にイベントが起動
window.onload = () => {
    startTime = Date.now();
    countUp();
};

//coutUp()関数の中身
function countUp() {
    const d = new Date(Date.now() - startTime);
    const m = String(d.getMinutes()).padStart(2, "0");
    const s = String(d.getSeconds()).padStart(2, "0");
    timer.textContent = `${m}:${s}`;

    setTimeout(() => {
        countUp();
    }, 10);
}
