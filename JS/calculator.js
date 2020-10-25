var button = document.getElementsByClassName('buttons-section')[0];
var g1 = document.getElementsByClassName('g1')[0];
var g2 = document.getElementsByClassName('g2')[0];
var plus = document.getElementById('add');
var sub = document.getElementById('subtract');
var res = document.getElementById('result');

var value1 = null;
var value2 = null;
var operation = null;

button.addEventListener('click', function (evt){

    if(evt.target.value === 'clr'){
        value1 = null;
        value2 = null;
        g1.innerHTML = 0;
        g2.innerHTML = 0;
    }

    if(evt.target.value === '=' ){
        value2 = parseFloat(g1.innerHTML);
        var result = new Calculator(value1, value2);
        console.log(result.calc(operation));
        g1.innerHTML = result.calc(operation);
        g2.innerHTML = 0;

    }


    if(g1.innerHTML === '0' && value1 === null && evt.target.value !== 'clr'){
        g1.innerHTML = evt.target.value;
    }
    else if(g1.innerHTML !== '0' && value1 === null){
        if (evt.target.classList.contains('operand')){
            value1 = parseFloat(g1.innerHTML);
            operation = evt.target.value;
            g1.innerHTML = '0';
            g2.innerHTML = value1 + evt.target.value;
        }
        else {
            g1.innerHTML += evt.target.value;
        }

    }
    else if(g1.innerHTML === '0'&& value1 !== null){
        console.log('test');
        g1.innerHTML = evt.target.value;
    }
    else if(g1.innerHTML !== '0'&& value1 !== null){
        console.log('yo');
        g1.innerHTML += evt.target.value;
    }


})

function Calculator(g1,g2){
    this.g1 = g1;
    this.g2 = g2;
    this.calc = function (operand){
        if(operand === '+'){
            return g1 + g2;
        }
        else if(operand === '-'){
            return g1 - g2;
        }
        else if(operand === '*'){
            return g1 * g2;
        }
        else if(operand === '/'){
            return g1 / g2;
        }
    }
}
