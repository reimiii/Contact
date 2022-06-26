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


