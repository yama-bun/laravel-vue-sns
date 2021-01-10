@csrf
<div class="md-form">
    <label for="title">タイトル</label>
    <input type="text" name="title" id="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
    <label for=""></label>
    <textarea class="form-control" name="body" id="" rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>
