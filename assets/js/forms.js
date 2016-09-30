/* 
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";

    // Finally submit the form. 
    form.submit();
}


function regformhash(form, uid, email, password, conf) {
    // Check each field has a value
    
    if (uid.value == '' || email.value == '' || password.value == '' || conf.value == '' ) {
        alert('Debes de proporcionar todos los campos requeridos. Por favor, intenta de nuevo');
        return false;
    }

    re=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!re.test(email.value)) {
        alert('El correo electrónico ingresado es inválido. Por favor, intenta de nuevo');
        return false;
    }

    // Check that the password is sufficiently long (min 6 chars)
    if (password.value.length < 6) {
        alert('La contraseña debe de tener al menos seis caractereres de longitud. Por favor, intenta de nuevo');
        form.password.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('La contraseña debe de contener al menos un número, una letra en minúscula y una letra en mayúscula. Por favor, intenta de nuevo');
        return false;
    }
    
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Tu contraseña y la contraseña repetida no coinciden. Por favor, intenta de nuevo');
        form.password.focus();
        return false;
    }

    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";

    // Finally submit the form. 
    form.submit();
    return true;
}

function regformhashlogin(form, uid, email, password) {
    // Check each field has a value
    if (uid.value == '' || email.value == '' || password.value == '') {
        alert('Debes de proporcionar todos los campos requeridos. Por favor, intenta de nuevo');
        return false;
    }
    
    if (password.value.length < 6) {
        alert('La contraseña debe de tener al menos seis caractereres de longitud. Por favor, intenta de nuevo');
        form.password.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('La contraseña debe de contener al menos un número, una letra en minúscula y una letra en mayúscula. Por favor, intenta de nuevo');
        return false;
    }
    
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Tu contraseña y la contraseña repetida no coinciden. Por favor, intenta de nuevo');
        form.password.focus();
        return false;
    }
        
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";

    // Finally submit the form. 
    form.submit();
    return true;
}
