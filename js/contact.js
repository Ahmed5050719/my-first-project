const contactForm = document.getElementById('contactForm');
const formMessage = document.getElementById('formMessage');

contactForm.addEventListener('submit', function(e) {
    e.preventDefault();

    // جلب القيم
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    // التحقق من المدخلات
    if (name === "" || email === "" || message === "") {
        formMessage.textContent = "❌ يرجى ملء جميع الحقول!";
        formMessage.style.color = "red";
        return;
    }

    // تحقق من البريد الإلكتروني بصيغة صحيحة
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        formMessage.textContent = "❌ البريد الإلكتروني غير صالح!";
        formMessage.style.color = "red";
        return;
    }

    // عرض رسالة نجاح وهمية
    formMessage.textContent = "✅ تم إرسال رسالتك بنجاح! شكرًا لتواصلك معنا.";
    formMessage.style.color = "green";

    // إعادة تعيين الحقول بعد الإرسال
    contactForm.reset();
});
