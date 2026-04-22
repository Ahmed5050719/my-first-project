const loginForm = document.getElementById('loginForm');
const loginMessage = document.getElementById('loginMessage');

loginForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    if(username === "" || password === "") {
        loginMessage.textContent = "❌ يرجى ملء جميع الحقول!";
        loginMessage.style.color = "red";
        return;
    }

    if(password.length < 4){
        loginMessage.textContent = "❌ كلمة المرور قصيرة جدًا!";
        loginMessage.style.color = "red";
        return;
    }

    loginMessage.textContent = `✅ مرحبًا ${username}! تم تسجيل الدخول بنجاح.`;
    loginMessage.style.color = "green";

    loginForm.reset();
});
