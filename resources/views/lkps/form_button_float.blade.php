      <div class="float">
          <a href="/lkps" class="btn-float back-lkps">
              <i class="fas fa-arrow-left"></i>
              <p>Kembali ke halaman Dashboard LKPS</p>

          </a>
          @if ($idTablePenilaian != null)
              <a href="/penilaian/{{ $idTablePenilaian }}" class="btn-float go-penilaian">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Menuju ke halaman Penilaian Matriks</p>
              </a>
          @endif
      </div>
