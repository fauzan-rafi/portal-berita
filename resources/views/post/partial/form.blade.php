<div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $post->title }}">
      @error('title')
            <div class="invalid-feedback">
                  {{ $message }}
            </div>
      @enderror
</div>

<div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror"> {{ old('body') ?? $post->body }}  </textarea>
      @error('body')
            <div class="invalid-feedback">
                  {{ $message }}
            </div>
      @enderror
</div>

<br>
<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update' }}</button>