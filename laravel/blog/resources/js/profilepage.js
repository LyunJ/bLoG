function setPortfolioImage(event, index) {
    var reader = new FileReader();

    reader.onload = function(event) {
        document
            .querySelector("img#portfolio-image-" + index)
            .setAttribute("src", event.target.result);
    };

    reader.readAsDataURL(event.target.files[0]);
}

function test2() {
    var form = $("form")[0];
    var formData = new FormData(form);

    $.ajax({
        cache: false,
        url: "${pageContext.request.contextPath}/profiles", // 요기에
        processData: false,
        contentType: false,
        type: "POST",
        data: formData,
        success: function(data) {
            var jsonObj = JSON.parse(data);
        }, // success

        error: function(xhr, status) {
            alert(xhr + " : " + status);
        }
    }); // $.ajax */
}

module.exports = {
    setPortfolioImage
};
