$(document).ready(function() {
	$("#sidebar-left").stick_in_parent();
    $("#sidebar-right").stick_in_parent();
    $("#manually").click(function() {
        $("#location-select").toggle();
        $("#location").toggle();
        var text = $(this).text() == 'Enter Manually' ? 'Select Box' : 'Enter Manually';
        $(this).text(text);
    });

    $("#job-btn").click(function() {
        var nextId = $(".steps li.active").next().attr("id");
        console.log(nextId);
        $(".modal-body").removeClass("active");
        $(".steps li").removeClass("active");
        $(".steps li#" + nextId).addClass("active");
        $(".modal-body#" + nextId).addClass("active");
        setInterval(function() {
            if ($('.requirements').hasClass(".active")) {
                $('#job-btn').css("display", "none");
                $('#submit-job').css("display", "inline");
            } else {
                $('#job-btn').css("display", "inline");
                $('#submit-job').css("display", "none");
            }
        }, 3000);
    });
    $(".steps li").click(function() {
        var active = $(this).attr("id");
        $(".modal-body").removeClass("active");
        $(".steps li").removeClass("active");
        $(".steps li#" + active).addClass("active");
        $(".modal-body#" + active).addClass("active");
        if ($('.requirements').hasClass(".active")) {
            $('#job-btn').css("display", "none");
            $('#submit-job').css("display", "inline");
        } else {
            $('#job-btn').css("display", "inline");
            $('#submit-job').css("display", "none");
        }
    });
});