class episode{
    constructor(title, duration, /*minutesWatched*/ hasBeenWatched){
        this.title = title;
        this.duration = duration;
        //this.minutesWatched = minutesWatched;
        this.hasBeenWatched = hasBeenWatched;

/*
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
       }*/
       
    }
 }

 let episodes = [
   new episode("La casa de papel", 45, 45, true),
   new episode("La casa de stone", 50, 40, false),
   new episode("La casa de iron", 30, 0, false),
 ];


 for(let episo of episodes){
     episo.hasBeenWatched = false;
 }
   
 const body = document.querySelector('body');
/*
for(let episo of episodes) {
 let newDiv = document.createElement('div');
 newDiv.classList.add('series-frame');
 let newTitle = document.createElement('h2');
 newTitle.innerText = 'The Story of Tau';
 let newParagraph = document.createElement('p');
 newParagraph.innerText = `${episo.title}
${episo.duration} minutes
${episo.watchedText}
`;
 newDiv.append(newTitle);
 newDiv.append(newParagraph);
 if (episo.continueWatching) {
   let newButton = document.createElement('button');
   newButton.innerText = 'Continue watching';
   newParagraph.append(newButton);
 }
 body.append(newDiv);
}*/

for(let episo of episodes) {
  let newDiv = document.createElement('div');
  newDiv.classList.add('series-frame');
  let newTitle = document.createElement('h2');
  newTitle.innerText = 'The Story of Tau';
  let newParagraph = document.createElement('p');
  newParagraph.innerText = `${episo.title}
${episo.duration} minutes
${episo.hasBeenWatched ? 'Already been watched' : 'Not yet watched'}`;
  newDiv.append(newTitle);
  newDiv.append(newParagraph);
  body.append(newDiv);
}