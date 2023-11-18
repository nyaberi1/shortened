@extends('layouts.app')
@section('content')
  <div class="flex flex-row w-full justify-center pt-4">
    <div class="card bg-base-200 shadow-xl p-4 px-5 gap-4">
      <div class="card bg-base-100 w-full p-2 px-4">
        <p class="text-xs">Original Link</p>
        <p>{{ $record->url }}</p>
      </div>

      <div class="form-control w-full">
        <label class="label">
          <span class="label-text"> Shortened Link</span>
        </label>

        <input id="urlInput" type="url" name="url" value="{{ url($record->slug) }}"
          class="input input-bordered w-full" />
      </div>

      <button class="btn btn-primary" onclick="copyUrl()" id="urlButton">
        Copy
      </button>

      <a class="text-primary underline text-center mb-2" href="{{ route('shortend.create') }}">
        Shortened Another Link
      </a>


    </div>
  </div>


  <script>
    function copyUrl() {
      // Get the text field
      const copyText = document.getElementById("urlInput");

      // Select the text field
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices

      // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.value);

      const btn = document.getElementById('urlButton');
      btn.innerText = 'Copied!';
      setTimeout(() => {
        btn.innerText = 'Copy';
      }, 5000);

      console.log('copied');
    }
  </script>
@endsection
