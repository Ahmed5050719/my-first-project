// بيانات الألعاب
const games = [
    {
        name: "لعبة الألوان",
        age: "3-5",
        type: "ألوان",
        img: "images/game1.jpg"
    },
    {
        name: "لعبة الأرقام",
        age: "5-7",
        type: "أرقام",
        img: "images/game2.jpg"
    },
    {
        name: "لعبة التركيز",
        age: "6-9",
        type: "تركيز",
        img: "images/game3.jpg"
    },
    {
        name: "لعبة الحروف",
        age: "3-5",
        type: "أرقام",
        img: "images/game4.jpg"
    },
    {
        name: "لعبة الأشكال",
        age: "5-7",
        type: "ألوان",
        img: "images/game5.jpg"
    }
];

// عرض الألعاب
const gamesGrid = document.getElementById('gamesGrid');

function displayGames(gamesArray) {
    gamesGrid.innerHTML = '';
    if (gamesArray.length === 0) {
        gamesGrid.innerHTML = '<p>لم يتم العثور على ألعاب.</p>';
        return;
    }
    gamesArray.forEach(game => {
        const card = document.createElement('div');
        card.classList.add('game-card');
        card.innerHTML = `
            <img src="${game.img}" alt="${game.name}">
            <h3>${game.name}</h3>
            <p>العمر: ${game.age}</p>
            <p>النوع: ${game.type}</p>
            <button onclick="location.href='game-details.html'">عرض التفاصيل</button>
        `;
        gamesGrid.appendChild(card);
    });
}

// فلترة البحث والاختيار
const searchInput = document.getElementById('search');
const ageFilter = document.getElementById('ageFilter');
const typeFilter = document.getElementById('typeFilter');

function filterGames() {
    const searchTerm = searchInput.value.toLowerCase();
    const age = ageFilter.value;
    const type = typeFilter.value;

    const filtered = games.filter(game => {
        return (
            (game.name.toLowerCase().includes(searchTerm)) &&
            (age === "" || game.age === age) &&
            (type === "" || game.type === type)
        );
    });
    displayGames(filtered);
}

// أحداث الفلترة
searchInput.addEventListener('input', filterGames);
ageFilter.addEventListener('change', filterGames);
typeFilter.addEventListener('change', filterGames);

// عرض جميع الألعاب أول مرة
displayGames(games);
