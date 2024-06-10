//For Image Rendering
document.getElementById('upload').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.querySelector('.profile-pic').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

//For Qualifications
let temp = 0;
document.getElementById('addQualifications').addEventListener('click', function () {
    let nId = "qualifications" + temp;
    if (document.getElementById(nId).value== "") {
        alert("Empty field!");
    } else {
        temp++;
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'qualifications[]';
        input.className = 'selectpicker form-control';
        input.placeholder = 'Enter qualification';
        input.id = 'qualifications'+temp;
        document.getElementById('doctor-qualifications').appendChild(input);
    }
});

//For Mobile Number
// let temp1 = 0;
// document.getElementById('addNumber').addEventListener('click', function () {
//     let newId = "mobno" + temp1;
//     // document.write(newId);
//     if (document.getElementById(newId).value == "") {
//         alert("Empty field!");
//     }
//     else {
//         temp1++;
//         let input = document.createElement('input');
//         input.type = 'text';
//         input.name = 'mobno[]';
//         input.className = 'form-control';
//         input.placeholder = 'Enter Mobile Number';
//         input.id = 'mobno' + temp1;
//         document.getElementById('nomcontainer').appendChild(input);
//     }
// });

function validateForm() {
    const form = document.getElementById('fm');

    // Getting values and trimming
    const fname = form.fname.value.trim();
    const lname = form.lname.value.trim();
    const gender = form.gender.value.trim();
    const address = form.add.value.trim();
    const mobile = form.mobno0.value.trim();
    const email = form.email.value.trim();
    const pincode = form.pno.value.trim();
    const city = form.city.value.trim();
    const username = form.uname.value.trim();
    const password = form.pass.value.trim();
    const repeatPassword = form.rpass.value.trim();

    // Check if all fields are filled
    if ([fname, lname, gender, address, mobile, email, pincode, city, username, password, repeatPassword].includes('')) {
        alert('All fields are required');
        return false;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address');
        form.email.focus();
        return false;
    }

    // Mobile number validation
    const mobileRegex = /^[0-9]{10}$/;
    if (!mobileRegex.test(mobile)) {
        alert('Please enter a valid 10-digit mobile number');
        form.mobno0.focus();
        return false;
    }

    // Username length validation
    if (username.length < 6) {
        alert('Username must be at least 6 characters long');
        form.uname.focus();
        return false;
    }

    // Password length validation
    if (password.length < 6) {
        alert('Password must be at least 6 characters long');
        form.pass.focus();
        return false;
    }

    // Password match validation
    if (password !== repeatPassword) {
        alert('Passwords do not match');
        form.rpass.focus();
        return false;
    }

    return true;
}

