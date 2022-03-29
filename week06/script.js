//info tab
fetch("https://api.jikan.moe/v4/anime/21")
  .then((response) => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error("NETWORK RESPONSE ERROR");
    }
  })
  .then(data => {
    console.log(data);
    displayAnime(data)
  })
  .catch((error) => console.error("FETCH ERROR:", error));

function displayAnime(data) {

const aboutDiv = document.getElementById("about");
    fetch("https://api.jikan.moe/v3/anime/21")
        .then(res => res.json())
        .then(data => {
            aboutDiv.innerHTML = `<img src="https://cdn.myanimelist.net/images/anime/6/73245l.jpg"/>
                                  <h1>${data.title_japanese}</h1>
                                  <p>${data.status} ${data.duration}</p>
                                  <p>${data.synopsis}</p>
                                  <p>${data.rating}</p>
                                  <p>${data.genres[0].name} ${data.genres[1].name} ${data.genres[3].name} ${data.genres[4].name}</p>`
                                  
           
    
        })
}

//characters tab
fetch("https://api.jikan.moe/v3/anime/21/characters_staff")
  .then((response) => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error("NETWORK RESPONSE ERROR");
    }
  })
  .then(data => {
    console.log(data);
    displayCharacter(data)
  })
  .catch((error) => console.error("FETCH ERROR:", error));

function displayCharacter(data) {

const characterDiv = document.getElementById("character");
    fetch("https://api.jikan.moe/v3/anime/21/characters_staff")
        .then(res => res.json())
        .then(data => {
            character.innerHTML = `<p>${data.characters[3].name}</p> <img src=${data.characters[3].image_url}/>
                                  <p>${data.characters[6].name}</p> <img src=${data.characters[6].image_url}/>
                                  <p>${data.characters[7].name}</p> <img src=${data.characters[7].image_url}/>
                                  <p>${data.characters[4].name}</p> <img src=${data.characters[4].image_url}/>
                                  <p>${data.characters[0].name}</p> <img src=${data.characters[0].image_url}/>
                                  <p>${data.characters[5].name}</p> <img src=${data.characters[5].image_url}/>
                                  <p>${data.characters[1].name}</p> <img src=${data.characters[1].image_url}/>
                                  <p>${data.characters[2].name}</p> <img src=${data.characters[2].image_url}/>
                                  <p>${data.characters[8].name}</p> <img src=${data.characters[8].image_url}/>
                                  <p>${data.characters[9].name}</p> <img src=${data.characters[9].image_url}/>`

                                  
           
    
        })
}

//trailer tab


fetch("https://api.jikan.moe/v3/anime/21/videos")
  .then((response) => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error("NETWORK RESPONSE ERROR");
    }
  })
  .then(data => {
    console.log(data);
    displayVideo(data)
  })
  .catch((error) => console.error("FETCH ERROR:", error));

function displayVideo(data) {

const trailerDiv = document.getElementById("trailer");
    fetch("https://api.jikan.moe/v3/anime/21/videos")
        .then(res => res.json())
        .then(data => {
            trailer.innerHTML = `<h2>${data.promo[2].title}</h2>
                                <iframe src=${data.promo[2].video_url}/iframe>`

               
    
        })
}





//random name generator

const names = ["Luffy", "Chopper", "Pekoms", "Vivi", "Sunny", "Aki", "Shanks", "Hawkins", "Senor Pink", "Doffy", "Kaido", "Pudding", "Nami", "Robin", "Boa", "Kuri/KataKuri", "LinLin", "Carrot", "Wado", "Zoro", "Silvers", "Belamy", "Buggy", "Ace", "Sabo", "Laboon", "Brulee", "Law", "Nika", "Marco/Maruko"];


const getRandomNumber = (max) => Math.floor(Math.random() * max);

const getRandomName = () => 
  `${names[getRandomNumber(names.length)]}`;

const setRandomName = () => {
  document.getElementById('random-name').innerText = getRandomName();
}

document.getElementById('jolly')
  .addEventListener('click', setRandomName);

setRandomName();


