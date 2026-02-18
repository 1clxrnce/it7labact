function validateForm(formType) {
    var input;
    if (formType === 'get') {
        input = document.querySelector('input[name="get_name"]');
        var email = document.querySelector('input[name="get_email"]');
        var age = document.querySelector('input[name="get_age"]');
        
        if (input.value.trim() === '') {
            alert('Please enter your name!');
            return false;
        }
        
        if (input.value.length < 2) {
            alert('Name must be at least 2 characters!');
            return false;
        }
        
        if (email.value.trim() === '') {
            alert('Please enter your email!');
            return false;
        }
        
        if (!email.value.includes('@')) {
            alert('Please enter a valid email!');
            return false;
        }
        
        if (age.value && (age.value < 1 || age.value > 120)) {
            alert('Age must be between 1 and 120!');
            return false;
        }
        
    } else {
        input = document.querySelector('input[name="post_name"]');
        var email = document.querySelector('input[name="post_email"]');
        var password = document.querySelector('input[name="post_password"]');
        var message = document.querySelector('textarea[name="post_message"]');
        
        if (input.value.trim() === '') {
            alert('Please enter your name!');
            return false;
        }
        
        if (input.value.length < 2) {
            alert('Name must be at least 2 characters!');
            return false;
        }
        
        if (email.value.trim() === '') {
            alert('Please enter your email!');
            return false;
        }
        
        if (!email.value.includes('@')) {
            alert('Please enter a valid email!');
            return false;
        }
        
        if (password.value.length < 6) {
            alert('Password must be at least 6 characters!');
            return false;
        }
        
        if (message.value.length > 500) {
            alert('Message is too long! Maximum 500 characters.');
            return false;
        }
    }
    
    return true;
}
