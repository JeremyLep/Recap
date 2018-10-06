$(document).ready(function() {
    $('.selectTag').select2({
        multiple:true,
        placeholder: 'Choisir des tags...'
    });
    $('.selectAddTag').select2({
        tags: true,
        tokenSeparators: [',', ' '],
        multiple:true,
        placeholder: 'Ajouter des nouveaux tags...'
    });
});