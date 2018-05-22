
var addInput = document.getElementById("add");
var questionLocation = document.getElementById("questions");
let i = 1;

addInput.addEventListener("click", (event) => {
    event.preventDefault();
    i++;
    //Create a div to store both elements
    var div = document.createElement("div");

    //Create text field
    var input = document.createElement("input");
    input.type = "text";
    input.id = "question" + i;
    input.name = "question" + i;
    input.className = "block";
    input.placeholder = "Enter a question";


    //Append input to form fields
    div.appendChild(input);
    questionLocation.appendChild(div);

});