
function show_fircast( data ){
 // var myObj = { "name":"John", "age":30, "car":null };
 var myObj = JSON.parse(data);
 var day = '';
 var high = '';
 var low = '';
 var text = '';
 var code = '';

 day = myObj.forecasts[1].day;
 high = myObj.forecasts[1].high;
 low = myObj.forecasts[1].low;
 text = myObj.forecasts[1].text;
 code = myObj.forecasts[1].code;
    // $("#day").show(3000).html(day).addClass('success');
    // $("#high").show(3000).html(high).addClass('success');
 document.getElementById("day").innerHTML = 'day:' +' '+day;
 document.getElementById("high").innerHTML = 'High:' +' ' + high;
 document.getElementById("low").innerHTML = 'Low:' +' '+low;
 document.getElementById("text").innerHTML = 'Status:' +' '+text;
 document.getElementById("code").innerHTML = 'Code:' +' '+code;
 //$("forcast").show();
}