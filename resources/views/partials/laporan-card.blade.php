<div class="card">
    <h3>Pelapor: {{ $item['nama'] }}</h3>
    <p><strong>Lokasi Kejadian:</strong> {{ $item['lokasi'] }}</p>
    <p><strong>Tinggi Genangan Air:</strong> {{ $item['tinggi_air'] }} cm</p>
    <p><strong>Tanggal Lapor:</strong> {{ $item['tanggal'] }}</p>
    
    <p><strong>Status Genangan:</strong> 
        @if($item['tinggi_air'] < 30)
            <span class="badge bg-waspada">Waspada</span>
        @elseif($item['tinggi_air'] >= 30 && $item['tinggi_air'] <= 70)
            <span class="badge bg-siaga">Siaga</span>
        @else
            <span class="badge bg-awas">Awas</span>
        @endif
    </p>
</div>