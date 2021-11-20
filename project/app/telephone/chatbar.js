const chatBtn = document.getElementById("chat-btn");
const chatBar = document.getElementById("chatbar");

chatBtn.addEventListener("click", () => {
    chatBar.classList.toggle("open-menu");
    document.getElementById("member").classList.remove("open-menu");
    document.getElementById("tagbar").classList.remove("open-menu");
    document.getElementById("dropdown__btn").classList.remove("is-open");
});
