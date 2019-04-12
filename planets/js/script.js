// Grabbing a handle on all the buttons
const mercuryButton = document.querySelector('.mercury-li');
const venusButton = document.querySelector('.venus-li');
const earthButton = document.querySelector('.earth-li');
const marsButton = document.querySelector('.mars-li');
const jupiterButton = document.querySelector('.jupiter-li');
const saturnButton = document.querySelector('.saturn-li');
const uranusButton = document.querySelector('.uranus-li');
const neptuneButton = document.querySelector('.neptune-li');


const planetDiv = document.getElementsByClassName('planet-div');
console.log(planetDiv);

const mercuryDiv = document.querySelector('.mercury-div');
const venusDiv = document.querySelector('.venus-div');
const earthDiv = document.querySelector('.earth-div');
const marsDiv = document.querySelector('.mars-div');
const jupiterDiv = document.querySelector('.jupiter-div');
const saturnDiv = document.querySelector('.saturn-div');
const uranusDiv = document.querySelector('.uranus-div');
const neptuneDiv = document.querySelector('.neptune-div');



// Event listeners
mercuryButton.addEventListener('click', (e) =>{
  for (var i = 0; i < planetDiv.length; i++) {
    planetDiv[i].style.display = 'none';
  }
  $(mercuryDiv).slideDown(1000);

})

venusButton.addEventListener('click', (e) =>{
  for (var i = 0; i < planetDiv.length; i++) {
    planetDiv[i].style.display = 'none';
  }
    $(venusDiv).slideDown(1000);
})

earthButton.addEventListener('click', (e) =>{
  for (var i = 0; i < planetDiv.length; i++) {
    planetDiv[i].style.display = 'none';
  }
  $(earthDiv).slideDown(1000);

})

marsButton.addEventListener('click', (e) =>{
  for (var i = 0; i < planetDiv.length; i++) {
    planetDiv[i].style.display = 'none';
  }
    $(marsDiv).slideDown(1000);
})

jupiterButton.addEventListener('click', (e) =>{
  for (var i = 0; i < planetDiv.length; i++) {
    planetDiv[i].style.display = 'none';
  }
    $(jupiterDiv).slideDown(1000);
})

saturnButton.addEventListener('click', (e) =>{
  for (var i = 0; i < planetDiv.length; i++) {
    planetDiv[i].style.display = 'none';
  }
    $(saturnDiv).slideDown(1000);
})

uranusButton.addEventListener('click', (e) =>{
  for (var i = 0; i < planetDiv.length; i++) {
    planetDiv[i].style.display = 'none';
  }
    $(uranusDiv).slideDown(1000);
})

neptuneButton.addEventListener('click', (e) =>{
  for (var i = 0; i < planetDiv.length; i++) {
    planetDiv[i].style.display = 'none';
  }
    $(neptuneDiv).slideDown(1000);
})
