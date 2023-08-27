const sendEmail = async (url, body) => {
  const resp = await fetch(url, {
    method: "POST",
    body: JSON.stringify(body),
    headers: {
      "Content-Type": "application/json",
    },
  });
  return resp;
};

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

const openLoading = (title, text) =>{
  Swal.fire({
    title: title,
    text: text,
    icon: 'info',
    allowOutsideClick: false,
    showConfirmButton: false,
    onBeforeOpen: () => {
      Swal.showLoading();
    }
  });
}
