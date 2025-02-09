<x-app-layout>
    <div class="note-container single-note">
        <h1 class="note-title">{{ $note->title }}</h1>
        <h1 class="note-date text-3xl py-4">{{ $note->created_at }}</h1>
        <div class="note-body">
            {{ $note->note }}
        </div>
        <div class="note-buttons">
            <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
            <form action="{{ route('note.destroy', $note) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="note-delete-button">Delete</button>
            </form>
            <a href="{{ route('note.index')}}" class="note-index-button">Index</a>
        </div>
    </div> 
</x-app-layout>
