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

let episodTitle = 'Northman';
let episodDuration = '50 minutes';
let hasBeenWatched = true;

document.querySelector('#episod').innerText = `Serie : ${episodTitle}, Duration : ${episodDuration} of hapiness, Watched : ${hasBeenWatched}`