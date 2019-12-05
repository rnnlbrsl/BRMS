$('.toggle').on('click', function() {
    if ($(".ml-menu").hasClass('up')) {
        $(".ml-menu").removeClass('up');
        $(".ml-menu").slideUp("slow");
    }
    else {
        $(".ml-menu").addClass('up');
        $(".ml-menu").slideDown("slow");
    }
});

$('.resident-toggle').on('click', function() {
    if ($(".resident-menu").hasClass('up')) {
        $(".resident-menu").removeClass('up');
        $(".resident-menu").slideUp("slow");
    }
    else {
        $(".resident-menu").addClass('up');
        $(".resident-menu").slideDown("slow");
    }
});

$('.blotter-toggle').on('click', function() {
    if ($(".blotter-menu").hasClass('up')) {
        $(".blotter-menu").removeClass('up');
        $(".blotter-menu").slideUp("slow");
    }
    else {
        $(".blotter-menu").addClass('up');
        $(".blotter-menu").slideDown("slow");
    }
});

$('.event-toggle').on('click', function() {
    if ($(".event-menu").hasClass('up')) {
        $(".event-menu").removeClass('up');
        $(".event-menu").slideUp("slow");
    }
    else {
        $(".event-menu").addClass('up');
        $(".event-menu").slideDown("slow");
    }
});

$('.business-toggle').on('click', function() {
    if ($(".business-menu").hasClass('up')) {
        $(".business-menu").removeClass('up');
        $(".business-menu").slideUp("slow");
    }
    else {
        $(".business-menu").addClass('up');
        $(".business-menu").slideDown("slow");
    }
});

$('.ordinances-toggle').on('click', function() {
    if ($(".ordinances-menu").hasClass('up')) {
        $(".ordinances-menu").removeClass('up');
        $(".ordinances-menu").slideUp("slow");
    }
    else {
        $(".ordinances-menu").addClass('up');
        $(".ordinances-menu").slideDown("slow");
    }
});

$
('.officials-toggle').on('click', function() 
{
    if ($(".officials-menu").hasClass('up')) 
    {
        $(".officials-menu").removeClass('up');
        $(".officials-menu").slideUp("slow");
    }
    else 
    {
        $(".officials-menu").addClass('up');
        $(".officials-menu").slideDown("slow");
    }
}
);

$('.resolutions-toggle').on('click', function() {
    if ($(".resolutions-menu").hasClass('up')) {
        $(".resolutions-menu").removeClass('up');
        $(".resolutions-menu").slideUp("slow");
    }
    else {
        $(".resolutions-menu").addClass('up');
        $(".resolutions-menu").slideDown("slow");
    }
});

$('.has-clear input[type="text"]').on('input propertychange', function() {
  var $this = $(this);
  var visible = Boolean($this.val());
  $this.siblings('.form-control-clear').toggleClass('hidden', !visible);
}).trigger('propertychange');

$('.form-control-clear').click(function() {
  $('#requester').val('');
});

$("#requester").focus(function(){
    firstname = $('#firstname').val();
    middlename = $('#middlename').val();
    lastname = $('#lastname').val();
    var $this = $("#requester");
    var visible = Boolean($this.val());
    $('#requester').val(firstname + ' ' + middlename + ' ' + lastname);
    $('.form-control-clear').toggleClass('hidden', !visible);
}); 

$( "#firstname" ).change(function() {
  $('#requester').val('');
});

$( "#middlename" ).change(function() {
  $('#requester').val('');
});

$( "#lastname" ).change(function() {
  $('#requester').val('');
});

function calcAge(dateString) {
    var birthday = new Date(dateString);
    var ageDifMs = Date.now() - birthday.getTime();
    var ageDate = new Date(ageDifMs); // miliseconds from epoch
    return Math.abs(ageDate.getFullYear() - 1970);
}