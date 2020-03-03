var tester = document.getElementById("button").addEventListener('click', testing);

function testing() {
    var text = document.getElementById("OriginalText").value
    const regex = /(?:\s+|^)\w*CUS(?:\W|$|\s)/
    const match = regex.exec(text)
    console.log(match)
        // if (match == true) {
        //     console.log('YES');
        // } else {
        //     console.log('No')
        // };
    document.getElementById('SampleText').innerHTML = text
}