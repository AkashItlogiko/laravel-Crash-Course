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

<div class="">
<div class="flex flex-col">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Id</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Description</th>
              <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Image</th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">John Brown</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">45</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">New York No. 1 Lake Park</td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
              </td>
            </tr>

            <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Jim Green</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">27</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">London No. 1 Lake Park</td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
              </td>
            </tr>

            <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Joe Black</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">31</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">Sidney No. 1 Lake Park</td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
              </td>
            </tr>

            <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Edward King</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">16</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">LA No. 1 Lake Park</td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
              </td>
            </tr>

            <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">Jim Red</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">45</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">Melbourne No. 1 Lake Park</td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
    </div>
    
</body>
</html>