function create_entry () {
	console.log('Inside create_entry')
	var creature_id = $('#creature_id').val();
	var creature_type = $('#creature_type').val();
	var gender = $('#gender').val();
	var last_known_location = $('#last_known_location').val();
	var region_id = $('#region_id').val();
	console.log(user, password);

	var data = {user_name: user, user_password: password};
	$.get('backend/manage_entries/create_entry.php', data).done(created_user).fail(blow_up);
	$('#create_entry').removeClass('btn-primary').addClass('btn-warning').text('creating...');
}

function created_entry (data) {
	console.log('Inside created_entry')
	$('#create_entry').removeClass('btn-warning').addClass('btn-success').text('created!');
	do_usersetup();
}