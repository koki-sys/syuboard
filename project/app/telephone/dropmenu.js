(() => {
    document.addEventListener("DOMContentLoaded", function () {
        // HTML解析が終わったら
        const btn = document.getElementById("dropdown__btn"); // ボタンをidで取得
        const body = document.getElementById("dropdown__body");
        if (btn) {
            // ボタンが存在しないときにエラーになるのを回避
            btn.addEventListener("click", function () {
                //ボタンがクリックされたら
                this.classList.toggle("is-open"); // is-openを付加する
                body.animate([{ opacity: "0" }, { opacity: "1" }], 150);
            });
        }
    });
})();
