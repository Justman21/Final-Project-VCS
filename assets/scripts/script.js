/*Menu isskleidimas */

var menu = document.getElementById('menu');
var menuitem = document.querySelectorAll(".dropdown-content a");

menu.addEventListener("click", function(){

	if(this.getAttribute("class") == null || this.getAttribute("class") == "") {

		var i = menuitem.length - 1;
		var interval = setInterval(function() { 
			menuitem[i].classList.add("opened"); 
			console.log("elementas i = " + i + " jo klase: " + menuitem[i].getAttribute("class"));
			i--;
			if(i < 0){
				clearInterval(interval);
				console.log("interval1 sustabdytas");
			}
		}, 167);
		setTimeout(function(){	// neprideda klases, kol nesibaigia intervalas, du kart paspaudus, nenusimusa transition'as.
			menu.classList.add("active");
		}, 850);
		// nukillint intervala kita, paspaudus
	} else {

		var j = 0;
		var interval2 = setInterval(function(){
			menuitem[j].classList.remove("opened");
			console.log("elemento j = " + j + " jo klase: " + menuitem[j].getAttribute("class"));
			j++;
			if(j >= menuitem.length) {
				clearInterval(interval2);
				console.log("interval22 sustabdytas");
			}
		}, 167);
		setTimeout(function(){
			menu.classList.remove("active");
		}, 850);
	}
});
/* Menu scroll'as*/

for (var i = 0; i < menuitem.length; i++) {
  
  menuitem[i].addEventListener("click", function(event) {
    
    event.preventDefault();
    
    var section = document.querySelector(this.getAttribute("href"));
    
    window.scroll({
      top: section.offsetTop, 
      left: 0, 
      behavior: 'smooth'
    });
    3
  });
}

window.addEventListener('load', function() {

		// setTimeout(function(){
		document.body.classList.add('loaded');
		// }, 3000);
});


