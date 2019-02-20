

function backToTop() {
//получаем кнопку
	let button = $('.back-to-top');

//на объект window навесим событие scroll 
$(window).on('scroll', () => {
//насколько прокрутили окно
// если значение > 50%,кнопка будет показываться, иначе скрывать
		if ($(this).scrollTop() >= 50) {
			button.fadeIn();
		} else {
			button.fadeOut();
		}
	});

//событие клик
button.on('click', (e) =>{
//при нажатии будем отменять действие по умолчанию
	e.preventDefault();
//получим элемент html и анимировано за сек. изменим св-во scrollTop на 0
	$('php').animate({scrollTop: 0}, 1000);
})
 
}

	backToTop();
