let titleInput = document.getElementById('title');
let authorInput = document.getElementById('author');
let genreSelect = document.getElementById('genre');
let submitBut =document.getElementById('submit');



// create p element for error display
let titleError=document.createElement('p');
titleError.setAttribute("class","error");
document.querySelectorAll(".book-info")[0].append(titleError);

let authorError=document.createElement('p');
authorError.setAttribute("class","error");
document.querySelectorAll(".book-info")[1].append(authorError);

let genreError=document.createElement('p');
genreError.setAttribute("class","error");
document.querySelectorAll(".book-info")[2].append(genreError);


//error message
let titleErrorMsg= "Title should be non-empty, and within 40 characters long.";
let authorErrorMsg="Author should be non-empty, and within 30 characters long.";
let genreErrorMsg="Please select the genre.";
let defaultMsg="";


var validForm = false;
var validTitle = false;
var validAuthor = false;
var validGenre =false;
 

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
            var validAuthor = false;
        }
        else{
            authorError.textContent=authorErrorMsg;
            validAuthor=true;
        }
    }

    function validateGenre(){
        let genre=genreSelect.value;
        if(genre.trim() === ""){
            genreError.textContent=genreErrorMsg;
            validGenre=false;
        }
        else{
            genreError.textContent=defaultMsg;
            validGenre= true;
        }
    }

    function validateForm(){
        if(validTitle == true && validAuthor==true && validGenre == true ){
          validForm=true;
        }
        else{
            validForm=false;
        }
    }

function validate() {
    alert("hello");
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
    genreError.textContent=defaultMsg;
}
 document.form.addEventListener("reset",resetFormError());


 titleInput.addEventListener("blur", validateTitle());
authorInput.addEventListener("blur",validateAuthor());
genreSelect.addEventListener("blur",validateGenre());


document.form.reset().addEventListener("onclick", resetFormError());
document.form.submit().addEventListener("onclick",submitForm());

