function somar(){
var n1=document.getElementById("tn1")
var n2=document.getElementById("tn2")
var res=document.getElementById("res")
var n1 = Number(n1.value)
var n2 = Number(n2.value)
var soma = n1 + n2
res.innerText = `A Soma entre ${n1} e ${n2} é igual a ${soma}`
}
function subtrair(){
var n1=document.getElementById("tn1")
var n2=document.getElementById("tn2")
var res=document.getElementById("res")
var n1 = Number(n1.value)
var n2 = Number(n2.value)
var sub = n1 - n2
res.innerText = `A Subtração entre ${n1} e ${n2} é igual a ${sub}`
}
function multiplicar(){
var n1=document.getElementById("tn1")
var n2=document.getElementById("tn2")
var res=document.getElementById("res")
var n1 = Number(n1.value)
var n2 = Number(n2.value)
var multi = n1 * n2

res.innerText = `A Multiplicação entre ${n1} e ${n2} é igual a ${multi}`
}
function dividir(){
var n1=document.getElementById("tn1")
var n2=document.getElementById("tn2")
var res=document.getElementById("res")
var n1 = Number(n1.value)
var n2 = Number(n2.value)
var divi = n1 / n2
res.innerText = `A Divisão entre ${n1} e ${n2} é igual a ${divi}`
}