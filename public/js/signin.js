const passwordInput = document.getElementById('password');
        const passwordInfo = document.querySelector('.password-info');

        passwordInput.addEventListener('input', function() {
            if (passwordInput.value.length < 8) {
                passwordInfo.style.display = 'block';
            } else {
                passwordInfo.style.display = 'none';
            }
        });
    
