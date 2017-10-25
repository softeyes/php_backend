console.log('loaded users.js');

$(document).ready(do_usersetup);

function do_usersetup() {
    console.log('Inside do_usersetup');
    $('*').off();
    $('.table tbody').html('');
    $('#create_user').click(create_user);
    $.get('backend/manage_users/show_users.php').done(show_users).fail(blow_up);
}

function blow_up(data) {
    console.log('Inside blow_up');
    console.log(data);
}