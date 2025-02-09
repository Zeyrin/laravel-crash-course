<x-app-layout>
    <div class="note-container single-note">
        <h1 class="note-title">New Note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note-form">
            @csrf
            <label for="title" class="note-label">Title</label>
            <input type="text" name="title" id="title" class="note-input" required>
            <label for="note" class="note-label">Note</label>
            <textarea name="note" id="note" class="note-textarea" required></textarea>
            <button type="submit" class="note-submit">Create</button>
        </form>
    </div>
</x-app-layout>
