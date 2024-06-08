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
let temp1 = 0;
document.getElementById('addNumber').addEventListener('click', function () {
    let newId = "mobno" + temp1;
    // document.write(newId);
    if (document.getElementById(newId).value == "") {
        alert("Empty field!");
    }
    else {
        temp1++;
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'mobno[]';
        input.className = 'form-control';
        input.placeholder = 'Enter Mobile Number';
        input.id = 'mobno' + temp1;
        document.getElementById('nomcontainer').appendChild(input);
    }
});

    function validateForm() {
        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var gender = document.getElementById('gender').value;
        var add = document.getElementById('add').value;
        var mobno = document.getElementById('mobno0').value;
        var email = document.getElementById('email').value;
        var pno = document.getElementById('pno').value;
        var city = document.getElementById('city').value;
        var uname = document.getElementById('uname').value;
        var pass = document.getElementById('pass').value;
        var rpass = document.getElementById('rpass').value;

        if (fname.trim() == '' || lname.trim() == '' || gender.trim() == '' || add.trim() == '' || mobno.trim() == '' || email.trim() == '' || pno.trim() == '' || city.trim() == '' || uname.trim() == '' || pass.trim() == '' || rpass.trim() == '') {
            alert('All fields are required');
            return false;
        }

        // Validate email
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address');
            return false;
        }

        // Validate mobile number
        var mobnoRegex = /^[0-9]+$/;
        if (!mobnoRegex.test(mobno) || mobno.length != 10) {
            alert('Please enter a valid 10-digit mobile number');
            return false;
        }

        // Validate password match
        if (pass != rpass) {
            alert('Passwords do not match');
            return false;
        }

        // Validate minimum username length
        if (uname.length < 6) {
            alert('Username must be at least 6 characters long');
            return false;
        }

        // Validate minimum password length
        if (pass.length < 6) {
            alert('Password must be at least 6 characters long');
            return false;
        }

        return true;
    }
