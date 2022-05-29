var satSlider = document.getElementById("satRange");
    satOutput = document.getElementById("sat"),
    lumSlider = document.getElementById("lumRange"),
    lumOutput = document.getElementById("lum"),
    box = document.body,
    hueOutput = document.getElementById('hue'),
    hue = 6, 
    sat = 93, 
    lum = 71;

function resetColor() {
    hue = 0;
    sat = 100;
    lum = 100;

    populateStorage();
}
   
if(!localStorage.getItem("hue")) {
    populateStorage();
} else {
    setStyle();
}

function populateStorage() {
    localStorage.setItem("hue", hue);
    localStorage.setItem("sat", sat);
    localStorage.setItem("lum", lum);

    setStyle();
}

function setStyle() {
    hue = localStorage.getItem("hue");
    sat = localStorage.getItem("sat");
    lum = localStorage.getItem("lum");

    hueOutput.innerHTML = hue;
    satOutput.innerHTML = sat;
    satSlider.value = sat;
    lumOutput.innerHTML = lum;
    lumSlider.value = lum;

    updateColor();
}

window.onbeforeunload = function() {
    populateStorage();
}

document.addEventListener('mousewheel', function(e) {
    console.log(e.wheelDelta);
        if (e.wheelDelta > 0) {
            hue++;
        } else if (e.wheelDelta < 0) {
            hue--;
        }
    hue = positiveMap(hue, 360);
    updateColor();
    hueOutput.innerHTML = hue;

});


// Map j value to 360 degrees
function positiveMap(j, maxValue) {
    if (j < 0) {
        j = 359;
    } else if (j > maxValue) {
        j %= maxValue;
    }
    return j;
}

function updateColor() {
    document.body.style.backgroundColor = 'hsl('+hue+', '+sat+'%, '+lum+'%)';
    
}


// Update the current slider value (each time you drag the slider handle)
satSlider.oninput = function() {
  satOutput.innerHTML = this.value;
  sat = this.value;
  updateColor();

}
satSlider.ondblclick = function() {
    sat = 50;
    satOutput.innerHTML = sat;
    satSlider.value = sat;
    updateColor();
}
lumSlider.oninput = function() {
  lumOutput.innerHTML = this.value;
  lum = this.value;
  updateColor();
  if (lum < 20) {
      document.body.style.color = 'white';
  } else {
    document.body.style.color = 'black';
  }
}
lumSlider.ondblclick = function() {
    lum = 50;
    lumOutput.innerHTML = lum;
    lumSlider.value = lum;
    updateColor();
}
