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
/* h1 */
    .h1{
    font-size: 80px;
    color: white;
    font-family: sans-serif;
    font-weight: bold;
    text-align: center;
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

/* h2 */
.h2{
    font-size: 56px;
    font-family: sans-serif;
    font-weight: bold;
    text-align: center;
}
@media (max-width: 810px) {
    .h2 {
        font-size: 44px;
    }
}
@media (max-width: 390px) {
    .h2 {
        font-size: 36px;
    }
}


    </style>
    <title>Library Management Syetm</title>
</head>
<body class="body">
<!-- banner section -->
<section class="bg-teal-800 lg:pt-[220px] md:pt-[160px] pt-[140px] lg:pb-[120px] md:pb-[80px] pb-[60px]">
   <div class="Container">
   <div class="Content Wrapper">
         <div class="flex flex-col lg:gap-[24px] md:gap-[16px]  items-center">
            <h1 class="h1">Register To The System</h1>
            <p class="text-lg text-center text-gray-200 max-w-[980px]">The system login ensures secure access for users, librarians, and administrators. It verifies credentials, enabling role-based access to borrow books, manage inventory, and track library activities efficiently.</p>
         </div>
       </div>
   </div>
</section>

<!-- login Section -->
<section class="bg-white lg:pt-[120px] md:pt-[80px] pt-[60px] lg:pb-[120px] md:pb-[80px] pb-[60px]">
   <div class="Container">
   <div class="flex flex-col gap-[40px]">
         <div class="flex flex-col lg:gap-[24px] md:gap-[16px]  items-center">
            <h1 class="h2 text-teal-800">Please register to access your account</h1>
            <p class="text-lg text-center text-black max-w-[980px]">The system login ensures secure access for users, librarians, and administrators. It verifies credentials, enabling role-based access to borrow books, manage inventory, and track library activities efficiently.</p>
         </div>

         <div class="flex flex-row lg:gap-[24px] md:gap-[16px] items-center">
    <img class="w-full max-w-[300px] md:max-w-[400px] lg:max-w-[600px] h-auto rounded-2xl" 
         src="https://i.postimg.cc/KcT6wttJ/register-access-login-password-internet-online-website-concept-flat-illustration-385073-108.avif">
    
    <!-- form -->
    <form method="post"  class="max-w-[600px] p-6 border border-black rounded-lg w-full gap-[20px] flex flex-col" action="/submit">
        <div>
            <label for="name" class="block font-medium text-teal-800 mb-2 text-lg">Name</label>
            <input type="text" name="name" placeholder="Name" 
                   class="p-4 w-full border text-gray-600 font-bold border-gray-800 rounded-lg 
                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                          transition-all duration-300">
        </div>
        <div>
            <label for="email" class="block font-medium text-teal-800 mb-2 text-lg">Email</label>
            <input type="email" name="email" placeholder="Email" 
                   class="p-4 w-full text-gray-600 border font-bold border-gray-800 rounded-lg 
                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                          transition-all duration-300">
        </div>
        <div>
            <label for="password" class="block text-teal-800 font-medium mb-2 text-lg">Password</label>
            <input type="password" name="Pass" placeholder="Password" 
                   class="p-4 w-full border text-gray-600 font-bold border-gray-800 rounded-lg 
                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                          transition-all duration-300">
        </div>
        <div>
            <label for="confirm_password" class="block text-teal-800 font-medium mb-2 text-lg">Confirm Password</label>
            <input type="password" name="CPass" placeholder="Password" 
                   class="p-4 w-full border text-gray-600 font-bold border-gray-800 rounded-lg 
                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                          transition-all duration-300">
        </div>

        <button class="w-full p-3 bg-teal-700 hover:bg-black text-white rounded-lg text-lg" type="submit">
            Register
        </button>
    </form>
</div>

       </div>
   </div>
</section>
</body>
</html>