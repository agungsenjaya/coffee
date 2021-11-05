<!-- Modal -->
<div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="modalLogoutLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <p class="modal-title">Notifications</p>
        <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Apakah anda yakin akan keluar dari dashboard admin?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-brown" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-warning" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Logout Now
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </a>
      </div>
    </div>
  </div>
</div>