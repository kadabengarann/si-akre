      <div class="float">
          <a href="/matriks{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}" class="btn-float back-penilaian">
              <i class="fas fa-arrow-left"></i>
              <p>Kembali ke halaman Dashboard Penilaian</p>

          </a>
      </div>
