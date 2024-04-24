$(document).ready(function () {
  $('#prices-table').DataTable({
    resposive: true
  });

  $('.dt-length').addClass('d-none');

  $('#dt-search-0').addClass('form-control');
  $('.paging_full_numbers').addClass('paginate_button page-item d-flex');
  $('.dt-paging-button').addClass('page-link');
  $('.dt-layout-cell').addClass('pagination');
  $('.dt-layout-row').addClass('d-flex');
  $('#prices-table_info').addClass('d-none');
});