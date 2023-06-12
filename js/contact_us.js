function showAnswer(qid) {
    const host = window.location.host;

    var url = "http://" + host + "/getAnswer.php?qid=" + qid;

    fetch(url, {
        method: "GET"
    }).then((response) => response.json())
        .then(json => {
            Swal.fire(JSON.stringify(json) == null ? "No Answer yet!" : JSON.stringify(json));
        })
    .catch((error) => {
        console.log("Failed getAnswer " + error);
    });
}