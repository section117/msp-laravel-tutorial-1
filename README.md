# Basic Layering of Laravel
public/index.php -> routes -> route found -> controller -> DB -> view (HTML) -> browser

# How to deploy on local (One time process)
<ul>
<li>Clone the repository.</li>
<li>Run <code>composer install</code>in the terminal.</li> 
<li>Take a copy of <code>.env.example</code> file and rename it as <code>.env</code></li>
<li>Run <code>php artisan key:generate</code> in the terminal</li>
<li>Fill the necessary properties in <code>.env</code> file such as Database Credentials</li>
<li>Run <code>php artisan migrate:fresh</code> to deploy the database.</li>
<li>Run <code>php artisan db:seed</code> to insert the seeds to the database.</li>
</ul>

#How to start the Server
<ul>
<li>Run <code>php artisan serve</code> in the terminal.</li>
</ul>
