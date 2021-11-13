const chatBtn = document.getElementById("chat-btn");
const chatBar = document.getElementById("chatbar");

chatBtn.addEventListener("click", () => {
    chatBar.classList.toggle("open-menu");
});
