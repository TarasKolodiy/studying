/* 1) Зробити лічильника. Дві кнопки (+ & -) та стартове число (0).
При клікові на кнопки збільшувати або зменшувати лічильник відповідно до кнопки яку натиснув */

let counter = 0;

function counterPlus() {
    counter++;
    document.getElementById('int').innerHTML = counter;
}

function counterMinus() {
    counter--;
    document.getElementById('int').innerHTML = counter;
}

/* 2) Зробити меню для піцерії. Має бути список продуктів. Кожний продукт має свою ціну.
Я як користувач буду обирати які продукти хочу добавити до своєї піци (добавлятиму через код).
І як як користувач в кінці хочу отримати список продуктів які будуть в піці і сумма. */

function priceAndProducts() {
    // список продуктів: ковбаска, сир, грибочки, помідорчики
    let productsList = [];
    let summa = 30; //30 - ціна за саме тісто без начинки
    for (let i = 0; i < arguments.length; i++) {
        if (arguments[i] == 'ковбаска') {
            productsList.push('ковбаска');
            summa += 100;
        }
        if (arguments[i] == 'сир') {
            productsList.push('сир');
            summa += 80;
        }
        if (arguments[i] == 'помідорчики') {
            productsList.push('помідорчики');
            summa += 50;
        }
        if (arguments[i] == 'грибочки') {
            productsList.push('грибочки');
            summa += 40;
        }
    };

    return 'Ваша піца  коштує: ' + summa + ' гривень<br>' + 'Обрані продукти: ' + productsList.join(', ') + '<br>Очікуйте на ваше замовлення :)';
}

document.write(priceAndProducts()) // введіть обрані продукти у форматі 'назва продукту', через кому

/*3) Полегшити життя таксісту. Ціна першого кілометра коштує 50 грн., ціна після першого кілометра - 25 грн.
Створити можливість добавляти користувачем дистанція яку проїхав таксіст (добавляється значення через код).
На екрані маю побачити суму яку потрібно заплатити за проїзд.
Як додаткове завдання це добавити можливість промокоду.
А саме, є промокоди які надаватимуть певний відсоток знижок або фіксовану сумму. */

let price = 0;
let discount = 0;

function happyTaksist(distance, promocode) {
    if (distance <= 1 && distance > 0) price = 50;
    if (distance > 1) price = 50 + (distance - 1) * 25;
    if (distance <= 0) return 'Введіть коректне значення (більше 0)';
    if (promocode < 0) {
        discount = promocode * (-1);
        price -= discount;
    }
    if (promocode > 0 && promocode <= 100) {
        discount = price * promocode / 100;
        price = price - discount;
    }
    if (discount >= price+discount) return 'Ваша поїздка безкоштовна';
    if (promocode > 100) return 'Знижка не може перевищувати 100%';
    return 'Вартість поїздки: ' + Math.trunc(price) + ' гривень';
}

console.log(happyTaksist(2.1, -10)) // Введіть відстань та розмір знижки (якщо є) у відсотках (наприклад: 5) або фіксований розмір знижки (наприклад: -10)

/* 4) Тривалість фільму. Створити можливість добавляти користувачем загальну тривалість фільму у хвилинах та назву фільма (добавляється значення через код).
На екрані як результат маю побачити час розбитий на години, хвилини та секунди.
Додатково має бути написано, типу: "Тривалість фільму '{назва_фільму}' - 2 години, 25 хвилин, 15 сек.". */


function durationConverter(min, title) {
    let hours = Math.trunc(min/60);
    let minutes = Math.trunc(min % 60);
    let seconds = Math.trunc((min - Math.trunc(min)) * 60);
    if (minutes < 10) minutes = '0' + minutes;
    if (seconds < 10) seconds = '0' + seconds;
    return hours + ':' + minutes + ':' + seconds + '. Тривалість фільму "' + title + '" - ' + hours + ' годин, ' + minutes + ' хвилин, ' + seconds + ' секунд';
};

console.log(durationConverter(201, 'Lord of the Rings: Return of the King'));

/* 5) Можна бухати? Задати питання користувачу чи йому є 18 років? Якщо є - продати пляшку, якщо немає - викликати поліцію */


function ageCheckYes() {
    alert('Тримай пляшку')
}

function ageCheckNo() {
    alert('Викликаю поліцію!')
}



// 6) Створити калькулятор конвертації ваг. Я як користувач повинен ввести значення ваги,
//     одиницю з якої конвертую та одиницю куди конвертую  (добавляється значення через код).
// Як результат вивести на екран результат у текстовому форматі типу: "В {значення} {одиниця з якої конвертую} = {результат} {одиниця куди конвертую}"


function converter(value, unit1, unit2) {
    // перелік одиниць для конвертації: кілограм, грам, фунт
    let result = 0;
    if (value < 0) return 'Значення не може бути мінусовим';
    switch (unit1) {
        case 'kg':
            if (unit2 == 'pound') result = value * 2.2;
            if (unit2 == 'kg') result = value;
            if (unit2 == 'gramm') result = value * 1000;
            break;
        case 'pound':
            if (unit2 == 'pound') result = value;
            if (unit2 == 'kg') result = value * 0.45;
            if (unit2 == 'gramm') result = value * 453;
            break;
        case 'gramm':
            if (unit2 == 'pound') result = value * 0.0022;
            if (unit2 == 'kg') result = value * 0.001;
            if (unit2 == 'gramm') result = value;
            break;
    }
    return 'В ' + value + ' ' + unit1 + ' = ' + result + ' ' + unit2;
}

console.log(converter(2, 'kg', 'pound'))


