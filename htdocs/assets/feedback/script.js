//после загрузки веб-страницы
$(function () {

  // максимальное количество файлов
  var countFiles = 5;
  // типы разрешённых файлов
  var typeFile = 'image.*';
  // максимльный размер
  var maxSizeFile = 524288; //512 Кбайт
  // отображаем на форме максимальное количество файлов
  $('#countFiles').text(countFiles);
  // при изменения значения элемента "Выбрать файл"
  $(document).on('change','input[name="images[]"]',function(e){
    // если выбран файл, то добавить ещё элемент "Выбрать файл"
    if ((e.target.files.length>0)&&($(this).next('p').next('input[name="images[]"]').length==0) && ($('input[name="images[]"]').length<countFiles)) {
      $(this).next('p').after('<input type="file" name="images[]"><p style="margin-top: 3px; margin-bottom: 3px; color: #ff0000;"></p>');
    }
    // если выбран файл, то..
    if (e.target.files.length>0) {
      // получить файл
      var file = e.target.files[0];
      // проверить размер файла
      if (file.size>maxSizeFile) {
        $(this).next('p').text('* Файл не будет отправлен, т.к. его размер больше 512Кбайт');
      }
      // проверить тип файла
      else if (!file.type.match(typeFile)) {
        $(this).next('p').text('* Файл не будет отправлен, т.к. его тип не соответствует разрешённому');
      }
      else {
        // убираем сообщение об ошибке
        if ($(this).next('p')) {
          $(this).next('p').text('');
        }
      }
    }
    else {
      // если после изменения файл не выбран, то сообщаем об этом пользователю
      $(this).next('p').text('* Файл не будет отправлен, т.к. он не выбран');
    }
  });

  // при отправке формы messageForm на сервер (id="messageForm")
  $('#messageForm').submit(function (event) {
    // отменим стандартное действие браузера
    event.preventDefault();
    // заведём переменную, которая будет говорить о том валидная форма или нет
    var formValid = true;

    // перебирём все элементы управления формы (input и textarea)
    $('#messageForm input,#messageForm textarea').each(function () {

      //найти предков, имеющих класс .form-group (для установления success/error)
      var formGroup = $(this).parents('.form-group');
      //найти glyphicon (иконка успеха или ошибки)
      var glyphicon = formGroup.find('.form-control-feedback');
      //валидация данных с помощью HTML5 функции checkValidity
      if (this.checkValidity()) {
        //добавить к formGroup класс .has-success и удалить .has-error
        formGroup.addClass('has-success').removeClass('has-error');
        //добавить к glyphicon класс .glyphicon-ok и удалить .glyphicon-remove
        glyphicon.addClass('glyphicon-ok').removeClass('glyphicon-remove');
      } else {
        //добавить к formGroup класс .has-error и удалить .has-success
        formGroup.addClass('has-error').removeClass('has-success');
        //добавить к glyphicon класс glyphicon-remove и удалить glyphicon-ok
        glyphicon.addClass('glyphicon-remove').removeClass('glyphicon-ok');
        //если элемент не прошёл проверку, то отметить форму как не валидную
        formValid = false;
      }
    });

    //проверяем элемент, содержащий код капчи
    //1. Получаем капчу
    var captcha = grecaptcha.getResponse();
    //2. Если длина кода капчи, которой ввёл пользователь не равно 6,
    //   то сразу отмечаем капчу как невалидную (без отправки на сервер)
    if (!captcha.length) {
      // Выводим сообщение об ошибке
      $('#recaptchaError').text('* Вы не прошли проверку "Я не робот"');
    } else {
      // получаем элемент, содержащий капчу
      $('#recaptchaError').text('');
    }

    // если форма валидна и длина капчи не равно пустой строке, то отправляем форму на сервер (AJAX)
    if ((formValid) && (captcha.length)) {

      // получаем имя, которое ввёл пользователь
      var name = $("#name").val();
      // получаем email, который ввёл пользователь
      var email = $("#email").val();
      // получаем сообщение, которое ввёл пользователь
      var message = $("#message").val();

      // объект, посредством которого будем кодировать форму перед отправкой её на сервер
      var formData = new FormData();
      // добавить в formData значение 'name'=значение_поля_name
      formData.append('name', name);
      // добавить в formData значение 'email'=значение_поля_email
      formData.append('email', email);
      // добавить в formData значение 'message'=значение_поля_message
      formData.append('message', message);
      // добавить в formData файлы
      // получить все элементы с атрибутом name="images[]"
      var images = document.getElementsByName("images[]");
      // перебрать все элементы images с помощью цикла
      for (var i = 0; i < images.length; i++) {
        // получить список файлов элемента input с type="file"
        var fileList = images[i].files;
        // если элемент не содержит файлов, то перейти к следующей
        if (fileList.length > 0) {
          // получить первый файл из списка
          var file = fileList[0];
          // проверить тип файла и размер
          if ((file.type.match('image.*')) && (file.size<524288)) {
            // добавить его (файл (file) с именем file.name) в formData
            formData.append('images[]', file, file.name);
          }
        }
      }

      // добавить в formData значение 'g-recaptcha-response'=значение_recaptcha
      formData.append('g-recaptcha-response', captcha);

      // технология AJAX
      $.ajax({
        //метод передачи запроса - POST
        type: "POST",
        //URL-адрес запроса
        url: "/feedback/process.php",
        //передаваемые данные - formData
        data: formData,
        // не устанавливать тип контента, т.к. используется FormData
        contentType: false,
        // не обрабатывать данные formData
        processData: false,
        // отключить кэширование результатов в браузере
        cache: false,
        //при успешном выполнении запроса
        success: function (data) {
          // разбираем строку JSON, полученную от сервера
          var $data =  JSON.parse(data);
          // устанавливаем элементу, содержащему текст ошибки, пустую строку
          $('#error').text('');

          // если сервер вернул ответ success, то значит двнные отправлены
          if ($data.result == "success") {
            // скрываем форму обратной связи
            $('#messageForm').hide();
            // удаляем у элемента, имеющего id=msgSubmit, класс hidden
            $('#msgSubmit').removeClass('hidden');
          } else {
            // Если сервер вернул ответ error, то делаем следующее...
            $('#error').text('Произошла ошибка при отправке формы на сервер.');
            // Сбрасываем виджет reCaptcha
            grecaptcha.reset();
            // Если существует свойство msg у объекта $data, то...
            if ($data.msg) {
              // вывести её в элемент у которого id=recaptchaError
              $('#msg').text($data.msg);
            }
            if ($data.files) {
              $('#error').html($('#error').text()+'<br>'+$data.files);
            }
          }
        },
        error: function (request) {
          $('#error').text('Произошла ошибка ' + request.responseText + ' при отправке данных.');
        }
      });
    }
  });
});
