/*
 * Created by Artem Manchenkov
 * artyom@manchenkoff.me
 * manchenkoff.me © 2018
 */

$(document).ready(function() {
    console.log('Loaded');

    $.post(
        '/test',
        {id: 10},
        function (result, status) {
            console.log(status);
        }
    );
});