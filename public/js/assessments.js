$(document).ready(function(){

    let assessment = 0;

    // navigate users
    $('.answer').click(function (){
        event.preventDefault();

        // get button click response
        let response = $(this).val();

        // get current question
        let current = $($(this).parent());

        // prop and and move to the next question
        let next = $(this).parent().next();

        if (response == 'yes') {
            if (current.is('.q4')) {
                assessment += 3;
            }else if (current.is('.q3')) {
                assessment += 1;
            }else if (current.is('.q2')) {
                assessment += 1;
            }else if (current.is('.q1')) {
                assessment += 1;
            }else {
                return assessment;
            }
            console.log('Assessment is ' + assessment);
        }else if (response == 'no') {
            assessment += 0;
        }

        // determine result of assessment
        if (assessment >= 3 && !current.is('.q4')) {
            current.hide();
            next.css({
                'display': 'block'
            });
        }else if (assessment >= 3){
            current.hide();
            next.css({
                'display': 'none'
            });
            $('.high-risk').show();
            return;
        }else {
            current.hide();
            next.css({
                'display': 'block'
            });
        }
    });
});
