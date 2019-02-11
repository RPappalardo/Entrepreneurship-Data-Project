(function (window, document, $, undefined) {
    var localKIWP = {
        kiwp: {
            randomNum1: int = 0,
            randomNum2: int = 0,
            initScreen: function () {

                kiwp.randomNum1 = Math.ceil(Math.random() * 5);
                kiwp.randomNum2 = Math.floor(Math.random() * (10 - 5 + 1)) + 5;
                $('#num1').html(kiwp.randomNum1);
                $('#num2').html(kiwp.randomNum2);


                $('#closeError').click(function () {
                    $('#theError').fadeOut(400);
                })

                $('#Button1').click(function (e) {
                    $('.solve').removeClass('solveError');
                    $('#wrongCode').css('visibility', 'hidden');
                    $('.required').each(function () {
                        if ($(this).val() == "") {
                            $(this).parent().find('.validate').css({ 'visibility': 'visible' });
                        }
                    })

                    // VALIDATE MISSING
                    isMissing = false;
                    $('.validate').each(function () {
                        if ($(this).css('visibility') == 'visible') {
                            isMissing = true;
                        }
                    })
                    if (isMissing) {
                        $("html, body").animate({ scrollTop: 0 }, 400, function () {
                            $('#errorMessage').html('There are some fields that are required before submitting the form.  Please scroll through the form and fill in any required information listed...');
                            $('#theError').fadeIn(200);
                        });
                        e.preventDefault();
                        e.stopPropagation();
                        e.returnValue = false;
                        return false;
                    }

                    // VALIDATE CODE
                    x = $('#solution').val();
                    if (parseInt(kiwp.randomNum1) + parseInt(x) != parseInt(kiwp.randomNum2)) {
                        $('#errorMessage').html('The value solving the equation at the bottom of the form is incorrect.  Please try again...');
                        $('#theError').fadeIn(200);
                        $('.solve').addClass('solveError');
                        e.preventDefault();
                        e.stopPropagation();
                        e.returnValue = false;
                        return false;
                    }

                    $('#waiting').fadeIn(200);
                })

                $("#ddlSchool").change(function () {
                    $("#availability").css({ "display": "block" });
                    switch ($(this).val()) {
                        case "Duke":
                            $('#theTimes').html("<label>Interviews: Please list ALL times you are available on Wednesday, Feb. 17, 9am to 5pm.<br /><span style='font-size:0.8em;'>Interviews will be held at Duke.</span></label>")
                            //$('#theTimes').html("Interview Availability: 15 minute Interviews will be held on <strong>Duke's</strong> campus on <strong>Wednesday, Feb. 17, 9am to 5pm</strong>.  Please indicate ALL times you are available. If you are not available on Feb. 17, list three days/times you could come to UNC Chapel Hill for an interview.")
                            break;
                        case "NCCU":
                            $('#theTimes').html("<label>Interviews: Please list ALL times you are available on Tuesday, Feb. 23, 9am to 5pm.<br /><span style='font-size:0.8em;'>Interviews will be held at North Carolina Central University.</span></label>")
                            //$('#theTimes').html("Interview Availability: 15 minute Interviews will be held on <strong>NCCU's</strong> campus on <strong>Tuesday, Feb. 23, 9am to 5pm</strong>.  Please indicate ALL times you are available. If you are not available on Feb. 23, list three days/times you could come to UNC Chapel Hill for an interview.")
                            break;
                        case "UNCP":
                            $('#theTimes').html("<label>Interviews: Please list ALL times you are available on Thursday, Feb. 18, 9am to 5pm.<br /><span style='font-size:0.8em;'>Interviews will be held at UNC-Pembroke.</span></label>")
                            //$('#theTimes').html("Interview Availability: 15 minute Interviews will be held on <strong>UNCP's</strong> campus on <strong>Thursday, Feb. 18, 9am to 5pm</strong>.  Please indicate ALL times you are available.")
                            break;
                        case "NCSU":
                            $('#theTimes').html("<label>Interviews: Please list ALL times you are available on Monday, Feb. 22, 9am to 5pm.<br /><span style='font-size:0.8em;'>Interviews will be held at North Carolina State University.</span></label>")
                            //$('#theTimes').html("Interview Availability: 15 minute Interviews will be held on <strong>NCSU's</strong> campus on <strong>Monday, Feb. 22, 9am to 5pm</strong>.  Please indicate ALL times you are available.")
                            break;
                        default:
                            $('#theTimes').html("")
                            $("#availability").css({ "display": "none" });

                    }
                })

                $("#rblFormedCompany").bind("click", function () {
                    if ($('#rblFormedCompany input[type=radio]:checked').val() == 'Yes') {
                        $('#pnlFormedCompanyYes').css('display', 'block');
                        $('#pnlFormedCompanyNo').css('display', 'none');
                    } else {
                        $('#pnlFormedCompanyYes').css('display', 'none');
                        $('#pnlFormedCompanyNo').css('display', 'block');
                    }
                });

                $("#rblPatent").bind("click", function () {
                    if ($('#rblPatent input[type=radio]:checked').val() == 'Yes') {
                        $('#pnlPatentYes').css('display', 'block');
                        $('#pnlPatentNo').css('display', 'none');
                    } else {
                        $('#pnlPatentYes').css('display', 'none');
                        $('#pnlPatentNo').css('display', 'block');
                    }
                });
                $("#rblUniversityAffiliated").bind("click", function () {
                    if ($('#rblUniversityAffiliated input[type=radio]:checked').val() == 'Yes') {
                        $('#pnlUniversityAffiliatedYes').css('display', 'block');
                    } else {
                        $('#pnlUniversityAffiliatedYes').css('display', 'none');
                    }
                });
                $("#rblContactedTechTransfer").bind("click", function () {
                    if ($('#rblContactedTechTransfer input[type=radio]:checked').val() == 'Yes') {
                        $('#pnlContactedTechTransferYes').css('display', 'block');
                    } else {
                        $('#pnlContactedTechTransferYes').css('display', 'none');
                    }
                });
            }
        }
    }
    jQuery.extend(window, localKIWP);
})(this, document, jQuery);



$("document").ready(function(){
	localKIWP = window.kiwp;
	$(window).load(
		function() {
			localKIWP.initScreen();
		}
	);
})
