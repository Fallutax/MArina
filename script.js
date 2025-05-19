document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const showRegister = document.getElementById('showRegister');
    const showLogin = document.getElementById('showLogin');
    const loginFormElement = document.getElementById('loginFormElement');
    const registerFormElement = document.getElementById('registerFormElement');
    const successMessage = document.getElementById('successMessage');
    const successText = document.getElementById('successText');
    
    // Demo users database
    const users = [];
    
    // Show register form
    showRegister.addEventListener('click', function(e) {
        e.preventDefault();
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
    });
    
    // Show login form
    showLogin.addEventListener('click', function(e) {
        e.preventDefault();
        registerForm.classList.add('hidden');
        loginForm.classList.remove('hidden');
    });
    
    // Handle login form submission
    loginFormElement.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = document.getElementById('loginEmail').value;
        const password = document.getElementById('loginPassword').value;
        
        // Simple validation
        if (!email || !password) {
            alert('Please fill in all fields');
            return;
        }
        
        // Check if user exists
        const user = users.find(u => u.email === email && u.password === password);
        
        if (user) {
            successText.textContent = `Welcome back, ${user.firstName}! You have successfully logged in.`;
            loginForm.classList.add('hidden');
            successMessage.classList.remove('hidden');
        } else {
            // For demo purposes, allow any login
            successText.textContent = `Welcome back! You have successfully logged in.`;
            loginForm.classList.add('hidden');
            successMessage.classList.remove('hidden');
        }
    });
    
    // Handle register form submission
    registerFormElement.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const firstName = document.getElementById('firstName').value;
        const lastName = document.getElementById('lastName').value;
        const email = document.getElementById('registerEmail').value;
        const password = document.getElementById('registerPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const terms = document.getElementById('terms').checked;
        
        // Simple validation
        if (!firstName || !lastName || !email || !password || !confirmPassword) {
            alert('Please fill in all fields');
            return;
        }
        
        if (password !== confirmPassword) {
            alert('Passwords do not match');
            return;
        }
        
        if (password.length < 8) {
            alert('Password must be at least 8 characters long');
            return;
        }
        
        if (!terms) {
            alert('Please agree to the Terms of Service and Privacy Policy');
            return;
        }
        
        // Check if user already exists
        const userExists = users.some(u => u.email === email);
        
        if (userExists) {
            alert('User  with this email already exists');
            return;
        }
        
        // Add user to database
        users.push({
            firstName,
            lastName,
            email,
            password
        });
        
        successText.textContent = `Welcome, ${firstName}! Your account has been created successfully.`;
        registerForm.classList.add('hidden');
        successMessage.classList.remove('hidden');
    });
});

const form = event.target;
const formData = new FormData(form);
fetch('reclutamiento.php', {
    method: 'POST',
    body: formData
})
.then(response => {
    if (!response.ok) {
        throw new Error('Error en la solicitud');
    }
    return response.text();
})
.then(data => {
    const messageArea = document.getElementById('messageArea');
    messageArea.textContent = 'Formulario enviado con éxito.';
    messageArea.classList.remove('error');
    // Optionally show server response:
    // messageArea.textContent += ' ' + data;
})
.catch(error => {
    const messageArea = document.getElementById('messageArea');
    messageArea.textContent = 'Error al enviar el formulario.';
    messageArea.classList.add('error');
    console.error('Error:', error);
});
