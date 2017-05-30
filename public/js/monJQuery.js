/**
 * Created by 1656952 on 29/05/2017.
 */



$(document).ready(function () {

    $("#edit").click(function () {
        if ($('#formReserver').css('display') == 'block') {
            $("#formReserver").css('display', 'none');
            $("#formEdit").css('display', 'block');
        } else {

            $("#formEdit").css('display', 'none');
            $("#formReserver").css('display', 'block');
        }
    });


});
