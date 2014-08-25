$(document).ready(function(){

  $.getJSON('data.json', function(data) {
    
    tmp=data.date;
    $('#date').append('<a target="_blank" href="'+tmp+'">行事曆</a>');

    tmp=data.teacher;
    $('#teacher3').append(tmp);

    tmp=data.leader;
    $('#leader3').append(tmp[0]+'<br>'+tmp[1]);
    tmp=data.vleader;
    $('#vleader').append(tmp[0]+'<br>'+tmp[1]);
    tmp=data.general;
    $('#general').append(tmp[0]+'<br>'+tmp[1]);
    tmp=data.device;
    $('#device').append(tmp[0]+'<br>'+tmp[1]);
    tmp=data.instruments;
    $('#instruments').append(tmp[0]+'<br>'+tmp[1]);
    tmp=data.PR;
    $('#PR').append(tmp[0]+'<br>'+tmp[1]);
  });

  $('#teacher2').hide();
  $('#leader2').hide();
  $('#info').click(function(){
    $('#info2').show(300);
    $('#teacher2').hide(300);
    $('#leader2').hide(300);
  })
  $('#teacher').click(function(){
    $('#info2').hide(300);
    $('#teacher2').show(300);
    $('#leader2').hide(300);
  })
  $('#leader').click(function(){
    $('#info2').hide(300);
    $('#teacher2').hide(300);
    $('#leader2').show(300);
  })
});

