let imageDiv = document.getElementById("image-grid-row");
imageDiv.setAttribute('class', "image-grid-column");
console.log(imageDiv);
// document.body.appendChild(imageDiv);


fetch('https://jsonplaceholder.typicode.com/photos?_limit=6')
.then((response) => response.json())
.then((result) => {

  result.map((value) =>{
    let key = value.url;
    let imgTg = document.createElement('img');
    (imgTg.src = `https://picsum.photos/102?random=${key}`);
    document.style.background = `https://picsum.photos/102?random=${Math.random()}`;
    imageDiv.appendChild(imgTg);


    document.querySelector(".save-btn").addEventListener("click", () => {
      (imgTg.src = `https://picsum.photos/102?random=${Math.random()}`);
      imageDiv.appendChild(imgTg);
  })
  })
})




