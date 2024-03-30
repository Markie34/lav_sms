
<div class="py-4">
    @csrf
    @if($materials->isNotEmpty())
        <ul>
            @foreach($materials as $material)
                <li>
                    
                    @if (pathinfo($material->file_path, PATHINFO_EXTENSION) === 'pdf')
                        <embed src="{{ asset('storage/' . $material->file_path) }}" type="application/pdf" width="100%" height="600px" />
                    @elseif (pathinfo($material->file_path, PATHINFO_EXTENSION) === 'docx')
                        <iframe src="https://view.officeapps.live.com/op/view.aspx?src={{ urlencode(asset('storage/' . $material->file_path)) }}" width="100%" height="400px" frameborder="0"></iframe>
                    @endif
                    <div>
                    <h1>{{ $material->title }}</h1> 
                    <p> {{ $material->description }}</p>
                    <a href="{{ asset('storage/' . $material->file_path) }}" target="_blank">Download</a>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No materials available.</p>
    @endif
</div>
