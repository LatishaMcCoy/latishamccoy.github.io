var t = 0,


people = [
'Fairy',
'Jedi',
'Remorseful Toy Maker',
'Elf',
'Witch',
'Hermit',
'Baby Dragon',
'Mad Scientist',
'Pastel Vampire',
'Criminal',
'Gladiator',
'Anime Protagonist',
'Anime Antagonist',
'Clown',
'God',
'Goddess',
'King',
'Queen',
'Hitman',
'Beast',
'Alien',
'Sentient Object',
'Woman',
'Mushroom',
'Frog',
'Perfect Doll',
'Demon',
'Angel',
'Tracking',
'Android',
'Mermaid',
'Florist',
'Gamer',
'Soft Boy',
'Siren',
'Half Human/Half Magical Beast Hybrid'
],


composition = [
'Head',
'Shoulders & Up',
'Full Body',
'Sketch',
'Full Render',
'3/4 Position',
'Side Profile',
'Full Body w/ Background',
'Shoulders & Up w/ Background',
'Hair Style',
'Half Render',
'Monochromatic',
'Black & White'
],


places_things = [
'Ancient Egypt',
'Ancient Roman Temple',
'Tranquiel Lake',
'Ocean',
'Forest',
'The City',
'College',
'Farmhouse',
'Middle of Space',
'Pet Shop',
'Waterfall',
'Under the Aurora Borealis',
'In the Sky',
'Among the Clouds',
'Library',
'Rooftop',
'Dystopian City',
'Rainforest',
'Under a Tree',
'On a Cliffside',
'Garden',
'Boggy Swamp',
'Wasteland',
'Harajuku, Tokyo alleyway',
'Coffee & Dessert Shop',
'Office',
'In Front of a Willow Tree',
'During Sunset',
'During Sunrise'
],


specific_traits = [
'Purple Glowing Eyes',
'Fangs',
'Short Hair',
'Long Hair',
'Bushy eyebrows',
'Long limbs',
'Muscular',
'Short',
'Tall',
'Wings',
'Reading Glasses',
'Sunglasses',
'Tired Eyes',
'Wide Eyes',
'Long eyelashes',
'Small nose',
'Button nose',
'Wide nose',
'Round face',
'Sharp cheekbones',
'Small mouth',
'Plump Lips',
'Shappy hair',
'Curly Hair',
'Coily Hair',
'Straight Hair',
'Sharp Jawline',
'Round Jawline',
'Horns'

];

accessories = [
'Tattoo(s)',
'Piercing(s)',
'Rings',
'Lipstick',
'Eyeshadow',
'Lace Gloves',
'leather Gloves',
'Harness',
'Flowers',
'Mask',
'Necklace(s)'

];

const getRandomNumber = (max) => Math.floor(Math.random() * max);

const getRandomIdea = () => 
  `${people[getRandomNumber(people.length)]}` + "<br>"  +  `${places_things[getRandomNumber(places_things.length)]}` + 
    "<br>" + `${accessories[getRandomNumber(accessories.length)]}` + "<br>" + `${specific_traits[getRandomNumber(specific_traits.length)]}` +
    "<br>" + `${composition[getRandomNumber(composition.length)]}`;


const setRandomName = () => {
    results = document.getElementById('results');

    random = document.getElementById('random-idea');
    random.innerHTML = getRandomIdea();
    results.appendChild(random);
}

document.getElementById('idea-generate-btn')
  .addEventListener('click', setRandomName);

setRandomName();

