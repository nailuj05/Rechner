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