function LChange() {
    var Language = document.getElementById('Language');
    var Selected = Language.options[Language.selectedIndex].value;
    if (Selected === "Español") {
        console.log("Si!")
        document.getElementById('HeaderOne').innerHTML = "¡Aprende a hablar Español!"
    }
    if (Selected === "English") {
        console.log("Yay!")
        document.getElementById('HeaderOne').innerHTML = "Learn to speak spanish!"
        var HEADER1 = "Hello!"
    }
}