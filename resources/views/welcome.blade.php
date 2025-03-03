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
    }
  </style>
    <title>Document</title>
</head>
<body>
    <div class='container'>
<div class='flex justify-between my-5'>
     <h2 class='text-red-500 text-xl'>Home</h2>
     <a href="/create" class="bg-green-500 text-white rounded py-2 px-4">Add New Post</a>
</div>
@if (session('success'))
<h2 class='text-green-500'>{{session('success')}}</h2>
@endif
    </div>
    
</body>
</html>