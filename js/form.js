/*
Author: Mark Sweeney
Date: 2017-31-03
*/


/*Once our window loads in the DOM we are listening for it to load. When this happens, we run a function*/

window.addEventListener("load", function () {
/*console.log("have we loaded?"); <- used for testing page load*/
    
    
function submitForm(evt){
    var valid=true;


/*js validation for type*/
    var typeField=document.getElementById("type");
    var type = typeField.value;
    var typeError = document.getElementById("typeError");
    

    typeError.innerHTML = "";
    /* if type matches */
if (type === ""){
    valid = false;
    typeError.innerHTML = "YOU FORGOT TO ENTER A TYPE";
    console.log("type is empty");
}        
    
/*js validation for headline*/
    var headlineField=document.getElementById("headline");
    var headline = headlineField.value;
    var headlineError = document.getElementById("headlineError");
    

    headlineError.innerHTML = "";
    /* if headline matches */
if (headline === ""){
    valid = false;
    headlineError.innerHTML = "YOU FORGOT TO ENTER A HEADLINE";
    console.log("headline is empty");
}     
    
    
/*js validation for storyText*/
    var storyTextField=document.getElementById("storyText");
    var storyText = storyTextField.value;
    var storyTextError = document.getElementById("storyTextError");
    

    storyTextError.innerHTML = "";
    /* if storyText matches */
if (storyText === ""){
    valid = false;
    storyTextError.innerHTML = "YOU FORGOT TO ENTER A STORY";
    console.log("storyText is empty");
}   


    
/*js validation for date*/
    var dateField=document.getElementById("date");
    var date = dateField.value;
    var dateError = document.getElementById("dateError");
    

    dateError.innerHTML = "";
    /* if date matches */
if (date === ""){
    valid = false;
    dateError.innerHTML = "YOU FORGOT TO ENTER A DATE";
    console.log("date is empty");
}        
    
    
/*js validation for time*/
    var timeField=document.getElementById("time");
    var time = timeField.value;
    var timeError = document.getElementById("timeError");
    

    timeError.innerHTML = "";
    /* if time matches */
if (time === ""){
    valid = false;
    timeError.innerHTML = "YOU FORGOT TO ENTER A TIME";
    console.log("time is empty");
}
        
    
/*js validation for author*/
    var authorField=document.getElementById("author");
    var author = authorField.value;
    var authorError = document.getElementById("authorError");
    

    authorError.innerHTML = "";
    /* if author matches */
if (author === ""){
    valid = false;
    authorError.innerHTML = "YOU FORGOT TO ENTER AN AUTHOR";
    console.log("author is empty");
}
    
    
/*js validation for job title*/
    var titleField=document.getElementById("title");
    var title = titleField.value;
    var titleError = document.getElementById("titleError");
    

    titleError.innerHTML = "";
    /* if title matches */
if (title === ""){
    valid = false;
    titleError.innerHTML = "YOU FORGOT TO ENTER A TITLE";
    console.log("title is empty");
}
   

/* this stops the submit button from submiting the form if the fields are not valid */    
if(!valid){
   evt.preventDefault(); 
    }
}
    
    /*The window has loaded. This checks the submit button from form.php.
    Creates a variable and assigns the value of the submit button to that variable*/
    var submitBtn = document.getElementById("submit");
    
    /*this checks if the submit button is clicked*/
    submitBtn.addEventListener("click",submitForm);
    
    
});