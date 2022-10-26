<input type="{{ $type }}" name="{{ $name }}" class="input-bordered input h-11 w-full"
		placeholder="{{ $place }}" required autofocus
		 value="{{ $value }}">

<x-auth.input-error :messages="$errors->get($name)" class="mt-2" />
