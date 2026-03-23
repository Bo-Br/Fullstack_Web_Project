document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const username = document.querySelector("#username");
    const password = document.querySelector("#password");

    form.addEventListener("submit", (e) => {
        let errors = [];

        const usernameValue = username.value.trim();
        const passwordValue = password.value.trim();

        if (usernameValue === "") {
            errors.push("L'identifiant est vide.");
        } else if (!validateEmail(usernameValue)) {
            errors.push("Email invalide.");
        }


      if (passwordValue === "") {
            errors.push("Mot de passe vide.");
        } else if (passwordValue.length < 5) {
            errors.push("Mot de passe trop court (min 5 caractères).");
        }


        if (errors.length > 0) {
            e.preventDefault();
            alert(errors.join("\n"));
        }
    });

    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
});