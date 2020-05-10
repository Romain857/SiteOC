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

// boucle

let nombres = 12;

for(let j = 0; j < nombres; j++){
  console.log('bonjour');
}
console.log('par ici');


var personnes = 10;

for (siege = 0; siege < personnes; siege++){
  console.log("Personne assise");
}
console.log('Tout le monde est assis');


// in
const personnes = [
  'Jean',
  'michel',
  'Yves',
  'Marcel'
]

for (let i in personnes){
  console.log('Le passager ' + personnes[i] + ' est assis')
}

// of
const habitant = [
  'Francais',
  'Belge',
  'Espagnol',
  'anglais'
]

for(let habitants of habitant){
  console.log(habitants + ' est chez lui');
}


// tableau plus complex -> of
const personnes = [
  {
    nom : 'jean',
    numero : 1
  },
  {
    nom : 'michel',
    numero : 2
  },
  {
    nom : 'jo',
    numero : 3
  },
  {
    nom : 'gilles',
    numero : 4,
  }

]

for(let i of personnes){
  console.log(i.nom + ' possède le numéro ' + i.numero);
}


let seatsLeft = 10;
let passengersStillToBoard = 8;

let passengersBoarded = 0;

while (seatsLeft > 0 && passengersStillToBoard > 0) {
    passengersBoarded++; // un passager embarque
    passengersStillToBoard--; // donc il y a un passager de moins à embarquer
    seatsLeft--; // et un siège de moins
}

console.log(passengersBoarded);
console.log(passengersStillToBoard); // imprime 8, car il y a 8 passagers pour 10 sièges
console.log(seatsLeft);



// fonction
const somme = (nombre1, nombre2) => {
  const result = nombre1 + nombre2;
  return result;
}

result = somme(6,7);
console.log(result);