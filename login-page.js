const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;
    cookie_name = "admin";
    cookie_value = "no";
    cookie_exdays = "1";
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      }

    if (username === "prest0n" && password === "&@jndhwn7{|?") {
        setCookie(cookie_name, cookie_value, cookie_exdays);
        location = "admin-panel-1998.html";
    } else {
        loginErrorMsg.style.opacity = 1;
    }
})