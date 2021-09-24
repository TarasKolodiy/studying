function comfortableTime() {
        let result = prompt('Введіть зручний для вас час');
        if (result != null && result != '') {
                alert("Успішно зареєстровано!");
        }
}

var pictures = document.getElementsByClassName('picturebox');
var boxes = document.getElementsByClassName('box');
var suffixes = document.getElementsByClassName('suffix');
var newText = document.getElementsByClassName('add-text');
for (let i = 0, j = 0, k = 0, l = 0;
     i < boxes.length, j < suffixes.length, k < newText.length, l < pictures.length;
     i++, j++, k++, l++) {
        boxes[i].onclick = function onClickBox() {
                newText[k].classList.toggle('toggle-add-text');
                suffixes[j].classList.toggle('toggle-suffix');
                pictures[l].classList.toggle('toggle-picture');
                boxes[i].classList.toggle('box-onclick');
        }
}

function onClickButton() {
        let hidden = document.getElementsByClassName('hidden-box');
        for (let i = 0; i < hidden.length; i++) {
                hidden[i].style.display = 'inline-block';
        }
        document.getElementById('learn-more-button').style.display = 'none';
}

function fileIsNotAvailable() {
        alert ('Файл тимчасово недоступний');
        document.getElementById('download-button').removeAttribute('onclick');
        document.getElementById('download-button').setAttribute('class', 'disabled-button');
}

if(0 < 1) {
        let slides = document.getElementsByClassName('slide');
        let currentSlide = 0;
        let slideInterval = setInterval(slider, 10000);
        let ellipses = document.getElementsByClassName('ellipse');
        let currentEllipse = 0;
        function slider() {
                slides[currentSlide].className = 'slide';
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].className = 'slide main-slide';
                ellipses[currentEllipse].className = 'ellipse';
                currentEllipse = (currentEllipse + 1) % ellipses.length;
                ellipses[currentEllipse].className = 'ellipse ellipse-active';
        }
}