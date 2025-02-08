<x-layout>
    <div class="note-container single-note">
        <h1 class="note-title">{{ $note->title }}</h1>
        <h2 class="note-date">{{ $note->created_at->diffForHumans() }}</h2>
        <div class="note-body">
            {{ $note->note }}
        </div>
        <div class="note-buttons">
            <a href="{{ route('note.show', $note) }}" class="note-show-button">Edit</a>
            <form action="{{ route('note.destroy', $note) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="note-delete-button">Delete</button>
            </form>
        </div>
    </div> 
</x-layout>
