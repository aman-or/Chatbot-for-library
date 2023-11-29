function scrollDown(e) {
    document.getElementById("next1").scrollTop =
    document.getElementById("next1").scrollHeight;
    e.preventDefault;
  }
  
  function scrollDown1(e) {
    document.getElementById("next2").scrollTop =
    document.getElementById("next2").scrollHeight;
    e.preventDefault;
  }
  
  function scrollDown2(e) {
    document.getElementById("next3").scrollTop =
    document.getElementById("next3").scrollHeight;
    e.preventDefault;
  }
  
  function showHide(element_id) {
    //Если элемент с id-шником element_id существует
    if (document.getElementById(element_id)) {
      //Записываем ссылку на элемент в переменную obj
      var obj = document.getElementById(element_id);
      //Если css-свойство display не block, то:
      if (obj.style.display != "block") {
        obj.style.display = "block"; //Показываем элемент
      } else obj.style.display = "none"; //Скрываем элемент
    }
    //Если элемент с id-шником element_id не найден, то выводим сообщение
    else alert("Элемент с id: " + element_id + " не найден!");
  }
  
  