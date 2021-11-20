const memberBtn = document.getElementById("member-btn");
const member = document.getElementById("member");

memberBtn.addEventListener("click", () => {
    document.getElementById("member").classList.toggle("open-menu");
    document.getElementById("dropdown__btn").classList.remove("is-open");
    document.getElementById("chatbar").classList.remove("open-menu");
    document.getElementById("tagbar").classList.remove("open-menu");
});
