$(document).ready(function()
{
    var count = $('#idSeenList').children().length;

    var bodyHeight = $('body').height();

    //alert($('#fullpage').width());

    $('#fullpage').fullpage({
        //threshold: 10,
        scrollingSpeed: 1300,
        anchors: ['sec0', 'sec1', 'sec2', 'sec3', 'sec4',
            'sec5', 'sec6', 'sec7', 'sec8', 'sec9', 'sec10',
            'sec11', 'sec12', 'sec13'],
        verticalCentered: false,
        responsiveHeight: 780,
        responsiveWidth: 1280,
        afterLoad: function(anchorLink, index)
        {

            for(var i = 1;i <= index; i++)
            {
                $('#idSeen' + i).removeClass('hidden').removeClass('active');
                $('#idUnseen' + i).addClass('hidden');
            }

            for(var j = index;j <= count; j++)
            {
                $('#idSeen' + j).addClass('hidden').removeClass('active');
                $('#idUnseen' + j).removeClass('hidden');
            }
            $('#idSeen' + index).addClass('active').removeClass('hidden');
            $('#idUnseen' + index).addClass('hidden');
        },
        onLeave: function()
        {
            $('#idRightMenuOpenBtn').prop( "checked", false );
        }
    });


    $.fn.fullpage.reBuild();
    //$('#fullpage').css('height', bodyHeight + 'px');

    var sectionHeight = $('#section0').height();
    var backHeight = sectionHeight * 14;
    $('#idMainBackground').css('height', backHeight + 'px');

    $('#idGetCommercialOfferForm').find('input[type=text]').on('change paste keyup', function()
    {
        var submitBtn = $('#idGetCommercialOfferSubmit');

        if(
            $('#idCustomerNameInput').val() == '' ||
            $('#idCustomerPhoneInput').val() == '' ||
            $('#idCustomerEmailInput').val() == ''
        )
        {
            submitBtn.addClass('inactive');
        }
        else
        {
            submitBtn.removeClass('inactive');
        }
    });

    $('#idGetPlanOfferForm').find('input[type=text]').on('change paste keyup', function()
    {
        var submitBtn = $('#idGetPlanSubmit');

        if(
            $('#idPlanCustomerNameInput').val() == '' ||
                $('#idPlanCustomerPhoneInput').val() == '' ||
                $('#idPlanCustomerEmailInput').val() == ''
            )
        {
            submitBtn.addClass('inactive');
        }
        else
        {
            submitBtn.removeClass('inactive');
        }
    });

    $('#idGetPlan2OfferForm').find('input[type=text]').on('change paste keyup', function()
    {
        var submitBtn = $('#idGetPlan2Submit');

        if(
            $('#idPlan2CustomerNameInput').val() == '' ||
                $('#idPlan2CustomerPhoneInput').val() == '' ||
                $('#idPlan2CustomerEmailInput').val() == ''
            )
        {
            submitBtn.addClass('inactive');
        }
        else
        {
            submitBtn.removeClass('inactive');
        }
    });

    $('#idWebinarForm').find('input[type=text]').on('change paste keyup', function()
    {
        var submitBtn = $('#idWebinarSubmit');

        if(
            $('#idWebinarCustomerNameInput').val() == '' ||
            $('#idWebinarCustomerPhoneInput').val() == '' ||
            $('#idWebinarCustomerEmailInput').val() == ''
        )
        {
            submitBtn.addClass('inactive');
        }
        else
        {
            submitBtn.removeClass('inactive');
        }
    });

    $('#idWebinarScheduleList').find('li').click(function()
    {
        var thisElem = $(this);

        if( thisElem.hasClass('active') )
        {
            thisElem.removeClass('active');
        }
        else
        {
            thisElem.parent().find('li').each(function()
            {
                $(this).removeClass('active');
            });

            thisElem.addClass('active');
            $('#idWebinarSchedule').val( thisElem.attr('did') );
        }
    });


    $('#idLectureForm').find('input[type=text]').on('change paste keyup', function()
    {
        var submitBtn = $('#idLectureSubmit');

        if(
            $('#idLectureCustomerNameInput').val() == '' ||
                $('#idLectureCustomerPhoneInput').val() == '' ||
                $('#idLectureCustomerEmailInput').val() == ''
            )
        {
            submitBtn.addClass('inactive');
        }
        else
        {
            submitBtn.removeClass('inactive');
        }
    });

    $('#idLectureScheduleList').find('li').click(function()
    {
        var thisElem = $(this);

        if( thisElem.hasClass('active') )
        {
            thisElem.removeClass('active');
        }
        else
        {
            thisElem.parent().find('li').each(function()
            {
                $(this).removeClass('active');
            });

            thisElem.addClass('active');
            $('#idLectureSchedule').val( thisElem.attr('lid') );
        }
    });

    var swiper = new Swiper('#swipe',
        {
            nextButton: '#idRight',
            prevButton: '#idLeft',
            slidesPerView: 4,
            loop: true
        });

    $('.plus_btn').click(function()
    {
        if( $(this).attr('wid') == 1 )
        {
            return;
        }

        $('#idShadow').removeClass('hidden');
        $('#idMessageContainer').removeClass('hidden');
        $('#w' + $(this).attr('wid')).removeClass('hidden');
    });

    $('.close_btn').click(function()
    {
        $('#idShadow').addClass('hidden');
        $('#idMessageContainer').addClass('hidden');
        $('#w' + $(this).attr('wid')).addClass('hidden');
    });

});