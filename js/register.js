const form = document.querySelector('.Formfill'),
submitbtn = form.querySelector('.submit input');

form.onsubmit = (e) => {
    e.preventDefault();
}

submitbtn.onclick = () =>{
    //start ajax 
    let xhr = new XMLHttpRequest(); //create xml object
    xhr.open("POST","./php/signup.php" , true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if(data == "Success"){
                    location.href = "../otp/otp.php";

                }
                else{
                    consolelog('error');
                }
            }            
        }
    }
    //send data through ajax to php
    let formData = new FormData(form); //creating new object from form data//
    xhr.send(formData); //sending data to php
}