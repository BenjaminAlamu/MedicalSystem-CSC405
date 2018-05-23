function validateForm(form) {
  var w = document.forms[form.name]["phoneNo"].value;
  var x = document.forms[form.name]["firstName"].value;
  var y = document.forms[form.name]["lastName"].value;

  if ((!/^[a-zA-Z\s-]+$/.test(x)) || (!/^[a-zA-Z\s]+$/.test(y))) {
    alert("Invalid Name");
    return false;
  }
  else if (!/^\d{11}$/.test(w)) {
    alert("Invalid Phone Number");
    return false;
  }
}
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

    //Create delete button
    var del = document.createElement("button");
    del.className = "remove";
    del.value = "remove";
    del.textContent = "Remove";


    //Append input to form fields
    div.appendChild(input);
    div.appendChild(del);
    questionLocation.appendChild(div);

    //Add event listener to the delete button
    del.addEventListener("click", () =>{
        console.log("Deleted");
        var element = del.parentNode; //Element represent the parent i.e the containing div
        var parent = element.parentNode; //Parent is the parent of the div element
        parent.removeChild(element);
    });

});
