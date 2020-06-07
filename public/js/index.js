const showSpinner = () => {
    document.querySelector('.spinner').classList.remove('hidden');
    document.querySelector('span').classList.add('hidden');
    document.querySelector('.btn').disabled = true;
}

const hideSpinner = () => {
    document.querySelector('span').classList.remove('hidden');
    document.querySelector('.spinner').classList.add('hidden');
    document.querySelector('.btn').disabled = false;
}

const showSuccessAlert = () => {
    document.querySelector('.alert-success').classList.remove('hidden');
    document.querySelector('.alert-danger').classList.add('hidden');
}

const showDangerAlert = () => {
    document.querySelector('.alert-success').classList.add('hidden');
    document.querySelector('.alert-danger').classList.remove('hidden');
}

const doRequest = async () => {
    const data = {
        name: document.querySelector('#inputName').value,
        longitude: document.querySelector('#inputLongitude').value,
        latitude: document.querySelector('#inputLatitude').value,
        population: document.querySelector('#inputPopulation').value,
    };

    showSpinner();
    const res = await fetch(`http://localhost:8000/api/create?name=${data.name}&longitude=${data.longitude}&latitude=${data.latitude}&population=${data.population}`);
    hideSpinner();

    if (res.ok) {
        showSuccessAlert();
    } else {
        showDangerAlert();
    }
}
 
document.querySelector('button').addEventListener('click', e => {
    e.preventDefault();
    doRequest();
});