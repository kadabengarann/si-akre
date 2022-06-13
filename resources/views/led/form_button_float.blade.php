      <div class="float">
          <a href="/led{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn-float back-lkps">
              <i class="fas fa-arrow-left"></i>
              <p>Kembali ke halaman Dashboard LED</p>
          </a>
          @if (request()->is('led/261'))
              <a href="/led/all{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn-float back-lkps">
                  <i class="fas fa-arrow-left"></i>
                  <p>Finish</p>
              </a>
          @endif

      </div>
