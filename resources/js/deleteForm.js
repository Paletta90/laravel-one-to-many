const deleteForm = document.querySelectorAll('.delete-form')

deleteForm.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const confirmation = confirm('Sei sicuro di voler cancellare il post?');
        if(confirmation) e.target.submit();
    });
});

