var us = [{
    user:"admin",
    pword:"admin"
},
{
    user:"user",
    pword:"user"
}
]

function getInfo() {
    var user = document.getElementById("user").value
    var pword = document.getElementById("pword").value

    for(i=0;i<us.length;i++){
        if(user == us[i].user && pword == us[i].pword){
            alert("Welcome " + user + "!")
            return
        }else if (user != us[i].user && pword == us[i].pword){
            alert("Invalid Username !!!")
            return
        }else if (user == us[i].user && pword != us[i].pword){
            alert("Invalid Password !!!")
            return
        }else{
            alert("Unauthorized Access!")
        }
    }
    
}