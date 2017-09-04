function goEmail() {
  var connect, form, response, result, user, email, text;
  user = __('name_user').value;
  email = __('email_contact').value;
  text = __('text_user').value;
  form = 'user=' + user + '&email=' + email + '&text=' + text;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function() {
    if(connect.readyState == 4 && connect.status == 200) {
      if(connect.responseText == 1) {
        result = '<div class="alert alert-dismissible alert-success">';
        result += '<h4>Conectado!</h4>';
        result += '<p><strong>Estamos redireccionandote...</strong></p>';
        result += '</div>';
        __('_AJAX_EMAIL_').innerHTML = result;
        location.reload();
      } else {
        __('_AJAX_EMAIL_').innerHTML = connect.responseText;
      }
    } else if(connect.readyState != 4) {
      result = '<div class="alert alert-dismissible alert-warning">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';
      result += '<h4>Procesando...</h4>';
      result += '<p><strong>Estamos intentando logearte....</strong></p>';
      result += '</div>';
      __('_AJAX_EMAIL_').innerHTML = result;
    }else{

    	alert("alerta")
    }
  }
  connect.open('POST','ajax.php?mode=email',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}

function runScriptEmail(e) {
  if(e.keyCode == 13) {
    goEmail();
  }else{

  }
}
