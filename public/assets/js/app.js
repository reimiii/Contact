document.getElementById('c_id_filter').addEventListener('change', function () {
    let cId = this.value || this.options[this.selectedIndex].value;
    window.location.href = window.location.href.split('?')[0] + '?c_id=' + cId;
})

document.querySelectorAll('.btn-delete').forEach((button) => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        if (confirm('Are you sure you want to delete this item?')) {
            let action = this.getAttribute('href');
            let form = document.getElementById('form-delete');
            form.setAttribute('action', action);

            form.submit();
        }
    })
})


document.getElementById('btn-clear').addEventListener('click', () => {
    let inputs = document.getElementById('search'),
        select = document.getElementById('c_id_filter');

    inputs.value = '';
    select.selectedIndex = 0;

    window.location.href = window.location.href.split('?')[0];
})

const toggleClearButton = () => {
    let query = location.search,
        pattern = /[?&]search=([^&]*)/,
        button = document.getElementById('btn-clear');
    if (pattern.test(query)) {
        button.style.display = 'block';
    } else {
        button.style.display = 'none';
    }
}

toggleClearButton()