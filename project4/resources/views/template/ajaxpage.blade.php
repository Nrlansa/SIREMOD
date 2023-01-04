@foreach ($data as $item)
    <div class="card">
        {{-- <h6 class="card-header">{{ $item->kategori }}
            @if ($item->id_perubahan && $item->file)
                <a href="{{ url('/status', $item->id_perubahan) }}" class="btn btn-primary float-end">Lihat
                    peraturan Baru</a>
                <a href="{{ asset('storage/' . $item->file) }}" class="btn btn-primary float-end mx-2">Lihat
                    Peraturan Lama</a>
            @elseif($item->file)
                <a href="{{ asset('storage/' . $item->file) }}" class="btn btn-primary float-end ">Lihat
                    disini</a>
            @elseif($item->id_perubahan)
                <a href="{{ '/status' . $item->id_perubahan }}" class="btn btn-primary float-end">Lihat
                    perubahan</a>
            @endif
        </h6> --}}
        <div class="card-body">
            <h6>
                <a style="color:black; font-size:16px; " href="{{ url('/status', $item->id) }}"
                    class="text-decoration-none text-muteds">
                    {{ $item->no_regulasi }}
                </a>
            </h6>
            <h6>
                <a style="color:black; font-size:16px; " href="{{ url('/status', $item->id) }}"
                    class="text-decoration-none text-muteds">
                    {{ $item->kategori }}
                </a>
            </h6>
            <h6>
                <a style="color:black; font-size:16px; " href="{{ url('/status', $item->id) }}"
                    class="text-decoration-none text-muteds">
                    {{ $item->tentang }}
                </a>
            </h6>
            {{-- <h6 class="card-title">{{ $item->tentang }}</h6> --}}
        </div>
    </div>
@endforeach
