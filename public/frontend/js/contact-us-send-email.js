

const url_contact = `${BASE_URL}/api/landingPage/send-email-phoenix`;

const contactForm = document.getElementById("contact-form");
const btnSubmit = document.getElementById('btn-submit');

const formName = document.getElementById("formName");
const formEmail = document.getElementById("formEmail");
const formPhone = document.getElementById("formPhone");
const formSubject = document.getElementById("formSubject");
const formMessage = document.getElementById("formMessage");


const emailValidate = (email) => {
    return email.match(/[^\s@]+@[^\s@]+\.[^\s@]+/gi);
};

const validarFormulario = (body) => {
    let isValid = true;

    if( !emailValidate(body.email.trim())) {
        isValid = false;
        formEmail.style.border = "1px solid #f00"
    }

    if( !body.name) {
        isValid = false;
        formName.style.border = "1px solid #f00"
    }

    if( !body.message) {
        isValid = false;
        formMessage.style.border = "1px solid #f00"
    }

    return isValid;
}

const limpiarCampos = () => {
    formName.value = "";
    formEmail.value = "";
    formPhone.value = "";
    formSubject.value = "";
    formMessage.value = "";
}

const mensajeDeEnvio = (icon, title) => {
    const Toast = Swal.mixin({
        toast: true,
        position: "bottom",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
    Toast.fire({
        icon: icon,
        title: title
    })
}



contactForm.addEventListener('submit', async (e) => {

    e.preventDefault();

    const body = {
        name: formName.value, 
        email: formEmail.value, 
        phone: formPhone.value, 
        subject: formSubject.value, 
        message: formMessage.value
    }

    const formValid = validarFormulario(body);

    if( formValid ) {
        const resp = await sendEmail(url_contact, body);
        const data = await resp.json();
        
        if(data.status === "success") {
            mensajeDeEnvio("success", 'Successfully');
            limpiarCampos();
        } else {
            mensajeDeEnvio("error", 'Error sending, please try again later');
        }

    }

    btnSubmit.disabled = false;
    btnSubmit.innerHTML = `
    <span class="txt">
        submit now <i class="icon-right"></i>
    </span>
    `;
    

})


