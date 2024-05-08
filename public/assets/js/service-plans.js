let editorElement = null;

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

        editorElement = editor;
    })
    .catch(error => {
        console.error(error);
    });
});

$('body').on('click', '#edit-plan', async function() {
  const url = $(this).data('url');
  let token = $('meta[name="csrf-token"]').attr('content');

  try {
    const { data: { servicesPlans } } = await axios.get(`${url}`, {
      'headers': {
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': token
      }
    });
    
    console.log('servicesPlans :::', servicesPlans);

    var modalPLans = new bootstrap.Modal(document.getElementById('modal-plans'));
    modalPLans.show();

    $('input[name="id"]').val(servicesPlans.id);
    $('input[name="name"]').val(servicesPlans.name);
    $('input[name="ordering"]').val(servicesPlans.ordering);
    $('input[name="price"]').val(servicesPlans.price);
    $('input[name="color"]').val(servicesPlans.color);
    $('#cat_type_service option:eq('+ servicesPlans.cat_type_service +')').prop('selected', true)
    $('#cat_type_service_plan option:eq('+ servicesPlans.cat_type_service_plan +')').prop('selected', true)
    $('#cat_type_equipment option:eq('+ servicesPlans.cat_type_equipment +')').prop('selected', true)
    $('#description_short').html(servicesPlans.description_short);
    
    editorElement.setData(servicesPlans.description_long);
  } catch(error) {
    console.error('error ::', error);
  }
});