<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="styles.css"> 
    

    <!-- custom css -->
    <style type="text/tailwindcss">
     .body{
        @apply font-serif;

     }

     .Container{
        max-width: 1240px;
        padding-left: 20px;
        padding-right: 20px;
        margin: 0 auto;
     }
     @screen sm {
        .Container {
            max-width: 390px;
        }
    }

    @screen md {
        .Container {
            max-width: 810px;
        }
    }

    .h1{
    font-size: 80px;
    color: white;
    font-family: sans-serif;
    font-weight: bold;
}
@media (max-width: 810px) {
    .h1 {
        font-size: 60px;
    }
}
@media (max-width: 390px) {
    .h1 {
        font-size: 40px;
    }
}


    </style>
    <title>Library Management Syetm</title>
</head>
<body class="body">
<!-- banner section -->
<section class="bg-teal-800 pt-[220px] pb-[120px]">
   <div class="Container">
   <div class="Content Wrapper">
         <div class="flex flex-col gap-[24px]  items-center">
            <h1 class="h1">Login To The System</h1>
            <p class="text-lg text-center text-gray-200 lg:max-w-[980px]  md:max-w-[650] sm:max-w-[600px]">The system login ensures secure access for users, librarians, and administrators. It verifies credentials, enabling role-based access to borrow books, manage inventory, and track library activities efficiently.</p>
         </div>
       </div>
   </div>
</section>
    
</body>
</html>