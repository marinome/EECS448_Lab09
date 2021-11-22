document.addEventListener("DOMContentLoaded",() =>{
    document.querySelector("#submit").addEventListener("click",(f) =>{
        let bacQ = document.getElementById('bacon');
        let letQ = document.getElementById('lettuce');
        let tomQ = document.getElementById('tomato');
        let email = document.getElementById('email');
        let password = document.getElementById('password');
        let free = document.getElementById('free');
        let d50 = document.getElementById('d50');
        let d5 = document.getElementById('d5');
        let check = 0;

        if (bacQ.value == "" && letQ.value == "" && tomQ.value == ""){
            alert("Whoops! Looks like you forgot to buy anything :)");
            f.preventDefault();
        }
        if (!atdotcom(email.value)){
            alert("Email must be in the form of 'name@domain.com'!");
            f.preventDefault();
        }
        if(password.value.length == 0){
            alert("Password field cannot be blank!");
            f.preventDefault();
        }
        if (free.checked == false && d50.checked == false && d5.checked == false){
            alert("You must pick a shipping option!");
            f.preventDefault();
        }
    });

    function atdotcom(email){
        let at = false;
        let dot = false;
        for (let i = 0; i < email.length; i++){
            if(email[i]=="@" && i!=0){
                at = true;
            }
            if(at==true && email[i] == "." && email[i-1]!="@" && i+1 != email.length){
                dot = true;
            }
        }
        return dot;
    }
});
