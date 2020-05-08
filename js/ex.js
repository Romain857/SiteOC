let numberOfCats = 2;

let numberOfDogs = 4;

let numberOfPets = numberOfCats + numberOfDogs;  // - ; * ; /

let cookies = 10;
cookies -= 2;           //8
cookies +=12;           //20

let numberCookies = 10;
numberCookies++;            //11
numberCookies--;            //10

let poop = 2;
poop *= 6;      //12
poop /= 3;      //4

let integer = 1 + 2;  //3
let wird = 0.1 + 0.2; //0.300000000000004


let firstName = 'jean';
let lastName = 'tom';

console.log(typeof firstName + ' ' + lastName);

let te = true;
console.log(typeof episodeTime);
console.log(typeof te);

alert('hi');
document.write("azertyuio");

let epi = ["jean", "michel", "jose"];
console.log(epi);

let number = 5;
let copie = number;

console.log(copie);

const tab = [
    "jean",
    "michel",
    "jo"
];

tab.push("jules");
tab.unshift("pierrick");
tab.pop();

console.log(tab);

let bonjour = true;
let welcome = '';

if (bonjour) {
  welcome = 'Yep';
}else {
  welcome = 'nop';
}

console.log(welcome);

let p = 5;
  let m = '5';            // == que valeur === valeur et type
  let welcom = '';

  if (p === m){
    welcom = 'yes p'; 
  } else {
    welcom = 'nop m';
  }

  console.log(welcom);


let userLoggedIn = true;
let userHasPremiumAccount = true;
let userHasMegaPremiumAccount = false;

userLoggedIn && userHasPremiumAccount; // true
userLoggedIn && userHasMegaPremiumAccount; // false

userLoggedIn || userHasPremiumAccount; // true
userLoggedIn || userHasMegaPremiumAccount; // true

!userLoggedIn; // false
!userHasMegaPremiumAccount; // true


// switch

let fUser = {
  nom : 'jean',
  age : 20, 
  niveau : 'faible'
}

let sUser = {
  nom : 'michel',
  age : 22, 
  niveau : 'moyens'
}

let tUser = {
  nom : 'joe',
  age : 30, 
  niveau : 'fort'
}

switch(fUser.niveau) {
  case 'faible' : 
  console.log('1');
  break;

  case 'moyens' : 
  console.log('2');
  break;

  case 'fort' : 
  console.log('3');
  break;

  default : 
  console.log('nop')

}