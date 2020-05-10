let numberOfSeasons = 6;
let numberOfEpisodes = 12;

let episodeTime = 45;
let commercialTime = 5;

let totalShowTime = (episodeTime + commercialTime) * numberOfSeasons * numberOfEpisodes;

let paragraph = document.querySelector('#info');
paragraph.innerText = `${numberOfSeasons} seasons, ${numberOfEpisodes} episodes per season
Total viewing time: ${totalShowTime} minutes`


const hoursPerDay = 24;
const minutesPerHour = 60;
const secondsPerMinute = 60;

const dayInput = document.querySelector('#days');
const calculatebutton = document.querySelector('#calculate');

const hours = document.querySelector('#hours');
const minutes = document.querySelector('#minutes');
const seconds = document.querySelector('#seconds');

calculate.addEventListener('click', () => {

    let days = dayInput.value;
    let calcHours = days * hoursPerDay;
    let calcMinutes = calcHours * minutesPerHour;
    let calcSeconds = calcMinutes * secondsPerMinute;

    hours.innerText = `${calcHours} hours`;
    minutes.innerText = `${calcMinutes} minutes`;
    seconds.innerText = `${calcSeconds} secondes`;

});

let Episode ={
    title : 'Northman',
    duration : '50',
    hasBeenWatched : true
}

let episodTitle = Episode.title;
let episodDuration = Episode.duration;
let hasBeenWatched = Episode.hasBeenWatched;

//document.querySelector('#episod').innerText = `Serie : ${episodTitle}, Duration : ${episodDuration} of hapiness, Watched : ${hasBeenWatched}`

document.querySelector('#episod').innerText = `Serie : ${episodTitle}, Duration : ${episodDuration} of hapiness,
 Watched : ${hasBeenWatched ? 'Already watched' : 'Not yet watched' } ` //vrai ou faux

 let epTitle = Episode.title;
 let epDuration = Episode.duration;

 class episode{
     constructor(title, duration, minutesWatched){
         this.title = title;
         this.duration = duration;
         this.minutesWatched = minutesWatched;

          if (duration == minutesWatched){
            this.hasBeenWatched = true
          } else if (minutesWatched < duration) {
            this.hasBeenWatched = false
        }

        if (duration == minutesWatched){
            this.watchedText = 'Deja regardé';
            this.continueWatching = false;
            this.time = 'Tout vu';
        }else if (minutesWatched > 0 && minutesWatched < duration){
          this.continueWatching = true;  
          this.watchedText = 'En cours';
          this.time = 'Il reste : ' + (duration - minutesWatched) + ' minutes';
        }else if (minutesWatched == 0){
          this.continueWatching = false;
          this.watchedText = 'Pas encore visionné';
          this.time = 'Rien vu';
        }

     }
  }
 
  let firstEpisode = new episode("La casa de papel", 45, 45);
 let secondEpisode = new episode("La casa de stone", 50, 40);
 let thirdEpisode = new episode("La casa de iron", 30, 0);
 

 document.querySelector('#first-episode-info').innerText = `Episode: ${firstEpisode.title}
Duration: ${firstEpisode.duration} min
${firstEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'},  
Etat : ${firstEpisode.watchedText}`;

document.querySelector('#second-episode-info').innerText = `Episode: ${secondEpisode.title}
Duration: ${secondEpisode.duration} min
${secondEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'},
Etat : ${secondEpisode.watchedText}`;

document.querySelector('#third-episode-info').innerText = `Episode: ${thirdEpisode.title}
Duration: ${thirdEpisode.duration} min
${thirdEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'},
Etat : ${thirdEpisode.watchedText}`;
  

document.querySelector('#visio1').innerText = `Visionné : ${firstEpisode.minutesWatched} minutes
${firstEpisode.time}`
document.querySelector('#visio2').innerText = `Visionné : ${secondEpisode.minutesWatched} minutes
${secondEpisode.time}`
document.querySelector('#visio3').innerText = `Visionné : ${thirdEpisode.minutesWatched} minutes
${thirdEpisode.time}`

/*
    let episo = [];
    episo.push(firstEpisode, secondEpisode, thirdEpisode, thirdEpisode);
    episo.pop();
    let numberOfEpisods = episo.length;
    document.querySelector('#episodes').innerText = numberOfEpisods;
  
    
  const body = document.querySelector('body');

for(let i = 0; i < 12; i++) {
  let newDiv = document.createElement('div');
  newDiv.classList.add('series-frame');
  let newTitle = document.createElement('h2');
  newTitle.innerText = 'The Story of Tau';
  let newParagraph = document.createElement('p');
  newParagraph.innerText = `${episo[i].title}
${episo[i].duration} minutes
${episo[i].watchedText}
`;
  newDiv.append(newTitle);
  newDiv.append(newParagraph);
  if (episo[i].continueWatching) {
    let newButton = document.createElement('button');
    newButton.innerText = 'Continue watching';
    newParagraph.append(newButton);
  }
  body.append(newDiv);
}*/

  const nombre = document.querySelector("#nombre");
  const valide = document.querySelector("#valide");

  valide.addEventListener('click', () => {

    let nb = nombre.value;

    if (nb < 10){
        alert("T'es loin");
    }else{
        alert("Y a encore du chemin");
    }
     
  });

  const calculateAverageRating = (ratings) => {

    if(ratings.length === 0) {
      return 0;
    }
    
    let sum = 0;
    for (let rating of ratings) {
      sum += rating;
    }
    
    return sum / ratings.length;
    
  }

  
  const tauRatings = [5, 4, 5, 5, 1, 2];
  const colinRatings = [5, 5, 5, 4, 5];
  
  const tauAverage = calculateAverageRating(tauRatings);
  const colinAverage = calculateAverageRating(colinRatings);
  
  if (tauAverage && colinAverage) {
    document.querySelector('#tau-score').innerText = tauAverage.toFixed(1) + ' stars';
    document.querySelector('#colin-score').innerText = colinAverage.toFixed(1) + ' stars';
    document.querySelector('#clara-score').innerText = `${calculateAverageRating([]) === 0 ? 'No ratings' : calculateAverageRating([]) + ' stars'}`
  }