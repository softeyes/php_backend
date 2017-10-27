/*global $,document,console */

console.log('loaded');

$(document).ready(setup);

function setup() {
    console.log('Inside setup');
    $('#inside').hide();
    $('#login').click(do_login);
    $('#logout').click(do_logout);
    creatures_list();
};

function do_login () {
	console.log('Inside do_login');

	var user = $('#username').val();
	var pass = $('#password').val();

	var signin_creds = {
		user: user,
		pass: pass
	};

	$.get('backend/admin/login.php', signin_creds).done(logged_in).fail(blow_up);
}

function logged_in (data) {	
    console.log('Inside logged_in');
    console.log(data);

    if(data == 'logged in'){
    	$('#outside').slideUp('slow');
    	$('#inside').slideDown('slow');
    }
    else {$('#message').text('cannot log in')} 
}

function do_logout () {
    console.log('Inside do_logout');
    $.get('backend/admin/logout.php').done(logged_out).fail(blow_up);
}

function logged_out (data) {
    console.log('Inside logged_out');
    console.log(data);
    window.location = 'page1_landing_page.php'; // redirect to home page
}

function blow_up(data) {
    console.log('Inside blow_up');
}
