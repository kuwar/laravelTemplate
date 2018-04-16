$(document).ready(function() {
    var colCount = 0;
    $('.table thead tr:nth-child(1) th').each(function() {
        if ($(this).attr('colspan')) {
            colCount += +$(this).attr('colspan');
        } else {
            colCount++;
        }
    });
    $('.no-record-td').attr('colspan', colCount);


    $('.profile-image').each(function() {
        if ($(this).find('img').length) {
            $(this).addClass('profile-pic');
        }
    });

});

$(document).ready(function() {

    var allWells = $('.setup-content');

    allWells.hide();
    $('#step-1').show();
    // DEMO ONLY //
    $('#activate-step-2').on('click', function(e) {
        if(course_name.validity.valueMissing)
        {
            alert('Please set a name for course.');
            course_name.focus();
            return false;
        }
        if(course_heading.validity.valueMissing)
        {
            alert('Please set a heading for course.');
            course_heading.focus();
            return false;
        }
        if(CKEDITOR.instances['course_description'].getData()=='')
        {
            alert('Please set a description for course.');
            course_description.focus();
            return false;
        }
        allWells.hide();
        $('#step-2').show();
    });

    $("#add_course_modal_back").on('click',function(){
        allWells.hide();
        $('#step-1').show();
    });


    $('#course_name').on('blur', function() {
        $('#course-list-search').fadeOut('medium');
    });
    // $("#course_name").focus(function() {
    //     $("#course-list-search").show();
    // });
    $("#course-list-search").hide();
});
