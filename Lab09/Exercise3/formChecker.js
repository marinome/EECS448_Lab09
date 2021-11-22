document.addEventListener("DOMContentLoaded",() =>{
    document.querySelector("#submit").addEventListener("click",(f) =>{
        let bacQ = document.getElementById('bacon');
        let letQ = document.getElementById('lettuce');
        let tomQ = document.getElementById('tomato');
        let email = document.getElementById('username');
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
        let result = false;
        for (let i = 0; i < email.length; i++){ //if broke, change to ++i
            //console.log(email[i]);
            //console.log("length: " + email.length);
            if (email[i] == "@" && i != 0 && i != email.length-1){
                //console.log("when true:" + i);
                result = true;
            }
        }
        return result;
    }
});
