function FindWords(s) {
    let re = RegExp(/\w+/, 'ig');
    value = s.match(re);
    return value
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