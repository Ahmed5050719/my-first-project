const favoritesGrid = document.getElementById('favoritesGrid');

// جلب الألعاب من LocalStorage
function loadFavorites() {
    const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    favoritesGrid.innerHTML = '';

    if (favorites.length === 0) {
        favoritesGrid.innerHTML = '<p>لم تقم بإضافة أي ألعاب إلى المفضلة بعد.</p>';
        return;
    }

    favorites.forEach((game, index) => {
        const card = document.createElement('div');
        card.classList.add('game-card');
        card.innerHTML = `
            <img src="${game.img}" alt="${game.name}">
            <h3>${game.name}</h3>
            <p>العمر: ${game.age}</p>
            <p>النوع: ${game.type}</p>
            <button class="removeBtn" data-index="${index}">❌ إزالة من المفضلة</button>
        `;
        favoritesGrid.appendChild(card);
    });

    // إضافة حدث زر الحذف
    const removeButtons = document.querySelectorAll('.removeBtn');
    removeButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            removeFavorite(btn.dataset.index);
        });
    });
}

// حذف لعبة من المفضلة
function removeFavorite(index) {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    favorites.splice(index, 1);
    localStorage.setItem('favorites', JSON.stringify(favorites));
    loadFavorites(); // إعادة تحميل الألعاب بعد الحذف
}

// أول مرة تحميل
loadFavorites();
