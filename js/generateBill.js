var painkiller = document.getElementById("Painkillers");
var antibiotics = document.getElementById("Antibiotics");
var suppliments = document.getElementById("Suppliments");
var vitamins = document.getElementById("Vitamins");
var surgery = document.getElementById("Surgery");
var generate = document.getElementById('generate');
var formElement = document.getElementsByTagName('form')[0];

var painkillerPrice = 2500;
var antibioticsPrice = 1500;
var supplimentsPrice = 2000;
var vitaminsPrice = 1000;
var surgeryPrice = 50000;

var price = 0;

generate.addEventListener("click", (event) => {
    event.preventDefault();
    var consultancy = document.getElementById('docFee').value;
    var value = parseInt(consultancy);
    console.log(value);
    if (typeof(value) === "number"){
        console.log("Here");
        price = 0;

        if (painkiller.checked){
            price = price +  painkillerPrice;
        }
        
        if (antibiotics.checked){   
            price += antibioticsPrice;
        }
        
        if (suppliments.checked){
            price += supplimentsPrice;
        }
        
        if (vitamins.checked){
            price += vitaminsPrice;
        }
        
        if (surgery.checked){
            price += surgeryPrice;
        }
        
        //Consultancy fee is added
        price += value;
        
        //Create an input element to help with database input
        var input = document.createElement("input");
        input.type = "text";
        input.name = "price";
        input.value = price;
        input.textContent = price;
        input.hidden = true;

        formElement.appendChild(input);

        //Create an input that displays cost to the screen
        var lab = document.createElement("label");
        lab.id = "price";
        lab.name = "labelprice";
        lab.textContent = "Cost: " + price;
        formElement.appendChild(lab);
        console.log("here");

        var but = document.createElement("input");
        but.type = "submit";
        but.id = "submit";
        but.value = "Submit";
        but.className = "submit";
        
        

        formElement.appendChild(but);
    }
    else{
        alert("Consultancy Fee must be a number");
    }
    
    
});

