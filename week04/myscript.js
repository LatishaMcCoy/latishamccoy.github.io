
var own = prompt("Sometimes things don't need to make sense. Enter your own word.")
var m = 1;
food = ["coffee", "tea", "cake", "kbbq","chocolate", "pizza", "cookies"];
places = ["mug", "music blasting", "bright sun", "fresh air"];
things = ["burnt", "bitter", "i love", "on an early morning","late at night"];

function rand_range(maximum) {
	"use strict";
	return Math.floor(Math.random() * (maximum + 1));
}

function choose(array) {
	"use strict";
	return array[rand_range(array.length / 2)];
}

function stanza() {
    "use strict";
    return ' <span>TASTE OF</span> ' + choose(food) + '<br \>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + choose(places) + '<br \>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' + choose(things) + choose(own);
}

function litany() {
    "use strict";
    var last, text, main = document.getElementById('main');
    if (8 > m) {
        m += 1;
        //after looped  times then return false (stop the loop)
    } else {
        //main.removeChild(document.getElementById('main').firstChild);
        return false;
    }
    last = document.createElement('div');
    last.innerHTML = stanza();
    main.appendChild(last);
}
function produce_litany() {
	"use strict";
	litany();
	setInterval(litany, 4000); //wait 4 seconds until next line
}


