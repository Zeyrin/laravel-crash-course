<x-app-layout>
    <h1 class="note-title">Edit Your Note</h1>
    <form action="{{ route('note.update', $note) }}" method="POST" class="note">
        <textarea name="note" rows="10" class="note-body" placeholder="Enter note here">{{ $note->note }}</textarea>
        @csrf
        @method('PUT')
        <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
        <button class="note-submit-button">Submit</button>
    </form>
</x-app-layout>
