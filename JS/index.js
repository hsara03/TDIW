document.querySelector('.explore').addEventListener('click', function() {
    let rectangle = document.getElementById('rectangle');
    if (rectangle.style.width === '0px' || rectangle.style.width === '') {
        rectangle.style.width = '300px';
        rectangle.style.left = '0px';
    } else {
        rectangle.style.width = '0px';
        rectangle.style.left = '-300px';
    }
});
