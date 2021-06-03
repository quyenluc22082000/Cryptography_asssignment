const usersTable = document.querySelector("table[class^='users']");
const logsTable = document.querySelector("table[class^='logs']");
const userForm = document.querySelector("form[class^='new-user']");

const usersTitle = document.querySelector("h1[class^='users-title']");
const logsTitle = document.querySelector("h1[class^='logs-title']");
const userTitle = document.querySelector("h1[class^='new-user-title']");

const usersBtn = document.querySelector("h6[class^='users']");
const logsBtn = document.querySelector("h6[class^='logs']");
const userBtn = document.querySelector("h6[class^='new-user']");

logsTable.classList.add("hidden");
logsTitle.classList.add("hidden");

userForm.classList.add("hidden");
userTitle.classList.add("hidden");

usersBtn.addEventListener("click", () => {
    usersTable.classList.remove("hidden");
    usersTitle.classList.remove("hidden");

    logsTable.classList.add("hidden");
    logsTitle.classList.add("hidden");

    userForm.classList.add("hidden");
    userTitle.classList.add("hidden");
});

logsBtn.addEventListener("click", () => {
    usersTable.classList.add("hidden");
    usersTitle.classList.add("hidden");

    logsTable.classList.remove("hidden");
    logsTitle.classList.remove("hidden");

    userForm.classList.add("hidden");
    userTitle.classList.add("hidden");
});

userBtn.addEventListener("click", () => {
    usersTable.classList.add("hidden");
    usersTitle.classList.add("hidden");
    
    logsTable.classList.add("hidden");
    logsTitle.classList.add("hidden");

    userForm.classList.remove("hidden");
    userTitle.classList.remove("hidden");
});
