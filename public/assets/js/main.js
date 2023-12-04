//User Type
$("#Add_UserTypeForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_UserTypeForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect = $('meta[name="base_url"]').attr("content") + "/user-type";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_UserTypeForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_UserTypeForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_UserTypeForm")[0];
    var id = $("#user_type_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/user-type/" + id;
    var redirect = $('meta[name="base_url"]').attr("content") + "/user-type";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
//Directors
$("#Add_directorForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_directorForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect =
        $('meta[name="base_url"]').attr("content") + "/director-lists";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_directorForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_directorForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_directorForm")[0];
    var id = $("#director_id").val();
    var formData = new FormData(form);
    var update = $('meta[name="base_url"]').attr("content") + "/director/" + id;
    var redirect =
        $('meta[name="base_url"]').attr("content") + "/director-lists";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
//Marketing Manager
$("#Add_marketingmanagerForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_marketingmanagerForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect =
        $('meta[name="base_url"]').attr("content") + "/marketing-manager-lists";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_marketingmanagerForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_marketingmanagerForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_marketingmanagerForm")[0];
    var id = $("#marketing_manager_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/marketing-manager/" + id;
    var redirect =
        $('meta[name="base_url"]').attr("content") + "/marketing-manager-lists";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
//Marketing supervisor
$("#Add_marketingSupervisorForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_marketingSupervisorForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect =
        $('meta[name="base_url"]').attr("content") +
        "/marketing-supervisor-lists";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_marketingSupervisorForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_marketingSupervisorForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_marketingSupervisorForm")[0];
    var id = $("#marketing_supervisor_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") +
        "/marketing-supervisor/" +
        id;
    var redirect =
        $('meta[name="base_url"]').attr("content") +
        "/marketing-supervisor-lists";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
//Marketing executive
$("#Add_marketingExecutiveForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_marketingExecutiveForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect =
        $('meta[name="base_url"]').attr("content") +
        "/marketing-executive-lists";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_marketingExecutiveForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_marketingExecutiveForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_marketingExecutiveForm")[0];
    var id = $("#marketing_executive_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") +
        "/marketing-executive/" +
        id;
    var redirect =
        $('meta[name="base_url"]').attr("content") +
        "/marketing-executive-lists";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
// Staff Details
$("#Add_staff_detailsForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_staff_detailsForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect =
        $('meta[name="base_url"]').attr("content") + "/staff-details";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_staff_detailsForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_staff_detailsForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_staff_detailsForm")[0];
    var id = $("#staff_detail_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/staff-detail/" + id;
    var redirect =
        $('meta[name="base_url"]').attr("content") + "/staff-details";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
//Project Type
$("#add_projectform").submit(function (e) {
    e.preventDefault();
    var form = $("#add_projectform")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect = $('meta[name="base_url"]').attr("content") + "/project-type";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                console.log(data.message);

                $("#add_projectform")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});

$("#edit_projectform").submit(function (e) {
    e.preventDefault();
    var form = $("#edit_projectform")[0];
    var id = $("#project_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/project-type/" + id;

    var redirect = $('meta[name="base_url"]').attr("content") + "/project-type";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
//Branch
$("#Add_branchForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_branchForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect = $('meta[name="base_url"]').attr("content") + "/branch";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_branchForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_branchForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_branchForm")[0];
    var id = $("#branch_id").val();
    var formData = new FormData(form);
    var update = $('meta[name="base_url"]').attr("content") + "/branch/" + id;
    var redirect = $('meta[name="base_url"]').attr("content") + "/branch";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
//Relationship Type
$("#add_relationshipform").submit(function (e) {
    e.preventDefault();
    var form = $("#add_relationshipform")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#add_relationshipform")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});

$("#edit_relationshipform").submit(function (e) {
    e.preventDefault();
    var form = $("#edit_relationshipform")[0];
    var id = $("#relation_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/relationship/" + id;
    var redirect = $('meta[name="base_url"]').attr("content") + "/relationship";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});

//Designation
$("#add_designationForm").submit(function (e) {
    e.preventDefault();
    var form = $("#add_designationForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect = $('meta[name="base_url"]').attr("content") + "/designation";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#add_designationForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});

$("#Edit_designationForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_designationForm")[0];
    var id = $("#designation_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/designation/" + id;
    var redirect = $('meta[name="base_url"]').attr("content") + "/designation";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});

//Direction
$("#Add_directionForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_directionForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect = $('meta[name="base_url"]').attr("content") + "/direction";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_directionForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_directionForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_directionForm")[0];
    var id = $("#direction_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/direction/" + id;
    var redirect = $('meta[name="base_url"]').attr("content") + "/direction";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
// Marketing Type
$("#Add_MarketingTypeForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_MarketingTypeForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect = $('meta[name="base_url"]').attr("content") + "/marketing";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_MarketingTypeForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_MarketingTypeForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_MarketingTypeForm")[0];
    var id = $("#marketing_type_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/marketing/" + id;
    var redirect = $('meta[name="base_url"]').attr("content") + "/marketing";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});


// Page

$("#Add_pageForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_pageForm")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect = $('meta[name="base_url"]').attr("content") + "/pages";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_pageForm")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.reload();
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});

$("#Edit_pageForm").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_pageForm")[0];
    var id = $("#page_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/pages/" + id;
    var redirect = $('meta[name="base_url"]').attr("content") + "/pages";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});


//pincode generate
$(document).on("keyup", "#pincode", function () {
    let pincode = $(this).val();
    let url =
        $('meta[name="base_url"]').attr("content") +
        "/pincode-generate/" +
        pincode;
    if (pincode.length == 6) {
        $.ajax({
            url: url,
            method: "GET",
            data: {
                pincode: pincode,
            },
            contentType: false,
            processData: false,
            success: function (res) {
                console.log(res.state);
                var text = "";
                for (var i = 0; i < res.data.length; i++) {
                    text += $("#area").append(
                        '<option value="' +
                            res.data[i]["id"] +
                            '">' +
                            res.data[i]["area"] +
                            "</option>"
                    );
                }
                $("#city_id").append(
                    '<option value="' +
                        res.city["id"] +
                        '">' +
                        res.city["city"] +
                        "</option>"
                );
                $("#state_id").append(
                    '<option value="' +
                        res.state["id"] +
                        '">' +
                        res.state["state"] +
                        "</option>"
                );
            },
        });
    } else {
        console.log("Invalid Pincode");
    }
});



// Permissions

// Permission Details
$("#Add_permission_Form").submit(function (e) {
    e.preventDefault();
    var form = $("#Add_permission_Form")[0];
    var url = $("#url").val();
    var formData = new FormData(form);
    var redirect =
        $('meta[name="base_url"]').attr("content") + "/permissions";
    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                $("#Add_permission_Form")[0].reset();
                $(".err").html("");
                swal("Created!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});
$("#Edit_permission_Form").submit(function (e) {
    e.preventDefault();
    var form = $("#Edit_permission_Form")[0];
    var id = $("#user_role_id").val();
    var formData = new FormData(form);
    var update =
        $('meta[name="base_url"]').attr("content") + "/permissions/" + id;
    var redirect =
        $('meta[name="base_url"]').attr("content") + "/permissions";
    $.ajax({
        url: update,
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.status == true) {
                swal("Updated!", data.message, "success");
                setTimeout(function () {
                    window.location.href = redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            $(".err").html("");
            $.each(xhr.responseJSON.errors, function (key, value) {
                $("." + key).append(
                    '<div class="err text-danger">' + value + "</div>"
                );
            });
        },
    });
});