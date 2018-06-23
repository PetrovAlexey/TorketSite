<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Заявка принята</title>

    <!-- Bootstrap -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../www/js/bootstrap.js"></script>
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../www/images/icon.ico">
  </head>
  <body>
  
  <div class="navbar navbar-default navbar-static-top">
                    <div class="container">
                            
                                <div class="navbar-header">
                                    <div class="container">
                                        <div class="col-sm-offset-1 col-xs-2 col-sm-1">
                                            <button type="button" class="navbar-toggle pull-left" data-toggle = "collapse" data-target = "#responsive-menu">
                                       
                                            <span class="sr-only">МЕНЮ</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="col-xs-0 hidden-sm hidden-md hidden-lg">
                                           <!-- <h1>МЕНЮ</h1> -->
                                        </div>
                                        <div class="col-xs-10 hidden-sm hidden-md hidden-lg">
                                             
                                                  
                                            <h6 id="number">
                                                <img src="images/logos/phone-receiver.png" class="tmp-1" alt="">
                                                +7 (495) 765-63-27
                                             </h6>
                                             <h6 id="mail">
                                                    <img src="images/logos/envelope.png" class="tmp-2" alt="">
                                                 TORKRET@METACRETE.RU
                                             </h6>
                                              
                                        </div>
                                    </div>
                                </div>
                                
                        
                                     <div class="collapse navbar-collapse" id = "responsive-menu">
                                       <div class="row">
                                        <div class="container no-gutter">
                                         <div class="col-sm-9 col-md-9">

                                            <ul class="nav navbar-nav">
                                    
                                                <li><a href="../www/index.html" class="text-menu">ПРОДУКЦИЯ</a></li>
                                                <li><a href="../www/index.html" class="text-menu">ПРЕИМУЩЕСТВА</a></li>
                                                <li><a href="../www/index.html" class="text-menu">ОБЛАСТИ ПРИМЕНЕНИЯ</a></li>
                                                <li><a href="../www/index.html" class="text-menu">КЛЮЧЕВЫЕ ОБЪЕКТЫ</a></li>
                                                <li><a href="../www/index.html" class="text-menu">ОБОРУДЫВАНИЕ</a></li>
                                                <li><a href="../www/index.html" class="text-menu">КОНТАКТЫ </a></li>
                            
                                            </ul>
                                            </div>
                                            <div class="col-sm-3 col-md-3 hidden-xs">
                                             
                                                  
                                                <h6 id="number">
                                                    <img src="images/logos/phone-receiver.png" class="tmp-1" alt="">
                                                +7 (495) 765-63-27
                                                 </h6>
                                                 <h6 id="mail">
                                                    <img src="images/logos/envelope.png" class="tmp-2" alt="">
                                                     TORKRET@METACRETE.RU
                                                 </h6>
                                              
                                            </div>
                                    
                                           </div>
                                        </div>    
                                      </div>
                                    
                                
                                </div>
                          
                        
    </div>
    
    <div class="container-fluid gray" id="top">
     <div class="container margined">
      <div class="row">
          <div class = "col-xs-2 ">
              <img src="images/logo.png" alt="">
          </div>
          <div class = "hidden-sm hidden-xs col-md-5 ">
              <h4 id="text-topic-1">ПРОИЗВОДСТВО СМЕСЕЙ</h4>
              <h4 id="text-topic-2">ДЛЯ ТОРКРЕТИРОВАНИЯ</h4>
          </div>
          <div class="col-xs-7 col-md-4 pull-right">
            <div class="row">
              <div class="hidden-xs-12 col-sm-12 ">
                  <h5 class="clearfix pull-right" id="text-topic-3">РАБОТАЕМ С 08:00 ДО 17:00 ПО МСК</h5>
              </div>
              <div class="col-xs-12">
                  <button class="clearfix btn btn-order pull-right mybtn-2" type = "button" data-dismiss="modal" data-toggle="modal" data-target="#modal-1" data-whatever="call" data-num="first">ЗАКАЗАТЬ ЗВОНОК</button>      
              </div>
              
            </div>
          </div>
      </div>
     </div>
       
   </div>
   
   <div class="container-fluid picture" id="hei">
           <div class="container grad-block">
                     <div class="container">
                         <h1 class="heavy">СПАСИБО ЗА ВАШУ ЗАЯВКУ</h1>
                         <h2 class="bold">НАШ МЕНЕДЖЕР СВЯЖЕТСЯ С ВАМИ </h2>
                         <h2 class="bold">В ТЕЧЕНИЕ 15 МИНУТ</h2>
                         <br>
                     </div>
                      
           </div>
   </div>
   
   <form class="modal fade" method="post"  action="send.php"  id="modal-1">
       <div class="modal-dialog">
               <div class="modal-body">
                <h1 class="clearfix modal-title" >ЗАКАЖИТЕ ЗВОНОК СЕЙЧАС</h1>
                <h3>ВВЕДИТЕ ВАШ ТЕЛЕФОН В ПОЛЕ НИЖЕ И МЫ
                    ПЕРЕЗВОНИМ ВАМ В ТЕЧЕНИЕ 10 МИНУТ</h3>
                 <div class="row">
                    <div class="col-xs-12">
                     <input type="hidden" id="tip" name="p" value="">
                     <input type="text inputter" id="InputNumber-modal" name="InputNumber-modal"   class="form-control" placeholder="ВВЕДИТЕ НОМЕР ТЕЛЕФОНА">
                     <button class="btn btn-order btn-block" type = "submit" id="modal">ПОЛУЧИТЬ РАСЧЕТ ЦЕНЫ</button>  
                    </div> 
                 </div>
               </div>
       </div>
   </form>
   
   <script type="text/javascript">
      function setHeiHeight() {
    $('#hei').css({
        height: $(window).height() + 'px'
    });
      }
       setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
       $(window).resize( setHeiHeight );
      </script>
 
<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['InputNumber-modal']) ){
      $phone = trim(strip_tags($_POST['InputNumber-modal']));
      $form = $_POST['p'];
      switch($form){
          case "call-1":
              $info = "Заказ звонка";
              $special = "Шапка";
              break;
          case "call-2":
              $info = "Заказ звонка";
              $special = "Футер";
              break;
          case "price-30":
              $info = "Узнать цену Torket30";
              $special = "";
              break;
          case "price-40":
              $info = "Узнать цену Torket40";
              $special = "";
              break;
          case "price-50":
              $info = "Узнать цену Torket50";
              $special = "";
              break;
          case "consul":
              $info = "Заказ консультации";
              $special = "";
              break;
          case "count":
              $info = "Расчет цены";
              $special = "";
              break;
          case "discount":
              $info = "Получить скидку";
              $special = "";
              break;
          case "question":
              $info = "Вопрос: ".$_POST['Question-area'];
              $special = "";
              break;
              
      }
      $to = 'petrovalex_99@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Цель: '.$info.'</p>
                        <p>Телефон: '.$phone.'</p> 
                        <p>Дополнительная информация: '.$special.'</p> 
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
 
      exit;
   } 
   else {
      exit;
   }
?>
</body>
</html>