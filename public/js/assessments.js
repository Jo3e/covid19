$(document).ready(function(){
    // navigate users
    $('.answer').click(function (){
        event.preventDefault();

        // get button click response
        let response = $(this).val();

        // get current question
        let current = $($(this).parent());

        // prop and and move to the next question
        let next = $(this).parent().next();
        current.hide();
        next.css({
            'display': 'block'
        });

        // evaluate the results
    });

    // methods

});
