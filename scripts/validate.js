let defaultMsg="";
let titleInput = document.getElementById('title');
let titleErrorMsg= "Title should be non-empty and less than 40 character long.";

let titleError=document.createElement('p');
titleError.setAttribute("class","warning");
document.querySelectorAll(".book-info")[0].append(titleError);

function validateTitle() {
    let title =titleInput.value;
    if(title.length< 40 && title !== ""){ 
        titleError.textContent = defaultMsg;
    }
    else {
        titleError.textContent = titleErrorMsg;
    }
    return titleError.textContent;
    }

// if you entered valid title,the error paragraph will be gone
titleInput.addEventListener("blur",()=>{ // arrow function
    let x=validateTitle();
        if(x == defaultMsg){
            titleError.textContent = defaultMsg;
        }
    });



let authorInput = document.getElementById('author');
let authorErrorMsg="Author should be non-empty and less than 40 character long.";

let authorError=document.createElement('p');
authorError.setAttribute("class","warning");
document.querySelectorAll(".book-info")[1].append(authorError);

function validateAuthor() {
    let author =authorInput.value;
    if(author.length< 40 && author!== ""){ 
        authorError.textContent = defaultMsg;
    }
    else {
        authorError.textContent = authorErrorMsg;
    }
    return authorError.textContent;
    }

// if you entered valid author,the error paragraph will be gone
authorInput.addEventListener("blur",()=>{ // arrow function
    let x=validateAuthor();
        if(x == defaultMsg){
            authorError.textContent = defaultMsg;
        }
    });



let genreInput =document.getElementById('genre');
let genreErrorMsg="Please select a genre.";

let genreError=document.createElement('p');
genreError.setAttribute("class","warning");
document.querySelectorAll(".book-info")[2].append(genreError);

function validateGenre() {
    let genre =genreInput.value;

    if(genre !== ""){ 
        genreError.textContent = defaultMsg;
    }
    else {
        genreError.textContent = genreErrorMsg;
    }
    return genreError.textContent;
    }

// if user select a genre,the error paragraph will be gone
genreInput.addEventListener("blur",()=>{ // arrow function
    let x=validateGenre();
        if(x == defaultMsg){
            genreError.textContent = defaultMsg;
        }
    });



//event handler for submit event
function validate(){
    let valid = true;//global validation 
    let titleValidation = validateTitle();
    let AauthorValidation = validateAuthor();
    let genreValidation = validateGenre();

    if(titleValidation!==defaultMsg
        ||AauthorValidation!==defaultMsg
        ||genreValidation!==defaultMsg){
        valid = false;
    }
    else{
        document.getElementById("myform").reset();
    }
    return valid;
}


// event listner to empty the all the error message once push reset button
function resetFormError() {
    titleError.textContent = defaultMsg;
    authorError.textContent = defaultMsg;
    genreError.textContent = defaultMsg;
}
document.getElementById("myform").addEventListener("reset",resetFormError);




