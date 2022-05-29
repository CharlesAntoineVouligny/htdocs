function setStyle() {
    var hue = localStorage.getItem("hue");
    var sat = localStorage.getItem("sat");
    var lum = localStorage.getItem("lum");

    document.body.style.backgroundColor = 'hsl(' + hue + ', ' + sat + '%, ' + lum + '%)';
}