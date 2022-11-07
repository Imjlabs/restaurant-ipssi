const button = document.getElementById("button")
const fullName = document.getElementById("name")
const email = document.getElementById("email")
const password = document.getElementById("password")
const phone_number = document.getElementById("phone_number")
const error = document.getElementById("error")

let regexName = new RegExp('^[a-zA-z ]{2,50}$')
let regexPhoneNumber = new RegExp('^[0]+[6-7]+[0-9]{8}$')
let regexEmail = new RegExp('^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$')

fullName.addEventListener("keyup", () => {
    if (regexName.test(fullName.value))
    {
        fullName.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        fullName.style.boxShadow = 'red 0 0 2px 2px'
    }
})

email.addEventListener("keyup", () => {
    if (regexEmail.test(email.value))
    {
        email.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        email.style.boxShadow = 'red 0 0 2px 2px'
    }
})

password.addEventListener("keyup", () => {
    if (password.value.length >= 8 && password.value.length <= 16)
    {
        password.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        password.style.boxShadow = 'red 0 0 2px 2px'
    }
})

phone_number.addEventListener("keyup", () => {
    if (regexPhoneNumber.test(phone_number.value))
    {
        phone_number.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        phone_number.style.boxShadow = 'red 0 0 2px 2px'
    }
})

button.addEventListener("click", (e) => {
    e.preventDefault()
    if (regexName.test(fullName.value) && regexEmail.test(email.value) && password.value.length >= 8 && password.value.length <= 16 && regexPhoneNumber.test(phone_number.value))
    {
        valide()
    }
    else
    {
        if (!regexName.test(fullName.value))
        {
            fullName.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (!regexEmail.test(email.value))
        {
            email.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (password.value.length <= 8 || password.value.length >= 16)
        {
            password.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (!regexPhoneNumber.test(phone_number.value))
        {
            phone_number.style.boxShadow = 'red 0 0 2px 2px'
        }
    }
})

async function valide ()
{
    try {
        const data = await fetch('./?action=valideRegistration&name=' + encodeURIComponent(fullName.value) + '&email=' + encodeURIComponent(email.value) + '&password=' + encodeURIComponent(password.value) + '&phone_number=' + encodeURIComponent(phone_number.value))
        const response = await data.json()
        if (response.status == "valide") {
            window.location.href = "./index.php?action=registrationConfirmation"
        }
        else {
            error.innerHTML = "L'adresse mail est déjà relié à un compte"
        }
    }
    catch (execption) {
        console.error(execption)
    }
}