function deleteUser (eid) {
    console.log("Inside delete....");

    const host = window.location.host;

    var url = "http://" + host + "/deleteUser.php?eid=" + eid;

    fetch(url, {
        method: "GET"
    }).then(() => {
        console.log("Successfully  DELETED! eid " + eid);
        window.location.reload();
    }).catch(() => {
        console.log("Failed DELETE " + eid);
    });

}

function manageUser (eid) {

}