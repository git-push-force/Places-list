const doRequest = async () => {
    const data = {
        name: document.querySelector('#inputName').value,
        longitude: document.querySelector('#inputLongitude').value,
        latitude: document.querySelector('#inputLatitude').value,
        population: document.querySelector('#inputPopulation').value,
    };

    document.querySelector('.btn').classList.add('hidden');
    document.querySelector('.spinner').classList.remove('hidden');
    document.querySelector('span').classList.add('hidden');

    const res = await fetch(`http://localhost:8000/api/create?name=${data.name}&longitude=${data.longitude}&latitude=${data.latitude}&population=${data.population}`);

    if (res.ok) {
        document.querySelector('.alert-success').classList.remove('hidden');
        document.querySelector('.alert-danger').classList.add('hidden');
    } else {
        document.querySelector('.alert-success').classList.add('hidden');
        document.querySelector('.alert-danger').classList.remove('hidden');
    }

    document.querySelector('.btn').classList.remove('hidden');
    document.querySelector('span').classList.remove('hidden');
    document.querySelector('.spinner').classList.add('hidden');
}
 
document.querySelector('button').addEventListener('click', e => {
    e.preventDefault();
    doRequest();
});