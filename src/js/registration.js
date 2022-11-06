const button = document.getElementById("button")
const firstName = document.getElementById("firstName")
const lastName = document.getElementById("lastName")
const adress = document.getElementById("adress")
const phone = document.getElementById("phone")
const city = document.getElementById("city")
const email = document.getElementById("email")
const password = document.getElementById("password")

let regexFirstName = new RegExp('^[a-zA-z]{2,50}$')
let regexLastName = new RegExp('^[a-zA-z]{2,50}$')
let regexAdress = new RegExp('^[a-zA-z0-9 ]{2,100}$')
let regexPhone = new RegExp('^[0]+[6-7]+[0-9]{8}$')
let regexCity = new RegExp('^[a-zA-z0-9]{1,60}$')
let regexEmail = new RegExp('^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$')

firstName.addEventListener("keyup", () => {
    if (regexFirstName.test(firstName.value))
    {
        firstName.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        firstName.style.boxShadow = 'red 0 0 2px 2px'
    }
})

lastName.addEventListener("keyup", () => {
    if (regexLastName.test(lastName.value))
    {
        lastName.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        lastName.style.boxShadow = 'red 0 0 2px 2px'
    }
})

adress.addEventListener("keyup", () => {
    if (regexAdress.test(adress.value))
    {
        adress.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        adress.style.boxShadow = 'red 0 0 2px 2px'
    }
})

phone.addEventListener("keyup", () => {
    if (regexPhone.test(phone.value))
    {
        phone.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        phone.style.boxShadow = 'red 0 0 2px 2px'
    }
})

city.addEventListener("keyup", () => {
    if (regexCity.test(city.value))
    {
        city.style.boxShadow = 'green 0 0 2px 2px'
    }
    else
    {
        city.style.boxShadow = 'red 0 0 2px 2px'
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

button.addEventListener("click", (e) => {
    e.preventDefault()
    if (regexFirstName.test(firstName.value) && regexLastName.test(lastName.value) && regexAdress.test(adress.value) && regexPhone.test(phone.value) && regexCity.test(city.value) && regexEmail.test(email.value) && password.value.length >= 8 && password.value.length <= 16)
    {
        getUser()
    }
    else
    {
        if (!regexFirstName.test(firstName.value))
        {
            firstName.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (!regexLastName.test(lastName.value))
        {
            lastName.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (!regexAdress.test(adress.value))
        {
            adress.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (!regexPhone.test(phone.value))
        {
            phone.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (!regexCity.test(city.value))
        {
            city.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (!regexEmail.test(email.value))
        {
            email.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (password.value.length <= 8 || password.value.length >= 16)
        {
            password.style.boxShadow = 'red 0 0 2px 2px'
        }
    }
})

async function getUser ()
{
    try {
        const data = await fetch('./?action=valideRegistration&firstName=' + encodeURIComponent(firstName.value) + '&lastName=' + encodeURIComponent(lastName.value) + '&adress=' + encodeURIComponent(adress.value) + '&phone=' + encodeURIComponent(phone.value) + '&city=' + encodeURIComponent(city.value) + '&email=' + encodeURIComponent(email.value) + '&password=' + encodeURIComponent(password.value))
        const response = await data.json()
        console.log(response)
    }
    catch (execption) {
        console.error(execption)
    }
}