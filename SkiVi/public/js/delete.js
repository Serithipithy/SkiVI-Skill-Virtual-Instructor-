$(document).ready(function() {

    $("#submit").click(function() {

        var skillname = $("#skill_name").val();
        var title = $("#course_title").val();
        //console.log(res);

        if (skillname.localeCompare("skill1") == 0) {
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_FA/api/delete.php?title='+ title,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#title").val("");
                    $("#statusText").html(e.message);
                }
            });
        }
        if (skillname.localeCompare("skill2") == 0) {
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_ORIGAMI/api/delete.php?title='+ title,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#title").val("");
                    $("#statusText").html(e.message);
                }
            });
        }
        if (skillname.localeCompare("skill3") == 0) {
            $.ajax({
                type: 'DELETE',
                url: 'http://localhost:8000/REST_API_SIGN_LNG/api/delete.php?title='+ title,
                error: function(e) {
                    console.log(e);
                },
                dataType: "json",
                contentType: "application/json",
                success: function(e) {
                    console.log(e.message);

                    $("#skill_name").val("");
                    $("#title").val("");
                    $("#statusText").html(e.message);
                }
            });
        }
    });
});