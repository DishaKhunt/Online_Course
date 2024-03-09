let x = 6;
let x1 = 1/0;
let x2 = -1/0;
let epsilon = Number.EPSILON;
let max_value = Number.MAX_VALUE;
let min_value = Number.MIN_VALUE;
let max_safe_int = Number.MAX_SAFE_INTEGER;
let min_safe_int = Number.MIN_SAFE_INTEGER;
let positive_infinity = Number.POSITIVE_INFINITY;
let negative_infinity = Number.NEGATIVE_INFINITY;
let not_a_Number = Number.NaN;

document.getElementById("demo1").innerHTML = " Number.EPSILON : "+epsilon+"<br><br>"+
                                            "Number.MAX_VALUE : "+max_value+"<br>"+
                                            "x.MAX_VALUE : "+x.MAX_VALUE+"<br><br>"+
                                            "Number.MAX_VALUE : "+min_value+"<br><br>"+
                                            "Number.MAX_SAF_INTEGER : "+max_safe_int+"<br><br>"+
                                            "Number.MIN_SAF_INTEGER : "+min_safe_int+"<br><br>"+
                                            "Number.POSITIVE_INFINITY : "+positive_infinity+"<br>"+
                                            "1/0 : "+x1+"<br><br>"+
                                            "Number.NEGATIVE_INFINITY : "+negative_infinity+"<br>"+
                                            "-1/0 : "+x2+"<br><br>"+
                                            "Number.NaN : "+not_a_Number+"<br>"+
                                            "100/'Apple' : "+100/"Apple";