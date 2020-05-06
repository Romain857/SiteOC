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
     constructor(title, duration, hasBeenWatched){
         this.title = title;
         this.duration = duration;
         this.hasBeenWatched = hasBeenWatched;
     }
 }

 let firstEpisode = new episode("La casa de papel", 45, true);
 let secondEpisode = new episode("La casa de stone", 50, false);
 let thirdEpisode = new episode("La casa de iron", 30, true);

 document.querySelector('#first-episode-info').innerText = `Episode: ${firstEpisode.title}
Duration: ${firstEpisode.duration} min
${firstEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;

document.querySelector('#second-episode-info').innerText = `Episode: ${secondEpisode.title}
Duration: ${secondEpisode.duration} min
${secondEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;

document.querySelector('#third-episode-info').innerText = `Episode: ${thirdEpisode.title}
Duration: ${thirdEpisode.duration} min
${thirdEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;
  
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
  ${episo[i].hasBeenWatched ? 'Already been watched' : 'Not yet watched'}`;
    newDiv.append(newTitle);
    newDiv.append(newParagraph);
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