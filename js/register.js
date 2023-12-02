


// inputs.onsubmit = (e) => {
//     e.preventDefault();
// }

function submit() {
    const inputs = document.querySelectorAll("input"),
    errortxt = document.querySelector(".error-text");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./Php/signup.php",true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if(data == "Success"){
                    location.href = "./verify.php";
                }
                else{
                    errortxt.textContent = data;
                    errortxt.style.display = "block";
                }
            }
        }
    }
    let formData = new formData(form);
    xhr.send(formData);
}