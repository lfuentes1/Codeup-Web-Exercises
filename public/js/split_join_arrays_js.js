"use strict";

// todo:
// Copy the array of planets you created in the last lesson.
var planets = ["Mercury", "Venus", "Earth", "Mars", 
			"Jupiter", "Saturn", "Uranus", "Neptune", "Pluto"];
console.log (planets);

// todo: Join the planets array with pipes (|) to create a variable named 'planetsAsString'.
var planetsAsString = planets.join("|");
console.log(planetsAsString);


// todo: Split the 'planetsAsString' variable by pipes (|) to create a variable named 'planetsAsArray'.
var planetsAsArray = planetsAsString.split("|");
console.log(planetsAsArray);