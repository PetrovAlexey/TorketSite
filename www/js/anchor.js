$('#modal-1').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) ;// Кнопка, что спровоцировало модальное окно  
  var recipient = button.data('whatever') ;// Извлечение информации из данных-* атрибутов  
  var data = button.data('num');
  // Если необходимо, вы могли бы начать здесь AJAX-запрос (и выполните обновление в обратного вызова).  

  // Обновление модальное окно Контента. Мы будем использовать jQuery здесь, но вместо него можно использовать привязки данных библиотеки или других методов.  

  var modal = $(this)
  switch (recipient) {
  case "call":
    modal.find('.modal-title').text('ЗАКАЖИТЕ ЗВОНОК СЕЙЧАС');
    modal.find('.btn').text('ЗАКАЗАТЬ ЗВОНОК');
    if (data == 'first')
        $("#tip").val('call-1');
    else
        $("#tip").val('call-2');
    break;
  case "price":
    modal.find('.modal-title').text('УЗНАЙТЕ ЦЕНУ С ДОСТАВКОЙ');
    modal.find('.btn').text('УЗНАТЬ ЦЕНУ');
    if (data == 'first')
        $("#tip").val('price-30');
    if (data == 'second')
        $("#tip").val('price-40');
    if (data == 'third')
        $("#tip").val('price-50');
    break;
  case "consul":
    modal.find('.modal-title').text('ЗАКАЖИТЕ КОНСУЛЬТАЦИЮ ТЕХНИЧЕСКОГО СПЕЦИАЛИСТА');
    modal.find('.btn').text('ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ');
    $("#tip").val('consul');
    break;
}
  //modal.find('.modal-body input').val(recipient)
})

$('#modal-1').on('hidden.bs.modal', function(event) {
  $('#InputNumber-modal').val("");
})


function check_form(){
   if( $('#InputNumber-modal').val() === "" || $('#InputNumber-modal').val() === "ВВЕДИТЕ НОМЕР ТЕЛЕФОНА" )
   {
       
       $('#InputNumber-modal').css({"border-color":"red", "border-size":"2px","color":"red","border-style":"solid"});
       $('#InputNumber-modal').val('ВВЕДИТЕ НОМЕР ТЕЛЕФОНА');
       return false;
   }
   return true;
}


/*
$('#InputNumber-modal').click(function(){
   if( $('#InputNumber-modal').val() === "ВВЕДИТЕ НОМЕР ТЕЛЕФОНА" )
   {
       
       $('#InputNumber-modal').css({"border-style":"none","color":"gray"});
       $('#InputNumber-modal').val('');
   } 
});

$('#count').click(function(){
   if( $('#InputNumber-count').val() === "" )
   {
       
       $('#InputNumber-count').css({"border-color":"red", "border-size":"2px","color":"red","border-style":"solid"});
       $('#InputNumber-count').val('ВВЕДИТЕ НОМЕР ТЕЛЕФОНА');
   }
   
});

$('#InputNumber-count').click(function(){
   if( $('#InputNumber-count').val() === "ВВЕДИТЕ НОМЕР ТЕЛЕФОНА" )
   {
       
       $('#InputNumber-count').css({"border-style":"none","color":"gray"});
       $('#InputNumber-count').val('');
   } 
});

$('#btn-q').click(function(){
   if( $('#InputNumber-q').val() === "" )
   {
       
       $('#InputNumber-q').css({"border-color":"red", "border-size":"2px","color":"red","border-style":"solid"});
       $('#InputNumber-q').val('ВВЕДИТЕ НОМЕР ТЕЛЕФОНА');
   } 
   if( $('#Question').val() === "" )
   {
       
       $('#Question').css({"border-color":"red", "border-size":"2px","color":"red","border-style":"solid"});
       $('#Question').val('ВВЕДИТЕ ВОПРОС');
   } 
});

$('#InputNumber-q').click(function(){
   if( $('#InputNumber-q').val() === "ВВЕДИТЕ НОМЕР ТЕЛЕФОНА" )
   {
       
       $('#InputNumber-q').css({"border-style":"none","color":"gray"});
       $('#InputNumber-q').val('');
   } 
   
});

$('#Question').click(function(){
   if( $('#Question').val() === "ВВЕДИТЕ ВОПРОС" )
   {
       
       $('#Question').css({"border-style":"none","color":"gray"});
       $('#Question').val('');
   } 
});

$('#discount').click(function(){
   if( $('#InputNumber-dis').val() === "" )
   {
       
       $('#InputNumber-dis').css({"border-color":"red", "border-size":"2px","color":"red","border-style":"solid"});
       $('#InputNumber-dis').val('ВВЕДИТЕ НОМЕР ТЕЛЕФОНА');
   } 
});

$('#InputNumber-dis').click(function(){
   if( $('#InputNumber-dis').val() === "ВВЕДИТЕ НОМЕР ТЕЛЕФОНА" )
   {
       
       $('#InputNumber-dis').css({"border-style":"none","color":"gray"});
       $('#InputNumber-dis').val('');
   } 
});*/

