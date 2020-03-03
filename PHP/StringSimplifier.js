function FindWords(s) {
    let re = RegExp(/\w+/, 'ig');
    value = s.match(re);
    return value
}

function DecapitalizeArray($Array) {
    for (var i in $Array) {
        let $Element = $Array[i];
        $Array[i] = $Element.toLowerCase();
    }
    return $Array;
}

function Organize($words) {
    for (var i in $words) {
        let $word = $words[i];
        let re = RegExp(/(ER|AR|IR)$/, 'igm')
        $Test = re.test($word)
        console.log($word)
        console.log($Test)
        console.log('')
    }
}

function AlertThing($input) {
    alert($input)
}

function StringSimplify() {
    $input = document.getElementById('OriginalText').value;
    $Tense = 'Present Subjunctive';
    $words = FindWords($input)
    $words = DecapitalizeArray($words)
    document.getElementById("btnClickedValue").value = $words;
    document.getElementById("Tense").value = $Tense;

    console.log('FUNCTION')
}