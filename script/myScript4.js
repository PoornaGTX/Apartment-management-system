// submit button for the buy now form
function enableButton() {
    if (document.getElementById("policy").checked) {
        document.getElementById("btn1").disabled = false;
    } else {
        document.getElementById("btn1").disabled = true;
    }
}

//changing photos on click
function loadPhoto(imageNumber) {
    if (imageNumber == "image1") {
        var temporarySource = document.getElementById("image1").src;

        document.getElementById("image1").src = document.getElementById("bigImg").src;

        document.getElementById("bigImg").src = temporarySource;
    } else if (imageNumber == "image2") {
        var temporarySource = document.getElementById("image2").src;

        document.getElementById("image2").src = document.getElementById("bigImg").src;

        document.getElementById("bigImg").src = temporarySource;
    } else {
        var temporarySource = document.getElementById("image3").src;

        document.getElementById("image3").src = document.getElementById("bigImg").src;

        document.getElementById("bigImg").src = temporarySource;
    }


}