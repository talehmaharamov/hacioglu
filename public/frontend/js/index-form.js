(function () {
  const URL_SERVICE = `${BASE_URL}/api/landingPage/send-email-index-phoenix`;

  //Sync Tabs
  const btnBodyFormTab1 = document.getElementById("btnBodyFormTab1");
  const btnBodyFormTab2 = document.getElementById("btnBodyFormTab2");
  const btnSlideFormTab1 = document.getElementById("btnSlideFormTab1");
  const btnSlideFormTab2 = document.getElementById("btnSlideFormTab2");

  function syncTabs(twinTab) {
    if (!twinTab.classList.contains("active")) {
      const event = new Event("click");
      twinTab.dispatchEvent(event);
    }
  }

  btnBodyFormTab1.addEventListener("click", () => {
    syncTabs(btnSlideFormTab1);
  });

  btnBodyFormTab2.addEventListener("click", () => {
    syncTabs(btnSlideFormTab2);
  });

  btnSlideFormTab1.addEventListener("click", () => {
    syncTabs(btnBodyFormTab1);
  });

  btnSlideFormTab2.addEventListener("click", () => {
    syncTabs(btnBodyFormTab2);
  });

  // Sync Forms
  const idSlideForm1 = document.getElementById("id-slide-form1");
  const idSlideForm2 = document.getElementById("id-slide-form2");
  const idBodyForm1 = document.getElementById("id-body-form1");
  const idBodyForm2 = document.getElementById("id-body-form2");

  function copyFormValues(idSlideForm1, idBodyForm1) {
    const formData = $(idSlideForm1).serializeArray();
    idBodyForm1.reset();
    formData.forEach((field) => {
      const input2 = idBodyForm1.querySelector(`[name="${field.name}"]`);
      if (input2 && input2.type === "text") {
        input2.value = field.value;
      }
      if (input2 && input2.type === "select-one") {
        input2.value = field.value;
        $(`#${idBodyForm1.id} select[name='${input2.name}']`).niceSelect(
          "update"
        );
      }
    });
  }

  $(document).on("change", "#id-slide-form1", function () {
    copyFormValues(idSlideForm1, idBodyForm1);
  });
  $(document).on("change", "#id-slide-form2", function () {
    copyFormValues(idSlideForm2, idBodyForm2);
  });
  $(document).on("change", "#id-body-form1", function () {
    copyFormValues(idBodyForm1, idSlideForm1);
  });
  $(document).on("change", "#id-body-form2", function () {
    copyFormValues(idBodyForm2, idSlideForm2);
  });

  // Send Emails
  const isResidential = true;
  const btnSlideForm1 = document.getElementById("btnSlideForm1");
  const btnBodyForm1 = document.getElementById("btnBodyForm1");
  const btnSlideForm2 = document.getElementById("btnSlideForm2");
  const btnBodyForm2 = document.getElementById("btnBodyForm2");

  function getValuesFromForm(form) {
    const formData = new FormData(form);
    const data = {};
    for (let [nombre, valor] of formData) {
      data[nombre] = valor;
    }
    return data;
  }

  function validationForm(form) {
    const regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    const inputs = form.querySelectorAll("[name]");
    let isValid = true;

    for (let i = 0; i < inputs.length; i++) {
      const input = inputs[i];

      if (input.hasAttribute("required") && input.value.trim() === "") {
        input.classList.add("error-form-input");
        isValid = false;
      } else {
        input.classList.remove("error-form-input");
      }

      if (input.name === "email" && !regex.test(input.value?.trim())) {
        input.classList.add("error-form-input");
        isValid = false;
      }

      if (input.name === "email" && regex.test(input.value?.trim())) {
        input.classList.remove("error-form-input");
      }

      if (input.name === "helpWith" && input.value?.trim() === "") {
        input.classList.add("error-form-input");
        $(`#${form.id} select[name='${input.name}']`).niceSelect("update");
        isValid = false;
      }

      if (input.name === "helpWith" && input.value?.trim() !== "") {
        input.classList.remove("error-form-input");
        $(`#${form.id} select[name='${input.name}']`).niceSelect("update");
      }

      if (input.name === "endProject" && input.value?.trim() === "") {
        input.classList.add("error-form-input");
        $(`#${form.id} select[name='${input.name}']`).niceSelect("update");
        isValid = false;
      }

      if (input.name === "endProject" && input.value?.trim() !== "") {
        input.classList.remove("error-form-input");
        $(`#${form.id} select[name='${input.name}']`).niceSelect("update");
      }
    }

    return isValid;
  }

  btnSlideForm1.addEventListener("click", async () => {
    const isValid = validationForm(idSlideForm1);
    if (!isValid) return;

    const values = getValuesFromForm(idSlideForm1);
    values.isResidential = isResidential;

    openLoading("Please Wait", "Sending message...");
    const resp = await sendEmail(URL_SERVICE, values);
    const data = await resp.json();

    if (data.status === "success") {
      mensajeDeEnvio("success", "Successfully");
      idSlideForm1.reset();
      idBodyForm1.reset();
      resetSelects(idSlideForm1, idBodyForm1);
    } else {
      mensajeDeEnvio("error", "Error sending, please try again later");
    }
  });

  btnBodyForm1.addEventListener("click", async () => {
    const isValid = validationForm(idBodyForm1);
    if (!isValid) return;

    const values = getValuesFromForm(idBodyForm1);
    values.isResidential = isResidential;

    openLoading("Please Wait", "Sending message...");
    const resp = await sendEmail(URL_SERVICE, values);
    const data = await resp.json();

    if (data.status === "success") {
      mensajeDeEnvio("success", "Successfully");
      idBodyForm1.reset();
      idSlideForm1.reset();
      resetSelects(idSlideForm1, idBodyForm1);
    } else {
      mensajeDeEnvio("error", "Error sending, please try again later");
    }
  });

  btnSlideForm2.addEventListener("click", async () => {
    const isValid = validationForm(idSlideForm2);
    if (!isValid) return;

    const values = getValuesFromForm(idSlideForm2);
    values.isResidential = !isResidential;

    openLoading("Please Wait", "Sending message...");
    const resp = await sendEmail(URL_SERVICE, values);
    const data = await resp.json();

    if (data.status === "success") {
      mensajeDeEnvio("success", "Successfully");
      idSlideForm2.reset();
      idBodyForm2.reset();
      resetSelects(idSlideForm2, idBodyForm2);
    } else {
      mensajeDeEnvio("error", "Error sending, please try again later");
    }
  });

  btnBodyForm2.addEventListener("click", async () => {
    const isValid = validationForm(idBodyForm2);
    if (!isValid) return;

    const values = getValuesFromForm(idBodyForm2);
    values.isResidential = !isResidential;

    openLoading("Please Wait", "Sending message...");
    const resp = await sendEmail(URL_SERVICE, values);
    const data = await resp.json();

    if (data.status === "success") {
      mensajeDeEnvio("success", "Successfully");
      idBodyForm2.reset();
      idSlideForm2.reset();
      resetSelects(idSlideForm2, idBodyForm2);
    } else {
      mensajeDeEnvio("error", "Error sending, please try again later");
    }
  });

  function resetSelects(form1, form2) {
    const select1 = "helpWith";
    const select2 = "endProject";
    $(`#${form1.id} select[name='${select1}']`).niceSelect("update");
    $(`#${form1.id} select[name='${select2}']`).niceSelect("update");
    $(`#${form2.id} select[name='${select1}']`).niceSelect("update");
    $(`#${form2.id} select[name='${select2}']`).niceSelect("update");
  }

  function addressAutocomplete(mainId, sourceFormId, destinyFormId) {
    document.addEventListener("DOMContentLoaded", function () {
      const direccionInput = document.getElementById(mainId);
      const autocomplete = new google.maps.places.Autocomplete(direccionInput);

      autocomplete.addListener("place_changed", function () {
        $(`#${destinyFormId} input[name='propertyAddress']`).val(
          direccionInput.value
        );
        const place = autocomplete.getPlace();
        if (place && place.address_components) {
          let state, city;
          for (let i = 0; i < place.address_components.length; i++) {
            const component = place.address_components[i];
            if (component.types.includes("administrative_area_level_1")) {
              state = component.long_name;
            }
            if (component.types.includes("locality")) {
              city = component.long_name;
            }
          }
          $(`#${sourceFormId} input[name='city']`).val(city ? city : "");
          $(`#${sourceFormId} input[name='state']`).val(state ? state : "");
          $(`#${destinyFormId} input[name='city']`).val(city ? city : "");
          $(`#${destinyFormId} input[name='state']`).val(state ? state : "");
        }
      });
    });
  }

  addressAutocomplete("direccion-input", "id-slide-form1", "id-body-form1");
  addressAutocomplete("direccion-input2", "id-slide-form2", "id-body-form2");
  addressAutocomplete("direccion-input3", "id-body-form1", "id-slide-form1");
  addressAutocomplete("direccion-input4", "id-body-form2", "id-slide-form2");
})();
