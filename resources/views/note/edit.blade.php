<x-layout>
    <h1 class="note-title">Edit Your Note</h1>
    <form action="{{ route('note.edit', $note) }}" method="PUT" class="note-form">
        @csrf
        @method('PUT')
        <label for="title" class="note-label">Title</label>
        <input type="text" name="title" id="title" class="note-input" value="{{ $note->title }}" required>
        <label for="note" class="note-label">Note</label>

        <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel </a>
</x-layout>
