// تغيير الصورة الرئيسية عند الضغط على الصور المصغرة
const mainImg = document.getElementById('mainImg');
const thumbs = document.querySelectorAll('.thumb');

thumbs.forEach(thumb => {
    thumb.addEventListener('click', () => {
        mainImg.src = thumb.src;
    });
});

// إضافة اللعبة إلى المفضلة باستخدام LocalStorage
const addFavBtn = document.getElementById('addFavorite');
addFavBtn.addEventListener('click', () => {
    const game = {
        name: "لعبة الألوان",
        img: "images/game1.jpg",
        age: "3-5",
        type: "ألوان"
    };

    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

    // تحقق إذا كانت اللعبة موجودة مسبقاً
    const exists = favorites.some(fav => fav.name === game.name);
    if (!exists) {
        favorites.push(game);
        localStorage.setItem('favorites', JSON.stringify(favorites));
        alert('تمت إضافة اللعبة إلى المفضلة ❤️');
    } else {
        alert('اللعبة موجودة بالفعل في المفضلة!');
    }
});
