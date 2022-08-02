//order page
$(document).ready(function()
{
    $("#adding").hide();
});

$(document).ready(function()
{
    $("#show").click(function()
    {
        $("#adding").toggle();
    });
});




//donate page
$(document).ready(function()
{
    $("#adding1").hide();
});

$(document).ready(function()
{
    $("#show1").click(function()
    {
        $("#adding1").toggle();
    });
});




//login page
$(document).ready(function()
{
    $("#login_user").hide();
    $("#login_hsptl").hide();
});

$(document).ready(function()
{
    $("#user_access").click(function()
    {
        $("#login_user").show();
        $("#login_hsptl").hide();
        $("#hsptl_fild").hide();
    });
});

$(document).ready(function()
{
    $("#hsptl_access").click(function()
    {
        $("#login_user").hide();
        $("#login_hsptl").show();
        $("#user_fild").hide();
    });
});


//emp_users.php
$(document).ready(function()
{
    $("#update_button").hide();
    $("#insert_button").hide();
    $("#table_hide").hide();
});

//insert
$(document).ready(function()
{
    $("#show_insert").click(function()
    {
        $("#show_insert").hide();
        $("#update_button").hide();
        
        $("#insert_button").show();
        $("#table_hide").show();
    });
});

//update
$(document).ready(function()
{
    $("#show_edit").click(function()
    {
        $("#show_insert").hide();
        $("#insert_button").hide();
        
        $("#update_button").show();
        $("#table_hide").show();
    });
});