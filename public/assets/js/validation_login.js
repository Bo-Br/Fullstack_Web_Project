function validateForm() {

        const username = document.getElementById("username");
        const password = document.getElementById("password");

        if (username.value.length < 3) {
            username.style.border = "2px solid red";
            username.setCustomValidity("Entrez un username de plus de 3 elements");
        }else{
            username.style.border = "2px solid green";
            username.setCustomValidity(""); 
            
          };

        if (password.value.length < 12) {
            password.style.border = "2px solid red";
            password.setCustomValidity("Entrez un mdp de plus de 12 elements");
            
        }else{
            password.style.border = "2px solid green";
            password.setCustomValidity("");
            
          };
        
          return true;
};