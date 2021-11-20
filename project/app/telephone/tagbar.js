const tagbarBtn = document.getElementById("tagbar-btn");
const tagBar = document.getElementById("tagbar");

tagbarBtn.addEventListener("click", () => {
    tagBar.classList.toggle("open-menu");
    document.getElementById("member").classList.remove("open-menu");
    document.getElementById("dropdown__btn").classList.remove("is-open");
    document.getElementById("chatbar").classList.remove("open-menu");
});
