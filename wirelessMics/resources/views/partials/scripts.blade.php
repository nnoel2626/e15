<script type="text/javascript">
   $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var role_id = button.data('roleid')
      var modal = $(this)
      modal.find('.modal-body #role_id').val(role_id);
})



$('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var user_id = button.data('userid')
      var modal = $(this)
      modal.find('.modal-body #user_id').val(user_id);
})


$('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var tag_id = button.data('tagid')
      var modal = $(this)
      modal.find('.modal-body #tag_id').val(tag_id);
})


$('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var microphone_id = button.data('microphoneid')
      var modal = $(this)
      modal.find('.modal-body #microphone_id').val(microphone_id);
})


</script>
{{-- @section('extra-script')
    @endsection --}}
