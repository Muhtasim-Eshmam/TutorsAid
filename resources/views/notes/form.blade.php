<div class="mb-3">
    <label for="classno" class="form-label">Class No.</label>
    <input type="text" value="{{ old('classno',isset($notes->classno)?$notes->classno:null )}}" classno="classno" class="form-control" id="classno" aria-describedby="topicHelp">
</div>

<div class="mb-3">
    <label for="topic" class="form-label">Topic</label>
    <input type="text" value="{{ old('topic',isset($notes->topic)?$notes->topic:null )}}" classno="topic" class="form-control" id="topic" aria-describedby="topicHelp">
</div>

<div class="mb-3">
    <label for="subject" class="form-label">Subject</label>
    <input type="text" value="{{ old('subject',isset($notes->subject)?$notes->subject:null )}}" classno="subject" class="form-control" id="subject" aria-describedby="topicHelp">
</div>

<div>
    <label for="formFileLg" class="form-label">Image Upload</label>
    <input type="file" value="{{ old('image',isset($notes->image)?$notes->image:null )}}" classno="notes" class="form-control form-control-sm" id="formFileLg">
</div>      