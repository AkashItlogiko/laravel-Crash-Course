<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
    @layer utilities {
     .container{
       @apply px-10 mx-auto 
     }
     .btn{
      @apply bg-green-600 text-white py-2 px-4
     }
    }
  </style>
    <title>Document</title>
</head>
<body>
    <div class='container'>
<div class='flex justify-between my-5'>
     <h2 class='text-red-500 text-xl'>Home</h2>
     <a href="/create" class="btn">Add New Post</a>
</div>
@if (session('success'))
<h2 class='text-green-500'>{{session('success')}}</h2>
@endif

<div class="">
<div class="flex flex-col">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 border border-green-300 my-5">
          <thead class="bg-green-600 text-white">
            <tr>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium   uppercase dark:text-neutral-500">Id</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase dark:text-neutral-500">Name</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase dark:text-neutral-500">Description</th>
              <th scope="col" class="px-6 py-3 text-end text-xs font-medium   uppercase dark:text-neutral-500">Image</th>
              <th scope="col" class="px-6 py-3 text-end text-xs font-medium   uppercase dark:text-neutral-500">Action</th> 
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$post->id}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$post->name}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$post->description}}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><img src="images/{{$post->image}}" width="80px" alt=""></td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
              <a href="{{route('edit',$post->id)}}" class="btn rounded">Edit</a>
           
              <form method="post" action="{{route('delete',$post->id)}}" class="inline">
                @csrf
                @method('delete')
              <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded">Delete</button>
              </form>

              </td>
            </tr>
            @endforeach
           
          </tbody>
        </table>
         {{$posts->links()}}
      </div>
    </div>
  </div>
</div>
</div>
    </div>
    
</body>
</html>