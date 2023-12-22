 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta name="viewport"
     content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

   <link rel="stylesheet"
     href="style.css">
   <link rel="stylesheet"
     href="../../styles/global.css">

   <title>Sign Up</title>
 </head>

 <body>

   <div class="container">
     <form action="../../controller/register.php"
       method="POST"
       class="login-email">
       <p class="login-text"
         style="font-size: 2rem; font-weight: 800;">Daftar</p>
       <div class="input-group">
         <input type="text"
           placeholder="Username"
           name="username"
           required>
       </div>
       <div class="input-group">
         <input type="email"
           placeholder="Email"
           name="email"
           required>
       </div>
       <div class="input-group">
         <input type="password"
           placeholder="Password"
           name="password"
           required>
       </div>
       <div class="input-group">
         <input type="password"
           placeholder="Re-password"
           name="rePassword"
           required>
       </div>
       <div class="input-group">
         <button name="submit"
           class="button-secondary w-100">Daftar</button>
       </div>
       <p class="login-register-text">Apa kah kamu punya aku? <a href="../login-buyer">Masuk</a></p>
     </form>
   </div>
 </body>

 </html>