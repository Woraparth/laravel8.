<h1>Profile : {{ $profile->id }}</h1>
<div>
    <strong>Name : </strong>
    <input value="{{ $profile->name }}" />
</div>
<div>
    <strong>Last Name : </strong>
    <input value="{{ $profile->lastname }}" />
</div>
<div>{{ $others }}</div>
<div><button type="submit">Save</button></div>