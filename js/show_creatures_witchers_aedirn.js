console.log('loaded show_creatures_witchers_aedirn.js');

function creatures_list() {
    console.log('Inside check_backend');
    $.get('backend/creature_type/show_creatures_from_aedirn.php').done(display_creatures).fail(blow_up);
}

function display_creatures(data) {
    console.log('Inside creatures_list');
    data = JSON.parse(data);
     console.log(data);

    $('#show_creatures').append(data); // use jQuery to append clubs to div#show_creatures
    // now display it!

    for (var counter = 0; counter < data.length; counter++) {

        var tr = $('<tr>');
        
        var creature_id = data[counter].creature_id;
        var td = $('<td>');
        td.text(creature_id);
        tr.append(td);

        var creature_type = data[counter].creature_type;
        var td = $('<td>');
        td.text(creature_type);
        tr.append(td);
        
        var gender = data[counter].gender;
        var td = $('<td>');
        td.text(gender);
        tr.append(td);

        var last_known_location = data[counter].last_known_location;
        var td = $('<td>');
        td.text(last_known_location);
        tr.append(td);
        
        var region_id = data[counter].region_id;
        var td = $('<td>');
        td.text(region_id);
        tr.append(td);


        // edit button
        var td = $('<td>'); // jQuery creates a <td> object 
        var button = $('<button>'); // jQuery creates a <button> object 
        button.addClass('btn btn-success edit'); // adds classes to button
        button.text('Edit'); // sets button text to 'edit'
        var creature_id = data[counter].creature_id; // grabs creature_id from JSON
        button.attr('id', creature_id); // adds unique id to <button>
        td.append(button); // adds button to <td>
        tr.append(td); // adds <td> to <tr>

        
        // delete button
        var td = $('<td>'); // jQuery creates a <td> object 
        var button = $('<button>'); // jQuery creates a <button> object 
        button.addClass('btn btn-danger delete') // adds classes to button
        button.text('Delete'); // sets button text to 'delete'   
        var creature_id = data[counter].creature_id; // grabs creature_id from JSON
        button.attr('id', creature_id); // adds unique id to <button>
        td.append(button); // adds button to <td>
        tr.append(td); // adds <td> to <tr>

        // // create button
        // var td = $('<td>'); // jQuery creates a <td> object 
        // var button = $('<button>'); // jQuery creates a <button> object 
        // button.addClass('btn btn-danger create') // adds classes to button
        // button.text('Delete'); // sets button text to 'delete'   
        // var creature_id = data[counter].creature_id; // grabs creature_id from JSON
        // button.attr('id', creature_id); // adds unique id to <button>
        // td.append(button); // adds button to <td>
//         tr.append(td); // adds <td> to <tr>

        $('#show_creatures_witchers_aedirn tbody').append(tr);

    $('.edit').click(do_edit);
    $('.delete').click(do_delete);
    // $('.create').click(do_create);

    } // end of show_clubs() function!

    function do_edit () {
    console.log('Inside do_edit');
    console.log( $(this).attr('id') );
    }

    function do_delete () {
    console.log('Inside do_delete');
    console.log( $(this).attr('id') );
    }

    // function do_create () {
    // console.log('Inside do_create');
    // console.log( $(this) );
    // }
}

