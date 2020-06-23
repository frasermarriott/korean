
// Conjugator
function showConjugationResults() {
  document.getElementById("conjugation-results").style.display = "flex";;
}

$("#verb").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#verb_search").click();
    }
});


// Numbers
var randomStrings = [
    "일",
    "이",
    "삼", 
    "사",
    "오",
];


var randomDiv = document.getElementById("myRandomDiv");

document.getElementById("myButton").addEventListener("click", function() {
  randomIndex = Math.round((Math.random()*randomStrings.length-1));
  newText = randomStrings[randomIndex];
  randomDiv.innerHTML = newText;
});