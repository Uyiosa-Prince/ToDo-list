function completed() {
    document.getElementById("in-progress").style.display = "none";
    document.getElementById("completed").style.display = "block";
    // document.getElementById("no-task").style.display = "none";
}

function inProgress() {
    document.getElementById("in-progress").style.display = "block";
    document.getElementById("completed").style.display = "none";
    // document.getElementById("no-task").style.display = "none";

}