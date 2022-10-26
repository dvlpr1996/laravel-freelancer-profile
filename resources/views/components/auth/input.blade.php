<input type="{{ $type }}" name="{{ $name }}" value="{{ $old }}" class="input-bordered input h-11"
placeholder="{{ empty($place) ? $type : $place }}" required autofocus>

<x-auth.input-error :messages="$errors->get($name)" class="mt-2"/>
