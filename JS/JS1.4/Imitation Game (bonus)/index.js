'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

function letterA()
{
    return "A";
}

function letterB()
{
    return "B";
}

function letterC()
{
    return "C";
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

var result;

//#1
result = letterA();
console.log(result);

//#2
result += letterC();
console.log(result);

//#3
result = letterA();
for (i = 0; i < 2; i++){
	result += letterB();
}
for (i = 0; i < 3; i++){
	result += letterC();
}

//#4
result = "";
for (i = 0; i < 2; i++){
	result += letterC() + letterB();
}
	result += letterA();

//#4
result = letterC() + letterB();
result += result + letterA();

//#5
function letterCB(){
	result = letterC() + letterB() + "!";
}
	result = letterCB() + "C " + letterCB() + "B " + letterCB() + "A";