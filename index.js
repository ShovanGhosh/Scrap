function date_year(){
var date = new Date();
var year=date.getFullYear();
return year;
}
document.getElementById("year").innerHTML=date_year();