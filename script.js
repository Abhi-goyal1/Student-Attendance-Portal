const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('sign-up-container');

signInButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

 signUpButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});