function validateForm() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let usernameError = document.getElementById("username-error");
    let passwordError = document.getElementById("password-error");

    // Clear previous error messages
    usernameError.textContent = "";
    passwordError.textContent = "";

    let isValid = true;

    // Check if username is empty
    if (username === "") {
        usernameError.textContent = "Must be filled";
        isValid = false;
    }

    // Check if password is empty
    if (password === "") {
        passwordError.textContent = "Must be filled";
        isValid = false;
    }

    // Check if password is more than 6 characters
    if (password.length > 6) {
        passwordError.textContent = "Password is more than 6 characters";
        isValid = false;
    }

    // Check if password contains both uppercase and lowercase letters
    if (!(/[A-Z]/.test(password) && /[a-z]/.test(password))) {
        passwordError.textContent = "Password must be uppercase and lowercase.";
        isValid = false;
    }
    
    function calculatePrice() {
        let weight = parseInt(document.getElementById('weight').value);
        let service = document.getElementById('service').value;
        let laundryType = document.getElementById('laundryType').value;
        let membership = document.getElementById('membership').value;
        let laundryCount = parseInt(document.getElementById('laundryCount').value);
        
        let pricePerKg = 0;
        
        // Set the base price per kilo based on service type
        if (service === "wash-dry") {
            pricePerKg = 1000;
        } else if (service === "wash-ironing") {
            pricePerKg = 1200;
        } else if (service === "ironing-only") {
            pricePerKg = 900;
        }
    
        // Add extra fee if Express is selected
        if (laundryType === "express") {
            pricePerKg += 200;
        }
    
        // Calculate total price before discounts
        let totalPrice = weight * pricePerKg;
    
        // Apply coupon if this is the 6th laundry (2 kg free)
        if (laundryCount >= 5) {
            totalPrice -= 2 * pricePerKg;
            if (totalPrice < 0) totalPrice = 0; // Ensure price doesn't go below 0
        }
    
        // Apply 10% membership discount if applicable
        if (membership === "member") {
            totalPrice *= 0.9;
        }
    
        // Display the total price
        document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        document.getElementById('result').style.display = 'block';
    }

    return isValid;
}
