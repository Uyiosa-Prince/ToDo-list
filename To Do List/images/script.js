function completed() {
    getElementById('in-progress').style.display = 'none';
    getElementById('completed').style.display = 'inline-block';
}

function inProgress() {
    getElementById('in-progress').style.display = 'inline-block';
    getElementById('completed').style.display = 'none';
}