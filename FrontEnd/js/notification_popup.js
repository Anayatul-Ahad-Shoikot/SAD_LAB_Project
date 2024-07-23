var box = document.getElementById('box');
var show = false;
function toggleNotifi() {
    if (show) {
        box.style.display = 'none';
        show = false;
    } else {
        box.style.display = 'block';
        show = true;
    }
}
