var numbernames = 0;
var names = new Array();

function SortNames() {
    thename = document.getElementById('newNames').value;
    names[numbernames] =thename;
    numbernames++;
    names.sort();
    document.getElementById("result").value = names.join('\n');
    document.title = 'changed into sumthing';
    
}