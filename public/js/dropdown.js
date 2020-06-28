$("#washa").change(function (event) {
    $.get("charts/" + event.target.value + "", function (response, y) {
        console.log(5*5);

    })
});
