const button = document.getElementById("button")
const email = document.getElementById("email")
const password = document.getElementById("password")
const error = document.getElementById("error")

let regExp = new RegExp('^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$')

email.addEventListener("keyup", () => {
    if (regExp.test(email.value))
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
    if (regExp.test(email.value) && password.value.length >= 8 && password.value.length <= 16)
    {
        valide()
    }
    else
    {
        if (!regExp.test(email.value))
        {
            email.style.boxShadow = 'red 0 0 2px 2px'
        }
        if (password.value.length <= 8 || password.value.length >= 16)
        {
            password.style.boxShadow = 'red 0 0 2px 2px'
        }
    }
})

async function valide ()
{
    try {
        const data = await fetch('./?action=valideLogin&email=' + encodeURIComponent(email.value) + '&password=' + encodeURIComponent(password.value))
        const response = await data.json()
        if (response.status == "valide") {
            window.location.href = "./index.php?"
        }
        else {
            error.innerHTML = "L'adresse mail ou le mot de passe est incorret"
        }
    }
    catch (execption) {
        console.error(execption)
    }
}