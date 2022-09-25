const form = document.getElementById('connection');
const popup = document.querySelector('.popup');
const btnClosePopup = document.querySelector('.popup__close-button');

function openPopup() {
	popup.classList.add('popup_opened');
}

function closePopup() {
	popup.classList.remove('popup_opened');
}

form.addEventListener('submit', (evt) => {
	evt.preventDefault();

	const name = document.querySelector('.connection__form1').value;
	const phone = document.querySelector('.connection__form2').value;
	const email = document.querySelector('.connection__form3').value;
	const textArea = document.querySelector('.connection__form4').value;

	const data = {
		name: name,
		phone: phone,
		email: email,
		textArea: textArea,
	};

	openPopup(popup);
	form.reset();
});

btnClosePopup.addEventListener('click', function () {
	closePopup();
});
