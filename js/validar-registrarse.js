let getAlert = document.getElementById("alert");

console.log("Holaaaa..")

// VALIDAR EMAIL
function validarCorreo(email) {
  // EXPRESION REGULAR
  if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/.test(email)) return false;
  if (email.length === 0) return false;
  if (email.length < 6) return false;
  return true;
}

// VALIDAR PASSWORD
function validarPassword(password) {

  if (!/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,16}$/.test(password)) return false;
  if (password.length === 0) return false;
  return true;
} 

// mensaje de alerta
function getHtmlAlert(tipo, header, mensaje) {
  return `<div class="ui icon ${tipo} message">
            <i class="close icon" onclick="ocultar()"></i>
            <div class="content">
                <div class="header">
                    ${header}
                </div>
                <p>${mensaje}</p>
            </div>
          </div>`;
}

// FUNCIÓN DE ALERTA
function showAlert(tipo, header, mensaje, divElement) {
  divElement.innerHTML = getHtmlAlert(tipo, header, mensaje);
}
// FUNCIÓN DE PARA VALIDAR EL USUARIO
function validarUsuario() {
  let email = document.getElementById("email").value;
  let passswordUser = document.getElementById("passwordUser").value;
  let passswordUserConfirm = document.getElementById("passswordUserConfirm").value;

  console.log(email,passswordUser)

  if (!validarCorreo(email)) {
    showAlert( "error", "Error en su email", "El email es incorrecto", getAlert);
    return false; 
  }

  if (passswordUser !== passswordUserConfirm) {
    showAlert( "error", "Error en sus contraseñas", "El verificar que ambas constraseñas sean correctas", getAlert);
    return false; 
  }

  if (!validarPassword(passswordUser)) {
    showAlert("error", "Error en su contraseña","La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. Puede tener otros símbolos.", getAlert);
    return false; 
  }

  return true;
  
}

function ocultar() {
    $('#alert .message').hide();
}