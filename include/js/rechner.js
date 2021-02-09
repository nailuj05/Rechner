var ageSlider = document.getElementById("age-slider");
var ageOutput = document.getElementById("age-output");
ageOutput.innerHTML = ageSlider.value;
ageSlider.oninput = function() {
    ageOutput.innerHTML = this.value;
}

var heihgtSlider = document.getElementById("height-slider");
var heightOutput = document.getElementById("height-output");
heightOutput.innerHTML = heihgtSlider.value;
heihgtSlider.oninput = function() {
    heightOutput.innerHTML = this.value;
}

var hairSlider = document.getElementById("hair-length-slider");
var hairOutput = document.getElementById("hair-length-output");
hairOutput.innerHTML = hairSlider.value;
hairSlider.oninput = function() {
    hairOutput.innerHTML = this.value;
}