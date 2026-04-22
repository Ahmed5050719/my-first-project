// بيانات الألعاب التعليمية
const eduGames = [
    {
        name: "لعبة الذكاء 1",
        skill: "ذكاء",
        age: "5-7",
        img: "images/edu1.jpg"
    },
    {
        name: "ألوان وأرقام",
        skill: "ألوان وأرقام",
        age: "3-5",
        img: "images/edu2.jpg"
    },
    {
        name: "لعبة التركيز",
        skill: "تركيز",
        age: "6-9",
        img: "images/edu3.jpg"
    },
    {
        name: "ذكاء الأطفال",
        skill: "ذكاء",
        age: "4-6",
        img: "images/edu4.jpg"
    },
    {
        name: "أرقام ممتعة",
        skill: "ألوان وأرقام",
        age: "5-7",
        img: "images/edu5.jpg"
    }
];

// عرض الألعاب التعليمية
const eduGrid = document.getElementById('eduGrid');

function displayEduGames(gamesArray) {
    eduGrid.innerHTML = '';
    if (gamesArray.length === 0) {
        eduGrid.innerHTML = '<p>لم يتم العثور على ألعاب.</p>';
        return;
    }

    gamesArray.forEach(game => {
        const card = document.createElement('div');
        card.classList.add('game-card');
        card.innerHTML = `
            <img src="${game.img}" alt="${game.name}">
            <h3>${game.name}</h3>
            <p>العمر: ${game.age}</p>
            <p>المهارة: ${game.skill}</p>
            <button onclick="location.href='game-details.html'">عرض التفاصيل</button>
        `;
        eduGrid.appendChild(card);
    });
}

// الفلترة والبحث
const searchEdu = document.getElementById('searchEdu');
const skillFilter = document.getElementById('skillFilter');

function filterEduGames() {
    const searchTerm = searchEdu.value.toLowerCase();
    const skill = skillFilter.value;

    const filtered = eduGames.filter(game => {
        return (
            game.name.toLowerCase().includes(searchTerm) &&
            (skill === "" || game.skill === skill)
        );
    });

    displayEduGames(filtered);
}

// أحداث البحث والفلترة
searchEdu.addEventListener('input', filterEduGames);
skillFilter.addEventListener('change', filterEduGames);

// عرض الألعاب أول مرة
displayEduGames(eduGames);
