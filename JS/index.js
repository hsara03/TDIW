document.querySelector('.explore').addEventListener('click', function() {
    let rectangle = document.getElementById('rectangle');
    if (rectangle.style.transform) {
        rectangle.style.transform=null
    } else {
        rectangle.style.transform="translateX(-300px)"
    }
});
