$(document).ready(function () {
    $("#edificio").on('change',function (event) {
        $.get("/anuals/" + event.target.value + "", function (response, state) {
            console.log(response);
            $("#anual").empty();
            for(i=0; i<response.length; i++){
                $("#anual").append("<option value'"+response[i].id+"'>"+response[i].anual+"</option>");
            }
        });
    });
});
