


const sendEmail = async(url, body) => {
    const resp = await fetch(url, {
        method: 'POST',
        body: JSON.stringify(body),
        headers:{
          'Content-Type': 'application/json'
        }
    })/*.then(res => {
        console.log('enviado', res.json());
    })
    .catch(error => console.error('Error:', error))
    .then(response => console.log('Success:', response));*/


    return resp;
}



