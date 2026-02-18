function validateForm(formType) {
    var input;
    if (formType === 'get') {
        input = document.querySelector('input[name="get_name"]');
    } else {
        input = document.querySelector('input[name="post_name"]');
    }
    
    if (input.value.trim() === '') {
        alert('Please enter your name!');
        return false;
    }
    
    if (input.value.length < 2) {
        alert('Name must be at least 2 characters!');
        return false;
    }
    
    return true;
}
