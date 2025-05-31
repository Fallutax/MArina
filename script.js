
registerFormElement.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('registerEmail').value;
    const password = document.getElementById('registerPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const terms = document.getElementById('terms').checked;
    
    // Validación (igual que antes)
    if (!firstName || !lastName || !email || !password || !confirmPassword) {
        alert('Por favor complete todos los campos');
        return;
    }
    
    if (password !== confirmPassword) {
        alert('Las contraseñas no coinciden');
        return;
    }
    
    if (password.length < 8) {
        alert('La contraseña debe tener al menos 8 caracteres');
        return;
    }
    
    if (!terms) {
        alert('Por favor acepte los Términos de Servicio y Política de Privacidad');
        return;
    }
    
    // Enviar datos al servidor con Fetch API
    const formData = {
        firstName: firstName,
        lastName: lastName,
        registerEmail: email,
        registerPassword: password
    };
    
    fetch('procesar_registro.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(formData)
    })
    .then(response => response.text())
    .then(data => {
        if (data === "Registro exitoso") {
           alert(`¡Bienvenido, ${firstName}! Tu cuenta ha sido creada exitosamente.`);
           window.location.href = 'login.php';
        } else {
            alert('Error al registrar: ' + data);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('error');
    });
});
