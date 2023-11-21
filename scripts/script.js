let titleInput = document.getElementById('title');
let authorInput = document.getElementById('author');
let descriptionInput =document.getElementById('description')

let submitBut =document.getElementById('submit');



// create p element for error display
let titleError=document.createElement('p');
titleError.setAttribute("class","error");
document.querySelectorAll(".book-info")[0].append(titleError);

let authorError=document.createElement('p');
authorError.setAttribute("class","error");
document.querySelectorAll(".book-info")[1].append(authorError);

let descriptionError=document.createElement('p');
descriptionError.setAttribute("class", "error");
document.querySelectorAll(".book-info")[3].append(descriptionError);





//error message
let titleErrorMsg= "Title should be non-empty, and within 40 characters long.";
let authorErrorMsg="Author should be non-empty, and within 30 characters long.";
let descriptionErrorMsg = "Description can not be empty. ";

let defaultMsg="";


var validForm = false;
var validTitle = false;
var validAuthor = false;
var validDescription=false;

 

function validateTitle() {
    let title =titleInput.value;
    if(title.length< 40 && title.trim() !== ""){ 
        titleError.textContent = defaultMsg;
        var validTitle = false;
    }
    else {
     titleError.textContent = titleErrorMsg;
     validTitle=true;
    }
       
    }

    function validateAuthor(){
        let author=authorInput.value;
        if(author.length<30 && author.trim() !==""){
            authorError.textContent=defaultMsg;
            validAuthor = false;
        }
        else{
            authorError.textContent=authorErrorMsg;
            validAuthor=true;
        }
    }
   
    function validateDescription(){
        let description=descriptionInput.value;
        if(description.trim() !== ""){
          descriptionError.textContent=defaultMsg;
          validateDescription=false;
        }
        else{
            descriptionError.textContent=descriptionErrorMsg;
            validDescription=true;
        }
    }
   

    function validateForm(){
        if(validTitle == true && validAuthor==true && validDescription==true ){
          validForm=true;
        }
        else{
            validForm=false;
        }
    }

function validate() {
    
    if (validForm == true) {
        return true;
    }

    else {
        return false
    }
}

function submitForm(){
    document.form.submit();
    document.form.reset();
}

function resetFormError() {
    titleError.textContent=defaultMSg;
    authorError.textContent=defaultMSg;
    descriptionError.textContent=descriptionErrorMsg;
}
 document.form.addEventListener("reset",resetFormError());


 titleInput.addEventListener("blur", validateTitle());
authorInput.addEventListener("blur",validateAuthor());
descriptionInput.addEventListener("blur",validateDescription());



document.form.reset().addEventListener("onclick", resetFormError());
document.form.submit().addEventListener("onclick",submitForm());

