"use strict";

(function (){

// create a circle object
var circle = {
    radius: 3,
    getArea: function () {
        // todo: finish this method
        // hint: area = pi * radius^2 
        return (Math.PI * Math.pow(this.radius, 2)); // todo: return data
    },
    logInfo: function (round) {
        // todo: complete this method. if round is true, round the result to the nearest integer.
        if (round === true)
        {
            console.log("Area of a circle with radium: " + this.radius + ", is: " + Math.round(this.getArea()));
        }
        else
        {
            console.log('Area of a circle with radius: ' + this.radius + ', is: ' + this.getArea());    
        } 
    }
};

// log info about the circle
circle.logInfo(false);
circle.logInfo(true);

// todo:
// Change the radius of the circle to 5.
circle.radius = 5;

// log info about the circle
circle.logInfo(false);
circle.logInfo(true);

})();