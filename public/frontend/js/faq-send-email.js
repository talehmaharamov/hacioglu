

const url = `${BASE_URL}/api/landingPage/send-email-faq-phoenix`;

const contactForm = document.getElementById("contact-form");
const btnSubmitFaq = document.getElementById('btn-faq-submit');

const formEmail = document.getElementById("formEmail");
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

    if( !body.message) {
        isValid = false;
        formMessage.style.border = "1px solid #f00"
    }

    return isValid;
}

const limpiarCampos = () => {
    formEmail.value = "";
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
        email: formEmail.value,  
        subject: formSubject.value, 
        message: formMessage.value
    }

    const formValid = validarFormulario(body);

    if( formValid ) {
        const resp = await sendEmail(url, body);
        const data = await resp.json();
        
        if(data.status === "success") {
            mensajeDeEnvio("success", 'Successfully');
            limpiarCampos();
        } else {
            mensajeDeEnvio("error", 'Error sending, please try again later');
        }

    }

    btnSubmitFaq.disabled = false;
    btnSubmitFaq.innerHTML = `
    <span class="txt">submit now</span>
    `;

})


