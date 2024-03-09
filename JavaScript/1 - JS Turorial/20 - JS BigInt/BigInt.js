// Interger and BigInt
let x1 = 9999999999999999;
let x2 = BigInt("9999999999999999");
let x3 = 123456789012345678901234567890n;
let x4 = BigInt("123456789012345678901234567890");
let x5 = 1278547566797985678697n;
let x6 = 4383487364754767647644n;
let result = x5*x6;
let result1 = x5+x6;
let y1 = 5n;
let y2 = Number(y1)/2;
document.getElementById("demo1").innerHTML = x1+ "<br>"+
                                             x2+"<br>"+
                                             typeof x2+"<br><br>"+
                                             x3+"<br>"+
                                             x4+"<br><br>"+
                                             "<h4>BigInt Operator</h4>"+
                                             "1278547566797985678697n * 4383487364754767647644n : "+result+"<br>"+
                                             "1278547566797985678697n + 4383487364754767647644n : "+result1+"<br>"+
                                             "<h4>BigInt Decimals</h4>"+
                                             "5n/2 : "+y2;
        
// Hex, Octal and Binary
let hex = 0x20000000000003n;
let oct = 0o400000000000000003n;
let bin = 0b100000000000000000000000000000000000000000000000000011n;
let x = 9007199254740992 === 9007199254740993;
                                             
document.getElementById("demo2").innerHTML = "hex 0x20000000000003n : "+hex + "<br>" + 
                                            "oct = 0o400000000000000003n : "+oct + "<br>" + 
                                            "bin = 0b100000000000000000000000000000000000000000000000000011n : "+bin+"<br>"+
                                            "9007199254740992 === 9007199254740993 : "+x;

// Minimum and Maximum Safe Integers

let y = Number.MAX_SAFE_INTEGER;
let z = Number.MIN_SAFE_INTEGER;

document.getElementById("demo3").innerHTML = "Number.MAX_SAFE_INTEGER : "+y+"<br>"+
                                            "Number.MIN_SAFE_INTEGER : "+z;


// New Number Methods
// Number.isInteger()
// Number.isSafeInteger()

document.getElementById("demo4").innerHTML = "Number.isInteger(52) : "+Number.isInteger(52)+"<br>"+
                                            "Number.isInteger(52.3) : "+Number.isInteger(52.3)+"<br>"+
                                            "Number.isSafeInteger(52) : "+Number.isSafeInteger(52)+"<br>"+
                                            "Number.isSafeInteger(12345678901234567890) : "+Number.isSafeInteger(12345678901234567890)+"<br>";


// Safe integers are all integers from -(253 - 1) to +(253 - 1).
// This is safe: 9007199254740991. This is not safe: 9007199254740992.