📌[**See Finished App with All Branches Merged in allan/integration Branch**]📌
📌[**empowher/consolidated is for backup purposes**]📌

EmpowHer application aims to empower women by providing a platform for connection, professional development, and even self-improvement from various ages. Here's a breakdown of the product scope:

1. Job Opportunities
Enable job seekers to find relevant job opportunities to their liking.

2. Educational Programs:
Showcase a list of educational courses and programs aligned with career development or skill-building goals for every user.
Integrate with external learning platforms to allow users to directly enroll in courses.

3. Forum Page:
Foster a space for users to connect, share experiences, and engage in discussions on posts relevant to women's empowerment.

==============
## 👩‍💻 For Developers – Project Structure & Contribution Guide
Mohon untuk mengikuti dan membaca seksama strkture folder yang perlu dan tidak perlu di ketik.

✨Code jalanin laravel, git, dan materi ada di notion Notion : 
https://www.notion.so/PPPL-CODE-1f93449f1ec580309a79ef6b353172fa?pvs=4 


🗂 Folder Structure Overview
* [routes/web.php] → Tempat menuliskan semua rute (URL) halaman web (seperti halaman utama, login, dashboard, dsb) dan mengarahkannya ke controller method tertentu.

📌 jangan lupa tulis folder ini, jika setiap controller sudah aman dan views aman :  Route::get('/dashboard', [DashboardController::class, 'index']);

* resources/views/ → ini folder saat..Blade templates (frontend UI).

📌 Ini tempat codingan feature UI kita yaa (yang bsia di collab sama html)

* app/Http/Controllers/ → inii untuk Controllers for handling logic.

📌Controller untuk manage views UI nya, database sampai fungsi CRUD

* app/Models/ → ini untukk Eloquent models (database-related).

📌Untuk buat database 

* public/ → ini untukk Static files (images, CSS, JS).

📌ini untuk asset

## TUTORIAL LARAVEL: https://drive.google.com/drive/folders/1xrddB-_MNwyUmXcaak0XIf4dthG6Cipn

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

