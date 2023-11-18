@extends('layouts.app')
@section('content')
  <div class="flex flex-row w-full justify-center pt-4">
    <div class="card bg-base-200 shadow-xl p-4 px-5">
      <form action="{{ route('shortend.store') }}" method="post" class="flex flex-col gap-4">
        @csrf
        <div class="form-control w-full max-w-xs">
          <label class="label">
            <span class="label-text">Link</span>

          </label>

          <input type="url" name="url" placeholder="Enter link here" class="input input-bordered w-full max-w-xs" />
          @error('url')
            <label class="label">
              <span class="label-text-alt text-error">{{ $message }}</span>
            </label>
          @enderror

        </div>



        <button class="btn btn-primary" type="submit">
          Submit
        </button>
      </form>

    </div>
  </div>
@endsection
