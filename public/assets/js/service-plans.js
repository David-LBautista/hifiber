$(document).ready(function () {
  $('#prices-table').DataTable({
    resposive: true
  });

  $('.dt-length').addClass('d-none');

  $('#dt-search-0').addClass('form-control');
  $('#prices-table_info').addClass('d-none');

  ClassicEditor
    .create(document.querySelector('#kt_docs_ckeditor_classic'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
});