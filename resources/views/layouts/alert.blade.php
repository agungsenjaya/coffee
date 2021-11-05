@if(Session::has('scs'))
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-transparent">
      <p class="me-auto mb-0 title-1 text-white"><i class="bi bi-check-circle me-2"></i>Notifications</p>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{ Session::get('scs') }}
    </div>
  </div>
</div>
@elseif(Session::has('err'))
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-transparent">
      <p class="me-auto mb-0 title-1 text-white"><i class="bi bi-x-circle me-2"></i>Notifications</p>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{ Session::get('err') }}
    </div>
  </div>
</div>
@endif