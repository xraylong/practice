function myFunction() {
 document.getElementById("demo").innerHTML = "Paragraph changed.";
}
document.getElementById("random_num").innerHTML = 4 + 5;


function alertmsg() {
	alert("This is a\nmessage for you"); //use  \n to create a space for alert and location.hostname for current website
}

console.log("A newline character is written like \\n."); //how to write a backslash without it trying to do any funky stuff
console.log(`I can put strings and operations like this ${5%2}`); //backticks can allow you to use strings and operations together
console.log(typeof 'x'); //This will be a string, a number would result in an interger
console.log(4 > 2); //boolean value will show this as true
console.log('apple' > 'zap'); //strings also work the same way with regards to the first letter. z is more than a
console.log(Math.min(2, 4) + 100); //grabs the smallest number when 2 + 100 or 4 + 100
console.log(1 + 1 == 2 && 10 * 4 > 50); //will result in false because it's "and"
console.log(Math.max(2, 4)); //grabs the largest number
console.log(1 + 1 == 2 || 10 * 4 > 50); //one expression is true. with "or" operator, it will be true
console.log(true ? 1 : 2);
// → 1
console.log(false ? 1 : 2);

const power = function(base, exponent) {  //
  let result = 1;
  for (let x = 0; x < exponent; x++) {
    result *= base
  }
  return result;
};

console.log(power(2, 10));


// → 1024
// → 2
/* let theNumber = Number(prompt("Pick a number"));
if (!Number.isNaN(theNumber)) {                        //if number is not a non-number, return square root of number, else, ask them why they didn't give number
  console.log("Your number is the square root of " +
              theNumber * theNumber);
} else {
  console.log("Hey. Why didn't you give me a number?");
}
let number = 0;
while (number <= 12) {
  console.log(number);
  number = number + 2;
}    //counts even numbers only
for (let number = 0; number <= 12; number = number + 2) {
  console.log(number);
}    //same thing as while loop
*/