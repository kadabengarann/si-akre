      <div class="float">
          <a href="/lkps{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn-float back-lkps">
              <i class="fas fa-arrow-left"></i>
              <p>Kembali ke halaman Dashboard LKPS</p>
          </a>
          @if ($idTableMatriks != null)
              <a href="/matriks/{{ $idTableMatriks }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                  class="btn-float go-matriks">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Menuju ke halaman Matriks Matriks</p>
              </a>
          @endif
      </div>
