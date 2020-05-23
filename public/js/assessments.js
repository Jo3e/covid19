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
        current.hide();
        next.css({
            'display': 'block'
        });

        if (response == 'yes') {
            if (current.is('.q1')) {
              assessment += 1;
            }else if (current.is('.q2')) {
              assessment += 1;
            }else if (current.is('.q3')) {
              assessment += 3;
            }else if (current.is('.q4')) {
              assessment += 4;
            }else if (current.is('.q5')) {
              assessment += 2;
            }else if (current.is('.q6')) {
              assessment += 2;
            }else if (current.is('.q7')) {
              assessment += 1;
            }else if (current.is('.q8')) {
              assessment += 2;
            }else if (current.is('.q9')) {
              assessment += 2;
            }else if (current.is('.q10')) {
              assessment += 1;
            }
            // console.log('Assessment is ' + assessment);
        }else if (response == 'no') {
            assessment += 0;
        }

        // determine result of assessment
        if (current.is('.q10')) {
          if (assessment >= 5) {
            current.hide();
            next.css({
                'display': 'none'
            });
            $('.high-risk').show();
          }else if (assessment > 2 && assessment <= 4) {
            current.hide();
            next.css({
                'display': 'none'
            });
            $('.medium-risk').show();
          }else {
            current.hide();
            next.css({
                'display': 'block'
            });
          }
        }

    });


    $('.collapse').collapse('hide');
});
