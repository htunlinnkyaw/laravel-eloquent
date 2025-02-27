<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Create</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
    <div class="max-w-md mx-auto mt-20 shadow-md p-10">
        <form method="post" action="{{route('post.store')}}" class="space-y-3">
            @csrf
            <h1 class="text-xl font-bold">Post Create</h1>
            <div class="mb-6 ">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Title</label>
                <input type="text" name="title" id="default-input" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div>
                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select User</label>
                <select name="user_ids[]" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class=" px-4 py-2 border border-black bg-black text-white rounded">
                Create Post
            </button>
        </form>
    </div>
</body>
</html>
